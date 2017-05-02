<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('home_model');
		$this->load->model('aboutus_model');
		$this->load->model('contactus_model');
		$this->load->model('products_model');
	}

	public function index(){
		$data['seo'] = $this->home_model->get_seo();
		$data['head'] = $this->load->view('/template/head', $data, true);
		
		$data['brands'] = $this->aboutus_model->get_brands();
		$data['banners'] = $this->home_model->get_banner();
		$data['home'] = $this->home_model->get_home();
		$data['posts'] = $this->home_model->get_posts();
		$data['categories'] = $this->home_model->get_categories();
		$data['branches'] = $this->contactus_model->get_branches();
		$data['contact'] = $this->contactus_model->get_contact();
		$data['features'] = $this->products_model->get_features();

		$data['header'] = $this->load->view('/template/header', $data, true);
		$data['footer'] = $this->load->view('/template/footer', $data, true);
		$data['section'] = $this->load->view('/home', $data, true); 
		
		$this->load->view('/template/index', $data);
	}

	public function sendEmail(){
		$config['mailtype'] = 'html';
		$this->email->initialize($config);

		$body =   "
          <html>
	          <body>";
	          foreach ($_POST as $key => $value) {
	            $body .= "<p><b>".str_replace(array('_text', '_'), array('', ' '), $key)."</b>: ".utf8_decode($value)."</p>"; 
	          }
		$body .= "<br></body></html>";

		$this->email->from('web@choonta.com', 'Choonta - Página Web');
		$this->email->to($this->home_model->get_seo()->contact_emails);

		$this->email->subject('Formulario de contacto');
		$this->email->message($body);

		$this->email->send();
	}
}
