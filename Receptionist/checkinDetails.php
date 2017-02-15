<!DOCTYPE html>
<?php
include('../Admin/session.php');
include('../Yujinn/connect.php');
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$curTime = date("H:i");
$time = date("g:i a");
$curDate = date('m/d/Y');
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

	
#alignment {width: 100%;
    margin-right: 30%;
    margin-left: 20%;
	}

</style>

<script>  
$(document).ready(function(){
$('.a').on('change',function(){
location.href = "checkinDetails.php?guestid=<?php echo $_GET['guestid']?>&discount=" + $('.a').val();
})
})
</script>

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
		 <li class="active" >
          <a href="home.php">
            <i class="fa  fa-home"></i> <span>Home</span>
          </a>
		  </li>
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
}
$roomValue = "";
$numberofroomValue = "";
$rateValue = "";
$guestDiscount = "";
$newtotalcost = "";
$newguestType = "";
?>	
<!-- Design Output-->
<div id="alignment">
    <section class="content" id="font">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
		
          <!-- general form elements -->
          <div class="box box-primary"><center>
            <div class="box-header with-border">
              <div class="box-title"><h3><i class="fa fa-check">&nbsp;Confirm Check In</i></h3></div>
            </div></center>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
				  <?php
				  //<label>Reservation Summary</label>
				  echo"<p><i>Booking ID:</i><b> &nbsp;$rcode</b></p>";
				  echo"<p><i>Guest Name:</i><b>&nbsp;$salutation $fname $lname</b></p>";
				  $checkin_f = date_format(date_create($checkin),"M j,Y");
				  $checkout_f = date_format(date_create($checkout),"M j,Y");
				  echo"<p><i>Check In Date</i> &nbsp;$checkin_f 
					&nbsp;&nbsp;&nbsp;&nbsp;
					<i>Check Out Date:</i>&nbsp;$checkout_f</p>";
				  echo"<p><i>Actual Arrival Time:</i> &nbsp;$time
						<br><i>(Standard Arrival Time is 1:00pm and Standard Check Out Time is 11:00am)</i></p>";
				  
				  ?>
                </div>
			  </div>
				<div class="box-footer">
				
				<label>Reservations</label>
				<table align="center">
				 <?php
				 echo "<tr>";
				 echo "<td><p><b>Room Type</b></p></td>";
				 echo "<td><p><b>(No. of Rooms)</b></p></td>";
				 echo "</tr>";
				 echo "<tr>";
				 echo "<td><p><i>";
				 echo preg_replace('/ /', ' <br> ', trim($roomtype));
				 echo "</i>&nbsp;</p></td>";
				 echo "<td align='center'><p>";
				 echo preg_replace('/ /', ' <br> ', trim($numberofrooms));
				 echo "</p></td>";
				 echo "</tr>";
				 ?>
				 </table>
				 </div>
				 <div class="box-footer">
				  <div class="form-group">
				 <form method="GET" action="">
					<p><b>Add Guest Discount</b>&nbsp;&nbsp;<select name="discount" class = "a"> 
						<option hidden selected value =""> 
						<?php 
						if(isset($_GET['discount'])){
							echo $_GET['discount'];
						}
						else{
							echo 'None';
						}
						?>
						</option>
						<option value="None">None</option>
						<option value="Senior Citizen">Senior Citizen</option>
						<option value="PWD">PWD</option>
					</select>
					</p> 
				</form>
				<table align="center">
				<?php
				if(isset($_GET['discount'])){
					if(($_GET['discount'] == "Senior Citizen" || $_GET['discount'] == "PWD") && $guestType != "Senior Citizen" && $guestType != "PWD"){
						$guestDiscount = $subtotal * .2;
						$newtotalcost = $totalcost - $guestDiscount;
						
						$newguestType = $_GET['discount'];
						
						echo "<tr>";
						echo "<td><p><i>Sub Total:</i></p></td>";
						$subtotal_F = number_format($subtotal,2);
						echo "<td><p><i>$subtotal_F</b></i></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<tr>";
						if($discount == ".1"){
							$weekDiscount = .1;
							$weekDiscountTotal = $subtotal * $weekDiscount;
							echo "<td><p><i>Week Discount(10%):</i>&nbsp;</p></td>";
							$weekDiscountTotal_f = number_format($weekDiscountTotal,2);
							echo "<td><p><i>$weekDiscountTotal_f</i></p></td>";
						}else if($discount == ".2"){
							$weekDiscount = .2;
							$weekDiscountTotal = $subtotal * $weekDiscount;
							echo "<td><p><i>Week Discount(20%):</i>&nbsp;</p></td>";
							$weekDiscountTotal_f = number_format($weekDiscountTotal,2);
							echo "<td><p><i>$weekDiscountTotal_f</i></p></td>";
						}else{
							$discount = 0;
						}
						echo "</tr>";
						echo "<tr>";
						echo "<td><p><b>------------------------------</b></p></td>";
						echo "<td><p><b>-----------</b></p></td>";
						echo "</tr>";
						echo "<td><p><i>Total Bills (paid):</i></p></td>";
						$totalcost_F = number_format($totalcost,2);
						echo "<td><p><i>$totalcost_F</b></i></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><p><i>Guest Discount(20%):</i></p></td>";
						$guestDiscount_F = number_format($guestDiscount,2);
						echo "<td><p><i>$guestDiscount_F</i></p></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><p><b>------------------------------</b></p></td>";
						echo "<td><p><b>-----------</b></p></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><p><i>New Total Bills(paid):</i></p></td>";
						$newtotalcost_F = number_format($newtotalcost,2);
						echo "<td><p><i>$newtotalcost_F</b></i></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><p><b>------------------------------</b></p></td>";
						echo "<td><p><b>-----------</b></p></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><p><b>Total Refund Amount:</b></p></td>";
						$guestDiscount_F = number_format($guestDiscount,2);
						echo "<td><p><b>$guestDiscount_F php</b></p></td>";
						echo "</tr>";
					}else if($_GET['discount'] == 'None'){
						$newtotalcost = $totalcost;
						$newguestType = $guestType;
						echo "";
					}
					else{
						echo "<p align = 'center'>This Guest already has a $guestType Discount.</p>";
						$newtotalcost = $totalcost;
						$newguestType = $guestType;
					}
				}else{
					$newtotalcost = $totalcost;
					$newguestType = $guestType;
					echo "";
				}
				?>
				</table>
				</div>
				</div>
             <div class="box-footer" align="right">
			   
			   <!--Control buttons--> 
			   <p><b>Are you sure to Check In this guest?</b></p>
			   <input type="button" class="btn btn-success" name="checkin" value="Check In" id="finish"/>
			   
			    <a href="home.php">
				<button type="button" class="btn btn-danger"" name="back" id="back">Cancel</button>
				</a>
              </div>
          <!-- /.box -->
		  </div>
		</div>
	  </div>
	</div>
	</section>
