<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Member extends Coco_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('date');
	}

	public function index(){
		if (!$this->ion_auth->logged_in()){
			//-- jika bukan admin maka ke login lagi
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect('mimin/login','refresh');
		}elseif(!$this->ion_auth->is_admin()){
			redirect('/','refresh');
		}else{
			$this->title="Member Page | Mimin Coco Bean Bags";
			$data['a']="";
			$data['query']= $this->user_model->getMember();
			$this->_renderMimin('mimin/_member',$data);
		}
	}
}