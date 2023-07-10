<?php
class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_user');
        $this->load->model('M_dsn');
    }
    public function index(){
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email',[
            'required'=>' harus diisi',
            'valid_email'=>'format harus email'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',[
            'required'=>'password harus diisi',
            'min_lenght'=>'minimal 8 karakter'
        ]);
        if ($this->form_validation->run()==false) {
            $data['judul']="Login";
            $this->load->view('temp_bootstrap/header',$data);
            $this->load->view('auth/login',$data);
            $this->load->view('temp_bootstrap/footer');
        }else{
            $this->login();
        }
    }
    private function login(){
        $email=$this->input->post('email');
        $pass=$this->input->post('password');
        $user=$this->db->get_where('tb_user',['email'=>$email])->row_array();
        if ($user) {
            if ($user['status']==1) {
               if (password_verify($pass,$user['password'])) {
                $data=[
                    'email'=> $user['email'],
                    'role_id'=> $user['role_id']
                ];
                   $this->session->set_userdata($data);
                if ($user['role_id']==1) {
                    $this->session->set_flashdata('swal_icon', 'success');
                    $this->session->set_flashdata('swal_title', 'Berhasil Login ');
                    redirect('Mahasiswa','refresh');
                }else if ($user['role_id']==2) {
                    $this->session->set_flashdata('swal_icon', 'success');
                    $this->session->set_flashdata('swal_title', 'Berhasil Login ');
                    redirect('dosen','refresh');
                }else if($user['role_id']==5){   
                    redirect('super_admin','refresh');              
                }else{
                    $this->session->set_flashdata('swal_icon', 'success');
                    $this->session->set_flashdata('swal_title', 'Berhasil Login ');
                    redirect('admin','refresh');
                }
               }else{
                $this->session->set_flashdata('Auth', '<div class="alert alert-danger" role="alert">
                password salah!
                </div>');
                redirect('login');
               }
            }else{
                $this->session->set_flashdata('Auth', '<div class="alert alert-danger" role="alert">
            akun tidak aktif!
            </div>');
            redirect('login'); 
            }
            
        }else{
            $this->session->set_flashdata('Auth', '<div class="alert alert-danger" role="alert">
            akun tidak terdaftar!
           </div>');
           redirect('login');
        }
    }
   
    public function registrasi(){
        $this->form_validation->set_rules('nama', 'Nama', 'required',[
            'required'=>'nama harus diisi'
        ]);
        
        $this->form_validation->set_rules('identitas', 'identitas', 'required|numeric',[
            'required'=>'nim/nid harus diisi',
            'numeric'=>'harus angka'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email',[
            'required'=>'email harus diisi',
            'valid_email'=>'email tidak valid'
        ]);
        
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required|numeric',[
            'required'=>'no_hp harus diisi',
            'numeric'=>'harus angka'
        ]);
        
        $this->form_validation->set_rules('password1', 'Password1', 'required|min_length[8]|matches[password2]',[
            'required'=>'password harus diisi',
            'max_length'=>'minimal 8 karakter',
            'matches'=>'password tidak sama'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|min_length[8]|matches[password1]',[
            'required'=>'password harus diisi',
            'max_lenght'=>'minimal 8 karakter',
            'matches'=>'password tidak sama'
        ]);
        
        if ($this->form_validation->run()== FALSE) {
            $data['judul']="Daftar Mahasiswa";
            $this->load->view('temp_bootstrap/header',$data);
            $this->load->view('auth/registrasi',$data);
            $this->load->view('temp_bootstrap/footer');
        }else{
            $this->M_user->registrasi();
            $this->session->set_flashdata('Auth', '<div class="alert alert-success" role="alert">
           Anda Berhasil Registrasi!Tunggu aktivasi admin
          </div>');
          redirect('login');
        
            
        }
    }
    public function logout(){
        
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('Auth', '<div class="alert alert-success" role="alert">
        Anda Telah Logout!
       </div>');
       redirect('login');

        
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
            $this->load->view('temp_mhs/topbar');
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
    // super admin
    public function super_admin(){ 
        $data['service'] = $this->db->get_where('developer')->row_array(); 
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="super admin";
        $this->load->view('temp_bootstrap/header',$data); 
        $this->load->view('admin/super_admin.php',$data); 
        $this->load->view('temp_bootstrap/footer'); 
    }
}

?>