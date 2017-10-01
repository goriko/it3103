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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include('navbar.php');?>
    <br/>
    <div class="col-md-offset-1 col-md-10">
      <center><h1>Customers</h1></center>
      <br />
      <br />
      <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
         <tr>
          <th>Order ID</th>
          <th>Car</th>
          <th>Order Date</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($trans as $t){?>
        <tr>
            <td><?php echo $t->Order_ID;?></td>
            <td><?php echo $t->variant;$t->name;?></td>
            <td><?php echo $t->OrderDate;?></td>
            <td><button class='btn btn-success' onclick="ShowDetails(<?php echo $t->Order_ID?>)">View order details</button></td>
          </tr>
          <?php }?>
      </tbody>
    </table>
  </div>

  <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
  <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>


  <script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
    } );

    function ShowDetails(id)
    {
      $('#payment').val('');
      $('#OrderType').html('');
      $('#Term').html('');
      $('#balance').html('');
      $('#Months').html(''); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('/Transaction_controller/Get_Orderdetails/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('#OrderID').val(data.Order_ID);
          $('#OrderType').html(data.ordertype);
          $('#Term').html(data.term);
          $('#balance').html(data.balance);
          $('#Months').html(data.MonthsToPay);
          if($('#OrderType').html() != "Down Payment" || $('#balance').html() == 0){
            $('#Payment').hide();
            $('#paybtn').hide();
          }else{
            $('#Payment').show();
            $('#paybtn').show();
          }
          $('#modal_form').modal('show');
        }
      });
    }
    function pay(){
      
       // ajax adding data to database
          $.ajax({
            url : "Transaction_controller/UpdatePayment",
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
              
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error update data');
            }
        });
    }

  </script>

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Order Details</h3>
      </div>
      <div class="modal-body">
      <input type="hidden" name="OrderID" value="">
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <tbody>
        <tr>
            <td>Order Type</td>
            <td id="OrderType"></td>
        </tr>
        <tr>
            <td>Term</td>
            <td id="Term"></td>
        </tr>
        <tr>
            <td>Balance</td>
            <td id="balance" name="balance"></td>
        </tr>
        <tr>
            <td>Months To Pay</td>
            <td id="Months"></td>
        </tr>
      </tbody>
      </table>
      <div id="Payment">
      <label>Enter Payment</label>
        <input type="text" name="payment" class="form form-control" id="payment" required="required">
      </div>
          </div>
          <div class="modal-footer">
            <button type='button' class="btn btn-primary" onclick="pay()" id="paybtn">Save Payment</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->
    </body>
  </head>
</html>
