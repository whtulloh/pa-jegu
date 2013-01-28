<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Coco_Controller {
	
	function __construct(){
		parent::__construct();
		
	}

	public function index(){	
		
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
		$this->title = "Coco Bean Bags";
		$this->keywords = "coco bean bags, bean bag indonesia";
		$this->description = "coco bean bags, bean bag indonesia";
		$this->javascript = array("bootstrap.min.js");
		
		$data['usa'] = '';
		
		$this->_render('member/_home',$data);
	}
	
}