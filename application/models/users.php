<?php

class users extends CI_Model{
    function login($email,$pass){
         $this->db->select('*');
         $this->db->where('email',$email);
         $this->db->where('u_pass',$pass);
         $res =$this->db->get('User');
        return $res->row_array();
    }
    function insert($udata){
        $this->db->insert('User',$udata);
    }
    function fetch($email){
        $this->db->select('*');
        $this->db->where('email',$email);
        $res = $this->db->get('User');
        return $res->row_array();
    }
    function insertPhone($pdata){
        $this->db->insert('Phone',$pdata);
    }
    function getlocation(){
        $this->db->select('*');
        $res = $this->db->get('Location');
        return $res->result();
    }
    function getPhone($uid){
        $this->db->select('*');
        $this->db->where('u_id',$uid);
        $res = $this->db->get('Phone');
        return $res->result();
    }
    function insertOrg($odata){
        $this->db->insert('Organiser',$odata);
    }
    function orgData($uid){
        $this->db->select('*');
        $this->db->where('u_id',$uid);
        $res = $this->db->get('Organiser');
        return $res->row_array();
    }
    function updatePass($uid,$pass){
        $this->db->where('u_id',$uid);
        $this->db->update('User',$pass);
    }
}