<?php 

    

    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Bantasmodel extends CI_Model {

        

        function  __construct() {

            // Call the Model constructor

            parent::__construct();

        }



        

        function get_bantas_info() {

            $this->db->limit(1);

            $query = $this->db->get('bantas_m');

            

            if ($query->num_rows() > 0) {

                $result = $query->row_array();

                $query->free_result();

                return $result;

            } else {

                return false;

            }



        }



        

        function get_data_bantas() {

            $sql = "SELECT * FROM bantas_m";

            $query = $this->db->query($sql);

            

            if ($query->num_rows() > 0) {

                $result = $query->result_array();

                $query->free_result();

                return $result;

            } else {

                return 0;

            }



        }



        // function process_bantas_edit($params) {

        //     $sql = "UPDATE bantas_m SET nama = ?

        //  WHERE id_bantas = '1' ";

        //     return $this->db->query($sql, $params);

        // }

    }