<?php
	Class Customer_model extends CI_Model {

		var $table = 'customers';

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function Getcustomers(){
			$id = $this->session->userdata['logged_in']['id'];
			$condition = "emp =" . "'" . $id. "'";
			$this->db->select('*');
			$this->db->from('customers');
			$this->db->where($condition);
			$query = $this->db->get();
			$data = $query->result();
			return $data;
		}

		public function get_by_id($id)
		{
			$this->db->from($this->table);
			$this->db->where('CustomerID',$id);
			$query = $this->db->get();
			return $query->row();
		}

		public function customer_update($where, $data)
		{
			$this->db->update($this->table, $data, $where);
			return $this->db->affected_rows();
		}
	}
	
?>
