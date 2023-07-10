<?php
class Pelatihan_dsn extends CI_Controller{
    public function index(){
        $query="SELECT * FROM `tb_sertifikat` JOIN tb_pelatihan 
        ON tb_sertifikat.id_pelatihan=tb_pelatihan.id_pelatihan
        JOIN tb_user ON tb_user.id_user=tb_sertifikat.id_user";
        $data['sertifikat']=$this->db->query($query)->result_array();
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['pelatihan']=$this->db->get_where('tb_pelatihan')->result_array();
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['audien']=$this->db->get_where('tb_user',['role_id'=>1])->result_array();
        $data['judul']="pelatihan";
        $this->load->view('temp_dsn/header',$data);
        $this->load->view('temp_dsn/topbar',$data);
        $this->load->view('temp_dsn/sidebar',$data);
        $this->load->view('dosen/pelatihan_dsb',$data);
        $this->load->view('temp_dsn/footer');
        $this->load->view('temp_bootstrap/footer');
    }
    public function adm_pelatihan(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
            $data['judul']="tambah pelatihan";
            $this->load->view('temp_adm/header',$data);
            $this->load->view('temp_adm/topbar',$data);
            $this->load->view('temp_adm/sidebar',$data);
            $this->load->view('pelatihan/adm_dashboard',$data);
            $this->load->view('temp_adm/footer');
            $this->load->view('temp_bootstrap/footer');
    }
    public function add_pelatihan(){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $this->form_validation->set_rules('nama_pelatihan', 'Nama Pelatihan', 'required');
        
        if ($this->form_validation->run()==false) {
            $data['judul']="tambah pelatihan";
            $this->load->view('temp_adm/header',$data);
            $this->load->view('temp_adm/topbar',$data);
            $this->load->view('temp_adm/sidebar',$data);
            $this->load->view('pelatihan/adm_dashboard',$data);
            $this->load->view('temp_adm/footer');
            $this->load->view('temp_bootstrap/footer');
        }else{
            $data=[
                'nama_pelatihan'=> $this->input->post('nama_pelatihan'),
                'tgl_buat'=> $this->input->post('tgl_buat'),
                'img'=>'default.jpg',
            ];
            $this->db->insert('tb_pelatihan',$data);
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'Berhasil dibuat ');
            redirect('A_pelatihan');
        }
    }
    public function hapus_pelatihan($id){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
      $this->db->where('id_data',$id);
      $this->db->delete('data_pelatihan');
      $this->session->set_flashdata('swal_icon', 'success');
      $this->session->set_flashdata('swal_title', 'Berhasil dibuat ');
      redirect('pelatihan_dsn');
    }
    public function publish_pelatihan($id){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $id_data=$this->db->get_where('data_pelatihan',['id_data'=>$id])->row_array();
    //    var_dump($id_data['status']);
    //    die;
        if ($id_data['status']=='1') {     
            $this->db->set('status',0);
            $this->db->where('id_data',$id);
            $this->db->update('data_pelatihan');
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'tidak publish');
        }else {
            $this->db->set('status',1);
            $this->db->where('id_data', $id);
            $this->db->update('data_pelatihan'); 
            $this->session->set_flashdata('swal_icon', 'success');
            $this->session->set_flashdata('swal_title', 'di publish');
        }
        
        redirect('pelatihan_dsn');
    }
    public function edit_pelatihan($id){
        $data['kontrol']=$this->db->get_where('tb_control')->row_array();
        $data['pelatihan']=$this->db->get_where('data_pelatihan',['id_Data'=>$id])->row_array();
        $this->form_validation->set_rules('judul','Judul','required');
        if ($this->form_validation->run()==false) {           
            $data['judul']="edit pelatihan";
            $this->load->view('temp_dsn/header',$data);
            $this->load->view('temp_dsn/topbar',$data);
            $this->load->view('temp_dsn/sidebar',$data);
            $this->load->view('dosen/edit_pelatihan',$data);
            $this->load->view('temp_dsn/footer');
            $this->load->view('temp_bootstrap/footer');  
        }else{
           $data=[
            'judul'=>$this->input->post('judul'),
            'materi'=>$this->input->post('materi'),
            'status'=>$this->input->post('status'),
           ];
           $this->db->where('id_data',$id);
           $this->db->update('data_pelatihan',$data);
           $this->session->set_flashdata('swal_icon', 'success');
           $this->session->set_flashdata('swal_title', 'Berhasil di update ');
           redirect('pelatihan_dsn');
        }
    }
    public function sendSertifikat(){
        $data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $user=$data['user'];
        $id_user=$this->input->post('id_user');
        $id_pelatihan=$this->input->post('id_pelatihan');
        $tgl_reward=date('Y-m-d');
        $nama_pemberi=$user['nama'];
        $data=[
            'id_user'=>$id_user,
            'id_pelatihan'=>$id_pelatihan,
            'tgl_reward'=>$tgl_reward,
            'nama_pemberi'=>$nama_pemberi
        ];
        $this->db->insert('tb_sertifikat',$data);
        $this->session->set_flashdata('swal_icon', 'success');
           $this->session->set_flashdata('swal_title', 'Sertifikat di berikan ');
           redirect('pelatihan_dsn');
    }
    public function deleteSertif($id){
        $this->db->delete('tb_sertifikat',['id_sertifikat'=>$id]);
        $this->db->insert('tb_sertifikat',$data);
        $this->session->set_flashdata('swal_icon', 'error');
           $this->session->set_flashdata('swal_title', 'Sertifikat di hapus ');
           redirect('pelatihan_dsn');
    }
}
?>