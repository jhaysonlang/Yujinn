<?php
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$checkin = date('m/d/Y');
$checkout = date('m/d/Y', strtotime("+1 day", strtotime($checkin)));
$checkouts = date('d', strtotime("-1 day", strtotime($checkin)));
$time_in_12_hour_format  = date("g:i a", strtotime("13:30"));


include('connect.php');

	$result = mysql_query("SELECT * FROM `tbl_deposit_account`");
				while($rs = mysql_fetch_array($result)) {
				$bankname = $rs['bankname'];
				$accountnumber = $rs['accountnumber'];
				$accountname = $rs['accountname'];
				}

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


$checkIn=$_POST['checkin'];
$checkOut=$_POST['checkout'];
$nights=$_POST['nights'];
$arrivaltime=$_POST['arrivaltime'];
$roomtype=$_POST['room'];
$roomrates=$_POST['rate'];
$numberofrooms=$_POST['numberofrooms'];
$emailaddress = $_POST['emailaddress'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$salutation = $_POST['salutation'];
$firstname= ucwords(strtolower($_POST['firstname']));
$lastname= ucwords(strtolower($_POST['lastname']));
$register_time = $_POST['register_time'];
$status= "Pending";
$totalcost = $_POST['totalcost'];
$subTotal = $_POST['subTotal'];
$weekdiscount = $_POST['weekdiscount'];
$reservation_time = date("h:i A");  
$reservation_date = date("D, M d, Y");
$expiry_date = date('D, M d, Y', strtotime("+3 day", strtotime($reservation_date)));
$valid = true;


$ins = date_format(date_create($checkIn),"D, M d, Y");
$outs = date_format(date_create($checkOut),"D, M d, Y");



$roomNames = explode(' ', trim($roomtype));
foreach ($roomNames as $roomNames) {
 $qry1 = mysql_query("SELECT * FROM tbl_addguest WHERE (status = 'Pending' OR status = 'Reserved' OR status = 'Arrived') AND roomtype LIKE '%$roomNames%'");
    $qrycat1 = mysql_query("SELECT * FROM tbl_room WHERE category = '$roomNames'");
    $numcat1 = mysql_num_rows($qrycat1);
    while($row1 = mysql_fetch_array($qry1)) 
    {
      if((strtotime($row1['checkin']) <= strtotime($checkIn) && strtotime($row1['checkout']) >= strtotime($checkIn)) || (strtotime($row1['checkin']) <= strtotime($checkOut) && strtotime($row1['checkout']) >= strtotime($checkOut)) || (strtotime($checkIn) < strtotime($row1['checkin']) && strtotime($checkIn) < strtotime($row1['checkout']) && strtotime($checkOut) > strtotime($row1['checkin']) && strtotime($checkOut) > strtotime($row1['checkout'])))
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
      	$valid = false;
      	break;
    }
    else
    {
  		$valid = true;
	}
	}
if($valid){
$to = $_POST['emailaddress'];
$from = "Yujinn Hostel";
$url = "www.yujinnhostel.com";
$body = "Yuj Inn Hostel Reservation

		*BOOKING DETAILS FOR YUJINN HOSTEL*

		Reservation Code: $rcode
		Check-in  : $ins
		Check-out : $outs
		Nights	  : $nights
		Room Type : $roomtype
		
		
		Payment Summary
		Deposit   : PHP 0.00
		Total Bill: $totalcost
		
		Hostel Address      : 3rd Floor #65 Maginhawa St., UP Village, Diliman, 1101 Quezon City, Philippines
		Hostel Phone Number :  63-2-5270011
		
		Guest Name    : $lastname, $firstname
		Guest Email   : $emailaddress
		Guest Phone   : $contact
		Guest Address : $address
		
		
		Bank Account Name is : $accountname
		Bank Name is         : $bankname
		Deposit Account is 	 : $accountnumber
		
		Cancellation Charges
		A cancellation charge applies.
		
		Cancellation/Modification/ No-show Terms:
		
		1. Acceptance Guests who have placed reservations via the hotel’s online reservation 
			system are assumed to have read and accepted the terms and conditions herein
		2.	Cancellation/No show of Paid Reservation will be considered NON REFUNDABLE as per the hostel policy.
		3.	Yuj Inn Hostel requires any cancellation or modification to be made at least 
			48 hours after the reservation to avoid forfeiting the reservation made.";

$from = "Yujinn Hostel";
$subject = "Yuj inn Hostel Reservation"; 
$headers1 = "yuj_inn@yahoo.com.ph";
$sentmail = mail ( $to, $subject, $body, $headers1 );

mysql_query("INSERT into tbl_addguest(rcode,checkin,checkout,nights,arrivaltime,roomtype,roomrates
		,numberofrooms,firstname,lastname,salutation,address,emailaddress,contact,status,discount,subTotal,totalcost,reservation_date,reservation_time,expiry_date)
		VALUES('".$rcode."','".$checkIn."','".$checkOut."','".$nights."','".$arrivaltime."','".$roomtype."','".$roomrates."',
		'".$numberofrooms."','".$firstname."','".$lastname."','".$salutation."','".$address."','".$emailaddress."','".$contact."',
		'".$status."','".$weekdiscount."','".$subTotal."','".$totalcost."','".$reservation_date."','".$reservation_time."','".$expiry_date."')")or die(mysql_error());
		header('location:reservationrequest.php');
		?>
		<script type="text/javascript">
window.location = "reservationrequest.php";
</script>
	<?php	
}
else {
	?>
	<script type="text/javascript">
window.location = "reservation.php?noavailable";
</script>
<?php
	
}
?>