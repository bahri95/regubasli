<?php
	class Video extends MY_Controller {
		
		function  __construct() {
			// load application base
			parent::__construct();
			$this->PrivateAppBase();
		}

		public
		function index() {
			// template content
			$this->smarty->assign("template_content", "private/video/list");
			// load
			$this->load->model('videomodel');
			$this->load->library('notification');
			$this->load->library('pagination');
			//paginationf
			$this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");
			$this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");
			// get data
			$data = $this->videomodel->get_list_video_limit();
			$no  = 1;
			
			if(!empty($data)):
			foreach($data as $key=>$val):
			$file_img = 'doc/tmp/video_default.jpg';
			$file_video = '';
			$path_img = 'doc/video/'.$val['id_video'].'/'.$val['video_image'];
			
			if(is_file($path_img)):
			$file_img = $path_img;
			endif;
			
			if($val['tipe'] == 'upload'):
			$data[$key]['tipe'] = 'File Video';
			$file_video = 'doc/video/'.$val['id_video'].'/'.$val['video_file'];
			$data[$key]['video_file'] = "<object id=\"flowplayer".$no."\" width=\"560\" height=\"315\" data=\"".BASEURL."doc/player/flowplayer-3.1.5.swf"."\" 
											type=\"application/x-shockwave-flash\">
											<param name=\"movie\" value=\"doc/player/flowplayer-3.1.5.swf\" /> 
											<param name=\"allowfullscreen\" value=\"true\" />
											<param name=\"quality\" value=\"autohigh\" /> 
     										 <param name=\"bgcolor\" value=\"#000000\" /> 
											<param name=\"flashvars\" 
												value='config={\"clip\":{\"url\":\"".BASEURL.$file_video."\",\"autoBuffering\":true,\"autoPlay\":false}}' />
										</object>"; else :
			$data[$key]['video_file'] = $val['video_embed'];
			$data[$key]['tipe'] = 'Embed Video Situs Lain';
			endif;
			endforeach;
			endif;
			$this->smarty->assign("data", $data);
			$this->smarty->assign("no", 1);
			//$this->smarty->assign('baseurl', BASEURL.'doc/video/');
			// parse url
			$this->smarty->assign('url_add', site_url('private/video/add'));
			$this->smarty->assign('url_list', site_url('private/video/index'));
			$this->smarty->assign('url_edit', site_url('private/video/edit'));
			$this->smarty->assign('url_process', site_url('private/video/process/hapus'));
			// notification
			$arr_notify = $this->notification->get_notification();
			// notification
			$this->smarty->assign("notification_msg", $arr_notify['message']);
			$this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
			'green'));
			// display document
			$this->parser->parse( 'private/base-layout/document.html');
		}

		// switcher
		public
		function process($action) {
			switch($action) {
				case 'add':
					$this->process_add();
					break;
				case 'edit':
					$this->process_edit();
					break;
				case 'hapus':
					$this->process_hapus();
					break;
				case 'hapusgambar':
					$this->hapusgambar();
					break;
				case 'upload':
					$this->process_uploadvideo();
					break;
				case 'embed':
					$this->process_embedvideo();
					break;
				case 'display':
					$this->display();
					break;
				default :
					// default redirect
					redirect('private/video/add');
					break;
			}

	}

	public
	function add() {
		// template content
		$this->smarty->assign("template_content", "private/video/add");
		//load
		$this->load->library('notification');
		// url
		$this->smarty->assign("url_add", site_url("private/video/add"));
		$this->smarty->assign("url_list", site_url("private/video"));
		$this->smarty->assign("url_process", site_url("private/video/process/add"));
		// notification
		$arr_notify = $this->notification->get_notification();
		
		if(!empty($arr_notify['post'])) {
			$this->smarty->assign("data", $arr_notify['post']);
		}

		// notification
		$this->smarty->assign("notification_msg", $arr_notify['message']);
		$this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
		'green'));
		// display document
		$this->parser->parse( 'private/base-layout/document.html');
	}

	public
	function process_add() {
		// load library
		$this->load->model('videomodel');
		$this->load->library('notification');
		$this->load->library("uploader");
		// set rules
		$this->notification->check_post('judul_video', 'Judul Video', 'required');

		$this->notification->check_post('tipe', 'Tipe Video', 'required');
		// run
		
		if ($this->notification->valid_input()) {
			// params
			$params = array('judul' => $this->input->post('judul_video'),                    
				'keterangan' => $this->input->post('keterangan'),                    
				'sumber' => $this->input->post('sumber'),                
				'tipe' => $this->input->post('tipe'));
			// execute
			
			if($this->videomodel->process_video_add($params)) {
				$tipe = $this->input->post('tipe');
				$id_video = $this->db->insert_id();
				
				if (!empty($_FILES['image_video']['tmp_name'])) {
					// set file attachment
					$this->uploader->set_file($_FILES['image_video']);
					// set rules (kosongkan jika tidak menggunakan batasan sama sekali)
					// $rules = array('allowed_filesize' => 512000);
					// $this->uploader->set_rules($rules);
					$this->uploader->set_file_name($id_video);
					// direktori
					$dir = 'doc/video/' . $id_video . '/';
					// proses upload
					
					if ($this->uploader->upload_image($dir, 400)) {
						$this->db->set("video_image",$this->uploader->get_file_name());
						$this->db->where("id_video", $id_video);
						$this->db->update("video_m");
						//redirect('private/video/form/'.$id_video);
					} else {
						//echo $this->upload->message;
						$this->notification->set_message("File Gambar gagal diupload");
						$this->notification->sent_notification(false);
					}

				}

				$this->notification->clear_post();
				
				if($tipe == 'embed'):
				$this->notification->set_message("Data berhasil disimpan, Lanjutkan dengan MEMASUKAN SCRIPT EMBED VIDEO pada KOTAK EMBED SCRIPT!"); else :
				$this->notification->set_message("Data berhasil disimpan, Lanjutkan dengan MENGUPLOAD FILE VIDEO dengan menekan TOMBOL UPLOAD VIDEO!");
				endif;
				$this->notification->sent_notification(true);
				redirect('private/video/edit/'.$id_video);
				//redirect('private/video/form/'.$id_video);
			} else {
				$this->notification->set_message("Data gagal disimpan");
				$this->notification->sent_notification(false);
				redirect('private/video/add');
			}

		} else {
			$this->notification->sent_notification(false);
			redirect('private/video/add');
		}

		// default redirect
		redirect('private/video/add');
	}

	public
	function edit() {
		// template content
		$this->smarty->assign("template_content", "private/video/edit");
		// load
		$this->load->model('videomodel');
		$this->load->library('notification');
		$this->load->library('DateTimeManipulation');
		//$this->layout->load_javascript('js/ajaxupload.3.5.js');
		$id_video = $this->uri->segment(4, 0);
		// parse url
		$this->smarty->assign("url_add", site_url("private/video/add"));
		$this->smarty->assign("url_list", site_url("private/video"));
		$this->smarty->assign("url_process", site_url("private/video/process/edit"));
		$this->smarty->assign("url_upload", site_url("private/video/process/upload"));
		$this->smarty->assign("url_video", site_url("private/video/process/display/".$id_video));
		// data
		$data = $this->videomodel->get_video_by_id($id_video);
		$this->smarty->assign("id_video", $data['id_video']);
		$path = 'doc/video/'.$data['id_video']."/";
		$file_img = '';
		
		if(is_file($path.$data['video_image'])){
			$file_img = 'doc/video/'.$data['id_video']."/".$data['video_image'];
			$data['video_image'] = '<img src="'.BASEURL.$path.$data['video_image'].'" border="0" width="120">';
		} else {
			$data['video_image']= '-tidak ada gambar- ';
			$file_img = 'doc/tmp/video_default.jpg';
		}

		
		if($data['tipe'] == 'upload'):
		$tipe_video= 'File Video Upload';
		
		if(is_file($path.$data['video_file'])){
			$file_video = 'doc/video/'.$data['id_video'].'/'.$data['video_file'];
			$data['video_file'] = "<object id=\"flowplayer"."\" width=\"560\" height=\"315\" data=\"".BASEURL."doc/player/flowplayer-3.1.5.swf"."\" 
											type=\"application/x-shockwave-flash\">
											<param name=\"movie\" value=\"".BASEURL."doc/player/flowplayer-3.1.5.swf\" /> 
											<param name=\"allowfullscreen\" value=\"true\" />
											<param name=\"quality\" value=\"autohigh\" /> 
     										 <param name=\"bgcolor\" value=\"#000000\" /> 
											<param name=\"flashvars\" 
												value='config={\"clip\":{\"url\":\"".BASEURL.$file_video."\",\"autoBuffering\":false,\"autoPlay\":false}}' />
										</object>";
		} else {
			$data['video_file']= '';
		} else :
		$data['video_file'] = $data['video_embed'];
		$tipe_video = 'Embed Video dari situs lain';
		endif;
		$this->smarty->assign("tipe_video", $tipe_video);
		$this->smarty->assign("data", $data);
		// notification
		$arr_notify = $this->notification->get_notification();
		
		if(!empty($arr_notify['post'])) {
			$this->smarty->assign("data", $arr_notify['post']);
		}

		// notification
		$this->smarty->assign("notification_msg", $arr_notify['message']);
		$this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
		'green'));
		// display document
		$this->parser->parse( 'private/base-layout/document.html');
	}

	public
	function process_edit() {
		// load library
		$this->load->model('videomodel');
		$this->load->library('notification');
		$this->load->library("uploader");
		// set rules
		$this->notification->check_post('id_video', 'Id video', 'required');
		$this->notification->check_post('judul_video', 'Judul', 'required');
		$this->notification->check_post('tipe', 'Tipe', 'required');
		// run
		
		if ($this->notification->valid_input()) {
			// params
			$params = array(     'judul_video' => $this->input->post('judul_video'),                    
				'keterangan' => $this->input->post('keterangan'),                    
				'sumber' => $this->input->post('sumber'),
				'tipe' => $this->input->post('tipe'),
				 'id_video' => $this->input->post('id_video'));
			// execute
			
			if($this->videomodel->process_video_edit($params)) {
				$tipe = $this->input->post('tipe');
				
				if($tipe == 'embed'):
				$params = array(                    'video_embed' => $this->input->post('video_embed'),                    'id_video' => $this->input->post('id_video'));
				$this->videomodel->process_update_embed($params);
				endif;
				$id_video = $this->input->post('id_video');
				
				if (!empty($_FILES['image_video']['name'])) {
					// set file attachment
					$this->uploader->set_file($_FILES['image_video']);
					// set rules (kosongkan jika tidak menggunakan batasan sama sekali)
					// $rules = array('allowed_filesize' => 512000);
					// $this->uploader->set_rules($rules);
					$this->uploader->set_file_name($id_video);
					// direktori
					$dir = 'doc/video/' . $id_video . '/';
					// proses upload
					
					if ($this->uploader->upload_image($dir, 400)) {
						$this->db->set("video_image", $this->uploader->get_file_name());
						$this->db->where("id_video", $id_video);
						$this->db->update("video_m");
					} else {
						$this->notification->set_message("Data gagal disimpan");
						$this->notification->set_message("File Gambar gagal diupload, ".$this->uploader->message);
						$this->notification->sent_notification(false);
					}

				}
			
				$this->notification->clear_post();
				
				$this->notification->set_message("Data berhasil disimpan");
				
				$this->notification->sent_notification(true);
			} else {
				$this->notification->set_message("Data gagal disimpan");
				$this->notification->sent_notification(false);
			}

		} else {
			$this->notification->sent_notification(false);
		}

		// default redirect
		redirect('private/video/edit/'.$this->input->post('id_video'));
	}

	public
	function display() {
		// template content
		$this->smarty->assign("template_content", "private/video/edit");
		// load
		$this->load->model('videomodel');
		$this->load->library('notification');
		$this->load->library('DateTimeManipulation');
		$id_video = $this->uri->segment(5, 0);
		$data = $this->videomodel->get_video_by_id($id_video);
		$path = 'doc/video/'.$data['id_video'].'/';
		
		if($data['tipe'] == 'upload'):
		
		if(is_file($path.$data['video_image'])){
			$file_img = 'doc/video/'.$data['id_video']."/".$data['video_image'];
			$data['video_image'] = '<img src="'.BASEURL.$path.$data['video_image'].'" border="0" width="120">';
		} else {
			$data['video_image']= '-tidak ada gambar- ';
			$file_img = 'doc/tmp/video_default.jpg';
		}

		
		if(is_file($path.$data['video_file'])){
			$file_video = 'doc/video/'.$data['id_video'].'/'.$data['video_file'];
			$data['video_file'] = "<object id=\"flowplayer"."\" width=\"560\" height=\"315\" data=\"".BASEURL."doc/player/flowplayer-3.1.5.swf"."\" 
											type=\"application/x-shockwave-flash\">
											<param name=\"movie\" value=\"doc/player/flowplayer-3.1.5.swf\" /> 
											<param name=\"allowfullscreen\" value=\"true\" />
											<param name=\"quality\" value=\"autohigh\" /> 
     										 <param name=\"bgcolor\" value=\"#000000\" /> 
											<param name=\"flashvars\" 
												value='config={\"clip\":{\"url\":\"".BASEURL.$file_video."\",\"autoBuffering\":false,\"autoPlay\":false} }' />
										</object>";
		} else {
			$data['video_file']= '';
		} else :
		$data['video_file'] = $val['video_embed'];
		endif;
		echo $data['video_file'];
	}

	public
	function form() {
		// template content
		$this->smarty->assign("template_content", "private/video/upload");
		// load
		//$this->layout->load_javascript('js/ajaxupload.3.5.js');
		$this->load->model('videomodel');
		$this->load->library('notification');
		//$this->load->library('DateTimeManipulation');
		$id_video = $this->uri->segment(4, 0);
		// parse url
		$this->smarty->assign("url_add", site_url("private/video/add"));
		$this->smarty->assign("url_edit", site_url("private/video/edit/".$id_video));
		$this->smarty->assign("url_list", site_url("private/video"));
		$this->smarty->assign("id_video", $id_video);
		$this->smarty->assign("url_video", site_url("private/video/process/display/".$id_video));
		// data
		$data = $this->videomodel->get_video_by_id($id_video);
		$this->smarty->assign("data", $data);
		
		if($data['tipe'] == 'upload'):
		$view_form = 'upload';
		$this->smarty->assign("url_process", site_url("private/video/process/upload")); else :
		$view_form = 'embed';
		$this->smarty->assign("url_process", site_url("private/video/process/embed"));
		endif;
		$this->smarty->assign("view_form", $view_form);
		// notification
		$arr_notify = $this->notification->get_notification();
		
		if(!empty($arr_notify['post'])) {
			$this->smarty->assign("data", $arr_notify['post']);
		}

		// notification
		$this->smarty->assign("notification_msg", $arr_notify['message']);
		$this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
		'green'));
		// display document
		$this->parser->parse( 'private/base-layout/document.html');
	}

	public
	function process_uploadvideo() {
		// load library
		$this->load->library('notification');
		$this->load->library('uploader');
		$this->load->model('videomodel');
		// set rules
		$this->notification->check_post('id_video', 'id', 'required');
		// run
		
		if ($this->notification->valid_input()):
		// params
		$id_video = $this->input->post('id_video');
		
		if(strlen($_FILES['video_file']['name'])>0):
		$data = $this->videomodel->get_video_by_id($id_video);
		$video_lama = 'doc/video/'.$data['id_video'].'/'.$data['video_file'];
		
		if(is_file($video_lama)):
		unlink($video_lama);
		endif;
		$_FILES['video_file']['name'] = $id_video."_".$_FILES['video_file']['name'];
		$this->uploader->set_file($_FILES['video_file']);
		// set rules (kosongkan jika tidak menggunakan batasan sama sekali)
		$rules = array('allowed_filesize' => 110100480);
		$this->uploader->set_rules($rules);
		//$this->uploader->set_file_name();
		// direktori
		$dir = 'doc/video/' . $id_video . '/';
		// proses upload
		
		if ($this->uploader->upload_file($dir, 220)) {
			$this->db->set("video_file", $this->uploader->get_file_name());
			$this->db->where("id_video", $id_video);
			$this->db->update("video_m");
			echo "success";
		} else {
			echo "File gagal di upload, ".$this->uploader->message;
		} else :
		echo "File tidak ada!";
		endif; else :
		echo "gagal ".$this->uploader->message;
		endif;
	}

	public
	function process_embedvideo() {
		// load library
		$this->load->model('videomodel');
		$this->load->library('notification');
		$this->load->library("uploader");
		// set rules
		$this->notification->check_post('id_video', 'Id video', 'required');
		$this->notification->check_post('video_embed', 'Script Embed', 'required');
		// run
		
		if ($this->notification->valid_input()) {
			$this->db->set('video_embed', $this->input->post('video_embed'));
			$this->db->where('id_video', $this->input->post('id_video'));
			$this->db->update('video_m');
			$this->notification->clear_post();
			$this->notification->set_message("Data berhasil disimpan");
			$this->notification->sent_notification(true);
		} else {
			$this->notification->set_message("Data gagal disimpan");
			$this->notification->sent_notification(false);
			redirect('private/video/form/'.$this->input->post('id_video'));
		}

		// default redirect
		redirect('private/video/');
	}

	public
	function process_hapus() {
		// load library
		$this->load->library('notification');
		$this->load->library('uploader');
		$this->load->model('videomodel');
		// set rules
		$this->notification->check_post('id_video', 'id', 'required');
		// run
		
		if ($this->notification->valid_input()) {
			// params
			$params = $this->input->post('id_video');
			
			if(is_array($params)):
			// execute
			foreach($params as $id):
			$video = $this->videomodel->get_video_by_id($id);
			$this->videomodel->process_video_delete($id);
			$this->uploader->remove_dir('doc/video/'.$id."/");
			endforeach;
			$this->notification->clear_post();
			$this->notification->set_message("Data berhasil dihapus");
			$this->notification->sent_notification(true); else :
			$this->notification->set_message("Tidak ada data yang terpilih untuk dihapus!");
			$this->notification->sent_notification(false);
			endif;
		}

		// default redirect
		redirect('private/video');
	}

}