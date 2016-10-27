<?php
	// important * untuk application base dari halaman ini
	class Kontak extends MY_Controller {
		
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
			$this->smarty->assign('template_content',"web/kontak/kontak.html");
			// load
			$this->load->library('notification');
			$this->load->model('kontakmodel');
			$this->layout->load_javascript("js/front/modules/maps-google.js");
			// notification
			$arr_notify = $this->notification->get_notification();
			
			if (!empty($arr_notify['post'])) {
				$this->smarty->assign("data", $arr_notify['post']);
			}

			$this->smarty->assign("notification_msg", $arr_notify['message']);
			$this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
			'green'));
			$this->smarty->assign("page_modul", 'Kontak');
			$this->smarty->assign("page_judul", 'Kontak Kami');
			$this->smarty->assign("page_modul_url", site_url('public/kontak'));
			$this->smarty->assign("url_process_kontak", site_url('public/kontak/send'));
			$this->smarty->assign("url_captcha", site_url('public/kontak/captcha'));
			// // get data asosiasi
			// $listasosiasi = $this->kontakmodel->get_list_asosiasi();
			// $this->smarty->assign('listasosiasi', $listasosiasi);
			// display document
			$this->parser->parse('web/base-layout/document-full.html');
		}

		public
		function send() {
			// load library
			$this->load->library('notification');
			// set rules
			$this->notification->check_post('nama', 'Nama', 'required');
			$this->notification->check_post('email', 'Email', 'required');
			$this->notification->check_post('subjek', 'Subjek', 'required');
			$this->notification->check_post('isi_pesan', 'Isi Pesan', 'required');
			$this->notification->check_post('kode_validasi', 'Kode Validasi', 'required');
			// run
			
			if ($this->notification->valid_input()) {
				
				if(!$this->cekvalidasi()):
				$this->notification->set_message("Kode Validasi yang dimasukkan tidak benar, harap ulangi kembali!");
				$this->notification->sent_notification(false);
				redirect('public/kontak');
				endif;
				// params
				$params = array( 'nama' => $this->input->post('nama'), 'email' => $this->input->post('email'),                    'subjek' => $this->input->post('subjek'), 'isi_pesan' => $this->input->post('isi_pesan'));
				
				if($this->_SendEmailKontak($params)):
				$this->notification->clear_post();
				$this->notification->set_message("Pesan Anda Sudah Terkirim ");
				$this->notification->sent_notification(true); else :
				$this->notification->clear_post();
				$this->notification->set_message("Pesan Anda gagal Terkirim.");
				$this->notification->sent_notification(false);
				endif;
			} else {
				$this->notification->sent_notification(false);
			}

			// default redirect
			redirect('public/kontak');
		}

		public
		function cekvalidasi(){
			//cek kode validasi 
			$captcha_string  = strtolower($this->session->userdata('random_number'));
			//echo $captcha_string.'==='.$this->input->post("kode_validasi"); exit;
			
			if(strtolower($this->input->post("kode_validasi")) == $captcha_string){
				return true;
			} else {
				return false;
			}

		}

		//create captcha 
		public
		function captcha(){
			$string = '';
			for ($i = 0; $i < 5; $i++) {
				$string .= chr(rand(97, 122));
			}

			//$_SESSION['random_number'] = $string;
			$this->session->set_userdata('random_number', $string);
			//echo $this->session->userdata('random_number');exit;
			$dir = 'themes/fonts/';
			$image = imagecreatetruecolor(165, 50);
			// random number 1 or 2
			$num = rand(1,2);
			
			if($num==1){
				$font = "Capture it 2.ttf";
				// font style
			} else {
				$font = "Molot.otf";
				// font style
			}

			// random number 1 or 2
			$num2 = rand(1,2);
			
			if($num2==1){
				$color = imagecolorallocate($image, 113, 193, 217);
				// color
			} else {
				$color = imagecolorallocate($image, 163, 197, 82);
				// color
			}

			$white = imagecolorallocate($image, 255, 255, 255);
			// background color white
			imagefilledrectangle($image,0,0,399,99,$white);
			imagettftext ($image, 30, 0, 10, 40, $color, $dir.$font, $this->session->userdata('random_number') );
			header("Content-type: image/png");
			imagepng($image);
		}

		private
		function _SendEmailKontak($params){
			$seting = $this->db->get('sys_settings_m')->row_array();
			$kontak = $this->db->get('kontak_m')->row_array();
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
								Yth. Admin Sistem 
								<br /><br />
								<p align=\"justify\">
								Ada pesan dari user/pengunjung Sistem Dewan Minyak Sawit Indonesia, dengan data sbb  : 
								<br />Nama : ".$params['nama']."
								<br />Email : ".$params['email']." 
								<br />Subjek : ".$params['subjek']."
								<br /><br />".$params['isi_pesan']." 
								<br /><br />
								<br />Terimakasih, 
								<br /><br />Dewan Minyak Sawit Indonesia
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
			$mail->FromName   = 'KONTAK DMSI';
			$mail->Subject    = $params['subjek'];
			//HTML Body
			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
			// optional, comment out and test
			$mail->WordWrap   = 50;
			// set word wrap		
			$mail->MsgHTML($body);
			$mail->AddAddress($kontak['email'], 'Mail Sistem');
			// $this->obj_mail->AddAttachment("images/phpmailer.gif");             // attachment
			$mail->IsHTML(true);
			// send as HTML		
			
			if(!$mail->Send())return false; else return true;
		}

	}