<!DOCTYPE html>
<?php
include('../Admin/session.php');
include('../Yujinn/connect.php');

if (empty($_GET['number1']) AND empty($_GET['number2']) AND empty($_GET['number3']) AND empty($_GET['number4']) ){
	?><script>
		alert('Please Select Number of Rooms');
		window.location.href='addGuest2.php?checkin=<?php echo $_GET['checkin']?>&checkout=<?php echo $_GET['checkout']?>&timeIn=<?php echo $_GET['timeIn']?>';
	</script><?php
}

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
	#soflow{
		font-size:18px;
	}
	.modal-dialog {
	padding-top: 10%;
	}
	#form {width: 100%;
      margin-right: 30%;
      margin-left: 8%;
	}
	h3{
		font-size:23px;
	}
	label{
		font-size:16px;
		font-style:italic;
	}
</style>


 <!--Accept alphabets and space only(Validation)-->
      <script>
            $(document).ready(function(){
			//lagay mo ung id ng textbox dun sa may #
            $("#fname, #lname").keypress(function(event){
                var inputValue = event.which;
                // allow letters and whitespaces only.
                if((inputValue > 47 && inputValue < 58) && (inputValue != 32)){
                    event.preventDefault();
                }
            });
        });
      </script>
	  
	  <!--Validation: Accepts numeric only-->
      <script>
        function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
          }
          return true;
        }
      </script>
	   <!--lagay mo to sa textbox ng contact mo onkeypress="return isNumber(event)"-->


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
//for booking id
do 
{
	$code = strtoupper(substr(uniqid(),6,7));
	$qry = mysql_query("SELECT * FROM tbl_addguest WHERE rcode = '$code'");
	$numrows = mysql_num_rows($qry);
}
while($numrows != 0);
$rcode = $code;
//.end./for booking id	

$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
$timeIn = $_GET['timeIn'];

$qry = mysql_query("SELECT * FROM tbl_room_online WHERE category = 'Soloroom'");
$row = mysql_fetch_array($qry);
$qry1 = mysql_query("SELECT * FROM tbl_room_online WHERE category = 'Doubleroom'");
$row1 = mysql_fetch_array($qry1);
$qry2 = mysql_query("SELECT * FROM tbl_room_online WHERE category = 'Sixbedroom'");
$row2 = mysql_fetch_array($qry2);
$qry3 = mysql_query("SELECT * FROM tbl_room_online WHERE category = 'Eightbedroom'");
$row3 = mysql_fetch_array($qry3);
$Soloroom = $row['roomrates'];
$Doubleroom = $row1['roomrates'];
$Sixbedroom = $row2['roomrates'];
$Eightbedroom = $row3['roomrates'];
$rate = array();//dito mo isasave yung roomrate as array
$room = array();//dito room array 
$numberofrooms = array();//number of rooms array
if(isset($_GET['number1']))
{
  if($_GET['number1'] != 0)
  {
    $room[] = 'Soloroom';
    $numberofrooms[] = $_GET['number1'];
    $rate[] = $Soloroom;
  }
}  
if(isset($_GET['number2']))
{
  if($_GET['number2'] != 0)
  {
    $room[] = 'Doubleroom';
    $numberofrooms[] = $_GET['number2'];
    $rate[] = $Doubleroom;
  }
} 
if(isset($_GET['number3']))
{
  if($_GET['number3'] != 0)
  {
    $room[] = 'Sixbedroom';
    $numberofrooms[] = $_GET['number3'];
    $rate[] = $Sixbedroom;
  }
} 
if(isset($_GET['number4']))
{
  if($_GET['number4'] != 0)
  {
    $room[] = 'Eightbedroom';
    $numberofrooms[] = $_GET['number4'];
    $rate[] = $Eightbedroom;
  }
} 
	?>
	
	   <!-- Main content -->
    <section class="content" id="font">
      <div class="row" id="form">
        <!-- left column -->
        <div class="col-md-6">
		
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <center><div class="box-title"><h3><i class="fa fa-user">&nbsp;&nbsp;Guest Information</i></h3></div></center>
            </div>
			<div class="box-header with-border">
				<center><div class="box-title"><img height="80" width="500" src="../Yujinn/assets/img/steps/Step1.png"></div></center>
			</div>
            <!-- /.box-header -->
            <!-- form start -->
 <form method="GET" action="addGuest4.php">
 <?php 
 //e geget mo yung array na room , no of room , rate
