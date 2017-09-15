<?php



Class Login_controller extends CI_Controller {

public function __construct() {
parent::__construct();

// Load form helper library
$this->load->helper('form');

// Load form validation library
$this->load->library('form_validation');

// Load session library
$this->load->library('session');

// Load database
$this->load->model('Login_DAO');
}

// Show login page
public function index() {
$this->load->view('login_form');
}

// Show registration page


public function user_login_process() {

	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');

	if ($this->form_validation->run() == FALSE) {
		if(isset($this->session->userdata['logged_in'])){
			$this->load->view('customer');
		}else{
			$this->load->view('login_form');
		}
	} else {
		$data = array(
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password')
		);
		$result = $this->Login_DAO->login($data);
		if ($result == TRUE) {
			$username = $this->input->post('username');
			$result = $this->Login_DAO->read_user_information($username);
			if ($result != false) {
				$session_data = array(
				'username' => $result[0]->Username,
				'email' => $result[0]->Password,
				);
// Add user data in session
				$this->session->set_userdata('logged_in', $session_data);
				$query = $this->db->get("customers");
				$Customerdata['customers'] = $query->result();
				$this->load->view('Customer_Form',$Customerdata);
			}
		} else {
			$data = array(
			'error_message' => 'Invalid Username or Password'
			);
			$this->load->view('login_form', $data);
		}
	}
  }
}

?>