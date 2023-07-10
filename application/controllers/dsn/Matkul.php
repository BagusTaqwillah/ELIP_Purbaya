<?php
class Matkul extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_matkul');
  }
  public function index()
  {
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul', ['semester' => "semester_1"])->result_array();
    $data['judul'] = "Mata Kuliah";
    $this->load->view('temp_dsn/header', $data);
    $this->load->view('temp_dsn/topbar');
    $this->load->view('temp_dsn/sidebar', $data);
    $this->load->view('dosen/matkul_1', $data);
    $this->load->view('temp_dsn/footer', $data);
  }
  public function materi($mk)
  {
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $this->form_validation->set_rules('judul', 'Judul', 'required');

    if ($this->form_validation->run() == false) {
      $data['nameMatkul'] = $this->M_matkul->kategoriMatkul($mk);
      $data['materiMatkul'] = $this->db->get_where('data_materi', ['matkul' => $mk])->result_array();
      $data['data_matkul'] = $this->db->get_where('tb_kelas')->result_array();
      $data['judul'] = "Materi Mata Kuliah";
      $data['matkul'] = $mk;
      $this->load->view('temp_dsn/header', $data);
      $this->load->view('temp_dsn/topbar');
      $this->load->view('temp_dsn/sidebar', $data);
      $this->load->view('dosen/materi_kuliah', $data);
      $this->load->view('temp_dsn/footer', $data);
    } else {
      $data = [
        'judul' => $this->input->post('judul'),
        'matkul' => $this->input->post('matkul'),
        'semester' => $this->input->post('semester'),
        'kelas' => $this->input->post('kelas'),
        'isi_materi' => $this->input->post('isi_materi'),
      ];
      $this->db->insert('data_materi', $data);
      $this->session->set_flashdata('swal_icon', 'success');
      $this->session->set_flashdata('swal_title', 'Materi Di upload ');
      redirect("mk/$mk");
    }
  }
  public function hapus_materi($id)
  {

    $this->db->where('id_materi', $id);
    $this->db->delete('data_materi');
    $this->session->set_flashdata('swal_icon', 'success');
    $this->session->set_flashdata('swal_title', 'Materi Di Hapus ');
    redirect("matkul_1");
  }
  public function edit_materi($id)
  {
    $data['kelas']=$this->db->get_where('tb_kelas')->result_array();
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $this->form_validation->set_rules('judul', 'Judul', 'required');
    if ($this->form_validation->run() == false) {
      $data['matkul'] = $this->db->get_where('data_materi', ['id_materi' => $id])->row_array();
      $data['data_matkul'] = $this->db->get_where('tb_matkul')->result_array();
      $data['judul'] = "Mata Kuliah";
      $this->load->view('temp_dsn/header', $data);
      $this->load->view('temp_dsn/topbar');
      $this->load->view('temp_dsn/sidebar');
      $this->load->view('dosen/edit_materi', $data);
      $this->load->view('temp_dsn/footer', $data);
    } else {
      $data = [
        'judul' => $this->input->post('judul'),
        'matkul' => $this->input->post('matkul'),
        'semester' => $this->input->post('semester'),
        'kelas' => $this->input->post('kelas'),
        'isi_materi' => $this->input->post('isi_materi'),
      ];
      $this->db->where('id_materi', $id);
      $this->db->update('data_materi', $data);
      $this->session->set_flashdata('swal_icon', 'success');
      $this->session->set_flashdata('swal_title', 'Materi Di update ');
      redirect("matkul_1");
    }
  }
  public function semester2()
  {
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul', ['semester' => "semester_2"])->result_array();
    $data['judul'] = "Mata Kuliah";
    $this->load->view('temp_dsn/header', $data);
    $this->load->view('temp_dsn/topbar');
    $this->load->view('temp_dsn/sidebar');
    $this->load->view('dosen/matkul_1', $data);
    $this->load->view('temp_dsn/footer', $data);
  }
  public function semester3()
  {
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul', ['semester' => "semester_3"])->result_array();
    $data['judul'] = "Mata Kuliah";
    $this->load->view('temp_dsn/header', $data);
    $this->load->view('temp_dsn/topbar');
    $this->load->view('temp_dsn/sidebar', $data);
    $this->load->view('dosen/matkul_1', $data);
    $this->load->view('temp_dsn/footer', $data);
  }

  public function semester4()
  {
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul', ['semester' => "semester_4"])->result_array();
    $data['judul'] = "Mata Kuliah";
    $this->load->view('temp_dsn/header', $data);
    $this->load->view('temp_dsn/topbar');
    $this->load->view('temp_dsn/sidebar', $data);
    $this->load->view('dosen/matkul_1', $data);
    $this->load->view('temp_dsn/footer', $data);
  }

  public function semester5()
  {
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul', ['semester' => "semester_5"])->result_array();
    $data['judul'] = "Mata Kuliah";
    $this->load->view('temp_dsn/header', $data);
    $this->load->view('temp_dsn/topbar', $data);
    $this->load->view('temp_dsn/sidebar');
    $this->load->view('dosen/matkul_1', $data);
    $this->load->view('temp_dsn/footer', $data);
  }
  public function semester6()
  {
    $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
    $data['matkul'] = $this->db->get_where('tb_matkul', ['semester' => "semester_6"])->result_array();
    $data['judul'] = "Mata Kuliah";
    $this->load->view('temp_dsn/header', $data);
    $this->load->view('temp_dsn/topbar', $data);
    $this->load->view('temp_dsn/sidebar', $data);
    $this->load->view('dosen/matkul_1', $data);
    $this->load->view('temp_dsn/footer', $data);
  }
}
