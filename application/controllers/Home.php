<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Project_model','',TRUE);
        $this->load->model('Specialise_model','',TRUE);

    }
    function index()
    {
    	$sess_array = $this->session->userdata('logged_in');
  		$No = $sess_array['No'];
  		$Type=$sess_array['Type'];
  		$username=$sess_array['username'];
      $info['message']=$this->Project_model->messageno($No);
  		if($Type=='Student')
  			$info['details']=$this->Specialise_model->student_details($username);
  		else if($Type=='Teacher')
  			$info['details']=$this->Specialise_model->teacher_details($username);
  		else if($Type=='Alumni')
  			$info['details']=$this->Specialise_model->alumni_details($username);
  		$info['record']=$this->Project_model->details($username);
    	$this->load->view("user_profile_view",$info);
    }
    function search()
{
  $sess_array = $this->session->userdata('logged_in');
      $No = $sess_array['No'];
      $Type=$sess_array['Type'];
      $username=$sess_array['username'];
      if($Type=='Student')
        $info['details']=$this->Specialise_model->student_details($username);
      else if($Type=='Teacher')
        $info['details']=$this->Specialise_model->teacher_details($username);
      else if($Type=='Alumni')
        $info['details']=$this->Specialise_model->alumni_details($username);
      $info['record']=$this->Project_model->details($No);
      $this->load->view("searchresultsview",$info);
}
}