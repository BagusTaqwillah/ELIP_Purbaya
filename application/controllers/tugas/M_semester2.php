<?php 
class M_semester2 extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login',"refresh");   
        }
        $this->load->model('M_tugas');
    }
    public function index(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="Penugasan Semester 1 ";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/msemester2',$data);
        $this->load->view('temp_mhs/footer');
        $this->load->view('temp_bootstrap/footer');
    }
    public function m_algoritma1(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['algoritma1']=$this->db->get_where('tb_tugas',['nama_mk'=>'algoritma','semester'=>1])->result_array();
        $data['judul']="Tugas Semester 1";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('penugasan/msemester1/algoritma1',$data);
        $this->load->view('temp_mhs/footer');
        $this->load->view('temp_bootstrap/footer'); 
    }

    public function m_algoritma1_detail($id){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('nama_mhs', 'Nama_mhs', 'required',[
            'required'=>"nama harus di isi"
        ]);
        
        if ($this->form_validation->run()==false) {         
            $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
            $data['judul']="detail tugas";
            $data['algoritma1']=$this->M_tugas->infodetailalgo($id);
            $this->load->view('temp_mhs/header',$data);
            $this->load->view('temp_mhs/sidebar',$data);
            $this->load->view('temp_mhs/topbar',$data);
            $this->load->view('penugasan/msemester1/algoritma1_detail',$data);
            $this->load->view('temp_mhs/footer');
            $this->load->view('temp_bootstrap/footer');
        }else{
            $nama=$this->input->post('nama_mhs');
            $file_tugas=$_FILES['file'];
            if($file_tugas=""){
                var_dump($file_tugas);
                die();
                echo"data tidak ada";
            }else{ 
                $config['upload_path']='./assets/tugas';
                $config['allowed_types']='jpeg|jpg|png|gif|pdf|docx';
                $this->load->library('upload',$config);
                    if (!$this->upload->do_upload('file')) {
                        echo "upload gagal";
                        die();
                    }else{
                        $file_tugas=$this->upload->data('file_name');
                    }
                    $data=[
                        'nama_mhs'=>$nama,
                        'kelas'=>'TI A 1',
                        'semester'=>1,
                        'mk'=>'algoritma',
                        'file'=>$file_tugas,
                    ];
                    $this->db->insert('tb_mtugas',$data);
            }
            $this->session->set_flashdata('upload', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil di upload !</strong> .
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('m_algoritma1');
        }
    }
    public function komen_telat(){
        echo"yahha telat";
    }
}



?>