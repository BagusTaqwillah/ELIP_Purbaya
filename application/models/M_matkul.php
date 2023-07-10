<?php
class M_matkul extends CI_Model{
    public function kategoriMatkul($m){
        $this->db->where('matkul', $m);
        return $this->db->get('data_materi')->result_array();

    }
}

?>