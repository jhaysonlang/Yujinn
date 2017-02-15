<html>
<style>
	#font{
		font-size:20px;
	}
	strong{
		font-size:25px;
	}
	p{
		font-size:23px;
	}
	h3{
		font-size:25px;
	}
	hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
	}
	#note{
		font-size:18px;
	}
	label{
		font-size:25px;
	}
</style>
<?php
include('../Yujinn/connect.php');
//variables
$id= $_GET['guestid'];
$addHour = $_GET['addHour'];
$addDay = $_GET['addDay'];
$addTimeFee = $_GET['addTimeFee'];
$addDayFee = $_GET['addDayFee'];
$total = $addTimeFee + $addDayFee;
//Format to money f=format
$ftotal=number_format($total,2);
$faddDayFee=number_format($addDayFee,2);
$faddTimeFee=number_format($addTimeFee,2);
	
$getLinks = "SELECT * FROM tbl_addguest WHERE addguest_id = '".$id."'";
$result = mysql_query($getLinks);
while($rs=mysql_fetch_array($result)) {
	$rcode= $rs['rcode'];
	$checkin= $rs['checkin'];
	$checkout = $rs['checkout'];
	$nights = $rs['nights'];
	//$timein = $rs['arrivaltime'];
	$roomtype= $rs['roomtype'];
	$roomrates=$rs['roomrates'];
	$numberofrooms=$rs['numberofrooms'];
	$salutation=$rs['salutation'];
	$fname = $rs['firstname'];
	$lname = $rs['lastname'];
	$guestType = $rs['guestType'];
	$email = $rs['emailaddress'];
	$contact = $rs['contact'];
	$modeofpay = $rs['modeofpayment'];
	$request = $rs['request'];
	$status = $rs['status'];
	$discount = $rs['discount'];
	$subtotal = $rs['subTotal'];
	$totalcost = $rs['totalcost'];
	$totalroomrate = $subtotal / $nights;
}
//for no of rooms
$try = (explode(" ",$numberofrooms));
$totalnorooms = array_sum($try);
//for timeout
$timeout = "11:00";
$timein = "13:00";
$totalBill = "";
$weekDiscountTotal ="";
$guestDiscountTotal ="";
?>

<div class="box-header with-border">
    <div class="box-title">
		<img height="78" width="95" src="assets/img/yuj.jpg">
		<h3><b>Official Receipt</b></h3>
		<p>Booking ID :&nbsp;<b><?php echo $rcode;?></b></p>
		<hr width="400%" align="center">
	</div>
