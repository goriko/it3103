<?php
	class NeworderModel extends CI_Model{

		function getCarinfo($id){
			$condition = "unit_id =" . "'" . $id . "'";
			$this->db->select('unit_id,name, variant,price');
			$this->db->from('car');
			$this->db->where($condition);
			$query = $this->db->get();
			$data = $query->result();
			return $data;
		}

		function getCust(){
			$this->db->select('CustomerID, Name');
			$this->db->from('customers');
			$query = $this->db->get();
			$data = $query->result();
			return $data;
		}
		public function cust_add($data)
		{
			$this->db->insert('customers', $data);
			return $this->db->insert_id();
		}
		public function order_add($data)
		{
			$this->db->insert('orders', $data);
			return $this->db->insert_id();
		}
		public function orderdetails_add($data)
		{
			$this->db->insert('order_details', $data);
			return $this->db->insert_id();
		}
	}
?>
