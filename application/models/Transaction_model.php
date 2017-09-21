<?php
	Class Transaction_model extends CI_Model {

		
		public function get_orders($id){
			$condition = "Customer_id =" . "'" . $id . "'";
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->join('car', 'car.unit_id = orders.Car_id');
			$this->db->where($condition);
			$query = $this->db->get();
			$data = $query->result();
			return $data;
		}
	}
?>