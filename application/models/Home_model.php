<?php
Class Home_model extends CI_Model {

	function get_banner() {
		$this->db->select('*');
		$this->db->from('banner_home');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_home() {
		$this->db->select('*');
		$this->db->from('home');
		$query = $this->db->get();
		return $query->row();
	}

	function get_posts() {
		$this->db->select('*');
		$this->db->from('posts');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_categories() {
		$this->db->select('*');
		$this->db->from('categorias');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_seo() {
		$this->db->select('*');
		$this->db->from('configuration');
		$this->db->where('id', 1);
		$query = $this->db->get();
		return $query->row();
	}
}