<?php
// important * untuk application base dari halaman ini

class Login extends MY_Controller {

    function  __construct() {
        // load application base
       parent::__construct();
	   $this->Webappbase();
    }
    
    // index
    public function index()
    {
		// template content
		$this->smarty->assign('template_content', "web/login/content.html");
		$this->smarty->assign('tahun', date('Y'));
        $this->default_url();
        // load
        $this->load->library('Notification');
        $data = '';
        
        $this->smarty->assign('content_title', 'Form Login');
        $this->smarty->assign('data', $data);
		// notification
        $arr_notify = $this->notification->get_notification();
        $this->smarty->assign("message", $arr_notify['message'] );
        // display document
        $this->parser->parse('web/base-layout/document-frame.html');
	}
    
    private function default_url()
    {
        $this->smarty->assign('url_berita_dprd', site_url('public/berita/dprd'));
        $this->smarty->assign('url_berita_dpd', site_url('public/berita/dpd'));
        $this->smarty->assign('url_pengumuman', site_url('public/pengumuman'));
        $this->smarty->assign('url_kegiatan', site_url('public/kegiatan'));
        $this->smarty->assign('url_anggota', site_url('public/anggota'));
        $this->smarty->assign('url_anggota', site_url('public/anggota'));
        $this->smarty->assign('url_aspirasi', site_url('public/aspirasi'));
        $this->smarty->assign('url_contact', site_url('public/contact'));
    }
	
    public function process_login()
    {
        // load library
        $this->load->library('Notification');
        // set rules
        $this->notification->check_post('userid', 'Username', 'required');
        $this->notification->check_post('password', 'Password', 'required');
		// run
        if ($this->notification->valid_input())
        {
            $id_user = $this->sitemodel->get_user_login($this->input->post('userid'), $this->input->post('password'), $this->config->item('admin_portal_id'));
            if($id_user)
            {
                // set session
                $this->session->set_userdata(array('id_user' => $id_user));
                // save login history
                $this->sitemodel->save_user_login($id_user);
                // default redirect
                redirect('private/dashboard');
            }
            else
            {
                $this->notification->set_message("username atau password anda salah");
                $this->notification->sent_notification(false);
            }
        }
        else
        {
            $this->notification->sent_notification(false);
        }
        // default redirect
        redirect('public/login');
    }

    public function process_logout()
    {
        // unset session
        $this->session->unset_userdata('id_user');
		$this->session->sess_destroy();
        // default redirect
        redirect('public/login');
    }
}
