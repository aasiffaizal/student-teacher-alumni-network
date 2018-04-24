<?php
Class Project_model extends CI_Model

{

function __construct() {
parent::__construct();
}
	function login($username, $password)
	{
		$this -> db -> select('*');
		$this -> db -> from('login');
		$this -> db -> where('username = ' . "'" . $username . "'"); 
		$this -> db -> where('password = ' . "'" . $password. "'"); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	function signup($data)
	{
		$this->db->insert('login', $data);
	}
	function signupstd($data)
	{
		$this->db->insert('student', $data);
	}
	function signupalumni($data)
	{
		$this->db->insert('alumni', $data);
	}
	function signupteacher($data)
	{
		$this->db->insert('teacher', $data);
	}
	function username($username)
	{
		$this-> db -> select('username');
		$this-> db -> from('login');
		$this-> db-> where('username ='."'".$username."'");
		$this-> db-> limit(1);

		$query=$this-> db-> get();

		if($query -> num_rows()==1)
			return $query -> result();
		else
			return false;
	}
	function messagedisplay($No)
	{
		$this->db->select('*');
		$this->db->from('message');
		$this->db->where('Reciever='.$No);
		
		$query=$this->db->get();
		if($query -> num_rows()>0)
		{
		return $query->result();
		}
		
	}
	function message($data)
	{
		$this->db->insert('message', $data);
	}

	function messageno($No)
	{
		$this->db->select('*');
		$this->db->from('message');
		$this->db->where('Reciever='.$No);
		
		$query=$this->db->get();
		if($query -> num_rows()>0)
		{
		return $query -> num_rows();
		}
	}
	function details($username)
	{
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where('username='."'".$username."'");
		$query=$this->db->get();
		if($query -> num_rows()>0)
		{
		return $query->result();
		}
	}
	function ret_type($username)
	{
		$this->db->select('Type');
		$this->db->from('login');
		$this->db->where('username='."'".$username."'");
		$query=$this->db->get();
		if($query -> num_rows()==0)
		{
		return $query->result();
		}
	}

	function gohome($username)
	{
		$this -> db -> select('*');
		$this -> db -> from('login');
		$this -> db -> where('username = ' . "'" . $username . "'"); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
}
?>
