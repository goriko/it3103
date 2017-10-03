
<link  rel="stylesheet" href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>">
    <link href="<?php echo base_url('assests/bootstrap/css/logout.css')?>" rel="stylesheet" type="text/css">
	<div class="row">
		<div class="topbar">
 			<div class="col-md-1">
     		<img class="logo" src="<?php echo base_url('img/kiasmall.png')?>">
     	</div>

      <div class="topblocks">
        <div class="topblock topfirst">
	        <a href="<?php echo base_url('index.php/Customer_controller')?>" <?php if($this->session->userdata['logged_in']['nav'] == 1){
	       			echo "class='link active'";
	     			}else{
	     		   	echo "class='link'";
	     			}?>>
	    		<div>
      			<span><i class="glyphicon glyphicon-user icon">&nbsp;Customers</i></span>
	   	  	</div>
	      </a>
	     </div>

      <div class="topblock">
	    	<a href="<?php echo base_url("index.php/Carcontroller2");?>" <?php if($this->session->userdata['logged_in']['nav'] == 2){
	     	  		echo "class='link active'";
	     	  	}else{
	     	   		echo "class='link'";
	     	 		}?>>
	     	<div>
	     		<span ><i class="glyphicon glyphicon-road">&nbsp;Cars</i></span>
	     	</div>
	     </a>
		 </div>

	   <div class="topblock logout col-md-offset-5" id="logout">
	   	<a href="<?php echo base_url("index.php/Logout_controller/logout");?>" class="linkout">
	   		<div>
	   			<span class="glyphicon glyphicon-log-out"></span><span> Log Out</span>
	     	</div>
	    </a>
	   </div>
	  </div>
	</div>
</div>
