<?php
// important * untuk application base dari halaman ini

class Koordinator extends MY_Controller {

    function  __construct() {
        // load application base
       parent::__construct();
	   $this->PrivateAppBase();
	   $this->load->model('koordinatormodel');
    }

    public function index() {
        // template content
        $this->smarty->assign("template_content", "private/koordinator/list");
        // load
        $this->load->library('pagination');
        $this->load->library('notification');
        $this->load->library('downline');
		
		$this->layout->load_javascript("js/admin/plugins/treegrid/jquery.treegrid.min.js");
		$this->layout->load_javascript("js/admin/plugins/treegrid/jquery.treegrid.bootstrap3.js");
		$this->layout->load_style("admin/css/treegrid/jquery.treegrid.css");
		$id_koordinator = $this->uri->segment(4,0);
		$id_parent_edit = 0;
		$data_kota = $this->koordinatormodel->get_data_kabupaten_kota();
		$this->smarty->assign("data_kota", $data_kota);
		
		$datalevel = $this->koordinatormodel->get_koordinator_level();
		$this->smarty->assign("datalevel", $datalevel);		
		
		$data['nama_parent'] = '-';
		$data = $this->koordinatormodel->get_koordinator_by_id($id_koordinator);
		if(!empty($id_koordinator)):
			$aksi = 'edit';
			$this->smarty->assign("aksi_title", 'Edit');
			$parent = $this->koordinatormodel->get_koordinator_by_kode($data['kode_induk']);
			$id_parent_edit = $parent['id_koordinator'];
			$this->smarty->assign('url_process', site_url('private/koordinator/process/edit'));
			$parent = $this->koordinatormodel->get_koordinator_by_kode($data['kode_induk']);
			if(!empty($parent)):
				$data['nama_induk'] = $parent['nama_koordinator'];
			else:
				$data['nama_induk'] = '-';
			endif;
			$data_kecamatan = $this->koordinatormodel->get_data_kecamatan($data['id_kota']);
			$this->smarty->assign("data_kecamatan", $data_kecamatan);
			$data_kelurahan = $this->koordinatormodel->get_data_kelurahan($data['id_kecamatan']);
			$this->smarty->assign("data_kelurahan", $data_kelurahan);
		else:
			$aksi = 'tambah';
			$this->smarty->assign("aksi_title", 'Tambah');
			$this->smarty->assign('url_process', site_url('private/koordinator/process/add'));
		endif;
		$this->smarty->assign('url_kecamatan', site_url('private/koordinator/process/kecamatan'));
		$this->smarty->assign('url_kelurahan', site_url('private/koordinator/process/kelurahan'));
        $this->smarty->assign("aksi", $aksi);		
        $this->smarty->assign("data", $data);		
		$html = '';
		$koordinator = $this->koordinatormodel->get_data_level_root();
		if(!empty($koordinator)):
			$html = '<table class="table tree">';
			$html .= '<tr><th>NAMA KOORDINATOR</th><th>KODE KOORDINATOR</th>
						<th style="text-align:center;">JUMLAH DOWNLINE</th><th>&nbsp;</th><th>&nbsp;</th></tr>';
			foreach($koordinator as $row):
				$url_edit = site_url('private/koordinator/index/'.$row['id_koordinator']);
				$url_hapus = site_url('private/koordinator/hapus/'.$row['id_koordinator']);
				if($id_parent_edit == $row['id_koordinator']):
					$radio = '<input type="radio" name="id_parent" value="'.$row['id_koordinator'].'" checked="checked" >&nbsp;&nbsp;';
				else:
					$radio = '<input type="radio" name="id_parent" value="'.$row['id_koordinator'].'" >&nbsp;&nbsp;';
				endif;
				$html .= '<tr class="treegrid-'.$row['id_koordinator'].'"><td>&nbsp;&nbsp;'.$radio.$row['nama_koordinator'].'</td>';
				$html .= '<td>&nbsp;'.$row['kode_koordinator'].'</td>';
				$subdata = $this->_get_sub_koordinator($row['kode_koordinator'], $id_parent_edit);
				$str_jml = '';
				$jml_relawan = $this->downline->GetJmlDownline($row['kode_koordinator']);
				$color = (($jml_relawan > 0)?$color='bg-blue':$color='bg-red');
				$str_jml .= '<small class="badge '.$color.'" title="Jumlah Relawan '.$row['nama_koordinator'].'">&nbsp;'.$jml_relawan.'&nbsp;</small>&nbsp;';
				if(empty($subdata)):
					$url_akun = site_url('private/koordinator/akun/'.$row['id_koordinator'].'/'.url_title($row['nama_koordinator']));
					$html .= '<td align="center">'.$str_jml.'</td>';
					if(!$row['id_user'] > 0):
						$str_status = '<i class="fa fa-ban"></i>Akun Kosong&nbsp;&nbsp;';
					else:
						$str_status = '';
					endif;
					$html .= '<td align="right">'.$str_status.'<a href="'.$url_akun.'" title="Data Akun Koordinator Lapangan" class="btn btn-info btn-flat" target="_blank"><i class="fa fa-lock"></i></a></td>';					
				else:
					$html .= '<td>'.$str_jml.'</td><td>&nbsp;&nbsp;</td>';
				endif;
				$html .= '<td><div class="btn-group"><a href="'.$url_edit.'" title="Edit" class="btn btn-success btn-flat"><i class="fa fa-pencil"></i></a><a href="'.$url_hapus.'" title="Hapus" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a></div></td>';
				$html .=  '</tr>';
				$html .=  $subdata;
			endforeach;
			$html .= '</table>';
		endif;
		$this->smarty->assign("koordinator_relawan", $html);
		$this->smarty->assign("no", 1);
        $this->smarty->assign('url_add', site_url('private/koordinator'));
		
		// notification
        $arr_notify = $this->notification->get_notification();
        if (!empty($arr_notify['post'])) {
			$this->smarty->assign("data", $arr_notify['post']);
        }
		// notification  
		$this->smarty->assign("notification_msg", $arr_notify['message']);
		$this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':'green'));
        // parse url
       
        // display document
        $this->parser->parse('private/base-layout/document.html');
    }
    
