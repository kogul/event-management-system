<?php
/**
 * Created by PhpStorm.
 * User: KOGUL
 * Date: 15-09-2017
 * Time: 19:47
 */
class user extends CI_Controller{
    function index(){
        $data['pagetitle'] = "Home";
        $data['userdata'] = $this->session->userdata();
        $this->load->view('header',$data);
        $this->load->view('navbar');
        $this->load->view('carousel');
        $this->load->view('login');
        $this->load->view('team');
    }
    function login(){
        if($_POST){
            $u_email = $_POST['uname'];
            $u_pass = $_POST['psw'];
            $this->load->model('users');
            $udata = $this->users->login($u_email,$u_pass);
            if(isset($udata)){
                echo "Logged in";
            }else{
                echo "Invalid Creds";
            }
        }
    }
}