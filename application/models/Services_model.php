<?php
class Services_model extends CI_Model
{
	function index()
	{	
		parent::Model();
	}

	/*
	Function    :: Get User
	Description :: get all users.
	Last update :: 26th June 2013
	Module      :: User Services
	*/
	function users()
	{		
			$query = $this->db->query("SELECT ID,username,email,usertype,addedOn,updatedOn FROM users");
			$data = $query->result_array();
			$this->load->library('parser');
			return $query->result();
	}
	
	/*
	Function    :: Get Users by param 
	Description :: get all users.
	Last update :: 26th June 2013
	Module      :: User Services
	*/
	function users_by($userID)
	{		
			$query = $this->db->query("SELECT ID,username,email,usertype,addedOn,updatedOn FROM users WHERE ID='".$userID."'");
			$data = $query->result_array();
			$this->load->library('parser');
			return $query->result();
	}
	
}

?>