<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Project_model','',TRUE);
  }
function index()
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
  function student($username)
  {
    $data = array (
        'Name' => $this->input->post('Name', TRUE),
        'username' => $username,
        'Year' => $this->input->post('Year', TRUE),
        'Branch' => $this->input->post('Branch', TRUE),
        'Class' => $this->input->post('Class', TRUE),
        'Skills' => $this->input->post('Skills', TRUE),
        'MiniPro' => $this->input->post('MiniPro', TRUE),
        'MiniProO' => $this->input->post('MiniProO', TRUE),
        'Sem' => $this->input->post('Sem', TRUE),
        'SemO' => $this->input->post('SemO', TRUE),
        'MainPro' => $this->input->post('MainPro', TRUE),
        'MainProO' => $this->input->post('MainProO', TRUE),
        'Company' => $this->input->post('Company', TRUE),
        'Designation' => $this->input->post('Designation', TRUE),
        );
    $this->Project_model->signupstd($data);
    $result= $this->Project_model->gohome($username);
    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
   'No' => $row->No,
    'username' => $row->username,
  'Name'=>$row->Name,
  'Gender'=>$row->Gender,
  'email'=>$row->email,
  'dob'=>$row->dob,
  'YearofJoining'=>$row->YearofJoining,
  'Type'=>$row->Type
        );
        $this->session->set_userdata('logged_in', $sess_array);
      }
    }
    redirect("college_newsfeed","refresh");
  }


  function alumni($username)
  {
    $data = array (
        'Name' => $this->input->post('Name', TRUE),
        'username' => $username,
        'GradYear' => $this->input->post('GradYear', TRUE),
        'Branch' => $this->input->post('Branch', TRUE),
        'Skills' => $this->input->post('Skills', TRUE),
        'MiniPro' => $this->input->post('MiniPro', TRUE),
        'MiniProO' => $this->input->post('MiniProO', TRUE),
        'Sem' => $this->input->post('Sem', TRUE),
        'SemO' => $this->input->post('SemO', TRUE),
        'MainPro' => $this->input->post('MainPro', TRUE),
        'MainProO' => $this->input->post('MainProO', TRUE),
        'Company' => $this->input->post('Company', TRUE),
        'Designation' => $this->input->post('Designation', TRUE),
        'Experience' => $this->input->post('Experience', TRUE)
        );
    $this->Project_model->signupalumni($data);
    $result= $this->Project_model->gohome($username);
    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
   'No' => $row->No,
    'username' => $row->username,
  'Name'=>$row->Name,
  'Gender'=>$row->Gender,
  'email'=>$row->email,
  'dob'=>$row->dob,
  'YearofJoining'=>$row->YearofJoining,
  'Type'=>$row->Type
        );
        $this->session->set_userdata('logged_in', $sess_array);
      }
    }
    redirect("Home","refresh");
  }


  function teacher($username)
  {
    $data = array (
        'Name' => $this->input->post('Name', TRUE),
        'username' => $username,
        'Designation' => $this->input->post('Designation', TRUE),
        'Department' => $this->input->post('Department', TRUE),
        'Subjects' => $this->input->post('Subjects', TRUE)
        
        
        );
    $this->Project_model->signupteacher($data);
    $result= $this->Project_model->gohome($username);
    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
   'No' => $row->No,
    'username' => $row->username,
  'Name'=>$row->Name,
  'Gender'=>$row->Gender,
  'email'=>$row->email,
  'dob'=>$row->dob,
  'YearofJoining'=>$row->YearofJoining,
  'Type'=>$row->Type
        );
        $this->session->set_userdata('logged_in', $sess_array);
      }
    }
    redirect("Home","refresh");
  }


}

?>
