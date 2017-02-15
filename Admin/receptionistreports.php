<!DOCTYPE html>
<?php
include('session.php');
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
        
          <br>
		 <br>
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
	    <li class="active"> 
          <a href=""><i class="fa fa-info-circle"></i> <span>Update Reports</span><i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="dailysale.php"><i class="fa fa-money"></i> Daily Sale</a></li>
            <li class="active"><a href="receptionistreports.php"><i class="fa fa-bar-chart"></i> Receptionist Reports</a></li>
            <!--<li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i>Log-in Session</a></li>-->
          </ul>
        </li>
		 
		 <!--Rooms-->
		<li class="treeview"> 
          <a href=""><i class="fa fa-bed"></i> <span>Rooms</span><i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
				<li><a href="viewrooms.php"><i class="fa fa-bed"></i> <span>View Rooms</span></a></li>
				<li><a href="updaterooms.php"><i class="fa fa-pencil-square-o"></i> <span>Update Rooms</span></a></li>
				<li><a href="roomsummary.php"><i class="fa fa-table"></i> <span>Rooms Summary</span></a></li>
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
				<li ><a href="process-exec.php"><i class="fa fa-table"></i> <span>Online Reservation Table</span></a></li>
				 <li><a href="walkintable.php"><i class="fa fa-table"></i> <span>Walk-in Table</span></a></li>
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
              <h3 class="box-title"><b>Receptionist Reports</b></h3>
				</center>
			
			  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				 <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                 

                </tr>
                </thead>
                <tbody>
				<tr>
                <?php
	$con = mysql_connect('localhost','root','');
	if(!$con) {
		die(mysql_error());
		
		
	}
	mysql_select_db('yujinn');
	
	
				$getLinks = "SELECT * FROM tbl_admin_id";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					$i = 1;
						echo "<tr>";
					//echo "<td>".$rs['position']."</td>";
					//echo "<td>".$rs['username']."</td>";
					//echo "<td>".$rs['password']."</td>";
					//echo "<td>".$rs['firstname']."</td>";
					//echo "<td>".$rs['lastname']."</td>";
					
					
						echo "</tr>";
					$i=$i+1;
				}
				
					
	?>
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

