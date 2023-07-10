<?php
class Mahasiswa extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_user");
        $main=$this->M_user->getSystem();
        if ($main['status_page']==1) {               
            redirect('Dashboard/service','refresh');             
        }
        if (!$this->session->userdata('email')) {
            if (!$this->session->userdata('role_id'==1)) {
                # code...
                redirect('login','refresh');
            }
        }
        
    }
    public function index(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['user']=$this->db->get_where('tb_user',["email"=>$this->session->userdata('email')])->row_array();
        $data['judul']="Dashboard Mahasiswa";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('mahasiswa/dashboard',$data);
        $this->load->view('temp_mhs/footer',$data);
    }
    public function profil(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['mhs']=$this->db->get_where('tb_mahasiswa',['email'=>$this->session->userdata('email')])->row_array();
        $data['kelas']=$this->db->get_where('tb_kelas')->result_array();
        $data['semester']=$this->db->get_where('tb_semester')->result_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="My Profil";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('mahasiswa/profil',$data);
        $this->load->view('temp_mhs/footer');
        $this->load->view('temp_bootstrap/footer');
    }
    public function update_kelas(){
        $user=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $nim=$user['identitas'];
        $kelas=$this->input->post('kelas');
        $semester=$this->input->post('semester');
        $data=[
            'kelas'=>$kelas,
            'semester'=>$semester,
        ];
        $this->db->where('nim',$nim);
        $this->db->update("tb_mahasiswa",$data);
        $this->session->set_flashdata('swal_icon','success');
       $this->session->set_flashdata('swal_title','Kelas Terupdate');
       redirect('profil_mhs');
    }
    public function edit_profil(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required',['
        required'=>"nama harus di isi"]);
        
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
    if($this->form_validation->run()==false){
        $data['judul']="Edit Profil";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('mahasiswa/edit_profil',$data);
        $this->load->view('temp_mhs/footer');
        $this->load->view('temp_bootstrap/footer');
    }else{
        $nama=$this->input->post('nama');
        $nim=$this->input->post('identitas');
        $alamat=$this->input->post('alamat');
        $email=$this->input->post('email');
        $no_hp=$this->input->post('no_hp');
        $img=$_FILES['img']['name'];
        if ($img) {
            $config['upload_path']          = './assets/profil';
            $config['allowed_types']        = 'gif|jpg|png|JPG|PNG|jpeg';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('img')) {
                $new_img=$this->upload->data('file_name');
                $this->db->set('img',$new_img);
                $this->db->where('email',$email);
                $this->db->update('tb_user');
            }

        }
        $data=[
            'identitas'=>$this->input->post('identitas'),
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'alamat'=>$this->input->post('alamat'),
            'no_hp'=>$this->input->post('no_hp')
        ];
        $this->db->where('email',$email);
        $this->db->update('tb_user',$data);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Profil Telah Di edit</strong>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('profil_mhs');
    }
    }
    public function ubah_password(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('pass_lama','Pass_Lama','required|min_length[8]',[
            'required'=>'password lama harus di isi',
            'min-length'=>'mininal 8 karakter'
        ]);
        $this->form_validation->set_rules('pass_baru','Password_Baru','required|min_length[8]',[
            'required'=>'password lama harus di isi',
            'min-length'=>'mininal 8 karakter'
        ]);
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        if($this->form_validation->run()==false){
            $data['judul']="Ubah Password";
            $this->load->view('temp_mhs/header',$data);
            $this->load->view('temp_mhs/topbar',$data);
            $this->load->view('temp_mhs/sidebar',$data);
            $this->load->view('auth/ubah_password',$data);
            $this->load->view('temp_mhs/footer');
            $this->load->view('temp_bootstrap/footer');
        }else{
            $pass_lama=$this->input->post('pass_lama');
            $pass_baru=$this->input->post('pass_baru');
            if(!password_verify($pass_lama,$data['user']['password'])){
                $this->session->set_flashdata('Auth', '<div class="alert alert-success" role="alert">
                password lama salah
               </div>');
               redirect('ubah_password');
            }else{
                if($pass_lama==$pass_baru){
                    $this->session->set_flashdata('Auth', '<div class="alert alert-success" role="alert">
                    tidak boleh sama dengan passsword lama
                   </div>');
                   redirect('ubah_password');
                }else{
                     $pass_hash=password_hash($pass_baru,PASSWORD_DEFAULT);
                    $this->db->set('password',$pass_hash);
                    $this->db->where('email',$this->session->userdata('email'));
                    $this->db->update('tb_user');
                    $this->session->set_flashdata('Auth', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>password sudah di ubah</strong>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                    redirect('ubah_password');
                }

            }
        }
    }
    
    public function p_web(){
        $data['user']=$this->db->get_where('tb_user',[$this->session->userdata('email')])->row_array();
        $data['judul']="Pelatihan Web";
        $this->load->view('temp_mhs/header_stisla',$data);
        $this->load->view('temp_mhs/topbar_stisla',$data);
        $this->load->view('temp_mhs/sidebar_stisla',$data);
        $this->load->view('pelatihan/cek',$data);
        $this->load->view('temp_mhs/footer_stisla',$data);
   
    }
    public function saran(){
        $data=[
            'nama'=>$this->input->post('nama'),
            'saran'=>$this->input->post('saran'),
            'tgl_saran'=>date('')
        ];
       $this->db->insert('tb_saran',$data);
       $this->session->set_flashdata('swal_icon','success');
       $this->session->set_flashdata('swal_title','Berhasil Dikirim');
       redirect('Dashboard');
    }
    public function edaran(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['edaran']=$this->db->get_where('tb_surat')->row_array();
        $data['user']=$this->db->get_where('tb_user',["email"=>$this->session->userdata('email')])->row_array();
        $data['judul']="Surat Edaran";
        $this->load->view('temp_mhs/header',$data);
        $this->load->view('temp_mhs/topbar',$data);
        $this->load->view('temp_mhs/sidebar',$data);
        $this->load->view('mahasiswa/surat_edaran',$data);
        $this->load->view('temp_mhs/footer',$data);
    }
    
}


?>