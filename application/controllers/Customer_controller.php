<?php
	class Customer_controller extends CI_Controller {
Public function __construct() {
			parent::__construct();
			$this->load->model('Customer_model');
		}
		Public function index(){
			$CustomerData['customers']= $this->Customer_model->GetCustomers();
			$this->load->view('Customer_form',$CustomerData);
		}
			public function ajax_edit($id)
		{
			$data = $this->Customer_model->get_by_id($id);
			echo json_encode($data);
		}

		public function book_update()
		{
		$data = array(
				'Name' => $this->input->post('name'),
				'CivilStatus' => $this->input->post('civilstatus'),
				'Address' => $this->input->post('address'),
				'ContactNumber' => $this->input->post('contactnumber'),
			);
		$this->Customer_model->customer_update(array('CustomerID' => $this->input->post('CustID')), $data);
		echo json_encode(array("status" => TRUE));

		}
	}
?>