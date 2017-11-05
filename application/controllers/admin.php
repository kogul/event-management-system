<?php

class admin extends CI_Controller{
    function index(){
        if($this->session->userdata('admin')){
            header("Location: /admin/panel");
        }
        $this->load->view('admin-header');
        $this->load->view('admin-login');
    }
    function login(){
        $this->load->model('admins');
        $username = $this->input->post('username',true);
        $pass = $this->input->post('pass',true);
        $adata = $this->admins->login($username,$pass);
        if(!empty($adata)){
            $adata['admin'] = true;
            $this->session->set_userdata($adata);
            header("Location: /admin/panel");
        }else{
            $this->load->view('admin-header');
            $this->load->view('admin-login');
            echo "<script>alert('Invalid credentials')</script>";
        }
    }
    function panel(){
        if(!$this->session->userdata('admin')){
            header("Location: /admin/");
        }
        $this->load->model('admins');
        $events = $this->admins->fetchAllEvent();
        foreach ($events as $i=>$event){
          $org = $this->admins->orgData($event['o_id']);
          $count = $this->admins->countPart($event['e_id']);
          $events[$i]['o_name'] = $org['name'];
          $events[$i]['count'] = $count;
        }
        $data['events'] = $events;
        $this->load->view('panel-header');
        $this->load->view('panel',$data);
    }
    function delEvent(){
        $e_id = $this->input->get('e_id');
        $this->load->model('admins');
        $this->admins->deleteEvent($e_id);
        header("Location: /admin/panel");
    }
    function logout(){
        $this->session->sess_destroy();
        header('Location: /user/index');
    }
}