<?php
class M_belajar extends CI_Controller{
    public function ambilTutorial(){
        return $this->db->get_where("tb_tutorial")->result_array();
    }
}


?>