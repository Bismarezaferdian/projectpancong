<?php

class Admin_pancong extends CI_CONTROLLER{

    
    public function index()
    {
        $data['judul']= 'ADMIN PANCONG';
        $this->load->view('template/header', $data);
        $this->load->view('admin_pancong/index');
        $this->load->view('template/footer');
    }
}