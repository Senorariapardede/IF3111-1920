<?php
class M_search extends CI_model{
    public function SearchData($key=null){
        if($key){
            $this->db->like('laporan',$key);
            $this->db->or_like('aspek',$key);
        }
        $this->db->order_by("id","desc");
        return $this->db->get('lapor',4)->result_array();
    }
}
?>