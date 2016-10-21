<?php
    class Foto extends MY_Controller {
        
        function  __construct() {
            // load application base
            parent::__construct();
            $this->PrivateAppBase();
            $this->load->library('image_lib');
        }

        public
        function index() {
            // template content
            $this->smarty->assign("template_content", "private/foto/list");
            // load
            $this->load->model('fotomodel');
            $this->load->library('notification');
            $this->load->library('pagination');
            $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");
            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");
            //get data
            $data = $this->fotomodel->get_list_album_limit();
            
            $this->smarty->assign("data", $data);
            $this->smarty->assign("no",1);
            // $this->smarty->assign("total", $totaldata);
            //parse url
            $this->smarty->assign('url_add', site_url('private/foto/add'));
            $this->smarty->assign('url_add_foto', site_url('private/foto/add_foto'));
            $this->smarty->assign('url_list', site_url('private/foto/index'));
            $this->smarty->assign('url_process', site_url('private/foto/process/hapus'));
            $this->smarty->assign('url_edit', site_url('private/foto/edit'));
            $this->smarty->assign("url_list_foto", site_url("private/foto/list_foto"));
            // notification
            $arr_notify = $this->notification->get_notification();
            // notification
            $this->smarty->assign("notification_msg", $arr_notify['message']);
            $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
            'green'));
            // display document
            $this->parser->parse('private/base-layout/document.html');
        }

        public
        function list_foto() {
            // template content
            $this->smarty->assign("template_content", "private/foto/list_foto");
            // load
            $this->load->model('fotomodel');
            $this->load->library('notification');
            $this->load->library('pagination');
            $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");
            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");
            //get data
            $params = $this->uri->segment(4,0);
            $data = $this->fotomodel->get_list_foto_limit_private($params);
            
            if(!empty($data)):
            foreach($data as $k=>$row):
            $pathdok = 'doc/album/'.$row['id_album'].'/'.$row['id_foto'].'/'.$row['foto'];
            
            if(!is_file($pathdok)):
            $data[$k]['foto'] = ''; else :
            $data[$k]['foto'] = BASEURL.$pathdok;
            endif;
            endforeach;
            endif;
            $this->smarty->assign("data", $data);
            $this->smarty->assign("no", 1);
            // $this->smarty->assign("total", $totaldata);
            $params = $this->uri->segment(4,0);
            $album = $this->fotomodel->get_album_by_id($params);
            $this->smarty->assign("album", $album);
            //parse url
            $this->smarty->assign('url_add', site_url('private/foto/add'));
            $this->smarty->assign('url_add_foto', site_url('private/foto/add_foto'));
            $this->smarty->assign('url_list', site_url('private/foto/index'));
            $this->smarty->assign('url_process', site_url('private/foto/process/hapusfoto'));
            $this->smarty->assign('url_edit_foto', site_url('private/foto/edit_foto'));
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
                case 'add_foto':
                    $this->process_add_foto();
                    break;
                case 'edit':
                    $this->process_edit();
                    break;
                case 'edit_foto':
                    $this->process_edit_foto();
                    break;
                case 'hapus':
                    $this->process_hapus();
                    break;
                case 'hapusfoto':
                    $this->process_hapus_foto();
                    break;
                case 'hapusgambar':
                    $this->hapusgambar();
                    break;
                case 'hapusgambarfoto':
                    $this->hapusgambarfoto();
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
        $this->smarty->assign("template_content", "private/foto/add");
        //load
        $this->load->library('notification');
        $this->load->model('fotomodel');
        // url
        $this->smarty->assign("url_add", site_url("private/foto/add"));
        $this->smarty->assign("url_list", site_url("private/foto"));
        $this->smarty->assign("url_process", site_url("private/foto/process/add"));
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
        $this->load->library('image_lib');
        $this->load->model('fotomodel');
        $this->load->library('notification');
        $this->load->library("uploader");
        // set rules
        $this->notification->check_post('nama_album', 'Nama Album', 'required');
         $this->notification->check_post('tanggal', 'Tanggal', 'required');
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = array('nama_album' => $this->input->post('nama_album'),                  
                'tanggal' => $this->input->post('tanggal'));
            // execute
            if($this->fotomodel->process_album_add($params)):   
                $this->notification->clear_post();
                $this->notification->set_message("Data berhasil disimpan");
                $this->notification->sent_notification(true);
                redirect('private/foto');
                else:
                    $this->notification->set_message("Data gagal disimpan");
                    $this->notification->sent_notification(false);
                endif;
        } else {
            $this->notification->sent_notification(false);
        }

        // default redirect
        redirect('private/foto/add');
    }

    public
    function add_foto() {
        // template content
        $this->smarty->assign("template_content", "private/foto/add_foto");
        //load
        $this->load->library('notification');
        $this->load->model('fotomodel');
        // url
        $params = $this->uri->segment(4,0);
        $album = $this->fotomodel->get_album_by_id($params);
        $this->smarty->assign("album", $album);
        $this->smarty->assign("url_add", site_url("private/foto/add"));
        $this->smarty->assign("url_list", site_url("private/foto"));
        $this->smarty->assign("url_process", site_url("private/foto/process/add_foto"));
        $this->smarty->assign("url_add_foto", site_url("private/foto/add_foto"));
        $this->smarty->assign("url_list_foto", site_url("private/foto/list_foto"));
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
    function process_add_foto() {
        // load library
        $this->load->library('image_lib');
        $this->load->model('fotomodel');
        $this->load->library('notification');
        $this->load->library("uploader");
        // set rules
        $this->notification->check_post('judul_foto', 'Judul Foto', 'required');
        $this->notification->check_post('urutan', 'Urutan', 'required');
      
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = array('id_album' => $this->input->post('id_album'),
                        'judul_foto' => $this->input->post('judul_foto'),
                        'urutan' => $this->input->post('urutan'));
            // execute
            
            if($this->fotomodel->process_foto_add($params)) {
              $id_album = $this->input->post('id_album');
                $id_foto = $this->db->insert_id();
              
                $urutan = $this->input->post('urutan');
                
                
                  if (!empty($_FILES['foto']['tmp_name'])) {

					// set file attachment

					$_FILES['foto']['name'] = $id_foto.'_'.$_FILES['foto']['name'];

					$this->uploader->set_file($_FILES['foto']);

					// set rules (kosongkan jika tidak menggunakan batasan sama sekali)

					// direktori

					$dir = 'doc/album/' . $id_album . '/'. $id_foto .'/';

					// proses upload

					

					if ($this->uploader->upload_image($dir,1000)) {
					// $image_foto = $_FILES['foto']['name'];
					// 	 $config['image_library']    = 'gd2';
			  //                       $config['source_image'] = "doc/album/".$id_album.'/'.$id_foto .'/'.$image_foto ;
			  //                       $config['wm_type']          = 'overlay';
			  //                       $config['wm_overlay_path']  = 'doc/album/dmsi.png'; //the overlay image
			  //                       $config['wm_opacity']       = 20;
			  //                       $config['wm_vrt_alignment'] = 'middle';
			  //                       $config['wm_hor_alignment'] = 'center';
			  //                       $config['wm_padding'] = '1';
			
			
			  //                       $this->image_lib->initialize($config);
			
			  //                       $this->image_lib->watermark();

						$this->db->set("foto",$this->uploader->get_file_name());

						$this->db->where("id_foto", $id_foto);

						$this->db->update("foto_m");

					

					} else {

						//echo $this->upload->message;

						$this->notification->set_message("File Gambar gagal diupload");

						$this->notification->sent_notification(false);

					}



				}

                $this->notification->clear_post();
                $this->notification->set_message("Data berhasil disimpan");
                $this->notification->sent_notification(true);
                redirect('private/foto/add_foto/'.$id_album);
            } else {
                $this->notification->set_message("Data gagal disimpan");
                $this->notification->sent_notification(false);
            }

            // default redirect
        } else {
            $this->notification->sent_notification(false);
            $this->notification->set_message("Urutan sudah ada");
        }

        redirect('private/foto/add_foto/'.$id_album);
    }

    public
    function edit() {
        // template content
        $this->smarty->assign("template_content", "private/foto/edit");
        // load
        $this->load->model('fotomodel');
        $this->load->library('notification');
        $this->load->library('DateTimeManipulation');
        // parse url
        $this->smarty->assign("url_add", site_url("private/foto/add"));
        $this->smarty->assign("url_list", site_url("private/foto"));
        $this->smarty->assign("url_process", site_url("private/foto/process/edit"));
        // data
        /// GET DATA album
        $album = $this->fotomodel->get_list_album();
        $this->smarty->assign("album", $album);
        $id_album = $this->uri->segment(4, 0);
        $data = $this->fotomodel->get_album_by_id($id_album);
      
        ///ASIGN DATA variable nya ke smarty
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

    public
    function process_edit() {
        // load library
        $this->load->model('fotomodel');
        $this->load->library('notification');
        $this->load->library("uploader");
      
        // set rules
        $this->notification->check_post('nama_album', 'Nama Album', 'required');
        
        $this->notification->check_post('tanggal', 'Tanggal', 'required');
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = array( 'nama_album' => $this->input->post('nama_album'),                     
                'tanggal' => $this->input->post('tanggal'),
                'id_album' => $this->input->post('id_album'));
            // execute
            
            if($this->fotomodel->process_album_edit($params)) {
                $id_album = $this->input->post('id_album');
                if (!empty($_FILES['image_album']['tmp_name'])) {
                   
                    $config['upload_path']  = "doc/album/image_album/" . $id_album . '/';
                    $config['allowed_types']= 'gif|jpg|png|jpeg';
                    $config['max_size'] = '4000';
                   
                   $config['file_name'] = $id_album.'_'.$_FILES['image_album']['name'];
                    if(!is_dir($config['upload_path'])):
                    mkdir($config['upload_path']);
                    endif;
                    $this->load->helper("file");
                        $path = "doc/album/image_album/".$id_album.'/'.$image_album;
                        delete_files($path);
                   $this->load->library('upload', $config);

                    // proses upload
                    if ($this->upload->do_upload("image_album")) {
                        $data       = $this->upload->data();
                        $image_album = $data['file_name'];
                        $tanggal = $this->input->post('tanggal');
                        

                        //image
                        $config['image_library']    = 'gd2';
                        $config['source_image'] = "doc/album/image_album/".$id_album.'/'.$image_album;
                        $config['wm_type']          = 'overlay';
                        $config['wm_overlay_path']  = 'doc/album/dmsi.png'; //the overlay image
                        $config['wm_opacity']       = 20;
                        $config['wm_vrt_alignment'] = 'middle';
                        $config['wm_hor_alignment'] = 'center';
                        $config['wm_padding'] = '1';


                        $this->image_lib->initialize($config);

                        $this->image_lib->watermark();

                        //resize
                         $config['image_library'] = 'gd2';
                        $config['source_image']  = "doc/album/image_album/".$id_album.'/'.$image_album;
                        $config['new_image']  = "doc/album/image_album/".$id_album.'/'.$image_album;
                        
                        $config['width']     = '772';
                        $config['height']   = '514';
                        
                        $this->image_lib->initialize($config); 
                        
                        
                        $this->image_lib->resize();
                        $this->db->set("image_album",$image_album);

                        $this->db->where("id_album", $id_album);

                        $this->db->update("album_m");

                        $this->notification->clear_post();
                        $this->notification->set_message("Foto album berhasil diupload");
                        $this->notification->sent_notification(true);
                        redirect('private/foto/edit/'.$this->input->post('id_album'));

                    } else {
                        //echo $this->upload->message;
                        $this->notification->set_message("File Gambar gagal diupload, file gambar tidak memenuhi kriteria");
                        $this->notification->sent_notification(false);
                    }

                }

                $this->notification->clear_post();
                $this->notification->set_message("Data berhasil disimpan");
                $this->notification->sent_notification(true);
                redirect('private/foto/edit/'.$this->input->post('id_album'));
            } else {
                $this->notification->set_message("Data gagal disimpan");
                $this->notification->sent_notification(false);
            }

        } else {
            $this->notification->sent_notification(false);
        }

        // default redirect
        redirect('private/foto/edit/'.$this->input->post('id_album'));
    }

   
    public
    function edit_foto() {
        // template content
        $this->smarty->assign("template_content", "private/foto/edit_foto");
        $this->smarty->assign("url_list_foto", site_url("private/foto/list_foto"));
        // load
        $this->load->model('fotomodel');
        $this->load->library('notification');
        $this->load->library('DateTimeManipulation');
        // parse url
        $this->smarty->assign("url_add", site_url("private/foto/add"));
        $this->smarty->assign("url_list", site_url("private/foto"));
        $this->smarty->assign("url_process", site_url("private/foto/process/edit_foto"));
        // data
        /// GET DATA album
        $album = $this->fotomodel->get_list_album();
        $this->smarty->assign("album", $album);
        $id_foto = $this->uri->segment(5, 0);
        $data = $this->fotomodel->get_foto_by_id($id_foto);
        $params = $this->uri->segment(4,0);
        $album = $this->fotomodel->get_album_by_id($params);
        $this->smarty->assign("album", $album);
        $path = 'doc/album/'.$data['id_album']."/".$data['id_foto']."/";
        
        if(is_file($path.$data['foto'])){
            $url_hapus_foto = site_url('private/foto/process/hapusgambarfoto/')."/".$data['id_album']."/".$data['id_foto'] ;
            $data['foto'] = '<img src="'.BASEURL.$path.$data['foto'].'" border="0" height="200px"><br /><input type="button" value="Hapus Gambar" onClick="javascript:document.location=\''.$url_hapus_foto.'\';">';
        } else {
            $data['foto']= '-tidak ada gambar- ';
        }

        $this->smarty->assign("foto", $data['foto']);
        ///ASIGN DATA variable nya ke smarty
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

    public
    function process_edit_foto() {
        // load library
        $this->load->model('fotomodel');
        $this->load->library('notification');
        $this->load->library("uploader");
        // set rules
        $this->notification->check_post('judul_foto', 'Judul Foto', 'required');
        $this->notification->check_post('urutan', 'Urutan', 'required');
        
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = array( 'judul_foto' => $this->input->post('judul_foto'), 
                'urutan' => $this->input->post('urutan'),                     
                 'id_foto' => $this->input->post('id_foto'));
            // execute
            
            if($this->fotomodel->process_foto_edit($params)) {
                $id_album = $this->input->post('id_album');
                $id_foto = $this->input->post('id_foto');
                $urutan = $this->input->post('urutan');
                
               if (!empty($_FILES['foto']['tmp_name'])) {

					// set file attachment

					$_FILES['foto']['name'] = $id_foto.'_'.$_FILES['foto']['name'];

					$this->uploader->set_file($_FILES['foto']);

					// set rules (kosongkan jika tidak menggunakan batasan sama sekali)

					// direktori

					$dir = 'doc/album/' . $id_album . '/'. $id_foto .'/';

					// proses upload

					 $this->uploader->remove_dir('doc/album/'.$id_album."/".$id_foto);

					if ($this->uploader->upload_image($dir,1000)) {
					// $image_foto = $_FILES['foto']['name'];
					// 	 $config['image_library']    = 'gd2';
			  //                       $config['source_image'] = "doc/album/".$id_album.'/'.$id_foto .'/'.$image_foto ;
			  //                       $config['wm_type']          = 'overlay';
			  //                       $config['wm_overlay_path']  = 'doc/album/dmsi.png'; //the overlay image
			  //                       $config['wm_opacity']       = 20;
			  //                       $config['wm_vrt_alignment'] = 'middle';
			  //                       $config['wm_hor_alignment'] = 'center';
			  //                       $config['wm_padding'] = '1';
			
			
			  //                       $this->image_lib->initialize($config);
			
			  //                       $this->image_lib->watermark();

						$this->db->set("foto",$this->uploader->get_file_name());

						$this->db->where("id_foto", $id_foto);

						$this->db->update("foto_m");

					

					} else {

						//echo $this->upload->message;

						$this->notification->set_message("File Gambar gagal diupload");

						$this->notification->sent_notification(false);

					}

                }

                $this->notification->clear_post();
                $this->notification->set_message("Data berhasil disimpan");
                $this->notification->sent_notification(true);
                redirect('private/foto/edit_foto/'.$this->input->post('id_album').'/'.$this->input->post('id_foto'));
            } else {
                $this->notification->set_message("Data gagal disimpan");
                $this->notification->sent_notification(false);
            }

        } else {
            $this->notification->sent_notification(false);
        }

        // default redirect
        redirect('private/foto/edit_foto/'.$this->input->post('id_album').'/'.$this->input->post('id_foto'));
    }

    public
    function process_hapus() {
        // load library
        $this->load->library('notification');
        $this->load->library('uploader');
        $this->load->model('fotomodel');
        // set rules
        $this->notification->check_post('id_album', 'id', 'required');
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = $this->input->post('id_album');
            
            if(is_array($params)):
            // execute
            foreach($params as $id):
            $album = $this->fotomodel->get_album_by_id($id);
            $this->fotomodel->process_album_delete($id);
            $this->fotomodel->process_foto_delete_album($id);
            $this->uploader->remove_dir('doc/album/image_album/'.$id."/");
            $this->uploader->remove_dir('doc/album/'.$id."/");
            endforeach;
            $this->notification->clear_post();
            $this->notification->set_message("Data berhasil dihapus");
            $this->notification->sent_notification(true); else :
            $this->notification->set_message("Tidak ada data yang terpilih untuk dihapus!");
            $this->notification->sent_notification(false);
            endif;
        }

        // default redirect
        redirect('private/foto');
    }

    public
    function process_hapus_foto() {
        // load library
        $this->load->library('notification');
        $this->load->library('uploader');
        $this->load->model('fotomodel');
        // set rules
        $this->notification->check_post('id_foto', 'id', 'required');
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = $this->input->post('id_foto');
            $id_album = $this->input->post('id_album');
            
            if(is_array($params)):
            // execute
            foreach($params as $id):
            $id_album = $this->input->post('id_album');
            $foto = $this->fotomodel->get_foto_by_id($id);
            $this->fotomodel->process_foto_delete($id);
            $this->uploader->remove_dir('doc/album/'.$id_album."/".$id."/");
            endforeach;
            $this->notification->clear_post();
            $this->notification->set_message("Data berhasil dihapus");
            $this->notification->sent_notification(true); else :
            $this->notification->set_message("Tidak ada data yang terpilih untuk dihapus!");
            $this->notification->sent_notification(false);
            endif;
        }

        // default redirect
        redirect('private/foto/list_foto/'.$id_album);
    }

    public
    function hapusgambar() {
        // load library
        $this->load->library('notification');
        $this->load->library('uploader');
        $this->load->model('fotomodel');
        // set rules
        $id_album = $this->uri->segment(5, 0);
        // run
        
        if (!empty($id_album)) {
            // params
            $this->db->set('image_album','');
            $this->db->where('id_album' , $id_album);
            $this->db->update('album_m');
            $this->uploader->remove_dir('doc/album/image_album/'.$id_album."/");
            $this->notification->set_message("Gambar berhasil dihapus");
            $this->notification->sent_notification(true);
        }

        // default redirect
        redirect('private/foto/edit/'.$id_album);
    }

    public
    function hapusgambarfoto() {
        // load library
        $this->load->library('notification');
        $this->load->library('uploader');
        $this->load->model('fotomodel');
        // set rules
        $id_foto = $this->uri->segment(6, 0);
        $id_album = $this->uri->segment(5, 0);
        // run
        
        if (!empty($id_foto)) {
            // params
            $this->db->set('foto','');
            $this->db->where('id_foto' , $id_album);
            $this->db->update('foto_m');
            $this->uploader->remove_dir('doc/album/'.$id_album."/".$id_foto."/");
            $this->notification->set_message("Gambar berhasil dihapus");
            $this->notification->sent_notification(true);
        }

        // default redirect
        redirect('private/foto/edit_foto/'.$id_album.'/'. $id_foto);
    }

}