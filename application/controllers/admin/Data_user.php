<?php
class Data_user extends CI_Controller
{
    public function data_mhs()
    {
        $data['mahasiswa'] = $this->db->get_where('tb_user', ['role_id' => 1])->result_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Data Mahasiswa";
        $this->load->view('temp_adm/header', $data);
        $this->load->view('temp_adm/topbar', $data);
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('admin/data_mhs', $data);
        $this->load->view('temp_adm/footer');
    }
    public function data_dsn()
    {
        $data['dosen'] = $this->db->get_where('tb_user', ['role_id' => 2])->result_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Data Dosen";
        $this->load->view('temp_adm/header', $data);
        $this->load->view('temp_adm/topbar', $data);
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('admin/data_dsn', $data);
        $this->load->view('temp_adm/footer');
    }
    public function data_adm()
    {
        $data['admin'] = $this->db->get_where('tb_user', ['role_id' => 3])->result_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "My Profil";
        $this->load->view('temp_adm/header', $data);
        $this->load->view('temp_adm/topbar', $data);
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('admin/data_adm', $data);
        $this->load->view('temp_adm/footer');
    }
}
