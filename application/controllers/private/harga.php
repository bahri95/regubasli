<?php
    class Harga extends MY_Controller {
        
        function  __construct() {
            // load application base
            parent::__construct();
            $this->PrivateAppBase();
        }

        public
        function index() {
            // template content
            $this->smarty->assign("template_content", "private/harga/list");
            // load
            $this->load->model('hargamodel');
            $this->load->library('notification');
            $this->load->library('pagination');
            $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");
            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");
            //get kategori harga
            $this->smarty->assign("no_cpo", 1);
            $this->smarty->assign("no_ekspor", 1);
            
            $view_tab = $this->session->userdata('view_tab');
            if(empty($view_tab)):
				$view_tab = '';
            endif;
            $this->smarty->assign("view_tab", $view_tab);
            if($this->hargamodel->get_list_harga_private()){
            $datakatharga = $this->hargamodel->get_list_katharga();
            $this->smarty->assign("katharga", $datakatharga);
            $id_katharga = $this->input->post('id_katharga');
            $this->smarty->assign("id_katharga", $id_katharga);
            
            // get data
            $data = $this->hargamodel->get_list_harga_private();
            $this->smarty->assign("data", $data);
            
            //list data domestik harga input TBS
            $datadomestik_input = $this->hargamodel->get_list_harga_tabel_input('1');
            $this->smarty->assign("data_domestik_input", $datadomestik_input);
            
            //list data domestik harga input CPO DOMESTIK
            $data_cpodomestik = $this->hargamodel->get_list_harga_tabel_input('2');
            $this->smarty->assign("data_cpodomestik", $data_cpodomestik);
            
            //list data domestik harga input EKSPOR
            $data_ekspor= $this->hargamodel->get_list_harga_tabel_input('3');
            $this->smarty->assign("data_ekspor", $data_ekspor);
            //data harga domestik sub kategori
            $datasubkategori = $this->hargamodel->get_list_sub_katharga_edit();
            $this->smarty->assign("datasubkategori", $datasubkategori);
            //data harga domestik
            $datadomestik = $this->hargamodel->get_list_harga_domestik_tabel();
            $this->smarty->assign("datadomestik", $datadomestik);
            //data harga cpo domestik
            $datacpodomestik = $this->hargamodel->get_list_harga_domestik_cpo_tabel();
            $this->smarty->assign("datacpodomestik", $datacpodomestik);
            //data harga ekspor
            $dataekspor = $this->hargamodel->get_list_harga_ekspor_tabel();
            $this->smarty->assign("dataekspor", $dataekspor);
            $this->smarty->assign("no",1);
            }
           
			
            // parse url
            $this->smarty->assign('url_add', site_url('private/harga/add'));
            $this->smarty->assign('url_grafik', site_url('private/harga/grafik'));
            $this->smarty->assign('url_list', site_url('private/harga/index'));
            $this->smarty->assign('url_process', site_url('private/harga/process/hapus'));
            $this->smarty->assign('url_edit', site_url('private/harga/edit'));
           			 ///SET UP DATA GRAFIK 
            $tahun_tbs = $this->hargamodel->get_list_tahun_grafik('1');
			$this->smarty->assign('tahun_tbs', $tahun_tbs[0]['tahun']);
			$this->smarty->assign('data_tahun_tbs', $tahun_tbs);
			
			$tahun_cpo = $this->hargamodel->get_list_tahun_grafik('2');
			$this->smarty->assign('tahun_cpo', $tahun_cpo[0]['tahun']);
			$this->smarty->assign('data_tahun_cpo', $tahun_cpo);
			
			$tahun_ekspor = $this->hargamodel->get_list_tahun_grafik('3');
			$this->smarty->assign('tahun_ekspor', $tahun_ekspor[0]['tahun']);
			$this->smarty->assign('data_tahun_ekspor', $tahun_ekspor);
						
			$this->smarty->assign('url_data_grafik_tbs', site_url('public/home/datatbs'));
			$this->smarty->assign('url_data_grafik_cpo_domes', site_url('public/home/data_cpodomestik'));
			$this->smarty->assign('url_data_grafik_pasarglobal', site_url('public/home/data_pasarglobal'));
			$this->smarty->assign('url_data_tabel_tbs', site_url('public/home/tabel_datatbs'));
			$this->smarty->assign('url_data_tabel_cpo', site_url('public/home/tabel_datacpo'));
			$this->smarty->assign('url_data_tabel_ekspor', site_url('public/home/tabel_dataekspor'));
            // max tahun			/*
            if($this->hargamodel->get_list_harga_grafik() <> ''){
            $datamaxtahun = $this->hargamodel->get_max_tahun();
            $this->smarty->assign("datamaxtahun", $datamaxtahun);
            //grafik
            $datagrafik = $this->hargamodel->get_list_harga_grafik();
            $this->smarty->assign("datagrafik", $datagrafik);
            //grafik domestik
            $datagrafikdo = $this->hargamodel->get_list_harga_grafik_domestik();
            $this->smarty->assign("datagrafikdo", $datagrafikdo);
            //grafik cpo domestik
            $datagrafikdocpo = $this->hargamodel->get_list_harga_grafik_cpo_domestik();
            $this->smarty->assign("datagrafikdocpo", $datagrafikdocpo);
            //grafik ekspor
            $datagrafikeks = $this->hargamodel->get_list_harga_grafik_ekspor();
            $this->smarty->assign("datagrafikeks", $datagrafikeks);
            }
            * */
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
                 case 'ajax_sub_katharga_by_katharga':

                $this->process_ajax_sub_katharga_by_katharga();

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
        $this->smarty->assign("template_content", "private/harga/add");		//load
        
        $this->load->library('notification');
        $this->load->model('hargamodel');
        $id_katharga = $this->uri->segment(4,0); 
		$this->smarty->assign('id_katharga', $id_katharga);
        //get kategori harga
        //$datakatharga = $this->hargamodel->get_list_katharga();		//$this->smarty->assign("katharga", $datakatharga);
		
        //sub kategori harga		$data_sub_katharga = $this->hargamodel->get_list_sub_katharga($id_katharga);
		$this->smarty->assign("subkatharga", $data_sub_katharga);


        if (isset($arr_notify['post']['id_katharga'])) {            //echo $arr_notify['post']['id_sub_katharga'];			$data_sub_katharga = $this->hargamodel->get_list_sub_katharga($arr_notify['post']['id_katharga']);
            $this->smarty->assign("subkatharga", $data_sub_katharga);
        }

        $this->smarty->assign("url_sub_katharga", site_url("private/harga/process/ajax_sub_katharga_by_katharga"));
        //get kategori harga
        $databulan = $this->hargamodel->get_list_bulan();
        $this->smarty->assign("bulan", $databulan);
        // url        $this->smarty->assign("url_add", site_url("private/harga/add/".$id_katharga));        $this->smarty->assign("url_list", site_url("private/harga"));
        $this->smarty->assign("url_process", site_url("private/harga/process/add"));
        // notification
        $arr_notify = $this->notification->get_notification();      
        if(!empty($arr_notify['post'])) {
            $this->smarty->assign("data", $arr_notify['post']);
        }		
        $this->smarty->assign("notification_msg", $arr_notify['message']);
        $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':'green'));
        // display document
        $this->parser->parse('private/base-layout/document.html');
    }

    public function process_ajax_sub_katharga_by_katharga() {

        $id_katharga = $this->uri->segment(5, 0);

        // load

        $this->load->model('hargamodel');

        // get data

        $sub_katharga = $this->hargamodel->get_list_sub_katharga($id_katharga);

        echo '<select name="id_sub_katharga" class="form-control" style="width:300px;">';

        if($sub_katharga) {

            foreach($sub_katharga as $data) {

                echo '<option value="'.$data['id_sub_katharga'].'">';

                echo $data['sub_katharga'];

                echo '</option>';

            }

        }

        echo '</select>';

        

    }
    public
    function process_add() {
        // load library
        $this->load->model('hargamodel');
        $this->load->library('notification');		$id_katharga = $this->input->post('id_katharga');
        // set rules
        $this->notification->check_post('tahun', 'Tahun', 'required');
        $this->notification->check_post('id_bulan', 'Bulan', 'required');
        $this->notification->check_post('rupiah', 'Harga Rupiah', 'required');
        $this->notification->check_post('dolar', 'Harga Dolar', 'required');
        // run
        $param = array('id_katharga' => $this->input->post('id_katharga'),
            'id_sub_katharga' => $this->input->post('id_sub_katharga'),                    
            'tahun' => $this->input->post('tahun'),                    
            'id_bulan' => $this->input->post('id_bulan')); 
        if($this->hargamodel->get_list_harga($param)){
            $this->notification->set_message("Data sudah di input");
            $this->notification->sent_notification(false);
            
        } else {
			
			///
            if ($this->notification->valid_input()) {
				if($this->input->post('id_katharga') == '2'):
					$this->session->set_userdata('view_tab', 'tab_6_data');
				elseif($this->input->post('id_katharga') == '3'):
					$this->session->set_userdata('view_tab', 'tab_5_data');
				else:
					$this->session->set_userdata('view_tab', 'tab_4_data');
				endif;
				//cek sub kategori 
				$id_sub_katharga = $this->input->post('id_sub_katharga');
				if($id_katharga != '2' AND empty($id_sub_katharga)):
					$this->notification->set_message("Data Sub Kategori harus di isi");
                    $this->notification->sent_notification(false);
					 redirect('private/harga/add/'.$id_katharga);
				endif;
				
                // params
                $params = array('id_katharga' => $this->input->post('id_katharga'),
					'id_sub_katharga' => $this->input->post('id_sub_katharga'),
					'tahun' => $this->input->post('tahun'),                    
                    'id_bulan' => $this->input->post('id_bulan'),                    
                    'rupiah' => $this->input->post('rupiah'),
                    'dolar' => $this->input->post('dolar'),
                    'sumber' => $this->input->post('sumber'));
                    
                if($this->hargamodel->process_harga_add($params)) {
                    $this->notification->clear_post();
                    $this->notification->set_message("Data berhasil disimpan");
                    $this->notification->sent_notification(true);
                    redirect('private/harga');
                    
                } else {
                    $this->notification->set_message("Data gagal disimpan");
                    $this->notification->sent_notification(false);
                    
                }

            } else {

                $this->notification->sent_notification(false);
            }

        }
        // default redirect
        redirect('private/harga/add/'.$id_katharga);
    }

    public
    function edit() {
        // template content
        $this->smarty->assign("template_content", "private/harga/edit");
        // load
        $this->load->model('hargamodel');
        $this->load->library('notification');
        $this->load->library('DateTimeManipulation');		
		// data
        $id_harga = $this->uri->segment(4, 0);
        $data = $this->hargamodel->get_harga_by_id($id_harga);
        $this->smarty->assign("data", $data);
        
        // get katharga
        //$listkatharga = $this->hargamodel->get_list_katharga();		//$this->smarty->assign('listkatharga', $listkatharga);
        // get sub_katharga
		$data_sub_katharga = $this->hargamodel->get_list_sub_katharga($data['id_katharga']);
		$this->smarty->assign("subkatharga", $data_sub_katharga);
    
        $this->smarty->assign("url_sub_katharga", site_url("private/harga/process/ajax_sub_katharga_by_katharga"));
        // get bulan
        $listbulan = $this->hargamodel->get_list_bulan();
        $this->smarty->assign('listbulan', $listbulan);
        // parse url
        $this->smarty->assign("url_add", site_url("private/harga/add"));
        $this->smarty->assign("url_list", site_url("private/harga"));
        $this->smarty->assign("url_process", site_url("private/harga/process/edit"));        // notification
        $arr_notify = $this->notification->get_notification();        
        if(!empty($arr_notify['post'])) {
            $this->smarty->assign("data", $arr_notify['post']);
        }
        // notification
        $this->smarty->assign("notification_msg", $arr_notify['message']);
        $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':'green'));
        // display document
        $this->parser->parse('private/base-layout/document.html');
    }

    public
    function process_edit() {
        // load library
        $this->load->model('hargamodel');
        $this->load->library('notification');
        // set rules
        $this->notification->check_post('tahun', 'Tahun', 'required');
        $this->notification->check_post('id_bulan', 'Bulan', 'required');
        $this->notification->check_post('rupiah', 'Harga Rupiah', 'required');
        $this->notification->check_post('dolar', 'Harga Dolar', 'required');
        // run
         if ($this->notification->valid_input()):		
		
         $param = array('id_katharga' => $this->input->post('id_katharga'),
            'id_sub_katharga' => $this->input->post('id_sub_katharga'),                    
            'tahun' => $this->input->post('tahun'),                    
            'id_bulan' => $this->input->post('id_bulan'),
            'id_harga' => $this->input->post('id_harga'));
        
        if($this->hargamodel->get_list_harga_edit($param)){
            $this->notification->set_message("Data sudah di input");
            $this->notification->sent_notification(false);
            redirect('private/harga/edit/'.$this->input->post('id_harga'));

        }
        endif;
        if ($this->notification->valid_input()) {
            if($this->input->post('id_katharga') == '2'):
					$this->session->set_userdata('view_tab', 'tab_6_data');
				elseif($this->input->post('id_katharga') == '3'):
					$this->session->set_userdata('view_tab', 'tab_5_data');
				else:
					$this->session->set_userdata('view_tab', 'tab_4_data');
				endif;
            // params
            $params = array('id_katharga' => $this->input->post('id_katharga'), 
                'id_sub_katharga' => $this->input->post('id_sub_katharga'),                   
                'tahun' => $this->input->post('tahun'),                    
                'id_bulan' => $this->input->post('id_bulan'),                    
                'rupiah' => $this->input->post('rupiah'),
                'dolar' => $this->input->post('dolar'),
                'sumber' => $this->input->post('sumber'),
                'id_harga' => $this->input->post('id_harga'));
            // execute
            
            if($this->hargamodel->process_harga_edit($params)) {
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
        redirect('private/harga/edit/'.$this->input->post('id_harga'));
    }

    public
    function process_hapus() {
        // load library
        $this->load->library('notification');
        $this->load->library('uploader');
        $this->load->model('hargamodel');
        // set rules
        $this->notification->check_post('id_harga', 'id', 'required');
        // run
        
        if ($this->notification->valid_input()) {
            // params
            $params = $this->input->post('id_harga');
            
            if(is_array($params)):
            // execute
            foreach($params as $id):
            $berita = $this->hargamodel->get_harga_by_id($id);
            $this->hargamodel->process_harga_delete($id);
            endforeach;
            $this->notification->clear_post();
            $this->notification->set_message("Data berhasil dihapus");
            $this->notification->sent_notification(true); else :
            $this->notification->set_message("Tidak ada data yang terpilih untuk dihapus!");
            $this->notification->sent_notification(false);
            endif;
        }

        // default redirect
        redirect('private/harga');
    }

}
