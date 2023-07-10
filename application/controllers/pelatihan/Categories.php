<?php
class Categories extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pelatihan');
    }
    public function index($c)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['audien'] = $this->db->get_where('p_pelatihan')->result_array();
        $data['pelatihan'] = $c;
        $data['namePelatihan'] = $this->M_pelatihan->CategoryByPelatihan($c);
        $data['judul'] = "Detail Pelatihan";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('pelatihan/categories', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function data_pelatihan($id)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['materi_pelatihan'] = $this->db->get_where('data_pelatihan', ['id_data' => $id])->row_array();
        $data['judul'] = "Materi Pelatihan";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('pelatihan/materi_pelatihan', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function dosen_pelatihan($c)
    {
        $data['audien'] = $this->db->get_where('p_pelatihan')->result_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->db->get_where('tb_pelatihan', ['nama_pelatihan'])->result_array();
        $data['list_pelatihan'] = $this->db->get_where('data_pelatihan', ['kategori' => $c])->result_array();
        $data['pelatihan'] = $c;
        $data['namePelatihan'] = $this->M_pelatihan->CategoryByPelatihan($c);
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Detail Pelatihan";
            $this->load->view('temp_dsn/header', $data);
            $this->load->view('temp_dsn/topbar');
            $this->load->view('temp_dsn/sidebar', $data);
            $this->load->view('pelatihan/dosen_categories', $data);
            $this->load->view('temp_dsn/footer', $data);
        } else {
            $data = [
                'kategori' => $c,
                'judul' => $this->input->post('judul'),
                'materi' => $this->input->post('isi'),
                'status' => 0,
            ];
            $this->db->insert('data_pelatihan', $data);
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Draft Berhasil Di simpan ');
            redirect('pelatihan_dsn');
        }
    }
}
