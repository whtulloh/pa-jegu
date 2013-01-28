<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends Coco_Controller {
	
	public function index(){	
		
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
		$this->title = "about";
		$this->keywords = "arny, arnodo";
		$this->description = "cek cek, cek cek";
		$this->javascript = array('bootstrap.js');
		
		$data['usa'] = "About";
		
		$this->_render('pengunjung/_about',$data);
	}
	
}