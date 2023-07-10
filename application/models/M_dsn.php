<?php
class M_dsn extends CI_Model{
    public function registrasi(){
        $data=[
            'nama_dosen'=>$this->input->post('nama_dosen'),
            'nid'=>$this->input->post('nid'),
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'alamat'=>$this->input->post('alamat'),
            'no_hp'=>$this->input->post('no_hp'),
            'email'=>$this->input->post('email'),
            'matkul'=>$this->input->post('mk'),
            'password'=>password_hash($this->input->post('password1'),PASSWORD_DEFAULT) ,
            "role_id"=>2,
            "status"=>1,
            "img"=>"user.png"
        ];
        $this->db->insert('tb_dosen',$data);
    }
    public function lihat_mk(){
       return $this->db->get_where('tb_matkul')->result_array();
    }
}


?>