</div>
	</body>
<form role="form" method="post">
		<!-- modal for success check in-->
	<center>
		<div id="finishModal" class="modal fade modal-primary">
		
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Alert</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="depositamount">Succesfully Checked In<br><?php echo"$salutation $fname $lname";?></label>
						</div>
					<div class="modal-footer">
						
						<button type="submit" class="btn btn-success btn-md" name="submit">&nbsp;&nbsp;Ok&nbsp;&nbsp;</button>
						
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
		<?php

	if(isset($_POST['submit'])){
		//assigning variables
		$status="Arrived";
		$timein="$curTime";
		$guestName = "$salutation $fname $lname";
		$try  = (explode(" ",$numberofrooms));
		$room1  = (explode(" ",$roomtype));
		$count = count($try);
		$datetoday = date('m/d/Y');
		$receptionist = $login_session_firstname . $login_session_lastname;
		
		mysql_query("INSERT into tbl_dailysales(date,receptionist,guestname,roomtype,roomrates,total)
		VALUES('".$datetoday."','".$receptionist."','".$guestName."','".$roomtype."','".$roomrates."',
		'".$newtotalcost."')")or die(mysql_error());;

		//update tbl_addguest_walkin from Checked in to CHecked out
		mysql_query("UPDATE tbl_addguest SET status='".$status."',arrivaltime='".$timein."'
			,guestType='".$newguestType."',totalcost='".$newtotalcost."' WHERE addguest_id='".$id."'");
			
		//for room saving to tbl_room
		for($i=0;$i<$count;$i++){
			$room = $room1[$i];
			$noro = $try[$i];
			for($j=1;$j<=$noro;$j++){
				mysql_query("UPDATE tbl_room SET roomstatus = 'Occupied', addguest_id = '".$id."',
					guestName = '".$guestName."' WHERE category = '".$room."' AND roomstatus = 'Available'
					ORDER BY room_id ASC LIMIT 1");
			}
		}
		
		mysql_close($con);
		?>
		<script type="text/javascript">
		window.location = "home.php";
		</script>
		<?php
		}?>
		</form>
		<!--modal deposit end-->
		
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
