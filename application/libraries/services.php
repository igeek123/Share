<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	
	/*
	Class       :: UI
	Description :: This class library creates element with or without data in views dynamically.
				   We have to call with name and type of input required
	Date        :: 26th June 2013

	*/
	
class Services 
{
	public function user_details()
	{
		
		$CI =   &get_instance();
        $query  =   $CI->db->get('users');
        return $query->result();
		
	}
}
?>