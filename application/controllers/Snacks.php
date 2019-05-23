<?php

class Snacks extends CI_CONTROLLER {
    public function index()
    {
        $data['judul']='Snacks';
        $this->load->view('template/header', $data);
        $this->load->view('snacks/index');
        $this->load->view('template/footer');
    }

}