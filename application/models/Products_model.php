<?php
Class Products_model extends CI_Model {

	function get_features() {
		$this->db->select('*, productos.nombre_text AS productName, categorias.nombre_text AS categoryName');
		$this->db->from('productos');
		$this->db->join('categorias', 'productos.categorias_relation = categorias.id', 'left');
		$this->db->where('productos.destacado_radio', 'Si');
		$this->db->where('productos.activo_radio', 'Si');
		$this->db->order_by('productos.created_at');
		$query = $this->db->get();
		return $query->result();
	}

	function get_all() {
		$this->db->select('*, productos.nombre_text AS productName, categorias.nombre_text AS categoryName');
		$this->db->from('productos');
		$this->db->join('categorias', 'productos.categorias_relation = categorias.id', 'left');
		$this->db->where('productos.activo_radio', 'Si');
		$this->db->order_by('productos.created_at');
		$query = $this->db->get();
		return $query->result();
	}

	function get_by_category($category) {
		$this->db->select('*, productos.nombre_text AS productName, categorias.nombre_text AS categoryName');
		$this->db->from('productos');
		$this->db->join('categorias', 'productos.categorias_relation = categorias.id', 'left');
		$this->db->where('activo_radio', 'Si');
		$this->db->like('categorias.nombre_text', $category);
		$this->db->order_by('productos.created_at');
		$query = $this->db->get();
		return $query->result();
	}

	function get_category($category) {
		$this->db->select('*');
		$this->db->from('categorias');
		$this->db->where('categorias.nombre_text', $category);
		$query = $this->db->get();
		return $query->row();
	}

	function get_sales() {
		$this->db->select('*, productos.nombre_text AS productName, categorias.nombre_text AS categoryName');
		$this->db->from('productos');
		$this->db->join('categorias', 'productos.categorias_relation = categorias.id', 'left');
		$this->db->where('activo_radio', 'Si');
		$this->db->where('productos.precio_en_promocion_text != 0');
		$this->db->order_by('productos.created_at');
		$query = $this->db->get();
		return $query->result();
	}

	function get_product($product) {
		$this->db->select('*');
		$this->db->from('productos');
		$this->db->where('activo_radio', 'Si');
		$this->db->like('nombre_text', $product);
		$query = $this->db->get();
		return $query->row();
	}

	function get_related($products) {
		$this->db->select('*');
		$this->db->from('productos');
		$this->db->where('activo_radio', 'Si');
		$this->db->where_in('id', explode(',', $products));
		$query = $this->db->get();
		return $query->result();
	}

	function get_search($search) {
		$this->db->select('*, productos.nombre_text AS productName, categorias.nombre_text AS categoryName');
		$this->db->from('productos');
		$this->db->join('categorias', 'productos.categorias_relation = categorias.id', 'left');
		$this->db->where('productos.activo_radio', 'Si');
		$this->db->like('productos.nombre_text', $search);
		$query = $this->db->get();
		return $query->result();
	}
}