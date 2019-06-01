<?php 

class Drink extends CI_Controller{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('Drink_model');

    }


    public function index()
    {
        $data['judul']='DRINKS';
        $data['drink'] = $this->Drink_model->getAllDrink();
        $this->load->view('template/header', $data);
        $this->load->view('drink/index');
        $this->load->view('template/footer');

    }
} 

