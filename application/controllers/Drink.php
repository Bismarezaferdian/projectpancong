<?php 

class Drink extends CI_Controller{


    public function index()
    {
        $data['judul']='DRINKS';
        $this->load->view('template/header', $data);
        $this->load->view('drink/index');
        $this->load->view('template/footer');

    }
} 

