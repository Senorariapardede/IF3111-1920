<?php
class Change extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_change');
        $this->load->library('upload');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['change']=$this->M_change->GetChange();
        $this->form_validation->set_rules('laporan','laporan','required');
        $this->form_validation->set_rules('aspek','aspek','required');
        if($this->form_validation->run()==FALSE){
            $data['title']="Mengubah Laporan";
            $this->load->view('V_change/index',$data);
        }else{
            $this->M_change->UpdateNews();
        }
    }
}
?>