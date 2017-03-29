<?php
class My_contacts extends CI_Model {

  /******************************************/
  /* SELECT TOUTES LES contactsS           */
  /******************************************/
  function get_all_cont(){

    $this->db->select('*, ent.raison_sociale, cat.titre');
    $this->db->from('contacts AS cont');
    $this->db->join('entreprises AS ent', 'ent.id = cont.id_ent', 'LEFT');
    $this->db->join('categorie AS cat', 'ent.id = cat.id', 'LEFT');
    $this->db->order_by ('nom', 'ASC');

    $query = $this->db->get();

    return $query->result();
  }

}
