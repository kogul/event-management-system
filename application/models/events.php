<?php
class events extends CI_Model{
   function create($edata){
     $this->db->insert('Event',$edata);
   }
   function fetch(){
       $this->db->select('*');
       $res = $this->db->get('Event');
       return $res->result();
   }
}