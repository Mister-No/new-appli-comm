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

  public function ajouter()
  {

    //if ($_SESSION["is_connect"] == TRUE){

      $this->load->model('My_categories');

          $result_cat_parent = $this->My_categories->get_all_parent_cat();

          foreach ($result_cat_parent as $row) {

            $result_cat_child = $this->My_categories->get_child_cat($row->id_cat);

            $tab_cat = array();
            foreach ($result_cat_child as $row_cat) {
              $tab_cat[] = ['id_cat' => $row_cat->id_cat,
                            'titre' => $row_cat->titre];
            }

            $result_li[] = ['id_cat_parent' => $row->id_cat,
                         'titre_liste' => $row->titre];


             array_merge_recursive($result_li, $tab_cat);

            }

          /*$data = array(
              "result" => $result
          );*/

          var_dump($result_li);

          /*$this->load->view('header', $data);
          $this->load->view('listes_ajouter');
          $this->load->view('footer');*/

    /*  } else {
          $this->load->view('login');
      }*/
  }

}
