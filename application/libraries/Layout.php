<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layout {

    public $smarty;
    // --
    private $javascript = "";
	private $javascriptcrud = "";
    private $style = "";

    function  __construct() {
    }

    public function set_smarty(& $obj_smarty) {
        $this->smarty = $obj_smarty;
        // define base url
        $this->smarty->assign('BASEURL', BASEURL);
    }

    public function load_web_themes($themes = "default", $style = "load-style.css") {
        $themes_file =  'themes/' . $themes . '/' . $style;
        if(is_file($themes_file)) {
            $this->smarty->assign('THEMESPATH', BASEURL . $themes_file);
        }else {
            $msg = "File berikut ini tidak ditemukan : " . BASEURL . $themes_file;
            show_error($msg, 404);
        }
    }

    public function load_javascript($path) {
        if(is_file($path)) {
            $this->javascript .= '<script type="text/javascript" src="'.BASEURL.$path.'"></script>';
            $this->javascript .= "\n";
			$this->smarty->assign('LOADJS', $this->javascript);
        }else {
            $msg = "File berikut ini tidak ditemukan : " . BASEURL . $path;
            show_error($msg, 404);
        }
    }
	
	public function load_javascript_crud($path) {
        //if(is_file($path)) {
            $this->javascriptcrud .= '<script type="text/javascript" src="'.$path.'"></script>';
            $this->javascriptcrud .= "\n";
			$this->smarty->assign('LOADJSCRUD', $this->javascriptcrud);
        /*}else {
            $msg = "File berikut ini tidak ditemukan : " . BASEURL . $path;
            show_error($msg, 404);
        }
		*/
    }
	
	public function get_javascript() {
        
		return $this->javascript;
		
    }

    public function load_style($path, $media = "all") {
        $stylepath = 'themes/' . $path;
        if(is_file($stylepath)) {
            $this->style .= '<link rel="stylesheet" type="text/css" media="'.$media.'" href="'.BASEURL.$stylepath.'" />';
            $this->style .= "\n";
            $this->smarty->assign('LOADSTYLE', $this->style);
        }else {
            $msg = "File berikut ini tidak ditemukan : " . BASEURL . $stylepath;
            show_error($msg, 404);
        }
    }
	
	public function load_style_crud($path, $media = "all") {
        //$stylepath = 'themes/' . $path;
        //if(is_file($path)) {
            $this->style .= '<link rel="stylesheet" type="text/css" media="'.$media.'" href="'.$path.'" />';
            $this->style .= "\n";
            $this->smarty->assign('LOADSTYLE', $this->style);
        /*}else {
            $msg = "File berikut ini tidak ditemukan : " . $path;
            show_error($msg, 404);
        }
		*/
    }
}

?>