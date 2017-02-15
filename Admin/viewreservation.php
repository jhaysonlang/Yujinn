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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<style>
	label.label {
		color:black;
		font-size:17px;
		
		
	}
	
	h4 {
		font-size:20px;
		text-indent:25px;

		
	}
	h2 {
		
		text-indent:25px;

		
	}
	.receipt {
		height:200px;
		width:200px;
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
				<li><a href="updaterooms.php"><i class="fa fa-money"></i> <span>Update Rooms</span></a></li>
				
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
            <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Reservation Details</h3>

          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
			  <?php
			  //name
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					$guestname = $rs['salutation'].$rs['lastname']." ".$rs['firstname'];
					
					
                echo '<label class="label">Guest Name: '.$guestname.'</label>';
               
				}
				 ?>
              </div>
			  <hr>
              <!-- /.form-group -->
              <div class="form-group">
                 <?php
				 //checkin
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					$checkin = $rs['checkin'];
					$checkout = $rs['checkout'];
					$rooms = $rs['roomtype'];
					
					$roomrates = $rs['roomrates'];
					$numberofrooms = $rs['numberofrooms'];
					$nights = $rs['nights'];
					$total = ($rs['roomrates'] * $nights) * $numberofrooms;
					$totalcost = $rs['totalcost'];
					$totalcost = number_format($totalcost);
					?>
					
                <label class="label">Check-in: <?php echo date_format(date_create($checkin),"M j,Y");?></label>
                 <?php
				}
				 ?>
              </div>
			  <hr>
			   <div class="form-group">
                 <?php
				 //time
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					
					
					
                echo '<label class="label">Arrival Time: '.$rs['arrivaltime'].'</label>';
                 
				}
				 ?>
              </div>
			  <hr>
			   <div class="form-group">
                 <?php
				 //roomtype
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					
					?>
                <label class="label">Roomtype: <?php echo preg_replace('/ /', ' and ', trim($rooms));?></label>
              
				<?php
				}
				 ?>
              </div>
			  <hr>
			  
			  
			   <div class="form-group">
                 <?php
				 //Status
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					
                echo '<label class="label">Reservation Status: '.$rs['status'].'</label>';
                 
				
				}
				 ?>
				 <hr>
              </div>
			   <div class="form-group">
                 <?php
				 //totalcost
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					$totalcost = $rs['totalcost'];
					$totalcost = number_format($totalcost,2);
                echo '<label class="label">Total Cost: '.$totalcost.'</label>';
                 
				
				}
				 ?>
<hr>				 </div>

              <!-- /.form-group -->
            </div>
            <!-- /.col -->
			
			<!--Hati-->
			
			
			
            <div class="col-md-6">
              <div class="form-group">
                 <?php
				 //id
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					
					
					
                echo '<label class="label">Booking ID # '.$rs['rcode'].'</label>';
                 
				}
				 ?>
				 <hr>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                 <?php
				 //checkout
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					
					
					
                ?>
					
                <label class="label">Check-Out: <?php echo date_format(date_create($checkout),"M j,Y");?></label>
                 <?php
                
				}
				 ?>
				 <hr>
              </div>
			  
			   <div class="form-group">
                 <?php
				 //nights
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					
					
					
                echo '<label class="label">Nights: '.$rs['nights'].'</label>';
               
				}
				 ?>
				 <hr>
              </div>
			  
			  <div class="form-group">
                 <?php
				 //numberofrooms
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				
					 $try = (explode(" ",$numberofrooms));
				$roomcount = array_sum($try);
               	?>
                <label class="label">No. of Rooms: <?php echo preg_replace('/ /', ' and ', trim($roomcount));?></label>
              
				<?php
				
				 ?>
				
				 </div>
				  
				 <hr>
				 
				  <div class="form-group">
                 <?php
				 //contact
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					
                echo '<label class="label">Contact: '.$rs['contact'].'</label>';
                 
				
				}
				 ?>
				 <hr>
              </div>
			  	  <div class="form-group">
                 <?php
				 //image receipt
			  
			  $id = $_GET['addguest_id'];
			  $getLinks = "SELECT * FROM tbl_addguest where addguest_id=".$id."";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					$receipt = $rs['image'];
					
				
						if ($receipt == !null)
						{
					echo "<label class='label'>Receipt Image: <button type='button' class='btn btn-info btn-sm'	data-toggle='modal' data-target='#myModal'>Click Here to View Image</button></label>";
						}
						else {
							echo "<label class='label'>Receipt Image:</label>No Receipt Uploaded";
						}
					
					
					
             
                 
				
				}
				 ?>
				 <hr>
              </div>
              </div>
			
              <!-- /.form-group -->
            </div>
			   <a href="onlinereservation.php"><input type="submit" name="update" value="OK" class="btn btn-success btn-large"></a>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
       
      </div>
       </section><!-- /.content -->
	   
	   
	   
	   
      </div><!-- /.content-wrapper -->
      
     <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Receipt Image</h4>
      </div>
      <div class="modal-body">
        <p><?php echo "<center><img src='../Yujinn/assets/img/receipt/" .$receipt. "' class='receipt'></center>" ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                 
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

