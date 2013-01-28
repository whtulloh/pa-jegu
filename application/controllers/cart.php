<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Cart extends Coco_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->helper('form');
		$this->load->model('barang_model');
	}

	function index(){
		$this->title="Silakan Lihat Pesanan Anda | Coco Bean Bags";
		$this->javascript= array('bootstrap.js');
		if($this->cart->total_items() > 0){
			$data['$total']=$this->cart->total_items();
			$this->_render('pengunjung/_cart',$data);
		}else{
			$data['total'] = $data['$total']=$this->cart->total_items();;
			$this->_render('pengunjung/_cart',$data);
		}
	}

	function addItem($id){
		$qty=$this->input->post('qty');
		$query=$this->barang_model->detailBarang($id);
		foreach ($query as $brg) {
			$data = array(
	               'id'      => $id,
	               'qty'     => 1,
	               'price'   => $brg->total_harga,
	               'name'    => $brg->nama,
	               'options' => array('Color' => 'Red')
	            );
		}
		$this->cart->insert($data);
		redirect('cart');
	}

}