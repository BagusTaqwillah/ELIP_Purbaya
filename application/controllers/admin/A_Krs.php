<?php

class A_Krs extends CI_Controller{
    public function index(){
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ruangan'] = $this->db->get_where('tb_ruang')->result_array();
        $data['kelas'] = $this->db->get_where('tb_kelas')->result_array();
        $data['judul'] = 'Admin KRS';
        $this->load->view('temp_adm/header', $data, FALSE);
        $this->load->view('temp_adm/topbar');
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('admin/krs/krs_dashboard', $data, FALSE);
        $this->load->view('temp_adm/footer');
    }
    public function data_krs($kls){
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas']=$kls;
        $data['ruangan'] = $this->db->get_where('tb_ruang')->result_array();
        $data['dataKrs'] = $this->db->get_where('krs',['kelas'=>$kls])->result_array();
        $data['judul'] = 'Admin KRS';
        $this->load->view('temp_adm/header', $data, FALSE);
        $this->load->view('temp_adm/topbar');
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('admin/krs/data_krs', $data, FALSE);
        $this->load->view('temp_adm/footer');
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
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['krs'] = $this->db->get_where('krs',['id_krs'=>$id])->row_array();
        $mhs=$data['krs'];
        $mhsSem=$mhs['semester'];
        $data['matkul']=$this->db->get_where("tb_matkul",['semester'=>$mhsSem])->result_array();
        $data['judul'] = 'Detail KRS';
        $this->load->view('temp_adm/header', $data, FALSE);
        $this->load->view('temp_adm/topbar');
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('admin/krs/detailKrs', $data, FALSE);
        $this->load->view('temp_adm/footer');
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