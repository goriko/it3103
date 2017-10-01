<?php
class NeworderController extends CI_Controller {

	public function __construct()
	 	{
	 		parent::__construct();
	 		$this->load->model('NeworderModel');
	 		$this->load->model('Carmodel2');
	 	}
		function addOrder($id){
			$data['car'] = $this->NeworderModel->getCarinfo($id);
			$data['cust'] = $this->NeworderModel->getCust();
			$this->load->view('Neworderview', $data);
		}
		public function cust_add()
		{
			$custdata = array(
					'Name' => $this->input->post('name'),
					'CivilStatus' => $this->input->post('civilstatus'),
					'Address' => $this->input->post('address'),
					'ContactNumber' => $this->input->post('contact'),
					'emp' => $this->input->post('UserID'),
				);
			$insert = $this->NeworderModel->cust_add($custdata);
			echo json_encode(array("status" => TRUE));
		}
		public function order_add()
		{
			$orderdata = array(
					'Customer_id' => $this->input->post('customerid'),
					'Car_id' => $this->input->post('CarID'),
					'OrderDate' =>  "now()",
				);
			if($this->input->post('paymentmode')=="Down Payment"){
			$orderdetailsdata = array(
					'ordertype' => $this->input->post('paymentmode'),
					'term' => $this->input->post('term'),
					'balance' => $this->input->post('FullAmount') - $this->input->post('Downamount'),
					'MonthsToPay' =>$this->input->post('term'),
				);
		}else{
			$orderdetailsdata = array(
					'ordertype' => $this->input->post('paymentmode'),
				);
		}
			$subtract_stock = array(
				'stock' => $this->input->post('Stock') - 1,
			);
		    $this->Carmodel2->car_update(array('unit_id' => $this->input->post('CarID')), $subtract_stock);
			$this->NeworderModel->order_add($orderdata);
			$this->NeworderModel->orderdetails_add($orderdetailsdata);
			redirect('Carcontroller2','refresh');
		}
	}
?>
