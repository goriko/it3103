<?php
	Class Orderdetails_model extends CI_Model {

		
		public function get_details($id){
			$condition = "Order_ID =" . "'" . $id . "'";
			$this->db->select('*');
			$this->db->from('order_details');
			$this->db->where($condition);
			$query = $this->db->get();
			$data = $query->result();
			return $data;
		}
	}
?>