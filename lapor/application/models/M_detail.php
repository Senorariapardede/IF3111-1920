<?php
class M_detail extends CI_model{
    public function getDetail(){
        $id = $_GET["detail_id"];
        $query = $this->db->get_where('lapor',array('id' => $id));
        return $query->result_array();
    }
}
?>