<?php 
/**
 * 
 */
class Logout extends CI_Controller
{
	
	function __construct()
	{
			parent::__construct();
	}
	public function index()
	{
		$this->session->unset_userdata("user");
		redirect("login");
	}

}
?>
