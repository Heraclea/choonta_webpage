<?php
Class Contactus_model extends CI_Model {

	function get_branches() {
		$this->db->select('*');
		$this->db->from('sucursales');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_contact() {
		$this->db->select('*');
		$this->db->from('contacto');
		$query = $this->db->get();
		return $query->row();
	}
}