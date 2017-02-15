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
		font-size:16px;
	}
	th{
		font-size:18px;
		font-style: bold;
	}
	#font{
		font-size:17px;
	}
	h3{
		font-size:23px;
	}
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
<?php
	//get variables
    $checkin = $_GET['checkin'];
    $checkout = $_GET['checkout'];
	$timeIn = $_GET['timeIn'];
	//Soloroom
	$getLinks = "SELECT * FROM tbl_room_online WHERE category = 'Soloroom'";
	$result = mysql_query($getLinks);
	while($rs=mysql_fetch_array($result)) {
		$roomtype= $rs['roomtype'];
		$roomrate = $rs['roomrates'];
		$capacity = $rs['capacity'];
	}
	//Doubleroom
	$getLinks1 = "SELECT * FROM tbl_room_online WHERE category = 'Doubleroom'";
	$result1 = mysql_query($getLinks1);
	while($rs=mysql_fetch_array($result1)) {
		$roomtype1= $rs['roomtype'];
		$roomrate1 = $rs['roomrates'];
		$capacity1 = $rs['capacity'];
	}
	//Sixbedroom
	$getLinks2 = "SELECT * FROM tbl_room_online WHERE category = 'Sixbedroom'";
	$result2 = mysql_query($getLinks2);
	while($rs=mysql_fetch_array($result2)) {
		$roomtype2= $rs['roomtype'];
		$roomrate2 = $rs['roomrates'];
		$capacity2 = $rs['capacity'];
	}
	//Eightbedroom
	$getLinks3 = "SELECT * FROM tbl_room_online WHERE category = 'Eightbedroom'";
	$result3 = mysql_query($getLinks3);
	while($rs=mysql_fetch_array($result3)) {
		$roomtype3= $rs['roomtype'];
		$roomrate3 = $rs['roomrates'];
		$capacity3 = $rs['capacity'];
	}
?>
	<!-- Main content -->
    <section class="content" id="font">
	<div class="row">
    <!-- left column -->
	<div class="col-md-8">
	<div class="box box-primary">
            <div class="box-header with-border">
            <h3 align="center"><i class = "fa fa-bed">&nbsp;&nbsp;Room And Rates</i></h3>
            </div>
			<div class="box-header with-border">
				<center><div class="box-title"><img height="80" width="525" src="../Yujinn/assets/img/steps/Step2.png"></div></center>
			</div>
			 <div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 30%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Room Type</th>
				  <th style="width: 15%">&nbsp;&nbsp;Capacity</th>
				  <th style="width: 17%">&nbsp;&nbsp;Room Rate</th>
                  <th style="width: 10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No. of Rooms</th>
                </tr>
	<form action="addGuest3.php" method="GET">
    <input type = "hidden" name = "checkin" value = "<?php echo $checkin;?>">
    <input type = "hidden" name = "checkout" value = "<?php echo $checkout;?>">
	<input type = "hidden" name = "timeIn" value = "<?php echo $timeIn;?>">
	
	<!-- Display Soloroom Row-->
                <tr align="center">
                  <td><img height="100" width="150" src="assets/img/rooms/soloroom.jpg" class="image"><br><i id="font"><?php echo $roomtype;?></i></td>
                  <td><br><?php echo $capacity; ?></td>
                  <td><br><?php echo $roomrate; ?></td>
                  <td><br>
	<?php //Date validation for soloroom
    $qry1 = mysql_query("SELECT * FROM tbl_addguest WHERE (status = 'Pending' OR status = 'Reserved' OR status = 'Arrived') AND roomtype LIKE '%Soloroom%'");
    $qrycat1 = mysql_query("SELECT * FROM tbl_room WHERE category = 'Soloroom'");
    $numcat1 = mysql_num_rows($qrycat1);
    while($row1 = mysql_fetch_array($qry1)) 
    {
      if((strtotime($row1['checkin']) <= strtotime($checkin) && strtotime($row1['checkout']) >= strtotime($checkin)) || (strtotime($row1['checkin']) <= strtotime($checkout) && strtotime($row1['checkout']) >= strtotime($checkout)) || (strtotime($checkin) < strtotime($row1['checkin']) && strtotime($checkin) < strtotime($row1['checkout']) && strtotime($checkout) > strtotime($row1['checkin']) && strtotime($checkout) > strtotime($row1['checkout'])))
      {
        $explode1 = explode(' ',trim($row1['roomtype']));
        if(count($explode1) > 1)
        {
          $key1 = 0;
          foreach ($explode1 as $explode1) {
            if($explode1 == 'Soloroom')
            {
              break;
            }
            $key1++;
          }
         $explode11 = explode(' ',trim($row1['numberofrooms']));
         $numcat1 = $numcat1 - $explode11[$key1];
        }
        else
        {
          $numcat1 = $numcat1 - $row1['numberofrooms'];
        }
      }
    }

    if($numcat1 <= 0)
    {
      echo 'No available rooms!<br> Please select another date.';
    }
    else
    {
    ?>
      <select name="number1" class = "x number1">
        <?php if(isset($_GET['number1']))
        {
        echo '<option hidden selected value="'.$_GET['number1'].'">'.$_GET['number1'].'</option>';
        }
        ?>
        <option value=""></option>
      <?php 
      $ctr1 = 1;
      while($numcat1 >= $ctr1)
      {
        ?>
        <option value="<?php echo $ctr1;?>"><?php echo $ctr1;?></option>
        <?php
        $ctr1++;
      }
	}
      ?>
 </select>
