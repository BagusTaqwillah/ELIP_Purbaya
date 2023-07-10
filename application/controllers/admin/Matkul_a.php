<?php
class Matkul_a extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $user=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
      if ($user==NULL) {
        redirect('login','refresh');
        
      }
      if ($user['role_id']!=3) {
        # code...
        redirect('login','refresh');
    }
  }
  public function index()
  {
    $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul')->result_array();
    $this->form_validation->set_rules('nama_mk', 'Nama Matkul', 'required', [
      'required' => "nama mk tidak boleh kosong"
    ]);

    if ($this->form_validation->run() == false) {
      # code...
      $data['judul'] = "Mata Kuliah";
      $this->load->view('temp_adm/header', $data);
      $this->load->view('temp_adm/topbar');
      $this->load->view('temp_adm/sidebar');
      $this->load->view('admin/matkul', $data);
      $this->load->view('temp_adm/footer');
    } else {
      $data = [
        'nama_mk' => $this->input->post('nama_mk'),
        'semester' => $this->input->post('semester'),
        'sks' => $this->input->post('sks'),
      ];
      $this->db->insert('tb_matkul', $data);
      $this->session->set_flashdata('swal_icon', 'success');
      $this->session->set_flashdata('swal_title', 'Matkul Telah di Tambah');
      redirect('A_matkul', "refresh");
    }
  }
  public function delete_mk($id){
    $this->db->where('id_mk',$id);
    $this->db->delete('tb_matkul');
    $this->session->set_flashdata('swal_icon', 'error');
    $this->session->set_flashdata('swal_title', 'Matkul Telah di Hapus');
    redirect('A_matkul', "refresh");
  }
  public function edit_mk($id){
    $this->form_validation->set_rules('nama_mk', 'Nama Matkul', 'required', [
      'required' => "nama mk tidak boleh kosong"
    ]);
    if ($this->form_validation->run()==FALSE) {
      # code...
      $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
      $data['matkul'] = $this->db->get_where('tb_matkul',['id_mk'=>$id])->row_array();
      $data['semester'] = $this->db->get_where('tb_semester')->result_array();
      $data['judul'] = "Mata Kuliah";
      $this->load->view('temp_adm/header', $data);
      $this->load->view('temp_adm/topbar');
      $this->load->view('temp_adm/sidebar');
      $this->load->view('admin/edit_matkul', $data);
      $this->load->view('temp_adm/footer');
    }else{
      $nama_mk=$this->input->post('nama_mk');
      $semester=$this->input->post('semester');
      $sks=$this->input->post('sks');
      $data=[
        'nama_mk'=>$nama_mk,
        'semester'=>$semester,
        'sks'=>$sks
      ];
      $this->db->where('id_mk',$id);
      $this->db->update('tb_matkul',$data);
      $this->session->set_flashdata('swal_icon','success');
      $this->session->set_flashdata('swal_title','Matakuliah Berhasil Diupdate');
      redirect('A_matkul', "refresh");
    }
  }
  public function semester_1(){
    $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul',['semester'=>'semester_1'])->result_array();
    $data['judul'] = "Mata Kuliah Semester 1";
    $this->load->view('temp_adm/header', $data);
    $this->load->view('temp_adm/topbar');
    $this->load->view('temp_adm/sidebar');
    $this->load->view('data/matkul/semester', $data);
    $this->load->view('temp_adm/footer');
  }
  public function semester_2(){
    $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul',['semester'=>'semester_2'])->result_array();
    $data['judul'] = "Mata Kuliah Semester 2";
    $this->load->view('temp_adm/header', $data);
    $this->load->view('temp_adm/topbar');
    $this->load->view('temp_adm/sidebar');
    $this->load->view('data/matkul/semester', $data);
    $this->load->view('temp_adm/footer');
  }
  public function semester_3(){
    $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul',['semester'=>'semester_3'])->result_array();
    $data['judul'] = "Mata Kuliah Semester 3";
    $this->load->view('temp_adm/header', $data);
    $this->load->view('temp_adm/topbar');
    $this->load->view('temp_adm/sidebar');
    $this->load->view('data/matkul/semester', $data);
    $this->load->view('temp_adm/footer');
  }
  public function semester_4(){
    $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul',['semester'=>'semester_4'])->result_array();
    $data['judul'] = "Mata Kuliah Semester 4";
    $this->load->view('temp_adm/header', $data);
    $this->load->view('temp_adm/topbar');
    $this->load->view('temp_adm/sidebar');
    $this->load->view('data/matkul/semester', $data);
    $this->load->view('temp_adm/footer');
  }
  public function semester_5(){
    $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul',['semester'=>'semester_5'])->result_array();
    $data['judul'] = "Mata Kuliah Semester 5";
    $this->load->view('temp_adm/header', $data);
    $this->load->view('temp_adm/topbar');
    $this->load->view('temp_adm/sidebar');
    $this->load->view('data/matkul/semester', $data);
    $this->load->view('temp_adm/footer');
  }
  public function semester_6(){
    $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul',['semester'=>'semester_6'])->result_array();
    $data['judul'] = "Mata Kuliah Semester 6";
    $this->load->view('temp_adm/header', $data);
    $this->load->view('temp_adm/topbar');
    $this->load->view('temp_adm/sidebar');
    $this->load->view('data/matkul/semester', $data);
    $this->load->view('temp_adm/footer');
  }
  
  
}
