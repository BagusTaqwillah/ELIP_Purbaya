<?php
class Penugasan_dsn extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tugas');
    }
    public function index(){
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $user=$data['user'];
        $id_user=$user['id_user'];
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['matkul']=$this->db->get_where('tb_matkul')->result_array();
        $data['kelas']=$this->db->get_where('tb_kelas')->result_array();
        $data['penugasan']=$this->db->get_where('tb_tugas',['id_user'=>$id_user])->result_array();
        $this->form_validation->set_rules('judul','Judul','required',[
            'required'=>'judul harus di isi'
        ]);
        $this->form_validation->set_rules('deskripsi','Deskripsi','required',[
            'required'=>'deskripsi harus di isi'
        ]);
        if ($this->form_validation->run()==false) {
            $data['kontrol']=$this->db->get_where('tb_control')->row_array();
            $data['judul']="Penugasan";
            $this->load->view('temp_dsn/header',$data);
            $this->load->view('temp_dsn/sidebar',$data);
            $this->load->view('temp_dsn/topbar',$data);
            $this->load->view('dosen/penugasan',$data);
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
                        'judul'=>$this->input->post('judul'),
                        'nama_mk'=>$this->input->post('nama_mk'),
                        'kelas'=>$this->input->post('kelas'),
                        'deskripsi'=>$this->input->post('deskripsi'),
                        'semester'=>$this->input->post('semester'),
                        'tenggat'=>$this->input->post('tenggat'),
                        'lampiran'=>$lampiran,
                        'id_user'=>$id_user
                    ];
                    $this->db->insert('tb_tugas',$data);
                    $this->session->set_flashdata('swal_icon', 'success');
                    $this->session->set_flashdata('swal_title', 'Data Di Tambah');
                    $this->session->set_flashdata('swal_text', 'Data telah di tambah');
                    redirect('penugasan_dsn');
                }
               
    
            $this->load->library('upload', $config);
        }
    }
    public function delete_penugasan($id){
        $this->db->where('id_tugas',$id);
        $this->db->delete('tb_tugas');
        $this->session->set_flashdata('swal_icon', 'error');
        $this->session->set_flashdata('swal_title', 'Data Terhapus ');
        $this->session->set_flashdata('swal_text', 'data anda terhapus');
        redirect('penugasan_dsn');
    }
    public function edit_penugasan($id){
        $data['kelas']=$this->db->get_where('tb_kelas')->result_array();
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('nama_mk', 'Nama Mk', 'required');
        
        if ($this->form_validation->run()==false) {
            $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
            $data['tugas']=$this->db->get_where('tb_tugas',['id_tugas'=>$id])->row_array();
            $data['judul']="Semester 1 Algoritma";
            $this->load->view('temp_dsn/header',$data);
            $this->load->view('temp_dsn/sidebar',$data);
            $this->load->view('temp_dsn/topbar',$data);
            $this->load->view('dosen/edit_penugasan',$data);
            $this->load->view('temp_dsn/footer',$data);
            $this->load->view('temp_bootstrap/footer'); 
        }else{
            $this->M_tugas->edit_penugasan($id);
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Data Terupdate ');
            $this->session->set_flashdata('swal_text', 'data anda terupdate');
            redirect('penugasan_dsn');
        }
    }
    public function detail_penugasan($id){

    }
}
?>