<?php
class Data extends CI_Controller{
    public function semester1(){
        $data['tugas']=$this->db->get_where('tb_mtugas',['kelas'])->row_array();
        $data['semester1']=$this->db->get_where('tb_kelas',['semester'=>"semester_1"])->result_array();
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['judul']="Data Penugasan Semester 1";
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('data/semester1',$data);
        $this->load->view('temp_dsn/footer',$data);
    }
    public function semester2(){
        $data['semester1']=$this->db->get_where('tb_kelas',['semester'=>"semester_2"])->result_array();
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['judul']="Data Penugasan Semester 1";
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('data/semester2',$data);
        $this->load->view('temp_dsn/footer',$data);
    }
    public function semester3(){
        $data['semester1']=$this->db->get_where('tb_kelas',['semester'=>"semester_3"])->result_array();
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['judul']="Data Penugasan Semester 1";
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('data/semester3',$data);
        $this->load->view('temp_dsn/footer',$data);
    }
    public function semester4(){
        $data['semester1']=$this->db->get_where('tb_kelas',['semester'=>"semester_4"])->result_array();
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['judul']="Data Penugasan Semester 1";
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('data/semester3',$data);
        $this->load->view('temp_dsn/footer',$data);
    }
    public function semester5(){
        $data['semester1']=$this->db->get_where('tb_kelas',['semester'=>"semester_5"])->result_array();
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['judul']="Data Penugasan Semester 1";
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('data/semester3',$data);
        $this->load->view('temp_dsn/footer',$data);
    }
    public function semester6(){
        $data['semester1']=$this->db->get_where('tb_kelas',['semester'=>"semester_6"])->result_array();
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['judul']="Data Penugasan Semester 1";
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('data/semester3',$data);
        $this->load->view('temp_dsn/footer',$data);
    }
    public function table($dp){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['tugas']=$this->db->get_where('tb_mtugas',['kelas'=>$dp])->result_array();
        $data['judul']=$dp;
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('data/table',$data);
        $this->load->view('temp_dsn/footer',$data);
    }
    public function detail_tugas($id){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['tugas']=$this->db->get_where('tb_mtugas',['id_mtugas'=>$id])->row_array();
        $data['judul']="detail tugas";
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('data/detail_tugas',$data);
        $this->load->view('temp_dsn/footer',$data);
    }
}

?>