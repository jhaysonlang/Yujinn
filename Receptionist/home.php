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
	.modal-dialog {
  padding-top: 10%;
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
  
  <?php
	$name = $login_session_firstname." ". $login_session_lastname;
	

	$Insert = "INSERT INTO tbl_login(position,name,login_time,login_date)VALUES('".$login_session_position."','".$name."','".$login_session_login_time."','".$login_session_login_date."')";
	$result = mysql_query($Insert);
	
  ?>
  
  
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
		 <li class="active">
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
	<section class="content">
    <div class="row">
        <div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<center> <h3 class="box-title"><b>Manage Reservations</b></h3></center>
				</div>
            <!-- /.box-header -->
				<div class="box-body">
				
				<form method="GET" action="">
			Filter by <select name="id" class = "a"> 
				<option hidden selected value =""> 
				<?php 
				if(isset($_GET['id'])){
					echo $_GET['id'];
				}
				else{
					echo 'All Records';
				}
				?>
				</option>
				<option value="All Records">All Records</option>
				<option value="Pending"> Pending</option>
				<option value="Reserved">Reserved</option>
				<option value="Arrived">Arrived</option>
				<option value="No Show">No Show</option>
			</select>
			
			<input type="submit" name="Submit" value="Search" class="pull-right" />
			<input type="text" name="search" class="pull-right"/>
		</form>
		<br>
		<?php 
		
		
		if(isset($_GET['search'])){
			$search = ($_GET['search']);
			$qry = mysql_query("SELECT * FROM tbl_addguest where status <> 'Checked Out' and status <>
					'No Show' and status <> 'Cancel' and (rcode like '%$search%' or checkin like '%$search%' or emailaddress
					like '%$search%' or firstname like '%$search%' or lastname like '%$search%')");
		}else{
			if(isset($_GET['id'])){
				if($_GET['id'] ==  "All Records"){
					$qry = mysql_query("SELECT * FROM tbl_addguest WHERE status <> 'Checked Out' and status <> 'No Show' and status <> 'Cancel'");
				}else{
					$id = $_GET['id'];
					$qry = mysql_query("SELECT * FROM tbl_addguest WHERE status = '$id' and status <> 'Checked Out' and status <> 'No Show' and status <> 'Cancel'");
				}
			}
			else{
				$qry = mysql_query("SELECT * FROM tbl_addguest WHERE status <> 'Checked Out' and status <> 'No Show' and status <> 'Cancel'");
			}
		}
		if(mysql_num_rows($qry) == 0){
			echo "<center>NO RECORDS FOUND</center><br>";
		}
		?>
				
				<table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Booking ID</th>
				  <th>Check In Date</th>
				  <th>Guest Name</th>
				  <th>Email Address</th>
                  <td align="center"><b>Status</b></td>
				  <td align="center"><b>Operation</b></td>
                </tr>
                </thead>
                <tbody>
				<tr>
                <?php
				date_default_timezone_set('Asia/Manila');//set timezone
				$curTime = date("H:i");//curent time
				$curDate = date('m/d/Y');//current date
				$getLinks = "SELECT * FROM tbl_addguest WHERE status <> 'Checked Out' and status <> 'No Show' and status <> 'Cancel'";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($qry)) {
						
					echo "<tr>";
					
					$guestname = $rs['salutation']."&nbsp;".$rs['firstname']."&nbsp;".$rs['lastname'];
					$guestid = $rs['addguest_id'];
					
					echo "<td>".$rs['rcode']."</td>";
					//$check = date_format(date_create($rs['checkin']),"F j, Y");
					echo "<td>".$rs['checkin']."</td>";
					echo "<td>".$guestname."</td>";
					echo "<td>".$rs['emailaddress']."</td>";
					echo "<td align='center'>";
					//for status design
					if(strtotime($rs['checkout'])<strtotime($curDate)){
						echo "<span class='label label-default'>No Show</span>";
					}else if($rs['status'] == "Pending"){
						echo "<span class='label label-warning'>".$rs['status']."</span>";
					}else if($rs['status'] == "Arrived"){
						echo "<span class='label label-info'>".$rs['status']."</span>";
					}else if($rs['status'] == "Reserved"){
						echo "<span class='label label-primary'>".$rs['status']."</span>";
					}
					echo "</td>";
					echo "<td align='center'>";
					//button validation disabled or not 
					if(strtotime($rs['checkout'])<strtotime($curDate)){
						?><a href="remove-exec.php?guestid=<?php echo $rs['addguest_id']?>"><?php
							echo "<button type='button' name='noshow' id='noshow' class='btn btn-default btn-large'>Remove</button>";
						?></a><?php
					}else if($rs['status'] == "Arrived"){
						?><a href="checkoutDetails.php?guestid=<?php echo $rs['addguest_id']?>"><?php
						//echo "<button type='submit' name='checkout' id='checkout' data-toggle='modal' data-target='#checkOutModal' class='btn btn-danger btn-large'>Check Out</button>";
						echo "<button type='button' name='checkout' id='checkout' class='btn btn-danger btn-large'>Check Out</button>";
						?></a><?php
					}else if($rs['status'] == "Reserved"){
						?><a href="checkinDetails.php?guestid=<?php echo $rs['addguest_id']?>"><?php
						echo "<button type='submit' name='checkin' id='checkin' class='btn btn-success btn-large'>Check In</button>";
						?></a><?php
					}
					else{
						echo "<input type='button' name='disabled check in' value='Check In' class='btn btn-success btn-large disabled'>";
					}
					echo "</td>";
					echo "</tr>";
		
				}
	
	echo "</tr>";
                echo "</tbody>";
               
             echo "</table>";
        
       echo  " </div><!-- /.box-body -->";
          echo " </div><!-- /.box -->";

		  echo "</div><!-- /.col -->";
         echo " </div><!-- /.row -->";
      echo "</section><!-- /.content -->";
	?>
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


<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
$(document).ready(function(){
$('.a').on('change',function(){
location.href = "home.php?id=" + $('.a').val();
})
})
</script>

</body>
</html>
