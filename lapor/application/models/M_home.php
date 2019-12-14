<?php

class M_home extends CI_model{
    public function ShowAll(){
        $this->db->order_by("id", "desc");
        return $this->db->get('lapor', 2)->result_array();
    }

    public function AddNews(){
        $yes = array('jpg','jpeg','png','doc','docx','ppt','pptx','xls','xlsx','pdf');
        $file = $_FILES['myFile']['name'];
        $y = explode('.', $file);
        $ekstansi = strtolower(end($x));
        $size = $_FILES['myFiles']['size'];
        $file_tmp = $_FILES['myFile']['file_name'];

        date_default_timezone_set("Asia/Jakarta");
        $today = date("Y-m-d H:i:s");
        $data = [
            "laporan"=>$this->input('laporan', true),
            "lampiran"=>$file,
            "waktu"=>$today,
            "aspek"=>$this->input->post('aspek',true)
        ];

        $this->d->insert('lapor', $data);
        echo "<script>alert('Laporan Berhasil Di Buat')</script";
        echo "<script>locaion = 'home<.script>";
    }
}

?>