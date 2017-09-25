<link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<div class="row">
		<div class="topbar">
     		<div class="col-md-1">
     			<img class="logo" src="<?php echo base_url('img/kiasmall.png')?>">
     		</div>

        <div class="topblocks">
          <div class="topblock topfirst">
	     		    <a href="<?php echo base_url('')?>" class="link active">
	     		    <div>
	     				      <span class="glyphicon glyphicon-user icon"></span><span>Customers</span>
	     			  </div>
	     		    </a>
	     		</div>

          <div class="topblock">
	     		    <a href="<?php echo base_url("index.php/Carcontroller");?>" class="link">
	     			  <div>
	     				      <span class="fa fa-car icon"></span><span>Cars</span>
	     			  </div>
	     		    </a>
	     		</div>

	     		<div class="topblock logout col-md-offset-11">
	     		<a href="<?php echo base_url("index.php/Logout_controller/logout");?>" class="linkout">
	     			<div>
	     				<span class="fa fa-sign-out"></span><span>Log Out</span>
	     			</div>
	     		</a>
	     		</div>
	     	</div>
      </div>
</div>
