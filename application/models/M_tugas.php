<?php

class M_tugas extends CI_Model{
    public function infodetailalgo($id){
        return $this->db->get_where('tb_tugas',['id_tugas'=>$id])->row_array();
    }
    public function ketTugas($nama){
        return $this->db->get_where('tb_mtugas',['nama_mhs'=>$nama])->row_array();
    }
    public function kirimAlgo1(){
        $data=[
            'nama_mhs'=>$this->input->post('nama_mhs'),
        ];
    }
    public function edit_penugasan($id){
        $data=[
            'nama_mk'=>$this->input->post('nama_mk'),
            'kelas'=>$this->input->post('kelas'),
            'judul'=>$this->input->post('judul'),
            'semester'=>$this->input->post('semester'),
            'tenggat'=>$this->input->post('tenggat'),
            'deskripsi'=>$this->input->post('deskripsi'),
            'lampiran'=>$this->input->post('lampiran')
        ];
        $this->db->where('id_tugas',$id);
        $this->db->update('tb_tugas',$data) ;
    }
}


?>