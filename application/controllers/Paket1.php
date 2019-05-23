<?php 

class Paket1 extends CI_Controller{


    public function index()
    {
        $data['judul']='PAKET1';
        $this->load->view('template/header', $data);
        $this->load->view('paket1/index');
        $this->load->view('template/footer');

    }
} 

