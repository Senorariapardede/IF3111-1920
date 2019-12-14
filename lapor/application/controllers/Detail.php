<?php 
class Detail extends CI_Controller{
    public function index(){
        $this->load->model('M_detail');
        $data['title'] = "Laporan Selengkapnya";
        $data['detail'] = $this->M_detail->getDetail();
        $this->load->view('V_detail/index',$data);
    }
}
?>