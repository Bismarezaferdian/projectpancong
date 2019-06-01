<?php

class Drink_model extends CI_model{
    public function getAllDrink()
    {
        $query = $this->db->get('drink');
        return $query->result_array();
    }
}