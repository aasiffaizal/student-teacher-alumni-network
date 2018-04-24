<?php
Class Specialise_model extends CI_Model

{

function __construct() {
parent::__construct();
}
	
	function student_details($username)
	{
		$this -> db -> select('*');
		$this -> db -> from('student');
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
	function teacher_details($username)
	{
		$this -> db -> select('*');
		$this -> db -> from('teacher');
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
	function alumni_details($username)
	{
		$this -> db -> select('*');
		$this -> db -> from('alumni');
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
