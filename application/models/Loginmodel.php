<?php
class Loginmodel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

function searchdetails($data)
{
$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('user');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) 
  {
   return 1;
    } 
else 
  {
  return 0;
  }
}




}
