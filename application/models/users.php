<?php

class users extends CI_Model{
    function login($email,$pass){
         $this->db->select('*');
         $this->db->where('email',$email);
         $this->db->where('u_pass',$pass);
         $res =$this->db->get('User');
        return $res->row_array();
    }
}