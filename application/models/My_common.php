<?php
class My_common extends CI_Model {

  /****************************************************************/
	/*       Insere des données dans la base		                		*/
	/****************************************************************/
	function insert_data($table, $data){

		$this->db->insert($table, $data);
		return $this->db->insert_id();

	}

  /****************************************************************/
  /* suppression by id dans la base                 			    */
  /****************************************************************/
  function delete_data($table, $id){

    $query = $this->db->delete($table, array('id' => $id));

  }

  /****************************************************************/
	/*  mise a jour des données dans la base		                    */
	/****************************************************************/
	function update_data($table, $champs, $id, $data){

		$this->db->where($champs, $id);
		$this->db->update($table, $data);

	}

}
