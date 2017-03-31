<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entreprises extends CI_Controller {

  public function index()
  {
    //if ($_SESSION["is_connect"] == TRUE){

      $this->load->model('My_entreprises');

      $result = $this->My_entreprises->get_all_ent();

      $data = array(
          "result" => $result,
      );

      $this->load->view('header', $data);
      $this->load->view('entreprises');
      $this->load->view('footer');

    /*  } else {
          $this->load->view('login');
      }*/
  }

}
