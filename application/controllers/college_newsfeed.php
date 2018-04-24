<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class college_newsfeed extends CI_Controller {

    function __construct() {
        parent::__construct();
        
         $this->load->helper('form');
        $this->load->helper('url');
	

    }
    
function index()
{ $data=array();

$this->load->model('collegemodel');  
 $data['message']=$this->collegemodel->getinfo();
 $this->load->view('college_page_view', $data);


}
}