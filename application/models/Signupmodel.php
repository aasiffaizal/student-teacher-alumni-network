<?php
class Signupmodel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

function getdetails($data)
{
$this->db->insert('user', $data);
}



}
