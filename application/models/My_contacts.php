<?php
class My_contacts extends CI_Model {

  /******************************************/
  /* SELECT TOUTES LES contactsS           */
  /******************************************/
  function get_all_cont(){

    $this->db->select('cont.*, ent.raison_sociale');
    $this->db->from('contacts AS cont');
    $this->db->join('entreprises AS ent', 'ent.id_ent = cont.id_ent', 'LEFT');
    $this->db->order_by ('nom', 'ASC');

    $query = $this->db->get();

    return $query->result();

  }

  function get_cat_total_by_id($id){

    $this->db->select('cat.titre');
    $this->db->from('contacts_cat');
    $this->db->join('categorie AS cat', 'cat.id_cat = contacts_cat.id_cat', 'LEFT');
    $this->db->where("contacts_cat.id_contact = $id");

    $query = $this->db->get();

    return $query->result();
  }

}
