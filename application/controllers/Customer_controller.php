<?php
	class Customer_controller extends CI_Controller {
Public function __construct() {
			parent::__construct();
			$this->load->model('Customer_model');
		}
		Public function index(){
			$this->load->helper('url');
			$CustomerData['customers']= $this->Customer_model->GetCustomers();
			$this->load->view('Customer_form',$CustomerData);
		}
	}
?>