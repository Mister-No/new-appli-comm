<?php
class My_entreprises extends CI_Model {

	/******************************************/
	/* SELECT TOUTES LES entreprisesS           */
	/******************************************/
	function get_all_ent(){

		$this->db->select();
		$this->db->from('entreprises');
    $this->db->order_by ("raison_sociale", "ASC");

		$query = $this->db->get();

		return $query->result();
	}

}
