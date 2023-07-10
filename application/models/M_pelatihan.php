<?php
class M_pelatihan extends CI_Model{
        public function CategoryByPelatihan($slug){
            $this->db->where('kategori', $slug);
            return $this->db->get('data_pelatihan')->result_array();
           
        }
}

?>