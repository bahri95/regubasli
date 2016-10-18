<?php
	// important * untuk application base dari halaman ini
	class Informasi extends MY_Controller {
		
		function  __construct() {
			// load application base
			parent::__construct();
			$this->Webappbase();
			$this->load->library('datetimemanipulation');
		}

		// pages
		public
		function index() {
			$this->smarty->assign('template_content',"web/informasi/list.html");
			// load
			$this->load->library('pagination');
			$this->load->model('informasimodel');
			$this->load->helper('text');
			$id_informasi = $this->uri->segment(3,0);
			$config['base_url'] = site_url("public/informasi/");
			$config['total_rows'] = $this->informasimodel->get_total_informasi();
			$config['per_page'] = 5;
			$config['uri_segment'] = 3;
			$config['num_links'] = 5;
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Prev';
			$config['first_tag_open'] = '<li><a>';
			$config['first_tag_close'] = '</a></li>';
			$config['prev_tag_open'] = '<li class="previous"><a href="#">&larr; Older</a>';
			$config['prev_tag_close'] = '</a></li>';
			$config['next_tag_open'] = ' <li class="next"><a href="#">Newer &rarr;</a></li>';
			$config['next_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li><a href="#">';
			$config['num_tag_close'] = '</a></li>';
			$config['cur_tag_open'] = '<li class="previous"><a href="#">&larr; Older</a>';
			$config['cur_tag_close'] = '</a></li>';
			$this->pagination->initialize($config);
			$pagging = $this->pagination->create_links();
			$this->smarty->assign("pagging", $pagging);
			//list data dari DB
			$totaldata = $config['total_rows'];
			$start = $this->uri->segment(3, 0) + 1;
			$end = $this->uri->segment(3, 0) + 5;
			$total = $config['total_rows'];
			
			if ($end > $config['total_rows']) {
				$end = $config['total_rows'];
			}

			$this->smarty->assign("no", $start);
			$this->smarty->assign("start", $start);
			$this->smarty->assign("end", $end);
			$params = array(intval($this->uri->segment(4, 0)), $config['per_page']);
			
			// get data
			$result = $this->informasimodel->get_list_informasi_limit($params);
			$this->smarty->assign("total", $totaldata);
			
			if(!empty($result)):
			foreach($result as $key=>$data):
			
			
			$path = 'doc/informasi/'.$data['id_informasi']."/";
			
			if(is_file($path.$data['image'])){
				$result[$key]['image'] = BASEURL.$path.$data['image'];
			} else {
				$result[$key]['image']= BASEURL.'doc/tmp.default.jpg';
			}

			
			
				$result[$key]['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($data['tanggal']);
				$result[$key]['url_detail'] = site_url('public/informasi/detail/'.$data['id_informasi'].'/'.url_title($data['judul']));
				$result[$key]['content'] = strip_tags($this->getIntroText($data['content'],300));
			
			endforeach;
			endif;
			$this->smarty->assign("informasi_list", $result);
			
			
				$this->smarty->assign("page_modul", 'Informasi');
		

	
			$this->smarty->assign("page_modul_url", site_url('public/informasi'));
			// display document
			$this->parser->parse('web/base-layout/document-default.html');
		}

		public
		function detail(){

			$this->smarty->assign('template_content',"web/informasi/detail.html");
			$this->load->model('informasimodel');
			$id_informasi  = $this->uri->segment(4,0);
			$data = $this->informasimodel->get_informasi_by_id($id_informasi);
			
			if(!empty($data)):
		
			$data['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($data['tanggal']);
			$path = 'doc/informasi/'.$data['id_informasi']."/";
			
			if(is_file($path.$data['image'])){
				$data['image'] = BASEURL.$path.$data['image'];
			} else {
				$data['image']= '';
			}

			endif;
			
			$this->smarty->assign("data", $data);
			//informasi terkait
			$result = $this->informasimodel->get_list_informasi_terkait();
			
			if(!empty($result)):
			foreach($result as $key=>$data):
			
			$result[$key]['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($data['tanggal']);
			$path = 'doc/informasi/'.$data['id_informasi']."/";
			
			if(is_file($path.$data['image'])){
				$result[$key]['image'] = BASEURL.$path.$data['image'];
			} else {
				$result[$key]['image']= BASEURL.'doc/tmp.default.jpg';
			}

			
		
				$result[$key]['url_detail'] = site_url('public/informasi/detail/'.'/'.$data['id_informasi'].'/'.url_title($data['judul']));
				$result[$key]['content'] = strip_tags($this->getIntroText($data['content'],50));
			
			endforeach;
			endif;
			$this->smarty->assign("informasi_list", $result);

			//informasi terkait
			$result2 = $this->informasimodel->get_list_informasi_terkait_kedua();
			
			if(!empty($result2)):
			foreach($result2 as $key=>$data):
			
			$result2[$key]['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($data['tanggal']);
			$path = 'doc/informasi/'.$data['id_informasi']."/";
			
			if(is_file($path.$data['image'])){
				$result2[$key]['image'] = BASEURL.$path.$data['image'];
			} else {
				$result2[$key]['image']= BASEURL.'doc/tmp.default.jpg';
			}

			
		
				$result2[$key]['url_detail'] = site_url('public/informasi/detail/'.'/'.$data['id_informasi'].'/'.url_title($data['judul']));
				$result2[$key]['content'] = strip_tags($this->getIntroText($data['content'],50));
			
			endforeach;
			endif;
			$this->smarty->assign("informasi_list_kedua", $result2);
			
		
				$this->smarty->assign("page_modul", 'Informasi');
			

			$this->smarty->assign("page_modul_url", site_url('public/informasi'));
			$this->smarty->assign("page_name", 'Detail Informasi');
			// display document
			$this->parser->parse('web/base-layout/document-detail.html');
		}

		public
		function download(){
			$this->load->model('informasimodel');
			$this->load->helper('download');
			// data
			$id_informasi= $this->uri->segment(4,0);
			$data = $this->informasimodel->get_berita_by_id($id_informasi);
			$dir = 'doc/informasi/' . $id_informasi. '/'.$data['file_informasi'];
			
			if(is_file($dir)):
			$filedata = file_get_contents($dir);
			force_download($data['file_informasi'], $filedata);
			exit;
			endif;
			redirect('public/informasi/detail/'.$id_pengumuman);
		}

	}