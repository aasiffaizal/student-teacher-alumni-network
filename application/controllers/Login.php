<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Project_model','',TRUE);
    $this->load->model('Updatemodel','',TRUE);
  }

  function index()
  {
if($this->session->userdata('logged_in'))
{
  $sess_array = $this->session->userdata('logged_in');
  $a = $sess_array['No'];
  //$this->load->view('specialise_student_view');
  //$this->data['message']=$this->Project_model->message($a) ;

  //$this->load->view('welcome_view',$this->data);
  redirect("college_newsfeed","refresh");
}
else
{   
$this->load->helper('form');
   $this->load->view('Project_loginview');
} 
 }
 function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('Login', 'refresh');
  }

function reg()
  {
    if($this->session->userdata('logged_in'))
{
$this->load->view('welcome_view', 'refresh');
}
else
{   
$this->load->helper('form');
   $this->load->view('Project_regview');
} 

  }
function inbox()
{
  echo "hi";
  $sess_array = $this->session->userdata('logged_in');
      $No = $sess_array['No'];
      $info['post']=$this->Project_model->messagedisplay($No);
      $this->Updatemodel->messageset($No);
      $this->load->view("message",$info);
}



}


?>
