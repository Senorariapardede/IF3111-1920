<?php
class M_news extends CI_model{
    public function GetNews($slug=FALSE){
        if($slug==FALSE){
            $query=$this->db->get('lapor');
            return $query->result_array();
        }
        $query=$this->db->get_where('laporan',array('laporan'=>$slug));
        return $query->row_array();
    }
}
?>