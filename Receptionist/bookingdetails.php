<!DOCTYPE html>
<?php
include('../Admin/session.php');
include('../Yujinn/connect.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Yuj inn Receptionist</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<style>
	#font{
		font-size:20px;
	}
	strong{
		font-size:20px;
	}
	p{
		font-size:15px;
	}
	.modal-dialog {
		padding-top: 10%;
	}
	h3{
		font-size:23px;
	}
	#form {width: 100%;
      margin-right: 17%;
      margin-left: 17%;
	}
	hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
}
	#note{
		font-size:12px;
	}
</style>

<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Y</b>UJ</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Receptionist</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
         
        </ul>
      </div>
    </nav>
  </header>
  
  
  
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php 
			$name = $login_session_firstname1." ". $login_session_lastname1;
		?>
           <p align="left"><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
     
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
	  
        <li class="header">MAIN NAVIGATION</li>
		 <li>
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
		   <li>
          <a href="addGuest1.php">
            <i class="fa  fa-user-plus"></i> <span>Add Guest</span>
          </a>
        </li>
		<li>
          <a href="roomMonitoring.php">
            <i class="fa fa-bed"></i> <span>Room Monitoring</span>
          </a>
        </li>
		<li class="active">
          <a href="BookingRecords.php">
             <i class="fa fa-file-text-o"></i> <span>Booking Records</span>
          </a>
        </li>
       
        <li>
          <a href="rlogout.php">
            <i class="fa fa-sign-in"></i> <span>Log-out</span>
           
          </a>
        </li> 
      </ul>
	  
    </section>
 
  </aside>

 
  <div class="content-wrapper">
    		<!--dito lalagay mga input--->
<?php
include 'connect.php';
			
//variables
$id= $_GET['guestid'];
$getLinks = "SELECT * FROM tbl_addguest WHERE addguest_id = '".$id."'";
$result = mysql_query($getLinks);
while($rs=mysql_fetch_array($result)) {
	$rcode= $rs['rcode'];
	$checkin= $rs['checkin'];
	$checkout = $rs['checkout'];
	$nights = $rs['nights'];
	$timein = $rs['arrivaltime'];
	$roomtype= $rs['roomtype'];
	$roomrates=$rs['roomrates'];
	$numberofrooms=$rs['numberofrooms'];
	$salutation=$rs['salutation'];
	$fname = $rs['firstname'];
	$lname = $rs['lastname'];
	$guestType = $rs['guestType'];
	$email = $rs['emailaddress'];
	$contact = $rs['contact'];
	$modeofpay = $rs['modeofpayment'];
	$request = $rs['request'];
	$status = $rs['status'];
	$discount = $rs['discount'];
	$subtotal = $rs['subTotal'];
	$totalcost = $rs['totalcost'];
	$totalroomrate = $subtotal / $nights;
}
//for no of rooms
$try = (explode(" ",$numberofrooms));
$totalnorooms = array_sum($try);

//variables additional
$roomValue = "";
$numberofroomValue = "";
$rateValue = "";
$guestname ="$salutation&nbsp;$fname&nbsp;$lname";
$timeout="11:00";//test
$discountTotal= "";
$totalBill = "";
$weekDiscountTotal ="";
$guestDiscountTotal ="";
	
$timeinTEST = str_replace(":", "", $timein);
	if($timeinTEST <= 1159){
		$ampmIn ="am";
	}else if($timeinTEST >= 1200){
		$ampmIn ="pm";
	}
	
	$timeoutTEST = str_replace(":", "", $timeout);
	if($timeoutTEST <= 1159){
		$ampmOut ="am";
	}else if($timeoutTEST >= 1200){
		$ampmOut ="pm";
	}
	//....am or pm end 
