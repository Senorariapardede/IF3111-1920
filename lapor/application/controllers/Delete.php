<?php
class Delete extends CI_Controller{
    public function index(){
        $this->load->model('M_hapus');
        $this->M_hapus->getDelete();
    }
} 

?>