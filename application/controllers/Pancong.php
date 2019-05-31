<?php 

class Pancong extends CI_Controller{


    public function index()
    {
        $data['judul']='PANCONG';
        $this->load->view('template/header', $data);
        $this->load->view('pancong/index');
        $this->load->view('template/footer');

    }
} 

