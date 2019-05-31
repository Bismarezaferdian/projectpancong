<?php

class Admin_drink extends CI_CONTROLLER{
    
    
    public function index()
    {
        $data['judul']='ADMIN DRINK';
        $this->load->view('template/header', $data);
        $this->load->view('admin_drink/index');
        $this->load->view('template/footer');

    }
    
}
