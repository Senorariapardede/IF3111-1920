<?php
class News extends CI_Controller{
    public function index(){
        $this->load->model('M_news');
        $data['news'] = $this->M_news->GetNews();
        $data['title'] = "Laporan";
        $this->load->view('v_news/index',$data)
    }

    public function view($slug = NULL){
        $data['ShowNews'] = $this->M_news->GetNews($slug);
        $this->load->view('V_news/view',$data);
    }
}

?>