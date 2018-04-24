<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Message extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Project_model','',TRUE);
    }

 function send($No,$username,$Type) 
  {
    $sess_array = $this->session->userdata('logged_in');
      $sender=$sess_array['No'];
    $data = array (
        'message' => $this->input->post('message', TRUE),
        'Reciever' => $No,
        'Sender' => $sender
        );
    $this->Project_model->message($data);
    redirect("Search/viewprof/".$Type."/".$username);
  }
  

}

