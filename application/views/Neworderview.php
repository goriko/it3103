<?php
$user=$this->session->userdata['logged_in']['fname'];
$userID=$this->session->userdata['logged_in']['id'];
foreach($car as $c){
      $Carid = $c->unit_id;
      $Cardown = $c->price*0.4;
      $FullPayment = $c->price;
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
      <?php echo form_open('NeworderController/order_add');?>
      <input type="hidden" value="<?php echo $Carid;?>" name="CarID"/>

        <label>Customer Name</label>
        <select name="customerid" class="infoput">
          <?php
            foreach($cust as $a){
              echo"<option value=".$a->CustomerID.">".$a->Name."</option>";
            }
          ?>
        </select><br><br>

        <label>Mode of Payment</label>
        <span>
          <select id="Paymentmode" name="paymentmode" class="infoput">
            <option value="down">Downpayment</option>
            <option value="full">Full Payment</option>
          </select>
        </span><br><br>

        <div id="selectMode">
          <label>Select terms:</label>
          <span>
          <select id="paymentt" name="term" class="infoput">
            <option value="12">12 mos.</option>
            <option value="24">24 mos.</option>
          </select>
          </span><br><br>
          <label>Down Payment</label> 
          <input type="text" name='Downamount' value = "<?php echo $Cardown; ?>" readonly><br><br>
        </div> 
        <div id="Full">
          <label>Full Payment</label>
          <input type="text" name="FullAmount" value="<?php echo $FullPayment?>" readonly><br><br>
        </div>
       
          
      

        <button class="btn btn-primary">Buy!</button><br><br>

      </form>
      </center>
      <span>If customer doesnt have a record yet, please click <a href='#' id='link' onclick="NewCust(<?php echo $Carid ?>)">here</a></span><br/>
  </body>
</html>

<script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
<script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>


<script type="text/javascript">
$("#Full").hide()

function NewCust(id){
          $('[name="CarID"]').val(id);
          $('[name="name"]').val("");
          $('[name="civilstatus"]').val("Single");
          $('[name="address"]').val("");
          $('[name="contact"]').val("");
          $('#modal_form').modal('show');
        }
        function save()
    {
       // ajax adding data to database
          $.ajax({
            url : "<?php echo site_url('/NeworderController/cust_add')?>",
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
              
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding');
            }
        });
    }
    $("#Paymentmode").on('change', function() {
    if ($(this).val() == 'down'){
        $("#selectMode").show();
        $("#Full").hide();
        $("#paymentt").val("12");
    } else {
        $("#selectMode").hide();
        $("#Full").show();
        $("#paymentt").val("0");
    }
});


  </script>

   <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Car Form</h3>
      </div>
      <div class="modal-body form" >
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="<?php echo $userID ?>" name="UserID"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Name</label>
              <div class="col-md-9">
                <input name="name" placeholder="Name" class="form-control" type="text" required="required" >
              </div>
            </div>
            <div  class="form-group">
              <label class="control-label col-md-3">Civil Status</label>
          <div class="col-md-9">
              <select name='civilstatus' class='form-control'>s
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
              </select>
          </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Address</label>
              <div class="col-md-9">
                <input name="address" placeholder="Address" class="form-control" type="text" required="required">

              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Contact Number</label>
              <div class="col-md-9">
                <input name="contact" placeholder="Contact Number" class="form-control" type="text" required="required">
              </div>
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
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->