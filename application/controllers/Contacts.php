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

              $tempTextCat_all = "";
              foreach ($result_cat as $row_cat) {
                $tempCat = array($row_cat->titre);
                array_push ($tempCat, $row_cat->titre);
                $tempTextCat_all .=  $row_cat->titre." / ";
              }

            $tempTextCat = substr($tempTextCat_all, 0, -3);
            $tempTextCat = (strlen($tempTextCat) > 80) ? substr($tempTextCat,0,80). ' ... ' : $tempTextCat;

            $temp = array (
                'id_cont' => $row->id_cont,
                'nom' => $row->nom,
                'prenom' => $row->prenom,
                'raison_sociale' => $row->raison_sociale,
                'email' => $row->email,
                'categorie' => $tempTextCat
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
