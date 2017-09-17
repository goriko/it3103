<!DOCTYPE html>
<html>
	<?php
		if(isset($this->session->userdata['logged_in'])){
			header("location:http://localhost/login/index.php/user_authentication/user_login_process");
		}
	?>
	<head>
		<title>LOGIN</title>
		
	</head>
	<body>
		<?php
			if(isset($logout_message)) {
				echo "<div class='message'>
				 $logout_message;
				</div>";
			}
			if (isset($message_display)) {
				echo "<div class='message'>
			 	$message_display;
			 	</div>";
			}
		?>
		<div id="main">
			<div id="login">
				<h2>Login Form</h2>
				<hr/>
				<?php echo form_open('Login_controller/user_login_process');	
					echo "<div class='error_msg'>";
					if (isset($error_message)){
 						echo $error_message;
					}
					validation_errors();
					echo "</div>";
				?>
				<label>UserName :</label>
				<input type="text" name="username" id="name" placeholder="username"/><br /><br />
				<label>Password :</label>
				<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
				<input type="submit" value=" Login " name="submit"/><br />
				<a href="<?php echo base_url() ?>index.php/Register_controller">To SignUp Click Here</a>
				<?php echo form_close(); ?>
			</div>
		</div>
	</body>
</html>