<html>
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
						$Fname = array(
							'class' => 'form-control',
							'name' => 'fname',
							'id' => 'fname',
							'required' => 'required',
							'placeholder' => 'First Name'
						);
						echo form_input($Fname);
						echo"<br/><br/>";
						echo form_label('Last Name : ');
						$Lname = array(
							'class' => 'form-control',
							'name' => 'lname',
							'id' => 'lname',
							'required' => 'required',
							'placeholder' => 'Lasr Name'
						);
						echo"<br/>";
						echo form_input($Lname);
						echo"<br/><br/>";
						echo form_label('Username : ');
						echo"<br/>";
						$Username = array(
							'class' => 'form-control',
							'name' => 'username',
							'id' => 'username',
							'required' => 'required',
							'placeholder' => 'Username'
						);
						echo form_input($Username);
						echo "<div class='error_msg'>";
						if (isset($message_display)) {
							echo $message_display;
						}
						echo "</div>";
						echo"<br/>";
						echo form_label('Password : ');
						echo"<br/>";
						$Password = array(
							'class' => 'form-control',
							'name' => 'password',
							'id' => 'password',
							'required' => 'required',
							'placeholder' => 'Password'
						);
						echo form_password($Password);
						echo"<br/><br/>";
						$Submit = array(
							'class' => 'btn btn-success',
						);
						echo form_submit($Submit,"Sign up");
						echo form_close();
					?>
				<a href="<?php echo base_url('index.php/Login_controller') ?>">Go back to login</a>
				</div>
			</div>
		</div>
	</body>
</html>
