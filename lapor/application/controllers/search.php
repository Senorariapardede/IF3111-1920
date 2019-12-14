<?php
class search extends CI_Controller{
    public function index(){
        $this->load->model('M_cari');
        $this->load->helper("url","form");
        if($this->input->post('submit')){
            $data['key']=$this->input->post('key');
        }else{
            $data['key']=null;
        }
        $data['title']='Hasil Pencarian';
        $data['search']=$this->M_search->SearchData($data['key']);
        $this->load->view('V_search/index',$data);
    }
}
?>