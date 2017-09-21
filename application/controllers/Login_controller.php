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

$this->load->model('Customer_model');

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
			$this->load->view('Login_form');
		}
	} else {
		$data = array(
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password')
		);
		$result = $this->Login_DAO->login($data);
		if ($result == TRUE) {
			$username = $this->input->post('username');
			$Userresult = $this->Login_DAO->read_user_information($username);
			if ($result != false) {
				$session_data = array(
				'id' => $Userresult[0]->UserID,
				'username' => $Userresult[0]->Username,
				'email' => $Userresult[0]->Password,
				);
// Add user data in session
				$this->session->set_userdata('logged_in', $session_data);
				
				$CustomerData['customers']= $this->Customer_model->GetCustomers();
				$this->load->view('Customer_form',$CustomerData);
				
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