<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Beanbag extends Coco_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('cart');
		$this->load->model('barang_model');
	}

	public function all(){
		$this->title = "Product All | Coco Bean Bags";
		$this->keywords = "coco bean bags, bean bag indonesia";
		$this->description = "coco bean bags, bean bag indonesia";
		$this->javascript = array("bootstrap.min.js");
		
		$data['query'] = $this->barang_model->getBeanAll();
		//$this->load->view('template/breadcrumbs',true);
		
		$this->_render('pengunjung/_bbAll',$data);
	}

	public function category($id = NULL){

	}
}