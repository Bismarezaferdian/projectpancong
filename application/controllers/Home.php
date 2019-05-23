<?php

class Home extends CI_CONTROLLER {
    public function index()
    {
        $data['judul'] = 'HOME';
        $this->load->view('template/header', $data);
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }
    
   
}