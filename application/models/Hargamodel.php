<?php 
    
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Hargamodel extends CI_Model {
        
        function  __construct() {
            // Call the Model constructor
            parent::__construct();
        }

        
        function get_list_harga($param) {
            $sql = "SELECT * from harga_m where id_katharga = ? and id_sub_katharga = ? and tahun = ? and id_bulan = ? ";
            $query = $this->db->query($sql, $param);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        function get_list_harga_edit($param) {
            $sql = "SELECT * from harga_m where id_katharga = ? and id_sub_katharga = ? and tahun = ? and id_bulan = ? and id_harga <> ? ";
            $query = $this->db->query($sql, $param);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_max_tahun() {
            $sql = "SELECT MAX(tahun) as maxtahun from harga_m";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_list_katharga() {
            $sql = "SELECT * from katharga_m";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

         function get_list_sub_katharga($id_katharga) {
             $sql = "SELECT * FROM sub_katharga_m WHERE id_katharga = ?";
            $query = $this->db->query($sql, $id_katharga);
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;

        }

        }

        function get_list_sub_katharga_edit() {
             $sql = "SELECT * FROM sub_katharga_m";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;

        }

        }

        
        function get_list_bulan() {
            $sql = "SELECT * from bulan_m";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_list_harga_private() {
            $sql = "SELECT a.*, b.id_bulan, b.bulan, b.lengkap, s.katharga, d.id_sub_katharga, d.sub_katharga FROM harga_m a 
            LEFT JOIN katharga_m s ON a.id_katharga = s.id_katharga
            LEFT JOIN sub_katharga_m d ON a.id_sub_katharga = d.id_sub_katharga 
            LEFT JOIN bulan_m b ON a.id_bulan = b.id_bulan
            ORDER BY a.id_katharga ASC";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_list_harga_domestik_tabel() {
            $sql = "SELECT tahun,id_sub_katharga, MAX(case when `id_bulan` = '1' then harga_rupiah end) AS januari, 
        MAX(case when `id_bulan` = '2' then harga_rupiah end) AS februari, 
        MAX(case when `id_bulan` = '3' then harga_rupiah end) AS maret, 
        MAX(case when `id_bulan` = '4' then harga_rupiah end) AS april,
        MAX(case when `id_bulan` = '5' then harga_rupiah end) AS mei,
        MAX(case when `id_bulan` = '6' then harga_rupiah end) AS juni,
        MAX(case when `id_bulan` = '7' then harga_rupiah end) AS juli,
        MAX(case when `id_bulan` = '8' then harga_rupiah end) AS agustus,
        MAX(case when `id_bulan` = '9' then harga_rupiah end) AS september,
        MAX(case when `id_bulan` = '10' then harga_rupiah end) AS oktober,
        MAX(case when `id_bulan` = '11' then harga_rupiah end) AS november,
        MAX(case when `id_bulan` = '12' then harga_rupiah end) AS desember        
        FROM harga_m
        
         WHERE id_katharga = '1' group by id_sub_katharga";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        function get_list_harga_domestik_cpo_tabel() {
            $sql = "SELECT tahun, MAX(case when `id_bulan` = '1' then harga_rupiah end) AS januari, 
        MAX(case when `id_bulan` = '2' then harga_rupiah end) AS februari, 
        MAX(case when `id_bulan` = '3' then harga_rupiah end) AS maret, 
        MAX(case when `id_bulan` = '4' then harga_rupiah end) AS april,
        MAX(case when `id_bulan` = '5' then harga_rupiah end) AS mei,
        MAX(case when `id_bulan` = '6' then harga_rupiah end) AS juni,
        MAX(case when `id_bulan` = '7' then harga_rupiah end) AS juli,
        MAX(case when `id_bulan` = '8' then harga_rupiah end) AS agustus,
        MAX(case when `id_bulan` = '9' then harga_rupiah end) AS september,
        MAX(case when `id_bulan` = '10' then harga_rupiah end) AS oktober,
        MAX(case when `id_bulan` = '11' then harga_rupiah end) AS november,
        MAX(case when `id_bulan` = '12' then harga_rupiah end) AS desember         
        FROM harga_m WHERE id_katharga = '2' group by tahun";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_list_harga_ekspor_tabel() {
            $sql = "SELECT tahun,id_sub_katharga, MAX(case when `id_bulan` = '1' then harga_rupiah end) AS januari, 
        MAX(case when `id_bulan` = '2' then harga_rupiah end) AS februari, 
        MAX(case when `id_bulan` = '3' then harga_rupiah end) AS maret, 
        MAX(case when `id_bulan` = '4' then harga_rupiah end) AS april,
        MAX(case when `id_bulan` = '5' then harga_rupiah end) AS mei,
        MAX(case when `id_bulan` = '6' then harga_rupiah end) AS juni,
        MAX(case when `id_bulan` = '7' then harga_rupiah end) AS juli,
        MAX(case when `id_bulan` = '8' then harga_rupiah end) AS agustus,
        MAX(case when `id_bulan` = '9' then harga_rupiah end) AS september,
        MAX(case when `id_bulan` = '10' then harga_rupiah end) AS oktober,
        MAX(case when `id_bulan` = '11' then harga_rupiah end) AS november,
        MAX(case when `id_bulan` = '12' then harga_rupiah end) AS desember        
        FROM harga_m
        
         WHERE id_katharga = '3' group by id_sub_katharga";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_list_harga_grafik() {
            $maxtahun = $this->db->query("SELECT MAX(tahun) as maxtahun from harga_m");
            foreach ($maxtahun->result_array() as $tahun) {
                $tahunmax = $tahun['maxtahun'];
            }

            $sql = "SELECT a.*, b.id_bulan, b.bulan, s.katharga, d.id_sub_katharga, d.sub_katharga FROM harga_m a 
            LEFT JOIN katharga_m s ON a.id_katharga = s.id_katharga
            LEFT JOIN sub_katharga_m d ON a.id_sub_katharga = d.id_sub_katharga 
            LEFT JOIN bulan_m b ON a.id_bulan = b.id_bulan
             WHERE  a.tahun = $tahunmax ORDER BY b.id_bulan ASC";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function cek_bulan_domestik($id_bulan){
            $sql = "SELECT * from harga_m where id_katharga = '1' and id_bulan = ?";
            $query = $this->db->query($sql);
            
            if($query->num_rows > 0){
                $result = $query->result();
                $query = free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_list_harga_grafik_domestik() {
            $maxtahun = $this->db->query("SELECT MAX(tahun) as maxtahun from harga_m");
            foreach ($maxtahun->result_array() as $tahun) {
                $tahunmax = $tahun['maxtahun'];
            }

            $sql = "SELECT a.*, b.id_bulan, b.bulan, s.katharga, d.id_sub_katharga, d.sub_katharga FROM harga_m a 
            LEFT JOIN katharga_m s ON a.id_katharga = s.id_katharga
            LEFT JOIN sub_katharga_m d ON a.id_sub_katharga = d.id_sub_katharga 
             LEFT JOIN bulan_m b ON a.id_bulan = b.id_bulan
            WHERE a.id_katharga = '1' and a.tahun = $tahunmax  ORDER BY b.id_bulan ASC";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

         function get_list_harga_grafik_cpo_domestik() {
            $maxtahun = $this->db->query("SELECT MAX(tahun) as maxtahun from harga_m");
            foreach ($maxtahun->result_array() as $tahun) {
                $tahunmax = $tahun['maxtahun'];
            }

            $sql = "SELECT a.*, b.id_bulan, b.bulan, s.katharga, d.id_sub_katharga, d.sub_katharga FROM harga_m a 
            LEFT JOIN katharga_m s ON a.id_katharga = s.id_katharga
            LEFT JOIN sub_katharga_m d ON a.id_sub_katharga = d.id_sub_katharga 
            LEFT JOIN bulan_m b ON a.id_bulan = b.id_bulan WHERE a.id_katharga = '2' and a.tahun = $tahunmax  ORDER BY b.id_bulan ASC";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_list_harga_grafik_ekspor() {
            $maxtahun = $this->db->query("SELECT MAX(tahun) as maxtahun from harga_m");
            foreach ($maxtahun->result_array() as $tahun) {
                $tahunmax = $tahun['maxtahun'];
            }

            $sql = "SELECT a.*, b.id_bulan, b.bulan, s.katharga, d.id_sub_katharga, d.sub_katharga FROM harga_m a 
            LEFT JOIN katharga_m s ON a.id_katharga = s.id_katharga
            LEFT JOIN sub_katharga_m d ON a.id_sub_katharga = d.id_sub_katharga
            LEFT JOIN bulan_m b ON a.id_bulan = b.id_bulan 
            WHERE a.id_katharga = '3' and a.tahun = $tahunmax  ORDER BY b.id_bulan ASC";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_harga_by_id($id) {
            $this->db->where('id_harga', $id);
            $query = $this->db->get('harga_m');
            
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function process_harga_add($params) {
            $sql = "INSERT INTO harga_m (id_katharga, id_sub_katharga, tahun, id_bulan, harga_rupiah, harga_dolar, sumber)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
            return $this->db->query($sql, $params);
        }

        
        function process_harga_edit($params) {
            $sql = "UPDATE harga_m SET id_katharga = ? , id_sub_katharga = ?, tahun = ?, id_bulan = ?, harga_rupiah = ?, harga_dolar = ?, sumber = ? WHERE id_harga = ? ";
            return $this->db->query($sql, $params);
        }

        
        function process_harga_delete($id) {
            $this->db->where('id_harga', $id);
            return $this->db->delete('harga_m');
        }
        
        function get_list_tahun_grafik($id_katharga){
			$sql = "SELECT tahun FROM harga_m WHERE id_katharga = ? GROUP BY tahun DESC ORDER BY tahun DESC";
            $query = $this->db->query($sql, array($id_katharga)); 
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return array('0' => date('Y-m-d'));
            }
		}
        
        function get_list_harga_grafik_tbs($id_katharga, $id_sub_katharga, $tahunmax ){
            
            $sql = "SELECT b.*, a.harga_rupiah, a.harga_dolar FROM bulan_m b
					LEFT JOIN harga_m a ON b.id_bulan = a.id_bulan
					WHERE a.id_katharga = ? AND a.id_sub_katharga = ? 
					and a.tahun = ?  ORDER BY b.id_bulan ASC";
            $query = $this->db->query($sql, array($id_katharga, $id_sub_katharga, $tahunmax)); 
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return array($result, $tahunmax);
            } else {
                return false;
            }
		}
		
		function get_list_harga_grafik_cpodomestik($id_katharga, $tahunmax){
			
            $sql = "SELECT b.*, a.harga_rupiah, a.harga_dolar FROM bulan_m b
					LEFT JOIN harga_m a ON b.id_bulan = a.id_bulan
					WHERE a.id_katharga = ? 
					and a.tahun = ?  ORDER BY b.id_bulan ASC";
            $query = $this->db->query($sql, array($id_katharga, $tahunmax)); 
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return array($result, $tahunmax);
            } else {
                return false;
            }
		}
		
		function get_list_harga_tabel_input($id_katharga){
            $sql = "SELECT a.*, b.katharga , c.sub_katharga, bln.lengkap FROM harga_m a 
					LEFT JOIN katharga_m b ON a.id_katharga = b.id_katharga 
					LEFT JOIN sub_katharga_m c ON a.id_sub_katharga = c.id_sub_katharga 
					LEFT JOIN bulan_m bln ON a.id_bulan = bln.id_bulan  
					WHERE a.id_katharga = ?  ORDER BY tahun DESC, id_bulan DESC";
            $query = $this->db->query($sql, array($id_katharga));
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

    }
