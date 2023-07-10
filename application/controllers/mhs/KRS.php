<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/tcpdf/tcpdf.php';
class KRS extends CI_Controller{
    public function index(){
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['matkul'] = $this->db->get_where('tb_matkul')->result_array();
        $data['kelas'] = $this->db->get_where('tb_kelas')->result_array();
        $data['semester'] = $this->db->get_where('tb_semester')->result_array();
        $data['dataKrs'] = $this->db->get_where('krs',['email'=> $this->session->userdata('email')])->result_array();
        $data['judul'] = "Halaman KRS";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('mahasiswa/krs/dashboard', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function sendKrs(){
        $email = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $nama=$this->input->post('nama');
        $kelas=$this->input->post('kelas');
        $semester=$this->input->post('semester');
        $jurusan=$this->input->post('jurusan');
        $matKrs=$this->input->post('krs');
        $data=[
            'nama'=>$nama,
            'nim'=>$email['identitas'],
            'kelas'=>$kelas,
            'semester'=>$semester,
            'jurusan'=>$jurusan,
            'status'=>$matKrs,
            'email'=>$email['email'],
        ];
        $this->db->insert("krs",$data);
        $this->session->set_flashdata("swal_icon",'success');
        $this->session->set_flashdata("swal_title",'KRS Telah Terkirim');
        
        redirect('krs','refresh');
        
    }
    public function cetak_krs($krs){
        $email = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['krs']=$this->db->get_where("krs",['semester'=>$krs])->row_array();
        $data['matkul']=$this->db->get_where("tb_matkul",['semester'=>$krs])->result_array();
        // $this->load->library('tcpdf');

        // Set document information
        
        // $this->tcpdf->SetCreator(PDF_CREATOR);
        // $this->tcpdf->SetAuthor('Your Name');
        // $this->tcpdf->SetTitle('Example PDF');
        // $this->tcpdf->SetSubject('Generating PDF from HTML using TCPDF with CodeIgniter');
        // $this->tcpdf->SetKeywords('TCPDF, PDF, CodeIgniter');

        // $this->tcpdf->SetFont('helvetica', '', 12);

        
        $this->load->view("mahasiswa/krs/output",$data);
        // $html=$this->load->view("mahasiswa/krs/output",$data,true);

        

        // $this->tcpdf->AddPage();

        //   // Load the PdfGenerator library

        //   // Generate the PDF
        //   $this->tcpdf->writeHTML($html, true, false, true, false, '');


        // Output the PDF as a file (optional)
        // $this->tcpdf->Output("krs_".$krs.".pdf", 'D');


    }
    public function ttdMhs(){
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $user=$data['user'];
        $email=$user['email'];
        $ttd = $_POST['signatureData'];
        $this->db->set('ttd_mhs',$ttd);
        $this->db->where('email',$email);
        $this->db->update('krs');
        
        redirect('krs','refresh');
        
    }
}  

?>