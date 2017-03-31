<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller  {

  public function index()
	{
		//if ($_SESSION["is_connect"] == TRUE){

			//$this->load->model('My_categories');
			//$this->load->model('My_entreprises');
			$this->load->model('My_contacts');

	        $result_cont = $this->My_contacts->get_all_cont();

          $result = array();

          foreach ($result_cont as $row) {

              $result_cat = $this->My_contacts->get_cat_total_by_id($row->id_cont);

              $cat = "";
              foreach ($result_cat as $row_cat) {
                $cat .=  $row_cat->titre." / ";
              }

            $all_cat = substr($cat, 0, -3);
            $all_cat = (strlen($all_cat) > 84) ? substr($all_cat,0,84). ' ... ' : $all_cat;

            $temp = array (
                'id_cont' => $row->id_cont,
                'nom' => $row->nom,
                'prenom' => $row->prenom,
                'raison_sociale' => $row->raison_sociale,
                'email' => $row->email,
                'categorie' => $all_cat
              );

            array_push ($result, $temp);

          }

	       $data = array(
	            "result" => $result,
	        );

			    $this->load->view('header', $data);
	        $this->load->view('contacts');
	        $this->load->view('footer');

    	/*} else {
        	$this->load->view('login');
    	}*/
	}

  public function erreur()
  {
    if ($_SESSION["is_connect"] == TRUE){

      $this->load->view('header');
          $this->load->view('contacts_erreur');
          $this->load->view('footer');

      } else {
          $this->load->view('login');
      }
  }

  public function ajouter()
	{

		//if ($_SESSION["is_connect"] == TRUE){

					$this->load->model('My_entreprises');
					$this->load->model('My_categories');

	        $result_cat = $this->My_categories->get_all_cat();
	        $toto = $this->My_entreprises->get_all_ent();

	        $data = array(
	            "result_cat" => $result_cat,
	            "result_ent" => $result_ent,
	        );



					$this->load->view('header', $data);
	        $this->load->view('contacts_ajouter');
	        $this->load->view('footer');

    	/*} else {
        	$this->load->view('login');
    	}*/
	}

}