</td>
 </tr>
			<!-- Display Doubleroom Row-->
                <tr align="center">
				  <td><img height="100" width="150" src="assets/img/rooms/doubleroom.jpg" class="image"><br><i id="font"><?php echo $roomtype1;?></i></td>
                  <td><br><?php echo $capacity1; ?></td>
                  <td><br><?php echo $roomrate1; ?></td>
                  <td><br>
	<?php  //Date validation for Double
    $qry2 = mysql_query("SELECT * FROM tbl_addguest WHERE (status = 'Pending' OR status = 'Reserved' OR status = 'Arrived') AND roomtype LIKE '%Doubleroom%'");
    $qrycat2 = mysql_query("SELECT * FROM tbl_room WHERE category = 'Doubleroom'");
    $numcat2 = mysql_num_rows($qrycat2);
    while($row2 = mysql_fetch_array($qry2)) 
    {
      if((strtotime($row2['checkin']) <= strtotime($checkin) && strtotime($row2['checkout']) >= strtotime($checkin)) || (strtotime($row2['checkin']) <= strtotime($checkout) && strtotime($row2['checkout']) >= strtotime($checkout)) || (strtotime($checkin) < strtotime($row2['checkin']) && strtotime($checkin) < strtotime($row2['checkout']) && strtotime($checkout) > strtotime($row2['checkin']) && strtotime($checkout) > strtotime($row2['checkout'])))
      {
        $explode2 = explode(' ',trim($row2['roomtype']));
        if(count($explode2) > 1)
        {
          $key2 = 0;
          foreach ($explode2 as $explode2) {
            if($explode2 == 'Doubleroom')
            {
              break;
            }
            $key2++;
          }
         $explode22 = explode(' ',trim($row2['numberofrooms']));
         $numcat2 = $numcat2 - $explode22[$key2];
        }
        else
        {
          $numcat2 = $numcat2 - $row2['numberofrooms'];
        }
      }
    }

    if($numcat2 <= 0)
    {
      echo 'No available rooms!<br> Please select another date.';
    }
    else
    {
    ?>
      <select name="number2" class = "x number2">
        <?php if(isset($_GET['number2']))
        {
        echo '<option hidden selected value="'.$_GET['number2'].'">'.$_GET['number2'].'</option>';
        }
        ?>
        <option value=""></option>
      <?php 
      $ctr2 = 1;
      while($numcat2 >= $ctr2)
      {
        ?>
        <option value="<?php echo $ctr2;?>"><?php echo $ctr2;?></option>
        <?php
        $ctr2++;
      }
	}
      ?>
 </select>
</td>
</tr>
				<!-- Dispkay Sixbedroom Row-->
                <tr align="center">
				  <td><img height="100" width="150" src="assets/img/rooms/sixbed.jpg" class="image"><br><i id="font"><?php echo $roomtype2;?><i></td>
                  <td><br><?php echo $capacity2; ?></td>
                  <td><br><?php echo $roomrate2; ?></td>
                  <td><br>
	<?php //Date validation for sixbedroom
    $qry3 = mysql_query("SELECT * FROM tbl_addguest WHERE (status = 'Pending' OR status = 'Reserved' OR status = 'Arrived') AND roomtype LIKE '%Sixbedroom%'");
    $qrycat3 = mysql_query("SELECT * FROM tbl_room WHERE category = 'Sixbedroom'");
    $numcat3 = mysql_num_rows($qrycat3);
    while($row3 = mysql_fetch_array($qry3)) 
    {
      if((strtotime($row3['checkin']) <= strtotime($checkin) && strtotime($row3['checkout']) >= strtotime($checkin)) || (strtotime($row3['checkin']) <= strtotime($checkout) && strtotime($row3['checkout']) >= strtotime($checkout)) || (strtotime($checkin) < strtotime($row3['checkin']) && strtotime($checkin) < strtotime($row3['checkout']) && strtotime($checkout) > strtotime($row3['checkin']) && strtotime($checkout) > strtotime($row3['checkout'])))
      {
        $explode3 = explode(' ',trim($row3['roomtype']));
        if(count($explode3) > 1)
        {
          $key3 = 0;
          foreach ($explode3 as $explode3) {
            if($explode3 == 'Sixbedroom')
            {
              break;
            }
            $key3++;
          }
         $explode33 = explode(' ',trim($row3['numberofrooms']));
         $numcat3 = $numcat3 - $explode33[$key3];
        }
        else
        {
          $numcat3 = $numcat3 - $row3['numberofrooms'];
        }
      }
    }

    if($numcat3 <= 0)
    {
      echo 'No available rooms!<br> Please select another date.';

    }
    else
    {
    ?>
      <select name="number3" class = "x number3">
        <?php if(isset($_GET['number3']))
        {
        echo '<option hidden selected value="'.$_GET['number3'].'">'.$_GET['number3'].'</option>';
        }
        ?>
        <option value=""></option>
      <?php 
      $ctr3 = 1;
      while($numcat3 >= $ctr3)
      {
        ?>
        <option value="<?php echo $ctr3;?>"><?php echo $ctr3;?></option>
        <?php
        $ctr3++;
      }
	}
      ?>
 </select>
