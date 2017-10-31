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
        if($this->session->userdata('u_id')) {
            header('Location:/user/dashboard');
        }
    }
    function login(){
        if($_POST){
            $u_email = $_POST['uname'];
            $u_pass = $_POST['pass'];
            $this->load->model('users');
            $udata = $this->users->login($u_email,$u_pass);
            $this->session->set_userdata($udata);
            if(!empty($udata)){
                header("Location: /user/dashboard");
            }else{
                $data['pagetitle'] = "Home";
                $data['userdata'] = $this->session->userdata();
                $this->load->view('header',$data);
                $this->load->view('navbar');
                $this->load->view('carousel');
                $this->load->view('login');
                $this->load->view('team');
                echo "<script>
                 alert('Invalid Creds');
                 </script>";
            }
        }
    }
    function dashboard(){
        $this->load->model('users');
        $this->load->model('events');
        $allPart = $this->events->allPart($this->session->userdata('u_id'));
        $data['allPart'] = $allPart;
        $data['phone'] = $this->users->getPhone($this->session->userdata('u_id'));
        $data['udata'] = $this->session->userdata();
        $data['events'] = $this->events->fetch();
        $org_id = $this->users->orgData($this->session->userdata('u_id'));
        $data['pvtEvents'] = $this->events->fetchPvt($org_id['o_id']);
        $data['locations'] = $this->users->getlocation();
         $this->load->view('dashboard_header');
         $this->load->view('dashboard',$data);
    }
    function create(){
        $target = '/event-management-system/application/Assets/Images/';
        $this->load->model('events');
        $this->load->model('users');
        if($_POST){
           $name = $this->input->post('event_name',true);
           $date = $this->input->post('event_date',true);
           $location = $this->input->post('location',true);
           $category = $this->input->post('category');
            $time = $this->input->post('event_time',true);
            $max_part = $this->input->post('max_acc',true);
            $phone = $this->input->post('o_phone',true);
            $entry_fee = $this->input->post('entry_fee',true);
            $org_id = $this->users->orgData($this->session->userdata('u_id'));
            $tmp_img = $_FILES['event_pic']['tmp_name'];
           $img = $_FILES['event_pic']['name'];
           echo $org_id['o_id'];
           $edata =array(
               'name' => $name,
               'picture' => $img,
               'location_id' => $location,
               'category' => $category,
               'date' => $date,
               'e_time'=>$time,
               'max_partic'=>$max_part,
               'o_id'=>$org_id['o_id'],
               'fees'=>$entry_fee,
               'o_phone'=>$phone
           );
           $this->events->create($edata);
           header('Location: /user/dashboard');
            move_uploaded_file($tmp_img,$target.$img);
        }
    }
    function register(){
        $msg ='';
        if($_POST){
            $u_name = $this->input->post('uname',true);
            $phnum = $this->input->post('ph_num',true);
            $u_email = $this->input->post('u_mail',true);
            $city = $this->input->post('u_city',true);
            $state = $this->input->post('u_state',true);
            $zip = $this->input->post('u_zip',true);
            $pass = $this->input->post('psw',true);
            $conpass = $this->input->post('cpsw',true);
            $this->load->model('users');
            $check= $this->users->fetch($u_email);
            if(empty($check)){
            if(strlen($pass)>6){
                if($pass == $conpass){
                  if(is_numeric($phnum)){
                      $udata = array(
                          'u_name' => $u_name,
                          'u_pass' => $pass,
                          'email' => $u_email,
                          'city' => $city,
                          'state'=>$state,
                          'zipcode'=>$zip
                      );
                      $this->users->insert($udata);
                      $udata = $this->users->login($u_email,$pass);
                      $odata = array(
                          'name'=>$u_name,
                          'email' => $u_email,
                          'u_id' => $udata['u_id']
                      );
                      $this->users->insertOrg($odata);
                      unset($udata['u_pass']);
                     $this->users->insertPhone(array('code'=>$zip,
                         'number' => $phnum,
                         'u_id' => $udata['u_id']
                         ));
                     $this->session->set_userdata($udata);
                     header('Location: /user/dashboard');
                  }else{
                      $msg = "Phone Number should only be numbers";
                  }
                }else{
                    $msg = "Enter the same password in both the fields";
                }
            }else{
                $msg = "Password should be more than 6 characters";
            }
            }else{
                $msg ="Already registered";
            }
            if($msg){

                $data['pagetitle'] = "Home";
                $data['userdata'] = $this->session->userdata();
                $this->load->view('header',$data);
                $this->load->view('navbar');
                $this->load->view('carousel');
                $this->load->view('login');
                $this->load->view('team');
                echo "<script>
                 alert('".$msg."');
                 </script>";
            }
        }
    }
    function regEvent(){
        $this->load->model('users');
        $this->load->model('events');
        $e_id =  $this->input->get('eid');
        $u_id = $this->session->userdata('u_id');
        $check = $this->events->fetchPart($e_id,$u_id);
        if(empty($check)) {
            $event = $this->events->fetchEvent($e_id);
            $data = array(
                'name' => $event['name'],
                'bill' => $event['fees'],
                'u_id' => $u_id,
                'e_id' => $e_id
            );
            $this->events->insertPart($data);
            $allPart = $this->events->allPart($this->session->userdata('u_id'));
            $data['allPart'] = $allPart;
            $data['phone'] = $this->users->getPhone($this->session->userdata('u_id'));
            $data['udata'] = $this->session->userdata();
            $data['events'] = $this->events->fetch();
            $org_id = $this->users->orgData($this->session->userdata('u_id'));
            $data['pvtEvents'] = $this->events->fetchPvt($org_id['o_id']);
            $data['locations'] = $this->users->getlocation();
            $this->load->view('dashboard_header');
            $this->load->view('dashboard',$data);
            echo "<script>alert('Registered Successfully');</script>";
        }else{
            $allPart = $this->events->allPart($this->session->userdata('u_id'));
            $data['allPart'] = $allPart;
            $data['phone'] = $this->users->getPhone($this->session->userdata('u_id'));
            $data['udata'] = $this->session->userdata();
            $data['events'] = $this->events->fetch();
            $org_id = $this->users->orgData($this->session->userdata('u_id'));
            $data['pvtEvents'] = $this->events->fetchPvt($org_id['o_id']);
            $data['locations'] = $this->users->getlocation();
            $this->load->view('dashboard_header');
            $this->load->view('dashboard',$data);
            echo "<script>alert('You have registered for this event already');</script>";
        }
    }
    function remove(){
            $e_id = $this->input->get('eid');
            $u_id = $this->session->userdata('u_id');
            $this->load->model('events');
            $this->events->unPart($u_id,$e_id);
            echo "<script>alert('You have opted out of the event successfully');</script>";
            header('Location: /user/dashboard');
    }
    function delEvent(){
            $this->load->model('users');
            $this->load->model('events');
            $e_id = $this->input->get('eid');
            $org_id = $this->users->orgData($this->session->userdata('u_id'));
            $this->events->deleteEvent($org_id['o_id'],$e_id);
            header('Location: /user/dashboard');
    }
    function invite(){
        $mailTo = $this->input->get('email');
        $e_id = $this->input->get('e_id');
        $this->load->model('events');
        $event = $this->events->fetchEvent($e_id);
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'coder30597@gmail.com', // change it to yours
            'smtp_pass' => 'swagmeansitsme', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $msg = "<p>Hi there,</p><p>You have been invited to ".$event['name']." </p><p>Reach ".$event['location_id']." on ".$event['date']." at ".$event['e_time'].". ".$this->session->userdata('u_name')." will be looking forward to your arrival.</p>";
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('coder30597@gmail.com'); // change it to yours
        $this->email->to($mailTo);// change it to yours
        $this->email->subject('Event Invitation');
        $this->email->message($msg);
        if ($this->email->send()) {
            echo "<script>alert('Invitation has been sent.'); window.location='/user/dashboard';</script>";
        } else {
            show_error($this->email->print_debugger());
        }

    }
    function logout(){
        $this->session->sess_destroy();
        header('Location: /user/index');
    }
}