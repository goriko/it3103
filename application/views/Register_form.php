<html>
	<?php

		if (isset($this->session->userdata['logged_in'])) {
		header("location: http://localhost/login/index.php/user_authentication/user_login_process");
		}
	?>
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css")?>">
		<link rel="stylesheet" href="<?php echo base_url("css/login.css")?>">
	</head>
	<body background="<?php echo base_url("img/background1.jpg")?>">
		<div class="wrapper">
      <div class="row">
          <div class="col-md-offset-4">
              <img src="<?php echo base_url("img/kialogin.png")?>" width= "500em" height= "300em">
          </div>
      </div>
			<div class="col-md-offset-4 col-md-4">
					<h2>Registration Form</h2>
					<?php
						echo "<div class='error_msg'>";
				echo validation_errors();
				echo "</div>";
				echo form_open('Register_controller/Register');
				echo form_label('First Name : ');
				echo"<br/>";
				echo form_input('fname');
				echo"<br/>";
				echo"<br/>";
				echo form_label('Last Name : ');
				echo"<br/>";
				echo form_input('lname');
				echo"<br/>";
				echo"<br/>";
				echo form_label('Username : ');
				echo"<br/>";
				echo form_input('username');
				echo "<div class='error_msg'>";
				if (isset($message_display)) {
					echo $message_display;
				}
				echo "</div>";
				echo"<br/>";
				echo form_label('Password : ');
				echo"<br/>";
				echo form_password('password');
				echo"<br/>";
				echo"<br/>";
				echo form_submit('submit', 'Sign Up');
				echo form_close();
				?>
					<a href="<?php echo base_url() ?>index.php/login">For Login Click Here</a>
				</div>
			</div>
		</div>
	</body>
</html>
