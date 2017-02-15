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
<?php
//variables
$id= $_GET['guestid'];
$getLinks = "SELECT * FROM tbl_addguest WHERE addguest_id = '".$id."'";
$result = mysql_query($getLinks);
while($rs=mysql_fetch_array($result)) {
	$rcode= $rs['rcode'];
	$checkin= $rs['checkin'];
	$checkout = $rs['checkout'];
	$timein = $rs['arrivaltime'];
	//$timeout = $rs['timeout'];
	$nightno = $rs['nights'];
	$fname = $rs['firstname'];
	$lname = $rs['lastname'];
	$salutation = $rs['salutation'];
	$roomtype= $rs['roomtype'];
	//$roomno=$rs['roomnumber'];
	$roomrate=$rs['roomrates'];
	//$guestno=$rs['guestno'];
	$totalbills=$rs['totalcost'];
	$subtotal=$rs['subTotal'];
	$status=$rs['status'];
	}
	
	//variables additional
	$guestname ="$fname&nbsp;$lname";
	$room = "($roomtype)";
	
	date_default_timezone_set('Asia/Manila');//set timezone
	$getTime = date("G:i");//getting current time
	//$curTime = str_replace(":", "", $getTime);//for comparison
	$curTime = 1300;//for simulation
	$getDate = date("m/d/Y");//get current date
	$curDate = str_replace(".","/",$getDate);//current date
	$addTimeFee = "";
	$addHour = "";
	$addDay = "";
	$addDayFee = "";
	
	if($checkout==$curDate){
		if($curTime>=1100&&$curTime<1200){
			$addTimeFee = 0;
			$addHour = 0;
			$addDay = 0;
			$addDayFee = 0;
		}else if($curTime>=1200&&$curTime<1300){
			$addTimeFee = 100;
			$addHour = 1;
			$addDay = 0;
			$addDayFee = 0;
		}else if($curTime>=1300&&$curTime<1400){
			$addTimeFee = 200;
			$addHour =2;
			$addDay = 0;
			$addDayFee = 0;
		}else if($curTime>=1400){
			$addDayFee=$subtotal;
			$addDay = 1;
			$addTimeFee = 0;
			$addHour = 0;
		}
	}else if(strtotime($checkout) < strtotime($curDate)){
		$days = ((strtotime($curDate) - strtotime($checkout)) / (60*60*24));
		$addDayFee=$subtotal * $days;
		$addDay = $days;
		$addTimeFee = 0;
		$addHour = 0;
	}
	else{
		$addDayFee=0;
		$addDay = 0;
		$addTimeFee = 0;
		$addHour = 0;
	}

	$total = $addTimeFee + $addDayFee;
	
	//Format to money f=format
	$ftotal=number_format($total,2);
	$faddDayFee=number_format($addDayFee,2);
	$faddTimeFee=number_format($addTimeFee,2);
?>
	<!-- Main content -->
<form role="form" method="post" >
	<div id="alignment">
    <section class="content" id="font">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
			<center>
            <div class="box-title"><h3><i class="fa fa-exclamation-triangle">&nbsp;&nbsp;Confirm Check Out</i></h3></div>
            </div></center>
            <!-- /.box-header -->
            <!-- form start .LAyout-->
            <div class="box-body">
			
                <div class="form-group">
				  <p><i>Booking ID:</i>&nbsp;<b><?php echo $rcode?></b></p>
				  <p><i>Guest Name:</i>&nbsp;<b><?php echo $guestname;?></b></p>
				  <p><i>Room:</i>&nbsp;<?php echo $room;?></p>
                </div>
					
					<div class="form-group">
					<label>Reservation Details</label>
					<p>
						<i>Check In Date:</i>&nbsp;
						<?php echo date_format(date_create($checkin),"M j,Y");?>
						<i>&nbsp;&nbsp;&nbsp;Check Out Date:</i>&nbsp;
						<?php echo date_format(date_create($curDate),"M j,Y");?>
						<br>
						<i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Expected check out date of guest is
						<b><?php echo date_format(date_create($checkout),"M j,Y");?></b>)</i>
					</p>
					<p>
						
						<i>Arrival Time:</i>
						<?php echo date_format(date_create($timein),"g:i a");?>
						<i>&nbsp;&nbsp;&nbsp;&nbsp;Check Out Time:</i>
						<?php echo date_format(date_create($getTime),"g:i a");?>
						<br>
						<i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Standard Check Out Time is <b>11:00 pm</b>)</i>
					</p>
					</div>
					<?php
					if($addHour==0){
						echo '<table align="center">';
						echo "<tr></tr>";
					}else{
						echo '<div class="box-footer">';
						echo "<label>Additional Payment&nbsp;</label>";
						//<!--get additional time extended then compute how much addtional payemnt added-->
						echo '<table align="center">';
						echo "<tr>";
						echo "<td><p><i>Add time fee($addHour hr):</i>&nbsp;</p></td>";
						echo "<td><p>$faddTimeFee</p></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>-----------------------</td>";
						echo "<td>-------------</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><p><b>Total Additional Fee:</b>&nbsp;</p></td>";
						echo "<td><p><b>$ftotal php</b></p></td>";
						echo "</tr>";
					}
					?>
					<?php
					if($addDay == 0){
						echo '<table align="center">';
						echo "<tr></tr>";
					}else{
						echo '<div class="box-footer">';
						echo "<label>Additional Payment&nbsp;</label>";
						echo '<table align="center">';
						echo "<tr>";
						echo "<td><p><i>Add Day fee($addDay d):</i>&nbsp;</p></td>";
						echo "<td><p>$faddDayFee</p></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>------------------------</td>";
						echo "<td>-------------</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><p><b>Total Additional Fee:</b>&nbsp;</p></td>";
						echo "<td><p><b>$ftotal php</b></p></td>";
						echo "</tr>";
					}?>
					</table>
				</div>
              <div class="box-footer" align="right">
			   
			   <!--Control buttons--> 
			   <p><b>Are you sure to Check Out this guest?</b></p>
			   <!--for printing-->
			   <iframe src="print3.php?guestid=<?php echo $id?>&addTimeFee=<?php echo $addTimeFee?>&addDayFee=<?php echo $addDayFee?>&addDay=<?php echo $addDay?>&addHour=<?php echo $addHour?>" style="display:none;" name="frame"></iframe>
			   <input type="button" class="btn btn-primary" onclick="frames['frame'].print()" value="Print Receipt">
			   <!--//end..for printing-->
			   <input type="button" class="btn btn-success" name="checkout" id="finish" value="Check Out"/>
			   
			    <a href="home.php">
				<button type="button" class="btn btn-danger"" name="back" id="back">Cancel</button>
				</a>
              </div>
          </div>
          <!-- /.box -->
		  </div>
		</div>
	  </div>
	</div>
	</section>
</div>
	</body>
			
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
							<label for="depositamount">Succesfully Checked Out<br><?php echo"$salutation $fname $lname";?></label>
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
		$status="Checked Out";
		$timeout = $getTime;//save this also
		$newCheckout = $curDate;
		//update tbl_addguest_walkin from Checked in to CHecked out
		mysql_query("UPDATE tbl_addguest SET status='".$status."',checkout='".$newCheckout."' WHERE addguest_id='".$id."'");
		
		
		//update tbl_room to no people inside blah bla
		mysql_query("UPDATE tbl_room SET roomstatus = 'Available', addguest_id = '0',
					guestName = ' ' WHERE addguest_id = '".$id."'");
		mysql_close($con);
		?>
		<script type="text/javascript">
		window.location = "home.php";
		</script>
		<?php
		}?>
</form>
	   
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
