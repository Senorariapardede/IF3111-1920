<?php
class M_delete extends CI_model{
    public function getDelete(){
        $id = $_GET['del'];
        $this->db->delete('lapor',array('id'=>$id));
        echo "<script>alert('Laporan Berhasil Di Hapus');</script>";
        echo "<script>location='home';</script>";
    }
}
?>