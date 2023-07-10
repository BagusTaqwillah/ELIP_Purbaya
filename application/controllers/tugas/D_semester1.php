<?php
class D_semester1 extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login',"refresh");   
        }
        $this->load->model('M_user');
        $this->load->model('M_tugas');
    }
    public function semester1(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="Semester 1";
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('temp_dsn/topbar',$data);
        $this->load->view('penugasan/dsemester1',$data);
        $this->load->view('temp_dsn/footer',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function t_algoritma(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['t_algoritma1']=$this->db->get_where('tb_tugas',['semester'=>1])->result_array();
        $data['j_algoritma1']=$this->db->get_where('tb_mtugas',['mk'=>'algoritma','semester'=>1])->result_array();
        $this->form_validation->set_rules('judul','Judul','required',[
            'required'=>'judul harus di isi'
        ]);
        $this->form_validation->set_rules('deskripsi','Deskripsi','required',[
            'required'=>'deskripsi harus di isi'
        ]);
        if ($this->form_validation->run()==false) {
            $data['kontrol']=$this->db->get_where('tb_control')->row_array();
            $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
            $data['judul']="Semester 1 Algoritma";
            $this->load->view('temp_dsn/header',$data);
            $this->load->view('temp_dsn/sidebar',$data);
            $this->load->view('temp_dsn/topbar',$data);
            $this->load->view('penugasan/dsemester1/algoritma',$data);
            $this->load->view('temp_dsn/footer',$data);
            $this->load->view('temp_bootstrap/footer');
        }else{
            $lampiran=$_FILES['lampiran'];
                if ($lampiran="") {   
                }else{
                    $config['upload_path']='./assets/tugas';
                    $config['allowed_types']='jpeg|jpg|png|gif|pdf|docx';
                    $this->load->library('upload',$config);
                    if (!$this->upload->do_upload('lampiran')) {
                        echo "upload gagal";
                        die();
                    }else{
                        $lampiran=$this->upload->data('file_name');
                    }
                    $data=[
                        'nama_mk'=>'algoritma',
                        'judul'=>$this->input->post('judul'),
                        'deskripsi'=>$this->input->post('deskripsi'),
                        'semester'=>$this->input->post('semester'),
                        'tenggat'=>$this->input->post('tenggat'),
                        'lampiran'=>$lampiran
                    ];
                    $this->db->insert('tb_tugas',$data);
                    $this->session->set_flashdata('swal_icon', 'success');
                    $this->session->set_flashdata('swal_title', 'Data Di Tambah');
                    $this->session->set_flashdata('swal_text', 'Data telah di tambah');
                    redirect('algoritma1');
                }
               
    
            $this->load->library('upload', $config);
        }
        }
        public function delete_algo1($id){
            $this->db->where('id_tugas',$id);
            $this->db->delete('tb_tugas');
            $this->session->set_flashdata('swal_icon', 'error');
            $this->session->set_flashdata('swal_title', 'Data Terhapus ');
            $this->session->set_flashdata('swal_text', 'data anda terhapus');
            redirect('algoritma1');
        }
        public function edit_algo1($id){
            $data['kontrol']=$this->db->get_where('tb_control')->row_array();
            $this->form_validation->set_rules('nama_mk', 'Nama Mk', 'required');
            
            if ($this->form_validation->run()==false) {
                $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
                $data['tugas']=$this->db->get_where('tb_tugas')->row_array();
                $data['judul']="Semester 1 Algoritma";
                $this->load->view('temp_dsn/header',$data);
                $this->load->view('temp_dsn/sidebar',$data);
                $this->load->view('temp_dsn/topbar',$data);
                $this->load->view('penugasan/dsemester1/edit_algo1',$data);
                $this->load->view('temp_dsn/footer',$data);
                $this->load->view('temp_bootstrap/footer'); 
            }else{
                $this->M_tugas->edit_Algo1($id);
                $this->session->set_flashdata('swal_icon', 'success');
                $this->session->set_flashdata('swal_title', 'Data Terupdate ');
                $this->session->set_flashdata('swal_text', 'data anda terupdate');
                redirect('algoritma1');
            }
        }
        public function data_algo1(){
            $data['kontrol']=$this->db->get_where('tb_control')->row_array();
            $data['judul']="Data Semester 1";
            $this->load->view('temp_dsn/header',$data);
            $this->load->view('temp_dsn/sidebar',$data);
            $this->load->view('temp_dsn/topbar',$data);
            $this->load->view('penugasan/dsemester1/data_algo1',$data);
            $this->load->view('temp_dsn/footer',$data);
            $this->load->view('temp_bootstrap/footer');
        }
}

?>