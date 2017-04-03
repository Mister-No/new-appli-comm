<?php
class My_listes extends CI_Model {

  /******************************************/
	/* SELECT TOUTES LES LISTES               */
	/******************************************/
	function get_all_listes(){

		$this->db->select();
		$this->db->from('liste');
    $this->db->order_by ("titre", "ASC");

		$query = $this->db->get();

		return $query->result();
	}

  /********************************************/
  /* SELECT TOUTES LES CATEGORIES PAR LISTES  */
  /********************************************/
  function get_cat_by_liste($id){

    $this->db->select();
    $this->db->from('liste_cat');
    $this->db->join('categorie', 'categorie.id_cat = liste_cat.id_cat');
    $this->db->where("liste_cat.id_liste = $id");

    $query = $this->db->get();

    return $query->result();
  }

  /*******************************************/
  /* SELECT TOUS LES CONTACTS PAR CATEGORIES */
  /*******************************************/
  function get_contact_by_cat($id){

    $this->db->distinct('contacts.id');
    $this->db->from('contacts_cat');
    $this->db->join('contacts', 'contacts.id_cont = contacts_cat.id_contact');
    $this->db->where("contacts_cat.id_cat = $id");

    $query = $this->db->get();

    return $query->result();
  }

}