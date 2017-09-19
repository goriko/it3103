<?php
	class Orderdetails_controller extends CI_Controller{
		Public function __construct(){
			parent:: __construct();
			
		}
		Public function index(){
			$this->load->view('Orderdetails_view');
		}
	}
?>