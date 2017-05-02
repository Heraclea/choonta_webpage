<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('aboutus_model');
		$this->load->model('contactus_model');
		$this->load->model('home_model');
	}

	public function index(){
		$data['seo'] = $this->home_model->get_seo();
		$data['brands'] = $this->aboutus_model->get_brands();
		$data['branches'] = $this->contactus_model->get_branches();
		$data['contact'] = $this->contactus_model->get_contact();
		$data['home'] = $this->home_model->get_home();
		$data['categories'] = $this->home_model->get_categories();

		$data['head'] = $this->load->view('/template/head', $data, true);
		$data['header'] = $this->load->view('/template/header-white', $data, true);
		$data['footer'] = $this->load->view('/template/footer', $data, true);
		$data['section'] = $this->load->view('/contactus', $data, true); 
		
		$this->load->view('/template/index', $data);
	}
}