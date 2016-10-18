<?php
    // important * untuk application base dari halaman ini
    class Home extends MY_Controller {
        //class Dashboard extends CI_Controller{
        
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
        $this->smarty->assign('template_content', "web/home/content.html");
        // notification
        $arr_notify = $this->notification->get_notification();
        $this->smarty->assign("message", $arr_notify['message'] );

        $this->berita_relawan_anggota();
         $this->berita_relawan_utama();
         $this->beritacagub_cawagub();
         $this->gabungan();
         $this->foto();

        // display document
        $this->parser->parse('web/base-layout/document-home.html');


       
        }

        public function berita_relawan_utama(){
            // get data
            $this->load->model('beritamodel');
            $result = $this->beritamodel->get_berita_relawan_utama();
        
            if(!empty($result)):
            foreach($result as $key=>$data):
            $path = 'doc/berita/'.$data['id_berita']."/";
            if(is_file($path.$data['image'])){
                $result[$key]['image'] = BASEURL.$path.$data['image'];
            } else {
                $result[$key]['image']= BASEURL.'doc/tmp.default.jpg';
            }
                $result[$key]['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($data['tanggal']);
                $result[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_berita'].'/'.url_title($data['judul']));
                $result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));
            endforeach;
            endif;
            $this->smarty->assign("berita_list", $result);
            $this->smarty->assign("page_modul", 'Berita');
            $this->smarty->assign("page_modul_url", site_url('public/berita'));
        }

        public function berita_relawan_anggota(){
            // get data
            $this->load->model('beritamodel');
            $result = $this->beritamodel->get_berita_relawan_anggota();
        
            if(!empty($result)):
            foreach($result as $key=>$data):
            $path = 'doc/berita/'.$data['id_berita']."/";
            if(is_file($path.$data['image'])){
                $result[$key]['image'] = BASEURL.$path.$data['image'];
            } else {
                $result[$key]['image']= BASEURL.'doc/tmp.default.jpg';
            }
                $result[$key]['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($data['tanggal']);
                $result[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_berita'].'/'.url_title($data['judul']));
                $result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));
            endforeach;
            endif;
            $this->smarty->assign("berita_list_anggota", $result);
            $this->smarty->assign("page_modul", 'Berita');
            $this->smarty->assign("page_modul_url", site_url('public/berita'));
        }

        public function beritacagub_cawagub(){
            //berita cagub-cawagub
            // get data
            $this->load->model('informasimodel');
            $result = $this->informasimodel->get_list_informasi_home();
           
            
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
                $result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));
            
            endforeach;
            endif;
            $this->smarty->assign("informasi_list", $result);
        }

        public function gabungan(){
             // get data gabungan
             //gabungan
            $array_berita = array();
            $array_informasi = array();
            $this->load->model('beritamodel');
            $databerita = $this->beritamodel->get_list_berita();
            
            if(!empty($databerita)):
            foreach($databerita as $row):
            
          
                $databerita['url_detail'] = site_url('public/berita/detail/'.$row['id_berita'].'/'.url_title($row['judul']));
                $databerita['kategori'] = 'Berita Relawan';
         

            $pathdok = 'doc/berita/'.$row['id_berita'].'/'.$row['image'];
            
            if(is_file($pathdok)):
            $databerita['image'] = BASEURL.$pathdok;
            endif;
            $detail_berita = $databerita['url_detail'];
            $array_berita[] = array('id_data' => $row['id_berita'], 'judul' => $row['judul'],'content' => strip_tags($this->getIntroText($row['content'],100)),'image' => $databerita['image'],'kategori' => $databerita['kategori'],'url_detail' => $databerita['url_detail']);
            endforeach;
            endif; 
            // $params = array_merge($par, $limit);
            
           $this->load->model('informasimodel');
            $datainformasi = $this->informasimodel->get_list_informasi();
            
             if(!empty($datainformasi)):
            foreach($datainformasi as $row):
            
          
                $datainformasi['url_detail'] = site_url('public/informasi/detail/'.$row['id_informasi'].'/'.url_title($row['judul']));
                $datainformasi['kategori'] = 'Berita Cagub-Cawagub';
         

            $pathdok = 'doc/informasi/'.$row['id_informasi'].'/'.$row['image'];
            
            if(is_file($pathdok)):
            $datainformasi['image'] = BASEURL.$pathdok;
            endif;
            $detail_informasi = $datainformasi['url_detail'];
            $array_informasi[] = array('id_data' => $row['id_informasi'], 'judul' => $row['judul'],'content' => strip_tags($this->getIntroText($row['content'],100)),'image' => $datainformasi['image'],'kategori' => $datainformasi['kategori'],'url_detail' => $databerita['url_detail']);
            endforeach;
            endif; 

             $array_hasil = array_merge($array_berita, $array_informasi);
            $this->smarty->assign("datagabungan", $array_hasil);
        }

        public function foto(){
            $this->load->model('fotomodel');
            $result = $this->fotomodel->get_list_foto_limit_home();
            if(!empty($result)):
            foreach($result as $key=>$data):
            $path = 'doc/album/'.$data['id_album']."/".$data['id_foto']."/";
            if(is_file($path.$data['foto'])){
                $result[$key]['foto'] = BASEURL.$path.$data['foto'];
            } else {
                $result[$key]['foto']= BASEURL.'doc/tmp.default.jpg';
            }
            endforeach;
            endif;
            $this->smarty->assign('list_foto', $result);
        }

        

      
        
    }
