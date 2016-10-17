<?php
    class Relawan extends MY_Controller {
        
        function  __construct() {
            // load application base
            parent::__construct();
            $this->PrivateAppBase();
            $this->load->library('image_lib');
        }

        public
        function index() {
            // template content
            $this->smarty->assign("template_content", "private/relawan/list");
            // load
            $this->load->model('relawanmodel');
            $this->load->library('notification');
            $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");
            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");
            // get data
            $data = $this->relawanmodel->get_list_relawan();
            $this->smarty->assign("data", $data);
           
            $this->smarty->assign("no", 1);
            // parse url
            $this->smarty->assign('url_add', site_url('private/relawan/add'));
            $this->smarty->assign('url_list', site_url('private/relawan/index'));
            $this->smarty->assign('url_edit', site_url('private/relawan/edit'));
            $this->smarty->assign('url_delete', site_url('private/relawan/hapus'));
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
                default :
                    // default redirect
                    redirect('private/relawan/add');
                    break;
            }

    }

    public
    function add() {
        // template content
        $this->smarty->assign("template_content", "private/relawan/relawan-add");
        //load
        $this->load->library('notification');
        //$this->layout->load_javascript("js/tinymce/tiny_mce.js");
        
        // url
        $this->smarty->assign("url_add", site_url("private/relawan/add"));
        $this->smarty->assign("url_list", site_url("private/relawan"));
        $this->smarty->assign("url_process", site_url("private/relawan/process/add"));
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
        $this->load->model('relawanmodel');
        $this->load->library('notification');
        $this->load->library('uploader');
        // set rules
        $this->notification->check_post('nama', 'Nama', 'required');
        $this->notification->check_post('jabatan', 'Jabatan', 'required');
        $this->notification->check_post('content', 'Konten', 'required');
        $this->notification->check_post('deskripsi', 'Deskripsi', 'required');
        $this->notification->check_post('pendidikan', 'Pendidikan', 'required');
        $this->notification->check_post('riwayat', 'Riwayat', 'required');
        $this->notification->check_post('penghargaan', 'Penghargaan', 'required');
        $this->notification->check_post('order_num', 'Urutan', 'required');

        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = array('nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),                    
                'content' => $this->input->post('content'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pendidikan' => $this->input->post('pendidikan'),
                'riwayat' => $this->input->post('riwayat'),
                'penghargaan' => $this->input->post('penghargaan'),                    
                'order_num' => $this->input->post('order_num'));
            // execute
            
            if($this->relawanmodel->process_relawan_add($params)) {
                 $id_relawan = $this->db->insert_id();
                if (!empty($_FILES['foto']['tmp_name'])) {
                   // set rules (kosongkan jika tidak menggunakan batasan sama sekali)
                   $config['upload_path']  = "doc/relawan/" . $id_relawan . '/';

                   $config['allowed_types']= 'gif|jpg|png|jpeg';
                   $config['max_size'] = '4000';
                   
                   $config['file_name'] = $id_relawan.'_'.$_FILES['foto']['name'];
                    if(!is_dir($config['upload_path'])):
                    mkdir($config['upload_path']);
                    endif;
                   $this->load->library('upload', $config);
                    // proses upload
                    if ($this->upload->do_upload("foto")) {
                        $id_relawan = $this->db->insert_id();
                       $data       = $this->upload->data();
                        $foto = $data['file_name'];
                        // //resize
                        //  $config['image_library'] = 'gd2';
                        // $config['source_image']  = "doc/relawan/".$id_relawan.'/'.$foto;
                        // $config['source_image']  = "doc/relawan/".$id_relawan.'/'.$foto;                       
                        // $config['width']     = '772';
                        // $config['height']   = '514';
                        
                        // $this->image_lib->initialize($config); 
                        
                        
                        // $this->image_lib->resize();
                        $this->db->set("foto",$foto);

                        $this->db->where("id_relawan", $id_relawan);

                        $this->db->update("relawan_m");

                    } else {
                        //echo $this->upload->message;
                        $this->notification->set_message("File Gambar gagal diupload, file gambar tidak memenuhi kriteria");
                        $this->notification->sent_notification(false);
                       
                    }
                }

                $this->notification->clear_post();
                $this->notification->set_message("Data berhasil disimpan");
                $this->notification->sent_notification(true);
                redirect('private/relawan/add');
            } else {
                $this->notification->set_message("Data gagal disimpan");
                $this->notification->sent_notification(false);
            }

        } else {
            $this->notification->sent_notification(false);
        }

        // default redirect
        redirect('private/relawan/add');
    }

    public
    function edit() {
        // template content
        $this->smarty->assign("template_content", "private/relawan/relawan-edit");
        // load
        $this->load->model('relawanmodel');
        $this->load->library('notification');
        // parse url
        $this->smarty->assign("url_add", site_url("private/relawan/add"));
        $this->smarty->assign("url_list", site_url("private/relawan"));
        $this->smarty->assign("url_process", site_url("private/relawan/process/edit"));
        // data
        $id_info = $this->uri->segment(4, 0);
        $data = $this->relawanmodel->get_relawan_by_id($id_info);
        
          $this->smarty->assign("data", $data);
        
        // notification
        $arr_notify = $this->notification->get_notification();
        
        if(!empty($arr_notify['post'])) {
            $this->smarty->assign("data", $arr_notify['post']);
        }

        /// GET DATA foto
        $id_relawan = $this->uri->segment(4, 0);
        $data = $this->relawanmodel->get_relawan_by_id($id_relawan);
        $path = 'doc/relawan/'.$id_relawan."/";
        
        if(is_file($path.$data['foto'])){
            $data['foto'] = '<img src="'.BASEURL.$path.$data['foto'].'" border="0" height="200px">';
        } else {
            $data['foto']= '-tidak ada gambar- ';
        }

        $this->smarty->assign("foto", $data['foto']);

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
        $this->load->model('relawanmodel');
        $this->load->library('notification');
        $this->load->library('uploader');
         // set rules
        $this->notification->check_post('nama', 'Nama', 'required');
        $this->notification->check_post('jabatan', 'Jabatan', 'required');
        $this->notification->check_post('content', 'Konten', 'required');
        $this->notification->check_post('deskripsi', 'Deskripsi', 'required');
        $this->notification->check_post('pendidikan', 'Pendidikan', 'required');
        $this->notification->check_post('riwayat', 'Riwayat', 'required');
        $this->notification->check_post('penghargaan', 'Penghargaan', 'required');
        $this->notification->check_post('order_num', 'Urutan', 'required');

        // run
        
        if ($this->notification->valid_input()) {
            // params
             $params = array('nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),                    
                'content' => $this->input->post('content'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pendidikan' => $this->input->post('pendidikan'),
                'riwayat' => $this->input->post('riwayat'),
                'penghargaan' => $this->input->post('penghargaan'),                    
                'order_num' => $this->input->post('order_num'),
                'id_relawan' => $this->input->post('id_relawan'));
            // execute
            
            if($this->relawanmodel->process_relawan_edit($params)) {
                 $id_relawan = $this->input->post('id_relawan');
                if (!empty($_FILES['foto']['tmp_name'])) {
                     $this->uploader->remove_dir('doc/relawan/' . $id_relawan . '/');
                   // set rules (kosongkan jika tidak menggunakan batasan sama sekali)
                   $config['upload_path']  = "doc/relawan/" . $id_relawan . '/';

                   $config['allowed_types']= 'gif|jpg|png|jpeg';
                   $config['max_size'] = '4000';
                   
                   $config['file_name'] = $id_relawan.'_'.$_FILES['foto']['name'];
                    if(!is_dir($config['upload_path'])):
                    mkdir($config['upload_path']);
                    endif;
                   
                   $this->load->library('upload', $config);
                    // proses upload
                    if ($this->upload->do_upload("foto")) {
                    $id_album = $this->db->insert_id();
                       $data       = $this->upload->data();
                        $foto = $data['file_name'];
                        // //resize
                        //  $config['image_library'] = 'gd2';
                        // $config['source_image']  = "doc/relawan/".$id_profil.'/'.$foto;
                        // $config['source_image']  = "doc/relawan/".$id_profil.'/'.$foto;                       
                        // $config['width']     = '772';
                        // $config['height']   = '514';
                        
                        // $this->image_lib->initialize($config); 
                        
                        
                        // $this->image_lib->resize();
                        $this->db->set("foto",$foto);

                        $this->db->where("id_relawan", $id_relawan);

                        $this->db->update("relawan_m");

                    } else {
                        //echo $this->upload->message;
                        $this->notification->set_message("File Gambar gagal diupload, file gambar tidak memenuhi kriteria");
                        $this->notification->sent_notification(false);
                       
                    }
                }

                $this->notification->clear_post();
                $this->notification->set_message("Data berhasil disimpan");
                $this->notification->sent_notification(true);
                redirect('private/relawan/edit/'.$this->input->post('id_relawan'));
            } else {
                $this->notification->set_message("Data gagal disimpan");
                $this->notification->sent_notification(false);
            }

        } else {
            $this->notification->sent_notification(false);
        }

        // default redirect
        redirect('private/relawan/edit/'.$this->input->post('id_relawan'));
    }

    public
    function hapus() {
        // template content
        $this->smarty->assign("template_content", "private/relawan/relawan-hapus");
        // load
        $this->load->model('relawanmodel');
        $this->load->library('notification');
        // parse url
        $this->smarty->assign("url_add", site_url("private/relawan/add"));
        $this->smarty->assign("url_list", site_url("private/relawan"));
        $this->smarty->assign("url_process", site_url("private/relawan/process/hapus"));
        // data
        $id_info = $this->uri->segment(4, 0);
        $data = $this->relawanmodel->get_relawan_by_id($id_info);
        $this->smarty->assign("data", $data);
        // notification
        $arr_notify = $this->notification->get_notification();
        $this->smarty->assign("notification_msg", $arr_notify['message']);
        $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
        'green'));
        // display document
        $this->parser->parse( 'private/base-layout/document.html');
    }

    public
    function process_hapus() {
        // load library
        $this->load->library('notification');
        $this->load->model('relawanmodel');
        // set rules
        $this->notification->check_post('id_relawan', 'Group', 'required');
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = $this->input->post('id_relawan');
            // execute
            
            if($this->relawanmodel->process_relawan_delete($params)) {
                $this->notification->clear_post();
                $this->notification->set_message("Data berhasil dihapus");
                $this->notification->sent_notification(true);
                // redirect
                redirect('private/relawan');
            } else {
                $this->notification->set_message("Data gagal dihapus");
                $this->notification->sent_notification(false);
            }

        }

        // default redirect
        redirect('private/relawan/hapus/'.$this->input->post('id_relawan'));
    }

}