<?php
class events extends CI_Model{
   function create($edata){
     $this->db->insert('Event',$edata);
   }
   function fetch(){
       $this->db->select('*');
       $date1 = date('Y-m-d');
       $this->db->where("date >",$date1);
       $this->db->where('category','public');
       $res = $this->db->get('Event');
       return $res->result();
   }
   function fetchPvt($o_id){
       $this->db->select('*');
       $this->db->where('o_id',$o_id);
       $date1 = date('Y-m-d');
       $this->db->where("date >",$date1);
       $this->db->where('category','private');
       $res = $this->db->get('Event');
       return $res->result();
   }
   function fetchEvent($eid){
       $this->db->select('*');
       $this->db->where('e_id',$eid);
       $event = $this->db->get('Event');
       return $event->row_array();
   }
    function insertPart($pdata){
        $this->db->insert('Participant',$pdata);
    }
    function fetchPart($e_id,$u_id){
        $this->db->select('*');
        $this->db->where('e_id',$e_id);
        $this->db->where('u_id',$u_id);
        $res = $this->db->get('Participant');
        return $res->row_array();
    }
    function allPart($u_id){
        $this->db->select('*');
        $this->db->where('u_id',$u_id);
        $res = $this->db->get('Participant');
        return $res->result();
    }
    function unPart($u_id,$e_id){
        $this->db->where('u_id',$u_id);
        $this->db->where('e_id',$e_id);
        $this->db->delete('Participant');
    }
    function deleteEvent($o_id,$e_id){
        $this->db->where('o_id',$o_id);
        $this->db->where('e_id',$e_id);
        $this->db->delete('Event');
    }
    function verifyPart($reg_id){
        $this->db->select('*');
        $this->db->where('reg_id',$reg_id);
        $res = $this->db->get('Participant');
        return $res->row_array();
    }
}