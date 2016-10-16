<?php
    class Kontak extends MY_Controller {
        
        function  __construct() {
            // load application base
            parent::__construct();
            $this->PrivateAppBase();
        }

        public
        function index() {
            // template content
            $this->smarty->assign("template_content", "private/kontak/edit");
            // load
            $this->load->model('kontakmodel');
            $this->load->library('notification');
            $this->load->library('DateTimeManipulation');
            // parse url
            $this->smarty->assign("url_process", site_url("private/kontak/process"));
            // data
            $data = $this->kontakmodel->get_kontak_info();
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
        function process() {
            // load library
            $this->load->model('kontakmodel');
            $this->load->library('notification');
            $this->load->library("uploader");
            // set rules
            $this->notification->check_post('id_kontak', 'Id ', 'required');
            $this->notification->check_post('email', 'Email', 'required');
            $this->notification->check_post('alamat', 'alamat', 'required');
            $this->notification->check_post('telp', 'Telepon', 'required');
            // run
            
            if ($this->notification->valid_input()) {
                // params
                $params = array(                    'email' => $this->input->post('email'),                    'alamat' => $this->input->post('alamat'),'telp' => $this->input->post('telp'),'fax' => $this->input->post('fax'),'website' => $this->input->post('website'), 'id_kontak' => $this->input->post('id_kontak'));
                // execute
                
                if($this->kontakmodel->process_kontak_edit($params)) {
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
            redirect('private/kontak');
        }

    }