$ctr = 0;
$total = 0;
while(count($room) > $ctr)
{
  $ctr1 = 0;
  ?>
  <input type = "hidden" name = "rooms[]" value = "<?php echo $room[$ctr];?>">
  <input type = "hidden" name = "numberofrooms[]" value = "<?php echo $numberofrooms[$ctr];?>">
  <input type = "hidden" name = "rate[]" value = "<?php echo $rate[$ctr];?>">
  <?php
  while($numberofrooms[$ctr] > $ctr1)
  {
  $total += $rate[$ctr];
  $ctr1++; 
 }
$ctr++;
}
?>
			<input type = "hidden" name = "checkin" value = "<?php echo $checkin;?>">
			<input type = "hidden" name = "checkout" value = "<?php echo $checkout;?>">
			<input type = "hidden" name = "timeIn" value = "<?php echo $timeIn;?>">
			<input type = "hidden" name = "roomRate" value = "<?php echo $total;?>">
			<input type = "hidden" name = "rcode" value = "<?php echo $rcode;?>">
              <div class="box-body">
			  <!--discount charge-->
			   <div class="form-group">
					<div>
					<label>Salutation&nbsp;</label>
					<select id="soflow" name="salutation">
						<option>Mr.</option>
						<option>Ms.</option>
						<option>Mrs.</option>
					</select>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>Type&nbsp;</label>
					<select id="soflow" name="guestType">
						<option>Regular</option>
						<option>Senior Citizen</option>
						<option>PWD</option>
					</select>
					</div>
				</div>
				
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="first name" value="<?php if(isset($_GET['fname'])){echo $_GET['fname'];}?>" required focus>
                </div>
				<p></p>
				<div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="last name" value="<?php if(isset($_GET['lname'])){echo $_GET['lname'];}?>" required focus>
                </div>
				<div class="form-group">
                  <label for="contactNo">Contact No</label>
                  <input type="text" class="form-control" id="contactNo" name="contactNo" placeholder="contact no." onkeypress="return isNumber(event)" value="<?php if(isset($_GET['contactNo'])){echo $_GET['contactNo'];}?>" focus>
                </div>
				<div class="form-group">
                  <label for="email">E-mail Address(Optional)</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="E-mail address" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>">
                </div>
              <div class="box-footer" align="right">
			    <!--<button type="button" class="btn btn-primary" name="deposit" id="btndeposit">Deposit</button> onclick="history.back(-1)"-->
				<a href ="addGuest2.php?number1=<?php echo $_GET['number1']?>&number2=<?php echo $_GET['number2']?>&number3=<?php echo $_GET['number3']?>&number4=<?php echo $_GET['number4']?>&checkin=<?php echo $_GET['checkin']?>&checkout=<?php echo $_GET['checkout']?>&timeIn=<?php echo $_GET['timeIn']?>">
				<button type="button" class="btn btn-default" name="back">&nbsp;&nbsp;Back&nbsp;&nbsp;</button>	
				</a>
				<button type="button" class="btn btn-danger" name="cancel" id="btncancel">Cancel</button>
				<button type="submit" class="btn btn-success" name="fullpayment">Proceed to Payment</button>
              </div>
            
          </div>
          <!-- /.box -->
		  </div>
		</div>
		
		<!--summary-->
<div class="col-md-4">
    <!-- Horizontal Form -->
    <div class="box box-default">
        <div class="box-header with-border">
			<center>
				<h4 class="box-title"><i class="fa fa-calendar">&nbsp;Date And Preferences</i></h4>
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
            <div class="box-header with-border">
			</div>
			<center>
				<div class="box-header with-border"><h4 class="box-title"><i class="fa fa-bed">&nbsp;Rooms And Rates</i></h4></div>
			</center>
			<div class="form-group">
				
				<table align="center" border="1">
				 <?php
				 $roomValue ="";
				 $rateValue="";
				 $numberofroomValue ="";
				 
				 echo "<tr align='center'>";
				 echo "<td><p><i>Room Type</i></p></td>";
				 echo "<td><p><i>&nbsp;&nbsp;Rate&nbsp;&nbsp;</i></p></td>";
				 echo "<td><p><i>&nbsp;no of rooms&nbsp;</i></p></td>";
				 echo "</tr>";
				 echo "<tr align='center'>";
				 echo "<td><p><i>";
				 if(count($room) > 1){
					foreach ($room as $room) {
						$roomValue = $roomValue . ' ' . $room;
					}
				  }
				  else{
					$roomValue = $room[0];
				  }
				 echo preg_replace('/ /', ' <br> ', trim($roomValue));
				 echo "</i></p></td>";
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
				  //for no of rooms
				  if(count($numberofrooms) > 1){
					foreach ($numberofrooms as $numberofrooms) {
						$numberofroomValue = $numberofroomValue . ' ' . $numberofrooms;
					}
				  }
				  else{
					$numberofroomValue = $numberofrooms[0];
				  }
				  echo "<td align='center'><p>";
				  echo preg_replace('/ /', ' <br> ', trim($numberofroomValue));
				  echo "</p></td>";
				echo "</tr>";
				 ?>
				</table>
				<p><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Total Room Rate:</i>&nbsp;&nbsp;<b><?php echo number_format($total,2);?>&nbsp;php</b>
				<br><i>&nbsp;&nbsp;(No. of nights and discounts not yet included)</i></p>
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
		
		
	  </div>
	  </div>
	</section>
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
