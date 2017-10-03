<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carmodel2 extends CI_Model
{
	var $table = 'car';


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function get_all_cars()
	{
		$this->db->from('car');
		$query=$this->db->get();
		return $query->result();
	}


	public function get_by_id($id)
	{
		$this->db->from('car');
		$this->db->where('unit_id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function car_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function car_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id){
			$this->db->where('unit_id', $id);
			$this->db->delete($this->table);
	}


}
