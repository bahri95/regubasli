<?php

class Master extends MY_Controller {

    function  __construct() {
        // load application base
       parent::__construct();
	   $this->PrivateAppBase();
    }

    public function index() {
        // template content
        $this->smarty->assign("template_content", "private/master/index");
        // your code here

        // display document
        $this->parser->parse( 'private/base-layout/document.html');
    }
}