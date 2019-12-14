<?php
class M_change extends CI_model{
    public function GetChange(){
        $id=$_GET["cha"];
        $query=$this->db->get_where('lapor',array('id'=>$id));
        return $query->result_array();
    }

    public function UpdateNews(){
        $id=$_GET["cha"];
        $yes = array('jpg','jpeg','png','doc','docx','pdf','ppt','pptx','xls','xlsx');
        $lampiran=$_FILES['lampiran']['name'];
        $a=explode('.',$lampiran);
        $b = strtolower(end($a));
        $size = $_FILES['lampiran']['size'];
        $up=$_FILES['lampiran']['namee'];
        move_uploaded_file($up,'other/lampiran/'.$lampiran);

        date_default_timezone_set("Asia/Jakarta");
        $today=date("Y-m-d H:i:s");
        $data = [
            "laporan"=>$this->input->post('laporan',true),
            "lampiran"=>$lampiran,
            "waktu"=>$today,
            "aspek"=>$this->input->post('aspek',true)
        ];

        $this->db->update('lapor',$data,array('id'=>$id));
        echo "<script>alert('Laporan Berhasil Di Ubah')</script>";
        echo "<script>location='home';</script>";
    }
}
?>