<?php 

class Pancong extends CI_Controller{
     public function __construct()
     {
        parent ::__construct();
        $this->load->model('Pancong_model');
     }
    


    public function index()
    {
        $data['judul']='PANCONG';
        $data['pancong'] = $this->Pancong_model->getAllPancong();
        $this->load->view('template/header', $data);
        $this->load->view('pancong/index',$data);
        $this->load->view('template/footer');

    }
} 

