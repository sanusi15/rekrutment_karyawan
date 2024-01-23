<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');

class AuthModel extends CI_Model
{
    function get_data_hasil()
    {
        $this->db->select('*');
        $this->db->from('hasil');
        $this->db->join('karyawan', 'karyawan.id_karyawan = hasil.id_karyawan');
        $query = $this->db->get();
        return $query->result_array();
    }
}