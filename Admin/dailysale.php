<!DOCTYPE html>
<?php
include('session.php');
include('../Yujinn/connect.php');
$curDate = date('m/d/Y');
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$checkin = date('m/d/Y');
$checkout = date('m/d/Y', strtotime("+1 day", strtotime($checkin)));
$checkouts = date('d', strtotime("-1 day", strtotime($checkin)));
$time_in_12_hour_format  = date("g:i a", strtotime("13:30"));
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Yuj inn Admin</title>
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

    
 <!--Datepicker-->
  <link type="text/css" href="../Receptionist/css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="../Receptionist/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Receptionist/js/jquery-ui-1.8.21.custom.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
 <style type="text/css">
@media print {
    #hide{
        display :  none;
    }
}
</style>
  <script>
$(function() {
    $( "#sd" ).datepicker({
        // before datepicker opens run this function
        beforeShow: function(){
            // this gets today's date       
            var theDate = new Date();
            // sets "theDate" 2 days ahead of today
            theDate.setDate(theDate.getDate());
			//theDate.setDate(<?php echo $checkin ?>);
            // set min date as 2 days from today
            $(this).datepicker('option','minDate',theDate);         
        },
        // When datepicker for start date closes run this function
        onClose: function(){
            // this gets the selected start date        
            var theDate = new Date($(this).datepicker('getDate'));
            // this sets "theDate" 1 day forward of start date
            theDate.setDate(theDate.getDate() + 1);
            // set min date for the end date as one day after start date
            $('#ed').datepicker('option','minDate',theDate);
			
        }
    });
    $( "#ed" ).datepicker({
        // before datepicker opens run this function
        beforeShow: function(){
            // this gets today's date       
            var theDate = new Date($( "#sd" ).datepicker('getDate'));
            // sets "theDate" 2 days ahead of today
            theDate.setDate(theDate.getDate() + 1);
            // set min date as 2 days from today
            $(this).datepicker('option','minDate',theDate);         
        }	
	});
});

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m;
    var t = setTimeout(startTime, 500);
};
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
};
function timeAdjust()
{
	var elem1=document.getElementById('nights').value;
	var elem2 = $('#sd').val();
	var elem3 = $('#ed').val();
	var elem=document.getElementById('nights');
	var date1 = new Date(elem2);
	var date2 = new Date(elem3);
	var nights=(date2.getTime()-date1.getTime())/86400000;

	if(nights==0){
		elem.value=1;
	}else{
		elem.value=nights;
	}
	
}
</script>
</head>
<style>
	td.red {
		color:red;
	}
