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
	}
?>