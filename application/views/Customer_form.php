<?php
$user=$this->session->userdata['logged_in']['fname'];
    $this->session->userdata['logged_in']['nav'] = 1;
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
          <th>Cusomer ID</th>
          <th>Name</th>
          <th>Civil Status</th>
          <th>Address</th>
          <th>Contact Number</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($customers as $cust){?>
        <tr>
          <td><?php echo $cust->CustomerID;?></td>
          <td><?php echo $cust->Name;?></td>
          <td><?php echo $cust->CivilStatus;?></td>
            <td><?php echo $cust->Address;?></td>
            <td><?php echo $cust->ContactNumber;?></td>
            <td><button class="btn btn-success" onclick="edit_customer(<?php echo $cust->CustomerID;?>)">Edit</button>
            <a href="<?php echo base_url("index.php/Transaction_controller/index/".$cust->CustomerID);?>"><button class='btn btn-warning'>Transaction</button></a></td>
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
    var table;

    function edit_customer(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('/Customer_controller/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="CustID"]').val(data.CustomerID);
            $('[name="name"]').val(data.Name);
            $('[name="civilstatus"]').val(data.CivilStatus);
            $('[name="address"]').val(data.Address);
            $('[name="contactnumber"]').val(data.ContactNumber);




            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Add stock'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
    function save()
    {
      var url = "<?php echo site_url('/Customer_controller/book_update')?>";

       // ajax adding data to database
          $.ajax({
            url : url,
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
                alert('Error adding / update data');
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
        <h3 class="modal-title">Car Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="CustID"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Name</label>
              <div class="col-md-9">
                <input name="name" class="form-control" type="text" required="required">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Civil Status</label>
              <div class="col-md-9">
                <input name="civilstatus" class="form-control" type="text" required="required">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Address</label>
              <div class="col-md-9">
                <input name="address"  class="form-control" type="text" required="required">
              </div>
            </div>
           <div class="form-group">
              <label class="control-label col-md-3">Contact Number</label>
              <div class="col-md-9">
                <input name="contactnumber" class="form-control" type="text" required="required">
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
    </body>
  </head>
</html>
