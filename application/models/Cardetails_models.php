<?php
	Class Cardetails_models extends CI_Model {

		
		public function get_car($id){
			$condition = "unit_id =" . "'" . $id . "'";
			$this->db->select('*');
			$this->db->from('car');
			$this->db->where($condition);
			$query = $this->db->get();
			$data = $query->result();
			return $data;
		}
	}
?>