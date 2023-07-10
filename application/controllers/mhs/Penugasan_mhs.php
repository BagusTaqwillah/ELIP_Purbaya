<?php
class Penugasan_mhs extends CI_Controller{
    public function kelas1(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['matkul']=$this->db->get_where('tb_matkul',['semester' => 'semester 1' ])->result_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="Kelas ";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/semester1',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function tugas($t){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['tugas']=$this->db->get_where('tb_tugas',['kelas' => $t])->result_array();
        $data['matkul']=$this->db->get_where('tb_matkul',['kelas' => $t])->result_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        var_dump($data['tugas']);
        die;
        $data['judul']="Penugasan Semester 1 ";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/tugas',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function semester1($a){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['matkul']=$this->db->get_where('tb_matkul',['semester' => $a])->result_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="Penugasan Semester 1 ";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/semester1',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function semester2(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['matkul']=$this->db->get_where('tb_matkul',['semester' => 'semester_2' ])->result_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="Penugasan Semester 1 ";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/semester2',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function semester3(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['matkul']=$this->db->get_where('tb_matkul',['semester' => 'semester_3' ])->result_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="Penugasan Semester 1 ";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/semester3',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function semester4(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['matkul']=$this->db->get_where('tb_matkul',['semester' => 'semester_4' ])->result_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="Penugasan Semester 1 ";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/semester4',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function semester5(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['matkul']=$this->db->get_where('tb_matkul',['semester' => 'semester_5' ])->result_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="Penugasan Semester 1 ";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/semester5',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function semester6(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['matkul']=$this->db->get_where('tb_matkul',['semester' => 'semester_6' ])->result_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="Penugasan Semester 1 ";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/semester6',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
}
?>