<?php

	// important * untuk application base dari halaman ini

	class Berita extends MY_Controller {

		

		function  __construct() {

			// load application base

			parent::__construct();

			$this->Webappbase();

			$this->load->library('datetimemanipulation');

		}



		// pages

		public

		function relawan($id_relawan) {

			// template content

			$this->smarty->assign('template_content',"web/berita/list.html");

			// load
			$id_relawan = $this->uri->segment(4,0);
			$this->load->library('pagination');

			$this->load->model('beritamodel');

			$this->load->helper('text');

			$config['base_url'] = site_url("public/berita/relawan/$id_relawan");

			$config['total_rows'] = $this->beritamodel->get_total_berita();

			$config['per_page'] = 5;
			$config['uri_segment'] = 5;
			$config['num_links'] = 5;
			$config['next_link'] = 'Selanjutnya >>';
			$config['prev_link'] = '<< Sebelumnya';
			$config['prev_tag_open'] = '<li class="previous">';
			$config['prev_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li class="next">';
			$config['next_tag_close'] = '</li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li>';
			$config['cur_tag_close'] = '</li>';

			$this->pagination->initialize($config);

			$pagging = $this->pagination->create_links();

			$this->smarty->assign("pagging", $pagging);

			//list data dari DB

			$totaldata = $config['total_rows'];

			$start = $this->uri->segment(5, 0) + 1;

			$end = $this->uri->segment(5, 0) + 5;

			$total = $config['total_rows'];

			

			if ($end > $config['total_rows']) {

				$end = $config['total_rows'];

			}



			$this->smarty->assign("no", $start);

			$this->smarty->assign("start", $start);

			$this->smarty->assign("end", $end);

			$params = array($id_relawan, intval($this->uri->segment(5, 0)), $config['per_page']);

			// get data

			$result = $this->beritamodel->get_list_berita_limit($params);

			$this->smarty->assign("total", $totaldata);

			

			if(!empty($result)):

			foreach($result as $key=>$data):

			



			$path = 'doc/berita/'.$data['id_berita']."/";

			

			if(is_file($path.$data['image'])){

				$result[$key]['image'] = BASEURL.$path.$data['image'];

			} else {

				$result[$key]['image']= BASEURL.'doc/tmp.default.jpg';

			}


				$result[$key]['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($data['tanggal']);

				
				$result[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_relawan'].'/'.$data['id_berita'].'/'.url_title($data['judul']));

				$result[$key]['content'] = strip_tags($this->getIntroText($data['content'],200));



			endforeach;

			endif;

			$this->smarty->assign("berita_list", $result);

			

			$id_relawan = $this->uri->segment(4, 0);

			$data_relawan = $this->beritamodel->get_list_relawan_by_id($id_relawan);
			foreach ($data_relawan as $key => $value) {
			$data[][$key]['nama'] = $value['nama'];
			}
			
			$this->smarty->assign("page_modul", 'Berita Relawan '.$data['nama']);

			$this->smarty->assign("page_judul", 'Berita Relawan ');
			$id_relawan = $this->uri->segment(4,0);
			$this->smarty->assign("page_modul_url", site_url('public/berita/relawan/'.$id_relawan));

			// display document

			$this->parser->parse('web/base-layout/document-default.html');

		}



		public

		function detail($id_relawan){

			$this->smarty->assign('template_content',"web/berita/detail.html");

			$this->load->model('beritamodel');

			$id_berita  = $this->uri->segment(5,0);

			$data = $this->beritamodel->get_berita_by_id($id_berita);

			if(!empty($data)):
			$data['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($data['tanggal']);
			$path = 'doc/berita/'.$data['id_berita']."/";
			if(is_file($path.$data['image'])){

				$data['image'] = BASEURL.$path.$data['image'];

				

			} else {

				$data['image']= '';

			}

			$data['deskripsi'] = strip_tags($this->getIntroText($data['content'],300));
			$data['url_detail'] = site_url('public/berita/detail/'.$data['id_relawan'].'/'.$data['id_berita'].'/'.url_title($data['judul']));
			endif;

			$this->smarty->assign("data", $data);

			$this->smarty->assign("share", $data);

			// get data terkait

			$result = $this->beritamodel->get_list_berita_terkait();

			

			if(!empty($result)):

			foreach($result as $key=>$data):

			$result[$key]['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($data['tanggal']);


			

			
			$path = 'doc/berita/'.$data['id_berita']."/";

			

			if(is_file($path.$data['image'])){

				$result[$key]['image'] = BASEURL.$path.$data['image'];

			} else {

				$result[$key]['image']= BASEURL.'doc/tmp.default.jpg';

			}



			


				$result[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_relawan'].'/'.$data['id_berita'].'/'.url_title($data['judul']));

				$result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));

			


			endforeach;

			endif;
			

			$this->smarty->assign("berita_list", $result);


			//berita terkait 2
			// get data terkait

			$result2 = $this->beritamodel->get_list_berita_terkait_kedua();

			

			if(!empty($result2)):

			foreach($result2 as $key=>$data):

			$result2[$key]['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($data['tanggal']);


			

			
			$path = 'doc/berita/'.$data['id_berita']."/";

			

			if(is_file($path.$data['image'])){

				$result2[$key]['image'] = BASEURL.$path.$data['image'];

			} else {

				$result2[$key]['image']= BASEURL.'doc/tmp.default.jpg';

			}



			


				$result2[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_relawan'].'/'.$data['id_berita'].'/'.url_title($data['judul']));

				$result2[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));

			


			endforeach;

			endif;

			$this->smarty->assign("berita_list_kedua", $result2);

			$id_relawan = $this->uri->segment(4, 0);

			$data_relawan = $this->beritamodel->get_list_relawan_by_id($id_relawan);
			foreach ($data_relawan as $key => $value) {
			$data[][$key]['nama'] = $value['nama'];
			}

			
			$this->smarty->assign("page_modul", 'Berita Relawan '.$data['nama']);
			$this->smarty->assign("page_judul", 'Berita Relawan '.$data['nama']);
			$id_relawan = $this->uri->segment(4,0);
			$this->smarty->assign("page_modul_url", site_url('public/berita/relawan/'.$id_relawan));

			$this->smarty->assign("page_name", 'Detail Berita Relawan '.$data['nama']);
			

			// display document

			$this->parser->parse('web/base-layout/document-detail.html');

		}



		


	}