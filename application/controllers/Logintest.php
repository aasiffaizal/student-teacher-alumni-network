<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logintest extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
 function index() {
        
        $this->load->view('loginview');
    }
function abc()
{$data= array('username'=> $this->input->post('username', TRUE),
  'password' => $this->input->post('password', TRUE) );

$this->load->model('loginmodel');    
 $a=$this->loginmodel->searchdetails($data);
if($a==0)echo"Invalid username/Password";
else if($a==1) echo"Welcome";


}

function cde()
{
$data = array (
  'username' => $this->input->post('username', TRUE),
  'password' => $this->input->post('password', TRUE),
  'dob' => $this->input->post('dob', TRUE),
  'emailid' => $this->input->post('emailid', TRUE),
  'yearofjoining' => $this->input->post('yearofjoining', TRUE),
  'gender' => $this->input->post('gender', TRUE),
  'type' => $this->input->post('type', TRUE),
  'name' => $this->input->post('name', TRUE)
);


 $this->load->model('signupmodel');    
 $this->signupmodel->getdetails($data);


}




}

