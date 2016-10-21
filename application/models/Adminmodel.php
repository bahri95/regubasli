<?php
    class Adminmodel extends CI_Model {
        
        function  __construct() {
            // Call the Model constructor
            parent::__construct();
        }

        
        function get_list_asosiasi(){
            $sql = "SELECT * FROM relawan_m order by id_relawan DESC";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_list_auth(){
            $sql = "SELECT * FROM sys_authority_m order by id_auth ASC";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        // get data
        
        function get_administrator_list() {
            $sql = "SELECT a.id_user, a.admin_name, a.jenis_kelamin, a.id_relawan, a.jabatan, a.no_telp, a.photo, b.*, d.id_auth, d.auth_name, d.deskripsi,  m.nama FROM administrator_m a INNER JOIN sys_user_m b ON a.id_user = b.id_user INNER JOIN sys_user_authority_t c ON b.id_user = c.id_user INNER JOIN sys_authority_m d ON c.id_auth = d.id_auth LEFT JOIN relawan_m m ON a.id_relawan = m.id_relawan WHERE a.id_user <> '1'";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_authority_by_group($id_group) {
            $this->db->where(array('id_group' => $id_group));
            $this->db->where('id_auth !=', 1);
            $this->db->order_by('auth_name', 'ASC');
            $query = $this->db->get('sys_authority_m');
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_list_propinsi() {
            $this->db->order_by('id_propinsi', 'ASC');
            $query = $this->db->get('spt_propinsi_m');
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function get_administrator_by_id($id_user) {
            $sql = "SELECT a.admin_name, a.jenis_kelamin, a.id_relawan, a.jabatan, a.no_telp, b.*, d.id_auth, d.auth_name, m.nama FROM administrator_m a INNER JOIN sys_user_m b ON a.id_user = b.id_user INNER JOIN sys_user_authority_t c ON b.id_user = c.id_user INNER JOIN sys_authority_m d ON c.id_auth = d.id_auth LEFT JOIN relawan_m m ON a.id_relawan = m.id_relawan  WHERE b.id_user = ?";
            $query = $this->db->query($sql, array($id_user));
            
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        
        function cek_username($user_name) {
            $sql = "SELECT * FROM sys_user_m WHERE user_name = ? ";
            $query = $this->db->query($sql, array($user_name));
            
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

         function cek_username_edit($user_name, $id_user) {
            $sql = "SELECT * FROM sys_user_m WHERE user_name = ? AND id_user <> ?";
            $query = $this->db->query($sql, array($user_name), array($id_user));
            
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                $query->free_result();
                return $result;
            } else {
                return false;
            }

        }

        // processing
        
        function process_add_administrator( $params_user,$params_admin,$params_akses) {
            $this->db->trans_begin();
            // insert into sys_user_m
            $id_user = $this->db->query("select (max(id_user)+1) 'id_user' from sys_user_m")->row()->id_user;
            $sql = "INSERT INTO sys_user_m (id_user, user_name, user_pass, user_key, user_status, user_mail, mdb , mdd)
                VALUES ($id_user, ?, ?, ?, ?, ?, ?, NOW())";
            $this->db->query($sql, $params_user);
            $id_user = $this->db->insert_id();
            // insert into administrator
            $sql = "INSERT INTO administrator_m (id_user, admin_name,  id_relawan, jenis_kelamin, jabatan, no_telp, mdb, mdd)
                VALUES ($id_user,?, ?, ?, ?, ?,  ?, NOW())";
            array_push($params_admin);
            $this->db->query($sql, $params_admin);
            // // // insert hak akses
            $sql = "INSERT INTO sys_user_authority_t (id_auth, id_user) VALUES (?, $id_user)";
            array_push($params_akses, $id_user);
            $this->db->query($sql, $params_akses);
            // insert propinsi
            // if($params_akses['id_auth'] == 6) {
            //     $sql = "UPDATE administrator_m SET no_regmus = ? WHERE id_user = ? ";
            //     $arrr = array( '999999', $id_user);
            //     $this->db->query($sql, $arrr);
            // }
            // transaction
            
            if ($this->db->trans_status() === false) {
                $this->db->trans_rollback();
                return array(false, 0);
            } else {
                $this->db->trans_commit();
                return array(true, $id_user);
            }

        }

        
        function process_edit_administrator($params_user, $params_admin, $params_akses) {
            $this->db->trans_begin();
            // insert into sys_user_m
            $sql = "UPDATE sys_user_m SET user_name = ?, user_pass = ?, user_key = ?, user_status = ?,
                user_mail = ?, mdb = ?, mdd = NOW()
                WHERE id_user = ?";
            $this->db->query($sql, $params_user);
            // insert into administrator
            $sql = "UPDATE administrator_m SET admin_name = ?,id_relawan =?, jenis_kelamin = ?, jabatan = ?, no_telp = ?, mdb = ?, mdd = NOW()   WHERE id_user = ?";
            $this->db->query($sql, $params_admin);
            // // delete hak akses
            // $sql = "DELETE FROM sys_user_authority_t WHERE id_user = ?";
            // $this->db->query($sql, array($params_akses['id_user']));
            // insert hak akses
            $sql = "UPDATE sys_user_authority_t SET id_auth = ? WHERE id_user = ?";
            $this->db->query($sql, $params_akses);
            // if($params_akses['id_auth'] == 5) {
            //     // insert propinsi
            //     //$sql = "INSERT INTO administrator_museum_t (id_propinsi, id_user) VALUES (?, ?)";
            //     //$this->db->query($sql, $params_propinsi);
            // }
            // transaction
            
            if ($this->db->trans_status() === false) {
                $this->db->trans_rollback();
                return false;
            } else {
                $this->db->trans_commit();
                return true;
            }

        }

        
        function process_hapus_administrator($params) {
            //delete data from administrator_m (tabel admin )
            $sql = "DELETE FROM administrator_m WHERE id_user = ?";
            $this->db->query($sql, $params);
            // delete data sys_user_m
            $sql = "DELETE FROM sys_user_m WHERE id_user = ?";
            return $this->db->query($sql, $params);
        }

    }