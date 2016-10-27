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

    
         $this->berita_relawan_utama();
         $this->beritacagub_cawagub();
         $this->gabungan();
         //berita relawan utama
         $this->berita_relawan_utama_side();
         //berita gubernur
         $this->beritacagub_cawagub_side();

         $this->foto();

         $this->video();
         $path = 'doc/home/foto.jpg';
         $data['judul'] = 'Website Relawan Cagub-Cawagub Agus-Sylvi';
         $data['url_detail'] = BASEURL;
         $data['image'] = $path;
         $data['deskripsi'] = 'Dukungan muncul dari berbagai daerah yang semangat mendukung pasangan
ASLI, beberapa kelompok relawan siap menggerakan warga daerahnya yang
tinggal di DKI Jakarta untuk memilih (ASLI) Agus – Sylvi pada pemilihan
Gubernur DKI Jakarta yang akan diselenggarakan bulan Februari 2017
Dengan pemanfaatan teknologi informasi yang semakin maju dan terdepan
ditunjang dengan ibukota yang sudah siap infrastuktur internet pada era mobile
apps, maka Tim IT Relawan membuat suatu aplikasi berbasis mobile apps dan
website portal yang diberi nama “Relawan Jakarta ASLI”
Aplikasi ini akan memetakan suara dukungan kelompok relawan terhadap
pasangan ASLI Agus – Sylvi sehingga semua relawan akan lebih tegas dan terukur.
Juga ditunjang oleh Portal gubernurdki.com merupakan website news yang
berisikan berita, kegiatan, video, photo seputar pasangan Calon Gubernur Agus –
Sylvi (ASLI) menuju Gubernur DKI 2017 – 2022.
';
        $this->smarty->assign('share', $data);


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
                $result[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_relawan'].'/'.$data['id_berita'].'/'.url_title($data['judul']));
                $result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));
            endforeach;
            endif;
            $this->smarty->assign("berita_list", $result);
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
            
          
                $databerita['url_detail'] = site_url('public/berita/detail/'.$row['id_relawan'].'/'.$row['id_berita'].'/'.url_title($row['judul']));
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
        }

        

      
        public function berita_relawan_utama_side(){
            // get data
            $this->load->model('beritamodel');
            $result = $this->beritamodel->get_berita_relawan_utama_side();
        
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
            $this->smarty->assign("berita_list_side", $result);
            $this->smarty->assign("page_modul", 'Berita');
            $this->smarty->assign("page_modul_url", site_url('public/berita'));
        }

       

        public function beritacagub_cawagub_side(){
            //berita cagub-cawagub
            // get data
            $this->load->model('informasimodel');
            $result = $this->informasimodel->get_list_informasi_side();
           
            
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
            $this->smarty->assign("informasi_list_side", $result);
        }

        //video
        // get data
        public function video(){
         $this->load->model('videomodel');
            $result = $this->videomodel->get_list_video_limit();
         
            
            if(!empty($result)):
            foreach($result as $key=>$data):
            $path = 'doc/video/'.$data['id_video']."/";
            
            if(is_file($path.$data['video_image'])){
                $result[$key]['video_image'] = BASEURL.$path.$data['video_image'];
            } else {
                $result[$key]['video_image']= BASEURL.'doc/tmp.default.jpg';
            }

            $result[$key]['url_play'] = site_url('public/video/play/'.$data['id_video'].'/'.url_title($data['judul_video']));
            endforeach;
            endif;
            $this->smarty->assign("video_list_home", $result);
        }
   
        
    }
