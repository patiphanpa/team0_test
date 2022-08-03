<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_pms extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert($table_name, $array_data) {
        $this->db->insert($table_name, $array_data);
    }

    public function update($name_table, $array_data, $array_where) {
        $this->db->where($array_where);
        $this->db->update($name_table, $array_data);
    }

    public function delete($name_table, $array_where) {
        $this->db->where($array_where);
        $this->db->delete($name_table);
    }

    public function get_data($table_name, $array_where = '') {
        if($array_where) :
            $this->db->where($array_where);
        endif;

        $query = $this->db->get($table_name);
        return $query->result();
    }
    
    public function get_join($table_name, $col_name, $array_where = '', $array_table_join = '') {

        if ($col_name) :
            $this->db->select($col_name);
        endif;
        if ($array_where) :
            $this->db->where($array_where);
        endif;
        if ($array_table_join) :
            foreach ($array_table_join as $key => $value) :
                $this->db->join($key, $value, 'LEFT');
            endforeach;
        endif;

        $query = $this->db->get($table_name);
        return $query;
    }

}
