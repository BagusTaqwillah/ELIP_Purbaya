<?php
class Kelas extends CI_Controller{
    public function semester1(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['kelas']=$this->db->get_where('tb_kelas',['semester'=>"semester_1"])->result_array();
        $data['judul']="Kelas";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/kelas/kelas1',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function semester2(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['kelas']=$this->db->get_where('tb_kelas',['semester'=>"semester_2"])->result_array();
        $data['judul']="Kelas";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/kelas/kelas1',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function semester3(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['kelas']=$this->db->get_where('tb_kelas',['semester'=>"semester_3"])->result_array();
        $data['judul']="Kelas";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/kelas/kelas1',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function semester4(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['kelas']=$this->db->get_where('tb_kelas',['semester'=>"semester_4"])->result_array();
        $data['judul']="Kelas";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/kelas/kelas1',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function semester5(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['kelas']=$this->db->get_where('tb_kelas',['semester'=>"semester_5"])->result_array();
        $data['judul']="Kelas";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/kelas/kelas1',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function semester6(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['kelas']=$this->db->get_where('tb_kelas',['semester'=>"semester_6"])->result_array();
        $data['judul']="Kelas";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/kelas/kelas1',$data);
        $this->load->view('temp_mhs/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
}
?>