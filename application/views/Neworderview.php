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
    <h1><?php echo $car['name']; ?></h1>
      <form id="form1" method="POST" action="addorder.php" autocomplete="off">  

                <span >Customer Name</span><span><input class="infoput" name="cname" type="text" required></span><br><br>
              <span>Mode of Payment</span>
              <span>
                <select id="paymentt" name="paymentmode" class="infoput">
                  <option value="down">Downpayment</option>
                  <option value="full">Full Payment</option>
                </select>
              </span><br><br>

              <div id="downamount">
              <span">Select terms:</span>
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
      <span>If customer doesnt have a record yet</span><br/>

    </div>
  </body>
  </html>