    private function set_kecamatan(){
		$this->smarty->assign("template_content", "private/koordinator/kecamatan");
		$this->smarty->assign('url_kelurahan', site_url('private/koordinator/process/kelurahan'));
		$id_kota = $this->uri->segment(5,0);
		$data_kecamatan = $this->koordinatormodel->get_data_kecamatan($id_kota);
		$this->smarty->assign("data_kecamatan", $data_kecamatan);
		 $this->parser->parse('private/koordinator/kecamatan.html');
	}
	
	 private function set_kelurahan(){
		$this->smarty->assign("template_content", "private/koordinator/kelurahan");
		$id_kecamatan = $this->uri->segment(5,0);
		$data_kelurahan = $this->koordinatormodel->get_data_kelurahan($id_kecamatan);
		$this->smarty->assign("data_kelurahan", $data_kelurahan);
		 $this->parser->parse('private/koordinator/kelurahan.html');
	}
	
	private function _get_sub_koordinator($parent, $id_parent_edit) {
		$this->load->library('downline');
		$subdata = $this->koordinatormodel->get_data_level_child(array($parent));
		$html = '';
		if(!empty($subdata)):			
			foreach($subdata as $k=>$r):
				$subdata = $this->_get_sub_koordinator($r['kode_koordinator'], $id_parent_edit);
				if($id_parent_edit == $r['id_koordinator']):
					$radio = '<input type="radio" name="id_parent" value="'.$r['id_koordinator'].'" checked="checked">&nbsp;&nbsp;';
				else:
					$radio = '<input type="radio" name="id_parent" value="'.$r['id_koordinator'].'" >&nbsp;&nbsp;';
				endif;
				$url_edit = site_url('private/koordinator/index/'.$r['id_koordinator']);
				$url_hapus = site_url('private/koordinator/hapus/'.$r['id_koordinator']);
				$parent = $this->koordinatormodel->get_koordinator_by_kode($r['kode_induk']);
				$class_sub = '';
				$html .= '<tr class="treegrid-'.$r['id_koordinator'].' treegrid-parent-'.$parent['id_koordinator'].'"><td>&nbsp;&nbsp;'.$radio.$r['nama_koordinator'].'</td>';
				$html .= '<td>&nbsp;'.$r['kode_koordinator'].'</td>';	
				$str_jml = '';
				$jml_relawan = $this->downline->GetJmlDownline($r['kode_koordinator']);
				$color = (($jml_relawan > 0)? $color='bg-blue':$color='bg-red');
				$str_jml .= '<small class="badge '.$color.'" title="Jumlah Relawan Downline '.$r['nama_koordinator'].'">&nbsp;'.$jml_relawan.'&nbsp;</small>&nbsp;';
				if(empty($subdata)):
					if(!$r['id_user'] > 0):
						$str_status = '<i class="fa fa-ban"></i>Akun Kosong&nbsp;&nbsp;';
					else:
						$str_status = '';
					endif;
					$url_akun = site_url('private/koordinator/akun/'.$r['id_koordinator'].'/'.url_title($r['nama_koordinator']));					
					$html .= '<td align="center">'.$str_jml.'</td>';
					$html .= '<td align="right">&nbsp;&nbsp;'.$str_status.'<a href="'.$url_akun.'" title="Data AKun Koordinator Lapangan" class="btn btn-info btn-flat" target="_blank"><i class="fa fa-lock"></i></a></td>';
				else:
					$html .= '<td>'.$str_jml.'</td><td>&nbsp;</td>';
				endif;
				$html .= '<td><div class="btn-group">';
				$html .= '<a href="'.$url_edit.'" title="Edit" class="btn btn-success btn-flat"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;';
				$html .= '<a href="'.$url_hapus.'" title="Hapus" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>';
				$html .= '</div></td></tr>';
				$html .=  $subdata;
			endforeach;
		endif;
		return $html;
	}

