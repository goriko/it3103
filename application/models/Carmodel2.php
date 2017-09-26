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


public function get_all_books()
{
$this->db->from('car');
$query=$this->db->get();
return $query->result();
}


	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('unit_id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function book_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function book_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}


}
