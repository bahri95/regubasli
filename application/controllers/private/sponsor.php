<?php

    class Sponsor extends MY_Controller {

        

        function  __construct() {

            // load application base

            parent::__construct();

            $this->PrivateAppBase();
            $this->load->library('image_lib');

        }



        public

        function index() {

            // template content

            $this->smarty->assign("template_content", "private/sponsor/list");

            // load

            $this->load->model('sponsormodel');

            $this->load->library('notification');

            $this->load->library('pagination');

            $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");

            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");

            $data = $this->sponsormodel->get_list_sponsor();

            

            if(!empty($data)):

            foreach($data as $k=>$row):

            $pathdok = 'doc/sponsor/'.$row['id_sponsor'].'/'.$row['image_sponsor'];

            

            if(!is_file($pathdok)):

            $data[$k]['image_sponsor'] = ''; else :

            $data[$k]['image_sponsor'] = BASEURL.$pathdok;

            endif;

            endforeach;

            endif;

            $this->smarty->assign("data", $data);

            $this->smarty->assign("no",1);

            //parse url

            $this->smarty->assign('url_add', site_url('private/sponsor/add'));
            $this->smarty->assign('url_add_iklan', site_url('private/sponsor/add_iklan'));
            $this->smarty->assign('url_list', site_url('private/sponsor/index'));
            $this->smarty->assign('url_list_iklan', site_url('private/sponsor/list_iklan'));
            $this->smarty->assign('url_process', site_url('private/sponsor/process/hapus'));
            $this->smarty->assign('url_edit', site_url('private/sponsor/edit'));

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
        function list_iklan() {
            // template content
            $this->smarty->assign("template_content", "private/sponsor/list_iklan");
            // load
            $this->load->model('sponsormodel');
            $this->load->library('notification');
            $this->load->library('pagination');
            $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");
            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");
            //get data
            $params = $this->uri->segment(4,0);
            $data = $this->sponsormodel->get_list_iklan_private($params);
            
            if(!empty($data)):
            foreach($data as $k=>$row):
            $pathdok = 'doc/sponsor/iklan/'.$row['id_sponsor'].'/indo/'.$row['id_iklan'].'/'.$row['image'];
            
            if(!is_file($pathdok)):
            $data[$k]['image'] = ''; else :
            $data[$k]['image'] = BASEURL.$pathdok;
            endif;

            $pathdok_en = 'doc/sponsor/iklan/'.$row['id_sponsor'].'/eng/'.$row['id_iklan'].'/'.$row['image_english'];
            
            if(!is_file($pathdok)):
            $data[$k]['image_english'] = ''; else :
            $data[$k]['image_english'] = BASEURL.$pathdok_en;
            endif;
            endforeach;
            endif;
            $this->smarty->assign("data", $data);
            $this->smarty->assign("no", 1);
            // $this->smarty->assign("total", $totaldata);
            $params = $this->uri->segment(4,0);
            $sponsor = $this->sponsormodel->get_sponsor_by_id($params);
            $this->smarty->assign("sponsor", $sponsor);
            //parse url
            $this->smarty->assign('url_add', site_url('private/sponsor/add'));
            $this->smarty->assign('url_add_iklan', site_url('private/sponsor/add_iklan'));
            $this->smarty->assign('url_list', site_url('private/sponsor/index'));
            $this->smarty->assign('url_process', site_url('private/sponsor/process/hapus_iklan'));
            $this->smarty->assign('url_edit_iklan', site_url('private/sponsor/edit_iklan'));
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

        function process($action) {

            switch($action) {

                case 'add':

                    $this->process_add();

                    break;

                case 'add_iklan':
                    $this->process_add_iklan();
                break;

                 case 'edit_iklan':
                    $this->process_edit_iklan();
                break;
                 case 'hapus_iklan':
                    $this->process_hapus_iklan();
                break;
                case 'edit':
                    $this->process_edit();
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

                        redirect('private/sponsor/add');

                        break;

                }



        }



        public

        function add() {

            // template content

            $this->smarty->assign("template_content", "private/sponsor/add");

            //load

            $this->load->library('notification');

            $this->load->model('sponsormodel');

            // url

            $this->smarty->assign("url_add", site_url("private/sponsor/add"));

            $this->smarty->assign("url_list", site_url("private/sponsor"));

            $this->smarty->assign("url_process", site_url("private/sponsor/process/add"));

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
        function add_iklan() {
        // template content
        $this->smarty->assign("template_content", "private/sponsor/add_iklan");
        //load
        $this->load->library('notification');
        $this->load->library("uploader");
        $this->load->model('sponsormodel');
        // url
        $params = $this->uri->segment(4,0);
        $sponsor = $this->sponsormodel->get_sponsor_by_id($params);
        $this->smarty->assign("sponsor", $sponsor);
        $this->smarty->assign("url_add", site_url("private/sponsor/add"));
        $this->smarty->assign("url_list", site_url("private/sponsor"));
        $this->smarty->assign("url_process", site_url("private/sponsor/process/add_iklan"));
        $this->smarty->assign("url_add_iklan", site_url("private/sponsor/add_iklan"));
        $this->smarty->assign("url_list_iklan", site_url("private/sponsor/list_iklan"));
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

            $this->load->model('sponsormodel');

            $this->load->library('notification');

            $this->load->library("uploader");

            // set rules

            $this->notification->check_post('nama_sponsor', 'Nama Sponsor', 'required');
            $this->notification->check_post('awal_kontrak', 'Awal Kontrak', 'required');
            $this->notification->check_post('akhir_kontrak', 'Akhir Kontak', 'required');
            $this->notification->check_post('status', 'Status', 'required');
            $this->notification->check_post('urutan', 'Urutan', 'required');


            // run

            if ($this->notification->valid_input()) {

                // params

                $params = array('nama_sponsor' => $this->input->post('nama_sponsor'),
                    'awal_kontrak' => $this->input->post('awal_kontrak'),
                    'akhir_kontrak' => $this->input->post('akhir_kontrak'),
                    'status' => $this->input->post('status'),
                    'urutan' => $this->input->post('urutan'));


                // execute

                

                if($this->sponsormodel->process_sponsor_add($params)) {

                    $id_sponsor = $this->db->insert_id();
                    $params_iklan = array('id_sponsor' => $id_sponsor,                    
                    'judul' => '',                    
                    'judul_english' => '',                    
                    'status' => 'aktif');
                    $this->sponsormodel->process_iklan_add($params_iklan);
            
                    if (!empty($_FILES['image_sponsor']['tmp_name'])) {

                        $datasponsor= $this->sponsormodel->get_sponsor_by_id($id_sponsor);

                        $_FILES['image_sponsor']['name'] = $id_sponsor.'_'.$_FILES['image_sponsor']['name'];

                        $config['upload_path']= "./doc/sponsor/".$id_sponsor.'/';
                        $config['allowed_types']= 'gif|jpg|png|jpeg';

                        //$config['file_type']    = 'image/png';

                        $config['file_name']= $_FILES['image_sponsor']['name'];

                        

                        if(!is_dir($config['upload_path'])):

                        mkdir($config['upload_path']);

                        endif;

                        $this->load->library('upload', $config);

                        

                        if ($this->upload->do_upload("image_sponsor")) {

                            
                            $data = $this->upload->data();

                            $image_sponsor = $data['file_name'];

                             //resize
                             $config['image_library'] = 'gd2';
                            $config['source_image']  = "doc/sponsor/".$id_sponsor.'/'.$image_sponsor;
                            $config['new_image']  = "doc/sponsor/".$id_sponsor.'/'.$image_sponsor;
                            
                            $config['height']   = '120';
                            $config['width']  = '180';
                            
                            $this->image_lib->initialize($config); 
                            
                            
                            $this->image_lib->resize();
                            $this->db->set("image_sponsor",$image_sponsor);

                            $this->db->where("id_sponsor", $id_sponsor);

                            $this->db->update("sponsor_m");

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

            redirect('private/sponsor/add');

        }

        //process add iklan
        public

        function process_add_iklan() {

            // load library
        $this->load->model('sponsormodel');
        $this->load->library('notification');
        $this->load->library("uploader");
        // set rules
    
       $this->notification->check_post('judul', 'Judul Indonesia', 'required');
        $this->notification->check_post('judul_english', 'Judul English', 'required');
        $this->notification->check_post('status', 'Status', 'required');
        

        // run
        
        if ($this->notification->valid_input()) {
            // params
                if($this->input->post('status') == 'aktif'){
                $this->db->set("status", 'nonaktif');
                $this->db->where("status", 'aktif');
                $this->db->update("iklan_m");
                }

                $params = array('id_sponsor' => $this->input->post('id_sponsor'),                    
                    'judul' => $this->input->post('judul'),                    
                    'judul_english' => $this->input->post('judul_english'),                    
                    'status' => $this->input->post('status'));
            

            // execute
            
            if($this->sponsormodel->process_iklan_add($params)) {
                $id_iklan = $this->db->insert_id();
                $id_sponsor = $this->input->post('id_sponsor');


                
                if (!empty($_FILES['iklan']['tmp_name'])) {
                    // set file attachment
                    $_FILES['iklan']['name'] = $id_iklan.'_'.$_FILES['iklan']['name'];
                    $this->uploader->set_file($_FILES['iklan']);
                    // set rules (kosongkan jika tidak menggunakan batasan sama sekali)
                    // $rules = array('allowed_filesize' => 307200);
                    // $this->uploader->set_rules($rules);
                    //$this->uploader->set_file_name();
                    // direktori
                    $dir = 'doc/sponsor/iklan/'.$id_sponsor.'/indo/'. $id_iklan . '/';
                    // proses upload
                    
                    if ($this->uploader->upload_image($dir, 1000)) {
                        $this->db->set("image",$this->uploader->get_file_name());
                        $this->db->where("id_iklan", $id_iklan);
                        $this->db->update("iklan_m");
                    } else {
                        //echo $this->upload->message;
                        $this->notification->set_message("Iklan Indonesia gagal diupload");
                        $this->notification->sent_notification(false);
                    }

                }

                // versi english
                
                if (!empty($_FILES['iklan_english']['tmp_name'])) {
                    // set file attachment
                    $_FILES['iklan_english']['name'] = $id_iklan.'_'.$_FILES['iklan_english']['name'];
                    $this->uploader->set_file($_FILES['iklan_english']);
                    // set rules (kosongkan jika tidak menggunakan batasan sama sekali)
                    // $rules = array('allowed_filesize' => 307200);
                    // $this->uploader->set_rules($rules);
                    //$this->uploader->set_file_name();
                    // direktori
                     $dir = 'doc/sponsor/iklan/'.$id_sponsor.'/eng/'. $id_iklan . '/';
                    // proses upload
                    
                    if ($this->uploader->upload_image($dir, 1000)) {
                        $this->db->set("image_english",$this->uploader->get_file_name());
                        $this->db->where("id_iklan", $id_iklan);
                        $this->db->update("iklan_m");
                    } else {
                        //echo $this->upload->message;
                        $this->notification->set_message("Iklan English gagal diupload");
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
        $id_sponsor = $this->input->post('id_sponsor');
        redirect('private/sponsor/add_iklan/'.$id_sponsor);

        }

        //process add iklan
        public

        function process_edit_iklan() {

            // load library
        $this->load->model('sponsormodel');
        $this->load->library('notification');
        $this->load->library("uploader");
        // set rules
    
       $this->notification->check_post('judul', 'Judul Indonesia', 'required');
        $this->notification->check_post('judul_english', 'Judul English', 'required');
        $this->notification->check_post('status', 'Status', 'required');

        // run
        
        if ($this->notification->valid_input()) {
            // params
                if($this->input->post('status') == 'aktif'){
                $this->db->set("status", 'nonaktif');
                $this->db->where("status", 'aktif');
                $this->db->update("iklan_m");
                }else{
                $this->db->set("status", 'aktif');
                $this->db->where("judul", '');
                $this->db->update("iklan_m"); 
                }
                $params = array('judul' => $this->input->post('judul'),                    
                    'judul_english' => $this->input->post('judul_english'),                    
                     'status' => $this->input->post('status'),
                     'id_iklan'=> $this->input->post('id_iklan'));
            

            // execute
            
            if($this->sponsormodel->process_iklan_edit($params)) {
                $id_iklan = $this->input->post('id_iklan');
                 $id_sponsor = $this->input->post('id_sponsor');
                if (!empty($_FILES['iklan']['tmp_name'])) {
                 $this->uploader->remove_dir('doc/sponsor/iklan/'.$id_sponsor."/indo/".$id_iklan);
                    // set file attachment
                    $_FILES['iklan']['name'] = $id_iklan.'_'.$_FILES['iklan']['name'];
                    $this->uploader->set_file($_FILES['iklan']);
                    // set rules (kosongkan jika tidak menggunakan batasan sama sekali)
                    // $rules = array('allowed_filesize' => 307200);
                    // $this->uploader->set_rules($rules);
                    //$this->uploader->set_file_name();
                    // direktori
                    $dir = 'doc/sponsor/iklan/'.$id_sponsor.'/indo/'. $id_iklan . '/';
                    // proses upload
                    
                    if ($this->uploader->upload_image($dir, 1000)) {
                        $this->db->set("image",$this->uploader->get_file_name());
                        $this->db->where("id_iklan", $id_iklan);
                        $this->db->update("iklan_m");
                    } else {
                        //echo $this->upload->message;
                        $this->notification->set_message("Iklan Indonesia gagal diupload");
                        $this->notification->sent_notification(false);
                    }

                }

                // versi english
                
                if (!empty($_FILES['iklan_english']['tmp_name'])) {
                $this->uploader->remove_dir('doc/sponsor/iklan/'.$id_sponsor."/eng/".$id_iklan);
                    // set file attachment
                    $_FILES['iklan_english']['name'] = $id_iklan.'_'.$_FILES['iklan_english']['name'];
                    $this->uploader->set_file($_FILES['iklan_english']);
                    // set rules (kosongkan jika tidak menggunakan batasan sama sekali)
                    // $rules = array('allowed_filesize' => 307200);
                    // $this->uploader->set_rules($rules);
                    //$this->uploader->set_file_name();
                    // direktori
                     $dir = 'doc/sponsor/iklan/'.$id_sponsor.'/eng/'. $id_iklan . '/';
                    // proses upload
                    
                    if ($this->uploader->upload_image($dir, 1000)) {
                        $this->db->set("image_english",$this->uploader->get_file_name());
                        $this->db->where("id_iklan", $id_iklan);
                        $this->db->update("iklan_m");
                    } else {
                        //echo $this->upload->message;
                        $this->notification->set_message("Iklan English gagal diupload");
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
        $id_sponsor = $this->input->post('id_sponsor');
        $id_iklan = $this->input->post('id_iklan');
        redirect('private/sponsor/edit_iklan/'.$id_sponsor.'/'.$id_iklan);

        }

      
        public

        function edit() {

            // template content

            $this->smarty->assign("template_content", "private/sponsor/edit");

            // load

            $this->load->model('sponsormodel');

            $this->load->library('notification');

            $this->load->library('DateTimeManipulation');

            // parse url

            $this->smarty->assign("url_add", site_url("private/sponsor/add"));

            $this->smarty->assign("url_list", site_url("private/sponsor"));

            $this->smarty->assign("url_process", site_url("private/sponsor/process/edit"));

            // data

            /// GET DATA album

            $sponsor = $this->sponsormodel->get_list_sponsor();

            $this->smarty->assign("sponsor", $sponsor);

            $id_sponsor = $this->uri->segment(4, 0);

            $data = $this->sponsormodel->get_sponsor_by_id($id_sponsor);

            $path = 'doc/sponsor/'.$data['id_sponsor'].'/';

            

            if(is_file($path.$data['image_sponsor'])){

                $url_hapus = site_url('private/sponsor/process/hapusgambar/')."/".$data['id_sponsor'];

                $data['image_sponsor_edit'] = '<img src="'.BASEURL.$path.$data['image_sponsor'].'" border="0" height="200px;"><br />';

            } else {

                $data['image_sponsor_edit']= '-tidak ada gambar- ';

            }


            $this->smarty->assign("image_sponsor_edit", $data['image_sponsor_edit']);

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

        //edit iklan
         public

        function edit_iklan() {
            // template content

            $this->smarty->assign("template_content", "private/sponsor/edit_iklan");

            // load

            $this->load->model('sponsormodel');

            $this->load->library('notification');

            $this->load->library('DateTimeManipulation');

            // parse url

            $this->smarty->assign('url_list', site_url('private/sponsor/index'));
            $this->smarty->assign('url_list_iklan', site_url('private/sponsor/list_iklan'));
           $this->smarty->assign("url_process", site_url("private/sponsor/process/edit_iklan"));

            // data

            /// GET DATA album
            $id_sponsor = $this->uri->segment(4, 0);
            $sponsor = $this->sponsormodel->get_sponsor_by_id($id_sponsor);

            $this->smarty->assign("sponsor", $sponsor);

            $id_iklan = $this->uri->segment(5, 0);

            $data = $this->sponsormodel->get_iklan_by_id($id_iklan);

            $path = 'doc/sponsor/iklan/'.$id_sponsor."/indo/".$id_iklan."/";
            $path_en = 'doc/sponsor/iklan/'.$id_sponsor."/eng/".$id_iklan."/";

            
            //indo
            if(is_file($path.$data['image'])){
                $data['iklan_indo'] = '<img src="'.BASEURL.$path.$data['image'].'" border="0" height="200px;"><br />';
            } else {
                $data['iklan_indo']= '-tidak ada gambar- ';
            }
            //eng
            if(is_file($path_en.$data['image_english'])){
                $data['iklan_eng'] = '<img src="'.BASEURL.$path_en.$data['image_english'].'" border="0" height="200px;"><br />';
            } else {
                $data['iklan_eng']= '-tidak ada gambar- ';
            }



            $data['image'] = $data['iklan_indo'];
            $data['image_english'] = $data['iklan_eng'];

            $this->smarty->assign("image_iklan_indo", $data['image']);
            $this->smarty->assign("image_iklan_eng", $data['image_english']);

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

            $this->load->model('sponsormodel');

            $this->load->library('notification');

            $this->load->library("uploader");

            // set rules

           

            // run
            $this->notification->check_post('nama_sponsor', 'Nama Sponsor', 'required');
            $this->notification->check_post('awal_kontrak', 'Awal Kontrak', 'required');
            $this->notification->check_post('akhir_kontrak', 'Akhir Kontak', 'required');
            $this->notification->check_post('status', 'Status', 'required');
            $this->notification->check_post('urutan', 'Urutan', 'required');
            

            if ($this->notification->valid_input()) {

                // params

                $params = array('nama_sponsor' => $this->input->post('nama_sponsor'),
                    'awal_kontrak' => $this->input->post('awal_kontrak'),
                    'akhir_kontrak' => $this->input->post('akhir_kontrak'),
                    'status' => $this->input->post('status'),
                    'urutan' => $this->input->post('urutan'),
                    'id_sponsor' => $this->input->post('id_sponsor'));

                // execute

                

                if($this->sponsormodel->process_sponsor_edit($params)) {

                    

                    if (!empty($_FILES['image_sponsor']['tmp_name'])) {

                        $id_sponsor = $this->input->post('id_sponsor');

                        $datasponsor= $this->sponsormodel->get_sponsor_by_id($id_sponsor);

                        $_FILES['image_sponsor']['name'] = $id_sponsor.'_'.$_FILES['image_sponsor']['name'];

                        //hapus foto lama

                        $logo_lama = 'doc/sponsor/'.$id_sponsor.'/'.$this->input->post('logo_lama');

                        

                        if(is_file($logo_lama)):

                        unlink($logo_lama);

                        $this->db->set("image_sponsor",$image_sponsor);

                        $this->db->where("id_sponsor", $id_sponsor);

                        $this->db->update("sponsor_m");

                        endif;

                        $config['upload_path']= "./doc/sponsor/".$id_sponsor.'/';

                        $config['allowed_types']= 'gif|jpg|png|jpeg';

                        //$config['file_type']    = 'image/png';

                        $config['file_name']= $_FILES['image_sponsor']['name'];

                        

                        if(!is_dir($config['upload_path'])):

                        mkdir($config['upload_path']);

                        endif;

                        $this->load->library('upload', $config);

                        

                        if ($this->upload->do_upload("image_sponsor")) {

                            $data = $this->upload->data();

                            $image_sponsor = $data['file_name'];
                             //resize
                             $config['image_library'] = 'gd2';
                            $config['source_image']  = "doc/sponsor/".$id_sponsor.'/'.$image_sponsor;
                            $config['new_image']  = "doc/sponsor/".$id_sponsor.'/'.$image_sponsor;
                            
                            $config['height']   = '120';
                            
                            $this->image_lib->initialize($config); 
                            
                            
                            $this->image_lib->resize();

                            $this->db->set("image_sponsor",$image_sponsor);

                            $this->db->where("id_sponsor", $id_sponsor);

                            $this->db->update("sponsor_m");

                        }



                    }



                    $this->notification->clear_post();

                    $this->notification->set_message("Data berhasil disimpan");

                    $this->notification->sent_notification(true);

                    redirect('private/sponsor/edit/'.$this->input->post('id_sponsor'));

                } else {

                    $this->notification->set_message("Data gagal disimpan");

                    $this->notification->sent_notification(false);

                }



            } else {

                $this->notification->sent_notification(false);

            }



            // default redirect

            redirect('private/sponsor/edit/'.$this->input->post('id_sponsor'));

        }



        public

        function process_hapus() {

            // load library

            $this->load->library('notification');

            $this->load->library('uploader');

            $this->load->model('sponsormodel');

            // set rules

            $this->notification->check_post('id_sponsor', 'id', 'required');

            // run

            

            if ($this->notification->valid_input()) {

                // params

                $params = $this->input->post('id_sponsor');

                

                if(is_array($params)):

                // execute

                foreach($params as $id):

                $sponsor = $this->sponsormodel->get_sponsor_by_id($id);

                $this->sponsormodel->process_sponsor_delete($id);

                $this->uploader->remove_dir('doc/sponsor/'.$id."/");
                 $this->uploader->remove_dir('doc/sponsor/iklan/'.$id."/");
                

                endforeach;

                $this->notification->clear_post();

                $this->notification->set_message("Data berhasil dihapus");

                $this->notification->sent_notification(true); else :

                $this->notification->set_message("Tidak ada data yang terpilih untuk dihapus!");

                $this->notification->sent_notification(false);

                endif;

            }



            // default redirect

            redirect('private/sponsor');

        }

        public

        function process_hapus_iklan() {

            // load library

            $this->load->library('notification');

            $this->load->library('uploader');

            $this->load->model('sponsormodel');

            // set rules

            $this->notification->check_post('id_iklan', 'id', 'required');

            // run

            

            if ($this->notification->valid_input()) {

                // params

                $params = $this->input->post('id_iklan');
                $id_sponsor = $this->input->post('id_sponsor');
                if(is_array($params)):

                // execute

                foreach($params as $id):

                $iklan = $this->sponsormodel->get_iklan_by_id($id);

                $this->sponsormodel->process_iklan_delete($id);

                $this->uploader->remove_dir('doc/sponsor/iklan/'.$id_sponsor."/indo/".$id);
                $this->uploader->remove_dir('doc/sponsor/iklan/'.$id_sponsor."/eng/".$id);

                endforeach;

                $this->notification->clear_post();

                $this->notification->set_message("Data berhasil dihapus");

                $this->notification->sent_notification(true); else :

                $this->notification->set_message("Tidak ada data yang terpilih untuk dihapus!");

                $this->notification->sent_notification(false);

                endif;

            }



            // default redirect
            $id_sponsor = $this->input->post('id_sponsor');
            redirect('private/sponsor/list_iklan/'.$id_sponsor);

        }



        public

        function hapusgambar() {

            // load library

            $this->load->library('notification');

            $this->load->library('uploader');

            $this->load->model('sponsormodel');

            // set rules

            $id_sponsor = $this->uri->segment(5, 0);

            // run

            

            if (!empty($id_sponsor)) {

                // params

                $this->db->set('image_sponsor','');

                $this->db->where('id_sponsor' , $id_sponsor);

                $this->db->update('sponsor_m');

                $this->uploader->remove_dir('doc/sponsor/'.$id_sponsor."/");

                $this->notification->set_message("Gambar berhasil dihapus");

                $this->notification->sent_notification(true);

            }



            // default redirect

            redirect('private/sponsor/edit/'.$id_sponsor);

        }



    }