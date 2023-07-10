<?php
class Matkul extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tugas');
    }
    public function index(){
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $isLogin=$data['user'];
        $email=$isLogin['email'];
        $data['mhs']=$this->db->get_where('tb_mahasiswa',['email' => $email])->row_array();
        $data['matkul']=$this->db->get_where('tb_matkul')->result_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['judul'] = "Data Penugasan";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('mhs_matkul/page_matkul', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function list_matkul($m)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $isLogin=$data['user'];
        $email=$isLogin['email'];
        $data['mhs']=$this->db->get_where('tb_mahasiswa',['email' => $email])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['materi_mk'] = $this->db->get_where('data_materi', ['matkul' => $m])->result_array();
        $data['judul'] = $m;
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('mhs_matkul/materi_mk', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function detail_materi($id)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['materi_mk'] = $this->db->get_where('data_materi', ['id_materi' => $id])->row_array();
        $data['judul'] = "detail matkul";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('mahasiswa/detail_matkul', $data);
        $this->load->view('temp_mhs/footer', $data);
    }

}

?>