<?php
	// important * untuk application base dari halaman ini
	class Pencarian extends MY_Controller {
		
		function  __construct() {
			// load application base
			parent::__construct();
			$this->Webappbase();
			$this->load->library('datetimemanipulation');
		}

		// pages
		public
		function index(){
			$this->smarty->assign('template_content',"web/pencarian/search.html");
			$this->load->model('searchmodel');
			$this->load->library('pagination');
			$key = $this->input->post('keyword');
			
			if(!empty($key)):
			$this->session->set_userdata('keyword', $key); else :
			$key = $this->session->userdata('keyword');
			endif;
			
			if(!empty($key)):
			$keyword = '%'.$key.'%'; else :
			$keyword = '%';
			endif;
			
			if($key != '%'):
			$par = array($keyword, $keyword);
			$config['base_url'] = site_url("public/pencarian/index");
			$config['total_rows'] = $this->searchmodel->get_total_pencarian($par);
			$config['per_page'] = 20;
			$config['uri_segment'] = 4;
			$config['num_links'] = 4;
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Prev';
			$config['cur_tag_open'] = ' <a href="#" class="active">';
			$config['cur_tag_close'] = '</a>';
			$this->pagination->initialize($config);
			$pagging = $this->pagination->create_links();
			$this->smarty->assign("pagging", $pagging);
			//list data dari DB
			$totaldata = $config['total_rows'];
			$start = $this->uri->segment(4, 0) + 1;
			$end = $this->uri->segment(4, 0) + 20;
			$total = $config['total_rows'];
			
			if ($end > $config['total_rows']) {
				$end = $config['total_rows'];
			}

			$this->smarty->assign("no", $start);
			$this->smarty->assign("start", $start);
			$this->smarty->assign("end", $end);
			$limit = array(intval($this->uri->segment(4, 0)), $config['per_page']);
			$array_berita = array();
			$array_informasi = array();
			
			$params = array_merge($par);
			// get data berita
			
			
			$databerita = $this->searchmodel->get_pencarian_berita_indo($params);
			
			if(!empty($databerita)):
			foreach($databerita as $row):
			
				$databerita['url_detail'] = site_url('public/berita/relawan/'.$row['id_relawan'].'/'.$row['id_berita'].'/'.url_title($row['judul']));
				$databerita['kategori'] = 'Berita Relawan '.$row['nama'];
			

			$pathdok = 'doc/berita/'.$row['id_berita'].'/'.$row['image'];
			
			if(is_file($pathdok)):
			$databerita['image'] = BASEURL.$pathdok;
			endif;
			$detail_berita = $databerita['url_detail'];
			$array_berita[] = array('id_data' => $row['id_berita'], 'judul' => $row['judul'],'tanggal' => $row['tanggal'], 'kategori' => $databerita['kategori'],'content' => strip_tags($this->getIntroText($row['content'],100)),'image' => $databerita['image'],
				'url_detail' => $databerita['url_detail']);
			endforeach;
			endif;
		
			// get data informasi
			// $params = array_merge($par, $limit);
			
			
			$datainformasi = $this->searchmodel->get_pencarian_informasi_indo($params);
			
			if(!empty($datainformasi)):
			foreach($datainformasi as $row):
			$datainformasi['url_detail'] = site_url('public/informasi/detail/'.$row['id_informasi'].'/'.url_title($row['judul']));
			$datainformasi['kategori'] = 'Berita Cagub_Cawagub';
			$pathdok = 'doc/informasi/'.$row['id_informasi'].'/'.$row['image'];
			
			if(is_file($pathdok)):
			$datainformasi['image'] = BASEURL.$pathdok;
			endif;
			$detail_informasi = $datainformasi['url_detail'];
			$array_informasi[] = array('id_data' => $row['id_informasi'], 'judul' => $row['judul'],'tanggal' => $row['tanggal'], 'kategori' => $datainformasi['kategori'], 'content' => strip_tags($this->getIntroText($row['content'],100)),'image' => $datainformasi['image'],'url_detail' => $datainformasi['url_detail']);
			endforeach;
			endif;
	
			$array_hasil = array_merge($array_berita, $array_informasi);
			$this->smarty->assign("data", $array_hasil);
			$this->smarty->assign("keyword", $key);
			$this->smarty->assign("keyword_pencarian", $key);
			endif;
			$this->smarty->assign("page_modul", 'Pencarian Data');
			if(!empty($array_hasil)){
			$this->smarty->assign("page_judul", 'Hasil pencarian');
			}else{
			$this->smarty->assign("page_judul", 'Tidak ada hasil pencarian');
			}
			$this->smarty->assign("page_modul_url", site_url('public/pencarian'));
			// display document
			$this->parser->parse('web/base-layout/document-default.html');
			}


	}