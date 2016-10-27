<?php
	// important * untuk application base dari halaman ini
	class Foto extends MY_Controller {
		
		function  __construct() {
			// load application base
			parent::__construct();
			$this->Webappbase();
			$this->load->library('datetimemanipulation');
		}

	

		public
		function index(){
			// template content
			$this->smarty->assign('template_content',"web/foto/list.html");
			// load
			$this->load->library('pagination');
			$this->load->model('fotomodel');
			$this->load->helper('text');
			$config['base_url'] = site_url("public/foto/index");
			$config['total_rows'] = $this->fotomodel->get_total_foto();
			$config['per_page'] = 9;
			$config['uri_segment'] = 4;
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
			$start = $this->uri->segment(4, 0) + 1;
			$end = $this->uri->segment(4, 0) + 9;
			$total = $config['total_rows'];
			
			if ($end > $config['total_rows']) {
				$end = $config['total_rows'];
			}

			$this->smarty->assign("no", $start);
			$this->smarty->assign("start", $start);
			$this->smarty->assign("end", $end);
			$params = $this->uri->segment(4,0);
			// get data
			$result = $this->fotomodel->get_list_foto_limit();
			
			
			if(!empty($result)):
			foreach($result as $key=>$data):
			// set path of detail foto
			$path = 'doc/album/'.$data['id_album']."/".$data['id_foto']."/";
			
			if(is_file($path.$data['foto'])){
				
			
				$result[$key]['foto'] = BASEURL.$path.$data['foto'];
			} else {
				$result[$key]['foto']= BASEURL.'doc/tmp.default.jpg';
			}

			endforeach;
			endif;
			
			$result_album = $this->fotomodel->get_list_album_limit_public();
			$this->smarty->assign("album_list", $result_album);
			$this->smarty->assign("foto_list", $result);
			$this->smarty->assign("page_modul", 'Album ');
			$this->smarty->assign("page_judul", 'Album Foto');
			$this->smarty->assign("page_modul_url", site_url('public/foto'));
			// display document
			$this->parser->parse('web/base-layout/document-full.html');
		}

	}