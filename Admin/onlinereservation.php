<!DOCTYPE html>
<?php
include('session.php');
include('../Yujinn/connect.php');
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
	td {
		font-weight:bold;
		
	}
	th.manage {
		text-align:center;
		
	}
</style>

<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dailysale.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>DM</span>
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
     
      </form>
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
		<li > 
          <a href=""><i class="fa fa-bed"></i> <span>Rooms</span><i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
				<li ><a href="viewrooms.php"><i class="fa fa-bed"></i> <span>View Rooms</span></a></li>
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
		<li class="active"> 
          <a href=""><i class="fa fa-table"></i> <span>View Tables</span><i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
				<li class="active"><a href="onlinereservation.php"><i class="fa fa-table"></i> <span>Reservation Table</span></a></li>
				
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
             <center> <h3 class="box-title"><b>Online Reservation Table</b></h3></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<!-- for filter and search bar -->
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
				<option value="Checked Out">Checked Out</option>
				<option value="No Show">No Show</option>
				<option value="Cancel">Cancel</option>
			</select>
			
			<input type="submit" name="Submit" value="Search" class="pull-right" />
			<input type="text" name="search" class="pull-right"/>
		</form>
		<br>
		<?php 
		if(isset($_GET['search'])){
			$search = ($_GET['search']);
			$qry = mysql_query("SELECT * FROM tbl_addguest where rcode like '%$search%' 
					or emailaddress like '%$search%' 
					or firstname like '%$search%' or lastname like '%$search%'");
		}else{
			if(isset($_GET['id'])){
				if($_GET['id'] ==  "All Records"){
					$qry = mysql_query("SELECT * FROM tbl_addguest");
				}else{
					$id = $_GET['id'];
					$qry = mysql_query("SELECT * FROM tbl_addguest WHERE status = '$id'");
				}
			}
			else{
				$qry = mysql_query("SELECT * FROM tbl_addguest");
			}
		}
		if(mysql_num_rows($qry) == 0){
			echo "<center>NO RECORDS FOUND</center><br>";
		}
		?>
		<!-- /end../ for filter and search bar -->
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>Booking ID #</th>
					<th>Firstname</th>
					<th>Lastname</th>
				    <!--<th>Receptionist</th>-->
                   <th>Email Address</th>
				  <th>Status</th>
                  <th colspan=2 class="manage">Manage</th>
                </tr>
                </thead>
                <tbody>
				<tr>
                <?php
				//$getLinks = "SELECT * FROM tbl_addguest";
				//$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($qry)) {
					
					if ($rs['status'] == "Reserved") {
							$roomstatus = "<span class='label label-primary'>".$rs['status']."</span>";
						}
						else if ($rs['status'] == 'Pending') {
							$roomstatus = "<span class='label label-warning'>".$rs['status']."</span>";
							
						}
						else if ($rs['status'] == 'Checked In') {
							$roomstatus = "<span class='label label-success'>".$rs['status']."</span>";
							
						}
						else if ($rs['status'] == 'Checked Out') {
							$roomstatus = "<span class='label label-danger'>".$rs['status']."</span>";
						}
						else if ($rs['status'] == 'No Show') { 
							$roomstatus = "<span class='label label-default'>".$rs['status']."</span>";
						}
						else if ($rs['status'] == 'Arrived') { 
							$roomstatus = "<span class='label label-info'>".$rs['status']."</span>";
						}else if ($rs['status'] == 'Cancel') { 
							$roomstatus = "<span class='label label-default'>".$rs['status']."</span>";
						}
						echo "<tr>";
					echo "<td>".$rs['rcode']."</td>";
					echo "<td>".$rs['firstname']."</td>";
					echo "<td>".$rs['lastname']."</td>";
					//echo "<td>".$rs['receptionist']."</td>";
					echo "<td>".$rs['emailaddress']."</td>";
					echo "<td align = 'center'>".$roomstatus."</td>";
					echo "<td align='center'><a   href=viewreservation.php?addguest_id=" . $rs['addguest_id'] . '>' . '<input type="submit" name="update" value="View Details" class="btn btn-primary btn-large">' . "</a></td>";
					echo "<td align='center'> <button type='button' class='btn btn-danger btn-sl' data-toggle='modal' data-target='#myModal'>Delete</button></td>";
						
					echo "</tr>";
					$addguest_id = $rs['addguest_id'];
					
				}
				echo '<div class="container">';
  
  //<!-- Trigger the modal with a button -->
  
 // <!-- Modal -->
 echo ' <div class="modal fade" id="myModal" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">Delete Room</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
      echo '    <p>Are you sure you want to delete this Reservation ?</p>';
	  echo '<a href=deletereservation-exec.php?addguest_id='.$addguest_id.'> <input type="submit" name="Delete" value="Yes" class="btn btn-danger btn-large"></a> &nbsp;';
	
	  echo  '<button type="button" class="btn btn-default" data-dismiss="modal">No</button>';
	
        
		echo '</div>';
       
      echo '</div>';
    echo '</div>';
 echo ' </div>';
echo '</div>';


echo '<div class="container">';
  
  //<!-- Trigger the modal with a button -->
  
 // <!-- ViewModal -->
 echo ' <div class="modal fade" id="myModalView" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">Delete Room</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
      echo '    <p>Are you sure you want to delete this Reservation ?</p>';
	  echo '<a href=deletereservation-exec.php?addguest_id='.$addguest_id.'> <input type="submit" name="Delete" value="Yes" class="btn btn-danger btn-large"></a> &nbsp;';
	
	  echo  '<button type="button" class="btn btn-default" data-dismiss="modal">No</button>';
	
        ?>
		</div>
       
      </div>
    </div>
  </div>
</div>






	
	</tr>
                </tbody>
               
              </table>
        
          </div><!-- /.box-body -->
              </div><!-- /.box -->
           



		   </div><!-- /.col -->
          </div><!-- /.row -->
       </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
                 
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->

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
location.href = "onlinereservation.php?id=" + $('.a').val();
})
})
</script>

</body>
</html>
