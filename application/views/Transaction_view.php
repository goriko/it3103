<html>
<meta charset ="utf-8">
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dataTables.min.css">
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<head>
	<body>
		<div class="col-md-12 ordertable">
        <!--Order Table-->
        	<center>
            	<h1>Order Table</h1>
                	<table class ="customerTable">
                    	<thead>
                        	<th>Order ID</th>
                            <th>Car</th>
                            <th>Order Date</th>
                            <th></th>
                        </thead>
                    	<tbody>
                    		<?php
                    		foreach($trans as $r) { 
                    		echo"<tr>
                    		<td>$r->Order_ID</td>
                    		<td>$r->variant $r->name</td>
                    		<td>$r->OrderDate</td>
                            <td><a href='";
                            echo base_url("index.php/Orderdetails_controller/index/".$r->Order_ID);
                            echo "'><button class='btn btn-success'>View order details</button></a></td>
                            </tr>";
                                }
                    		?>
                 		</tbody>
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