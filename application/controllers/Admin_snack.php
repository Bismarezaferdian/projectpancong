<?php

class Admin_snack extends CI_CONTROLLER{

    public function index()
    {

        $data['judul'] = 'ADMIN SNACK';
        
        $this->load->view('template/header', $data);
        $this->load->view('admin_snack/index');
        $this->load->view('template/footer');

    }
}