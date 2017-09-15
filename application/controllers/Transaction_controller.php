<?php
	class Transaction_controller extends CI_Controller{
		Public function __construct(){
			parent:: __construct();
			$this->load->model('Transaction_model');
			
		}
		Public function index(){
			$data_id = $this->uri->segment(4);
			$data['trans'] = $this->Transaction_model->get_orders($data_id);
			$this->load->view('Transaction_view', $data);
		}
	}
?>