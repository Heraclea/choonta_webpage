<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('aboutus_model');
		$this->load->model('home_model');
		$this->load->model('contactus_model');
		$this->load->model('products_model');
	}

	public function index(){	
		$data['seo'] = $this->home_model->get_seo();
		$data['head'] = $this->load->view('/template/head', $data, true);
		$data['home'] = $this->home_model->get_home();
		$data['categories'] = $this->home_model->get_categories();
		$data['branches'] = $this->contactus_model->get_branches();
		$data['brands'] = $this->aboutus_model->get_brands();
		$data['contact'] = $this->contactus_model->get_contact();
		$data['products'] = $this->products_model->get_all();
		$data['show_banner'] = false;

		$data['header'] = $this->load->view('/template/header-white', $data, true);
		$data['footer'] = $this->load->view('/template/footer', $data, true);
		$data['section'] = $this->load->view('/shop', $data, true); 
		
		$this->load->view('/template/index', $data);
	}

	public function category(){
		$data['seo'] = $this->home_model->get_seo();
		$data['head'] = $this->load->view('/template/head', $data, true);
		$data['home'] = $this->home_model->get_home();
		$data['categories'] = $this->home_model->get_categories();
		$data['branches'] = $this->contactus_model->get_branches();
		$data['brands'] = $this->aboutus_model->get_brands();
		$data['contact'] = $this->contactus_model->get_contact();

		if (str_replace('_', ' ', $this->uri->segment(3, 0)) == 'promociones') {
			$data['products'] = $this->products_model->get_sales();
			$data['show_banner'] = false;
		}else{
			$data['category'] = $this->products_model->get_category(str_replace('_', ' ', $this->uri->segment(3, 0)));
			$data['products'] = $this->products_model->get_by_category(str_replace('_', ' ', $this->uri->segment(3, 0)));
			$data['show_banner'] = true;
		}

		$data['header'] = $this->load->view('/template/header-white', $data, true);
		$data['footer'] = $this->load->view('/template/footer', $data, true);
		$data['section'] = $this->load->view('/shop', $data, true); 
		$this->load->view('/template/index', $data);
	}

	public function view(){
		$data['seo'] = $this->home_model->get_seo();
		$data['head'] = $this->load->view('/template/head', $data, true);
		$data['home'] = $this->home_model->get_home();
		$data['brands'] = $this->aboutus_model->get_brands();
		$data['categories'] = $this->home_model->get_categories();
		$data['branches'] = $this->contactus_model->get_branches();
		$data['contact'] = $this->contactus_model->get_contact();
		$data['product'] = $this->products_model->get_product(str_replace('_', ' ', $this->uri->segment(3, 0)));
		$data['related'] = $this->products_model->get_related( $data['product']->productos_multirelation );

		$data['header'] = $this->load->view('/template/header-white', $data, true);
		$data['footer'] = $this->load->view('/template/footer', $data, true);
		$data['section'] = $this->load->view('/product', $data, true); 
		
		$this->load->view('/template/index', $data);
	}

	public function search(){	
		$data['seo'] = $this->home_model->get_seo();
		$data['head'] = $this->load->view('/template/head', $data, true);
		$data['home'] = $this->home_model->get_home();
		$data['categories'] = $this->home_model->get_categories();
		$data['branches'] = $this->contactus_model->get_branches();
		$data['brands'] = $this->aboutus_model->get_brands();
		$data['contact'] = $this->contactus_model->get_contact();
		$data['products'] = $this->products_model->get_search($_GET['word']);
		$data['show_banner'] = false;

		$data['header'] = $this->load->view('/template/header-white', $data, true);
		$data['footer'] = $this->load->view('/template/footer', $data, true);
		$data['section'] = $this->load->view('/shop', $data, true); 
		
		$this->load->view('/template/index', $data);
	}
}
