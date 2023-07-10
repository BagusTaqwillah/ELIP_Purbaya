<?php
class Setting extends CI_Controller{
    public function index(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['kontrol']=$this->db->get_where('tb_control')->result_array();
        $data['judul']="Manage Setting";
        $this->load->view('temp_adm/header',$data);
        $this->load->view('temp_adm/topbar');
        $this->load->view('temp_adm/sidebar');
        $this->load->view('admin/setting',$data);
        $this->load->view('temp_adm/footer');  
    }

    // seeting
    public function warna_dosen(){
        $control=$this->db->get_where('tb_control')->row_array();
        $data= $this->input->post('warna_dosen');
        $this->db->set('warna_dosen', $data);
            $this->db->where('id_control',1);
            $this->db->update('tb_control');
            $this->session->set_flashdata('swal_icon','success');
            $this->session->set_flashdata('swal_title','warna di ubah');
            redirect('admin');
    }
    public function warna_mahasiswa(){
        $control=$this->db->get_where('tb_control')->row_array();
        $data= $this->input->post('warna_mahasiswa');
        $this->db->set('warna_mahasiswa', $data);
            $this->db->where('id_control',1);
            $this->db->update('tb_control');
            $this->session->set_flashdata('swal_icon','success');
            $this->session->set_flashdata('swal_title','warna di ubah');
            redirect('admin');
    }
}
?>