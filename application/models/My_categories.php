<?php
class My_categories extends CI_Model {

  /******************************************/
  /* SELECT TOUTES LES CATEGORIES           */
  /******************************************/
  function get_all_cat(){

    $this->db->select();
    $this->db->from('categorie');
    $this->db->order_by ("titre", "ASC");

    $query = $this->db->get();

    return $query->result();
  }

}
