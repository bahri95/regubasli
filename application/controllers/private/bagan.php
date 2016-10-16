<?php

    class Bagan extends MY_Controller {

        

        function  __construct() {

            // load application base

            parent::__construct();

            $this->PrivateAppBase();

        }



        public

        function index() {

            // template content

            $this->smarty->assign("template_content", "private/bagan/edit");

            // load

            $this->load->model('baganmodel');

            $this->load->library('notification');

            $this->load->library('DateTimeManipulation');

            $data = $this->baganmodel->get_bagan_info();

            $path = 'doc/bagan/'.$data['id_bagan']."/";

            

            if(is_file($path.$data['image'])){

                $url_hapus = site_url('private/bagan/process/hapusgambar/')."/".$data['id_bagan'];

                $data['image'] = '<img src="'.BASEURL.$path.$data['image'].'" border="0"><br /><input type="button" value="Hapus Gambar" onClick="javascript:document.location=\''.$url_hapus.'\';">';

            } else {

                $data['image']= '-tidak ada gambar- ';

            }



            $this->smarty->assign("image_bagan", $data['image']);

            // parse url

            $this->smarty->assign("url_process", site_url("private/bagan/process/edit"));

            // data

            $data = $this->baganmodel->get_bagan_info();

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

        $this->load->model('baganmodel');

        $this->load->library('notification');

        $this->load->library("uploader");

        // set rules

        $this->notification->check_post('judul_bagan', 'Judul', 'required');

        $this->notification->check_post('judul_english', 'Judul English', 'required');

        $this->notification->check_post('tanggal', 'Tanggal', 'required');

        // run

        

        if ($this->notification->valid_input()) {

            // params

            $params = array('judul_bagan' => $this->input->post('judul_bagan'),
                'tanggal' => $this->input->post('tanggal'),                    
                'judul_english' => $this->input->post('judul_english'),
                'judul_english' => $this->input->post('judul_english'));

            

            if($this->baganmodel->process_bagan_edit($params)) {

                $id_bagan = '1';

                

                if (!empty($_FILES['image_bagan']['tmp_name'])) {

                    // set file attachment

                    $_FILES['image_bagan']['name'] = $_FILES['image_bagan']['name'];

                    $this->uploader->remove_dir('doc/bagan/'.$id_bagan."/");

                    $this->uploader->set_file($_FILES['image_bagan']);

                    // direktori

                    $dir = 'doc/bagan/' . $id_bagan . '/';

                    // proses upload

                    

                    if ($this->uploader->upload_image($dir, 400)) {

                        $this->db->set("image",$this->uploader->get_file_name());

                        $this->db->where("id_bagan", $id_bagan);

                        $this->db->update("bagan_m");

                    } else {

                        //echo $this->upload->message;

                        $this->notification->set_message("File Gambar gagal diupload");

                        $this->notification->sent_notification(false);

                    }



                }



                print_r($this->baganmodel->process_bagan_edit($params));

            }



            // execute

            

            if($this->baganmodel->process_bagan_edit($params)) {

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

        redirect('private/bagan');

    }



    public

    function hapusgambar() {

        // load library

        $this->load->library('notification');

        $this->load->library('uploader');

        $this->load->model('baganmodel');

        // set rules

        $id_bagan = '1';

        // run

        

        if (!empty($id_bagan)) {

            // params

            $this->db->set('image','');

            $this->db->where('id_bagan' , $id_bagan);

            $this->db->update('bagan_m');

            $this->uploader->remove_dir('doc/bagan/'.$id_bagan."/");

            $this->notification->set_message("Gambar berhasil dihapus");

            $this->notification->sent_notification(true);

        }



        // default redirect

        redirect('private/bagan');

    }



}