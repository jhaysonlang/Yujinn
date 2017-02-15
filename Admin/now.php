<?php
include('../Yujinn/connect.php');
	$id= $_GET['addguest_id'];
	$result = mysql_query("SELECT * FROM `tbl_addguest` where addguest_id = ".$id."");
	while($rs = mysql_fetch_array($result))
	{
		$status = $rs['status'];
		$rcode = $rs['rcode'];
		$checkin = $rs['checkin'];
		$checkout = $rs['checkout'];
		$nights = $rs['nights'];
		$roomtype = $rs['roomtype'];
		$totalcost = $rs['totalcost'];
		$emailaddress = $rs['emailaddress'];
		$address = $rs['address'];
		$contact = $rs['contact'];
		$firstname = $rs['firstname'];
		$lastname = $rs['lastname'];
		
		
	}
	$checkins = date_format(date_create($checkin),"D, M d, Y");
	$checkouts = date_format(date_create($checkout),"D, M d, Y");
	
	
$to = $_GET['email'];
$from = "Yujinn Hostel";
$url = "www.yujinnhostel.com";
$body = "Yuj Inn Hostel Reservation Confirmation

		*BOOKING DETAILS FOR YUJINN HOSTEL*

		The following reservation has been confirm
		
		Reservation Code: $rcode
		Check-in  : $checkins
		Check-out : $checkouts
		Nights	  : $nights
		Room Type : $roomtype
		
		
		Payment Summary
		Deposit   : $totalcost
		Total Bill: $totalcost
		
		Hostel Address      : 3rd Floor #65 Maginhawa St., UP Village, Diliman, 1101 Quezon City, Philippines
		Hostel Phone Number :  63-2-5270011
		
		Guest Name    : $lastname, $firstname
		Guest Email   : $emailaddress
		Guest Phone   : $contact
		Guest Address : $address
		
		Cancellation Charges
		A cancellation charge applies.
		
		Cancellation/Modification/ No-show Terms:
		
		1. Acceptance Guests who have placed reservations via the hotel’s online reservation 
			system are assumed to have read and accepted the terms and conditions herein
		2.	Cancellation/No show of Paid Reservation will be considered NON REFUNDABLE as per the hostel policy.
		3.	Yuj Inn Hostel requires any cancellation or modification to be made at least 
			48 hours after the reservation to avoid forfeiting the reservation made.";
$from = "Yujinn Hostel";
$subject = "Yuj inn Hostel Reservation Confirmation"; 
$headers1 = "yuj_inn@yahoo.com.ph";
$sentmail = mail ( $to, $subject, $body, $headers1 );


$status = "Reserved";

mysql_query("UPDATE `tbl_addguest` SET `status`='$status' WHERE addguest_id='$id'");

?>
<script type="text/javascript">
window.location = "onlinereservation.php";
</script>