?>

	<!-- Main content -->
    <section class="content" id="font">
      <div class="row" id="form">
        <!-- left column -->
        <div class="col-md-8">
		
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="box-title">
				<img height="78" width="95" src="assets/img/yuj.jpg">
				<h3><b>Official Receipt</b></h3>
				<p>Booking ID :&nbsp;<b><?php echo $rcode;?></b></p>
				<hr width="400%" align="center">
			  </div>
            </div>
            <!-- /.box-header -->
            <!-- form start <label>Reservation Summary</label>-->
              <div class="box-body">
                <div class="form-group">
                  
				  <table>
					<tr>
					<td>
						<p>
						<b>Check In Date:</b>&nbsp;&nbsp;&nbsp;<?php echo date_format(date_create($checkin),"M j,Y")?>
						<br>
						<b>Check Out Date:</b>&nbsp;&nbsp;<?php echo date_format(date_create($checkout),"M j,Y")?>
						<br>
						<b>Number of Night(s):</b>&nbsp;&nbsp;<?php echo $nights?>
						<br>
						<b>Number of Room(s):</b>&nbsp;&nbsp;<?php echo $totalnorooms?>
						<br><br><br>
						</p>
					</td>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
					<td bgcolor="#E8E8E8" width="60%">
						<label>Guest Details</label>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<b>Guest Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$salutation $fname $lname";?>
						<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<b>Type of Guest:</b>&nbsp;&nbsp;&nbsp;<?php echo $guestType;?>
						<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<b>Email Address:</b>&nbsp;&nbsp;&nbsp;<?php echo $email?>
						<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<b>Contact Number:</b>&nbsp;&nbsp;&nbsp;<?php echo $contact?>
						</p>
					</td>
					</tr>
					<tr rowspan="2">
					<td valign="baseline">
						<p>
						<b>&nbsp;Standard Time In:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date_format(date_create("$timein"),"g:i a");?>
						</p>
					</td>
					</tr>
					<tr>
					<td valign="top">
						<p>
						<b>Standard Time Out:</b>&nbsp;&nbsp;<?php echo date_format(date_create("$timeout"),"g:i a");?>
						<br>
						<i id="note">(if you would like an immediate access to your<br> room we recommend booking
						the room for the<br>prior night for immediate access.)</i>
						</p>
					</td>
					<td></td>
					<td bgcolor="#E8E8E8">
						<label>Payment Details</label>
						<table align="center">
							<?php
							echo "<tr>";
							echo "<td><p><b>Room Type</b></p></td>";
							echo "<td><p><b>Rate</b></p></td>";
							echo "<td><p><b>No of Rooms</b></p></td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td><p><i>";
							echo preg_replace('/ /', ' <br> ', trim($roomtype));
							echo "</i>&nbsp;</p></td>";
							echo "<td><p>";
							echo preg_replace('/ /', ' <br> ', trim($roomrates));
							echo "</p></td>";
							echo "<td align='center'><p>";
							echo preg_replace('/ /', ' <br> ', trim($numberofrooms));
							echo "</p></td>";
							echo "</tr>";
							//divider
							echo "<tr>";
							echo "<td>----------------------</td>";
							echo "<td>------------</td>";
							echo "<td>---------------</td>";
							echo "</tr>";
							//total of rooms
							echo "<tr>";
							echo "<td><p><i>Total Room Rate:</i>&nbsp;</p></td>";
							$totalroomrate_f = number_format($totalroomrate,2);
							echo "<td><p>$totalroomrate_f</p></td>";
							echo "</tr>";
							//number of nights
							echo "<tr>";
							echo "<td><p><i>No. of Nights:</i>&nbsp;</p></td>";
							echo "<td><p>$nights</p></td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td><p><i>Sub Total:</i>&nbsp;</p></td>";
							$subtotal_F = number_format($subtotal,2);
							echo "<td><p>$subtotal_F</p></td>";
							echo "</tr>";
							echo "<tr>";
					if($discount == ".1"){
						$weekDiscount = .1;
						$weekDiscountTotal = $subtotal * $weekDiscount;
						echo "<td><p><i>Week Discount(10%):</i>&nbsp;</p></td>";
						$weekDiscountTotal_f = number_format($weekDiscountTotal,2);
						echo "<td><p>$weekDiscountTotal_f</p></td>";
					}else if($discount == ".2"){
						$weekDiscount = .2;
						$weekDiscountTotal = $subtotal * $weekDiscount;
						echo "<td><p><i>Week Discount(20%):</i>&nbsp;</p></td>";
						$weekDiscountTotal_f = number_format($weekDiscountTotal,2);
						echo "<td><p>$weekDiscountTotal_f</p></td>";
					}else{
						$discount = 0;
					}
				echo "</tr>";
				echo "<tr>";
					if($guestType == "Regular" || $guestType == "" ||$guestType == "None"){
						$guestDiscount = 0;
					}else{
						echo "<td><p><i>Guest Discount(20%):</i>&nbsp;</p></td>";
						$guestDiscount = .20;
						$guestDiscountTotal = $subtotal * $guestDiscount;
						$guestDiscountTotal_f = number_format($guestDiscountTotal,2);
						echo "<td><p>$guestDiscountTotal_f</p></td>";
					}
				echo "</tr>";
				//divider
				//divider
				echo "<tr>";
				echo "<td>----------------------</td>";
				echo "<td>------------</td>";
				echo "<td>---------------</td>";
				echo "</tr>";
				//remaining balance
				echo "<tr>";
				echo "<td><p><b>Grand Total:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP</p></td>";
				$totalbill = ($subtotal-$weekDiscountTotal) - $guestDiscountTotal;
				$totalbill_F = number_format($totalbill,2);
				echo "<td><p><b>$totalbill_F</b></p></td>";
				
				echo "</tr>";
							?>
						</table>
					</td>
					</tr>
					</table>
                </div>
			  </div>				
              <div class="box-footer" align="right">
			   <!--for printing-->
			   <iframe src="print1.php?guestid=<?php echo $id?>" style="display:none;" name="frame"></iframe>
			   <input type="button" class="btn btn-primary" onclick="frames['frame'].print()" value="Print">
			   <!--//end..for printing-->
			  <a href="bookingRecords.php">
					<button type="button" class="btn btn-default" name="back" id="back">Back</button>
				</a>
              </div>
			</form>
          </div>
          <!-- /.box -->
		  </div>
		</div>
	  </div>
	  </div>
	</section>
	   

	   <!--hanggang dito lang lalagay-->
      </div><!-- /.content-wrapper -->
                 
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>
