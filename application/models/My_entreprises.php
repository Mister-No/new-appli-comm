<?php
class My_entreprises extends CI_Model {

	/******************************************/
	/* SELECT TOUTES LES ENTREPRISES           */
	/******************************************/
	function get_all_ent(){

		$this->db->select();
		$this->db->from('entreprises');
    $this->db->order_by ("raison_sociale", "ASC");

		$query = $this->db->get();

		return $query->result();
	}

	/******************************************/
	/* SELECT UNE ENTREPRISES PAR ID           */
	/******************************************/
	function get_ent_by_id($id){

		$this->db->select();
		$this->db->from('entreprises');
		$this->db->where("entreprises.id_ent = $id");

		$query = $this->db->get();

		return $query->result();
	}


	/******************************************/
	/* SELECT UNE ENTREPRISES PAR ID           */
	/******************************************/
	function get_cat_by_id($id){

		$this->db->select();
		$this->db->from('entreprises_cat');
		$this->db->where("entreprises_cat.id_ent = $id");

		$query = $this->db->get();

		return $query->result();
	}

}
