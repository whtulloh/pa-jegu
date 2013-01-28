<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends Coco_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('cart');
		$this->load->model('barang_model');
	}

	public function index(){	
		
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
		$this->title = "Product All";
		$this->keywords = "coco bean bags, bean bag indonesia";
		$this->description = "coco bean bags, bean bag indonesia";
		$this->javascript = array("bootstrap.min.js");
		
		$config['base_url'] 	= 'http://localhost/cocobeanbags/';
		$config['total_rows'] 	= $this->site_model->get_all()->num_rows();
		$config['per_page']	= 9;
		$config['num_links']	= 3;
		$data['query'] = $this->barang_model->getAll();
		//$this->load->view('template/breadcrumbs',true);
		
		$this->_render('pengunjung/_product',$data);
	}
	
	public function beanbags(){	
		
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
		$this->title = "Bean Bag Products";
		$this->css= array('jquery.rating.css');
		$this->javatop = array('jquery.MetaData.js','jquery.rating.js');
		$this->keywords = "coco bean bags, bean bag indonesia";
		$this->description = "coco bean bags, bean bag indonesia";
		
		/*$config['base_url'] 	= 'http://localhost/cocobeanbags/'.$id.'/'.$order.'/'.$limit.'/';
		$config['total_rows'] 	= $this->site_model->get_all()->num_rows();
		$config['per_page']	= $limit;
		$config['num_links']	= 3;
		$data['query'] = $this->barang_model->getAll();*/
		$data['barang'] = $this->barang_model->viewBeanAll();
		

		$this->_render('pengunjung/_product',$data);
	}
	
	public function carpets(){	
		
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
		$this->title = "Carpet Products";
		$this->javatop = array('jquery.MetaData.js','jquery.rating.js');
		$this->keywords = "coco bean bags, bean bag indonesia";
		$this->description = "coco bean bags, bean bag indonesia";
		
		$data['barang'] = $this->barang_model->viewCarpetAll();
		
		$this->_render('pengunjung/_product',$data);
	}

	public function detail($id){
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
		$this->keywords = "coco bean bags, bean bag indonesia";
		$this->description = "coco bean bags, bean bag indonesia";
		$this->javascript = array("bootstrap.min.js");
		
		if($this->barang_model->cekID($id) == null){
			redirect('error/page_missing');
		}else{
			$data['query'] = $this->barang_model->detailBarang($id);
			foreach ($data['query'] as $brg) {
				$this->title = $brg->nama." | Coco Bean Bags";
			}
			$this->_render('pengunjung/_detailproduct',$data);
		}
	}

	public function ajax_rating($rate_id){
    echo $rate_id. " " .$this->uri->segment(4). " " .$this->uri->segment(5). " " .$this->uri->segment(6);
    
    } 
}