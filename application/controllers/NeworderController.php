<?php
class NeworderController extends CI_Controller {

	public function __construct()
	 	{
	 		parent::__construct();
	 		$this->load->model('NeworderModel');
	 	}
		function addOrder($id){
			$data['car'] = $this->NeworderModel->getCarinfo($id);
			$data['cust'] = $this->NeworderModel->getCust();
			$this->load->view('Neworderview', $data);
		}
	}
?>
