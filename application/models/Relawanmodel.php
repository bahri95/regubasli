<?php 
    
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Relawanmodel extends CI_Model {
        
        function  __construct() {
            // Call the Model constructor
            parent::__construct();
        }

        
        function get_total_relawan() {
            $sql = "SELECT COUNT(*)'total' FROM relawan_m";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                $query->free_result();
                return $result["total"];
            } else {
                return 0;
            }

        }

        
        function get_list_relawan_limit($params) {
            $sql = "SELECT * FROM relawan_m
            ORDER BY order_num ASC LIMIT ?, ?";
            $query = $this->db->query($sql, $params);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_list_relawan() {
            $sql = "SELECT * FROM relawan_m
            ORDER BY order_num ASC";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_relawan_by_id($id) {
            $this->db->where('id_relawan', $id);
            $query = $this->db->get('relawan_m');
            
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function process_relawan_add($params) {
            $sql = "INSERT INTO relawan_m (nama,  jabatan, content, deskripsi, pendidikan, riwayat, penghargaan, order_num)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            return $this->db->query($sql, $params);
        }

        
        function process_relawan_edit($params) {
            $sql = "UPDATE relawan_m SET nama = ?, jabatan = ?, content = ?, deskripsi = ?, pendidikan = ?, riwayat = ?, penghargaan = ?, order_num = ?
                WHERE id_relawan = ?";
            return $this->db->query($sql, $params);
        }

        
        function process_relawan_delete() {
            $this->db->where('id_relawan', $this->input->post('id_relawan'));
            return $this->db->delete('relawan_m');
        }

    }