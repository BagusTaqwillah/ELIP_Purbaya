<?php

class Dsn_Krs extends CI_Controller{
    public function index(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ruangan'] = $this->db->get_where('tb_ruang')->result_array();
        $data['kelas'] = $this->db->get_where('tb_kelas')->result_array();
        $data['judul'] = 'Admin KRS';
        $this->load->view('temp_dsn/header', $data, FALSE);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar', $data);
        $this->load->view('dosen/krs/krs_dashboard', $data, FALSE);
        $this->load->view('temp_dsn/footer');
    }
    public function data_krs($kls){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas']=$kls;
        $data['ruangan'] = $this->db->get_where('tb_ruang')->result_array();
        $data['dataKrs'] = $this->db->get_where('krs',['kelas'=>$kls])->result_array();
        $data['judul'] = 'Admin KRS';
        $this->load->view('temp_dsn/header', $data, FALSE);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar', $data);
        $this->load->view('dosen/krs/data_krs', $data, FALSE);
        $this->load->view('temp_dsn/footer');
    }
    public function ttdDpa(){
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $user=$data['user'];
        $email=$user['email'];
        $ttd = $_POST['signatureData'];
        $this->db->set('ttd_dpa',$ttd);
        $this->db->where('kelas','TI-1-A');
        $this->db->update('krs');
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'KRS Telah Di TTD');
        redirect('dosen_krs','refresh');
        
    }
    public function approveKrs($id){
        $this->db->set('action',1);
        $this->db->where('id_krs',$id);
        $this->db->update('krs');
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'KRS Aproved');
        redirect("A_krs");
    }
    public function detailKrs($id){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['krs'] = $this->db->get_where('krs',['id_krs'=>$id])->row_array();
        $mhs=$data['krs'];
        $mhsSem=$mhs['semester'];
        $data['matkul']=$this->db->get_where("tb_matkul",['semester'=>$mhsSem])->result_array();
        $data['judul'] = 'Detail KRS';
        $this->load->view('temp_dsn/header', $data, FALSE);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar', $data);
        $this->load->view('dosen/krs/detailKrs', $data, FALSE);
        $this->load->view('temp_dsn/footer');
    }
    public function hapusKrs($id){
        $this->db->delete('tb_krs',['id_krs'=>$id]);
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'Data KRS dihapus');
        redirect("A_krs");
    }
    public function exportXls($kelas){
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas']=$kelas;
        $data['krs'] = $this->db->get_where('krs',['kelas'=>$kelas])->result_array();
        $this->load->view('admin/krs/exportKrsXls', $data, FALSE);
    }
    
}



?>