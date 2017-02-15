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
	
	
	
</style>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
     <a href="dailysale.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ADM</b></span>
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
		<li class="active"> 
          <a href=""><i class="fa fa-user"></i> <span>Accounts</span><i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
				<li><a href="viewaccounts.php"><i class="fa fa-user"></i> <span>View Accounts</span></a></li>
				 <li class="active"><a href="updateaccounts.php"><i class="fa fa-user-plus"></i> <span>Update Accounts</span></a></li>
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
              <h3 class="box-title"><b>Update Accounts</b></h3>
				</center>
			
			  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					
				  <th>Position</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                 
				  <td align="center" colspan="2" width="20%"><strong>Operation<strong></td>
                </tr>
                </thead>
                <tbody>
				<tr>
                <?php

	
				$getLinks = "SELECT * FROM tbl_admin_id";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					$admin = $rs['admin_id'];
					$user = $rs['username'];
					echo "<tr>";
					echo "<td>".$rs['position']."</td>";
					echo "<td>".$rs['username']."</td>";
					echo "<td>".$rs['password']."</td>";
					echo "<td>".$rs['firstname']."</td>";
					echo "<td>".$rs['lastname']."</td>";
					echo "<td align='center'><a   href=editaccount.php?admin_id=" . $rs['admin_id'] . '>' . '<input type="submit" name="update" value="Update" class="btn btn-primary btn-large">' . "</a></td>";
					//echo "<td align='center'>"; 
					//if ($rs['status'] == "Active") {
					//echo '<a  href=deleteaccount-exec.php?admin_id='.$admin.'&username='.$user.'> <input type="submit" name="Delete" value="Disable" class="btn btn-danger btn-large"></a>';
					//}
					//else {
					//	echo '<a  href=enableaccount.php?admin_id='.$admin.'&username='.$user.'> <input type="submit" name="Delete" value="Enable" class="btn btn-success btn-large"></a>';
					
					//}
					//echo "</td>";
					echo "</tr>";;
					
					 }
					
					 
				
	
	echo '</tr>';
	
	echo '<div class="container">';
  
  //<!-- Trigger the modal with a button -->
  
 // <!-- Modal -->
 echo ' <div class="modal fade" id="myModaladmin" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">Disable Account</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
      echo '    <p>Are you sure you want to disable account ?</p>';
	  echo '<a  href=deleteaccount-exec.php?admin_id='.$admin.'> <input type="submit" name="Delete" value="Yes" class="btn btn-danger btn-large"></a> &nbsp;';
	
	  echo  '<button type="button" class="btn btn-default" data-dismiss="modal">No</button>';
	
      
	echo	'</div>';
       
   echo	'   </div>';
   echo	' </div>';
 echo	' </div>';
echo'</div>';
	
	echo '<div class="container">';
  
  //<!-- Trigger the modal with a button -->
  
 // <!-- Modal -->
 echo ' <div class="modal fade" id="myModaladminenable" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">Enable Account</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
      echo '    <p>Are you sure you want to enable account ?</p>';
	  echo '<a  href=enableaccount.php?admin_id='.$admin.'&username='.$user.'> <input type="submit" name="Delete" value="Yes" class="btn btn-success btn-large"></a> &nbsp;';
	
	  echo  '<button type="button" class="btn btn-default" data-dismiss="modal">No</button>';
	
      
	echo	'</div>';
       
   echo	'   </div>';
   echo	' </div>';
 echo	' </div>';
echo'</div>';
	
	echo '<tr>';
                

	
	
				$getLinks = "SELECT * FROM tbl_receptionist_id";
				$result = mysql_query($getLinks);
				while($rs=mysql_fetch_array($result)) {
					$i = 1;
						echo "<tr>";
					$recep = $rs['receptionist_id'];
					echo "<td>".$rs['position']."</td>";
					echo "<td>".$rs['username']."</td>";
					echo "<td>".$rs['password']."</td>";
					echo "<td>".$rs['firstname']."</td>";
					echo "<td>".$rs['lastname']."</td>";
					
					echo "<td align='center'><a   href=editaccountrecep.php?receptionist_id=" . $rs['receptionist_id'] . '>' . '<input type="submit" name="update" value="Update" class="btn btn-primary btn-large">' . "</a></td>";
					//echo "<td align='center'>"; 
					//if ($rs['status'] == "Active") {
					//echo '<a  href=deleteaccountrecep-exec.php?receptionist_id='.$recep.'> <input type="submit" name="Delete" value="Disable" class="btn btn-danger btn-large"></a>';
					//}
					//else {
					//	echo '<a  href=enableaccountrecep-exec.php?receptionist_id='.$recep.'> <input type="submit" name="Delete" value="Enable" class="btn btn-success btn-large"></a>';
					
					//}
					//echo "</td>";
					echo "</tr>";
					$i=$i+1;
					
					
					
				}
	
	echo '</tr>';
	
               echo ' </tbody>';
               
          echo '</table>';



 

echo '</head>';
echo '<body>';

echo '<div class="container">';
  
  //<!-- Trigger the modal with a button -->
  
 // <!-- Modal -->
 echo ' <div class="modal fade" id="myModal" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">Disable Account</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
      echo '    <p>Are you sure you want to disable this account ?</p>';
	  echo '<a  href=deleteaccountrecep-exec.php?receptionist_id='.$recep.'> <input type="submit" name="Delete" value="Yes" class="btn btn-danger btn-large"></a> &nbsp;';
	
	  echo  '<button type="button" class="btn btn-default" data-dismiss="modal">No</button>';
	
		echo '</div>';
       
    echo '</div>';
   echo '</div>';
 echo '</div>';
echo '</div>';


echo '<div class="container">';
  
  //<!-- Trigger the modal with a button -->
  
 // <!-- Modal -->
 echo ' <div class="modal fade" id="myModalenable" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">Enable Account</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
      echo '    <p>Are you sure you want to enable this account ?</p>';
	  echo '<a  href=enableaccountrecep-exec.php?receptionist_id='.$recep.'> <input type="submit" name="Delete" value="Yes" class="btn btn-success btn-large"></a> &nbsp;';
	
	  echo  '<button type="button" class="btn btn-default" data-dismiss="modal">No</button>';
	
        ?>
		</div>
       
      </div>
    </div>
  </div>
</div>

<br>

			  <form action="addaccount.php">
        <input type="submit" name="update" value="Add" class="btn btn-primary btn-large">
				</form>
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
