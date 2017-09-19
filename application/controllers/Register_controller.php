<?php

Class Register_controller extends CI_Controller{
	public function __construct() {
		parent::__construct();
	}
	public function index(){
		$this->load->view('Register_form');
	}
	public function Register(){
		// Check validation for user input in SignUp form
	$this->form_validation->set_rules('fname', 'First Name', 'required');
	$this->form_validation->set_rules('lname', 'Last Name', 'required');
	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	if ($this->form_validation->run() == FALSE) {
		$this->load->view('registration_form');
	} else {
		$data = array(
	'Fname' => $this->input->post('fname'),
	'Lname' => $this->input->post('lname'),
	'Username' => $this->input->post('username'),
	'Password' => $this->input->post('password')
	);
	$this->load->model('Register_DAO');
	$result = $this->Register_DAO->Register($data);
	if ($result == TRUE) {
		$data['message_display'] = 'Registration Successfully !';
		$this->load->view('login_form', $data);
	} else {
		$data['message_display'] = 'Username already exist!';
		$this->load->view('registration_form', $data);
	}
	}
}

}
?>