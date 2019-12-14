<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->model('M_home');
        $data['home'] = $this->M_home->ShowAll();
        $data['title'] = 'Halaman Utama Simple Lapor';
    // $this->load->view('templates/heades_utama');
        $this->load->view('home/index',$data);
    // $this->load->view('templates/footer');
    }
}

?>