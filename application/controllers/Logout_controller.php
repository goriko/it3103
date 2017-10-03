<?php
	Class Logout_controller extends CI_Controller{
		public function __construct() {
			parent::__construct();
		}
		public function logout() {
		// Removing session data
			$sess_array = array(
				'id' => '',
				'username' => '',
				'email' => '',
			);
			$this->session->unset_userdata('logged_in', $sess_array);
			redirect('Login_controller','refresh');
		}	
}
?>