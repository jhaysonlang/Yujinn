<?php
include('connect.php');
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$checkin = date('m/d/Y' + 1);
$checkout = date('m/d/Y', strtotime("+1 day", strtotime($checkin)));
$checkins = date('d', strtotime("day", strtotime($checkin)));
$checkouts = date('d', strtotime("day", strtotime($checkin)));
if(isset($_GET['noavailable']))
{
    echo'<script>alert("ROOM WAS ALREADY RESERVED A MINUTE AGO, YOU CAN CHOOSE ANOTHER ROOM OF YOUR PREFERENCE."); location.href="reservation.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
         <title>Yuj Inn Hostel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

		<!--Datepicker-->
<link type="text/css" href="datepickercss/jquery-ui-1.8.21.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="datepickerjs/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="datepickerjs/jquery-ui-1.8.21.custom.min.js"></script>
<script>

$(function() {
	var today = new Date();
	var lastDate = new Date(today.getFullYear() +2, 11, 31);
	//document.getElementsByName('date1').Value = datepicker1;
	//document.getElementsByName('date2').Value = datepicker2;
	$("#datepicker1").datepicker({
				minDate: <?php echo $checkin + $checkins - 1?> ,
						numberOfMonths: 1,
		dateFormat: 'mm/dd/yy',
		altField: "#date1",
		maxDate: lastDate,
		onSelect: function(dateText, inst) {
			var date = new Date(dateText);
			var datePlus1 = new Date(date.getTime());
			datePlus1.setDate(datePlus1.getDate() + 1);
			$( "#datepicker2" ).datepicker( "option", "minDate", datePlus1 );
			timeAdjust();
			
		}
	});
	$("#datepicker2").datepicker({
				minDate: '<?php echo $checkin + $checkins ?>',
						numberOfMonths: 1,
		maxDate: lastDate,
		dateFormat: 'mm/dd/yy',
		altField: "#date2",
		onSelect: function(dateText, inst) {
			timeAdjust();
		}
	});
	$("#more_info[title]").tooltip({
		effect: 'slide'
	});
	timeAdjust();
});
	function timeAdjust()
{
	var elem1=document.getElementById('nights').value;
	var elem2 = $('#datepicker1').val();
	var elem3 = $('#datepicker2').val();
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

<style>

</style>
		<!--endDatepicker-->
		
		
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/flexslider.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/style.css">
		
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
         <link rel="shortcut icon" href="assets/ico/yujinnhostel.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
<style>
td.padding {
	padding-bottom:30px;
	color:black;
	
}
td.paddin {
	padding-bottom:10px;
	color:black;
	
}
		h4.widget-headerss {
	background:white;
	 box-shadow: 1px 1px 10px 6px #888888;
	 background-image: url("bg.jpg");
	  background-repeat: no-repeat;
	   background-size: 1280px 850px;
}
	div.contai {
		position:fixed;
		top:0px;
		bottom:520px;
		left:90px;
		z-index:1;
	}

img.process {
	width:500px;
	height:70px;
}

</style>
    <body onload="datepicker()">
	  <?php
			//include('header.php');
		?>

         <!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brands" href="index.php">Yuj Inn Hostel</a>
                            </h1>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li>
                                        <a href="index.php"><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li >
                                       <a href="rates.php"><i class=""><img src="beds.png"></i><br />Room & Rates</a>
                                    </li>
                                    
                                    <li class="current-page">
                                        <a href="reservation.php"><i class="icon-calendar"></i><br />Reservation</a>
                                    </li>
                                    <li>
                                        <a href="contact.php"><i class="icon-envelope-alt"></i><br />Contact</a>
                                    </li>
									<li>
                                        <a href="about.php"><i class="icon-user"></i><br />About</a>
                                    </li>
									<li>
                                        <a href="login.php"><i class="icon-signin"></i><br />Log-in</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-calendar page-title-icon"></i>
                        <h2>Reservation /</h2>
                        <p>Select Your Reservation Details</p>
                    </div>
                </div>
            </div>
        </div>
<br>
<center>
        <div class="row">
          <div class="span6 offset3">
		  
            <h4 class="widget-headerss"><br>
		   <br>
		    <br><img src="assets/img/steps/Step1.png" >
          <br>
		   <br>
		    <br> 
              <form method="GET" action="reservation2.php">
			  <div class="center-alignment">
			  <center>
			  <table width="90%" border=0 >
				<tr align="center">
					<td width="0" class="padding"><b>Arrival Date</b></td>
					<td width="0" class="padding"><b>Departure Date<b></td>
				</tr>
				<tr align="center">
					<td width="0" > <div id="datepicker1" onchange="timeAdjust()"></div></td>
					<td width="0" > <div id="datepicker2" onchange="timeAdjust()"></div></td>
					
				</tr>
				<tr align="center">
					<td width="0" class="hide"> <input type="text"  name="checkin" id="date1"></td>
					<td width="0" class="hide" > <input type="text"  name="checkout" id="date2"></td>
				</tr>
				<tr align="center">
					<td width="0" colspan=2> &nbsp;</td>
					
				</tr>
					
				<tr align="center">
					<td width="0" class="paddin">Night(s)</td>
					<td width="0" class="paddin">Arrival Time at Hotel <i class="icon-question-sign" title="1:00PM Standard Check-In" style="cursor:pointer;"></i></td>
				</tr>
				<tr align="center">
					<td width="0" > <input type="text" name="nights" id="nights" class="input" value="1" readonly  ></td>
					<td width="0" ><select class="time" name="arrivaltime" required> 
										<option>1:00PM</option>
										<option>2:00PM</option>
										<option>3:00PM</option>
										<option>4:00PM</option>
										<option>5:00PM</option>
										<option>6:00PM</option>
										<option>7:00PM</option>
										<option>8:00PM</option>
										<option>9:00PM</option>
										<option>10:00PM</option>
										<option>11:00PM</option>
										<option>12:00AM</option>
										<option>1:00AM</option>
										<option>2:00AM</option>
										<option>3:00AM</option>
										<option>4:00AM</option>
										<option>5:00AM</option>
										<option>6:00AM</option>
										<option>7:00AM</option>
										<option>8:00AM</option>
										<option>9:00AM</option>
										<option>10:00AM</option>
										<option>11:00AM</option>
										<option>12:00AM</option>
									<select></td>
				</tr>
					
					
			
				
				
			  </table>
			  </center>
			<br>

	<input type="submit" name="save" value="Continue to Next Step" class="btn btn-primary btn-small">
	
					</div>
                  </div>
				  <br>
				 
               
            
               
           
              </div>
			   </form>
            </div>
          </div>
        </div>
      </div>
    </center>
<br>
        <!-- Footer -->
    
		<?php
			include('footer.php');
		?>

        <!-- Javascript -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/jquery.tweet.js"></script>
        <script src="assets/js/jflickrfeed.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/jquery.quicksand.js"></script>
        <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

