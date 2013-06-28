<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	
	/*
	Class       :: UI
	Description :: This class library creates element with or without data in views dynamically.
	We have to call with name and type of input required
	Date        :: 26th June 2013

	*/
	
class UI 
{
	public function handle_UI($param,$element)
	{
		
		switch ($element)
		{
			case 'dropdown':
						
						break;
			case 'checkbox':
						
						break;
			case 'radio':
						echo '<input type="radio" value='.$param.'>';
						break;
			case 'text':
						echo '<input type="text" value='.$param.'>';
						break;
			case 'readonly':
						echo '<input type="text" readonly value='.$param.'>';
						break;
			case 'file':
						echo '<input type="file" name='.$param.' size="20" />';
						break;			
						
		}
		
	}
}
?>