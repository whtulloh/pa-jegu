<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coco_Controller extends CI_Controller{
	
	//Page info
	protected $data = Array();
	protected $pageName = FALSE;
	protected $template = "_main";
	protected $hasNav = TRUE;
	//Page contents
	protected $javascript = array();
	protected $javatop = array();
	protected $javatext = array();
	protected $carousel = array();
	protected $css = array();
	protected $fonts = array();
	//Page Meta
	protected $title = FALSE;
	protected $description = FALSE;
	protected $keywords = FALSE;
	protected $author = FALSE;
	
	function __construct(){	

		parent::__construct();
		$this->load->library(array('ion_auth','cart'));
		$this->data["uri_segment_1"] = $this->uri->segment(1);
		$this->data["uri_segment_2"] = $this->uri->segment(2);
		$this->title = $this->config->item('site_title');
		$this->description = $this->config->item('site_description');
		$this->keywords = $this->config->item('site_keywords');
		$this->author = $this->config->item('site_author');
		
		$this->pageName = strToLower(get_class($this));
	}
	 
	
	protected function _render($view,$var){
		//static
		$toTpl["javascript"] = $this->javascript;
		$toTpl['javatop'] = $this->javatop;
		$toTpl["javatext"] = $this->javatext;
		$toTpl["css"] = $this->css;
		$toTpl["fonts"] = $this->fonts;
		
		//meta
		$toTpl["title"] = $this->title;
		$toTpl["description"] = $this->description;
		$toTpl["keywords"] = $this->keywords;
		$toTpl["author"] = $this->author;

		//carousel
		$toCar["carousel"] = $this->carousel;
		
		//data
		$toBody["content_body"] = $this->load->view($view,array_merge($this->data,$toTpl,$var),true);
		

		/**
		 * Buat Coco developer: tambahin if member then render nya ke member page 
		 * Dan buat login diganti sama nama user coy
		 **/
		//nav menu
		if($this->hasNav){
			$this->load->helper("nav");
			$toMenu["pageName"] = $this->pageName;
			if($this->ion_auth->logged_in()){
				$toMenu["user"] = $this->session->userdata('username');
				$toHeader["nav"] = $this->load->view("template/member/_nav",$toMenu,true);
			}else{
				$toHeader["nav"] = $this->load->view("template/pengunjung/_nav",$toMenu,true);
			}
		}

		
		$toBody["header"] = $this->load->view("template/pengunjung/_header",$toHeader,true);
		if ($this->pageName=="login") {
			$toBody["sidebar"] = $this->load->view("template/pengunjung/_sideLogin",'',true);
		}elseif($this->pageName=="register"){
			$toBody["sidebar"] = $this->load->view("template/pengunjung/_sideRegister",'',true);
		}else{
			$toBody["sidebar"] = $this->load->view("template/pengunjung/_sidebar",'',true);
		}
		if ($this->pageName== "home") {
			$toBody["carousel"] = $this->load->view("template/pengunjung/_carousel",'',true);
		}else{
			$toBody["carousel"] = "";
		}
		$toBody["footer"] = $this->load->view("template/pengunjung/_footer",'',true);
		$toTpl["body"] = $this->load->view("template/pengunjung/".$this->template,$toBody,true);
		
		
		//render view
		$this->load->view("template/pengunjung/_skeleton",$toTpl);
	}

	protected function _renderMember($view,$var){
	
		if (!$this->ion_auth->logged_in()){
			// jika belom login maka login dulu
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect('mimin/login','refresh');
		}else{
			//static
			$toTpl["javascript"] = $this->javascript;
			$toTpl['javatop'] = $this->javatop;
			$toTpl["javatext"] = $this->javatext;
			$toTpl["css"] = $this->css;
			$toTpl["fonts"] = $this->fonts;
			
			//meta
			$toTpl["title"] = $this->title;
			$toTpl["description"] = $this->description;
			$toTpl["keywords"] = $this->keywords;
			$toTpl["author"] = $this->author;
			
			//data
			$toBody["content_body"] = $this->load->view($view,array_merge($this->data,$toTpl,$var),true);
			

			/**
			 * Buat Coco developer: tambahin if member then render nya ke member page 
			 * Dan buat login diganti sama nama user coy
			 **/
			//nav menu
			if($this->hasNav){
				$this->load->helper("nav");
				$toMenu["pageName"] = $this->pageName;
				if($this->ion_auth->logged_in()){
					$toMenu["user"] = $this->session->userdata('username');
					$toHeader["nav"] = $this->load->view("template/member/_nav",$toMenu,true);
				}else{
					$toHeader["nav"] = $this->load->view("template/member/_nav",$toMenu,true);
				}
			}

			
			$toBody["header"] = $this->load->view("template/member/_header",$toHeader,true);
			$toBody["footer"] = $this->load->view("template/member/_footer",'',true);
			
			$toTpl["body"] = $this->load->view("template/member/".$this->template,$toBody,true);
			
			
			//render view
			$this->load->view("template/member/_skeleton",$toTpl);
		}
	}

	protected function _renderMimin($view,$var){
		
		if (!$this->ion_auth->logged_in()){
			// jika belom login maka login dulu
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect('mimin/login','refresh');
		}elseif(!$this->ion_auth->is_admin()){
			//-- jika bukan admin maka ke member
			redirect('/','refresh');
		}else{
			//static
			$toTpl["javascript"] = $this->javascript;
			$toTpl['javatop'] = $this->javatop;
			$toTpl["javatext"] = $this->javatext;
			$toTpl["css"] = $this->css;
			$toTpl["fonts"] = $this->fonts;
			
			//meta
			$toTpl["title"] = $this->title;
			$toTpl["description"] = $this->description;
			$toTpl["keywords"] = $this->keywords;
			$toTpl["author"] = $this->author;
			
			//data
			$toBody["content_body"] = $this->load->view($view,array_merge($this->data,$toTpl,$var),true);
			

			/**
			 * Buat Coco developer: tambahin if member then render nya ke member page 
			 * Dan buat login diganti sama nama user coy
			 **/
			//nav menu
			if($this->hasNav){
				$this->load->helper("nav");
				$toMenu["pageName"] = $this->pageName;
				$toMenu["user"] = $this->session->userdata('username');
				$toSidebar["nav"] = $this->load->view("template/mimin/_nav",$toMenu,true);
			}

			$toBody["sidebar"] = $this->load->view("template/mimin/_sidebar",$toSidebar,true);
			$toBody["header"] = $this->load->view("template/mimin/_header",'',true);
			$toBody["footer"] = $this->load->view("template/mimin/_footer",'',true);
			
			$toTpl["body"] = $this->load->view("template/mimin/".$this->template,$toBody,true);
			
			
			//render view
			$this->load->view("template/mimin/_skeleton",$toTpl);
		}

	}

}
