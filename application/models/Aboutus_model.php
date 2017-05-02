<?php
Class Aboutus_model extends CI_Model {

	function get_aboutus() {
		$this->db->select('*');
		$this->db->from('sobre_nosotros');
		$query = $this->db->get();
		return $query->row();
	}

	function get_graphics() {
		$this->db->select('*');
		$this->db->from('graficas');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->row();
	}

	function get_brands() {
		$this->db->select('*');
		$this->db->from('marcas');
		$query = $this->db->get();
		return $query->result();
	}

	function get_team() {
		$this->db->select('*');
		$this->db->from('nuestro_equipo');
		$query = $this->db->get();
		return $query->row();
	}

	function get_members() {
		$this->db->select('*');
		$this->db->from('equipo_de_trabajo');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}
}