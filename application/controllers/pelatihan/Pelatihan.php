<?php
class Pelatihan extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['judul'] = "pelatihan";
        $data['admin'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelatihan'] = $this->db->get_where('tb_pelatihan')->result_array();
        $data['menu_pelatihan'] = $this->db->get_where('data_pelatihan')->result_array();
        // query pelatihan
        //     $role_id=$this->session->userdata('role_id');
        //    $queryMenu= " SELECT `nama_pelatihan`,`id_data`
        //     FROM `tb_pelatihan` JOIN `data_pelatihan`
        //     ON `tb_pelatihan`.`id_pelatihan` = `data_pelatihan`.`id_pelatihan`
        //     WHERE `data_pelatihan`.`id_data`
        //     ORDER BY `kategori`,`id_data` ASC
        //    ";
        //    $data['menu_pelatihan'] = $this->db->query($queryMenu)->result_array();
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar', $data);
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('pelatihan/dashboard', $data);
        $this->load->view('temp_mhs/footer', $data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function adm_pelatihan()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['pelatihan'] = $this->db->get_where('tb_pelatihan')->result_array();
        $data['judul'] = "tambah pelatihan";
        $this->load->view('temp_adm/header', $data);
        $this->load->view('temp_adm/topbar', $data);
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('pelatihan/adm_dashboard', $data);
        $this->load->view('temp_adm/footer', $data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function add_pelatihan()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('nama_pelatihan', 'Nama Pelatihan', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "tambah pelatihan";
            $this->load->view('temp_adm/header', $data);
            $this->load->view('temp_adm/topbar', $data);
            $this->load->view('temp_adm/sidebar', $data);
            $this->load->view('pelatihan/adm_dashboard', $data);
            $this->load->view('temp_adm/footer', $data);
            $this->load->view('temp_bootstrap/footer');
        } else {
            $data = [
                'nama_pelatihan' => $this->input->post('nama_pelatihan'),
                'tgl_buat' => $this->input->post('tgl_buat'),
                'img' => 'default.jpg',
            ];
            $this->db->insert('tb_pelatihan', $data);
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Berhasil dibuat ');
            redirect('A_pelatihan');
        }
    }
    public function delete_pelatihan($id)
    {
        $this->db->where('id_pelatihan', $id);
        $this->db->delete('tb_pelatihan');
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'Berhasil di hapus ');
        redirect('A_pelatihan');
    }
    public function data_pelatihan()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();

        $data['judul'] = "pelatihan";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar', $data);
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('pelatihan/pilih_pelatihan', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function add_data_pelatihan()
    {
    }
}
