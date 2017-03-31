<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listes extends CI_Controller {

  public function index()
	{
		//if ($_SESSION["is_connect"] == TRUE){

			$this->load->model('My_listes');

      $result_list = $this->My_listes->get_all_listes();

      $result = array();

      foreach ($result_list as $row) {

          $result_cat = $this->My_listes->get_cat_by_liste($row->id_li);

          $cat = '';
          $count_email = array();

          foreach ($result_cat as $row_cat) {
            $cat .=  $row_cat->titre.' / ';

            $result_cont = $this->My_listes->get_contact_by_cat($row_cat->id_cat);

            foreach ($result_cont as $row_cont) {
              array_push($count_email, $row_cont->email);
            }

          }

          $all_cat = substr($cat, 0, -3);
          $all_cat = (strlen($all_cat) > 84) ? substr($all_cat,0,84). ' ... ' : $all_cat;
          $nbre_email = count(array_unique($count_email));

          $temp = array (
              'id_li' => $row->id_li,
              'titre' => $row->titre,
              'categories' => $all_cat,
              'nbre_contact' => $nbre_email
            );

          array_push ($result, $temp);
        }

      $data = array(
          "result" => $result,
      );

			$this->load->view('header', $data);
      $this->load->view('listes');
      $this->load->view('footer');

    	/*} else {
        	$this->load->view('login');
    	}*/
	}

}
