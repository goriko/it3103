<?php
	Class Login_controller extends CI_Controller {
		public function __construct() {
				parent::__construct();
				$this->load->helper('form');// Load form helper library
				$this->load->model('Customer_model');//Load Customer Model
				$this->load->model('Login_DAO');// Load Login Model
		}

		// Show login page
		public function index() {
			$this->load->view('Login_form');
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
			}else{
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
							'fname' => $Userresult[0]->Fname,
							'username' => $Userresult[0]->Username,
							'nav' => 1,
						);
						$this->session->set_userdata('logged_in', $session_data);// Add user data in session
						redirect('Customer_controller','refresh');
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
