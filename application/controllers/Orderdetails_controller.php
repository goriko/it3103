<?php
	class Orderdetails_controller extends CI_Controller{
		Public function __construct(){
			parent:: __construct();
			$this->load->model('Orderdetails_model');
		}
		Public function index(){
			$data_id = $this->uri->segment(3);
			$data['detail'] = $this->Orderdetails_model->get_details($data_id);
			$this->load->view('Orderdetails_view', $data);
		}
	}
?>