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

			$config['base_url'] = site_url("public/beritadmsi/index");

			$config['total_rows'] = $this->beritamodel->get_total_berita();

			$config['per_page'] = 8;

			$config['uri_segment'] = 5;

			$config['num_links'] = 5;

			$config['first_link'] = 'First';

			$config['last_link'] = 'Last';

			$config['next_link'] = 'Next';

			$config['prev_link'] = 'Prev';

			$config['first_tag_open'] = '<li><a>';

			$config['first_tag_close'] = '</a></li>';

			$config['prev_tag_open'] = '<li><a class="prev" href="#"><i class="fa fa-angle-left"></i>';

			$config['prev_tag_close'] = '</a></li>';

			$config['next_tag_open'] = '<li><a class="next" href="#"><i class="fa fa-angle-right"></i>';

			$config['next_tag_close'] = '</a></li>';

			$config['num_tag_open'] = '<li><a href="#">';

			$config['num_tag_close'] = '</a></li>';

			$config['cur_tag_open'] = '<li class="is-active-pagination"><a href="">';

			$config['cur_tag_close'] = '</a></li>';

			$this->pagination->initialize($config);

			$pagging = $this->pagination->create_links();

			$this->smarty->assign("pagging", $pagging);

			//list data dari DB

			$totaldata = $config['total_rows'];

			$start = $this->uri->segment(5, 0) + 1;

			$end = $this->uri->segment(5, 0) + 8;

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

				$result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));



			endforeach;

			endif;

			$this->smarty->assign("berita_list", $result);

			

		

				$this->smarty->assign("page_modul", 'Berita Relawan');


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

				$share['image'] = BASEURL.$path.$data['image'];

			} else {

				$data['image']= '';

			}



			endif;

			$this->smarty->assign("data", $data);

			$this->smarty->assign("share", $share);

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

			
			

			// display document

			$this->parser->parse('web/base-layout/document-detail.html');

		}



		


	}