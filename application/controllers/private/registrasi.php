<?php

    // important * untuk application base dari halaman ini

    class Registrasi extends MY_Controller {

        

        function  __construct() {

            // load application base

            parent::__construct();

            $this->PrivateAppBase();

        }



        public

        function index() {

            //data 

            $this->load->library('Notification');

            $this->smarty->assign('template_content',"private/registrasi/list");

            // notification

            $arr_notify = $this->notification->get_notification();

            //print_r($arr_notify);

            $this->smarty->assign("notification_msg", $arr_notify['message']);

            $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':

            'green'));



            //search 



            $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");

            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");

            

            //load model aspirasi

            $this->load->model('registrasimodel');

            //data anggota baru

            $data_anggota_baru = $this->registrasimodel->get_list_anggota_baru();

            $this->smarty->assign('data_anggota_baru', $data_anggota_baru);

            // jumlah anggota baru

            $jumlah_anggota_baru = $this->registrasimodel->get_jumlah_anggota_baru();

            $this->smarty->assign('jumlah_anggota_baru', $jumlah_anggota_baru);

            // jumlah anggota yang sudah di setujui

            $jumlah_anggota_disetujui = $this->registrasimodel->get_jumlah_anggota_disetujui();

            $this->smarty->assign('jumlah_anggota_disetujui', $jumlah_anggota_disetujui);

            //hapus

            $this->smarty->assign("url_registrasi_hapus", site_url("private/registrasi/process/hapus"));



            // display document

            $this->parser->parse('private/base-layout/document.html');

            

        }



        public

        function disetujui() {

            // load library

            $this->load->library('Notification');

            $this->smarty->assign('template_content',"private/registrasi/list_disetujui");

            //search

             $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");

            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");

            // notification

            $arr_notify = $this->notification->get_notification();

            //print_r($arr_notify);

            $this->smarty->assign("notification_msg", $arr_notify['message']);

            $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':

            'green'));

            $this->load->model('registrasimodel');

            //data anggota baru

            $data_anggota_disetujui = $this->registrasimodel->get_list_anggota_disetujui();

            $this->smarty->assign('data_anggota_disetujui', $data_anggota_disetujui);

            // jumlah anggota baru

            $jumlah_anggota_baru = $this->registrasimodel->get_jumlah_anggota_baru();

            $this->smarty->assign('jumlah_anggota_baru', $jumlah_anggota_baru);

            // jumlah anggota yang sudah di setujui

            $jumlah_anggota_disetujui = $this->registrasimodel->get_jumlah_anggota_disetujui();

            $this->smarty->assign('jumlah_anggota_disetujui', $jumlah_anggota_disetujui);

            // process anggota disetujui

            $this->smarty->assign("url_process_anggota_disetujui", site_url("private/registrasi/process/disetujui"));

            // process anggota ditolak

            $this->smarty->assign("url_process_anggota_ditolak", site_url("private/registrasi/process/ditolak"));

            // process anggota dibatalkan

            $this->smarty->assign("url_process_anggota_dibatalkan", site_url("private/registrasi/process/dibatalkan"));

            // hapus anggota

           

             $this->smarty->assign("url_registrasi_hapus_disetujui", site_url("private/registrasi/process/hapus_disetujui"));

            // display document

            $this->parser->parse('private/base-layout/document.html');

        }



       

       

       public

        function process($action = '') {

            switch ($action) {

                case 'disetujui':

                    $this->process_disetujui();

                    break;

                case 'ditolak':

                    $this->process_ditolak();

                    break;

                case 'dibatalkan':

                    $this->process_dibatalkan();

                    break;

                case 'hapus':

                    $this->hapus();

                    break;

                case 'hapus_disetujui':

                    $this->hapus_disetujui();

                    break;



                default :

                    // default redirect

                    redirect('private/registrasi');

                    break;

            }



    }



    public

    function process_hapus() {

        // load library

        $this->load->library('notification');

        $this->load->library('uploader');

        $this->load->model('aspirasimodel');

        // set rules

        $this->notification->check_post('id_aspirasi', 'id', 'required');

        // run

        

        if ($this->notification->valid_input()) {

            // params

            $params = $this->input->post('id_aspirasi');

            

            if(is_array($params)):

            // execute

            foreach($params as $id):

            $aspirasi = $this->aspirasimodel->get_data_aspirasi_by_id($id);

            $this->aspirasimodel->process_aspirasi_delete($id);

            endforeach;

            $this->notification->clear_post();

            $this->notification->set_message("Data berhasil dihapus");

            $this->notification->sent_notification(true); else :

            $this->notification->set_message("Tidak ada data yang terpilih untuk dihapus!");

            $this->notification->sent_notification(false);

            endif;

        }



        // default redirect

        redirect('private/aspirasi');

    }



    



   



    public

    function process_disetujui() {

        // load library

        $this->load->library('notification');

        $this->load->library('uploader');

        $this->load->model('registrasimodel');

        // params

        $id = $this->input->post('id_registrasi');

        $this->registrasimodel->get_data_registrasi_by_id($id);

        $this->db->set("disetujui", 'ya');

        $this->db->where("id_registrasi", $id);

        $this->db->update("registrasi_m");

        $params = array('nama' => $this->input->post('nama'),                    

                'nama_asosiasi' => $this->input->post('nama_asosiasi'),

                'email' => $this->input->post('email'));

            // execute

            

            if($this->_SendEmail($params)):

            $this->notification->clear_post();

            $this->notification->set_message("Data  Anda Sudah Terkirim ");

            $this->notification->sent_notification(true); else :

            $this->notification->set_message("Data Anda gagal Terkirim.");

            $this->notification->sent_notification(false);

            endif;

        redirect('private/registrasi');

    }



    //ditolak

     public

    function process_ditolak() {

        // load library

        $this->load->library('notification');

        $this->load->library('uploader');

        $this->load->model('registrasimodel');

        // params

        

        $params = array('nama' => $this->input->post('nama'),                    

                'nama_asosiasi' => $this->input->post('nama_asosiasi'),

                'email' => $this->input->post('email'));

            // execute

            $this->_SendEmailTolak($params);

            $id = $this->input->post('id_registrasi');

            $this->db->where('id_registrasi', $id);

            $this->db->delete('registrasi_m');

            $this->uploader->remove_dir('doc/registrasi/'.$id."/");

        redirect('private/registrasi');

    }



    //ditolak

     public

    function process_dibatalkan() {

        // load library

        $this->load->library('notification');

        $this->load->library('uploader');

        $this->load->model('registrasimodel');

        // params

        

        $params = array('nama' => $this->input->post('nama'),                    

                'nama_asosiasi' => $this->input->post('nama_asosiasi'),

                'email' => $this->input->post('email'));

            // execute

            $this->_SendEmailBatal($params);

            $id = $this->input->post('id_registrasi');

            $this->db->where('id_registrasi', $id);

            $this->db->delete('registrasi_m');

            $this->uploader->remove_dir('doc/registrasi/'.$id."/");

        

        redirect('private/registrasi/disetujui');

    }



    



    private

    function _SendEmail($params){

        $seting = $this->db->get('sys_settings_m')->row_array();

        $registrasi = $this->db->get('registrasi_m')->row_array();

        $this->load->file('system/plugins/phpmailer/class.phpmailer.php');

        $mail = new PHPMailer();

        $name_smtp =  $seting['smtp_name'];

        $host_smtp = $seting['smtp_host'];

        $user_smtp = $seting['smtp_username'];

        $pass_smtp = $seting['smtp_password'];

        $port_smtp =  $seting['smtp_port'];

        $email_smtp = $seting['smtp_username'];

        $sec = 'ssl';

        $auth = 'true';

        $body= "<body bgcolor=\"#CCCCCC\">

                            <style>

                            .page {

                                margin: auto;

                                padding: 5px 5px 5px 5px;

                                width: 800px;

                                background-color: #FFFFFF;

                                border: 1px solid #999999;

                                font-family: Verdana, Arial, Helvetica, sans-serif;

                            }

                            .page p {

                                margin: 0px 0px 10px 0px;

                                font-size: 11px;

                                line-height: 16px;

                            }

                            .page H3 {

                                margin: 0px 0px 10px 0px;

                                font-size: 12px;

                            }

                            </style>

                            <div class=\"page\">

                                Yth. ".$params['nama']."

                                <br /><br />

                                <p align=\"justify\">

                                <b>Selamat</b>, Registrasi Anggota Anda telah kami setujui, sekarang Anda menjadi Anggota ".$params['nama_asosiasi']."

                                <br />

                                <br />Terimakasih, 

                                <br /><br />Admin

                                <br />Dewan Minyak Sawit Indonesia

                                </p>                    

                                <br /><br />

                            </div>

                            </body>";

        // $body             = $this->obj_mail->getFile('doc/mail/contents.html');

        $body             = str_replace("[\]",'',$body);

        // this script will auto generate setting

        $mail->IsSMTP();

        $mail->SMTPAuth   = $auth;

        // enable SMTP authentication

        $mail->SMTPSecure = "".$sec."";

        // sets the prefix to the servier

        $mail->Host       = ''.$host_smtp.'';

        // sets GMAIL as the SMTP server

        $mail->Port       = ''.$port_smtp.'';

        // set the SMTP port for the GMAIL server       

        $mail->Username   = ''.$user_smtp.'';

        // GMAIL username

        $mail->Password   = ''.$pass_smtp.'';

        // GMAIL password       

        $mail->AddReplyTo(''.$email_smtp.'', ''.$name_smtp.'');

        $mail->From       = ''.$email_smtp.'';

        $mail->FromName   = 'Admin DMSI';

        $mail->Subject    = 'Informasi Registrasi Anggota';

        //HTML Body

        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";

        // optional, comment out and test

        $mail->WordWrap   = 50;

        // set word wrap        

        $mail->MsgHTML($body);

        $mail->AddAddress($params['email'], 'Mail Sistem');

        // $this->obj_mail->AddAttachment("images/phpmailer.gif");             // attachment

        $mail->IsHTML(true);

        // send as HTML     

        

        if(!$mail->Send())return false; else return true;

    }



