<html>
<meta charset ="utf-8">
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dataTables.min.css">
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<head>
	<body>
		<div class="col-md-12 ordertable">
        	<center>
            	<h1>Car details</h1>
                	<table class ="customerTable">
                    	<thead>
                        	<th>Name</th>
                            <th>Variant</th>
                            <th>Transmission</th>
                            <th>Price</th>
                            <th>Horse Power</th>
                            <th>Fuel</th>
                            <th>Displacement</th>
                            <th>Wheel size</th>
                            <th>Engine_Specification</th>
                            <th>Max capacity</th>
                            <th>Stock</th>
                            <th>Downpayment</th>
                            <th></th>
                            <th></th>
                        </thead>
                    	<tbody>
                    		<?php
							foreach($car as $c){
								echo "<tr>
										<td>$c->name</td>
										<td>$c->variant</td>
										<td>$c->transmission</td>
										<td>$ $c->price</td>
										<td>$c->horse_power</td>
										<td>$c->fuel</td>
										<td>$c->displacement</td>
										<td>$c->wheel_size</td>
										<td>$c->engine_spec</td>
										<td>$c->max_capacity</td>
										<td>$c->stock</td>
										<td>$ $c->downpayment</td>
                                        <td><a href='";
                                        echo base_url("index.php/Newtransaction_controller/index/".$c->unit_id);
                                        echo "'><button class='btn btn-success'>Order</button></td>
                                        <td><button class='btn btn-success'>Add Stock</button></td>
									</tr>";
							}
						?>
                    	</table>
            </center>
           <button class="btn btn-success" onclick="add_person()">Add Car</button>
         </div>
         <!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input name="name" placeholder="Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Variant</label>
                            <div class="col-md-9">
                                <input name="variant" placeholder="Variant" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Transmission</label>
                            <div class="col-md-9">
                                <input name="transmission" placeholder="Transmission" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Price</label>
                            <div class="col-md-9">
                                <input name="price" placeholder="Price" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Horse Power</label>
                            <div class="col-md-9">
                                <input name="horse_power" placeholder="Horse Power" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fuel</label>
                            <div class="col-md-9">
                                <input name="fuel" placeholder="Fuel" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Displacement</label>
                            <div class="col-md-9">
                                <input name="displacement" placeholder="Displacement" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Wheel Size</label>
                            <div class="col-md-9">
                                <input name="wheel_size" placeholder="Wheel Size" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Engine Spec</label>
                            <div class="col-md-9">
                                <input name="engine_spec" placeholder="Engine Spec" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Max Capacity</label>
                            <div class="col-md-9">
                                <input name="max_capacity" placeholder="Max Capacity" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Stock</label>
                            <div class="col-md-9">
                                <input name="stock" placeholder="Stock" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Downpayment</label>
                            <div class="col-md-9">
                                <input name="downpayment" placeholder="Downpayment" class="form-control" type="text">
                                <span class="help-block"></span>
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
<script src="<?php echo base_url(); ?>js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url(); ?>js/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $(".customerTable").DataTable();
  

});



function add_car()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Car'); // Set Title to Bootstrap modal title
}


function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
        url = "<?php echo site_url('Cardetails_controller/addcar')?>";
    

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}
</script>
