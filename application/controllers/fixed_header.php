<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fixed_header extends CI_Controller {
	
	public function index(){	
		
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
		$this->load->view('_newHeader');
	}
	
}