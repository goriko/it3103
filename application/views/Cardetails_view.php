<html>
<meta charset ="utf-8">
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dataTables.min.css">
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<head>
	<body>
		<div class="col-md-12 ordertable">
        	<center>
            	<h1>Car details</h1>
                	<table class ="customerTable">
                    	<thead>
                        	<th>Name</th>
                            <th>Variant</th>
                            <th>Transmission</th>
                            <th>Price</th>
                            <th>Horse Power</th>
                            <th>Fuel</th>
                            <th>Displacement</th>
                            <th>Wheel size</th>
                            <th>Engine_Specification</th>
                            <th>Max capacity</th>
                            <th>Stock</th>
                            <th>Downpayment</th>
                        </thead>
                    	<tbody>
                    		<?php
							foreach($car as $c){
								echo "<tr>
										<td>$c->name</td>
										<td>$c->variant</td>
										<td>$c->transmission</td>
										<td>$c->price</td>
										<td>$c->horse_power</td>
										<td>$c->fuel</td>
										<td>$c->displacement</td>
										<td>$c->wheel_size</td>
										<td>$c->engine_spec</td>
										<td>$c->max_capacity</td>
										<td>$c->stock</td>
										<td>$c->downpayment</td>
									</tr>";
							}
						?>
                    	</table>
            </center>
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