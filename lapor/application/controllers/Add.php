<?php
 class Add extends CI_Controller{
     public function index(){
        $this->load->model('M_home');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper(array('form','url'));
        $this->form_validation->set_rules('laporan','laporan','required');
        $this->form_validation->set_rules('aspek','aspek','required');
         if($this->form_validation->run() == FALSE){
             $data['title'] = 'Membuat Laporan';
             $this->load->view('buat_lapor/laporan',$data);
         }else{
             $this->M_home->AddNews();
         }
     }
 }
 ?>