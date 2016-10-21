<?php
    // important * untuk application base dari halaman ini
    class Profil extends MY_Controller {
        //class Dashboard extends CI_Controller{
        
        function  __construct() {
            // load application base
            parent::__construct();
            $this->Webappbase();
            $this->load->library('datetimemanipulation');
        }

        // pages
        public
       function detail(){
            $this->smarty->assign('template_content',"web/profil/detail.html");
            $this->load->model('profilmodel');
             // data
                $id_info = $this->uri->segment(4, 0);
                $data = $this->profilmodel->get_profil_by_id($id_info);
                
                  $this->smarty->assign("data", $data);
                
                // notification
                $arr_notify = $this->notification->get_notification();
                
                if(!empty($arr_notify['post'])) {
                    $this->smarty->assign("data", $arr_notify['post']);
                }

                /// GET DATA foto
                $id_profil = $this->uri->segment(4, 0);
                $data = $this->profilmodel->get_profil_by_id($id_profil);
                $path = 'doc/profil/'.$id_profil."/";
                
                if(is_file($path.$data['foto'])){
                    $data['foto'] = BASEURL.$path.$data['foto'];
                } else {
                    $data['foto']= '-tidak ada gambar- ';
                }

                $this->smarty->assign("foto", $data['foto']);
                $this->smarty->assign("page_judul", 'Profil Cagub-Cawagub');
                $this->smarty->assign("page_modul", 'Profil '. $data['nama']);
                $this->smarty->assign("page_name", '');
            // display document
            $this->parser->parse('web/base-layout/document-detail.html');
        }

      
        
    }
