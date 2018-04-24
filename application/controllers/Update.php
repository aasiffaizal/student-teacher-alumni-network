<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Update extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Project_model','',TRUE);
        $this->load->model('Specialise_model','',TRUE);
        $this->load->model('Updatemodel','',TRUE);

    }
    function index()
    {
    	
    	$sess_array = $this->session->userdata('logged_in');
    	$username=$sess_array['username'];
    	$Type=$sess_array['Type'];
    	$info['record']=$this->Project_model->details($username);
    	if($Type=='Student')
        {
        $info['details']=$this->Specialise_model->student_details($username);
    	$this->load->view("profile_update",$info);
        }
        if($Type=='Alumni')
        {
        $info['details']=$this->Specialise_model->alumni_details($username);
        $this->load->view("profile_update_alumni",$info);
        }
        if($Type=='Teacher')
        {
        $info['details']=$this->Specialise_model->teacher_details($username);
        $this->load->view("profile_update_teacher",$info);
        }


    }
    function uprof()
{
$sess_array = $this->session->userdata('logged_in');
      $username=$sess_array['username'];
      $Type=$sess_array['Type'];
      $Fname=$this->input->post('sub', TRUE);
      $target_dir = "C:\wamp64\www\stan\assets\uploads\dp";
      $fileToUpload = "http://localhost/stan/assets/uploads/dp" . basename($_FILES["fileToUpload"]["name"]);
      if($fileToUpload!="http://localhost/stan/assets/uploads/dp")
    {
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $file_tmp=$_FILES["fileToUpload"]["tmp_name"];
      $uploadOk = 1;
      
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["sub"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        
        if($check !== false) {
        move_uploaded_file($file_tmp,$target_file);
        $uploadOk = 1;
        } 
        else {
        echo "File is not an image.";
        $uploadOk = 0;
        }
    }
}
else
 $fileToUpload=$Fname;
    
      if($Type=="Student")
  $spl = array (
        'Name' => $this->input->post('Name', TRUE),
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
    if($Type=="Teacher")
        $spl = array (
        'Name' => $this->input->post('Name', TRUE),
        'Department' => $this->input->post('Department', TRUE),
        'Designation' => $this->input->post('Designation', TRUE),
        'Subjects' => $this->input->post('Subjects', TRUE)
        
        );
    if($Type=="Alumni")
  $spl = array (
        'Name' => $this->input->post('Name', TRUE),
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
  
  $gen = array (
        'Name' => $this->input->post('Name', TRUE),
        'Gender' => $this->input->post('Gender', TRUE),
        'email' => $this->input->post('email', TRUE),
        'dob' => $this->input->post('dob', TRUE),
        'YearofJoining' => $this->input->post('YearofJoining', TRUE),
        'Type' => $Type,
        'DP' => $fileToUpload
        );
  if($Type=="Student")
  $mes=$this->Updatemodel->update_student($username,$spl,$gen);
else if($Type=="Teacher")
  $mes=$this->Updatemodel->update_Teacher($username,$spl,$gen);
else if($Type=="Alumni")
  $mes=$this->Updatemodel->update_Alumni($username,$spl,$gen);
  if($mes)
  redirect("Login","refresh");
  
  //else
    //redirect("Home","refresh");
}
}