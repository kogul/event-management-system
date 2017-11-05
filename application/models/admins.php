<?php
class admins extends CI_Model{
    function login($uname,$pass){
        $this->db->select('*');
        $this->db->where('username',$uname);
        $this->db->where('password',$pass);
        $res =$this->db->get('admin');
        return $res->row_array();
    }
    function fetchAllEvent(){
        $this->db->select("*");
        $res = $this->db->get("event");
        return $res->result_array();
    }
    function orgData($oid){
        $this->db->select("*");
        $this->db->where('o_id',$oid);
        $res = $this->db->get('Organiser');
        return $res->row_array();
    }
    function countPart($e_id){
        $this->db->where('e_id',$e_id);
        $this->db->from('Participant');
        return $this->db->count_all_results();
    }
    function deleteEvent($e_id){
        $this->db->where('e_id',$e_id);
        $this->db->delete('Event');
    }

}