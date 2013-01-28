<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Dashboard extends Coco_Controller{

	function index(){

		if (!$this->ion_auth->logged_in()){
			//redirect them to the login page
			$this->data['title']="Login";
			$this->data['message'] = "<section class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Maaf, Anda belum Log in. Silakan Log in terlebih dahulu.</strong></section>";
			$this->load->view('pengunjung/_login',$this->data);
		}else{
			$this->title = "Dashboard | Coco Bean Bags";
			$this->keywords = "";
			$this->description = "";
			$this->javascript = array("bootstrap.js");

			$data['hello'] = $this->session->userdata('username');

			$this->_renderMember('member/_dashboard',$data);
		}
	}

	function coba(){
		if (!$this->ion_auth->logged_in()){
			//redirect them to the login page
			$this->data['title']="Login";
			$this->data['message'] = "<section class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Maaf, Anda belum Log in. Silakan Log in terlebih dahulu.</strong></section>";
			$this->load->view('pengunjung/_login',$this->data);
		}else{
			$this->title = "Dashboard | Coco Bean Bags";
			$this->keywords = "";
			$this->description = "";
			$this->javascript = array("bootstrap.js");

			$data['hello'] = $this->session->userdata('username');

			$this->_renderMember('member/_cobaDashboard',$data);
		}	
	}
}