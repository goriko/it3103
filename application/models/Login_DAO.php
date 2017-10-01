<?php

Class Login_DAO extends CI_Model {

// Insert registration data in database
public function registration_insert($data) {

// Query to check whether username already exist or not
	$condition = "user_name =" . "'" . $data['user_name'] . "'";
	$this->db->select('*');
	$this->db->from('users');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	if ($query->num_rows() == 0) {

// Query to insert data in database
		$this->db->insert('user_login', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
	} else {
		return false;
	}
}

// Read data using username and password
public function login($data) {

	$condition = "Username =" . "'" . $data['username'] . "' AND " . "Password =" . "'" . $data['password'] . "'";
	$this->db->select('*');
	$this->db->from('users');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	if ($query->num_rows() == 1) {
		return true;
	} else {
		return false;
	}
}

// Read data from database to show data in admin page
public function read_user_information($username) {

	$condition = "Username =" . "'" . $username . "'";
	$this->db->select('*');
	$this->db->from('users');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	if ($query->num_rows() == 1) {
		return $query->result();
	} else {
		return false;
	}
}

function checkPayment(){
	$this->db->select('orders.Order_ID AS order_id, MonthsToPay, DAY(OrderDate) AS date, OrderDate');
	$this->db->from('orders');
	$this->db->join('order_details', 'order_details.Order_ID = orders.Order_ID');
	$query = $this->db->get();
	$data = $query->result();
	$date = date("Y-m-d");
	$day = date("d");
	foreach($data as $a){
		if($date != $a->OrderDate){
			if($a->MonthsToPay != 0){
				if($a->date == $day){
					$a->MonthsToPay--;
					$this->db->set('MonthsToPay', $a->MonthsToPay); //value that used to update column
					$this->db->where('Order_ID', $a->order_id); //which row want to upgrade
					$this->db->update('order_details');  //table name
				}
			}
		}
	}
}

}

?>
