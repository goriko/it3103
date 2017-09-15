<?php
	class Customer_controller extends CI_Controller {
Public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
		}
		Public function index(){
			
			$this->load->helper('url');
			$this->load->view('Customer_form',$data);
		}
	}
?>