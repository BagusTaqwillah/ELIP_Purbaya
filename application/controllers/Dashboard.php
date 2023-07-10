<?php
class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_user"); 
    }
    public function index(){
        $main=$this->M_user->getSystem();
        if ($main['status_page']==1) {               
            redirect('Dashboard/service','refresh');             
        } 
        $data['control']=$this->db->get_where('tb_control')->row_array();
        $data['judul']="E-LIP Purbaya";
        $this->load->view('temp_bootstrap/header',$data);
        $this->load->view('display',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function service(){
        $data['control']=$this->db->get_where('tb_control')->row_array();
        $data['judul']="Perbaikan System";
        $this->load->view('temp_bootstrap/header',$data);
        $this->load->view('maintenance',$data);
        $this->load->view('temp_bootstrap/footer');
    }
    public function status_system(){
        $user=$this->db->get_where('tb_user',["email"=>$this->session->userdata('email')])->row_array();
        $main=$this->M_user->getSystem();
        if ($main['status_page']==1) {    
            $this->db->update('developer',['status_page'=>0]);           
            $this->db->where("email",$user['email']); 
            redirect('super_admin','refresh');              
        } else if($main['status_page']==0){
            $this->db->update('developer',['status_page'=>1]);           
            $this->db->where("email",$user['email']); 
            redirect('super_admin','refresh');
        }
    }
}

?>