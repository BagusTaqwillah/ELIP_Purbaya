<?php
class Kelas extends CI_Controller{
    public function index(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['user']=$this->db->get_where('tb_mahasiswa',[$this->session->userdata('nim')])->row_array();
        $data['judul']="Dashboard Mahasiswa";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('kelas/dashboard',$data);
        $this->load->view('temp_mhs/footer');
    }
}


?>