<?php
class Dosen extends CI_Controller{
    public function __construct(){
        parent::__construct();
       
        $user=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        if ($user==NULL) {
          redirect('login','refresh');
          
        }
        if ($user['role_id']!=2) {
          # code...
          redirect('login','refresh');
        }
        $this->load->model('M_dsn');
    }
    public function index(){
        $data['matkul']= $this->M_dsn->lihat_mk();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="Dashboard Dosen";
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar',$data);
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('dosen/dashboard',$data);
        $this->load->view('temp_dsn/footer');
        $this->load->view('temp_bootstrap/footer');
    }
    public function profil(){
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']="My Profil";
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar',$data);
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('mahasiswa/profil',$data);
        $this->load->view('temp_dsn/footer');
        $this->load->view('temp_bootstrap/footer');
    }
    public function edit_profil(){
        $this->form_validation->set_rules('nama', 'Nama', 'required',['
        required'=>"nama harus di isi"]);
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
    if($this->form_validation->run()==false){
        $data['judul']="Edit Profil";
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar',$data);
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('mahasiswa/edit_profil',$data);
        $this->load->view('temp_dsn/footer');
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
    redirect('profil_dsn');
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
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar');
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('auth/ubah_password',$data);
        $this->load->view('temp_dsn/footer');
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
public function ruangan(){
    $data['kontrol']=$this->db->get_where('tb_control')->row_array();
    $data['ruang']=$this->db->get_where('tb_ruang')->result_array();
    $data['judul']="Ruangan";
    $this->load->view('temp_dsn/header',$data);
    $this->load->view('temp_dsn/topbar');
    $this->load->view('temp_dsn/sidebar',$data);
    $this->load->view('dosen/ruangan',$data);
    $this->load->view('temp_dsn/footer');
}
public function pakai_ruangan($id){
    $data['kontrol']=$this->db->get_where('tb_control')->row_array();
    $isId=$this->db->get_where('tb_ruang',['id_ruang'=>$id])->row_array();
        if ($isId['status']==0) { 
            date_default_timezone_set('Asia/Jakarta');
            $data=[
                'waktu'=>date('H : i'),
                'status'=>1
            ]; 
            // $this->db->set('status',0);
            $this->db->where('id_ruang',$id);
            $this->db->update('tb_ruang',$data);
        }else{
            $data=[
                'status'=>0,
                'waktu'=>null
            ];
            // $this->db->set('status', 1, FALSE);
            $this->db->where('id_ruang', $id);
            $this->db->update('tb_ruang',$data); 
        }
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'Kelas Di Pakai');
        redirect('ruangan',"refresh");
}
public function meet(){
    $data['kontrol']=$this->db->get_where('tb_control')->row_array();
    $data['kelas']=$this->db->get_where('tb_kelas')->result_array();
    $data['matkul']=$this->db->get_where('tb_matkul')->result_array();
    $data['meet']=$this->db->get_where('meet')->result_array();
    $data['judul']="Meet";
    $this->load->view('temp_dsn/header',$data);
    $this->load->view('temp_dsn/topbar');
    $this->load->view('temp_dsn/sidebar',$data);
    $this->load->view('dosen/meet',$data);
    $this->load->view('temp_dsn/footer');
}
public function deleteMeet($id){
$this->db->delete('meet',['id_meet'=>$id]);
        $this->session->set_flashdata('swal_icon', 'error');
        $this->session->set_flashdata('swal_title', 'Meet Dihapus');
        redirect('Dosen/meet',"refresh");
}
public function masukMeet($idMeet){
    $data['kontrol']=$this->db->get_where('tb_control')->row_array();
    $data['user']=$this->db->get_where('tb_user',["email"=>$this->session->userdata('email')])->row_array();
    $data['idMeet']=$this->db->get_where('meet',['link_url'=>$idMeet])->row_array();
    $this->load->view('temp_dsn/header',$data);
    $this->load->view('temp_dsn/topbar',$data);
    $this->load->view('temp_dsn/sidebar',$data);
    $this->load->view('meet/masuk_dsn',$data); 
    $this->load->view('temp_dsn/footer',$data);  
}


}
?>