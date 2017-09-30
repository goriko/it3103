<?php
$user=$this->session->userdata['logged_in']['fname'];
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
      <span>If customer doesnt have a record yet, please click <a href="">here</a></span><br/>

    </div>


    <div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">User Form</h3>
        </div>
        <div class="modal-body form" >
          <form action="#" id="form" class="form-horizontal">
            <div class="form-group" id="name">
              <label class="control-label col-md-3">Name:</label>
              <div class="col-md-9">
                <input name="variant" placeholder="Variant" class="form-control" type="text" required="required" >
              </div>
            </div>
          </form>
            </div>
            <div class="modal-footer">
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
  </body>
  </html>
