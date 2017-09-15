<?php
	Class User_model extends CI_Model {

		Public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
		}
		Public function index(){
			$query = $this->db->get("customers");
			$data['records'] = $query->result();
			$this->load->helper('url');
			$this->load->view('Customer_view',$data);
		}
	}
?>
