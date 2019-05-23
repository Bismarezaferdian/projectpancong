<?php 

class Paket2 extends CI_Controller{


    public function index()
    {
        $data['judul']='PAKET2';
        $this->load->view('template/header', $data);
        $this->load->view('paket2/index');
        $this->load->view('template/footer');

    }
} 

