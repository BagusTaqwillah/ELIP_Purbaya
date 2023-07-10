<?php
class M_user extends CI_Model
{
    public function registrasi()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'identitas' => $this->input->post('identitas'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'no_hp ' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'img' => 'user.png',
            'role_id' => 1,
            'status' => 0
        ];
        $this->db->insert('tb_user', $data);
        $mhs=[
            'nama_mahasiswa'=>$this->input->post('nama'),
            'nim'=>$this->input->post('identitas'),
            'email'=>$this->input->post('email'),
            'kelas'=>$this->input->post('kelas'),
            'semester'=>$this->input->post('semester')
        ];
        $this->db->insert('tb_mahasiswa', $mhs);
    }
    public function getSystem(){
        return $this->db->get_where('developer')->row_array();
    }
}
