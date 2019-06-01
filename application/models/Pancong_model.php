<?php

class Pancong_model extends CI_model{
    public function getAllPancong()
    {
        $query = $this->db->get('pancong');
        return $query->result_array();
    }
}