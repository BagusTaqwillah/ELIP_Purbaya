<?php
class Belajar extends Ci_Controller
{
    public function pemograman()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Tutorial";
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar');
        $this->load->view('belajar/belajar', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function html()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['html'] = $this->db->get_where('tb_tutorial', ['tutorial' => "HTML"])->result_array();
        $data['judul'] = "Tutorial HTML";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('belajar/html', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function detail($id)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['html'] = $this->db->get_where('tb_tutorial', ['tutorial' => "HTML"])->result_array();
        $data['isi'] = $this->db->get_where('tb_tutorial', ['id_tutorial' => $id])->row_array();
        $data['judul'] = "Tutorial HTML";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('belajar/detail', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function js()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['javascript'] = $this->db->get_where('tb_tutorial', ['tutorial' => "JAVASCRIPT"])->result_array();
        $data['judul'] = "Tutorial Javascript";
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar');
        $this->load->view('belajar/js', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function php()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['php'] = $this->db->get_where('tb_tutorial', ['tutorial' => "PHP"])->result_array();
        $data['judul'] = "Tutorial Javascript";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar');
        $this->load->view('belajar/php', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function java()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['java'] = $this->db->get_where('tb_tutorial', ['tutorial' => "JAVA"])->result_array();
        $data['judul'] = "Tutorial Java";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar');
        $this->load->view('belajar/java', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function python()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['java'] = $this->db->get_where('tb_tutorial', ['tutorial' => "PYTHON"])->result_array();
        $data['judul'] = "Tutorial Java";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('belajar/python', $data);
        $this->load->view('temp_mhs/footer', $data);
    }
    public function css()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['java'] = $this->db->get_where('tb_tutorial', ['tutorial' => "CSS"])->result_array();
        $data['judul'] = "Tutorial Java";
        $this->load->view('temp_mhs/header', $data);
        $this->load->view('temp_mhs/topbar');
        $this->load->view('temp_mhs/sidebar', $data);
        $this->load->view('belajar/css', $data);
        $this->load->view('temp_mhs/footer', $data);
    }

    // upload untuk admin
    public function tutorial()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tutorial'] = $this->db->get_where('tb_tutorial')->result_array();
        $data['judul'] = "Upload Tutorial";
        $this->load->view('temp_adm/header', $data);
        $this->load->view('temp_adm/topbar');
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('belajar/tutorial', $data);
        $this->load->view('temp_adm/footer', $data);
    }
    public function upload_tutorial()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Upload Tutorial";
            $this->load->view('temp_adm/header', $data);
            $this->load->view('temp_adm/topbar');
            $this->load->view('temp_adm/sidebar', $data);
            $this->load->view('belajar/tutorial', $data);
            $this->load->view('temp_adm/footer', $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'penerbit' => $this->input->post('penerbit'),
                'tgl_upload' => $this->input->post('tgl_upload'),
                'tutorial' => $this->input->post('tutorial'),
                'isi' => $this->input->post('isi'),
            ];
            $this->db->insert('tb_tutorial', $data);
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Berhasil Upload');
            $this->session->set_flashdata('swal_text', 'Tutorial di upload');
            redirect('adm_tutorial');
        }
    }
    // untuk dosen
    public function tutorial_dsn()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['tutorial'] = $this->db->get_where('tb_tutorial')->result_array();
        $data['judul'] = "Upload Tutorial";
        $this->load->view('temp_dsn/header', $data);
        $this->load->view('temp_dsn/topbar', $data);
        $this->load->view('temp_dsn/sidebar', $data);
        $this->load->view('belajar/tutorial', $data);
        $this->load->view('temp_dsn/footer', $data);
    }
    public function upload_tutorial_dsn()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Upload Tutorial";
            $this->load->view('temp_dsn/header', $data);
            $this->load->view('temp_dsn/topbar');
            $this->load->view('temp_dsn/sidebar', $data);
            $this->load->view('belajar/tutorial', $data);
            $this->load->view('temp_dsn/footer', $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'penerbit' => $this->input->post('penerbit'),
                'tgl_upload' => $this->input->post('tgl_upload'),
                'tutorial' => $this->input->post('tutorial'),
                'isi' => $this->input->post('isi'),
            ];
            $this->db->insert('tb_tutorial', $data);
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Berhasil Upload');
            $this->session->set_flashdata('swal_text', 'Tutorial di upload');
            redirect('adm_tutorial');
        }
    }
    public function edit_tutorial($id){
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $user=$data['user'];
        $data['tutorial']=$this->db->get_where('tb_tutorial',['id_tutorial'=>$id])->row_array();
        if ($user['role_id']==2) {
            # code...
            $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
            $this->form_validation->set_rules('judul', 'Judul', 'required');
    
            if ($this->form_validation->run() == false) {
                $data['judul'] = "Upload Tutorial";
                $this->load->view('temp_dsn/header', $data);
                $this->load->view('temp_dsn/topbar');
                $this->load->view('temp_dsn/sidebar', $data);
                $this->load->view('belajar/edit_tutorial', $data);
                $this->load->view('temp_dsn/footer', $data);
            } else {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'penerbit' => $this->input->post('penerbit'),
                    'tgl_upload' => $this->input->post('tgl_upload'),
                    'tutorial' => $this->input->post('tutorial'),
                    'isi' => $this->input->post('isi'),
                ];
                $this->db->where('id_tutorial',$id);
                $this->db->update('tb_tutorial', $data);
                $this->session->set_flashdata('swal_icon', 'success');
                $this->session->set_flashdata('swal_title', 'Berhasil Update');
                $this->session->set_flashdata('swal_text', 'Tutorial di upload');
                redirect('adm_tutorial');
            }
        }else{
            $this->form_validation->set_rules('judul', 'Judul', 'required');
    
            if ($this->form_validation->run() == false) {
                $data['judul'] = "Upload Tutorial";
                $this->load->view('temp_adm/header', $data);
                $this->load->view('temp_adm/topbar');
                $this->load->view('temp_adm/sidebar', $data);
                $this->load->view('belajar/edit_tutorial', $data);
                $this->load->view('temp_adm/footer', $data);
            } else {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'penerbit' => $this->input->post('penerbit'),
                    'tgl_upload' => $this->input->post('tgl_upload'),
                    'tutorial' => $this->input->post('tutorial'),
                    'isi' => $this->input->post('isi'),
                ];
                $this->db->where('id_tutorial',$id);
                $this->db->update('tb_tutorial', $data);
                $this->session->set_flashdata('swal_icon', 'success');
                $this->session->set_flashdata('swal_title', 'Berhasil Update');
                redirect('adm_tutorial');
            }
        }
    }
    public function hapus_tutorial($id){
        $this->db->delete('tb_tutorial',['id_tutorial'=>$id]);
        $this->session->set_flashdata('swal_icon', 'error');
        $this->session->set_flashdata('swal_title', 'Berhasil hapus');
        redirect('adm_tutorial');
    }
}
