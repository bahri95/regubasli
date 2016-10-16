<?php
    // important * untuk application base dari halaman ini
    class Home extends MY_Controller {
        //class Dashboard extends CI_Controller{
        
        function  __construct() {
            // load application base
            parent::__construct();
            $this->Webappbase();
            $this->load->library('datetimemanipulation');
        }

        // pages
        public
        function index() {
            // template content
        $this->smarty->assign('template_content', "web/home/content.html");
        // notification
        $arr_notify = $this->notification->get_notification();
        $this->smarty->assign("message", $arr_notify['message'] );
        // display document
        $this->parser->parse('web/base-layout/document-home.html');
        }

      
        
    }
