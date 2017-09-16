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
                        	<th></th>
                            <th></th>
                        </thead>
						<?php
							foreach($car as $c){
								echo "
									<tbody>
										<td>Name</td>
										<td>$c->name</td>
									</tbody>
									<tbody>
										<td>Variant</td>
										<td>$c->variant</td>
									</tbody>
									<tbody>
										<td>Transmission</td>
										<td>$c->transmission</td>
									</tbody>
									<tbody>
										<td>Price</td>
										<td>$c->price</td>
									</tbody>
									<tbody>
										<td>Horse Power</td>
										<td>$c->horse_power</td>
									</tbody>
									<tbody>
										<td>Fuel</td>
										<td>$c->fuel</td>
									</tbody>
									<tbody>
										<td>Displacement</td>
										<td>$c->displacement</td>
									</tbody>
									<tbody>
										<td>Wheel Size</td>
										<td>$c->wheel_size</td>
									</tbody>
									<tbody>
										<td>Engine Specification</td>
										<td>$c->engine_spec</td>
									</tbody>
									<tbody>
										<td>Max capacity</td>
										<td>$c->max_capacity</td>
									</tbody>
									<tbody>
										<td>Stock</td>
										<td>$c->stock</td>
									</tbody>
									<tbody>
										<td>Downpayment</td>
										<td>$c->downpayment</td>
									</tbody>
                    	";
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