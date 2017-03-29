<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller

{

  public function index()
	{
		//if ($_SESSION["is_connect"] == TRUE){

			//$this->load->model('My_categories');
			//$this->load->model('My_entreprises');
			$this->load->model('My_contacts');

	        $result = $this->My_contacts->get_all_cont();

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

}
