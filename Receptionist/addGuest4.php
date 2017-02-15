
<!DOCTYPE html>
<?php
include('../Admin/session.php');
include('../Yujinn/connect.php');
$receptionist = "$login_session_firstname $login_session_lastname";
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
  

<!--2nd try on MOdal-->
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<!--MOdal-->
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

<!--for printing the receipt-->
<script>
function printFunction(){
    window.print();
}
</script>
<style>
@media print {
  /* style sheet for print goes here */
  #print,#finish,#btncancel,#back{  display:none; }
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
            <i class="fa  fa-home"></i> <span>Home</span>
          </a>
		  </li>
		   <li class="active" >
          <a href="addGuest1.php">
            <i class="fa  fa-user-plus"></i> <span>Add Guest</span>
          </a>
		  </li>
		  <li>
          <a href="roomMonitoring.php">
            <i class="fa fa-bed"></i> <span>Room Monitoring</span>
          </a>
        </li>
		<li>
          <a href="bookingRecords.php">
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
		<!-- to view summary at top part-->
<?php
if(isset($_GET)){
	$rooms = $_GET['rooms'];
	$numberofrooms = $_GET['numberofrooms'];
	$rate = $_GET['rate'];
	$roomValue = "";
	$numberofroomValue = "";
	$rateValue = "";
	$checkin = $_GET['checkin'];
	$checkout = $_GET['checkout'];
	$salutation = $_GET['salutation'];
	$first = $_GET['fname'];
	$last = $_GET['lname'];
	$guestType = $_GET['guestType'];
	$guestDiscount = "";
	$weekDiscount ="";
	//$persons = $_GET['guestNo'];
	$email = $_GET['email'];
	$contact = $_GET['contactNo'];
	$timeIn = $_GET['timeIn'];
	$timeout = "11:00";
	$numberofdays = ((strtotime($checkout) - strtotime($checkin)) / (60*60*24));
	$subtotal = $_GET['roomRate'] * $numberofdays;
	$totalroomrate =  $_GET['roomRate'];
	$totalBill = "";
	$weekDiscountTotal ="";
	$guestDiscountTotal ="";
	$rcode = $_GET['rcode'];
}

//for no of rooms
if(count($numberofrooms) > 1){
	foreach ($numberofrooms as $numberofrooms) {
		$numberofroomValue = $numberofroomValue . ' ' . $numberofrooms;
	}
}
else{
	$numberofroomValue = $numberofrooms[0];
}
$try = (explode(" ",$numberofroomValue));
$totalnorooms = array_sum($try);
?>	
<!-- Design Output-->
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
						<b>Number of Night(s):</b>&nbsp;&nbsp;<?php echo $numberofdays?>
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
						<b>Guest Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$salutation $first $last";?>
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
						<b>&nbsp;Standard Time In:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date_format(date_create("$timeIn"),"g:i a");?>
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
							if(count($rooms) > 1){
								foreach ($rooms as $rooms) {
									$roomValue = $roomValue . ' ' . $rooms;
								}
							}
							else{
								$roomValue = $rooms[0];
							}
							echo preg_replace('/ /', ' <br> ', trim($roomValue));
							echo "</i>&nbsp;</p></td>";
							if(count($rate) > 1){
								foreach ($rate as $rate) {
									$rateValue = $rateValue . ' ' . $rate;
								}
							}
							else{
								$rateValue = $rate[0];
							}
							echo "<td><p>";
							echo preg_replace('/ /', ' <br> ', trim($rateValue));
							echo "</p></td>";
							echo "<td align='center'><p>";
							echo preg_replace('/ /', ' <br> ', trim($numberofroomValue));
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
							echo "<td><p>$numberofdays</p></td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td><p><i>Sub Total:</i>&nbsp;</p></td>";
							$subtotal_F = number_format($subtotal,2);
							echo "<td><p>$subtotal_F</p></td>";
							echo "</tr>";
							echo "<tr>";
							if($numberofdays >= 7 && $numberofdays < 14){
								$weekDiscount = .1;
								$weekDiscountTotal = $subtotal * $weekDiscount;
								echo "<td><p><i>Week Discount(10%):</i>&nbsp;</p></td>";
								$weekDiscountTotal_f = number_format($weekDiscountTotal,2);
								echo "<td><p>$weekDiscountTotal_f</p></td>";
							}else if($numberofdays >=14 && $numberofdays < 21){
								$weekDiscount = .2;
								$weekDiscountTotal = $subtotal * $weekDiscount;
								echo "<td><p><i>Week Discount(20%):</i>&nbsp;</p></td>";
								$weekDiscountTotal_f = number_format($weekDiscountTotal,2);
								echo "<td><p>$weekDiscountTotal_f</p></td>";
							}else{
								$weekDiscount = 0;
							}
							echo "</tr>";
							echo "<tr>";
							if($guestType == "Regular" ){
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
							echo "<tr>";
							echo "<td>----------------------</td>";
							echo "<td>------------</td>";
							echo "<td>---------------</td>";
							echo "</tr>";
							//remaining balance
							echo "<tr>";
							echo "<td><p><b>Grand Total:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP</p></td>";
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
			<div class="box-footer">
			
              <div class="box-footer" align="right">
				<form method="POST" action="addGuest4-exec.php">
				<input type = "hidden" name = "rcode" value = "<?php echo $rcode;?>">
				<input type = "hidden" name = "checkin" value = "<?php echo $checkin;?>">
				<input type = "hidden" name = "checkout" value = "<?php echo $checkout;?>">
				<input type = "hidden" name = "nights" value = "<?php echo $numberofdays;?>">
				<input type = "hidden" name = "timein" value = "<?php echo $timeIn;?>">
				<input type = "hidden" name = "room" value = "<?php echo $roomValue;?>">
				<input type = "hidden" name = "rate" value = "<?php echo $rateValue;?>">
				<input type = "hidden" name = "numberofrooms" value = "<?php echo $numberofroomValue;?>">
				<input type = "hidden" name = "persons" value = "<?php echo $persons;?>">
				<input type = "hidden" name = "salutation" value = "<?php echo $salutation;?>">
				<input type = "hidden" name = "fname" value = "<?php echo $first;?>">
				<input type = "hidden" name = "lname" value = "<?php echo $last;?>">
				<input type = "hidden" name = "guestType" value = "<?php echo $guestType;?>">
				<input type = "hidden" name = "emailadd" value = "<?php echo $email;?>">
				<input type = "hidden" name = "contact" value = "<?php echo $contact;?>">
				<input type = "hidden" name = "discount" value = "<?php echo $weekDiscount;?>">
				<input type = "hidden" name = "subtotal" value = "<?php echo $subtotal;?>">
				<input type = "hidden" name = "totalbill" value = "<?php echo $totalbill;?>">
				<input type = "hidden" name = "recep" value = "<?php echo $receptionist;?>">
				
			    <button type="button" class="btn btn-default" name="back" id="back" onclick="history.back(-1)">Back</button>
				<button type="button" class="btn btn-danger" name="cancel" id="btncancel">Cancel</button>
				
				<!--for printing-->
			   <iframe src="print2.php?rcode=<?php echo $rcode?>&checkin=<?php echo $checkin?>
			   &checkout=<?php echo $checkout?>&nights=<?php echo $numberofdays?>&timein=<?php echo $timeIn?>
			   &room=<?php echo $roomValue?>&rate=<?php echo $rateValue?>&numberofrooms=<?php echo $numberofroomValue?>
			   &persons=<?php echo $persons?>&salutation=<?php echo $salutation?>&fname=<?php echo $first?>
			   &lname=<?php echo $last?>&guestType=<?php echo $guestType?>&emailadd=<?php echo $email?>
			   &contact=<?php echo $contact?>&discount=<?php echo $weekDiscount?>&subtotal_F=<?php echo $subtotal_F?>
			   &subtotal=<?php echo $subtotal?>&totalbill=<?php echo $totalbill?>&roomRate=<?php echo $totalroomrate?>"
			   style="display:none;" name="frame"></iframe>
			   <input type="button" name= "print" class="btn btn-primary" onclick="frames['frame'].print()" value="Print Receipt">
			   <!--//end..for printing-->
			   
                <button type="button" class="btn btn-success" id="finish">Finish</button>
              </div>
            
          </div>
          <!-- /.box -->
		  </div>
		</div>
	  </div>
	</div>
	</section>
	</body>
	
		<!-- modal for entering how much to deposit-->
	<center>
		<div id="finishModal" class="modal fade modal-primary">
		
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Success</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="depositamount">The trasaction is complete.</label>
						</div>
					<div class="modal-footer">
						
						<button type="submit" class="btn btn-success btn-md" name="okfinish">&nbsp;&nbsp;Ok&nbsp;&nbsp;</button>
						
					</div>
				</div>
			</div>
		</div>
		</div>
		<script>
		$("#finish").click(function(){
        $("#finishModal").modal({backdrop: "static"});
		
		});
		
		</script>
		</center>
		</form>
		<!--modal deposit end-->
		
		<!-- modal for cancel-->
	<center>
		<div id="myModal" class="modal fade modal-primary" >
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Warning!</h4>
					</div>
					<div class="modal-body">
					<strong>Are you sure?</strong>
						<p font-size="18px">Cancel Booking?</p>
					</div>
					<div class="modal-footer">
						<a href="addGuest1.php">
						<button type="submit" class="btn btn-success btn-md" name="cancel">&nbsp;&nbsp;Yes&nbsp;&nbsp;</button>
						</a>
						<button type="button" class="btn btn-danger btn-md" name="close" data-dismiss="modal">No</button>
					</div>
				</div>
			</div>
		</div>
		<script>
		$("#btncancel").click(function(){
        $("#myModal").modal({backdrop: "static"});
		
		});
		
		</script>
		</center>
		<!--modal end-->
		
<body>
	
		<!--hanggang dito lang lalagay-->
</div><!-- /.content-wrapper -->
   
<!-- ./wrapper -->

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
