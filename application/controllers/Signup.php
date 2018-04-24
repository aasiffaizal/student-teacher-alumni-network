<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signup extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Project_model','',TRUE);
    }

 function index() 
  {
    $data = array (
        'Name' => $this->input->post('Name', TRUE),
        'Gender' => $this->input->post('Gender', TRUE),
        'email' => $this->input->post('email', TRUE),
        'username' => $this->input->post('username', TRUE),
        'password' => md5($this->input->post('password', TRUE)),
        'dob' => $this->input->post('dob', TRUE),
        'YearofJoining' => $this->input->post('YearofJoining', TRUE),
        'Type' => $this->input->post('Type', TRUE),
        );
    $info= array (
        'Name' => $this->input->post('Name', TRUE),
        'Gender' => $this->input->post('Gender', TRUE),
        'email' => $this->input->post('email', TRUE),
        'username' => $this->input->post('username', TRUE),
        'password' => md5($this->input->post('password', TRUE)),
        'dob' => $this->input->post('dob', TRUE),
        'YearofJoining' => $this->input->post('YearofJoining', TRUE),
        'Type' => $this->input->post('Type', TRUE)
        );
    
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('Name', 'Name', 'required');
    $this->form_validation->set_rules('Gender', 'Gender', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
    $this->form_validation->set_rules('YearofJoining', 'Year of Joining', 'required');
    $this->form_validation->set_rules('Type', 'Type', 'required');
    if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
      $this->load->view('Project_regview');
    }
    else
    {
      
      
      $Type=$this->input->post('Type', TRUE);
      //$this->load->model('Project_model/signup');    
      $this->Project_model->signup($data);
      if($Type=='Student')
      $this->load->view('specialise_student_view',$info);//or use $info
      if($Type=='Alumni')
      $this->load->view('specialise_alumni_view',$info);
      if($Type=='Teacher')
      $this->load->view('specialise_teacher_view',$info);
    }
  }
  function check_username($username)
  {
    $result = $this->Project_model->username($username);
    if($result)
    {
      $this->form_validation->set_message('check_username', "The username already exist.");
      return FALSE;
    }
    else 
      return TRUE;
  }

}

