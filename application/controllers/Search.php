<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Project_model','',TRUE);
        $this->load->model('Specialise_model','',TRUE);
        $this->load->model('Search_model','',TRUE);

    }
    
    function index()
{
  $sess_array = $this->session->userdata('logged_in');
      $No = $sess_array['No'];
      $Type=$sess_array['Type'];
      //$Year=$sess_array['Year'];
      $username=$sess_array['username'];
      if($Type=='Student')
        $info['details']=$this->Specialise_model->student_details($username);
      else if($Type=='Teacher')
        $info['details']=$this->Specialise_model->teacher_details($username);
      else if($Type=='Alumni')
        $info['details']=$this->Specialise_model->alumni_details($username);
      $info['record']=$this->Project_model->details($username);
      $Name=$this->input->post('Name', TRUE);
      if (is_numeric($Name))
        $info['post']=$this->Search_model->getdetailsYearwise($Name);
         
      else
        $info['post']=$this->Search_model->getdetails($Name);

      if(empty($info['post']))
      {
        //$info['post']=$this->Search_model->getdetailsYearwise($Year);
          //if(empty($info['post']))
          //{
        $info['post']=1;
        $info['message']="Sorry , No Result";
          //}
  }
      $this->load->view("searchresultsview",$info);
}
function viewprof($Type,$username)
    {
      $info['record']=$this->Project_model->details($username);
      $sess_array = $this->session->userdata('logged_in');
      $loguname=$sess_array['username'];
      $info['loguname']=$loguname;
      if($Type=='Student')
        {$info['details']=$this->Specialise_model->student_details($username);
          $this->load->view("prof_view",$info);
        }
      else if($Type=='Teacher')
      {
        $info['details']=$this->Specialise_model->teacher_details($username);
        $this->load->view("prof_view",$info);
      }
      else if($Type=='Alumni')
      {
        $info['details']=$this->Specialise_model->alumni_details($username);
      $this->load->view("prof_view",$info);
      }
      
      
    }
}