</td>
</tr>
			<!-- Display Eightbedroom Row-->
                <tr align="center">
				  <td><img height="100" width="150" src="assets/img/rooms/eightbed.jpg" class="image"><br><i id="font"><?php echo $roomtype3;?></i></td>
                  <td><br><?php echo $capacity3; ?></td>
                  <td><br><?php echo $roomrate3; ?></td>
                  <td><br>
	<?php //date validation for eightbedroom
    $qry4 = mysql_query("SELECT * FROM tbl_addguest WHERE (status = 'Pending' OR status = 'Reserved' OR status = 'Arrived') AND roomtype LIKE '%Eightbedroom%'");
    $qrycat4 = mysql_query("SELECT * FROM tbl_room WHERE category = 'Eightbedroom'");
    $numcat4 = mysql_num_rows($qrycat4);
    while($row4 = mysql_fetch_array($qry4)) 
    {
      if((strtotime($row4['checkin']) <= strtotime($checkin) && strtotime($row4['checkout']) >= strtotime($checkin)) || (strtotime($row4['checkin']) <= strtotime($checkout) && strtotime($row4['checkout']) >= strtotime($checkout)) || (strtotime($checkin) < strtotime($row4['checkin']) && strtotime($checkin) < strtotime($row4['checkout']) && strtotime($checkout) > strtotime($row4['checkin']) && strtotime($checkout) > strtotime($row4['checkout'])))
      {
        $explode4 = explode(' ',trim($row4['roomtype']));
        if(count($explode4) > 1)
        {
          $key4 = 0;
          foreach ($explode4 as $explode4) {
            if($explode4 == 'Eightbedroom')
            {
              break;
            }
            $key4++;
          }
         $explode44 = explode(' ',trim($row4['numberofrooms']));
         $numcat4 = $numcat4 - $explode44[$key4];
        }
        else
        {
          $numcat4 = $numcat4 - $row4['numberofrooms'];
        }
      }
    }

    if($numcat4 <= 0)
    {
      echo 'No available rooms!<br> Please select another date.';

    }
    else
    {
    ?>
      <select name="number4" class = "x number4">
        <?php if(isset($_GET['number4']))
        {
        echo '<option hidden selected value="'.$_GET['number4'].'">'.$_GET['number4'].'</option>';
        }
        ?>
        <option value=""></option>
      <?php 
      $ctr4 = 1;
      while($numcat4 >= $ctr4)
      {
        ?>
        <option value="<?php echo $ctr4;?>"><?php echo $ctr4;?></option>
        <?php
        $ctr4++;
      }
	}
      ?>
 </select>
				  </td>
                </tr>
				
				
				
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
				<p align="right">
				<a href="addGuest1.php">
					<button type="button" class="btn btn-default" name="back">&nbsp;&nbsp;Back&nbsp;&nbsp;</button>
				</a>
				<button type="button" class="btn btn-danger" name="cancel" id="btncancel">Cancel</button>
				<button type="submit" id="" name="proceed" class="btn btn-success btn-md">&nbsp;&nbsp;Proceed&nbsp;&nbsp;</button>
				</p>
			</div>
          </div>
          <!-- /.box -->
</div>
</div>
<!--/.col 1 end-->

<!--summary-->
<div class="col-md-4">
    <!-- Horizontal Form -->
    <div class="box box-default">
        <div class="box-header with-border">
			<center>
				<h2 class="box-title"><i class="fa fa-calendar">&nbsp;Date And Preferences</i></h2>
			</center>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
		<div class="box-body">
			<div class="form-group">
				<p><i>Check In date:</i>&nbsp;&nbsp;<?php echo date_format(date_create($checkin),"M j,Y");?></p>
				<p><i>Check Out date:</i>&nbsp;&nbsp;<?php echo date_format(date_create($checkout),"M j,Y");?></p>
				<?php $nights = ((strtotime($checkout) - strtotime($checkin)) / (60*60*24)); ?>
				<p><i>No. of Nights:</i>&nbsp;&nbsp;<?php echo $nights;?></p>
            </div>
            <div class="form-group">
				
            </div>
        
        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">-->
            <!--<button type="submit" class="btn btn-default">Cancel</button>-->
            <!--<button type="submit" class="btn btn-info pull-right">Sign in</button>-->
        <!--</div>-->
        <!-- /.box-footer -->
        </form>
    </div>
    <!-- /.box -->
<!--/.end summary-->

</section>
</div>
</body>
</form>
		
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
