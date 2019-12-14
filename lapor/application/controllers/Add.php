<?php
 class Add extends CI_Controller{
     public function __construct(){
         parent ::__construct();
         $this->load->model('M_home');
         $this->load->helper(array('form'));
         $this->load->helper(array('url'));
         $this->load->library('form_validation');
         $this->load->library('upload');
     }

     public function index(){
        $this->form_validation->set_rules('laporan','laporan','required');
        $this->form_validation->set_rules('aspek','aspek','required');
         if($this->form_validation->run()==FALSE){
             $data['title'] = 'Membuat Laporan';
             $this->load->view('make/index',$data);
         }else{
             $this->M_home->AddNews();
         }
     }
 }
 ?>