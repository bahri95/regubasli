<?php

	class Berita extends MY_Controller {

		

		function  __construct() {

			// load application base

			parent::__construct();

			$this->PrivateAppBase();
			$this->load->library('image_lib');

		}



		public

		function index() {

			// template content

			$this->smarty->assign("template_content", "private/berita/list");

			// load

			$this->load->model('beritamodel');

			$this->load->library('notification');

			$this->load->library('pagination');

			$this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");

			$this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");

			// get data

			$data = $this->beritamodel->get_list_berita_private();

			

			if(!empty($data)):

			foreach($data as $k=>$row):

			$pathdok = 'doc/berita/'.$row['id_berita'].'/'.$row['image'];

			

			if(!is_file($pathdok)):

			$data[$k]['image'] = ''; else :

			$data[$k]['image'] = BASEURL.$pathdok;

			endif;

			

		
			endforeach;

			endif;

			$this->smarty->assign("data", $data);

			$this->smarty->assign("no",1);

			//$this->smarty->assign("total", $totaldata);

			// parse url

			$this->smarty->assign('url_add', site_url('private/berita/add'));

			$this->smarty->assign('url_list', site_url('private/berita/index'));

			$this->smarty->assign('url_process', site_url('private/berita/process/hapus'));

			$this->smarty->assign('url_edit', site_url('private/berita/edit'));

			// notification

			$arr_notify = $this->notification->get_notification();

			// notification

			$this->smarty->assign("notification_msg", $arr_notify['message']);

			$this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':

			'green'));

			// display document

			$this->parser->parse('private/base-layout/document.html');

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

				case 'download':

					$this->download_lampiran();

					break;

				default :

					// default redirect

					redirect('private/berita/add');

					break;

			}



	}



	public

	function add() {

		// template content

		$this->smarty->assign("template_content", "private/berita/add");

		//load

		$this->load->library('notification');

		$this->load->model('beritamodel');

		$data = $this->beritamodel->get_list_relawan_private();
		$this->smarty->assign("data", $data);
		// url

		$listasosiasi = $this->beritamodel->get_list_asosiasi();

		$this->smarty->assign('listasosiasi', $listasosiasi);

		$this->smarty->assign("url_add", site_url("private/berita/add"));

		$this->smarty->assign("url_list", site_url("private/berita"));

		

		$this->smarty->assign("url_process", site_url("private/berita/process/add"));

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

		$this->parser->parse('private/base-layout/document.html');

	}



	public

	function process_add() {

		// load library

		$this->load->model('beritamodel');

		$this->load->library('notification');

		$this->load->library("uploader");

		// set rules

		$this->notification->check_post('id_relawan', 'Relawan', 'required');

		$this->notification->check_post('judul', 'Judul', 'required');

		$this->notification->check_post('content', 'Konten', 'required');

		$this->notification->check_post('tanggal', 'Tanggal', 'required');

		// run

		

		if ($this->notification->valid_input()) {

			// params

			$params = array('id_relawan' => $this->input->post('id_relawan'),                    
				'judul' => $this->input->post('judul'),                    
				'content' => $this->input->post('content'),                    
				'tanggal' => $this->input->post('tanggal'),
				'keterangan_gambar' => $this->input->post('keterangan_gambar'));

			// execute

			

			if($this->beritamodel->process_berita_add($params)) {

				$id_berita = $this->db->insert_id();

				
				if (!empty($_FILES['foto']['tmp_name'])) {
                   // set rules (kosongkan jika tidak menggunakan batasan sama sekali)
                   $config['upload_path']  = "doc/berita/" . $id_berita . '/';

                   $config['allowed_types']= 'gif|jpg|png|jpeg';
                	$config['min_width']            = 400;
                	$config['min_height']           = 300;
                   
                   $config['file_name'] = $id_berita.'_'.$_FILES['foto']['name'];
                    if(!is_dir($config['upload_path'])):
                    mkdir($config['upload_path']);
                    endif;
                   $this->load->library('upload', $config);
                    // proses upload
                    if ($this->upload->do_upload("foto")) {
                    $id_beria = $this->db->insert_id();
                       $data       = $this->upload->data();
                        $foto = $data['file_name'];
                        // //resize
                       $config['image_library'] = 'gd2';
                        $config['source_image']  = "doc/berita/".$id_berita.'/'.$foto;
                        $config['source_image']  = "doc/berita/".$id_berita.'/'.$foto;                       
                        $config['width']     = '400';
                        $config['height']   = '300';
                        
                        $this->image_lib->initialize($config); 
                        
                        
                        $this->image_lib->resize();
                        $this->db->set("image",$foto);

                        $this->db->where("id_berita", $id_berita);

                        $this->db->update("berita_m");

                    } else {
                        //echo $this->upload->message;
                        $this->notification->set_message("File Gambar gagal diupload, file gambar tidak memenuhi kriteria");
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

		redirect('private/berita/add');

	}



	public

	function edit() {

		// template content

		$this->smarty->assign("template_content", "private/berita/edit");

		// load

		$this->load->model('beritamodel');

		$this->load->library('notification');

		$this->load->library('DateTimeManipulation');

		// get asosiasi

		$relawan = $this->beritamodel->get_list_relawan_private();

		$this->smarty->assign('relawan', $relawan);

		// parse url

		$this->smarty->assign("url_add", site_url("private/berita/add"));

		$this->smarty->assign("url_list", site_url("private/berita"));

		$this->smarty->assign("url_process", site_url("private/berita/process/edit"));

		// data

		$id_berita = $this->uri->segment(4, 0);

		$data = $this->beritamodel->get_berita_by_id($id_berita);

		$path = 'doc/berita/'.$data['id_berita']."/";

		

		if(is_file($path.$data['image'])){

			
			$data['image_berita'] = '<img src="'.BASEURL.$path.$data['image'].'" border="0" height="200px">';

		} else {

			$data['image_berita']= '-tidak ada gambar- ';

		}



		$this->smarty->assign("image_berita", $data['image_berita']);

		


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

		$this->parser->parse('private/base-layout/document.html');

	}



	

	function display_ukuran_file($ukuran_file = 0){

		

		if($ukuran_file >= 1048576):

		$ukuran =  number_format(($ukuran_file/1048576),2,".",",");

		return $ukuran." MB"; else :

		$ukuran = ceil($ukuran_file/1024);

		return $ukuran." Kb";

		endif;

	}



	public

	function download_lampiran(){

		$this->load->model('beritamodel');

		$this->load->helper('download');

		// data

		$id_berita = $this->uri->segment(5,0);

		$data = $this->beritamodel->get_berita_by_id($id_berita);

		$dir = 'doc/berita/' . $id_berita. '/'.$data['file_berita'];

		

		if(is_file($dir)):

		$filedata = file_get_contents($dir);

		force_download($data['file_berita'], $filedata);

		endif;

		redirect('private/berita/edit/'.$id_berita);

	}



	public

	function process_edit() {

		// load library

		$this->load->model('beritamodel');

		$this->load->library('notification');

		$this->load->library("uploader");

		// set rules

		$this->notification->check_post('id_relawan', 'Relawan', 'required');

		$this->notification->check_post('judul', 'Judul', 'required');

		$this->notification->check_post('content', 'Konten', 'required');

		$this->notification->check_post('tanggal', 'Tanggal', 'required');

		// run

		

		if ($this->notification->valid_input()) {

			// params

			$params = array('id_relawan' => $this->input->post('id_relawan'),                    
				'judul' => $this->input->post('judul'),                    
				'content' => $this->input->post('content'),                    
				'tanggal' => $this->input->post('tanggal'),
				'keterangan_gambar' => $this->input->post('keterangan_gambar'),
				'id_berita' => $this->input->post('id_berita'));

			// execute

			

			if($this->beritamodel->process_berita_edit($params)) {

				$id_berita = $this->input->post('id_berita');

				

				if (!empty($_FILES['foto']['tmp_name'])) {
					$this->uploader->remove_dir('doc/berita/'.$id_berita."/");
                   // set rules (kosongkan jika tidak menggunakan batasan sama sekali)
                   $config['upload_path']  = "doc/berita/" . $id_berita . '/';

                   $config['allowed_types']= 'gif|jpg|png|jpeg';
              
                	$config['min_width']            = 400;
                	$config['min_height']           = 300;
                   
                   $config['file_name'] = $id_berita.'_'.$_FILES['foto']['name'];
                    if(!is_dir($config['upload_path'])):
                    mkdir($config['upload_path']);
                    endif;
                   $this->load->library('upload', $config);
                    // proses upload
                    if ($this->upload->do_upload("foto")) {
                    $id_berita = $this->input->post('id_berita');
                       $data       = $this->upload->data();
                        $foto = $data['file_name'];
                        //resize
                         $config['image_library'] = 'gd2';
                        $config['source_image']  = "doc/berita/".$id_berita.'/'.$foto;
                        $config['source_image']  = "doc/berita/".$id_berita.'/'.$foto;                       
                        $config['width']     = '400';
                        $config['height']   = '300';
                        
                        $this->image_lib->initialize($config); 
                        
                        
                        $this->image_lib->resize();
              
					
						

                        $this->db->set("image",$foto);

                        $this->db->where("id_berita", $id_berita);

                        $this->db->update("berita_m");

                    } else {
                        //echo $this->upload->message;
                        $this->notification->set_message("File Gambar gagal diupload, file gambar tidak memenuhi kriteria");
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

		redirect('private/berita/edit/'.$this->input->post('id_berita'));

	}



	public

	function process_hapus() {

		// load library

		$this->load->library('notification');

		$this->load->library('uploader');

		$this->load->model('beritamodel');

		// set rules

		$this->notification->check_post('id_berita', 'id', 'required');

		// run

		

		if ($this->notification->valid_input()) {

			// params

			$params = $this->input->post('id_berita');

			

			if(is_array($params)):

			// execute

			foreach($params as $id):

			$berita = $this->beritamodel->get_berita_by_id($id);

			$this->beritamodel->process_berita_delete($id);

			$this->uploader->remove_dir('doc/berita/'.$id."/");

			endforeach;

			$this->notification->clear_post();

			$this->notification->set_message("Data berhasil dihapus");

			$this->notification->sent_notification(true); else :

			$this->notification->set_message("Tidak ada data yang terpilih untuk dihapus!");

			$this->notification->sent_notification(false);

			endif;

		}



		// default redirect

		redirect('private/berita');

	}



	public

	function hapusgambar() {

		// load library

		$this->load->library('notification');

		$this->load->library('uploader');

		$this->load->model('beritamodel');

		// set rules

		$id_berita = $this->uri->segment(5, 0);

		// run

		

		if (!empty($id_berita)) {

			// params

			$this->db->set('image','');

			$this->db->where('id_berita' , $id_berita);

			$this->db->update('berita_m');

			$this->uploader->remove_dir('doc/berita/'.$id_berita."/");

			$this->notification->set_message("Gambar berhasil dihapus");

			$this->notification->sent_notification(true);

		}



		// default redirect

		redirect('private/berita/edit/'.$id_berita);

	}



}