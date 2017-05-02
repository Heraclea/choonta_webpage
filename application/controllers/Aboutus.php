<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('aboutus_model');
		$this->load->model('home_model');
		$this->load->model('contactus_model');
	}

	public function index(){
		$data['about'] = $this->aboutus_model->get_aboutus();
		$data['graphics'] = $this->aboutus_model->get_graphics();
		$data['team'] = $this->aboutus_model->get_team();
		$data['members'] = $this->aboutus_model->get_members();
		$data['brands'] = $this->aboutus_model->get_brands();
		$data['home'] = $this->home_model->get_home();
		$data['categories'] = $this->home_model->get_categories();
		$data['branches'] = $this->contactus_model->get_branches();
		$data['contact'] = $this->contactus_model->get_contact();
		$data['seo'] = $this->home_model->get_seo();

		$data['head'] = $this->load->view('/template/head', $data, true);
		$data['header'] = $this->load->view('/template/header-white', $data, true);
		$data['footer'] = $this->load->view('/template/footer', $data, true);
		$data['section'] = $this->load->view('/aboutus', $data, true); 
		
		$this->load->view('/template/index', $data);
	}
}