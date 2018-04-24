<?php
class Search_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

function getdetails($Name)
{
$condition = "Name LIKE" . "'%" .$Name. "%'";
$this->db->select('*');
$this->db->from('login');
$this->db->where($condition);

$query = $this->db->get();

if ($query->num_rows() >=1) 
  {
    return $query->result();
    } 
else 
  {
  return null;
  }
}

function getdetailsYearwise($Name)
{

$this->db->select('*');
$this->db->from('login');
$this->db->where("YearofJoining",$Name);

$query = $this->db->get();

if ($query->num_rows() >=1) 
  {
    return $query->result();
    } 
else 
  {
  return null;
  }
}




}
