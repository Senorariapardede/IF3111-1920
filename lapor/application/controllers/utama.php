<?php
class utama extends CI_Controller {
    public function index(){
        $this->load->view('home/index');
    }
}