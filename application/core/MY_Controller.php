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
   

            //banner
            $this->_display_banner();
            //sosmed
            $this->_display_sosmed();
            //
            $this->_display_banner_atas();
       
           
            //foto
            $this->_display_foto();

            //album
            $this->_display_album();

            //video
            $this->_display_video();

            //berita relawan utama
            $this->berita_relawan_utama();

            //berita relawan anggota
            $this->berita_relawan_anggota();

            //berita gubernur
            $this->beritacagub_cawagub();

           $menu_aktif = $this->uri->segment(2,0);
           $this->smarty->assign('menu_aktif', $menu_aktif);
        
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
            $this->smarty->assign("berita_list_side", $result);
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
               $result[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_relawan'].'/'.$data['id_berita'].'/'.url_title($data['judul']));
                $result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));
            endforeach;
            endif;
            $this->smarty->assign("berita_list_anggota_side", $result);
            $this->smarty->assign("page_modul", 'Berita');
            $this->smarty->assign("page_modul_url", site_url('public/berita'));
        }

        public function beritacagub_cawagub(){
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
            
          
           
            $path = 'doc/berita/'.$row['id_berita'].'/';
            
            if(is_file($path.$row['image'])){
                $berita[$key]['image'] = BASEURL.$path.$row['image'];
            } else {
                $berita[$key]['image']= BASEURL.'doc/tmp.default.jpg';
            }

            
            
                $berita[$key]['url_detail'] = site_url('public/beritadmsi/detail/'.$row['id_berita'].'/'.url_title($row['judul']));
                $berita[$key]['tanggal'] = $this->datetimemanipulation->GetFullDateWithDay($row['tanggal']);

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
        function _display_banner(){
            $this->load->model('bannermodel');
            //get data
            $databanner = $this->bannermodel->get_list_banner_public();
            
            if(!empty($databanner)):
            foreach($databanner as $k=>$row):
            
          
                $pathdok = 'doc/banner/'.$row['id_banner'].'/'.$row['banner'];
                
                if(!is_file($pathdok)):
                $databanner[$k]['banner'] = ''; else :
                $databanner[$k]['banner'] = BASEURL.$pathdok;
                endif;
           

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
                $data['bantas'] = ''.BASEURL.$path.$data['bantas'].'';
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

       

        
    }
