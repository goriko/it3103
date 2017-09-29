<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carcontroller2 extends CI_Controller {

	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('Carmodel2');
	 	}


	public function index()
	{

		$data['cars']=$this->Carmodel2->get_all_cars();
		$this->load->view('Carview2',$data);
	}
	public function book_add()
		{
			$data = array(
					'name' => $this->input->post('model'),
					'variant' => $this->input->post('variant'),
					'transmission' => $this->input->post('transmission'),
					'price' => $this->input->post('price'),
					'horse_power' => $this->input->post('horsepower'),
					'fuel' => $this->input->post('fuel'),
					'displacement' => $this->input->post('displacement'),
					'wheel_size' => $this->input->post('wheelsize'),
					'engine_spec' => $this->input->post('enginespec'),
					'max_capacity' => $this->input->post('maxcapacity'),
					'stock' => $this->input->post('stock'),
					'downpayment' => $this->input->post('downpayment'),
				);
			$insert = $this->Carmodel2->book_add($data);
			echo json_encode(array("status" => TRUE));
		}
		public function ajax_edit($id)
		{
			$data = $this->Carmodel2->get_by_id($id);
			echo json_encode($data);
		}

		public function book_update()
	{
		$data = array(
				'stock' => $this->input->post('stock'),
			);
		$this->Carmodel2->book_update(array('unit_id' => $this->input->post('unitid')), $data);
		echo json_encode(array("status" => TRUE));

	}

	public function book_delete($id)
	{
		$this->book_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



}
