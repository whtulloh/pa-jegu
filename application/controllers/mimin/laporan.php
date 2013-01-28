<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends Coco_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->title= "Laporan";
		$data['usa']="";
		$this->_renderMimin('mimin/_laporan',$data);
	}
}