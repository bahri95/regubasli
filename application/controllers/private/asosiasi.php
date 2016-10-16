<?php
    class Asosiasi extends MY_Controller {
        
        function  __construct() {
            // load application base
            parent::__construct();
            $this->PrivateAppBase();
        }

        public
        function overview(){
            // template content
            $this->smarty->assign("template_content", "private/asosiasi/overview");
            // display document
            $this->parser->parse('private/base-layout/document.html');
        }

        public
        function index() {
            // template content
            $this->smarty->assign("template_content", "private/asosiasi/list");
            // load
            $this->load->model('asosiasimodel');
            $this->load->library('pagination');
            $this->load->library('notification');
            $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");
            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");
            // $data_propinsi = $this->asosiasimodel->get_all_propinsi();
            // $this->smarty->assign("propinsi", $data_propinsi);
            // search variable
            // $search_key = array("nama_propinsi"   => '%');
            // $search = $this->session->userdata('search_asosiasi');
            
            // if(!empty($search)) {
            //     $this->smarty->assign("search_status", "yes");
            //     $this->smarty->assign("propinsi_selected", $search['nama_propinsi']);
            //     // search parameter
            //     $search_key['nama_propinsi'] = '%' . $search['nama_propinsi'] . '%';
            // }

            //pagination
            $this->smarty->assign("no", 1);
            $data = $this->asosiasimodel->get_data_asosiasi_all();
            // parse data
            $this->smarty->assign("asosiasi", $data);
            //$this->smarty->assign("total", $config['total_rows']);
            // notification
            $arr_notify = $this->notification->get_notification();
            $this->smarty->assign("notification_msg", $arr_notify['message']);
            $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
            'green'));
            // parse url
            $this->smarty->assign('url_add', site_url('private/asosiasi/add'));
            $this->smarty->assign('url_list', site_url('private/asosiasi/index'));
            $this->smarty->assign('url_edit', site_url('private/asosiasi/edit'));
            $this->smarty->assign('url_delete', site_url('private/asosiasi/hapus'));
            $this->smarty->assign('url_search', site_url('private/asosiasi/process/search'));
            $this->smarty->assign('url_anggota', site_url('private/asosiasi/anggota'));
            // display document
            $this->parser->parse('private/base-layout/document.html');
        }

        //anggota
        public
        function anggota() {
            // template content
            $this->smarty->assign("template_content", "private/asosiasi/anggota");
            // load
            $this->load->model('registrasimodel');
            $this->load->library('pagination');
            $this->load->library('notification');
            $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");
            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");
            
            //data anggota disetujui
            $data_anggota_disetujui = $this->registrasimodel->get_list_anggota_disetujui_asosiasi();
            $this->smarty->assign('data_anggota_disetujui', $data_anggota_disetujui);
            
             //data asosiasi
            $data_asosiasi = $this->registrasimodel->get_list_asosiasi_satu();
            $this->smarty->assign('data_asosiasi', $data_asosiasi);
            //pagination
            $this->smarty->assign("no", 1);
            // notification
            $arr_notify = $this->notification->get_notification();
            $this->smarty->assign("notification_msg", $arr_notify['message']);
            $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
            'green'));
             // process anggota dibatalkan
            $this->smarty->assign("url_process_anggota_dibatalkan", site_url("private/asosiasi/process/dibatalkan"));
            // parse url
            $this->smarty->assign('url_add', site_url('private/asosiasi/add'));
            $this->smarty->assign('url_list', site_url('private/asosiasi/index'));
            $this->smarty->assign('url_edit', site_url('private/asosiasi/edit'));
            $this->smarty->assign('url_delete', site_url('private/asosiasi/hapus'));
            $this->smarty->assign('url_search', site_url('private/asosiasi/process/search'));
            $this->smarty->assign('url_anggota', site_url('private/asosiasi/anggota'));
            // display document
            $this->parser->parse('private/base-layout/document.html');
        }

        //dibatalkan
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
        $id_asosiasi = $this->uri->segment(4,0);
        redirect('private/asosiasi/anggota/'.$id_asosiasi);
    }


        public
        function add() {
            // template content
            $this->smarty->assign("template_content", "private/asosiasi/asosiasi-add");
            //load
            $this->load->library('notification');
            $this->load->model('asosiasimodel');
            // url
            $this->smarty->assign("url_add", site_url("private/asosiasi/add"));
            $this->smarty->assign("url_list", site_url("private/asosiasi"));
            $this->smarty->assign("url_process", site_url("private/asosiasi/process/add"));
            $this->smarty->assign("url_kota", site_url("private/asosiasi/process/ajax_kota_by_propinsi"));
            // get notification
            $arr_notify = $this->notification->get_notification();
            // list propinsi
            // $data_propinsi = $this->asosiasimodel->get_all_propinsi();
            // $this->smarty->assign("propinsi", $data_propinsi);
            // // list kota
            
            // if (isset($arr_notify['post']['id_propinsi'])) {
            //     echo $arr_notify['post']['id_kota'];
            //     $data_kota = $this->asosiasimodel->get_all_kota_by_propinsi($arr_notify['post']['id_propinsi']);
            //     $this->smarty->assign("data_kota", $data_kota);
            // }

            // notification
            
            if (!empty($arr_notify['post'])) {
                $this->smarty->assign("data", $arr_notify['post']);
            }

            $this->smarty->assign("notification_msg", $arr_notify['message']);
            $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
            'green'));
            // display document
            $this->parser->parse('private/base-layout/document.html');
        }

        public
        function process($action = '') {
            switch ($action) {
                case 'add':
                    $this->process_add();
                    break;
                case 'edit':
                    $this->process_edit();
                    break;
                case 'hapus':
                    $this->process_hapus();
                    break;
                case 'search':
                    $this->process_search();
                    break;
                case 'dibatalkan':
                    $this->process_dibatalkan();
                    break;
                case 'ajax_kota_by_propinsi':
                    $this->process_ajax_kota_by_propinsi();
                    break;
                default :
                    // default redirect
                    redirect('private/asosiasi/add');
                    break;
            }

    }

    public
    function process_ajax_kota_by_propinsi() {
        $id_propinsi = $this->uri->segment(5, 0);
        // load
        $this->load->model('asosiasimodel');
        // get data
        $kota = $this->asosiasimodel->get_all_kota_by_propinsi($id_propinsi);
        echo '<select name="id_kota" class="form-control"><option value="">-- pilih kota --</option>';
        
        if($kota) {
            foreach($kota as $data) {
                echo '<option value="'.$data['id_kota'].'">';
                echo $data['nama_kota'];
                echo '</option>';
            }

        }

        echo '</select>';
    }

    public
    function process_search() {
        $search = array("nama_propinsi" => $this->input->post('nama_propinsi'));
        // reset
        $reset = $this->input->post('reset');
        
        if(!empty($reset)) {
            $search = array();
        }

        // set session
        $this->session->set_userdata('search_asosiasi', $search);
        // default redirect
        redirect('private/asosiasi');
    }

    public
    function process_add() {
        // load library
        $this->load->model('asosiasimodel');
        $this->load->library('notification');
        // set rules
        $this->notification->check_post('nama_propinsi', 'Propinsi', 'required');
        $this->notification->check_post('nama_kota', 'Kota', 'required');
        $this->notification->check_post('nama_asosiasi', 'Nama asosiasi', 'required');
        $this->notification->check_post('alamat', 'Alamat', 'required');
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = array($this->input->post('nama_propinsi'),
                $this->input->post('nama_kota'),                     
                $this->input->post('nama_asosiasi'), 
                $this->input->post('alamat'),                    
                $this->input->post('kodepos'),                    
                $this->input->post('telepon'), 
                $this->input->post('fax'),                    
                $this->input->post('website'), 
                $this->input->post('email'), 
                $this->input->post('profil'),                     
                $this->input->post('profil_english'),  
                $this->id_user);
            
            if ($this->asosiasimodel->process_asosiasi_add($params)) {
                $id_asosiasi= $this->db->insert_id();
                $this->notification->clear_post();
                $this->notification->set_message("Data berhasil disimpan");
                $this->notification->sent_notification(true);
                redirect('private/asosiasi/edit/'.$id_asosiasi);
            } else {
                $this->notification->set_message("Data gagal disimpan");
                $this->notification->sent_notification(false);
            }

        } else {
            $this->notification->sent_notification(false);
        }

        // default redirect
        redirect('private/asosiasi/add');
    }

    public
    function edit($id_asosiasi = '') {
        // template content
        $this->smarty->assign("template_content", "private/asosiasi/asosiasi-edit");
        // load
        $this->load->library('notification');
        $this->load->model('asosiasimodel');
        $id_asosiasi = abs($id_asosiasi);
        // url
        $this->smarty->assign("url_add", site_url("private/asosiasi/add"));
        $this->smarty->assign("url_list", site_url("private/asosiasi"));
        $this->smarty->assign("url_process", site_url("private/asosiasi/process/edit"));
        $this->smarty->assign("url_kota", site_url("private/asosiasi/process/ajax_kota_by_propinsi"));
        // get notification
        $arr_notify = $this->notification->get_notification();
        // data
        $data = $this->asosiasimodel->get_asosiasi_by_id($id_asosiasi);
        
        if($data) {
            // asosiasi
            $pathfoto = 'doc/asosiasi/'.$data['id_asosiasi'].'/'.$data['logo_asosiasi'];
            
            if(is_file($pathfoto)) {
                $data['foto_utama'] = BASEURL.$pathfoto;
                $data['max_width'] = '300px';
            } else {
                $data['foto_utama'] = BASEURL.'doc/images/logo_icon.jpg';
                $data['max_width'] = '200px';
            }

            $this->smarty->assign("data", $data);
            // list propinsi
            // $data_propinsi = $this->asosiasimodel->get_all_propinsi();
            // $this->smarty->assign("propinsi", $data_propinsi);
            // // list kota
            
            // if (isset($arr_notify['post']['id_propinsi'])) {
            //     $propinsi_selected = $arr_notify['post']['id_propinsi'];
            // } else {
            //     $propinsi_selected = $data['id_propinsi'];
            // }

            // $data_kota = $this->asosiasimodel->get_all_kota_by_propinsi($propinsi_selected);
            // $this->smarty->assign("data_kota", $data_kota);
        }

        // notification
        
        if (!empty($arr_notify['post'])) {
            $this->smarty->assign("data", $arr_notify['post']);
        }

        $this->smarty->assign("notification_msg", $arr_notify['message']);
        $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
        'green'));
        // display document
        $this->parser->parse('private/base-layout/document.html');
    }

    public
    function process_edit() {
        // load library
        $this->load->model('asosiasimodel');
        $this->load->library('notification');
        $this->load->library('uploader');
        // set rules
        $this->notification->check_post('id_asosiasi', 'No Registrasi asosiasi', 'required');
        $this->notification->check_post('nama_propinsi', 'Propinsi', 'required');
        $this->notification->check_post('nama_kota', 'Kota', 'required');
        $this->notification->check_post('nama_asosiasi', 'Nama asosiasi', 'required');
        $this->notification->check_post('alamat', 'Alamat', 'required');
        $this->smarty->assign("url_kota", site_url("private/asosiasi/process/ajax_kota_by_propinsi"));
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = array($this->input->post('nama_propinsi'),
                $this->input->post('nama_kota'), 
                $this->input->post('nama_asosiasi'),                     
                $this->input->post('profil'),                      
                $this->input->post('profil_english'), 
                $this->input->post('alamat'),                     
                $this->input->post('kodepos'),                    
                $this->input->post('telepon'), 
                $this->input->post('fax'),                    
                $this->input->post('website'),                    
                $this->input->post('email'),                     
                $this->id_user, 
                $this->input->post('id_asosiasi'));
            
            if ($this->asosiasimodel->process_asosiasi_edit($params)) {
                
                if (!empty($_FILES['foto_asosiasi']['name'])) {
                    $id_asosiasi = $this->input->post('id_asosiasi');
                    $dataasosiasi= $this->asosiasimodel->get_asosiasi_by_id($id_asosiasi);
                    $_FILES['foto_asosiasi']['name'] = $id_asosiasi.'_'.$_FILES['foto_asosiasi']['name'];
                    //hapus foto lama
                    $logo_lama = 'doc/asosiasi/'.$id_asosiasi.'/'.$this->input->post('logo_lama');
                    
                    if(is_file($logo_lama)):
                    unlink($logo_lama);
                    $this->db->set("logo_asosiasi",'');
                    $this->db->where("id_asosiasi", $id_asosiasi);
                    $this->db->update("asosiasi_m");
                    endif;
                    $config['upload_path']= "./doc/asosiasi/".$id_asosiasi.'/';
                    $config['allowed_types']= 'gif|jpg|png|jpeg';
                    //$config['file_type']    = 'image/png';
                    $config['file_name']= $_FILES['foto_asosiasi']['name'];
                    
                    if(!is_dir($config['upload_path'])):
                    mkdir($config['upload_path']);
                    endif;
                    $this->load->library('upload', $config);
                    
                    if ($this->upload->do_upload("foto_asosiasi")) {
                        $data = $this->upload->data();
                        $logo_asosiasi = $data['file_name'];
                        $this->db->set("logo_asosiasi",$logo_asosiasi);
                        $this->db->where("id_asosiasi", $id_asosiasi);
                        $this->db->update("asosiasi_m");
                    }

                }

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
        redirect('private/asosiasi/edit/' . $this->input->post('id_asosiasi'));
    }

    public
    function hapus($id_asosiasi = '') {
        // template content
        $this->smarty->assign("template_content", "private/asosiasi/asosiasi-hapus");
        //load
        $this->load->library('notification');
        $this->load->model('asosiasimodel');
        // assign variable
        // url
        $this->smarty->assign("url_add", site_url("private/asosiasi/add"));
        $this->smarty->assign("url_list", site_url("private/asosiasi"));
        $this->smarty->assign("url_process", site_url("private/asosiasi/process/hapus"));
        // data
        $data = $this->asosiasimodel->get_asosiasi_by_id($id_asosiasi);
        $this->smarty->assign("data", $data);
        // notification
        $arr_notify = $this->notification->get_notification();
        $this->smarty->assign("notification_msg", $arr_notify['message']);
        $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
        'green'));
        // display document
        $this->parser->parse('private/base-layout/document.html');
    }

    public
    function process_hapus() {
        // load library
        $this->load->library('notification');
        $this->load->model('asosiasimodel');
        // set rules
        $this->notification->check_post('id_asosiasi', 'Id Asosiasi', 'required');
        // run
        
        if ($this->notification->valid_input()) {
            $params = $this->input->post('id_asosiasi');
            
            if ($this->asosiasimodel->process_asosiasi_delete($params)) {
                $this->notification->clear_post();
                $this->notification->set_message("Data berhasil dihapus");
                $this->notification->sent_notification(true);
                redirect('private/asosiasi');
            } else {
                $this->notification->set_message("Data gagal dihapus");
                $this->notification->sent_notification(false);
            }

        }

        // default redirect
        redirect('private/asosiasi/hapus/' . $this->input->post('id_asosiasi'));
    }

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