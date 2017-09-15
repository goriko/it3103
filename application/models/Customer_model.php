<?php
	Class Customer_model extends CI_Model {

		
		Public function index(){
			$query = $this->db->get("customers");
			$data['records'] = $query->result();
			
		}
	}
?>
