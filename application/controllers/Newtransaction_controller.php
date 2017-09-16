<?php
	class newTransaction_controller extends CI_Controller{
		Public function __construct(){
			parent:: __construct();
			$this->load->model('Newtransaction_model');
			
		}
		Public function index(){
			$data['customer'] = $this->Newtransaction_model->get_customers();
			$this->load->view('Newtransaction_view', $data);
		}
	}
?>