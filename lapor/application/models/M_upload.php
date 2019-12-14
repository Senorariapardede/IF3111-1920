<?php
class M_upload extends CI_Model{
    public function upPath(){
        $data=array(
            'path'=>$upData['Full'],
        );
        return $this->db->insert('upload',$data)
    }
}