<html>
<meta charset ="utf-8">
<link rel ="stylesheet" href="<?php echo base_url("css/dataTables.min.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/style.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/font-awesome.min.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/font-awesome.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/cars.css"); ?>">
<head>
	<body>
    <?php include('navbar.php');?>
    <br/>
		<div class="col-md-12 ordertable">
        <!--Order Table-->
        	<center>
            	<h1>Order Details Table</h1>
                	<table class ="customerTable">
                    	<thead>
                        	<th>Order Type</th>
                            <th>Term</th>
                            <th>Balance</th>
                            <th>Months to Pay</th>
                        </thead>
                    	<tbody>
                    		<?php
                    		foreach($detail as $r) { 
                    		echo"<tr>
                    		<td>$r->ordertype</td>
                    		<td>$r->term</td>
                    		<td>$r->balance</td>
                            <td>$r->MonthsToPay</td>
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