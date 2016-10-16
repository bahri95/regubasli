<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registrasimodel extends CI_Model {

    function  __construct() {
        // Call the Model constructor
       parent::__construct();
    }
	
	function get_list_asosiasi() {
        $sql = "SELECT * FROM asosiasi_m ORDER BY id_asosiasi DESC";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return 0;
        }
    }

    function get_list_asosiasi_satu() {
        $id_asosiasi = $this->uri->segment(4,0);
        $sql = "SELECT * FROM asosiasi_m where id_asosiasi = $id_asosiasi GROUP BY id_asosiasi";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return 0;
        }
    }

    function get_list_anggota() {
        $sql = "SELECT a.*, b.id_asosiasi, b.nama_asosiasi, c.*, d.*, e.* from registrasi_m a 
        LEFT JOIN asosiasi_m b on a.id_asosiasi = b.id_asosiasi
        LEFT JOIN spt_kota_m c on a.id_kota = c.id_kota
        LEFT JOIN spt_negara_m d on a.id_negara = d.id_negara
        LEFT JOIN spt_propinsi_m e on a.id_propinsi = e.id_propinsi 
        WHERE a.user_status = 'aktif' ORDER BY a.nama";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return 0;
        }
    }
    function get_list_anggota_baru() {
        $sql = "SELECT a.*, b.id_asosiasi, b.nama_asosiasi, c.*, d.*, e.* from registrasi_m a 
        LEFT JOIN asosiasi_m b on a.id_asosiasi = b.id_asosiasi
        LEFT JOIN spt_kota_m c on a.id_kota = c.id_kota
        LEFT JOIN spt_negara_m d on a.id_negara = d.id_negara
        LEFT JOIN spt_propinsi_m e on a.id_propinsi = e.id_propinsi
         where a.disetujui = 'tidak' AND a.user_status = 'aktif' ORDER BY a.nama";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return 0;
        }
    }

    function get_list_anggota_disetujui() {
        $sql = "SELECT a.*, b.id_asosiasi, b.nama_asosiasi, c.*, d.*, e.* from registrasi_m a 
        LEFT JOIN asosiasi_m b on a.id_asosiasi = b.id_asosiasi
        LEFT JOIN spt_kota_m c on a.id_kota = c.id_kota
        LEFT JOIN spt_negara_m d on a.id_negara = d.id_negara
        LEFT JOIN spt_propinsi_m e on a.id_propinsi = e.id_propinsi
         where a.disetujui = 'ya' AND a.user_status = 'aktif' ORDER BY a.nama";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return 0;
        }
    }

     function get_list_anggota_disetujui_asosiasi() {
        $id_asosiasi = $this->uri->segment(4,0);
        $sql = "SELECT a.*, b.id_asosiasi, b.nama_asosiasi, c.*, d.*, e.* from registrasi_m a 
        LEFT JOIN asosiasi_m b on a.id_asosiasi = b.id_asosiasi
        LEFT JOIN spt_kota_m c on a.id_kota = c.id_kota
        LEFT JOIN spt_negara_m d on a.id_negara = d.id_negara
        LEFT JOIN spt_propinsi_m e on a.id_propinsi = e.id_propinsi
         where a.disetujui = 'ya' AND a.user_status = 'aktif' AND a.id_asosiasi = $id_asosiasi ORDER BY a.nama";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return 0;
        }
    }

    
    
     function get_jumlah_anggota_baru(){
        $sql = "SELECT a.*, count(*)'jumlah', b.id_asosiasi, b.nama_asosiasi, c.*, d.*, e.* from registrasi_m a 
        LEFT JOIN asosiasi_m b on a.id_asosiasi = b.id_asosiasi
        LEFT JOIN spt_kota_m c on a.id_kota = c.id_kota
        LEFT JOIN spt_negara_m d on a.id_negara = d.id_negara
        LEFT JOIN spt_propinsi_m e on a.id_propinsi = e.id_propinsi where a.disetujui = 'tidak' AND a.user_status = 'aktif'";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            $result = $query->result_array();
            $query->free_result();
            return $result;
        }else{
            return 0;
        }
    }

    function get_jumlah_anggota_disetujui(){
        $sql = "SELECT a.*, count(*)'jumlah', b.id_asosiasi, b.nama_asosiasi, c.*, d.*, e.* from registrasi_m a 
        LEFT JOIN asosiasi_m b on a.id_asosiasi = b.id_asosiasi
        LEFT JOIN spt_kota_m c on a.id_kota = c.id_kota
        LEFT JOIN spt_negara_m d on a.id_negara = d.id_negara
        LEFT JOIN spt_propinsi_m e on a.id_propinsi = e.id_propinsi where a.disetujui = 'ya' AND a.user_status = 'aktif'";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            $result = $query->result_array();
            $query->free_result();
            return $result;
        }else{
            return 0;
        }
    }

   function get_all_kota_by_propinsi($id_propinsi){
        $sql = "SELECT * FROM spt_kota_m WHERE id_propinsi = ?";
        $query = $this->db->query($sql, array($id_propinsi));
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return false;
        }
    }

    

     function get_list_negara() {
        $sql = "SELECT * FROM spt_negara_m";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return 0;
        }
    }

    function get_all_propinsi(){
        $sql = "SELECT * FROM spt_propinsi_m";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return false;
        }
    }

    function get_id_registrasi() {
        $cekdata = $this->db->query("SELECT * FROM registrasi_m");
        if($cekdata->num_rows() > 0 ){
        $sql = "SELECT (max(id_registrasi)+1) 'registrasi' FROM registrasi_m";
        }else{
        $sql = "SELECT  (COUNT(*)+1)'registrasi' FROM registrasi_m";
        }
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return 0;
        }
    }


	
     function is_exists_email($email) {
        $sql = "SELECT COUNT(*)'total' FROM registrasi_m WHERE LOWER(email) = ?";
        $query = $this->db->query($sql, array($email));
        $result = $query->row_array();
        $query->free_result();
        if (isset($result['total']) AND !empty($result['total'])) {
            return true;
        }else {
            return false;
        }
    }

    function is_exists_username($username) {
        $sql = "SELECT COUNT(*)'total' FROM registrasi_m WHERE LOWER(username) = ?";
        $query = $this->db->query($sql, array($username));
        $result = $query->row_array();
        $query->free_result();
        if (isset($result['total']) AND !empty($result['total'])) {
            return true;
        }else {
            return false;
        }
    }

    function is_exists_telepon($telepon) {
        $sql = "SELECT COUNT(*)'total' FROM registrasi_m WHERE LOWER(telepon) = ?";
        $query = $this->db->query($sql, array($telepon));
        $result = $query->row_array();
        $query->free_result();
        if (isset($result['total']) AND !empty($result['total'])) {
            return true;
        }else {
            return false;
        }
    }



    


    function process_registrasi_daftar($params) {
        $sql = "INSERT INTO registrasi_m (nama, pekerjaan, id_asosiasi, email, username, password, perusahaan, alamat, web, id_propinsi, id_kota, kode_pos, id_negara, telepon, fax, no_ktp, user_key, user_status) VALUES ( ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        return $this->db->query($sql, $params);
        print_r($sql);
    }

    
    function get_data_registrasi_by_id($params){
         $sql = "SELECT a.*, b.id_asosiasi, b.nama_asosiasi, c.*, d.*, e.* from registrasi_m a 
        LEFT JOIN asosiasi_m b on a.id_asosiasi = b.id_asosiasi
        LEFT JOIN spt_kota_m c on a.id_kota = c.id_kota
        LEFT JOIN spt_negara_m d on a.id_negara = d.id_negara
        LEFT JOIN spt_propinsi_m e on a.id_propinsi = e.id_propinsi where a.id_registrasi = ?";
        $query = $this->db->query($sql,$params);
        if($query->num_rows() > 0){
            $result = $query->result_array();
            $query->free_result();
            return $result;
        }else{
            return 0;
        }
    }

    function process_registrasi_delete($id) {
            $this->db->where('id_registrasi', $id);
            return $this->db->delete('registrasi_m');
        }
    

}