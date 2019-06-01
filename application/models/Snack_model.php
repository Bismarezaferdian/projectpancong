<?php

class Snack_model extends CI_model{
    public function getAllSnack()
    {
        $query = $this->db->get('snack');
        return $query->result_array();
    }
    
}