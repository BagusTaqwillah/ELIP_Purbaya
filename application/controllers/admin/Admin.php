<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $user=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        if ($user==NULL) {
          redirect('login','refresh');
          
        }
        if ($user['role_id']!=3) {
          # code...
          redirect('login','refresh');
      }
    }
    public function index()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $countmhs = $this->db->query("SELECT * FROM tb_user WHERE role_id=1");
        $data['countmhs'] = $countmhs->num_rows();
        $countdsn = $this->db->query("SELECT * FROM tb_user WHERE role_id=2");
        $data['countdsn'] = $countdsn->num_rows();
        $countadm = $this->db->query("SELECT * FROM tb_user WHERE role_id=3");
        $data['countadm'] = $countadm->num_rows();

        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Dashboard Admin";
        $this->load->view('temp_adm/header', $data);
        $this->load->view('temp_adm/topbar');
        $this->load->view('temp_adm/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('temp_adm/footer');
    }
    // profil
    public function profil()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "My Profil";
        $this->load->view('temp_adm/header', $data);
        $this->load->view('temp_adm/topbar', $data);
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('mahasiswa/profil', $data);
        $this->load->view('temp_adm/footer');
    }
    public function edit_profil()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['
        required' => "nama harus di isi"]);

        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Edit Profil";
            $this->load->view('temp_adm/header', $data);
            $this->load->view('temp_adm/topbar', $data);
            $this->load->view('temp_adm/sidebar', $data);
            $this->load->view('mahasiswa/edit_profil', $data);
            $this->load->view('temp_adm/footer');
        } else {
            $nama = $this->input->post('nama');
            $nim = $this->input->post('identitas');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $no_hp = $this->input->post('no_hp');
            $img = $_FILES['img']['name'];
            if ($img) {
                $config['upload_path']          = './assets/profil';
                $config['allowed_types']        = 'gif|jpg|png|JPG|PNG|jpeg';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('img')) {
                    $new_img = $this->upload->data('file_name');
                    $this->db->set('img', $new_img);
                    $this->db->where('email', $email);
                    $this->db->update('tb_user');
                }
            }
            $data = [
                'identitas' => $this->input->post('identitas'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp')
            ];
            $this->db->where('email', $email);
            $this->db->update('tb_user', $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Profil Telah Di edit</strong>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
            redirect('profil_adm');
        }
    }
    // ubah password
    public function ubah_password()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('pass_lama', 'Pass_Lama', 'required|min_length[8]', [
            'required' => 'password lama harus di isi',
            'min-length' => 'mininal 8 karakter'
        ]);
        $this->form_validation->set_rules('pass_baru', 'Password_Baru', 'required|min_length[8]', [
            'required' => 'password lama harus di isi',
            'min-length' => 'mininal 8 karakter'
        ]);
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Ubah Password";
            $this->load->view('temp_mhs/header', $data);
            $this->load->view('temp_mhs/topbar');
            $this->load->view('temp_mhs/sidebar', $data);
            $this->load->view('auth/ubah_password', $data);
            $this->load->view('temp_mhs/footer');
            $this->load->view('temp_bootstrap/footer');
        } else {
            $pass_lama = $this->input->post('pass_lama');
            $pass_baru = $this->input->post('pass_baru');
            if (!password_verify($pass_lama, $data['user']['password'])) {
                $this->session->set_flashdata('Auth', '<div class="alert alert-success" role="alert">
                password lama salah
               </div>');
                redirect('ubah_password');
            } else {
                if ($pass_lama == $pass_baru) {
                    $this->session->set_flashdata('Auth', '<div class="alert alert-success" role="alert">
                    tidak boleh sama dengan passsword lama
                   </div>');
                    redirect('ubah_password');
                } else {
                    $pass_hash = password_hash($pass_baru, PASSWORD_DEFAULT);
                    $this->db->set('password', $pass_hash);
                    $this->db->where('email', $this->session->userdata('email'));
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

    public function user()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['allUser'] = $this->db->get_where('tb_user')->result_array();
        $data['judul'] = "Manage User";
        $this->load->view('temp_adm/header', $data);
        $this->load->view('temp_adm/topbar');
        $this->load->view('temp_adm/sidebar');
        $this->load->view('admin/user', $data);
        $this->load->view('temp_adm/footer');
    }
    public function delete_user($id)
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->db->where('id_user', $id);
        $this->db->delete('tb_user');
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'Data Di Dihapus');
        redirect('A_user', "refresh");
    }
    public function nonaktif($id)
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $isId = $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
        if ($isId['status'] == 1) {
            $this->db->set('status', 0);
            $this->db->where('id_user', $id);
            $this->db->update('tb_user');
        } else {
            $data = [
                'status' => 1
            ];
            $this->db->set('status', 1, FALSE);
            $this->db->where('id_user', $id);
            $this->db->update('tb_user');
        }
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'User Di Aktif/Nonaktif');
        redirect('A_user', "refresh");
    }
    public function edit_user($id)
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
            $data['judul'] = "Manage User";
            $this->load->view('temp_adm/header', $data);
            $this->load->view('temp_adm/topbar');
            $this->load->view('temp_adm/sidebar');
            $this->load->view('admin/edit_user', $data);
            $this->load->view('temp_adm/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('nama'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id'),
                'status' => 1
            ];
            $this->db->where('id_user', $id);
            $this->db->update('tb_user', $data);
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Telah Di update');
            redirect('A_user', "refresh");
        }
    }
    public function add_dosen()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {

            $data['judul'] = "Manage User";
            $this->load->view('temp_adm/header', $data);
            $this->load->view('temp_adm/topbar');
            $this->load->view('temp_adm/sidebar');
            $this->load->view('admin/user', $data);
            $this->load->view('temp_adm/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'identitas' => $this->input->post('identitas'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'status' => 1,
                'role_id' => 2,
                'img' => "user.png"
            ];
            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Dosen Telah di Tambah');
            redirect('A_user', "refresh");
        }
    }
    public function add_admin()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {

            $data['judul'] = "Manage User";
            $this->load->view('temp_adm/header', $data);
            $this->load->view('temp_adm/topbar');
            $this->load->view('temp_adm/sidebar');
            $this->load->view('admin/user', $data);
            $this->load->view('temp_adm/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'identitas' => $this->input->post('identitas'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'status' => 1,
                'role_id' => 3,
                'img' => "user.png"
            ];
            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Admin Telah di Tambah');
            redirect('A_user', "refresh");
        }
    }
    // admin matkul


    // akhir matkul

    // control nama kampus
    public function ganti_kampus()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $control = $this->db->get_where('tb_control')->row_array();
        $data = $this->input->post('nama_kampus');

        $this->db->set('nama_kampus', $data);
        $this->db->where('id_control', 1);
        $this->db->update('tb_control');
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'warna di ubah');
        redirect('admin');
    }
    // control img thumbnail
    public function ganti_thumbnail()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $control = $this->db->get_where('tb_control')->row_array();
        $data = $_FILES['img']['name'];
        if ($data) {
            $config['upload_path']          = './assets/control';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('img')) {
                $new_gambar = $this->upload->data('file_name');
                $this->db->set('img', $new_gambar);
                $this->db->where('id_control', 1);
                $this->db->update('tb_control');
            } else {
                echo $this->upload->display_errors();
            }
        }
        redirect('admin');
    }
    // backup database
    public function backup()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['admin'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Backup Database';
        $this->load->view('temp_adm/header', $data, FALSE);
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('temp_adm/topbar');
        $this->load->view('admin/backup', $data, FALSE);
        $this->load->view('temp_adm/footer');
    }
    public function proses_backup()
    {
        $this->load->dbutil();
        $db_name = 'backup-' . $this->db->database . '-' . date("Y-m-d-H-i-s") . '.sql';
        $prefs = [
            'format' => 'zip',
            'filename' => $db_name,
            'add_insert' => TRUE,
            'foreign_key_checks' => false
        ];
        $backup = $this->dbutil->backup($prefs);
        $save = 'pathtobkfolder' . $db_name;
        //    buat file
        $this->load->helper('file');
        write_file($save, $backup);
        // prosess download
        $this->load->helper('download');
        force_download($db_name, $backup);
    }
    public function ruangan()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['ruangan'] = $this->db->get_where('tb_ruang')->result_array();
        $data['admin'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Ruangan';
        $this->load->view('temp_adm/header', $data, FALSE);
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('temp_adm/topbar');
        $this->load->view('admin/ruangan', $data, FALSE);
        $this->load->view('temp_adm/footer');
    }
    public function add_ruangan()
    {
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data = [
            'nama_ruang' => $this->input->post('nama_ruangan')
        ];
        $this->db->insert('tb_ruang', $data);
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'Ruangan Telah di Tambah');
        redirect("A_ruangan");
    }
    public function delete_ruangan($id){
        $this->db->delete('tb_ruang',['id_ruang'=>$id]);
        $this->session->set_flashdata('swal_icon', 'error');
        $this->session->set_flashdata('swal_title', 'Ruangan Telah di hapus');
        redirect("A_ruangan");
    }
    public function edit_ruangan($id){
        $this->form_validation->set_rules('nama_ruangan', 'Nama Ruangan', 'required');
        
        if ($this->form_validation->run()==false) {
            $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $data['ruangan'] = $this->db->get_where('tb_ruang',['id_ruang'=>$id])->row_array();
            $data['admin'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $data['judul'] = 'Ruangan';
            $this->load->view('temp_adm/header', $data);
            $this->load->view('temp_adm/sidebar', $data);
            $this->load->view('temp_adm/topbar');
            $this->load->view('admin/edit_ruangan', $data);
            $this->load->view('temp_adm/footer');
        }else{
            $data=[
                'nama_ruang'=>$this->input->post('nama_ruangan')
            ];
            $this->db->where('id_ruang', $id);
            $this->db->update('tb_ruang', $data);
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Ruangan Telah di update');
            redirect("A_ruangan");
        }
    }
    public function add_kelas()
    {
        $data = [
            'nama_kelas' => $this->input->post('nama_kelas'),
            'semester' => $this->input->post('semester'),
        ];
        $this->db->insert('tb_kelas', $data);
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'Kelas di Tambah');
        redirect("A_ruangan");
    }
    public function aktivasi_mhs(){
        $this->db->set('status',1);
        $this->db->where('role_id',1);
        $this->db->update('tb_user');
        $this->session->set_flashdata('swal_icon', 'success');
        $this->session->set_flashdata('swal_title', 'Semua Mahasiswa Di Aktivasi');
        redirect("data_mhs");
    }
    public function exportMhsXls(){
        $data['mahasiswa']=$this->db->get_where('tb_mahasiswa')->result_array();
        $data['judul']="Data Mahasiswa";
        $this->load->view('temp_bootstrap/header',$data); 
        $this->load->view('admin/exportMhsXls',$data); 
        $this->load->view('temp_bootstrap/footer'); 
    }
    public function exportDsnXls(){
        $data['dosen']=$this->db->get_where('tb_user',['role_id'=>2])->result_array();
        $data['judul']="Data Mahasiswa";
        $this->load->view('temp_bootstrap/header',$data); 
        $this->load->view('admin/exportDsnXls',$data); 
        $this->load->view('temp_bootstrap/footer'); 
    }
    public function cetakDataMhs(){
        $data['mahasiswa']=$this->db->get_where('tb_mahasiswa')->result_array();
        $data['judul']="Cetak Data Mahasiswa";
        $this->load->view('temp_bootstrap/header',$data); 
        $this->load->view('admin/laporan/cetakDataMhs',$data); 
        $this->load->view('temp_bootstrap/footer'); 
    }
    public function cetakDataDsn(){
        $data['dosen']=$this->db->get_where('tb_user',['role_id'=>2])->result_array();
        $data['judul']="Cetak Data Mahasiswa";
        $this->load->view('temp_bootstrap/header',$data); 
        $this->load->view('admin/laporan/cetakDataDsn',$data); 
        $this->load->view('temp_bootstrap/footer'); 
    }
    public function suratEdaran(){
        $this->form_validation->set_rules('no_surat', 'No_surat', 'required');
    if ($this->form_validation->run() ==  FALSE) {
        $data['edaran']=$this->db->get_where('tb_surat')->row_array();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontrol'] = $this->db->get_where('tb_control')->row_array();
        $data['judul'] = 'Surat Edaran';
        $this->load->view('temp_adm/header', $data, FALSE);
        $this->load->view('temp_adm/sidebar', $data);
        $this->load->view('temp_adm/topbar');
        $this->load->view('admin/surat_edaran', $data, FALSE);
        $this->load->view('temp_adm/footer');
    } else {
        $no_surat=$this->input->post('no_surat');
        $isi_surat=$this->input->post('isi_surat');
        $id=$this->input->post('id_surat');
        $tgl_buat=date('d-m-Y');
         $data=[
          'no_surat'=>$no_surat,
          'isi_surat'=>$isi_surat,
          'tgl_dibuat'=>$tgl_buat
         ];
         $this->db->where('id_surat',$id);
         $this->db->update('tb_surat',$data);
         $this->session->set_flashdata('swal_icon', 'success');
         $this->session->set_flashdata('swal_title', 'Surat Edearan Terupdate');
         redirect("A_surat_edaran");
      }
    }
    public function detailSuratEdaran(){
            $data['kontrol']=$this->db->get_where('tb_control')->row_array();
            $data['edaran']=$this->db->get_where('tb_surat')->row_array();
            $data['user']=$this->db->get_where('tb_user',["email"=>$this->session->userdata('email')])->row_array();
            $data['judul']="Surat Edaran";
            $this->load->view('temp_adm/header', $data, FALSE);
            $this->load->view('temp_adm/sidebar', $data);
            $this->load->view('temp_adm/topbar');
            $this->load->view('admin/detail_surat_edaran',$data);
            $this->load->view('temp_adm/footer'); 
    }
}
