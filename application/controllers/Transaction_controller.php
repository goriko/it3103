<?php
	class Transaction_controller extends CI_Controller{
		Public function __construct(){
			parent:: __construct();
			$this->load->model('Transaction_model');

		}
		Public function index(){
			$transaction_id = $this->uri->segment(3);
			$transactionData['trans'] = $this->Transaction_model->get_orders($transaction_id);
			$this->load->view('Transaction_view', $transactionData);
		}
		Public function Get_orderdetails($id){
			$OrderDetails = $this->Transaction_model->get_Detail($id);
			echo json_encode($OrderDetails);
		}
	}
?>