</div>
<!-- /.box-header -->
<center>
<br>
<br>
<div class="box-body">
    <div class="form-group">
		<table>
			<tr>
			<td>
			<p>
			<b>Check In Date:</b>&nbsp;&nbsp;&nbsp;<?php echo date_format(date_create($checkin),"M j,Y")?>
			<br>
			<b>Check Out Date:</b>&nbsp;&nbsp;<?php echo date_format(date_create($checkout),"M j,Y")?>
			<br>
			<b>Number of Night(s):</b>&nbsp;&nbsp;<?php echo $nights?>
			<br>
			<b>Number of Room(s):</b>&nbsp;&nbsp;<?php echo $totalnorooms?>
			<br><br><br>
			</p>
			</td>
			<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td bgcolor="#E8E8E8" width="60%">
			<label>Guest Details</label>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<b>Guest Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$salutation $fname $lname";?>
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<b>Type of Guest:</b>&nbsp;&nbsp;&nbsp;<?php echo $guestType;?>
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<b>Email Address:</b>&nbsp;&nbsp;&nbsp;<?php echo $email?>
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<b>Contact Number:</b>&nbsp;&nbsp;&nbsp;<?php echo $contact?>
			</p>
			<br>
			</td>
			</tr>
			<tr rowspan="2">
			<td valign="baseline">
			<p>
			<b>Standard Time In:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date_format(date_create("$timein"),"g:i a");?>
			</p>
			</td>
			</tr>
			<tr>
			<td valign="top">
			<p>
			<b>Standard Time Out:</b>&nbsp;&nbsp;<?php echo date_format(date_create("$timeout"),"g:i a");?>
			<br>
			<i id="note">(if you would like an immediate access to your<br> room we recommend booking
			the room for the<br>prior night for immediate access.)</i>
			</p>
			</td>
			<td></td>
			<td bgcolor="#E8E8E8">
			<label>Payment Details</label>
			<br><br>
			<table align="center">
				<?php
				echo "<tr>";
				echo "<td><p><b>Room Type</b></p></td>";
				echo "<td><p><b>Rate</b></p></td>";
				echo "<td><p><b>No of Rooms</b></p></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td><p><i>";
				echo preg_replace('/ /', ' <br> ', trim($roomtype));
				echo "</i>&nbsp;</p></td>";
				echo "<td><p>";
				echo preg_replace('/ /', ' <br> ', trim($roomrates));
				echo "</p></td>";
				echo "<td align='center'><p>";
				echo preg_replace('/ /', ' <br> ', trim($numberofrooms));
				echo "</p></td>";
				echo "</tr>";
				//divider
				echo "<tr>";
				echo "<td><p>----------------------------</p></td>";
				echo "<td><p>--------------</p></td>";
				echo "<td><p>----------------</p></td>";
				echo "</tr>";
				//total of rooms
				echo "<tr>";
				echo "<td><p><i>Total Room Rate:</i>&nbsp;</p></td>";
				$totalroomrate_f = number_format($totalroomrate,2);
				echo "<td><p>$totalroomrate_f</p></td>";
				echo "</tr>";
				//number of nights
				echo "<tr>";
				echo "<td><p><i>No. of Nights:</i>&nbsp;</p></td>";
				echo "<td><p>$nights</p></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td><p><i>Sub Total:</i>&nbsp;</p></td>";
				$subtotal_F = number_format($subtotal,2);
				echo "<td><p>$subtotal_F</p></td>";
				echo "</tr>";
				echo "<tr>";
					if($discount == ".1"){
						$weekDiscount = .1;
						$weekDiscountTotal = $subtotal * $weekDiscount;
						echo "<td><p><i>Week Discount(10%):</i>&nbsp;</p></td>";
						$weekDiscountTotal_f = number_format($weekDiscountTotal,2);
						echo "<td><p>$weekDiscountTotal_f</p></td>";
					}else if($discount == ".2"){
						$weekDiscount = .2;
						$weekDiscountTotal = $subtotal * $weekDiscount;
						echo "<td><p><i>Week Discount(20%):</i>&nbsp;</p></td>";
						$weekDiscountTotal_f = number_format($weekDiscountTotal,2);
						echo "<td><p>$weekDiscountTotal_f</p></td>";
					}else{
						$discount = 0;
					}
				echo "</tr>";
				echo "<tr>";
					if($guestType == "Regular" || $guestType == "" ||$guestType == "None"){
						$guestDiscount = 0;
					}else{
						echo "<td><p><i>Guest Discount(20%):</i>&nbsp;</p></td>";
						$guestDiscount = .20;
						$guestDiscountTotal = $subtotal * $guestDiscount;
						$guestDiscountTotal_f = number_format($guestDiscountTotal,2);
						echo "<td><p>$guestDiscountTotal_f</p></td>";
					}
				echo "</tr>";
				
				
				if($addHour==0){
						echo "<tr></tr>";
					}else{
						echo "<tr>";
						echo "<td><p><i>Add time fee($addHour hr):</i>&nbsp;</p></td>";
						echo "<td><p>$faddTimeFee</p></td>";
						echo "</tr>";
						//echo "<tr>";
						//echo "<td>-----------------------</td>";
						//echo "<td>-------------</td>";
						//echo "</tr>";
						//echo "<tr>";
						//echo "<td><p><b>Total Additional Fee:</b>&nbsp;</p></td>";
						//echo "<td><p><b>$ftotal php</b></p></td>";
						//echo "</tr>";
					}
					?>
					<?php
					if($addDay == 0){
						echo "<tr></tr>";
					}else{
						echo "<tr>";
						echo "<td><p><i>Add Day fee($addDay d):</i>&nbsp;</p></td>";
						echo "<td><p>$faddDayFee</p></td>";
						echo "</tr>";
						//echo "<tr>";
						//echo "<td>------------------------</td>";
						//echo "<td>-------------</td>";
						//echo "</tr>";
						//echo "<tr>";
						//echo "<td><p><b>Total Additional Fee:</b>&nbsp;</p></td>";
						//echo "<td><p><b>$ftotal php</b></p></td>";
						//echo "</tr>";
					}
					
					
					
				//divider
				//divider
				echo "<tr>";
				echo "<td><p>----------------------------</p></td>";
				echo "<td><p>--------------</p></td>";
				echo "<td><p>----------------</p></td>";
				echo "</tr>";
				//remaining balance
				echo "<tr>";
				echo "<td><p><b>Grand Total:</b>&nbsp;&nbsp;&nbsp;PHP</p></td>";
				$totalbill = ($subtotal-$weekDiscountTotal) - $guestDiscountTotal + $total;
				$totalbill_F = number_format($totalbill,2);
				echo "<td><p><b>$totalbill_F</b></p></td>";
				
				echo "</tr>";
				?>
			</table>
			<br>
			</td>
			</tr>
		</table>
	</div>
</div>
</center>
</html>