//email di tolak

     private

    function _SendEmailTolak($params){

        $seting = $this->db->get('sys_settings_m')->row_array();

        $registrasi = $this->db->get('registrasi_m')->row_array();

        $this->load->file('system/plugins/phpmailer/class.phpmailer.php');

        $mail = new PHPMailer();

        $name_smtp =  $seting['smtp_name'];

        $host_smtp = $seting['smtp_host'];

        $user_smtp = $seting['smtp_username'];

        $pass_smtp = $seting['smtp_password'];

        $port_smtp =  $seting['smtp_port'];

        $email_smtp = $seting['smtp_username'];

        $sec = 'ssl';

        $auth = 'true';

        $body= "<body bgcolor=\"#CCCCCC\">

                            <style>

                            .page {

                                margin: auto;

                                padding: 5px 5px 5px 5px;

                                width: 800px;

                                background-color: #FFFFFF;

                                border: 1px solid #999999;

                                font-family: Verdana, Arial, Helvetica, sans-serif;

                            }

                            .page p {

                                margin: 0px 0px 10px 0px;

                                font-size: 11px;

                                line-height: 16px;

                            }

                            .page H3 {

                                margin: 0px 0px 10px 0px;

                                font-size: 12px;

                            }

                            </style>

                            <div class=\"page\">

                                Yth. ".$params['nama']."

                                <br /><br />

                                <p align=\"justify\">

                                <b>Mohon Maaf</b>, Registrasi Anggota Anda tidak kami setujui, silahkan coba lagi nanti.

                                <br />

                                <br />Terimakasih, 

                                <br /><br />Admin

                                <br />Dewan Minyak Sawit Indonesia

                                </p>                    

                                <br /><br />

                            </div>

                            </body>";

        // $body             = $this->obj_mail->getFile('doc/mail/contents.html');

        $body             = str_replace("[\]",'',$body);

        // this script will auto generate setting

        $mail->IsSMTP();

        $mail->SMTPAuth   = $auth;

        // enable SMTP authentication

        $mail->SMTPSecure = "".$sec."";

        // sets the prefix to the servier

        $mail->Host       = ''.$host_smtp.'';

        // sets GMAIL as the SMTP server

        $mail->Port       = ''.$port_smtp.'';

        // set the SMTP port for the GMAIL server       

        $mail->Username   = ''.$user_smtp.'';

        // GMAIL username

        $mail->Password   = ''.$pass_smtp.'';

        // GMAIL password       

        $mail->AddReplyTo(''.$email_smtp.'', ''.$name_smtp.'');

        $mail->From       = ''.$email_smtp.'';

        $mail->FromName   = 'Admin DMSI';

        $mail->Subject    = 'Informasi Registrasi Anggota';

        //HTML Body

        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";

        // optional, comment out and test

        $mail->WordWrap   = 50;

        // set word wrap        

        $mail->MsgHTML($body);

        $mail->AddAddress($params['email'], 'Mail Sistem');

        // $this->obj_mail->AddAttachment("images/phpmailer.gif");             // attachment

        $mail->IsHTML(true);

        // send as HTML     

        

        if(!$mail->Send())return false; else return true;

    }



    //dibatalkan

   

     private

    function _SendEmailBatal($params){

        $seting = $this->db->get('sys_settings_m')->row_array();

        $registrasi = $this->db->get('registrasi_m')->row_array();

        $this->load->file('system/plugins/phpmailer/class.phpmailer.php');

        $mail = new PHPMailer();

        $name_smtp =  $seting['smtp_name'];

        $host_smtp = $seting['smtp_host'];

        $user_smtp = $seting['smtp_username'];

        $pass_smtp = $seting['smtp_password'];

        $port_smtp =  $seting['smtp_port'];

        $email_smtp = $seting['smtp_username'];

        $sec = 'ssl';

        $auth = 'true';

        $body= "<body bgcolor=\"#CCCCCC\">

                            <style>

                            .page {

                                margin: auto;

                                padding: 5px 5px 5px 5px;

                                width: 800px;

                                background-color: #FFFFFF;

                                border: 1px solid #999999;

                                font-family: Verdana, Arial, Helvetica, sans-serif;

                            }

                            .page p {

                                margin: 0px 0px 10px 0px;

                                font-size: 11px;

                                line-height: 16px;

                            }

                            .page H3 {

                                margin: 0px 0px 10px 0px;

                                font-size: 12px;

                            }

                            </style>

                            <div class=\"page\">

                                Yth. ".$params['nama']."

                                <br /><br />

                                <p align=\"justify\">

                                <b>Mohon Maaf</b>, Anda dihapus dari keanggotaan ".$params['nama_asosiasi'].".

                                <br />

                                <br />Terimakasih, 

                                <br /><br />Admin

                                <br />Dewan Minyak Sawit Indonesia

                                </p>                    

                                <br /><br />

                            </div>

                            </body>";

        // $body             = $this->obj_mail->getFile('doc/mail/contents.html');

        $body             = str_replace("[\]",'',$body);

        // this script will auto generate setting

        $mail->IsSMTP();

        $mail->SMTPAuth   = $auth;

        // enable SMTP authentication

        $mail->SMTPSecure = "".$sec."";

        // sets the prefix to the servier

        $mail->Host       = ''.$host_smtp.'';

        // sets GMAIL as the SMTP server

        $mail->Port       = ''.$port_smtp.'';

        // set the SMTP port for the GMAIL server       

        $mail->Username   = ''.$user_smtp.'';

        // GMAIL username

        $mail->Password   = ''.$pass_smtp.'';

        // GMAIL password       

        $mail->AddReplyTo(''.$email_smtp.'', ''.$name_smtp.'');

        $mail->From       = ''.$email_smtp.'';

        $mail->FromName   = 'Admin DMSI';

        $mail->Subject    = 'Informasi Pembatalan Anggota';

        //HTML Body

        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";

        // optional, comment out and test

        $mail->WordWrap   = 50;

        // set word wrap        

        $mail->MsgHTML($body);

        $mail->AddAddress($params['email'], 'Mail Sistem');

        // $this->obj_mail->AddAttachment("images/phpmailer.gif");             // attachment

        $mail->IsHTML(true);

        // send as HTML     

        

        if(!$mail->Send())return false; else return true;

    }







}