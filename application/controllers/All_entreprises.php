<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_entreprises extends CI_Controller  {

  public function index()
	{
		//if ($_SESSION["is_connect"] == TRUE){

			$this->load->model('My_entreprises');

	        $result = $this->My_entreprises->get_all_ent();

            foreach ($result as $row) {

                $data[] = array('id' => $row->id_ent, 'text' => $row->raison_sociale);

            }

            header('Content-Type: application/json');
            echo json_encode ($data);

    	/*} else {
        	$this->load->view('login');
    	}*/
	}


}