</style>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
     <a href="dailysale.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>YUJ</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ADMIN</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
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
			$name = $login_session_firstname." ". $login_session_lastname;
		?>
           <p align="left"><?php echo $name; ?></p>
		   <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
	  
       <br>
	   <!--Reports-->
	  <li class="treeview"> 
          <a href=""><i class="fa fa-info-circle"></i> <span>Update Reports</span><i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="dailysale.php"><i class="fa fa-money"></i> Daily Sale</a></li>
             <!-- <li ><a href="roomreports.php"><i class="fa fa-bed"></i> Room Reports</a></li>-->
			 <!--<li ><a href="loginreports.php"><i class="fa fa-sign-in" ></i> Log-in Reports</a></li>-->
            <!--<li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i>Log-in Session</a></li>-->
          </ul>
        </li>
		
		 
		 <!--Rooms-->
		<li class="treeview"> 
          <a href=""><i class="fa fa-bed"></i> <span>Rooms</span><i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
				<li><a href="viewrooms.php"><i class="fa fa-bed"></i> <span>View Rooms</span></a></li>
				<li><a href="updaterooms.php"><i class="fa fa-money"></i><span>Update Rates</span></a></li>
				
          </ul>
        </li>
		
		 <!--Account-->
		<li class="treeview"> 
          <a href=""><i class="fa fa-user"></i> <span>Accounts</span><i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
				<li><a href="viewaccounts.php"><i class="fa fa-user"></i> <span>View Accounts</span></a></li>
				 <li><a href="updateaccounts.php"><i class="fa fa-user-plus"></i> <span>Update Accounts</span></a></li>
          </ul>
        </li> 
		<li class="treeview"> 
          <a href=""><i class="fa fa-table"></i> <span>View Tables</span><i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
				<li ><a href="onlinereservation.php"><i class="fa fa-table"></i> <span>Reservation Table</span></a></li>
				 
          </ul>
        </li>  
		<li><a href="pendingreservation.php"><i class="fa fa-hourglass-1"></i> <span>Pending Status</span></a></li>	
		<li><a href="depositaccount.php"><i class="fa fa-credit-card"></i> <span>Deposit Account</span></a></li>
        <li><a href="logout.php"><i class="fa fa-sign-in"></i> <span>Log-out</span></a></li>

  </ul>
	  
    </section>
 
  </aside>
 
   <div class="content-wrapper">
    		<!--dito lalagay mga input--->
	       <section class="content">
          <div class="row">
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
			<center>
              <h3 class="box-title"><b>Daily Sales Reports</b></h3>
				</center>
			
			  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<!-- for filter and search bar -->
		<form method="GET" action="dailysale.php">
			<label>Start:&nbsp;</label> <input type="text" name="checkin" id='sd' placeholder="Check-in" value="<?php if(isset($_GET['checkin'])){echo $_GET['checkin'];}else{ echo $checkin; }?>"required>
			&nbsp;&nbsp;&nbsp;
			<label>End:&nbsp;</label> <input type="text" name="checkout" id='ed' placeholder="Check-out" value="<?php if(isset($_GET['checkout'])){echo $_GET['checkout'];}else{ echo $checkout; } ?>"required>
			<input type="submit" name="Submit" value="Search" id ="hide"/>
		</form>
		<br>
		<?php 
		$sum = "";
		if(isset($_GET['Submit'])){
			$checkin = ($_GET['checkin']);
			$checkout= ($_GET['checkout']);
			if (strtotime($_GET['checkout']) < strtotime($_GET['checkin'])){
			?><script>
				alert('Wrong input');
				window.location.href='dailysale.php';
			</script><?php
			}else{
				$qry = mysql_query("SELECT * FROM tbl_dailysales where date BETWEEN '$checkin' AND '$checkout'");
				while($rs=mysql_fetch_array($qry)) {
					$sum += $rs['total'];
				}
				$qry1 = mysql_query("SELECT * FROM tbl_dailysales where date BETWEEN '$checkin' AND '$checkout'");
			}
		}else{
			$qry = mysql_query("SELECT * FROM tbl_dailysales where date='$curDate'");
			while($rs=mysql_fetch_array($qry)) {
					$sum += $rs['total'];
			}
			$qry1 = mysql_query("SELECT * FROM tbl_dailysales where date='$curDate'");
		}
		if(mysql_num_rows($qry1) == 0){
			echo "<center>NO RECORDS FOUND</center><br>";
		}
		?>
		<!-- /end../ for filter and search bar -->
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
				 <th>Date</th>
                  <!--<th>Receptionist</th>-->
				  <th>Guest Name</th>
                  <th>Room Taken</th>
                  <!--<th>Room Rates</th>-->
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
				<tr>
                <?php
				$totalcost = "";
				while($rs=mysql_fetch_array($qry1)){
					$total = $rs['total'];
					$totalcost = number_format($total,2);
					$roomrate = $rs['roomrates'];
					$rates = number_format($roomrate,2);
						echo "<tr>";
					$date = $rs['date'];
					$dates = date_format(date_create($date),"D, M d, Y");
					echo "<td>".$dates."</td>";
					//echo "<td>".$rs['receptionist']."</td>";
					echo "<td>".$rs['guestname']."</td>";
					echo "<td>".$rs['roomtype']."</td>";
					//echo "<td>".$rates."</td>";
					echo "<td>".$totalcost."</td>";
					
					
					echo "</tr>";
					
				}
				$totalsum = number_format($sum,2);
	?>
	</tr>
	<tr>
		</tr>
		<tr>
		
			<td ><b>TOTAL</b></td>
			<td></td>
			<td></td>
			<td class="red"><b><?php echo $totalsum?></b></td>
		</tr>
                </tbody>
               
              </table>
			  <br>
         <input id ="hide" type="submit" name="update" value="Print" onclick="myFunction()" class="btn btn-primary btn-large">
		 <!--</form>-->
          </div><!-- /.box-body -->
              </div><!-- /.box -->
           



		   </div><!-- /.col -->
          </div><!-- /.row -->
       </section><!-- /.content -->
	   
	   
	   
	   
      </div><!-- /.content-wrapper -->
      
<script>
function myFunction() {
    window.print();
}
</script>
                 
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
