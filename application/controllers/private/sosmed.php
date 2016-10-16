<?php
    class Sosmed extends MY_Controller {
        
        function  __construct() {
            // load application base
            parent::__construct();
            $this->PrivateAppBase();
        }

        public
        function index() {
            // template content
            $this->smarty->assign("template_content", "private/sosmed/list");
            // load
            $this->load->model('sosmedmodel');
            $this->load->library('notification');
            $this->load->library('pagination');
            $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");
            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");
            //get data
            $data = $this->sosmedmodel->get_list_sosmed();
            $this->smarty->assign("data", $data);
            $this->smarty->assign("no",1);
            // $this->smarty->assign("total", $totaldata);
            //parse url
            $this->smarty->assign('url_add', site_url('private/sosmed/add'));
            $this->smarty->assign('url_list', site_url('private/sosmed/index'));
            $this->smarty->assign('url_process', site_url('private/sosmed/process/hapus'));
            $this->smarty->assign('url_edit', site_url('private/sosmed/edit'));
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
                default :
                    // default redirect
                    redirect('private/berita/add');
                    break;
            }

    }

    public
    function add() {
        // template content
        $this->smarty->assign("template_content", "private/sosmed/add");
        //load
        $this->load->library('notification');
        $this->load->model('sosmedmodel');
        // url
        $logo = $this->sosmedmodel->get_list_logo();
        $this->smarty->assign('logo', $logo);
        $this->smarty->assign("url_add", site_url("private/sosmed/add"));
        $this->smarty->assign("url_list", site_url("private/sosmed"));
        $this->smarty->assign("url_process", site_url("private/sosmed/process/add"));
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
        $this->load->model('sosmedmodel');
        $this->load->library('notification');
        // set rules
        // run
        
        if ($this->notification->valid_input()) {
            $params = array(                    'nama' => $this->input->post('nama_sosmed'),                    'id_logo' => $this->input->post('id_logo'),                    'link' => $this->input->post('link'),                    'urutan' => $this->input->post('urutan'),                    'status' => $this->input->post('status')                    );
            // execute
            
            if($this->sosmedmodel->process_sosmed_add($params)) {
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
        redirect('private/sosmed/add');
    }

    public
    function edit() {
        // template content
        $this->smarty->assign("template_content", "private/sosmed/edit");
        // load
        $this->load->model('sosmedmodel');
        $this->load->library('notification');
        $this->load->library('DateTimeManipulation');
        // parse url
        $this->smarty->assign("url_add", site_url("private/sosmed/add"));
        $this->smarty->assign("url_list", site_url("private/sosmed"));
        $this->smarty->assign("url_process", site_url("private/sosmed/process/edit"));
        // data
        //data logo
        $logo = $this->sosmedmodel->get_list_logo();
        $this->smarty->assign('logo', $logo);
        $id_sosmed = $this->uri->segment(4, 0);
        $data = $this->sosmedmodel->get_sosmed_by_id($id_sosmed);
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
        $this->load->model('sosmedmodel');
        $this->load->library('notification');
        $this->load->library("uploader");
        // set rules
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = array(                    'nama' => $this->input->post('nama_sosmed'),                    'id_logo' => $this->input->post('id_logo'),                    'link' => $this->input->post('link'),                    'urutan' => $this->input->post('urutan'),                    'status' => $this->input->post('status'),                    'id_sosmed' => $this->input->post('id_sosmed')                    );
            // execute
            
            if($this->sosmedmodel->process_sosmed_edit($params)) {
                $this->notification->clear_post();
                $this->notification->set_message("Data berhasil disimpan");
                $this->notification->sent_notification(true);
                redirect('private/sosmed/edit/'.$this->input->post('id_sosmed'));
            } else {
                $this->notification->set_message("Data gagal disimpan");
                $this->notification->sent_notification(false);
            }

        } else {
            $this->notification->sent_notification(false);
        }

        // default redirect
        redirect('private/sosmed/edit/'.$this->input->post('id_sosmed'));
    }

    public
    function process_hapus() {
        // load library
        $this->load->library('notification');
        $this->load->library('uploader');
        $this->load->model('sosmedmodel');
        // set rules
        $this->notification->check_post('id_sosmed', 'id', 'required');
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = $this->input->post('id_sosmed');
            
            if(is_array($params)):
            // execute
            foreach($params as $id):
            $sosmed = $this->sosmedmodel->get_sosmed_by_id($id);
            $this->sosmedmodel->process_sosmed_delete($id);
            endforeach;
            $this->notification->clear_post();
            $this->notification->set_message("Data berhasil dihapus");
            $this->notification->sent_notification(true); else :
            $this->notification->set_message("Tidak ada data yang terpilih untuk dihapus!");
            $this->notification->sent_notification(false);
            endif;
        }

        // default redirect
        redirect('private/sosmed');
    }

}