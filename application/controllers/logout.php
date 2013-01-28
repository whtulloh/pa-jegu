<?php

class Logout extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('session');
	}
	function index(){
		$this->data['title'] = "Logout";
		
		//log the user out
		$logout = $this->ion_auth->logout();

		//redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		echo '<script>javascript:history.go(-1);</script>';
	}
}