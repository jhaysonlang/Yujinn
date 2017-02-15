<?php
	include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
         <title>Yuj Inn Hostel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

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
	h6 {
		color:black;
	}
		h4 {
		color:black;
	}
		h5 {
		color:black;
	}
		h3 {
		color:black;
	}
	input.back {
		background-color:black;
		position:absolute;
		left:200px;
	}
	a.back {
		position:relative;
		right:120px;
		top:30px;
	}
	
</style>
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
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>


  <!-- View Modal -->
  <div class="modal fade" id="myModalView" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View Reservation</h4>
        </div>
        <div class="modal-body">
		<center>
		<table>
		
		<?php
			echo '<tr>';
                    echo ' <td><label for="">Booking ID #</label></td>';
                    echo "<td> &nbsp;<input type='text' class='input-large' name='id' ></td>";
					echo '</tr>';
					
						echo '<tr>';
                    echo ' <td><label for="">Email Address</label></td>';
                      echo "<td>&nbsp;<input type='text' class='input-large' name='emailaddress' ></td>";
					echo '</tr>';
					?>
					
					</table>
					</center>
        </div>
        <div class="modal-footer">
            <input type="submit" name="update" value="Submit" class="btn btn-success ">
        </div>
      </div>
    </div>
  </div>
	 <!-- End View Modal -->
		
		  <!-- Modify Modal -->
  <div class="modal fade" id="myModalModify" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modify Reservation</h4>
        </div>
        <div class="modal-body">
		<center>
		<table>
		
		<?php
			echo '<tr>';
                    echo ' <td><label for="">Booking ID #</label></td>';
                    echo "<td> &nbsp;<input type='text' class='input-large' name='id' ></td>";
					echo '</tr>';
					
						echo '<tr>';
                    echo ' <td><label for="">Email Address</label></td>';
                      echo "<td>&nbsp;<input type='text' class='input-large' name='emailaddress' ></td>";
					echo '</tr>';
					?>
					
					</table>
					</center>
        </div>
        <div class="modal-footer">
            <input type="submit" name="update" value="Submit" class="btn btn-success ">
        </div>
      </div>
    </div>
  </div>
	 <!-- End Modify Modal -->
		
				  <!-- Cancel Modal -->
  <div class="modal fade" id="myModalCancel" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cancel Reservation</h4>
        </div>
        <div class="modal-body">
		<center>
		<table>
		
		<?php
			echo '<tr>';
                    echo ' <td><label for="">Booking ID #</label></td>';
                    echo "<td> &nbsp;<input type='text' class='input-large' name='id' ></td>";
					echo '</tr>';
					
						echo '<tr>';
                    echo ' <td><label for="">Email Address</label></td>';
                      echo "<td>&nbsp;<input type='text' class='input-large' name='emailaddress' ></td>";
					echo '</tr>';
					?>
					
					</table>
					</center>
        </div>
        <div class="modal-footer">
            <input type="submit" name="update" value="Submit" class="btn btn-success ">
        </div>
      </div>
    </div>
  </div>
	 <!-- End Cancel Modal -->
		
		
		
		
		
		
		
		
        <!-- Page Title -->
       
					<br>
					 <div class="content">
					 
      <div class="containers">
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-headerss"><i class="icon-info-sign"></i> Reservation Information</h4>
            <div class="widget-bod" >
             
               <h3>Your Reservation Request has been sent.</h4>
			   <h4>Final Room Confirmation will be sent to email address provided.</h4>
				<br>
				<h6 class="request">If you choose the DEPOSIT account procedure for payment,</h6>
				<h6 class="request">Please be noted that the RESERVATION would only be save for 48 HOURS only</h6>
               <h6 class="request">Unpaid reservation within 48 HOURS would be considered as a <u>"NO SHOW"</u> guest</h6>
			    <h4 class="request"><i>* Back to hotel button means you choose to deposit.</i></h4>
			   <br>
			   <h5>Cancelation Policy</h5>
					<h6 class="request"><i>We understand that unticipated events happen occasionally in everyone's life</i></h6>
				<h6 class="request"><i>In our desire to be effective and fair to all clients, the following policies are honored:</i></h6>
				<h6 class="request"><i>48 hours advance notice is required when canceling an appointment.</i></h6>	
              <h6 class="request"><i>This allow the opportunity for someone else to schedule an appointment.</i></h6>
			    <h6 class="request"><i>If you are unable to give us 48 hours advance notice you will be charged the full amount of your appoinment</i></h6>
			   <br>
				<h5>If there is still no response from us, please feel free to do the following:</h5>
					<h6 class="request"><i>* Email us at yujinn@yahoo.com</i></h6>
				<h6 class="request"><i>* Call us at Phone: 0917 444 4795 , (02) 794 5526</i></h6>
               <h6 class="request"><i>* Use your Reservation Code to view the status of your reservation</i></h6>
			   <br>
			   <?php
				
				$result = mysql_query("SELECT * FROM `tbl_addguest`");
				while($rs = mysql_fetch_array($result)) {
				$rcode = $rs['rcode'];
				}
			  
			 
			  
			  $result = mysql_query("SELECT * FROM `tbl_deposit_account`");
				while($rs = mysql_fetch_array($result)) {
				$accountnumber = $rs['accountnumber'];
				$bankname = $rs['bankname'];
				$accountname = $rs['accountname'];
				}
				echo "<h4>Account Name is: $accountname </h4>";
			   echo "<h4>Bank Name is: $bankname </h4>";
			  echo "<h4>Deposit Account # is: $accountnumber </h4>";
			   echo "<h3>Your Reservation Code is: $rcode </h3>";
			  
				$result = mysql_query("SELECT * FROM `tbl_addguest`");
				while($rs = mysql_fetch_array($result))
				{
					$roomtype = $rs['roomtype'];
					$totalcost = $rs['totalcost'];
					$numberofrooms = $rs['numberofrooms'];
					}
			   

			    ?>
				

				<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mode of Payment</h4>
      </div>
      <div class="modal-body">
        <p>Your mode of payment is Deposit</p>
      </div>
      <div class="modal-footer">
      <a href="index.php"><button type="button" class="btn btn-primary" >Yes</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>
				
				<br>
				<hr>
				
					<center>
				
				
				<a href="" class="back">
				<button type="button" class="btn btn-primary btn-medium" data-toggle="modal" data-target="#myModal">Back to Hotel</button></a>	
				<form class="paypal" action="paypal.php" method="POST" id="paypal_form" target="_blank">
				<input type = "hidden" name = "item_amount" value = "<?php echo $totalcost;?>">
				<input type = "hidden" name = "item_name" value = "<?php echo $roomtype;?>">
				<input type="hidden" name="item_number" value = "<?php echo $numberofrooms;?>">
				<input type="hidden" name="cmd" value="_xclick" />
				<input type="hidden" name="no_note" value="1" />
				<input type="hidden" name="lc" value="UK" />
				<input type="hidden" name="currency_code" value="PHP" />
				<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
				<input type="hidden" name="first_name" value="Customer's First Name"  />
				<input type="hidden" name="last_name" value="Customer's Last Name"  />
				<input type="hidden" name="payer_email" value="customer@example.com"  />
				<input type="submit" id="submit" title="Pay via Paypal" value="Pay via Paypal" name="save" class="btn btn-primary btn-medium">
				
		
				
				</form>
				
				</center>
			  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
				
                   

       <br>

        <!-- Footer -->
    
		<?php
			include('footer.php');
		?>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
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

