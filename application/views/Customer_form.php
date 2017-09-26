<?php
    $this->session->userdata['logged_in']['nav'] = 1;
?>
<html>
  <head>
    <meta charset ="utf-8">
    <link rel ="stylesheet" href="<?php echo base_url("css/dataTables.min.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/style.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/font-awesome.min.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/font-awesome.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/cars.css"); ?>">
  </head>
	<body>
    <?php include('navbar.php');?>
    <br/>
		<div class="col-md-offset-1 col-md-10 ordertable">
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
              <?php echo "</tr>"; }?>
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
