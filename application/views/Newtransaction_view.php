<html>
<meta charset ="utf-8">
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dataTables.min.css">
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<head>
	<body>
		<div class="col-md-12 ordertable">
        	<center>
			<h1>New Transaction</h1>
				<h6>Choose customer</h6>
				<select>
					<option value='0' selected disabled="" >Select Customer</option>
				<?php
					foreach($customer as $c){
						echo "<option value='$c->CustomerID'>$c->Name</option>";
					}
				?>
				</select>
            </center>
         </div>
         <div>
         	<form method="POST" action="" autocomplete="off">
         		<label>Full Name</label>
                <input type="text" name="name" required="required" placeholder="Name" class="form-control">
                <br>
                <label>Civil Status</label>
                <input type="text" name="civil_status" required="required" placeholder="Civil Status" class="form-control">
            	<br>
            	<label>Address</label>
                <input type="text" name="address" required="required" placeholder="Address" class="form-control">
                <br>
                <label>Contact Number</label>
                <input type="number" name="contact_nu" required="required" placeholder="Contact Number" class="form-control">
                <br>

            	<br>
                <span><button type="submit" class="btn btn-success">Proceed</button></span>
               </form>
         </div>
	   </body>
    </head>
</html>
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $(".customerTable").DataTable();
            })
</script>