    public function process($action) {
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
			case 'addakun':
                $this->process_addakun();
                break;
			case 'editakun':
                $this->process_edit_akun();
                break;
            case 'kecamatan':
				$this->set_kecamatan();
                break;
            case 'kelurahan':
				$this->set_kelurahan();
                break;
            default :
                // default redirect
                redirect('private/sistemhirarki');
                break;
        }
    }

    public function process_add() {
        // load library
        $this->load->library('notification');
        // set rules
		$this->notification->check_post('kode_koordinator', 'Kode Koordinator', 'required');
		$this->notification->check_post('nama_koordinator', 'Nama Koordinator', 'required');
		 $this->notification->check_post('id_kota', 'Kota', 'required');
        $this->notification->check_post('id_kecamatan', 'Kecamatan', 'required');
        $this->notification->check_post('id_kelurahan', 'Kelurahan', 'required');
		$this->notification->check_post('no_ktp', 'No KTP', 'required');
		$this->notification->check_post('id_level', 'Level Koordinator', 'required');
		$kode_induk = intval($this->input->post('id_parent'));
        // run
		$kode_koordinator = $this->input->post('kode_koordinator');
        if ($this->notification->valid_input()) {
			$datakoordinator = $this->koordinatormodel->get_koordinator_by_kode($kode_koordinator);
			if(!empty($datakoordinator)):
				$this->notification->set_message("Kode Koordinator yang dimasukkan Sudah Ada!");
                $this->notification->sent_notification(false);
				redirect('private/koordinator');
			endif;			
			if(empty($kode_induk) AND $this->input->post('id_level') > 1):
				$this->notification->set_message("Induk Koordinator belum ada, harap tentukan Koordinator di atasnya  !");
                $this->notification->sent_notification(false);
				redirect('private/koordinator');
			endif;

			if($kode_induk > 1): 
				$parent = $this->koordinatormodel->get_koordinator_by_id($kode_induk);
			else:
				$parent['kode_koordinator'] = '';
			endif;
			
			// params
			$params = array($this->input->post('id_level'), 
					$this->input->post('kode_koordinator'), 
					$parent['kode_koordinator'], 
					$this->input->post('nama_koordinator'), 
					$this->input->post('no_ktp'), 
					$this->input->post('no_hp'),
					$this->input->post('id_kota'),
					$this->input->post('id_kecamatan'),
					$this->input->post('id_kelurahan'));
			// processing
            if ($this->koordinatormodel->process_koordinator_add($params)) {
				
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
        redirect('private/koordinator');
    }

   
    public function process_edit() {
        // load library
        $this->load->library('notification');
		 // set rules
		$this->notification->check_post('kode_koordinator', 'Kode Koordinator', 'required');
		$this->notification->check_post('nama_koordinator', 'Nama Koordinator', 'required');
		$this->notification->check_post('no_ktp', 'No KTP', 'required');
		$this->notification->check_post('id_level', 'Level Koordinator', 'required');
		$this->notification->check_post('id_kota', 'Kota', 'required');
        $this->notification->check_post('id_kecamatan', 'Kecamatan', 'required');
        $this->notification->check_post('id_kelurahan', 'Kelurahan', 'required');
		 // run
        if ($this->notification->valid_input()) {
			$kode_induk = intval($this->input->post('id_parent'));
			$kode_baru = trim($this->input->post('kode_koordinator'));
			$kode_lama = trim($this->input->post('kode_koordinator_lama'));
			if($kode_baru != $kode_lama):
				$datakoordinator = $this->koordinatormodel->get_koordinator_by_kode($kode_baru);
				if(!empty($datakoordinator)):
					$this->notification->set_message("Kode Koordinator baru yang dimasukkan Sudah Ada !");
					$this->notification->sent_notification(false);
					redirect('private/koordinator');
				endif;
			endif;		
			//kode_koordinator = ?, nama_koordinator = ?, kode_induk = ?, no_ktp = ?, no_hp = ?
			if($kode_induk > 1): 
				$parent = $this->koordinatormodel->get_koordinator_by_id($kode_induk);
			else:
				$parent['kode_koordinator'] = '';
			endif;
            $params = array( 
					$kode_baru ,
                    $this->input->post('nama_koordinator'), 
                    $parent['kode_koordinator'],
                    $this->input->post('no_ktp'),
                    $this->input->post('no_hp'),
                    $this->input->post('id_kota'),
					$this->input->post('id_kecamatan'),
					$this->input->post('id_kelurahan'),
                    $kode_lama);
									
            if ($this->koordinatormodel->process_koordinator_update($params)) {
				if($kode_baru != $kode_lama):
					$par = array($kode_baru, $kode_lama);
					$this->koordinatormodel->process_koordinator_update_child($par);
				endif;
				$this->notification->clear_post();
                $this->notification->set_message("Data berhasil disimpan");
                $this->notification->sent_notification(true);
            }else {
                $this->notification->set_message("Data gagal disimpan");
                $this->notification->sent_notification(false);
            }
        }else {
            $this->notification->sent_notification(false);
        }
        // default redirect
        redirect('private/koordinator/index/'.$this->input->post('id_koordinator'));
    }
	
	
	
	
	public function hapus() {
        // template content
        $this->smarty->assign("template_content", "private/koordinator/koordinator-hapus");
        $this->load->library('notification');
		
        // url
        $this->smarty->assign("url_add", site_url("private/koordinator/add"));
        $this->smarty->assign("url_list", site_url("private/koordinator"));
        $this->smarty->assign("url_process", site_url("private/koordinator/process/hapus"));
        // data
        $id_koordinator = $this->uri->segment(4, 0);
        $data = $this->koordinatormodel->get_koordinator_by_id($id_koordinator);
		if(!empty($data)):
			$parent = $this->koordinatormodel->get_koordinator_by_kode($data['kode_induk']);
			if(!empty($parent)):
				$data['nama_induk'] = $parent['nama_koordinator'];
			else:
				$data['nama_induk'] = '-';
			endif;
        endif;
		$this->smarty->assign("data", $data);				
        // notification
        $arr_notify = $this->notification->get_notification();
        if (!empty($arr_notify['post'])) {
            $this->smarty->assign("data", $arr_notify['post']);
        }
        // notification
        $this->smarty->assign("notification_msg", $arr_notify['message']);
        $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':'green'));
        // display document
        $this->parser->parse('private/base-layout/document.html');
    }

    public function process_hapus() {
        // load library
        $this->load->library('notification');
        // set rules
        $this->notification->check_post('id_koordinator', 'ID Koordinator', 'required');
        // run
        $id = $this->input->post('id_koordinator');
        if ($this->notification->valid_input()) {
			if ($this->koordinatormodel->process_koordinator_delete_one($id)) {
                $this->notification->clear_post();
                $this->notification->set_message('Data berhasil dihapus');
                $this->notification->sent_notification(true);
            } else {
                $this->notification->set_message("Data gagal dihapus");
                $this->notification->sent_notification(false);
				 redirect('private/koordinator/hapus/'.$id);
            }
        } else {
            $this->notification->sent_notification(false);
        }
        // default redirect
        redirect('private/koordinator');
    }
	
	 public function akun() {
            // template content
            $this->smarty->assign("template_content", "private/koordinator/koordinator-akun");
            // load
            $this->load->model('adminmodel');
            $this->load->library('cryptosimple');
            $this->load->model('koordinatormodel');
            $id_user = 0;
            $id_koordinator = $this->uri->segment(4,0);
            $koordinator = $this->koordinatormodel->get_koordinator_by_id($id_koordinator);
            if(empty($koordinator)):
				redirect('private/koordinator');
			else:
				$id_user = $koordinator['id_user'];				
            endif;
            $this->smarty->assign('koordinator', $koordinator);
            if(empty($id_user)):
				 $this->smarty->assign('akundata', array('id_user' =>'', 'user_name' => '', 'user_pass' => ''));
				 $this->smarty->assign('aksi', 'tambah');
				 $this->smarty->assign('aksi_judul', 'Tambah');
				 $this->smarty->assign('url_process', site_url('private/koordinator/process/addakun'));
            else:
				$dataakun = $this->koordinatormodel->get_akun_koordinator_by_id($id_user);
				$dataakun['user_pass'] = $this->cryptosimple->do_decryption($dataakun['user_pass'], $dataakun['user_key']);
				
				$this->smarty->assign('akundata', $dataakun);
				$this->smarty->assign('aksi', 'edit');
				$this->smarty->assign('url_process', site_url('private/koordinator/process/editakun'));
            endif;			
            
            // parse url
            $this->smarty->assign('url_list', site_url('private/koordinator'));
            // notification
            $this->load->library('notification');
            $arr_notify = $this->notification->get_notification();            
            if(!empty($arr_notify['post'])) {
                // //list museum 
                //$this->smarty->assign("data", $arr_notify['post']);
            }

            // notification
            $this->smarty->assign("notification_msg", $arr_notify['message']);
            $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':
            'green'));
            // display document
            $this->parser->parse( 'private/base-layout/document.html');
        }
        
        
       private function process_addakun() {
        // load
        $this->load->model('adminmodel');
        $this->load->library('notification');
        $this->load->library('cryptosimple');
        // set rules
        $this->notification->check_post('user_name_koordinator', 'Username', 'required');
        $this->notification->check_post('user_pass_koordinator', 'Password', 'required');
       
        $id_auth = 4;
        $id_koordinator = $this->input->post('id_koordinator');
        $user_key = $this->cryptosimple->create_user_key($this->input->post('user_pass_koordinator'));
        $password = $this->cryptosimple->do_encryption($this->input->post('user_pass_koordinator'), $user_key);
        // run
          if ($this->notification->valid_input()) {
             $username = $this->input->post('user_name_koordinator');
             $id_user = $this->input->post('id_user');
                      
           
           if(strlen($username) < 6) {
                $this->notification->set_message('Username minimal 6 karakter');
                redirect('private/koordinator/akun');
           }elseif($this->accountmodel->is_exists_username(strtolower($username))) {
                $this->notification->set_message('Nama username sudah ada, gunakan username yang lain!');
                redirect('private/koordinator/akun');
           }
     
        }
        if ($this->notification->valid_input()) {
            // params user
            $params_user = array("user_name" => $this->input->post('user_name_koordinator'),        
                "user_pass" => $password,        
                "user_key" => $user_key,       
                 "user_status" => 'active',        
                 "user_mail" => '-',       
                  "mdb" => $this->id_user);
            $params_akses = array("id_auth" => $id_auth);
            $params_koordinator = array("id_koordinator" => $this->input->post('id_koordinator'));
            // processing data
            $proses = $this->koordinatormodel->process_add_administrator($params_user, $params_akses, $params_koordinator);
                        
            if($proses[0]) {
                $id_data =  $proses[1];
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
        redirect('private/koordinator/akun/'.$id_koordinator);
    }
    
    
    private function process_edit_akun() {
        // load
        $this->load->model('adminmodel');
        $this->load->library('notification');
        $this->load->library('cryptosimple');
        // set rules
        $this->notification->check_post('user_name_koordinator', 'Username', 'required');
        $this->notification->check_post('user_pass_koordinator', 'Password', 'required');
        
        $id_auth = 4;
        $id_koordinator = $this->input->post('id_koordinator');
        $user_key = $this->cryptosimple->create_user_key($this->input->post('user_pass_koordinator'));
        $password = $this->cryptosimple->do_encryption($this->input->post('user_pass_koordinator'), $user_key);
        // run
          if ($this->notification->valid_input()) {
             $username = $this->input->post('user_name_koordinator');
             $id_user = $this->input->post('id_user');
                      
           
           if(strlen($username) < 6) {
                $this->notification->set_message('Username minimal 6 karakter');
                redirect('private/koordinator/akun/'.$id_koordinator);
           }elseif($this->accountmodel->is_exists_username(strtolower($username))) {
                $this->notification->set_message('Nama username sudah ada, gunakan username yang lain!');
                redirect('private/koordinator/akun/'.$id_koordinator);
           }
     
        }
        if ($this->notification->valid_input()) {
            // params user
            $params_user = array("user_name" => $this->input->post('user_name_koordinator'),        
                "user_pass" => $password,        
                "user_key" => $user_key,       
                "id_user" =>  $this->input->post('id_user'));
            // processing data
            $proses = $this->koordinatormodel->process_update_akun($params_user);
                        
            if($proses) {
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
        redirect('private/koordinator/akun/'.$id_koordinator);
    }
	
}
