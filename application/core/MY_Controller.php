<?php 
    
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class MY_Controller extends CI_Controller {
        // init variable base
        protected $arr_site_data;
        protected $int_nav;
        protected $int_parent;
        protected $int_parent_selected;
        protected $id_user;
        protected $user_data = array();
        
        function  __construct() {
            // load application base
            //parent::WebApplicationBase();
            parent::__construct();
        }

        ///--Web Base Script ----
        public
        function  Webappbase() {
            // load smarty
            $this->base_load_common();
            // load app data
            $this->base_load_app();
            // view app data
            $this->base_view_app();
            //set bahasa
            $this->_set_language();
            //nama judul
            $this->_display_nama_judul();
            //nama menu
            $this->_display_nama_menu();
            //banner
            $this->_display_banner();
            //sosmed
            $this->_display_sosmed();
            //
            $this->_display_banner_atas();
            //label
            $this->_display_label();

            //foto
            $this->_display_foto();

            //album
            $this->_display_album();

            //video
            $this->_display_video();

            
            // //share
            // if($this->uri->segment(4,0) <> '' or $this->uri->segment(5,0) <> ''):
            // $this->_display_share();
            // endif;
        }
        
        public 
        function _display_share()
        {
            $this->load->model('sharemodel');
            $array_berita = array();
            $array_informasi = array();
            $array_agenda = array();
            $array_opini = array();
            $array_sesebi = array();
            
            // get data berita
            $params = $this->uri->segment(4,0);
            if($this->act_lang =='en'):
            $databerita = $this->sharemodel->get_pencarian_berita_english($params);
            
            if(!empty($databerita)):
            foreach($databerita as $row):
            
            if($row['id_relawan'] == '100'){
                $databerita['url_detail'] = site_url('public/beritadmsi/detail/'.$row['id_berita'].'/'.url_title($row['judul_english']));
                $databerita['kategori'] = 'DMSI News';
            } else {
                $databerita['url_detail'] = site_url('public/beritaanggota/detail/'.$row['id_berita'].'/'.url_title($row['judul_english']));
                $databerita['kategori'] = 'DMSI Members News';
            }

            $pathdok = 'doc/berita/'.$row['id_berita'].'/'.$row['image'];
            
            if(is_file($pathdok)):
            $databerita['image'] = BASEURL.$pathdok;
            endif;
            $detail_berita = $databerita['url_detail'];
            $array_berita[] = array('id_data' => $row['id_berita'], 'judul' => $row['judul_english'],'content' => strip_tags($this->getIntroText($row['content_english'],100)),'image' => $databerita['image'],'kategori' => $databerita['kategori'],'url_detail' => $databerita['url_detail']);
            endforeach;
            endif; else :
            $params = $this->uri->segment(4,0);
            $databerita = $this->sharemodel->get_pencarian_berita_indo($params);
            
            if(!empty($databerita)):
            foreach($databerita as $row):
            
            if($row['id_relawan'] == '100'){
                $databerita['url_detail'] = site_url('public/beritadmsi/detail/'.$row['id_berita'].'/'.url_title($row['judul']));
                $databerita['kategori'] = 'Berita DMSI';
            } else {
                $databerita['url_detail'] = site_url('public/beritaanggota/detail/'.$row['id_berita'].'/'.url_title($row['judul']));
                $databerita['kategori'] = 'Berita Anggota DMSI';
            }

            $pathdok = 'doc/berita/'.$row['id_berita'].'/'.$row['image'];
            
            if(is_file($pathdok)):
            $databerita['image'] = BASEURL.$pathdok;
            endif;
            $detail_berita = $databerita['url_detail'];
            $array_berita[] = array('id_data' => $row['id_berita'], 'judul' => $row['judul'],'content' => strip_tags($this->getIntroText($row['content'],100)),'image' => $databerita['image'],'kategori' => $databerita['kategori'],'url_detail' => $databerita['url_detail']);
            endforeach;
            endif;
            endif;
            // get data informasi
            // $params = array_merge($par, $limit);
            
            if($this->act_lang =='en'):
            $params = $this->uri->segment(5,0);
            $datainformasi = $this->sharemodel->get_pencarian_informasi_english($params);
            
            if(!empty($datainformasi)):
            foreach($datainformasi as $row):
            $datainformasi['url_detail'] = site_url('public/informasi/detail/'.$row['id_kategori'].'/'.$row['id_informasi'].'/'.url_title($row['judul_english']));
            $datainformasi['kategori'] = 'Information '.$row['kategori_english'];
            $pathdok = 'doc/informasi/'.$row['id_informasi'].'/'.$row['image'];
            
            if(is_file($pathdok)):
            $datainformasi['image'] = BASEURL.$pathdok;
            endif;
            $detail_informasi = $datainformasi['url_detail'];
            $array_informasi[] = array('id_data' => $row['id_informasi'], 'judul' => $row['judul_english'],'content' => strip_tags($this->getIntroText($row['content_english'],100)),'image' => $datainformasi['image'],'kategori' => $datainformasi['kategori'],'url_detail' => $datainformasi['url_detail']);
            endforeach;
            endif; else :
            $params = $this->uri->segment(5,0);
            $datainformasi = $this->sharemodel->get_pencarian_informasi_indo($params);
            
            if(!empty($datainformasi)):
            foreach($datainformasi as $row):
            $datainformasi['url_detail'] = site_url('public/informasi/detail/'.$row['id_kategori'].'/'.$row['id_informasi'].'/'.url_title($row['judul']));
            $datainformasi['kategori'] = 'Information '.$row['kategori'];
            $pathdok = 'doc/informasi/'.$row['id_informasi'].'/'.$row['image'];
            
            if(is_file($pathdok)):
            $datainformasi['image'] = BASEURL.$pathdok;
            endif;
            $detail_informasi = $datainformasi['url_detail'];
            $array_informasi[] = array('id_data' => $row['id_informasi'], 'judul' => $row['judul'],'content' => strip_tags($this->getIntroText($row['content'],100)),'image' => $datainformasi['image'],'kategori' => $datainformasi['kategori'],'url_detail' => $datainformasi['url_detail']);
            endforeach;
            endif;
            endif;
            // get data agenda
            
            if($this->act_lang =='en'):
            $params = $this->uri->segment(4,0);
            $dataagenda = $this->sharemodel->get_pencarian_agenda_english($params);
            
            if(!empty($dataagenda)):
            foreach($dataagenda as $row):
            
            if($row['id_relawan'] == '100'){
                $dataagenda['url_detail'] = site_url('public/kegiatandmsi/detail/'.$row['id_agenda'].'/'.url_title($row['judul_english']));
                $dataagenda['kategori'] = 'DMSI Event';
            } else {
                $dataagenda['url_detail'] = site_url('public/kegiatananggota/detail/'.$row['id_agenda'].'/'.url_title($row['judul_english']));
                $dataagenda['kategori'] = 'DMSI Member Event';
            }

            $pathdok = 'doc/agenda/'.$row['id_agenda'].'/'.$row['image_agenda'];
            
            if(is_file($pathdok)):
            $dataagenda['image'] = BASEURL.$pathdok;
            endif;
            $detail_agenda = $dataagenda['url_detail'];
            $array_agenda[] = array('id_data' => $row['id_agenda'], 'judul' => $row['judul_english'],'content' => strip_tags($this->getIntroText($row['keterangan_english'],100)),'image' => $dataagenda['image'],'kategori' => $dataagenda['kategori'],'url_detail' => $dataagenda['url_detail']);
            endforeach;
            endif; else :
            $params = $this->uri->segment(4,0);
            $dataagenda = $this->sharemodel->get_pencarian_agenda_indo($params);
            
            if(!empty($dataagenda)):
            foreach($dataagenda as $row):
            
            if($row['id_relawan'] == '100'){
                $dataagenda['url_detail'] = site_url('public/kegiatandmsi/detail/'.$row['id_agenda'].'/'.url_title($row['judul_agenda']));
                $dataagenda['kategori'] = 'Event DMSI';
            } else {
                $dataagenda['url_detail'] = site_url('public/kegiatananggota/detail/'.$row['id_agenda'].'/'.url_title($row['judul_agenda']));
                $dataagenda['kategori'] = 'Event Anggota DMSI';
            }

            $pathdok = 'doc/agenda/'.$row['id_agenda'].'/'.$row['image_agenda'];
            
            if(is_file($pathdok)):
            $dataagenda['image'] = BASEURL.$pathdok;
            endif;
            $detail_agenda = $dataagenda['url_detail'];
            $array_agenda[] = array('id_data' => $row['id_agenda'], 'judul' => $row['judul_agenda'],'content' => strip_tags($this->getIntroText($row['keterangan'],100)),'image' => $dataagenda['image'],'kategori' => $dataagenda['kategori'],'url_detail' => $dataagenda['url_detail']);
            endforeach;
            endif;
            endif;
            // get data opini
            // $params = array_merge($par, $limit);
            
            if($this->act_lang =='en'):
            $params = $this->uri->segment(4,0);
            $dataopini = $this->sharemodel->get_pencarian_opini_english($params);
            
            if(!empty($dataopini)):
            foreach($dataopini as $row):
            $dataopini['url_detail'] = site_url('public/opini/detail/'.$row['id_opini'].'/'.url_title($row['judul_english']));
            $dataopini['kategori'] = 'Opinion';
            $pathdok = 'doc/opini/'.$row['id_opini'].'/'.$row['image'];
            
            if(is_file($pathdok)):
            $dataopini['image'] = BASEURL.$pathdok;
            endif;
            $detail_opini = $dataopini['url_detail'];
            $array_opini[] = array('id_data' => $row['id_opini'], 'judul' => $row['judul_english'],'content' => strip_tags($this->getIntroText($row['content_english'],100)),'image' => $dataopini['image'],'kategori' => $dataopini['kategori'],'url_detail' => $dataopini['url_detail']);
            endforeach;
            endif; else :
            $params = $this->uri->segment(4,0);
            $dataopini = $this->sharemodel->get_pencarian_opini_indo($params);
            
            if(!empty($dataopini)):
            foreach($dataopini as $row):
            $dataopini['url_detail'] = site_url('public/opini/detail/'.$row['id_opini'].'/'.url_title($row['judul']));
            $dataopini['kategori'] = 'Opini';
            $pathdok = 'doc/opini/'.$row['id_opini'].'/'.$row['image'];
            
            if(is_file($pathdok)):
            $dataopini['image'] = BASEURL.$pathdok;
            endif;
            $detail_opini = $dataopini['url_detail'];
            $array_opini[] = array('id_data' => $row['id_opini'], 'judul' => $row['judul'],'content' => strip_tags($this->getIntroText($row['content'],100)),'image' => $dataopini['image'],'kategori' => $dataopini['kategori'],'url_detail' => $dataopini['url_detail']);
            endforeach;
            endif;
            endif;
            // get data opini
            // $params = array_merge($par, $limit);
            
            if($this->act_lang =='en'):
            $params = $this->uri->segment(4,0);
            $datasesebi = $this->sharemodel->get_pencarian_sesebi_english($params);
            
            if(!empty($datasesebi)):
            foreach($datasesebi as $row):
            $datasesebi['url_detail'] = site_url('public/sesebi/detail/'.$row['id_sesebi'].'/'.url_title($row['judul_english']));
            $datasesebi['kategori'] = 'Various';
            $pathdok = 'doc/sesebi/'.$row['id_sesebi'].'/'.$row['image'];
            
            if(is_file($pathdok)):
            $datasesebi['image'] = BASEURL.$pathdok;
            endif;
            $detail_sesebi = $datasesebi['url_detail'];
            $array_sesebi[] = array('id_data' => $row['id_sesebi'], 'judul' => $row['judul_english'],'content' => strip_tags($this->getIntroText($row['content_english'],100)),'image' => $datasesebi['image'],'kategori' => $datasesebi['kategori'],'url_detail' => $datasesebi['url_detail']);
            endforeach;
            endif; else :
            $params = $this->uri->segment(4,0);
            $datasesebi = $this->sharemodel->get_pencarian_sesebi_indo($params);
            
            if(!empty($datasesebi)):
            foreach($datasesebi as $row):
            $datasesebi['url_detail'] = site_url('public/sesebi/detail/'.$row['id_sesebi'].'/'.url_title($row['judul']));
            $datasesebi['kategori'] = 'Serba-serbi';
            $pathdok = 'doc/sesebi/'.$row['id_sesebi'].'/'.$row['image'];
            
            if(is_file($pathdok)):
            $datasesebi['image'] = BASEURL.$pathdok;
            endif;
            $detail_sesebi = $datasesebi['url_detail'];
            $array_sesebi[] = array('id_data' => $row['id_sesebi'], 'judul' => $row['judul'],'content' => strip_tags($this->getIntroText($row['content'],100)),'image' => $datasesebi['image'],'kategori' => $datasesebi['kategori'],'url_detail' => $datasesebi['url_detail']);
            endforeach;
            endif;
            endif;
            $array_hasil = array_merge($array_berita, $array_informasi, $array_agenda, $array_opini, $array_sesebi);
            $this->smarty->assign("datashare", $array_hasil);
            
        }
        public
        function _display_video()
        {
            $this->load->model('videomodel');
            $result = $this->videomodel->get_list_video_home();
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
            $this->smarty->assign("video_list", $result);
        }
        public
        function _display_album()
        {
            $this->load->model('fotomodel');
            $datamaxalbum = $this->fotomodel->get_max_album();
            $this->smarty->assign("datamaxalbum", $datamaxalbum);
        }
        public 
        function _display_foto()
        {
            $this->load->model('fotomodel');
            $result = $this->fotomodel->get_list_foto_limit_home();
            
            
            if(!empty($result)):
            foreach($result as $key=>$data):
            // set path of detail foto
            $path = 'doc/album/'.$data['id_album']."/".$data['id_foto']."/";
            
            if(is_file($path.$data['foto'])){
                
                if($this->act_lang == 'en'){
                    $result[$key]['judul_foto'] = $data['judul_english'];
                    $result[$key]['nama_album'] = $data['nama_english'];
                }

                $result[$key]['foto'] = BASEURL.$path.$data['foto'];
            } else {
                $result[$key]['foto']= BASEURL.'doc/tmp.default.jpg';
            }

            endforeach;
            endif;
            
            

            $this->smarty->assign("foto_list", $result);
        }
        final
        function base_load_common() {
            // define important variable
            define("BASEURL", $this->config->item('base_url'));
            // set smarty
            $this->smarty->template_dir = APPPATH. "views";
            //$this->smarty->compile_dir = "compilers";
            // load layout class
            $this->load->library('Layout');
            $this->layout->set_smarty($this->smarty);
        }

        protected
        function base_load_app() {
            // load themes (themes default : default)
            $this->layout->load_web_themes();
            // load base models
            //$this->load->model('profilmodel');
            // load javascript
            $this->_load_web_js();
            // load style
        }

        protected
        function base_view_app() {
            // display base link
            $this->_display_base_link();
            // display site data
            $this->_display_site_item();
            // display login
            $this->_display_user_login();
            //parse data elemen
            $this->_display_data_element();
            $this->_display_site_item();
        }

        private
        function _load_web_js() {
            
            $this->layout->load_javascript("themes/js/front/jquery.js");
        $this->layout->load_javascript("themes/js/front/plugins.js");
        $this->layout->load_javascript("themes/js/front/functions.js");
            
           
        }

        private
        function _display_base_link() {
            $this->load->library('session');
            $this->smarty->assign("BASEURL", BASEURL);
            $this->smarty->assign("url_login_view_admin", site_url("private/loginadmin/index"));
            $this->smarty->assign("url_login_process_admin", site_url("private/loginadmin/process_login"));
            $this->smarty->assign("url_lupa_pass_admin", site_url("private/lupapassword"));
            $this->smarty->assign("url_login_view", site_url("public/login/view"));
            $this->smarty->assign("url_login_process", site_url("public/login/process_login"));
            $this->smarty->assign("url_lupa_pass", site_url("public/lupapassword"));
            $this->smarty->assign("url_search_base", site_url("public/pencarian/index"));
            $search = $this->session->userdata('keyword');
            
            if(empty($search)){
                $this->smarty->assign("keyword_pencarian", $search );
            } else {
                $this->smarty->assign("keyword_pencarian", $search );
            }

        }

        private
        function _display_site_item() {
            // site data
            $this->arr_site_data = $this->sitemodel->get_site_data($this->config->item('web_portal_id'));
            
            if(!empty ($this->arr_site_data)) {
                $this->smarty->assign("site_title", $this->arr_site_data['judul_site']);
                $this->smarty->assign("site_description", $this->arr_site_data['meta_desc']);
                $this->smarty->assign("site_keyword", $this->arr_site_data['meta_key']);
            }

            $this->smarty->assign('homeurl', site_url('public/home'));
            $this->smarty->assign('baseurl', BASEURL);
            $this->smarty->assign('url_menu_anggota', site_url('public/relawan'));
            $this->smarty->assign('url_menu_berita_anggota', site_url('public/beritaanggota'));
            $this->smarty->assign('url_menu_kegiatan_anggota', site_url('public/kegiatananggota'));
            $this->smarty->assign('url_menu_profil', site_url('public/profil/detail'));
            $this->smarty->assign('url_menu_pengumuman', site_url('public/pengumuman'));
            $this->smarty->assign('url_menu_kegiatan_dmsi', site_url('public/kegiatandmsi'));
            $this->smarty->assign('url_menu_berita_dmsi', site_url('public/beritadmsi'));
            $this->smarty->assign('url_menu_berita_anggota', site_url('public/beritaanggota'));
            $this->smarty->assign('url_menu_video', site_url('public/video'));
            $this->smarty->assign('url_menu_aspirasi', site_url('public/aspirasi'));
            $this->smarty->assign('url_menu_regulasi', site_url('public/regulasi'));
            $this->smarty->assign('url_menu_download', site_url('public/download'));
            $this->smarty->assign('url_menu_kontak', site_url('public/kontak'));
            $this->smarty->assign('url_menu_registrasi', site_url('public/registrasi'));
            $this->smarty->assign('url_menu_opini', site_url('public/opini'));
            $this->smarty->assign('url_menu_sesebi', site_url('public/sesebi'));
            $this->smarty->assign('url_menu_foto', site_url('public/foto'));
            $this->smarty->assign('url_menu_sponsor', site_url('public/sponsor'));
            $this->smarty->assign('url_menu_program', site_url('public/program'));
            $this->smarty->assign('url_menu_bagan', site_url('public/bagan'));
            $this->smarty->assign('url_menu_forum', site_url('public/forum'));
            $this->smarty->assign('url_menu_harga', site_url('public/harga'));
            //profil asli
            $this->load->model('profilmodel');
            $profil = $this->profilmodel->get_list_profil();
           
            $this->smarty->assign('profil', $profil);
            //profil Relawan
            $this->load->model('relawanmodel');
             $relawan = $this->relawanmodel->get_list_relawan();
           
            $this->smarty->assign('relawan', $relawan);
            // page data
            $segments = $this->uri->total_segments();
            
            if(empty($segments)) {
                $params = array('public', 'home','index');
            } else {
                $params = array($this->uri->segment(1), $this->uri->segment(2), $this->uri->segment(3),              $this->uri->segment(4), $this->uri->segment(5) );
            }

            $current_page = $this->sitemodel->get_current_page($params);
            
            if(!empty($current_page)) {
                $this->smarty->assign('page_title', $current_page['title'] . " | ");
                $this->int_nav      = $current_page['id_nav'];
                $this->int_parent = $current_page['id_parent'];
            }

            // title
        
            $this->_set_language();
        }

        private
        function _display_data_element(){
            //get data kontak info
            $this->db->select('*');
            $this->db->from('kontak_m');
            $this->db->limit(1);
            $kontak = $this->db->get()->row_array();
            $this->smarty->assign('kontakinfo', $kontak);
            $this->load->model('relawanmodel');
            $relawan = $this->relawanmodel->get_list_relawan();
            
            if($relawan <> ''){
            foreach($relawan as $key=>$data):
            $relawan[$key]['url_detail'] = site_url('public/relawan/profil/'.$data['id_relawan'].'/'.url_title($data['nama']));
            endforeach;
            $this->smarty->assign('relawanfooter', $relawan);
            }
            //get data berita 
            $this->load->library('datetimemanipulation');
            $this->db->select('*');
            $this->db->from('berita_m');
            $this->db->order_by('tanggal','DESC');
            $this->db->limit(4);
            $berita = $this->db->get()->result_array();
            
            if(!empty($berita)):
            foreach($berita as $key=>$row):
            
            if($this->act_lang  == 'en'):
            $berita[$key]['judul'] = $row['judul_english'];
            $berita[$key]['content'] = $row['content_english'];
            endif;
            $path = 'doc/berita/'.$row['id_berita'].'/';
            
            if(is_file($path.$row['image'])){
                $berita[$key]['image'] = BASEURL.$path.$row['image'];
            } else {
                $berita[$key]['image']= BASEURL.'doc/tmp.default.jpg';
            }

            
            if($this->act_lang == 'en'){
                $berita[$key]['url_detail'] = site_url('public/beritadmsi/detail/'.$row['id_berita'].'/'.url_title($row['judul_english']));
                $berita[$key]['tanggal'] = $this->datetimemanipulation->GetFullDateWithDayEn($row['tanggal']);
            } else {
                $berita[$key]['url_detail'] = site_url('public/beritadmsi/detail/'.$row['id_berita'].'/'.url_title($row['judul']));
                $berita[$key]['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($row['tanggal']);
            }

            endforeach;
            endif;
            $this->smarty->assign('berita_sidebar', $berita);
            //get data profil
            $this->db->select('*');
            $this->db->from('profil_m');
            $this->db->order_by('order_num','ASC');
            $profil = $this->db->get()->result_array();
            
            if(!empty($profil)):
            foreach($profil as $key=>$row):
            $profil[$key]['url_detail'] = site_url('public/profil/detail/'.$row['id_info'].'/'.url_title($row['nama']));
            endforeach;
            endif;
            $this->smarty->assign('profil_side', $profil);
          
        }

        private
        function _display_user_login() {
            // get id user
            $this->id_user = $this->session->userdata('id_user');
            
            if(!empty($this->id_user)) {
                $this->smarty->assign('user_login', true);
                // link
                $this->smarty->assign("url_logout_admin_process", site_url("public/login"));
                $this->smarty->assign("url_private", site_url("private/dashboard"));
                // load
                $this->load->model('accountmodel');
                // get data
                $data = $this->accountmodel->get_administrator_details($this->id_user);
                $data['admin_image'] = BASEURL.'doc/images/logo_icon.jpg';
                //foto
                $pathfoto = 'doc/admin/'.$data['id_user'].'/'.$data['photo'];
                
                if($data['jenis_kelamin'] == 'P'):
                
                if(!empty($data['photo']) AND is_file($pathfoto)) {
                    $data['photo'] = BASEURL.$pathfoto;
                } else {
                    $data['photo'] = BASEURL.'doc/images/default_female.gif';
                }

                endif;
                
                if($data['jenis_kelamin'] == 'L'):
                
                if(!empty($data['photo']) AND is_file($pathfoto)) {
                    $data['photo'] = BASEURL.$pathfoto;
                } else {
                    $data['photo'] = BASEURL.'doc/images/default_male.gif';
                }

                endif;
                $data['profile_url'] = site_url('private/account/status');
                $data['account_url'] = site_url('private/account/login');
                
                
                $this->user_data = $data;
                // parse data
                $this->smarty->assign('user_account', $data);
            } else {
                $this->smarty->assign('user_login', false);
            }

        }

        ///--END Web Base Script ----
        ///----PRIVATE AREA BASE SCRIPT----
        public
        function  PrivateAppBase() {
            // load smarty
            $this->base_load_common_private();
            // load app data
            $this->base_load_app_private();
            // view app data
            $this->base_view_app_private();
        }

        final
        function base_load_common_private() {
            // define important variable
            define("BASEURL", $this->config->item('base_url'));
            // set smarty
            $this->smarty->template_dir = APPPATH. "views";
            //$this->smarty->compile_dir = "compilers";
            // load layout class
            $this->load->library('Layout');
            $this->layout->set_smarty($this->smarty);
        }

        protected
        function base_load_app_private() {
            // load themes (themes default : default)
            $this->layout->load_web_themes("admin");
            // load base models
            // load javascript
            $this->_load_private_js();
            // load style
        }

        protected
        function base_view_app_private() {
            // display base link
            $this->_display_base_link_private();
            // display site data
            $this->_display_site_item_private();
            // run authority
            $this->_check_authority();
            // display top navigation
            $this->_display_top_navigation();
            // display sidebar navigation
            //$this->_display_sidebar_navigation();
            // display user login 
            $this->_display_user_login();
         
           
        }

        private
        function _load_aspirasi(){
            $this->load->model('aspirasimodel');
            //jumlah aspirasi
            $jumlah_aspirasi = $this->aspirasimodel->get_jumlah_aspirasi();
            $this->smarty->assign('jumlah_aspirasi', $jumlah_aspirasi);
            //jumlah aspirasi verifikasi
            $jumlah_aspirasi_ver = $this->aspirasimodel->get_jumlah_aspirasi_verifikasi();
            $this->smarty->assign('jumlah_aspirasi_ver', $jumlah_aspirasi_ver);
            //jumlah aspirasi jawaban
            $jumlah_aspirasi_jaw = $this->aspirasimodel->get_jumlah_aspirasi_jawaban();
            $this->smarty->assign('jumlah_aspirasi_jaw', $jumlah_aspirasi_jaw);
            //data aspirasi
            $data_aspirasi = $this->aspirasimodel->get_data_aspirasi();
            $this->smarty->assign('data_aspirasi', $data_aspirasi);
            $this->smarty->assign("url_aspirasi_list", site_url("private/aspirasi"));
            $this->smarty->assign("url_aspirasi_verifikasi", site_url("private/aspirasi/process/verifikasi"));
            $this->smarty->assign("url_aspirasi_list_verifikasi", site_url("private/aspirasi/verifikasi"));
            $this->smarty->assign("url_aspirasi_list_jawaban", site_url("private/aspirasi/jawaban"));
            // by id
            $params = $this->uri->segment(4,0);
            $data_aspirasi_by_id = $this->aspirasimodel->get_data_aspirasi_by_id($params);
            $this->smarty->assign('data_aspirasi_by_id', $data_aspirasi_by_id);
            //read aspirasi
            $this->smarty->assign("url_aspirasi_hapus", site_url("private/aspirasi/process/hapus"));
            $this->smarty->assign("url_aspirasi_jawab", site_url("private/aspirasi/process/jawab"));
        }

       
        private
        function _load_private_js() {
            $this->layout->load_javascript("js/admin/jquery.min.js");
            $this->layout->load_javascript("js/admin/bootstrap.min.js");
            $this->layout->load_javascript("js/admin/jquery-ui.min.js");
            //-- Sparkline --
            $this->layout->load_javascript("js/admin/plugins/sparkline/jquery.sparkline.min.js");
            // -- highcharts --
            $this->layout->load_javascript("js/charts/highcharts.js");
            $this->layout->load_javascript("js/charts/modules/exporting.js");
            $this->layout->load_javascript("js/charts/modules/data.js");
            // -- jQuery Knob Chart --
            $this->layout->load_javascript("js/admin/plugins/jqueryKnob/jquery.knob.js");
            //-- daterangepicker
            $this->layout->load_javascript("js/admin/plugins/daterangepicker/daterangepicker.js");
            //-- datepicker
            $this->layout->load_javascript("js/admin/plugins/datepicker/bootstrap-datepicker.js");
            //--Bootstrap WYSIHTML5
            $this->layout->load_javascript("js/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js");
            //-- iCheck
            $this->layout->load_javascript("js/admin/plugins/iCheck/icheck.min.js");
            //-- AdminLTE App
            $this->layout->load_javascript("js/admin/adminlte/app.js");
            
            $this->layout->load_javascript("js/ajaxupload.3.5.js");
            // lightbox
            //-- AdminLTE for demo purposes
            //$this->layout->load_javascript("js/admin/AdminLTE/demo.js");
            //textarea
            $this->layout->load_javascript("js/tinymce/js/tinymce/tinymce.min.js");
            $this->layout->load_javascript("js/tinymce/js/tinymce/plugins/table/plugin.dev.js");
            $this->layout->load_javascript("js/tinymce/js/tinymce/plugins/paste/plugin.dev.js");
            $this->layout->load_javascript("js/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js");
            $this->layout->load_javascript("js/admin/adminlte/custom.js");
        }

        private
        function _display_base_link_private() {
            $this->smarty->assign('url_process_logout', site_url('public/login/process_logout'));
            $this->smarty->assign('baseurl', BASEURL);
        }

        private
        function _display_site_item_private() {
            // site data
            $this->arr_site_data = $this->sitemodel->get_site_data($this->config->item('admin_portal_id'));
            
            if(!empty ($this->arr_site_data)) {
                $this->smarty->assign("site_title", $this->arr_site_data['judul_site']);
                $this->smarty->assign("site_description", $this->arr_site_data['meta_desc']);
                $this->smarty->assign("site_keyword", $this->arr_site_data['meta_key']);
            }

            // page data
            $params = array($this->uri->segment(1), $this->uri->segment(2), $this->uri->segment(3, 'index'));
            $current_page = $this->sitemodel->get_current_page($params);
            
            if(!empty($current_page)) {
                $this->smarty->assign('page_title', $current_page['title'] . " | ");
                $this->int_nav      = $current_page['id_nav'];
                $this->int_parent = $current_page['id_parent'];
            }

        }

        private
        function _check_authority() {
            // get id user
            $this->id_user = $this->session->userdata('id_user');
            // authority
            
            if(empty($this->id_user)) {
                redirect('public/home');
            } else {
                $params = array($this->id_user, $this->config->item('admin_portal_id'), $this->uri->segment(1), $this->uri->segment(2), $this->uri->segment(3, 'index'));
                $result = $this->sitemodel->get_user_authority($params);
                
                if(!$result) {
                    redirect('public/home');
                }

            }

        }

        private
        function _display_top_navigation() {
            // get parent selected
            $this->int_parent_selected = $this->sitemodel->get_parent_group_by_idnav($this->int_parent, 0);
            
            if(empty($this->int_parent_selected)) {
                $this->int_parent_selected = $this->int_nav;
            }

            // site navigation
            $params = array($this->id_user, $this->config->item('admin_portal_id'), 0);
            $rs_id = $this->sitemodel->get_private_navigation_by_parent($params);
            $html = "";
            $sub_class = "";
            
            if($rs_id) {
                foreach($rs_id as $result) {
                    $sub_menu = "";
                    $sub_menu = $this->_display_sidebar_navigation($result['id_nav']);
                    
                    if(!empty($sub_menu)):
                    $sub_class = " treeview"; else :
                    $sub_class = "";
                    endif;
                    // selected
                    
                    if($this->int_parent_selected == $result['id_nav'])                    $selected = 'class="active '.$sub_class.'"'; else                    $selected = 'class="'.$sub_class.'"';
                    // string html
                    $html .= '<li '.$selected.'>';
                    /*$html .= '<a href="'.site_url($result['app_path'].'/'.$result['module_path'].'/'.($result['page_path'] == 'index' ? '' : $result['page_path'])).'" >';
                */
                    
                    if(!empty($sub_menu)):
                    $html .= '<a href="#">';
                    $html .= $result['title'];
                    $html .= '<i class="fa fa-angle-left pull-right"></i>'; else :
                    $html .= '<a href="'.site_url($result['app_path'].'/'.$result['module_path'].'/'.($result['page_path'] == 'index' ? '' :
                    $result['page_path'])).'" >';
                    $html .= $result['title'];
                    endif;
                    $html .= '</a>';
                    $html .= $sub_menu;
                    $html .= "</li>\n";
                }

                $this->smarty->assign('site_navigation_menu_private', $html);
            }

        }

        private
        function _display_sidebar_navigation($int_parent_selected = 0) {
            // get parent selected
            
            if(empty($int_parent_selected)):
            $int_parent_selected = $this->sitemodel->get_parent_group_by_idnav($this->int_parent, $this->int_parent_selected);
            endif;
            
            if(empty($int_parent_selected)) {
                $int_parent_selected = $this->int_nav;
            }

            // parse sidebar menu
            $params = array($this->id_user, $this->config->item('admin_portal_id'), $int_parent_selected);
            $rs_id = $this->sitemodel->get_private_navigation_by_parent($params);
            $html = "";
            
            if($rs_id) {
                $html .= '<ul class="treeview-menu">';
                foreach($rs_id as $result) {
                    // selected
                    
                    if($int_parent_selected == $result['id_nav'])                    $selected = 'class="side-active"'; else                    $selected = '';
                    // string html
                    $html .= '<li '.$selected.'>';
                    $html .= '<a href="'.site_url($result['app_path'].'/'.$result['module_path'].'/'.($result['page_path'] == 'index' ? '' :
                    $result['page_path'])).'" >';
                    $html .= '<i class="fa fa-angle-double-right"></i> ';
                    $html .= $result['title'];
                    $html .= '</a>';
                    // sub display
                    $html .= $this->_display_sidebar_sub_navigation($result['id_nav'], $int_parent_selected);
                    $html .= "</li>\n";
                }

                $html .= "</ul>";
                return $html;
            }

        }

        private
        function _display_sidebar_sub_navigation($int_parent, $int_parent_selected) {
            // get parent selected
            $int_parent_selected = $this->sitemodel->get_parent_group_by_idnav($this->int_parent, $int_parent_selected);
            
            if(empty($int_parent_selected)) {
                $int_parent_selected = $this->int_nav;
            }

            // parse sub menu
            $params = array($this->id_user, $this->config->item('admin_portal_id'), $int_parent);
            $rs_id = $this->sitemodel->get_private_navigation_by_parent($params);
            $html = "";
            
            if($rs_id) {
                $html .= '<ul class="treeview-menu">';
                foreach($rs_id as $result) {
                    // selected
                    
                    if($int_parent_selected == $result['id_nav'])                    $selected = 'class="active"'; else                    $selected = '';
                    // string html
                    $html .= '<li>';
                    $html .= '<a href="'.site_url($result['app_path'].'/'.$result['module_path'].'/'.($result['page_path'] == 'index' ? '' :
                    $result['page_path'])).'" '.$selected.' >';
                    $html .= '<i class="fa fa-angle-double-right"></i>';
                    $html .= $result['title'];
                    $html .= '</a>';
                    // sub display
                    $html .= $this->_display_sidebar_sub_navigation($result['id_nav'], $int_parent_selected);
                    $html .= "</li>\n";
                }

                $html .= "</ul>";
            }

            return $html;
        }

        public
        function load_crud($output){
            
            if(!empty($output)):
            foreach($output->css_files as $file):
            $this->layout->load_style_crud($file);
            endforeach;
            foreach($output->js_files as $filejs):
            $this->layout->load_javascript_crud($filejs);
            endforeach;
            endif;
        }

        /// LOG PROCESS
        public
        function savelog($params = array()){
            $this->load->model("logmodel");
            
            if(!empty($params)):
            $this->logmodel->process_log_add($params);
            endif;
        }

        public
        function getLogDataObjek($namaobjek = '', $limit_awal = 0, $limit_akhir = 5){
            $this->load->model("logmodel");
            $this->load->library("datetimemanipulation");
            $logdata = array();
            $params = array('%'.$namaobjek.'%',$limit_awal, $limit_akhir );
            
            if(!empty($params)):
            $logdata = $this->logmodel->get_list_log_objek_limit($params);
            
            if(!empty($logdata)):
            foreach($logdata as $key=>$rec):
            $logdata[$key]['tanggal'] = $this->datetimemanipulation->GetFullDate($rec['tanggal'], "in", "yes");
            endforeach;
            endif;
            endif;
            return $logdata;
        }

        public
        function getLogDataObjekID($namaobjek = '', $id_data = '',$limit_awal = 0, $limit_akhir = 5){
            $this->load->model("logmodel");
            $this->load->library("datetimemanipulation");
            $logdata = array();
            $params = array('%'.$namaobjek.'%',$id_data, $limit_awal, $limit_akhir );
            
            if(!empty($params)):
            $logdata = $this->logmodel->get_list_log_objek_id_limit($params);
            
            if(!empty($logdata)):
            foreach($logdata as $key=>$rec):
            $logdata[$key]['tanggal'] = $this->datetimemanipulation->GetFullDate($rec['tanggal'], "in", "yes");
            endforeach;
            endif;
            endif;
            return $logdata;
        }

        
        function getIntroText($text, $max =100){
            $intro = '';
            $text = strip_tags($text);
            
            if(strlen($text)>$max){
                $intro = substr($text,0,$max);
                $pos = strlen($intro) - strpos(strrev($intro), " ");
                $intro = substr($text,0, $pos);
                
                if(strlen($intro) <= $max)$intro .= "...";
            } else {
                $intro =$text;
            }

            return $intro;
        }

        private
        function _set_language() {
            $uri_addr = $this->session->userdata('uri_adr');
            //echo $uri_addr;exit;
            // echo strpos($uri_addr, "process") ; exit;
            $this->act_lang = $this->session->userdata('act-lang');
            
            if(empty($this->act_lang)):
            $this->session->set_userdata('act-lang','id');
            $this->act_lang = 'id';
            endif;
            $lang = $this->uri->segment(3);
            
            if($lang == 'en' OR $lang == 'id'):
                $this->session->set_userdata('act-lang', $lang);
                $this->act_lang = $lang;
                //$arr_uri = explode("/public/",$uri_addr);
                if(strpos($uri_addr, "home") > 1):
                    redirect('public/home'); 
                endif;
                if(strpos($uri_addr, "process") > 1):
                    redirect('public/home'); 
                else :
                    redirect($uri_addr);
                endif;
            endif;
            
            if($lang != 'process' OR $lang != 'loginadmin'):
            $this->smarty->assign("url_lang_id", site_url("public/lang/id"));
            $this->smarty->assign("url_lang_en", site_url("public/lang/en")); else :
            $uri_addr = site_url('public/home');
            $this->smarty->assign("url_lang_id", site_url("public/lang/id"));
            $this->smarty->assign("url_lang_en", site_url("public/lang/en"));
            endif;
            $uri_addr = $this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6);
            $this->session->set_userdata('uri_adr', $uri_addr);
            //echo $this->session->userdata('uri_adr');exit;
            $this->smarty->assign("actlang", $this->act_lang);
            $this->smarty->assign("act_lang", $this->act_lang);
        }

        private
        function _display_nama_judul(){
            
            if($this->act_lang  == 'en'){
                $judul['berita_dmsi'] = "DMSI NEWS AND MEMBER";
                $judul['berita_anggota'] = "DMSI MEMBER NEWS";
                $judul['anggota'] = "DMSI MEMBER";
                $judul['harga'] = "MARKET PRICE";
                $judul['judul_album_video'] = "
THE LATEST PHOTOS AND VIDEOS";
            } else {
                $judul['berita_dmsi'] = 'BERITA DMSI DAN ANGGOTA';
                $judul['berita_anggota'] = 'BERITA ANGGOTA DMSI';
                $judul['anggota'] = "ANGGOTA DMSI";
                $judul['harga'] = "HARGA PASAR";
                $judul['judul_album_video'] = "
FOTO DAN VIDEO TERBARU";
            }

            $this->smarty->assign('judul', $judul);
        }

        private
        function _display_nama_menu(){
            $this->load->model('profilmodel');
            $profil = $this->profilmodel->get_list_profil();
            $this->smarty->assign("profil", $profil);

            if($this->act_lang  == 'en'){
                $menu['home'] = "Home";
                $menu['tentang_dmsi'] = "About DMSI";
                $menu['visi'] = "Vision and Mission";
                $menu['berita_dmsi'] = "News DMSI";
                $menu['event_dmsi'] = "Event DMSI";
                $menu['anggota_dmsi'] = "Member DMSI";
                $menu['profil_anggota'] = "Member Profil";
                $menu['berita_anggota'] = "News Members";
                $menu['event_anggota'] = "Event Member";
                $menu['informasi'] = "Information";
                $menu['wawasan'] = "Insight";
                $menu['opini'] = "Opinions";
                $menu['sesebi'] = "Various";
                $menu['infografis'] = "Infographics";
                $menu['program'] = "Action Programme DMSI";
                $menu['bagan'] = "Organizational Structure";
                
                $menu['harga'] = "Market Prices";
                $menu['grafik'] = "Market Price";
                $menu['foto'] = "Photo Gallery";
                $menu['video'] = "Video Gallery";
                $menu['regulasi'] = "Regulation";
                $menu['aspirasi'] = "Aspiration";
                $menu['kontak'] = "Contact";
                $menu['menu_aktif'] = $this->uri->segment(2);
            } else {
                $menu['home'] = "Beranda";
                $menu['tentang_dmsi'] = "Tentang DMSI";
                $menu['visi'] = "Visi dan Misi";
                $menu['berita_dmsi'] = "Berita DMSI";
                $menu['event_dmsi'] = "Event DMSI";
                $menu['anggota_dmsi'] = "Anggota DMSI";
                $menu['profil_anggota'] = "Profil Anggota";
                $menu['berita_anggota'] = "Berita Anggota";
                $menu['event_anggota'] = "Event Anggota";
                $menu['informasi'] = "Informasi";
                $menu['wawasan'] = "Wawasan";
                $menu['opini'] = "Opini";
                $menu['sesebi'] = "Serba-Serbi";
                $menu['infografis'] = "Infografis";
                $menu['program'] = "Program Aksi DMSI";
                $menu['bagan'] = "Struktur Organisasi";
                $menu['harga'] = "Harga Pasar";
                $menu['grafik'] = "Harga Pasar";
                $menu['foto'] = "Galeri Foto";
                $menu['video'] = "Galeri Video";
                $menu['regulasi'] = "Regulasi";
                $menu['aspirasi'] = "Aspirasi";
                $menu['kontak'] = "Kontak";
                $menu['menu_aktif'] = $this->uri->segment(2);
            }

            $this->smarty->assign('menu', $menu);
        }

        private
        function _display_banner(){
            $this->load->model('bannermodel');
            //get data
            $databanner = $this->bannermodel->get_list_banner_public();
            
            if(!empty($databanner)):
            foreach($databanner as $k=>$row):
            
            if($this->act_lang == 'en'){
                $pathdok_en = 'doc/banner_en/'.$row['id_banner'].'/'.$row['banner_english'];
                
                if(!is_file($pathdok_en)):
                $databanner[$k]['banner'] = ''; else :
                $databanner[$k]['banner'] = BASEURL.$pathdok_en;
                endif;
            } else {
                $pathdok = 'doc/banner/'.$row['id_banner'].'/'.$row['banner'];
                
                if(!is_file($pathdok)):
                $databanner[$k]['banner'] = ''; else :
                $databanner[$k]['banner'] = BASEURL.$pathdok;
                endif;
            }

            // endif;
            endforeach;
            endif;
            $this->smarty->assign("databanner", $databanner);
        }

        private
        function _display_banner_atas(){
            $this->load->model('bantasmodel');
            $this->load->library('notification');
            $data = $this->bantasmodel->get_bantas_info();
            $path = 'doc/bantas/'.$data['id_bantas']."/";
            
            if(is_file($path.$data['bantas'])){
                $url_hapus = site_url('private/bantas/process/hapusgambar/')."/".$data['id_bantas'];
                $data['bantas'] = '<img class="img-responsive" src="'.BASEURL.$path.$data['bantas'].'" border="0"><br />';
            } else {
                $data['bantas']= '-tidak ada gambar- ';
            }

            $this->smarty->assign("image_bantas", $data['bantas']);
        }

        private
        function _display_sosmed(){
            $this->load->model('sosmedmodel');
            //get data
            $datasosmed = $this->sosmedmodel->get_list_sosmed_public();
            $this->smarty->assign("datasosmed", $datasosmed);
        }

        private
        function _display_label(){
            
            if($this->act_lang == 'en'){
                $label['selengkapnya'] = 'More';
                $label['aspirasi'] = 'You can deliver the criticism, suggestions, questions to us through information and tools below will be displayed on the front page.';
                $label['pesan'] = 'Send a Message';
                $label['nama'] = 'Name';
                $label['pekerjaan'] = 'Jobs';
                $label['objek'] = 'Object';
                $label['tanggal'] = 'Date';
                $label['foto'] = 'Photo';
                $label['judul'] = 'Title';
                //aspirasi
                $label['isi_pesan'] = 'Message Body Aspiration';
                $label['validasi'] = 'Validation Code';
                $label['sosmed'] = 'Social Media';
                $label['info'] = 'Contact Info';
                $label['petunjuk'] = 'Instructions';
                $label['petunjuk1'] = 'Please Enter Your Full Name';
                $label['petunjuk2'] = 'fill the column by selecting the Object to which this aspiration in show';
                $label['petunjuk3'] = 'DMSI = Top Party DMSI';
                $label['petunjuk4'] = 'In addition to DI = One party DMSI Association Members';
                $label['petunjuk5'] = 'Email filled with your email';
                $label['petunjuk6'] = 'Dates stuffed with the date you sent the message this aspiration';
                $label['petunjuk7'] = 'Message message filled with Aspiration Aspiration you, suggest politely and in good';
                $label['petunjuk8'] = 'Validation code in the contents in accordance with the code on it';
                //kontak
                $label['kontak'] = 'Contact Us';
                $label['kontak_deskripsi'] = 'You can deliver the criticism, suggestions, questions to us through information and tools below.';
                $label['subjek'] = 'Subject';
                $label['pesan_kontak'] = 'the contents of the message';
                $label['bagikan'] = 'Share';
            } else {
                $label['selengkapnya'] = 'Selengkapnya';
                $label['aspirasi'] = 'Anda dapat menyampaikan kritik, saran, pertanyaan kepada kami melalui informasi dan sarana di bawah ini yang akan ditampilkan di Halaman Depan.';
                $label['pesan'] = 'Kirim Pesan';
                $label['nama'] = 'Nama';
                $label['pekerjaan'] = 'Pekerjaan';
                $label['objek'] = 'Objek';
                $label['tanggal'] = 'Tanggal';
                $label['foto'] = 'Foto';
                $label['judul'] = 'Judul';
                $label['isi_pesan'] = 'Isi Pesan Aspirasi';
                $label['validasi'] = 'Kode Validasi';
                $label['sosmed'] = 'Sosial Media';
                $label['info'] = 'Kontak Info';
                $label['petunjuk'] = 'Petunjuk';
                $label['petunjuk1'] = 'Isikan Nama Anda Secara Lengkap';
                $label['petunjuk2'] = 'isikan Kolom Objek dengan memilih ke pihak mana Aspirasi ini di tunjukan';
                $label['petunjuk3'] = 'DMSI = Pihak Utama DMSI';
                $label['petunjuk4'] = 'Selain DMSI = Salah satu pihak Anggota relawan DMSI';
                $label['petunjuk5'] = 'Email diisi dengan email Anda';
                $label['petunjuk6'] = 'Tanggal diisi dengan tanggal Anda mengirim pesan Aspirasi ini';
                $label['petunjuk7'] = 'Pesan Aspirasi diisi dengan pesan Aspirasi anda, di sarankan sopan dan baik';
                $label['petunjuk8'] = 'Kode validasi di isi sesuai dengan kode di atasnya';
                $label['kontak'] = 'Kontak Kami';
                $label['kontak_deskripsi'] = 'Anda dapat menyampaikan kritik, saran, pertanyaan kepada kami melalui informasi dan sarana di bawah ini.';
                $label['subjek'] = 'Subjek';
                $label['pesan_kontak'] = 'Isi Pesan';
                $label['bagikan'] = 'Bagikan';
            }

            $this->smarty->assign('label', $label);
        }

        // display site data
        /// END LOG PROCESS
        //---END PRIVATE BASE SCRIPT--
    }
