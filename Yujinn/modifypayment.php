<?php
include('session.php');
	include('connect.php');
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$checkin = date('m/d/Y');
$checkout = date('m/d/Y', strtotime("+1 day", strtotime($checkin)));
$checkouts = date('d', strtotime("-1 day", strtotime($checkin)));
$nights = date('d',strtotime($checkouts) *  strtotime($checkin));

$time_in_12_hour_format  = date("g:i a", strtotime("13:30"));

if ($_GET['emailaddress'] != $_GET['confirmemail'])  {
	?>
	<script>
		alert('Your Email Address does not match');
		window.location.href='reservation3.php?checkin=<?php echo $_GET['checkin']?>&checkout=<?php echo $_GET['checkout']?>&arrivaltime=<?php echo $_GET['arrivaltime']?>&nights=<?php echo $_GET['nights']?>
		&number1=<?php echo $_GET['number1']?>&number2=<?php echo $_GET['number2']?>&number3=<?php echo $_GET['number3']?>&number4=<?php echo $_GET['number4']?>';
	
	</script>

	<?php
}
?>
<?php 
	
				$id = $login_session_addguest_id;
				$result = mysql_query("SELECT * FROM `tbl_addguest` where addguest_id = ".$id."");
				while($rs = mysql_fetch_array($result)) {
				$modifyid = $rs['rcode'];
				$f = $rs['firstname'];
				$l = $rs['lastname'];
				$s = $rs['salutation'];
				$arrivaltimeselect = $rs['arrivaltime'];
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
<!--Register Session--->
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').value =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
	document.getElementById('d').innerHTML = t;
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<script>
$(function() {
    $( "#sd" ).datepicker({
        // before datepicker opens run this function
        beforeShow: function(){
            // this gets today's date       
            var theDate = new Date();
            // sets "theDate" 2 days ahead of today
            //theDate.setDate(theDate.getDate() + 2);
			theDate.setDate(<?php echo $checkin + $checkouts ?>   );
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
	function dateDifference() {
    // check if both is not empty
    if($("#sd").val()=='' || $("#ed").val()=='') return;

    var diff = ($("#ed").datepicker("getDate") - 
                $("#sd").datepicker("getDate")) /
               1000 / 60 / 60 / 24; // days
    $("#nights").html(diff+" nights");
}

</script>
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

	


  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<style>
	p.error {
		font-size:10px;
		color:red;
		
	}
	td.roomrates {
		font-size:15px;
		
		
	}
	td.perhead {
		font-size:15px;
		text-indent:76px;
		
	}
	td.total {
		font-size:15px;
		text-indent:40px;
		color:red;
		font-weight:bold;
		
	}
	textarea.text {
		width:270px;
	}
	p.option {
		font-size:10px;
		color:red;
		font-weight:bold;
	}
	div.contai {
		position:fixed;	
		bottom:520px;
		left:90px;
		z-index:1;
	}
</style>


   <body onload="startTime()">

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
                                <a class="brands" href="">Yuj Inn Hostel</a>
                            </h1>
                           <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    
                                    <li class="" >
                                        <a href="" data-toggle='modal' data-target='#myModal' ><i class="icon-search"></i><br />View Reservation</a>
                                    </li>
									<li class="current-page">
                                        <a href="" data-toggle='modal' data-target='#myModal'><i class="icon-edit"></i><br />Modify Reservation</a>
                                    </li>
									<li class="">
                                        <a href="" data-toggle='modal' data-target='#myModal'><i class="icon-trash"></i><br />Cancel Reservation</a>
                                    </li>
									
									<li class="">
                                        <a href="" data-toggle='modal' data-target='#myModal'><i class="icon-signin"></i><br />Log-out</a>
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
                        <h2>Modifying Reservation /</h2>
                        <p>Your Currently Modifying,Your Reservation Booking ID # <?php echo $modifyid;?> <?php echo $s;?> <b><?php echo $l;?>, <?php echo $f;?></b> 

                    </div>
                </div>
            </div>
        </div>

<br>
<center>
       
			 
		<div class="row">
          <div class="span6 offset3">
            <h4 class="widget-headerss">Summary Guest Information</h4>
            <div class="widget-body">
              
			  <div class="center-alignment">
			  <center>
			   <table class="details" width="95%" border=0 height="80">
				<?php
					if(isset($_GET)){
					$rooms = $_GET['rooms'];
					$numberofrooms = $_GET['numberofrooms'];
					$rate = $_GET['rate'];
					$t = $_GET['cost'];
					$subTotal = $_GET['subTotal'];
					$weekdiscount = $_GET['discount'];
					$roomValue = "";
					$numberofroomValue = "";
					$rateValue = "";
					$checkin = $_GET['checkin'];
					$checkout = $_GET['checkout'];
					$arrivaltime = $_GET['arrivaltime'];
					$nights = $_GET['nights'];
					$salutation = $_GET['salutation'];
					$firstname = $_GET['firstname'];
					$lastname = $_GET['lastname'];
					$emailaddress = $_GET['emailaddress'];
					$contact = $_GET['contact'];
					$address = $_GET['address'];
					$numberofdays = ((strtotime($checkout) - strtotime($checkin)) / (60*60*24));
					$roomRate = $_GET['roomRate'] * $numberofdays;
					$originalPrice = $roomRate;
					$totalBill = 0;
}					$totalcost = number_format($t,2);
					
					echo ' <div class="modal fade" id="myModal" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">Cancel Reservation</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
      echo '    <p>Are you sure you want to cancel your reservation ?</p>';
	  echo '<a  href="viewreservation.php"> <input type="submit" name="Delete" value="Yes" class="btn btn-danger btn-sm"></a> &nbsp;';
	
	  echo  '<button type="button" class="btn btn-default" data-dismiss="modal">No</button>';
	
        
		echo '</div>';
       
     echo ' </div>';
   echo ' </div>';
  echo '</div>';
echo '</div>';
				echo"<tr>";
					echo"<td width='70'><b>Check In</b></td>";
					echo"<td width='10'>:</td>";
					echo"<td width='135'><b>".$checkin."</b></td>";
					echo"<td width='80'><b>Arrival Time</b></td>";
					echo"<td width='10'>:</td>";
					echo"<td width='60'><b>".$arrivaltime."</b></td>";
					
				echo"</tr>";
				
				echo "<tr>";
					echo"<td><b>Check Out</b></td>";
					echo"<td>:</td>";
					echo"<td><b>".$checkout."</b></td>";
					echo"<td><b>Night(s)</b></td>";
					echo"<td>:</td>";
					echo"<td><b>".$nights."</b></td>";
					
				echo "</tr>";
				
			//	echo "<tr>";
				//	echo"<td>Adult</td>";
				//	echo"<td>:</td>";
				//	echo"<td><b>".$rs['adult']."</b></td>";
				//	echo"<td width='40'>Children</td>";
				//	echo"<td>:</td>";
				//	echo"<td><b>".$rs['children']."</b></td>";
					
			//	echo "</tr>";
			echo '</table>';
			echo '<br>';
			//ROOMDETAILS
				 echo '<table class="details" width="95%" border=1 height="400">';
				echo"<tr>";
					
					echo"<td colspan=3 width='250'><b>Room Type</b></td>";
					echo"<td colspan=2 class='roomrates' align='center' ><b>Number of Room(s)</b></td>";
					echo"<td  colspan=2 class='roomrates' align='center'><b>Rate Per Night(s)</b></td>";
					//echo"<td  colspan=1 class='roomrates' align='center'><b>Total</b></td>";
					
					
				echo"</tr>";
				//solo
				echo"<tr class='total' >";
					
					echo"<td  colspan=3><b>";
					  if(count($rooms) > 1){
					foreach ($rooms as $rooms) {
						$roomValue = $roomValue . ' ' . $rooms;
					}
				  }
				  else{
					$roomValue = $rooms[0];
				  }
				 
				  echo preg_replace('/ /', ' <br>  <br>  &nbsp; ', trim($roomValue));
				 
				  
				 
					echo "</b></td>";
					echo"<td  colspan=2 class='roomrates'align='center' >";
				if(count($numberofrooms) > 1){
					foreach ($numberofrooms as $numberofrooms) {
						$numberofroomValue = $numberofroomValue . ' ' . $numberofrooms;
					}
				  }
				  else{
					$numberofroomValue = $numberofrooms[0];
				  }
				
				  echo preg_replace('/ /', ' <br>  <br> 	&nbsp; ', trim($numberofroomValue));
				  echo "</p></td>";
					
					//rates
					echo"<td colspan=2 class='roomrates' align='center'>";
					  if(count($rate) > 1){
					foreach ($rate as $rate) {
						$rateValue = $rateValue . ' ' . $rate;
					}
				  }
				  else{
					$rateValue = $rate[0];
				  }
				 
				  echo preg_replace('/ /', ' <br>   <br> ', trim($rateValue));
				  echo "</p></td>";
					echo "</td>";
					//echo"<td  colspan=1 class='roomrates' align='center'><b>" .$roomRate. "</b></td>";
					
					
				echo"</tr>";
				
			
				echo"<tr>";
					
					echo"<td width='125' colspan=7>&nbsp;</td>";
					
					
					
				echo"</tr>";
				echo"<tr bgcolor=' #d9d9d9'>";
					
					echo"<td width='125' colspan=6><b>Total Cost:</b></td>";
					echo"<td width='125' colspan=1 class='total'><b>P ".$totalcost."</b></td>";
					
					
				echo"</tr>";
				
				
										
			echo '</table>';
				
				
			echo '<br><hr>';			
			echo '<table class="detailss" width="60%" border=0 height="70">';
				
			
					
				echo"<tr>";
					
					echo"<td width=''><b>".$salutation." ".$lastname.", ".$firstname."</b></td>";
					
				
				echo"</tr>";
				
				
				echo "<tr>";
					
					echo"<td ><i>".$emailaddress."</i></td>";
				
					
				echo "</tr>";
				
					
				
			echo '</table>';
			
		
			
			
			
			
			
				echo '<br>';
					echo '<br>';
				//echo '<a href=""><input type="submit" value="Add New Geust" name="save" class="btn btn-success btn-small"></a>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			 echo '<div class="bs-docs-example">';
            echo ' <div class="well" style="max-width: 400px; margin: 0 auto 10px;">';
			echo  '<form action=modifynow.php? method="POST">';
		?>
	
				
             
             
			
				<input type = "hidden" name = "checkin" value = "<?php echo $checkin;?>">
				<input type = "hidden" name = "checkout" value = "<?php echo $checkout;?>">
				<input type = "hidden" name = "nights" value = "<?php echo $numberofdays;?>">
				<input type = "hidden" name = "arrivaltime" value = "<?php echo $arrivaltime;?>">
				<input type = "hidden" name = "room" value = "<?php echo $roomValue;?>">
				<input type = "hidden" name = "rate" value = "<?php echo $rateValue;?>">
				<input type = "hidden" name = "numberofrooms" value = "<?php echo $numberofroomValue;?>">
				<input type = "hidden" name = "persons" value = "<?php echo $persons;?>">
				<input type = "hidden" name = "firstname" value = "<?php echo $firstname;?>">
				<input type = "hidden" name = "salutation" value = "<?php echo $salutation;?>">
				<input type = "hidden" name = "lastname" value = "<?php echo $lastname;?>">
				<input type = "hidden" name = "emailaddress" value = "<?php echo $emailaddress;?>">
				<input type = "hidden" name = "contact" value = "<?php echo $contact;?>">
				<input type = "hidden" name = "totalcost" value = "<?php echo $t;?>">
				<input type = "hidden" name = "addguest_id" value = "<?php echo $modifyid;?>">
				<input type = "hidden" name = "weekdiscount" value = "<?php echo $weekdiscount;?>">
				<input type = "hidden" name = "subTotal" value = "<?php echo $subTotal;?>">
			  <button type="submit" class="btn btn-large btn-block btn-success">Modify Now</button>
			
			</form>
			
		
			
			 	<?php
             echo '</div>';
           echo '</div>';
			
					echo '</div>';
                echo '  </div>';
				 echo ' <br>';
             echo ' </div>';
			
           echo ' </div>';
		  
	
			
			
			
			?>
			
			
 
			
			
			
			
			
			
			
			
			
			
			
		 <script>
	  <!--Validation: Accepts numeric only-->
        function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
          }
          return true;
        }
	  <!--Accept alphabets and space only(Validation)-->
    
            $(document).ready(function(){
			//lagay mo ung id ng textbox dun sa may #
            $("#firstname, #lastname").keypress(function(event){
                var inputValue = event.which;
                // allow letters and whitespaces only.
                if((inputValue > 47 && inputValue < 58) && (inputValue != 32)){
                    event.preventDefault();
                }
            });
        });

      </script>	
					
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

