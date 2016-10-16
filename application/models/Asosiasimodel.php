<?php 
    
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Asosiasimodel extends CI_Model {
        
        function  __construct() {
            // Call the Model constructor
            parent::__construct();
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

        
        function get_all_asosiasi_by_kota($id_kota){
            $sql = "SELECT * FROM asosiasi_m WHERE id_kota  = ? ";
            $query = $this->db->query($sql, array($id_kota));
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_total_asosiasi($params) {
            $sql = "SELECT COUNT(*)'total' FROM asosiasi_m
                WHERE nama_asosiasi LIKE ? ";
            $query = $this->db->query($sql, $params);
            
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                $query->free_result();
                return $result["total"];
            } else {
                return 0;
            }

        }

        
        function get_total_asosiasi_daerah($params) {
            $sql = "SELECT COUNT(*)'total' FROM asosiasi_m a
                where nama_propinsi = ?";
            $query = $this->db->query($sql, $params);
            
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                $query->free_result();
                return $result["total"];
            } else {
                return 0;
            }

        }

        
        function get_data_asosiasi($params) {
            $sql = "SELECT DISTINCT * from asosiasi_m
                WHERE nama_asosiasi LIKE ? 
                ORDER BY id_asosiasi ASC LIMIT ?, ?";
            $query = $this->db->query($sql, $params);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_data_asosiasi_all() {
            $sql = "SELECT DISTINCT *
                FROM asosiasi_m 
                ORDER BY id_asosiasi ASC ";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_data_asosiasi_all_public() {
            $sql = "SELECT DISTINCT *
                FROM asosiasi_m 
                WHERE id_asosiasi <> 100
                ORDER BY id_asosiasi ASC ";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_data_asosiasi_cari($params) {
            $sql = "SELECT DISTINCT *
                FROM asosiasi_m 
                WHERE nama_asosiasi LIKE ? 
                ORDER BY id_asosiasi ASC ";
            $query = $this->db->query($sql, $params);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_data_asosiasi_daerah($params) {
            $sql = "SELECT DISTINCT *
                FROM asosiasi_m 
                WHERE nama_propinsi = ? 
                ORDER BY id_asosiasi ASC ";
            $query = $this->db->query($sql, $params);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_data_asosiasi_daerah_random($params) {
            $sql = "SELECT *
                FROM asosiasi_m 
                WHERE foto_utama IS NOT NULL  
                ORDER BY RAND() LIMIT ?, ? ";
            $query = $this->db->query($sql, $params);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_total_koleksi_museum($params) {
            $sql = "SELECT count(*) as total
                FROM koleksi_m 
                WHERE id_asosiasi = ? ";
            $query = $this->db->query($sql, $params);
            
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                $query->free_result();
                return $result['total'];
            } else {
                return false;
            }

        }

        
        function get_data_museum_hapus($params) {
            $sql = "SELECT a.*, admin_name, nama_kota
                FROM asosiasi_m a LEFT JOIN administrator_m b
                ON a.mdb =b.id_user LEFT JOIN spt_kota_m c
                ON a.id_kota = c.id_kota
                WHERE a.id_asosiasi = ? ";
            $query = $this->db->query($sql, $params);
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            } else {
                return false;
            }

        }

        
        function get_all_asosiasi() {
            $sql = "SELECT * FROM asosiasi_m ORDER BY id_asosiasi ASC";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_asosiasi_by_id($id) {
            $sql = "SELECT DISTINCT *
                FROM asosiasi_m 
                WHERE id_asosiasi = ?";
            $query = $this->db->query($sql, array($id));
            
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function process_asosiasi_add($params) {
            // insert into asosiasi_m
            $sql = "INSERT INTO asosiasi_m (nama_propinsi, nama_kota, 
                 nama_asosiasi, alamat, kodepos, telepon, fax,
                 website, email, profil, profil_english,  mdb, mdd)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,  ?, ?, ?, NOW())";
            return $this->db->query($sql, $params);
        }

        
        function process_asosiasi_edit($params) {
            // update into asosiasi_m
            $sql = "UPDATE asosiasi_m SET nama_propinsi = ?, nama_kota = ?,  nama_asosiasi = ?, profil = ?, profil_english = ?, alamat = ?, kodepos = ?, 
                telepon = ?, fax = ? , website = ?, email = ?, mdb = ?, mdd = NOW()
                WHERE id_asosiasi = ? ";
            return $this->db->query($sql, $params);
        }

        // function process_asosiasi_edit_info($params) {
        //        // update into asosiasi_m
        //        $sql = "UPDATE asosiasi_m SET id_kota = ?,  nama_asosiasi = ?, alamat = ?, kodepos = ?, 
        //          telepon = ?, fax = ? , website = ?, email = ?,  mdb = ?, mdd = NOW()
        //                WHERE id_asosiasi = ? ";
        //        return $this->db->query($sql, $params);
        //    }
        
        function process_asosiasi_delete($id) {
            // insert into asosiasi_m
            $this->db->where('id_asosiasi', $id);
            return $this->db->delete('asosiasi_m');
        }

    }