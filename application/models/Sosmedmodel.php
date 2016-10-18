<?php 

    

    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Sosmedmodel extends CI_Model {

        

        function  __construct() {

            // Call the Model constructor

            parent::__construct();

        }



        

        function get_list_sosmed() {

            $sql = "SELECT a.*, s.id_logo, s.logo FROM sosmed_m a

         LEFT JOIN logo_sosmed_m s ON a.id_logo = s.id_logo  ORDER BY a.urutan";

            $query = $this->db->query($sql);

            

            if ($query->num_rows() > 0) {

                $result = $query->result_array();

                $query->free_result();

                return $result;

            } else {

                return 0;

            }



        }



        

        function get_list_logo() {

            $sql = "SELECT * FROM logo_sosmed_m";

            $query = $this->db->query($sql);

            

            if ($query->num_rows() > 0) {

                $result = $query->result_array();

                $query->free_result();

                return $result;

            } else {

                return 0;

            }



        }



        

        function get_list_sosmed_public() {

            $sql = "SELECT a.*, s.id_logo, s.logo FROM sosmed_m a

         LEFT JOIN logo_sosmed_m s ON a.id_logo = s.id_logo where status = 'active'  ORDER BY a.urutan";

            $query = $this->db->query($sql);

            

            if ($query->num_rows() > 0) {

                $result = $query->result_array();

                $query->free_result();

                return $result;

            } else {

                return 0;

            }



        }



        

        function get_sosmed_by_id($id) {

            $this->db->where('id_sosmed', $id);

            $query = $this->db->get('sosmed_m');

            

            if ($query->num_rows() > 0) {

                $result = $query->row_array();

                $query->free_result();

                return $result;

            } else {

                return false;

            }



        }



        

        function process_sosmed_add($params) {

            $sql = "INSERT INTO sosmed_m (nama, id_logo ,link , urutan, status, pengikut)

                VALUES (?, ?, ?, ?, ?, ?)";

            return $this->db->query($sql, $params);

        }



        

        function process_sosmed_edit($params) {

            $sql = "UPDATE sosmed_m SET nama = ?, id_logo = ?, link = ?, urutan = ?, status = ?, pengikut = ?

                 WHERE id_sosmed = ? ";

            return $this->db->query($sql, $params);

        }



        

        function process_sosmed_delete($id) {

            $this->db->where('id_sosmed', $id);

            return $this->db->delete('sosmed_m');

        }



    }