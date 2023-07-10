<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meeting extends CI_Controller {
    public function meet($idMeet){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['user']=$this->db->get_where('tb_user',["email"=>$this->session->userdata('email')])->row_array();
        $data['judul']="Surat Edaran";
        $data['idMeet']=$this->db->get_where('meet',['link_url'=>$idMeet])->row_array();
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('meet/masuk',$data); 
        $this->load->view('temp_mhs/footer',$data);  
    }
    public function index() {
        $data['user']=$this->db->get_where('tb_user',["email"=>$this->session->userdata('email')])->row_array();
        $isLogin=$data['user'];
        $email=$isLogin['email'];
        $data['mhs']=$this->db->get_where('tb_mahasiswa',['email' => $email])->row_array();
        $data['meet']=$this->db->get_where('meet')->result_array();
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['judul']="Surat Edaran";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('meet/dashboard',$data);
        $this->load->view('temp_mhs/footer',$data);
    }

    // Menghasilkan ID unik untuk ruang pertemuan
    private function generateMeetingID() {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $charactersLength = strlen($characters);
        $numbersLength = strlen($numbers);
        $randomString = 'E-LIP'.'';

        for ($i = 0; $i < 5; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        
        for ($i = 0; $i < 5; $i++) {
            $randomString .= $numbers[rand(0, $numbersLength - 1)];
        }
    
        return $randomString;
    }

    // Mendapatkan URL ruang pertemuan Jitsi Meet
    private function getMeetingURL($meetingID) {
        $jitsiServer = "https://meet.jit.si"; // Ganti dengan server Jitsi Meet Anda
        return "{$jitsiServer}/{$meetingID}";
    }

    // Mengecek apakah ID pertemuan valid
    private function isValidMeetingID($meetingID) {
        // Tambahkan validasi sesuai kebutuhan Anda
        return true;
    }
     public function buatRoom() {
        $user=$this->db->get_where('tb_user',["email"=>$this->session->userdata('email')])->row_array();
        // Mendapatkan ID ruang pertemuan yang unik
        $meetingID = $this->generateMeetingID();
        $data=[
            'link_url'=>$meetingID,
            'nama_dosen'=>$user['nama'],
            'nama_mk'=>$this->input->post('nama_mk'),
            'kelas'=>$this->input->post('kelas')
        ];
        $this->db->insert('meet',$data);

        // Mengecek apakah ID pertemuan valid
        if (!$this->isValidMeetingID($meetingID)) {
            die("Gagal membuat ruang pertemuan");
        }
        $this->session->set_flashdata('swal_icon','success');
       $this->session->set_flashdata('swal_title','Room Meet Berhasi Dibuat');
       redirect('Dosen/meet');
    }
}
