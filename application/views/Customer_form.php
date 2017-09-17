<html>
<meta charset ="utf-8">
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dataTables.min.css">
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<head>
	<body>
		<div class="col-md-12 ordertable">
        <!--Customer Table-->
        	<center>
            	<h1>Customer Table</h1>
                	<table class ="customerTable">
                    	<thead>
                        	<th>Customer ID</th>
                            <th>Customer Name</th>
                            <th>Civil Status</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th></th>
                        </thead>
                    	<tbody>
                    		<?php
                    		foreach($customers as $r) { 
                    		echo"<tr>
                    		<td> $r->CustomerID</td>
                    		<td> $r->Name</td>
                    		<td> $r->CivilStatus </td>
                    		<td> $r->Address </td>
                    		<td> $r->ContactNumber </td>
                            <td> <button class='btn btn-success'>Edit</button>";?>
                            <a href="<?php echo base_url("index.php/Transaction_controller/index/".$r->CustomerID);?>"><button class='btn btn-warning'>Transaction</td></a>
                            <?php
                            echo "</tr>";
                                }
                    		?>
                 		</tbody>
                    </table>
					<a href="<?php echo base_url("index.php/Newtransaction_controller/");?>"><button class='btn btn-success'>Add new transaction</button></a>
                    <a href="<?php echo base_url("index.php/Cardetails_controller/");?>"><button class='btn btn-success'>testing rani sa carmodule kay wala patay navbar hahaha</button></a>
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