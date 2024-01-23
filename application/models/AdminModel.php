<?php if (!defined('BASEPATH')) exit('No direct script acess allowed');

class AdminModel extends CI_Model
{

    function get_jumlah_pendaftar()
    {
        return $this->db->get('hasil')->num_rows();
    }

    function get_jumlah_lulus()
    {
        return $this->db->get_where('hasil', ['keterangan' => 'Lulus'])->num_rows();
    }

    function get_jumlah_gagal()
    {
        return $this->db->get_where('hasil', ['keterangan' => 'Gagal'])->num_rows();
    }

    function get_jumlah_pelamar($tglMulai, $tglSelesai)
    {
        $this->db->select('*');
        $this->db->from('pelamar t1');
        $this->db->join('loker t2', 't1.id_loker=t2.id_loker');
        $this->db->where('t1.tgl_lamar >=', $tglMulai);
        $this->db->where('t1.tgl_lamar <=', $tglSelesai);
        $query = $this->db->get();
        return $query;
    }
}
