<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Coco_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index(){
			$this->title = "Dashboard";
			$data['hello'] = $this->session->userdata('username');
			$data['total_member'] = $this->user_model->getMember()->num_rows();
			$this->_renderMimin('mimin/_dashboard',$data);
	}
}

/* End of file dashboard.php */
/* Location : application/controllers/mimin/dashboard.php */