<?php
class NeworderController extends CI_Controller {

	public function __construct()
	 	{
	 		parent::__construct();
	 		$this->load->model('NeworderModel');
	 	}
		function addOrder($id){
			$selectedCar['car'] = $this->NeworderModel->getCarinfo($id);
			$this->load->view('Neworderview',$selectedCar);
		}
	}	
?>