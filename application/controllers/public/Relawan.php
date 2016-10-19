<?php
    // important * untuk application base dari halaman ini
    class Relawan extends MY_Controller {
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
            $this->smarty->assign('template_content',"web/relawan/detail.html");
            $this->load->model('relawanmodel');
             // data
                $id_relawan = $this->uri->segment(4, 0);
                $data = $this->relawanmodel->get_relawan_by_id($id_relawan);
                
                  $this->smarty->assign("data", $data);
                
                // notification
                $arr_notify = $this->notification->get_notification();
                
                if(!empty($arr_notify['post'])) {
                    $this->smarty->assign("data", $arr_notify['post']);
                }

                /// GET DATA foto
                $id_relawan = $this->uri->segment(4, 0);
                $data = $this->relawanmodel->get_relawan_by_id($id_relawan);
                $path = 'doc/relawan/'.$id_relawan."/";
                
                if(is_file($path.$data['foto'])){
                    $data['foto'] = BASEURL.$path.$data['foto'];
                } else {
                    $data['foto']= '-tidak ada gambar- ';
                }

                $this->smarty->assign("foto", $data['foto']);
                $this->smarty->assign("page_judul", 'Profil Relawan ');
                $this->smarty->assign("page_modul", 'Profil Relawan '.$data['nama']);
                 $this->smarty->assign("page_name", '');

            // display document
            $this->parser->parse('web/base-layout/document-detail.html');
        }

      
        
    }
