<?php
include('session.php');
	include('connect.php');
if (empty($_GET['number1']) AND empty($_GET['number2']) AND empty($_GET['number3']) AND empty($_GET['number4']) ){
	?><script>
		alert('Please Select Number of Rooms');
		window.location.href='reservation2.php?checkin=<?php echo $_GET['checkin']?>&checkout=<?php echo $_GET['checkout']?>&arrivaltime=<?php echo $_GET['arrivaltime']?>&nights=<?php echo $_GET['nights']?>
		&number1=<?php echo $_GET['number1']?>&number2=<?php echo $_GET['number2']?>&number3=<?php echo $_GET['number3']?>&number4=<?php echo $_GET['number4']?>';
	</script><?php
}

?>
	<?php
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$checkin = date('m/d/Y');
$checkout = date('m/d/Y', strtotime("+1 day", strtotime($checkin)));

?>
<?php 
	
				$id = $login_session_addguest_id;
				$result = mysql_query("SELECT * FROM `tbl_addguest` where addguest_id = ".$id."");
				while($rs = mysql_fetch_array($result)) {
				$modifyid = $rs['rcode'];
				$f = $rs['firstname'];
				$l = $rs['lastname'];
				$s = $rs['salutation'];
				$contact = $rs['contact'];
				$emailaddress = $rs['emailaddress'];
				$address = $rs['address'];
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
    $( "#sd" ).datepicker({
        // before datepicker opens run this function
        beforeShow: function(){
            // this gets today's date       
            var theDate = new Date();
            // sets "theDate" 2 days ahead of today
            //theDate.setDate(theDate.getDate() + 2);
			theDate.setDate(<?php echo $checkin ?> + 2);
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
</script>

<!--endDatepicker-->
<!--Validation--->
<script src="assets/js/formvalid.js"></script>
 <script type="text/javascript">//<![CDATA[
        // Google Analytics for WordPress by Yoast v4.3.5 |http://yoast.com/wordpress/google-analytics/
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-43981329-1']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        //]]></script>
		<!--Validation--->




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
		color:black;
		
		
		
	}
	td.padding {
	
	color:black;
	
}
td.red {
	color:red;
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
	 background-size: 1280px 1160px;
	  width:1000px;
	  position:relative;
	  right:100px;
}
table.details {
	background:white;
	border: 0px;
	
	 
}
div.contai {
		position:fixed;
			top:0px;
		bottom:520px;
		left:90px;
		z-index:1;
		width:100%;
		
		
	
	}
	
	img.process {
	width:500px;
	height:70px;
}
table.info {
	position:relative;
	left:200px;
	
}
table.ref {
	position:relative;
	bottom:547px;
	right:250px;
	font-size:15px;	
}
a.back {
	position:relative;
	bottom:50px;
}
</style>







		
		
		
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

    <body>

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
<?php?>
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
      
     <?php
		$number1 = $_GET['number1'];
		$number2 = $_GET['number2'];
		$number3 = $_GET['number3'];
		$number4 = $_GET['number4'];
    $checkin = $_GET['checkin'];
    $checkout = $_GET['checkout'];
	$arrivaltime = $_GET['arrivaltime'];
    $nightss = $_GET['nights'];
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
	?>
     
       <div align="right" class="contains">
	
					 <div class="content">
      <div class="containers" >
        
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-headerss"><br>
		   <br>
		    <br><img src="assets/img/steps/Step3.png" >
          <br>
		   <br>
		    <br> 
            
			
              <div class="center-alignment">
               <center>
			   <div align="left">
			  
			   </div>
			  <?php
			$checkin = $_GET['checkin'];
			$checkout = $_GET['checkout'];
			$arrivaltime = $_GET['arrivaltime'];
			$nights = $_GET['nights'];
			
include 'connect.php';
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
			


 

 
			
			 <form method="get" action="modifypayment.php?" >
			 <?php 
			 $roomValue ="";
				 $rateValue="";
				 $numberofroomValue ="";
				 $total1 = "";
				
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
	<input type = "hidden" name = "arrivaltime" value = "<?php echo $arrivaltime;?>">
	<input type = "hidden" name = "nights" value = "<?php echo $nights;?>">
	<input type = "hidden" name = "roomRate" value = "<?php echo $total;?>">
	
	<input type = "hidden" name = "number1" value = "<?php echo $number1;?>">
	<input type = "hidden" name = "number2" value = "<?php echo $number2;?>">
	<input type = "hidden" name = "number3" value = "<?php echo $number3;?>">
		<input type = "hidden" name = "number4" value = "<?php echo $number4;?>">
	
		
		
			   <br>
			   <p id="head" class="error"></p>
				<table border=0 height="350" width="60%" class="info">
				<tr>
				<td width="220" class="padding" colspan=3><b>Guest Information<br>...........................................................................................................................
				</b></td>
				
				</tr>
				<tr>
				<td width="100" class="padding">&nbsp;</td>
				<td width="20" class="padding">&nbsp;</td>
				<td></td>
			
					</tr>
				<tr>
				<td width="220" class="padding"><b>Salutation</b></td>
				<td width="20" class="padding">:</td>
				<td><input class="input-xlarge" id="salutation" type="text" name="salutation" value = "<?php echo $s?>"readonly /></td>
				</tr>
				<tr>
				<td width="100" class="padding"><b>First Name</b></td>
				<td width="20" class="padding">:</td>
				<td><input class="input-xlarge" id="firstname" type="text" name="firstname" value = "<?php echo $f?>"readonly />
				</td>
				</tr>
				<tr>
				<td width="100" class="padding"><b>Last Name</b></td>
				<td width="20" class="padding">:</td>
				<td><input class="input-xlarge" id='lastname' type="text" name="lastname" value = "<?php echo $l?>"readonly />
				</td>
				</tr>
				<!--<tr>
				<td width="100" class="padding"><b>Birthday</b></td>
				<td width="20" class="padding">:</td>
				<td><input class="input-xlarge" id='birhdate' type="date" name="birthdate" required/>
				<p class="option">*Required</p></td>
				</tr>-->
				<tr>
				<td width="100" class="padding"><b>Contact</b></td>
				<td width="20" class="padding">:</td>
				<td><input class="input-xlarge" type="text" name="contact" onkeypress="return isNumber(event)" maxlength="11" value = "<?php echo $contact?>"readonly />
				</td>
				</tr>
			
				<tr>
				<td width="100" class="padding"><b>Email Address</b></td>
				<td width="20" class="padding">:</td>
				<td><input class="input-xlarge" type="email" id="email" name="emailaddress" value = "<?php echo $emailaddress?>"readonly  />
				
				</td>
				</tr>
				
					<tr>
				<td width="100" class="padding"><b>Confirm Email Address</b></td>
				<td width="20" class="padding">:</td>
				<td><input class="input-xlarge" type="email" id="email" name="confirmemail" value = "<?php echo $emailaddress?>"readonly  />
				
				</tr>
				
					<tr>
				<td width="100" class="padding"><b>Address</b></td>
				<td width="20" class="padding">:</td>
				<td><textarea class="text" name="address"  rows="7" value = "" readonly /><?php echo $address?></textarea></td>
				
					</tr>
					
					
					
				
				</table>
				
				
				</center>
				
				
				
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
			</div>
   
				<table border=0	 height="200" width="" class="ref">
				<tr>
				<td width="220" class="padding" colspan=3><b>Date & Preference<br>................................................................................
				</b></td>
				
				</tr>
				<tr>
				<td width="40" class="padding">Check In</td>
				<td width="20" class="padding">:</td>
				<td  class="padding"><?php echo date_format(date_create($checkin),"M j,Y");?>
				</td>
				</tr>
				<tr>
				<td width="10" class="padding">Check Out</td>
				<td width="20" class="padding">:</td>
				<td  class="padding"><?php echo date_format(date_create($checkout),"M j,Y");?></td>
				</tr>
				<!--<tr>
				<td width="100" class="padding"><b>Birthday</b></td>
				<td width="20" class="padding">:</td>
				<td><input class="input-xlarge" id='birhdate' type="date" name="birthdate" required/>
				<p class="option">*Required</p></td>
				</tr>-->
				<tr>
				<td width="10" class="padding">Night(s)</td>
				<td width="20" class="padding">:</td>
				<td  class="padding"><?php echo $nights?>
				</td>
				</tr>
			
				<tr>
				<td width="10" class="padding">Arrival Time</td>
				<td width="20" class="padding">:</td>
				<td  class="padding"><?php echo $arrivaltime?></td>
				</tr>
				<tr>
				<?php
					
				?>
				
					
				<?php
				$to = $total * $nights;
				 $firstweekdiscount = .10;
					$secondweekdiscount = .20;
					$oneweek = 7;
					$twoweek = 14;
					$discount = 0;
					$percent = "";
					$weekdiscount = "";
				if ($nights >= $oneweek || $nights == $twoweek) {
						$total = $total - ($total * $firstweekdiscount);
						$discount = $to * $firstweekdiscount;
						$percent = "(10%)";
						$weekdiscount = .1;
					}
				 if ($nights >= $twoweek) {
						$total = $total - ($total * $secondweekdiscount);
						$discount = $to * $secondweekdiscount;
						$percent = "(20%)";
						$weekdiscount = .2;
					}
					else {
					$total = $total;
					$weekdiscount = 0;
					}
					
				$t = $to - $discount;
				
					
				
					if(count($room) > 1){
					foreach ($room as $room) {
						$roomValue = $roomValue . ' ' . $room;
					}
				  }
				  else{
					$roomValue = $room[0];
				  }
				  
				 if(count($numberofrooms) > 1){
					foreach ($numberofrooms as $numberofrooms) {
						$numberofroomValue = $numberofroomValue . ' ' . $numberofrooms;
					}
				  }
				  
				  else{
					$numberofroomValue = $numberofrooms[0];
				  }
				  
				   if(count($rate) > 1){
					foreach ($rate as $rate) {
						$rateValue = $rateValue . ' ' . $rate;
					}
				  }
				  else{
					$rateValue = $rate[0];
				  }
				  $try = (explode(" ",$numberofroomValue));
				$roomcount = array_sum($try);
				?>
				
					<td width="10" class="padding">Room(s)</td>
				<td width="20" class="padding">:</td>
				<td  class="padding"><?php echo $roomcount?></td>
				</tr>
					
				<tr>
				<td width="30" class="padding">&nbsp;</td>
				<td width="20" class="padding">&nbsp;</td>
				<td></td>
			
					</tr>
					<tr>
				<td width="220" class="padding" colspan=3><b>Room & Rates<br>................................................................................
				</b></td>
				<tr>
				<td width="10" class="padding"><b>Room(s)</b></td>
				<td width="40" class="padding"><b>No. of rooms</b></td>
				<td  class="padding" width="10" align="left"><b>Room Rates</b></td>
			
					</tr>
				</tr>
				<tr>
				<td width="10" class="padding"><?php echo preg_replace('/ /', ' <br> ', trim($roomValue));?></td>
				<td width="20" class="padding" align="center"><?php  echo preg_replace('/ /', ' <br> ', trim($numberofroomValue)); ?></td>
				<td align="left" class="padding"><?php  echo preg_replace('/ /', ' <br> ', trim($rateValue)); ?></td>
				
				
			
					</tr>
					
					<tr>
				<td width="10" class="padding">&nbsp;</td>
				<td width="20" class="padding">&nbsp;</td>
				<td  class="">________________</td>
			
					</tr>
					<tr>
				<td width="10" class="padding">Total</td>
				<td width="20" class="padding">&nbsp;</td>
				<td   class="padding">P <?php echo number_format($to,2);?></td>
			
					</tr>
					<tr>
				<td width="10" class="padding">Discount<?php echo $percent?></td>
				<td width="20" class="padding" align="right">-</td>
				<td   class="padding" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo number_format($discount,2);?></td>
			
					</tr>
					<tr>
				<td width="10" class="padding"><b>Total Cost</b></td>
				<td width="20" class="padding">:</td>
				<?php
					
				?>
				<td class="red" width="50"><b>P <?php echo number_format($t,2);?></b></td>
			
					</tr>
					
					<input type = "hidden" name = "cost" value = "<?php echo $t;?>">
					<input type = "hidden" name = "subTotal" value = "<?php echo $to;?>">
					<input type = "hidden" name = "discount" value = "<?php echo $weekdiscount;?>">
					
				<a href="" class="back"><input type="submit" id="submit" value="Add New Geust" name="save" class="btn btn-primary btn-small"></a>
				</form>
				</table>
    
    </center>
<br>

   <script>
            $(document).ready(function(){
            $("#firstname, #lastname").keypress(function(event){
                var inputValue = event.which;
                // allow letters and whitespaces only.
                if((inputValue > 47 && inputValue < 58) && (inputValue != 32)){
                    event.preventDefault();
                }
            });
        });
			function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
          }
          return true;
        }

      </script>
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

