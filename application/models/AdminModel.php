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

    function generateIDPG()
    {
        $getLastPG = $this->db->select('id_pg')->from('pg')->order_by('id_pg', 'DESC')->get();
        if ($getLastPG->num_rows() < 1) {
            $kode = 'PG001';
            return $kode;
        } else {
            $lastPG = $getLastPG->row_array();
            $lastNumber = intval(substr($lastPG['id_pg'], 2));
            $new_number = $lastNumber + 1;
            $new_id = 'PG' . sprintf('%03d', $new_number);
            return $new_id;
        }
    }


    public function getJawabanPG($id)
    {
        $query = $this->db->query("SELECT * FROM jawabanpg_pelamar t1 JOIN pg t2 ON t1.id_pg=t2.id_pg WHERE t1.id_pelamar='$id' ")->result_array();
        $myArray = [];
        $jumlahBenar = 0;
        $jumlahSalah = 0;
        foreach ($query as $row) {
            $idPG = $row['id_pg'];
            $getSoalPelamar = $this->db->get_where('pg', ['id_pg' => $idPG])->row_array();
            if ($row['kunci_jawaban'] == $row['jawaban_pg']) {
                $status = 'benar';
                $jumlahBenar++;
            } else {
                $status = 'salah';
                $jumlahSalah++;
            }
            $myArray[] = [
                "soal_pg" => $row['soal_pg'],
                "kunci_jawaban" => $row['kunci_jawaban'],
                "jawaban_pelamar" => $row['jawaban_pg'],
                "soal_kuncijawaban" => $getSoalPelamar[strtolower($row['kunci_jawaban'])],
                "soal_pelamar" => $getSoalPelamar[strtolower($row['jawaban_pg'])],
                "status" => $status,
                "jumlah_benar" => $jumlahBenar,
                "jumlah_salah" => $jumlahSalah,
            ];
        }

        return $myArray;
    }
}
