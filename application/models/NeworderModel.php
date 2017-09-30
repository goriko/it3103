<?php
	class NeworderModel extends CI_Model{

		function getCarinfo($id){
			$condition = "unit_id =" . "'" . $id . "'";
			$this->db->select('name, variant');
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
	}
?>
