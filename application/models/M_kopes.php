<?php
class M_kopes extends CI_Model
{

    function get_no_invoice()
    {
        $taunsaiki = date('Y');
        $taundepan = $taunsaiki + 1;
        $taundepanlagi = $taundepan + 1;
        $kodetaun = $taundepan . $taundepanlagi;

        $q = $this->db->query("SELECT MAX(RIGHT(kopes,4)) AS kd_max FROM data_siswa");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = $kodetaun . "0001";
        }

        return $kodetaun . $kd;
    }

    function simpan_invoice($no_invoice)
    {
        $hasil = $this->db->query("INSERT INTO tbl_invoice (no_invoice) VALUES ('$no_invoice')");
        return $hasil;
    }
}
