<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN</title>
		<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css")?>">
		<link rel="stylesheet" href="<?php echo base_url("css/login.css")?>">
	</head>
	<?php
		if(isset($logout_message)) {
			echo "<div class='message'> $logout_message; </div>";
		}
		if (isset($message_display)) {
			echo "<div class='message'> $message_display; </div>";
		}
	?>
	<body background="<?php echo base_url("img/background1.jpg")?>">
		<div class="wrapper">
      <div class="row">
          <div class="col-md-offset-4">
              <img src="<?php echo base_url("img/kialogin.png")?>" width= "500em" height= "300em">
          </div>
      </div>
			<?php echo form_open('Login_controller/user_login_process');
				echo "<div class='error_msg'>";
				if (isset($error_message)){
 					echo $error_message;
				}
				validation_errors();
				echo "</div>";
			?>
			<form>
				<div class="form-group col-md-offset-4 col-md-4">
				<br>
					<input type="text" class="form-control" required="required" name="username" id="name" placeholder="Username"/><br />
					<input type="password" class="form-control" required="required" name="password" id="password" placeholder="**********"/><br/>
					<button type="submit" value="Login" class="btn btn-primary">Login</button><br><br>
					<a href="<?php echo base_url('index.php/Register_controller') ?>">Click here to register</a>
					<?php echo form_close(); ?>
				</div>
			</form>
		</div>
		<script src="<?php echo base_url("js/bootstrap.min.js")?>"></script>
	</body>
</html>
