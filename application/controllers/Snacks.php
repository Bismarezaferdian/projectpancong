<?php

class Snacks extends CI_CONTROLLER {
    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Snack_model');
    }



    public function index()
    {
        $data['judul']='Snacks';
        $data['snack'] = $this->Snack_model->getAllSnack();
        $this->load->view('template/header', $data);
        $this->load->view('snacks/index',$data);
        $this->load->view('template/footer');
    }

}