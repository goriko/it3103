<?php
	Class Customer_model extends CI_Model {

		
		Public function index(){
			
			
			
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
		}
	
?>
