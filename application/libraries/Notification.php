<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notification {
    // message
    private $arr_message = array();
    // input
    private $arr_post 	= array();
    // error
    private $arr_error	= array();
    // data
    private $data = array('message_status' => true, 'message' => array(), 'post' => array());

    // constructor method
    function __construct() {
        // post input
        if(isset($_POST)) {
            $this->arr_post = $_POST;
        }
    }

    // destructor method
    function __destruct() {

    }

    public function clear_session() {
        $CI =& get_instance();
        $CI->session->unset_userdata('notification');
    }

    public function get_session() {
        $CI =& get_instance();
        $this->data = $CI->session->userdata('notification');
    }

    public function set_session() {
        $CI =& get_instance();
        $CI->session->set_userdata(array('notification' => $this->data));
    }

    public function set_message($msg) {
        $this->arr_error[] = $msg;
    }

    public function check_post($name, $label, $required = '') {
        // required
        $input = isset($this->arr_post[$name])?$this->arr_post[$name]:'';
        if(!is_array($input)) {
            $input = trim($input);
        }
        if(empty($input) AND ($required == 'required')) {
            $this->arr_error[] = $label . ' harus di isi';
        }
    }

    public function check_file($name, $label, $required = '') {
        // required
        $input = !empty($_FILES[$name]['tmp_name']) ? $_FILES[$name]['tmp_name'] : FALSE;
        if(empty($input) AND ($required == 'required')) {
            $this->arr_error[] = $label . ' is required';
        }
    }

    public function clear_post() {
        $this->arr_post = array();
    }

   
    public function valid_input() {
        if(empty($this->arr_error))
            return TRUE;
        else
            return FALSE;
    }

    public function sent_notification($status = true, $tag_open = "", $tag_close = "<br />") {
        // clear session
        $this->clear_session();
        // set header
        $this->data['message_status'] 	= $status;
        // error message
        $this->data['message']          = $this->_get_error_string($tag_open, $tag_close);
        // latest field
        $this->data['post']             = $this->arr_post;
        // save session
        $this->set_session();
    }

    public function get_notification() {
        $CI =& get_instance();
        $this->data = $CI->session->userdata('notification');
        $this->clear_session();
        return $this->data;
    }

    private function _get_error_string($tag_open = "", $tag_close = "<br />") {
        $err_string = '';
        // error string
        foreach($this->arr_error as $msg) {
            $err_string .= $tag_open . $msg . $tag_close;
        }
        return $err_string;
    }
}

?>