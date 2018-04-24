<?php
class Collegemodel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

function getinfo()
{
$query = $this->db->query("SELECT * FROM newsfeed;");

    return $query->result();
}



}
