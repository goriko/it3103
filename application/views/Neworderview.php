<?php
$user=$this->session->userdata['logged_in']['fname'];
$userID=$this->session->userdata['logged_in']['id'];
foreach($car as $t){
      $Carid=$t->unit_id;
      }
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $user?></title>
    <link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel ="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/style.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/font-awesome.min.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/font-awesome.css"); ?>">
    <link rel ="stylesheet" href="<?php echo base_url("css/cars.css"); ?>">
    <link href="<?php echo base_url('assests/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
  </head>
  <body>
    <?php include('navbar.php');?>
    <br/>
    <h1><?php foreach($car as $t){
      echo $t->name." ".$t->variant;
      }?>
    </h1>
      <form id="form1" method="POST" action="addorder.php" autocomplete="off">

        <span>Customer Name</span>
        <select name="customerid" class="infoput">
          <?php
            foreach($cust as $a){
              echo"<option value=".$a->CustomerID.">".$a->Name."</option>";
            }
          ?>
        </select><br><br>

        <span>Mode of Payment</span>
        <span>
          <select name="paymentmode" class="infoput">
            <option value="down">Downpayment</option>
            <option value="full">Full Payment</option>
          </select>
        </span><br><br>

        <div id="downamount">
          <span>Select terms:</span>
          <span>
          <select id="paymentt" name="term" class="infoput">
            <option value="12">12 mos.</option>
            <option value="24">24 mos.</option>
          </select>
          </span><br><br>
        </div>

        <button class="btn btn-primary" onclick="myFunction()">Buy!</button>

      </form>
      </center>
      <span>If customer doesnt have a record yet, please click <a href='#' id='link' onclick="NewCust()">here</a></span><br/>
  </body>
</html>

<script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
<script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>


<script type="text/javascript">

$(document).ready( function () {
    function NewCust(id){
          $('#CarID').val(id);
          $('#form')[0].reset();
          $('#modal_form').modal('show');
        }
} );

</script>

<div class="modal fade" id="modal_form" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h3 class="modal-title">Add New Customer</h3>
    </div>
    <input type="hidden" value="" name="CustID"/>
    <input type="hidden" value="<?php echo $userID ?>" name="UserID"/>
    <input type="text" value="" name="CarID"/>
    <div class="modal-body form" >
      <form action="#" id="form" class="form-horizontal">
          <label class="control-label col-md-3">Name</label>
          <div class="col-md-9">
            <input name="name" placeholder="Name" class="form-control" type="text" required="required" >
          </div>

          <label class="control-label col-md-3">Civil Status</label>
          <div class="col-md-9">
              <select name='civilstatus' class='form-control'>s
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
              </select>
          </div>

          <label class="control-label col-md-3">Address</label>
          <div class="col-md-9">
            <input name="address" placeholder="Address" class="form-control" type="text" required="required" >
          </div>

          <label class="control-label col-md-3">Contact Number</label>
          <div class="col-md-9">
            <input name="contactnum" placeholder="Contact Number" class="form-control" type="text" required="required" >
          </div>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnSave" onclick="" class="btn btn-primary">Add</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
