<?php
class Tugas extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tugas');
    }
    public function index(){
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $isLogin=$data['user'];
        $email=$isLogin['email'];
        $data['mhs']=$this->db->get_where('tb_mahasiswa',['email' => $email])->row_array();
        $data['matkul']=$this->db->get_where('tb_matkul')->result_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['judul'] = "Data Penugasan";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('mhs_tugas/page_tugas', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function list_tugas($list){
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $isLogin=$data['user'];
        $email=$isLogin['email'];
        $data['mhs']=$this->db->get_where('tb_mahasiswa',['email' => $email])->row_array();
        $data['mk_tugas']=$list;
        $data['tugas']=$this->db->get_where("tb_tugas",['nama_mk'=>$data['mk_tugas']])->result_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['judul'] = "Data Penugasan";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('mhs_tugas/list_tugas', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function isi_tugas($id)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $isLogin=$data['user'];
        $email=$isLogin['email'];
        $data['mhs']=$this->db->get_where('tb_mahasiswa',['email' => $email])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('nama_mhs', 'Nama_mhs', 'required', [
            'required' => "nama harus di isi"
        ]);

        if ($this->form_validation->run() == false) { 
            $nama=$isLogin['nama'];
            $data['kelas'] = $this->db->get_where('tb_kelas')->result_array();
            $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $data['judul'] = "detail tugas";
            $data['isi_tugas'] = $this->M_tugas->infodetailalgo($id);
            $data['approve'] = $this->M_tugas->ketTugas($nama);
            $this->load->view('temp_mhs/header', $data);
            $this->load->view('temp_mhs/sidebar', $data);
            $this->load->view('temp_mhs/topbar', $data);
            $this->load->view('mhs_tugas/isi_tugas', $data);
            $this->load->view('temp_mhs/footer', $data);
            $this->load->view('temp_bootstrap/footer');
        } else {
            $nama = $this->input->post('nama_mhs');
            $kelas = $this->input->post('kelas');
            $semester = $this->input->post('semester');
            $mk = $this->input->post('nama_mk');
            $file_tugas = $_FILES['file'];
            if ($file_tugas = "") {
                var_dump($file_tugas);
                die();
                echo "data tidak ada";
            } else {
                $config['upload_path'] = './assets/tugas';
                $config['allowed_types'] = 'jpeg|jpg|png|gif|pdf|docx';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file')) {
                    echo "upload gagal";
                    die();
                } else {
                    $file_tugas = $this->upload->data('file_name');
                }
                $data = [
                    'nama_mhs' => $nama,
                    'kelas' => $kelas,
                    'semester' => $semester,
                    'mk' => $mk,
                    'file' => $file_tugas,
                    'status'=>1
                ];
                $this->db->insert('tb_mtugas', $data);
            }
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Jawaban Terkirim');
            redirect('mhs_new/Tugas');
        }
    }
}

?>