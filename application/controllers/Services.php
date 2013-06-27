<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{	
		$this->load->view('Users');
		$this->load->view('all_users');
	}
	
	public function users()
	{	
		$this->load->model('Services_model');
		$user_info=$this->Services_model->users();
		$users['data']=json_encode($user_info);
		$this->load->view('Users');
		$this->load->view('all_users',$users);
	}
	public function users_by()
	{	
		$this->load->model('Services_model');
		$userID=$this->uri->segment(4);								//retrieves GET parameters from URL
		$user_info=$this->Services_model->users_by($userID);
		$users['data']=json_encode($user_info);
		$this->load->view('Users');
		$this->load->view('all_users',$users);
	}
	
	
	
}

/* End of file services.php */
/* Location: ./application/controllers/services.php */