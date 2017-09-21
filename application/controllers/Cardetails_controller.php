<?php
	class Cardetails_controller extends CI_Controller{
		Public function __construct(){
			parent:: __construct();
			$this->load->model('Cardetails_models');
			
		}
		Public function index(){
			$data_id = $this->uri->segment(3);
			$data['car'] = $this->Cardetails_models->get_car($data_id);
			$this->load->view('Cardetails_view', $data);
		}

		public function addCar(){
				$this->_validate();
				$data = array(
				'name' => $this->input->post('name'),
				'variant' => $this->input->post('variant'),
				'transmission' => $this->input->post('transmission'),
				'price' => $this->input->post('price'),
				'horse_power' => $this->input->post('horse_power'),
				'fuel' => $this->input->post('fuel'),
				'displacement' => $this->input->post('displacement'),
				'wheel_size' => $this->input->post('wheel_size'),
				'engine_spec' => $this->input->post('engine_spec'),
				'max_capacity' => $this->input->post('max_capacity'),
				'stock' => $this->input->post('stock'),
				'downpayment' => $this->input->post('downpayment'),
			);
		$insert = $this->Cardetails_models->save($data);
		echo json_encode(array("status" => TRUE));
		}
	}
?>