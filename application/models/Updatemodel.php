<?php
class Updatemodel extends CI_Model{
var $user;

function __construct() {
parent::__construct();
}
function update_student($username,$spl,$gen)
{
   $this->db->where('username', $username);
    $this->db->update('login',$gen);
   $this->db->where('username', $username);
   //$this->db->where('username', $username);
   $this->db->update('student',$spl);
   //$this->db->where('username', $username);
return(True);

}
function update_Teacher($username,$spl,$gen)
{
   $this->db->where('username', $username);
    $this->db->update('login',$gen);
   $this->db->where('username', $username);
   //$this->db->where('username', $username);
   $this->db->update('teacher',$spl);
   //$this->db->where('username', $username);
return(True);

}
function update_Alumni($username,$spl,$gen)
{
   $this->db->where('username', $username);
    $this->db->update('login',$gen);
   $this->db->where('username', $username);
   //$this->db->where('username', $username);
   $this->db->update('alumni',$spl);
   //$this->db->where('username', $username);
return(True);

}

function updatedp($target_file)
{
    $this->db->update('login');
   $this->db->set('DP', $target_file);
   //$this->db->where('username', $username);
   $this->db->where('alumni',$spl);
   //$this->db->where('username', $username);
return(True);

}
function messageset($No)
{
    $this->db->update('login');
    $this->db->set('Read','1');
   $this->db->where('Reciever', $username);
    
    
return(True);

}
}
?>
