<?php
    // important * untuk application base dari halaman ini
    class Video extends MY_Controller {
        
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
            $this->smarty->assign('template_content',"web/video/list.html");
            // load
            $this->load->library('pagination');
            $this->load->model('videomodel');
            $this->load->helper('text');
            //$this->layout->load_javascript("js/admin/plugins/lightbox/ekko-lightbox.js");
            //$this->layout->load_javascript("js/admin/plugins/lightbox/ekko-lightbox.css");
            $config['base_url'] = site_url("public/berita/index");
            $config['total_rows'] = $this->videomodel->get_total_video();
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
            $params = array(intval($this->uri->segment(4, 0)), $config['per_page']);
            // get data
            $result = $this->videomodel->get_list_video_limit($params);
            $this->smarty->assign("total", $totaldata);
            
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
            $this->smarty->assign("page_modul", 'Video ');
             $this->smarty->assign("page_judul", 'Video ');
            $this->smarty->assign("page_modul_url", site_url('public/video'));
            // display document
            $this->parser->parse('web/base-layout/document-full.html');
        }

        public
        function play() {
            // template content
            $this->smarty->assign("template_content", "web/video/play.html");
            // load
            $this->load->model('videomodel');
            $id_video = $this->uri->segment(4, 0);
            $data = $this->videomodel->get_video($id_video);
            $path = 'doc/video/'.$data['id_video'].'/';
            
            if($data['tipe'] == 'upload'):
            
            if(is_file($path.$data['video_image'])){
                $file_img = 'doc/video/'.$data['id_video']."/".$data['video_image'];
                $data['video_image'] = '<img src="'.BASEURL.$path.$data['video_image'].'" border="0" width="120">';
            } else {
                $data['video_image']= '-tidak ada gambar- ';
                $file_img = 'doc/tmp/video_default.jpg';
            }

            
            if(is_file($path.$data['video_file'])){
                $file_video = 'doc/video/'.$data['id_video'].'/'.$data['video_file'];
                $data['video_file'] = "<object id=\"flowplayer"."\" width=\"560\" height=\"315\" data=\"".BASEURL."doc/player/flowplayer-3.1.5.swf"."\" 
                                            type=\"application/x-shockwave-flash\">
                                            <param name=\"movie\" value=\"".BASEURL."doc/player/flowplayer-3.1.5.swf\" /> 
                                            <param name=\"allowfullscreen\" value=\"true\" />
                                            <param name=\"quality\" value=\"autohigh\" /> 
                                             <param name=\"bgcolor\" value=\"#000000\" /> 
                                            <param name=\"flashvars\" 
                                                value='config={\"clip\":{\"url\":\"".BASEURL.$file_video."\",\"autoBuffering\":false,\"autoPlay\":false} }' />
                                        </object>";
            } else {
                $data['video_file']= '';
            } else :
            $data['video_file'] = $data['video_embed'];
            endif;
            //echo $data['video_file'];exit;
            $this->smarty->assign("video_play",$data['video_file'] );
            $this->smarty->assign("judul_video",$data['judul_video'] );
            $this->smarty->assign("keterangan",$data['keterangan'] );
            $this->smarty->assign("sumber",$data['sumber'] );
            // display document
            //$this->parser->parse('web/video/play.html');
            $this->parser->parse('web/base-layout/document-frame.html');
        }

    }