<?php
	Class Newtransaction_model extends CI_Model {

		
		public function get_customers(){
			$this->db->select('*');
			$this->db->from('customers');
			$query = $this->db->get();
			$data = $query->result();
			return $data;
		}
	}
?>