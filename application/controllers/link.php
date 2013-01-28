<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link extends Coco_Controller{
	function index(){
		$this->title = "Link | Coco Bean Bags";
		$this->keywords = "coco bean bags, bean bag indonesia";
		$this->description = "coco bean bags, bean bag indonesia";
		$this->javascript = array("bootstrap.min.js");
		
		$data['usa'] = "";
		$this->_render('pengunjung/_link',$data);
	}
}