<!DOCTYPE html>
<?php
  $user=$this->session->userdata['logged_in']['fname'];
  $this->session->userdata['logged_in']['nav'] = 2;
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
    <link href="<?php echo base_url('assests/bootstrap/css/logout.css')?>" rel="stylesheet" type="text/css">
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
      <center><h1>Cars</h1></center>
      <br />
      <button class="btn btn-success" onclick="add_car()"><i class="glyphicon glyphicon-plus"></i> Add Car</button>
      <br />
      <br />
      <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
         <tr>
          <th>Unit ID</th>
          <th>Model</th>
          <th>Variant</th>
          <th>Transmission</th>
          <th>Price</th>
          <th>Horse Power</th>
          <th>Fuel</th>
          <th>Displacement</th>
          <th>Wheel Size</th>
          <th>Engine Spec</th>
          <th>Max Capacity</th>
          <th>Stock</th>
          <th>Downpayment</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($cars as $c){?>
        <tr>
          <td><?php echo $c->unit_id;?></td>
          <td><?php echo $c->name;?></td>
          <td><?php echo $c->variant;?></td>
            <td><?php echo $c->transmission;?></td>
            <td><?php echo $c->price;?></td>
            <td><?php echo $c->horse_power;?></td>
            <td><?php echo $c->fuel;?></td>
            <td><?php echo $c->displacement;?></td>
            <td><?php echo $c->wheel_size;?></td>
            <td><?php echo $c->engine_spec;?></td>
            <td><?php echo $c->max_capacity;?></td>
            <td><?php echo $c->stock;?></td>
            <td><?php echo $c->downpayment;?></td>
            <td><a href=<?php echo base_url('index.php/NeworderController/addOrder/'.$c->unit_id);?>><button class='btn btn-primary'>Order</button></a>
            <button class="btn btn-success" onclick="edit_stock(<?php echo $c->unit_id;?>)">Update stock</button>
            <button class="btn btn-danger glyphicon glyphicon-remove" onclick="delete_car(<?php echo $c->unit_id;?>)"></button></td>
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
    var save_method; //for save method string
    var table;




    function add_car()
    {
      save_method = 'add';
      $('#transmissionhide').show();
      $('#modelhide').show();
      $('#varianthide').show();
      $('#pricehide').show();
      $('#horsepowerhide').show();
      $('#fuelhide').show();
      $('#displacementhide').show();
      $('#wheelsizehide').show();
      $('#enignespechide').show();
      $('#maxcapacityhide').show();
      $('#downpaymenthide').show();

      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_stock(id)
    {
      save_method = 'update';

      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('/Carcontroller2/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="unitid"]').val(data.unit_id);
            $('[name="model"]').val(data.name);
            $('[name="variant"]').val(data.stock);
            $('[name="transmission"]').val(data.transmission);
            $('[name="price"]').val(data.price);
            $('[name="horsepower"]').val(data.horse_power);
            $('[name="fuel"]').val(data.fuel);
            $('[name="displacement"]').val(data.displacement);
            $('[name="wheelsize"]').val(data.wheel_size);
            $('[name="enginespec"]').val(data.engine_spec);
            $('[name="maxcapacity"]').val(data.max_capacity);
            $('[name="downpayment"]').val(data.downpayment);
            //hide all the labels and dropdowns
            $('#transmissionhide').hide();
            $('#modelhide').hide();
            $('#varianthide').hide();
            $('#pricehide').hide();
            $('#horsepowerhide').hide();
            $('#fuelhide').hide();
            $('#displacementhide').hide();
            $('#wheelsizehide').hide();
            $('#enignespechide').hide();
            $('#maxcapacityhide').hide();
            $('#downpaymenthide').hide();
            // show bootstrap modal when complete loaded
            $('#modal_form').modal('show');
             // Set title to Bootstrap modal title
            $('.modal-title').text('Update stock');

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }



    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('/Carcontroller2/book_add')?>";
      }
      else
      {
        url = "<?php echo site_url('/Carcontroller2/book_update')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function delete_car(id){
        if(confirm('Are you sure?')){
          $.ajax({
            url : "<?php echo site_url('/Carcontroller2/book_delete/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
              location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
          });
        }
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
      <div class="modal-body form" >
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="unitid"/>
          <div class="form-body">
            <div class="form-group" id="modelhide">
              <label class="control-label col-md-3">Model</label>
              <div class="col-md-9">
                <input name="model" placeholder="Model Name" class="form-control" type="text" required="required" >
              </div>
            </div>
            <div class="form-group" id="varianthide">
              <label class="control-label col-md-3">Variant</label>
              <div class="col-md-9">
                <input name="variant" placeholder="Variant" class="form-control" type="text" required="required" >
              </div>
            </div>
            <div id='transmissionhide' class="form-group">
              <label class="control-label col-md-3">Transmission</label>
              <div class="col-md-9">
                  <select name='transmission' class='form-control'>s
                    <option value="automatic">Automatic</option>
                    <option value="manual">Manual</option>
                  </select>
              </div>
            </div>
            <div class="form-group" id="pricehide">
              <label class="control-label col-md-3">Price</label>
              <div class="col-md-9">
                <input name="price" placeholder="Price" class="form-control" type="text" required="required">

              </div>
            </div>
						<div class="form-group" id="horsepowerhide">
							<label class="control-label col-md-3">Horse Power</label>
							<div class="col-md-9">
								<input name="horsepower" placeholder="Horse Power" class="form-control" type="text" required="required">
							</div>
						</div>
            <div class="form-group" id="fuelhide">
              <label class="control-label col-md-3">Fuel</label>
              <div class="col-md-9">
                <input name="fuel" placeholder="Fuel" class="form-control" type="text" required="required">

              </div>
            </div>
            <div class="form-group" id="displacementhide">
              <label class="control-label col-md-3">Displacement</label>
              <div class="col-md-9">
                <input name="displacement" placeholder="Displacement" class="form-control" type="text" required="required">
              </div>
            </div>
            <div class="form-group" id="wheelsizehide">
              <label class="control-label col-md-3">Wheel Size</label>
              <div class="col-md-9">
                <input name="wheelsize" placeholder="Wheel Size" class="form-control" type="text" required="required">
              </div>
            </div>
            <div class="form-group" id="enignespechide">
              <label class="control-label col-md-3">Engine Spec</label>
              <div class="col-md-9">
                <input name="enginespec" placeholder="Engine Spec" class="form-control" type="text" required="required">
              </div>
            </div>
            <div class="form-group" id="maxcapacityhide">
              <label class="control-label col-md-3">Max Capacity</label>
              <div class="col-md-9">
                <input name="maxcapacity" placeholder="Max Capacity" class="form-control" type="text" required="required" >
              </div>
            </div>
            <div class="form-group" id="stockhide">
              <label class="s control-label col-md-3">Stock</label>
              <div class="col-md-9">
                <input name="stock" placeholder="Stock" class="form-control" type="text" required="required">
              </div>
            </div>
            <div class="form-group" id="downpaymenthide">
              <label class="control-label col-md-3">Downpayment</label>
              <div class="col-md-9">
                <input name="downpayment" placeholder="Downpayment" class="form-control" type="text" required="required" >
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
</html>
