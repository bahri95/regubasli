<?php

    class Bantas extends MY_Controller {

        

        function  __construct() {

            // load application base

            parent::__construct();

            $this->PrivateAppBase();
            $this->load->library('image_lib');

        }



        public

        function index() {

            // template content

            $this->smarty->assign("template_content", "private/bantas/edit");

            // load

            $this->load->model('bantasmodel');

            $this->load->library('notification');

            $this->load->library('DateTimeManipulation');

            $data = $this->bantasmodel->get_bantas_info();

            $path = 'doc/bantas/'.$data['id_bantas']."/";

            

            if(is_file($path.$data['bantas'])){

                $data['bantas'] = '<img src="'.BASEURL.$path.$data['bantas'].'" border="0"><br />';

            } else {

                $data['bantas']= '-tidak ada gambar- ';

            }



            $this->smarty->assign("image_bantas", $data['bantas']);

            // parse url

            $this->smarty->assign("url_process", site_url("private/bantas/process/edit"));

            // data

            $data = $this->bantasmodel->get_bantas_info();

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



        // switcher

        public

        function process($action) {

            switch($action) {

                case 'edit':

                    $this->process_edit();

                    break;

                case 'hapusgambar':

                    $this->hapusgambar();

                    break;

                default :

                    // default redirect

                    redirect('private/bagan');

                    break;

            }



    }



    public

    function process_edit() {

        // load library

        $this->load->model('bantasmodel');

        $this->load->library('notification');

        $this->load->library('uploader');

        $id_bantas = '1';

        

        if (!empty($_FILES['bantas']['tmp_name'])) {

            //hapus foto lama

            $this->uploader->remove_dir('doc/bantas/'.$id_bantas."/");

            $logo_lama = 'doc/bantas/'.$id_bantas.'/'.$this->input->post('logo_lama');

            

            if(is_file($logo_lama)):

            unlink($logo_lama);

            $this->db->set("bantas",'');

            $this->db->where("id_bantas", $id_bantas);

            $this->db->update("bantas_m");

            endif;

            $config['upload_path']  = "./doc/bantas/".$id_bantas.'/';

            $config['allowed_types']= 'gif|jpg|png|jpeg';

            //$config['file_type']    = 'image/png';

            $config['file_name']= $_FILES['bantas']['name'];

            

            if(!is_dir($config['upload_path'])):

            mkdir($config['upload_path']);

            endif;

            $this->load->library('upload', $config);

            

            if ($this->upload->do_upload("bantas")) {

                $data       = $this->upload->data();

                $bantas = $data['file_name'];

                        //resize
                         $config['image_library'] = 'gd2';
                        $config['source_image']  = "doc/bantas/".$id_bantas.'/'.$bantas;
                        $config['new_image']  = "doc/bantas/".$id_bantas.'/'.$bantas;
                        
                        $config['width']     = '720';
                        $config['height']   = '90';
                        
                        $this->image_lib->initialize($config); 
                        
                        
                        $this->image_lib->resize();

                $this->db->set("bantas",$bantas);

                $this->db->where("id_bantas", $id_bantas);

                $this->db->update("bantas_m");

                $this->notification->set_message("Gambar berhasil disimpan");

                $this->notification->sent_notification(true);

                redirect('private/bantas');

            } else {

                $this->notification->set_message("Gambar gagal disimpan, kriteria gambar tidak memenuhi");

                $this->notification->sent_notification(false);

            }



        }



        // execute

        redirect('private/bantas');

    }



}