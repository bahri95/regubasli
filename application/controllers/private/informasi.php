<?php    class Informasi extends MY_Controller {                function  __construct() {            // load application base            parent::__construct();            $this->PrivateAppBase();            $this->load->library("image_lib");        }        public        function index() {            // template content            $this->smarty->assign("template_content", "private/informasi/list");            // load            $this->load->model('informasimodel');            $this->load->library('notification');            $this->load->library('pagination');            //table grid            $this->layout->load_javascript("js/admin/plugins/datatables/jquery.dataTables.js");            $this->layout->load_javascript("js/admin/plugins/datatables/dataTables.bootstrap.js");            //get data            $data = $this->informasimodel->get_list_informasi_limit_private();                        if(!empty($data)):            foreach($data as $k=>$row):            $pathdok = 'doc/informasi/'.$row['id_informasi'].'/'.$row['image'];                        if(!is_file($pathdok)):            $data[$k]['image'] = ''; else :            $data[$k]['image'] = BASEURL.$pathdok;            endif;            endforeach;            endif;            $this->smarty->assign("data", $data);            $this->smarty->assign("no",1);            //$this->smarty->assign("total", $totaldata);            //parse url            $this->smarty->assign('url_add', site_url('private/informasi/add'));            $this->smarty->assign('url_list', site_url('private/informasi/index'));            $this->smarty->assign('url_process', site_url('private/informasi/process/hapus'));            $this->smarty->assign('url_edit', site_url('private/informasi/edit'));            // notification            $arr_notify = $this->notification->get_notification();            // notification            $this->smarty->assign("notification_msg", $arr_notify['message']);            $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':            'green'));            // display document            $this->parser->parse('private/base-layout/document.html');        }        // switcher        public        function process($action) {            switch($action) {                case 'add':                    $this->process_add();                    break;                case 'edit':                    $this->process_edit();                    break;                case 'hapus':                    $this->process_hapus();                    break;                case 'hapusgambar':                    $this->hapusgambar();                    break;                case 'download':                    $this->download_lampiran();                    break;                default :                    // default redirect                    redirect('private/berita/add');                    break;            }    }    public    function add() {        // template content        $this->smarty->assign("template_content", "private/informasi/add");        //load        $this->load->library('notification');        $this->load->model('informasimodel');        // url             $this->smarty->assign("url_add", site_url("private/informasi/add"));        $this->smarty->assign("url_list", site_url("private/informasi"));        $this->smarty->assign("url_process", site_url("private/informasi/process/add"));        // notification        $arr_notify = $this->notification->get_notification();                if(!empty($arr_notify['post'])) {            $this->smarty->assign("data", $arr_notify['post']);        }        // notification        $this->smarty->assign("notification_msg", $arr_notify['message']);        $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':        'green'));        // display document        $this->parser->parse('private/base-layout/document.html');    }    public    function process_add() {        // load library        $this->load->model('informasimodel');        $this->load->library('notification');        $this->load->library("uploader");        // set rules              $this->notification->check_post('judul', 'Judul', 'required');        $this->notification->check_post('content', 'Konten', 'required');        $this->notification->check_post('tanggal', 'Tanggal', 'required');        $this->notification->check_post('keterangan_gambar', 'Keterangan Gambar', 'required');            // run                if ($this->notification->valid_input()) {            // params            $params = array('judul' => $this->input->post('judul'),                                    'content' => $this->input->post('content'),                                    'tanggal' => $this->input->post('tanggal'),                'keterangan_gambar' => $this->input->post('keterangan_gambar');            // execute                        if($this->informasimodel->process_informasi_add($params)) {                $id_informasi = $this->db->insert_id();                                if (!empty($_FILES['foto']['tmp_name'])) {                   // set rules (kosongkan jika tidak menggunakan batasan sama sekali)                   $config['upload_path']  = "doc/informasi/" . $id_informasi . '/';                   $config['allowed_types']= 'gif|jpg|png|jpeg';                   $config['max_size'] = '4000';                                      $config['file_name'] = $id_informasi.'_'.$_FILES['foto']['name'];                    if(!is_dir($config['upload_path'])):                    mkdir($config['upload_path']);                    endif;                   $this->load->library('upload', $config);                    // proses upload                    if ($this->upload->do_upload("foto")) {                    $id_informasi = $this->db->insert_id();                       $data       = $this->upload->data();                        $foto = $data['file_name'];                        // //resize                         $config['image_library'] = 'gd2';                        $config['source_image']  = "doc/informasi/".$id_informasi.'/'.$foto;                        $config['source_image']  = "doc/informasi/".$id_informasi.'/'.$foto;                                               $config['width']     = '640';                        $config['height']   = '360';                                                $this->image_lib->initialize($config);                                                                         // $this->image_lib->resize();                        $this->db->set("image",$foto);                        $this->db->where("id_informasi", $id_informasi);                        $this->db->update("informasi_m");                    } else {                        //echo $this->upload->message;                        $this->notification->set_message("File Gambar gagal diupload, file gambar tidak memenuhi kriteria");                        $this->notification->sent_notification(false);                                           }                }                $this->notification->clear_post();                $this->notification->set_message("Data berhasil disimpan");                $this->notification->sent_notification(true);            } else {                $this->notification->set_message("Data gagal disimpan");                $this->notification->sent_notification(false);            }        } else {            $this->notification->sent_notification(false);        }        // default redirect        redirect('private/informasi/add');    }    public    function edit() {        // template content        $this->smarty->assign("template_content", "private/informasi/edit");        // load        $this->load->model('informasimodel');        $this->load->library('notification');        $this->load->library('DateTimeManipulation');        // parse url        $this->smarty->assign("url_add", site_url("private/informasi/add"));        $this->smarty->assign("url_list", site_url("private/informasi"));        $this->smarty->assign("url_process", site_url("private/informasi/process/edit"));        // data              $id_informasi = $this->uri->segment(4, 0);        $data = $this->informasimodel->get_informasi_by_id($id_informasi);        $path = 'doc/informasi/'.$data['id_informasi']."/";                if(is_file($path.$data['image'])){                      $data['image_informasi'] = '<img src="'.BASEURL.$path.$data['image'].'" height="200px" border="0">';        } else {            $data['image_informasi']= '-tidak ada gambar- ';        }        $this->smarty->assign("image_informasi", $data['image_informasi']);        ///ASIGN DATA variable nya ke smarty        $this->smarty->assign("data", $data);        // notification        $arr_notify = $this->notification->get_notification();                if(!empty($arr_notify['post'])) {            $this->smarty->assign("data", $arr_notify['post']);        }        // notification        $this->smarty->assign("notification_msg", $arr_notify['message']);        $this->smarty->assign("notification_status", (empty($arr_notify['message_status'])?'red':        'green'));        // display document        $this->parser->parse('private/base-layout/document.html');    }    public    function process_edit() {        // load library        $this->load->model('informasimodel');        $this->load->library('notification');        $this->load->library("uploader");         $this->notification->check_post('judul', 'Judul', 'required');        $this->notification->check_post('content', 'Konten', 'required');        $this->notification->check_post('tanggal', 'Tanggal', 'required');        $this->notification->check_post('keterangan_gambar', 'Keterangan Gambar', 'required');            // run                if ($this->notification->valid_input()) {            // params            $params = array('judul' => $this->input->post('judul'),                                    'content' => $this->input->post('content'),                                    'tanggal' => $this->input->post('tanggal'),                'keterangan_gambar' => $this->input->post('keterangan_gambar'),                'id_informasi' => $this->input->post('id_informasi'));            // execute                        if($this->informasimodel->process_informasi_edit($params)) {                $id_informasi = $this->input->post('id_informasi');                                 if (!empty($_FILES['foto']['tmp_name'])) {                      $this->uploader->remove_dir('doc/informasi/' . $id_informasi . '/');                   // set rules (kosongkan jika tidak menggunakan batasan sama sekali)                   $config['upload_path']  = "doc/informasi/" . $id_informasi . '/';                   $config['allowed_types']= 'gif|jpg|png|jpeg';                                                  $config['file_name'] = $id_informasi.'_'.$_FILES['foto']['name'];                    if(!is_dir($config['upload_path'])):                    mkdir($config['upload_path']);                    endif;                   $this->load->library('upload', $config);                    // proses upload                    if ($this->upload->do_upload("foto")) {                    $id_informasi = $this->input->post('id_informasi');                       $data       = $this->upload->data();                        $foto = $data['file_name'];                        // //resize                         $config['image_library'] = 'gd2';                        $config['source_image']  = "doc/informasi/".$id_informasi.'/'.$foto;                        $config['source_image']  = "doc/informasi/".$id_informasi.'/'.$foto;                                              $config['width']     = '640';                        $config['height']   = '360';                                                                        $this->image_lib->initialize($config);                                                                         $this->image_lib->resize();                        $this->db->set("image",$foto);                        $this->db->where("id_informasi", $id_informasi);                        $this->db->update("informasi_m");                    } else {                        //echo $this->upload->message;                        $this->notification->set_message("File Gambar gagal diupload, file gambar tidak memenuhi kriteria");                        $this->notification->sent_notification(false);                                           }                }                $this->notification->clear_post();                $this->notification->set_message("Data berhasil disimpan");                $this->notification->sent_notification(true);            } else {                $this->notification->set_message("Data gagal disimpan");                $this->notification->sent_notification(false);            }        } else {            $this->notification->sent_notification(false);        }        // default redirect        redirect('private/informasi/edit/'.$this->input->post('id_informasi'));    }    public    function process_hapus() {        // load library        $this->load->library('notification');        $this->load->library('uploader');        $this->load->model('informasimodel');        // set rules        $this->notification->check_post('id_informasi', 'id', 'required');        // run                if ($this->notification->valid_input()) {            // params            $params = $this->input->post('id_informasi');                        if(is_array($params)):            // execute            foreach($params as $id):            $informasi = $this->informasimodel->get_informasi_by_id($id);            $this->informasimodel->process_informasi_delete($id);            $this->uploader->remove_dir('doc/informasi/'.$id."/");            endforeach;            $this->notification->clear_post();            $this->notification->set_message("Data berhasil dihapus");            $this->notification->sent_notification(true); else :            $this->notification->set_message("Tidak ada data yang terpilih untuk dihapus!");            $this->notification->sent_notification(false);            endif;        }        // default redirect        redirect('private/informasi');    }    public    function hapusgambar() {        // load library        $this->load->library('notification');        $this->load->library('uploader');        $this->load->model('informasimodel');        // set rules        $id_informasi = $this->uri->segment(5, 0);        // run                if (!empty($id_informasi)) {            // params            $this->db->set('image','');            $this->db->where('id_informasi' , $id_informasi);            $this->db->update('informasi_m');            $this->uploader->remove_dir('doc/informasi/'.$id_informasi."/");            $this->notification->set_message("Gambar berhasil dihapus");            $this->notification->sent_notification(true);        }        // default redirect        redirect('private/informasi/edit/'.$id_informasi);    }}