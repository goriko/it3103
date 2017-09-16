<?php
	Class Transaction_model extends CI_Model {

		
		public function get_orders($id){
			$condition = "Customer_id =" . "'" . $id . "'";
			$this->db->select('Order_ID, OrderDate, name, variant, unit_id');
			$this->db->from('orders');
			$this->db->join('car', 'unit_id = Car', 'inner');
			$this->db->where($condition);
			$query = $this->db->get();
			$data = $query->result();
			return $data;
		}
	}
?>