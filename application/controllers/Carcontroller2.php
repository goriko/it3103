<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carcontroller2 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('Carmodel2');
	 	}


	public function index()
	{

		$data['cars']=$this->Carmodel2->get_all_books();
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
				'book_isbn' => $this->input->post('book_isbn'),
				'book_title' => $this->input->post('book_title'),
				'book_author' => $this->input->post('book_author'),
				'book_category' => $this->input->post('book_category'),
			);
		$this->book_model->book_update(array('book_id' => $this->input->post('book_id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function book_delete($id)
	{
		$this->book_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



}
