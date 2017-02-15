<?php
include('../Yujinn/connect.php');
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$curTime = date("H:i");
$curDate = date('m/d/Y');
	
//assigning variables
$rcode = $_POST['rcode'];
$checkIn=$_POST['checkin'];
$checkOut=$_POST['checkout'];
$nights=$_POST['nights'];
$timeIn=$_POST['timein'];
$roomtype=$_POST['room'];
$roomrates=$_POST['rate'];
$numberofrooms=$_POST['numberofrooms'];
//$adult=$_POST['persons'];
$salutation = $_POST['salutation'];
$fname= ucwords(strtolower($_POST['fname']));
$lname= ucwords(strtolower($_POST['lname']));
$guestType=$_POST['guestType'];

$subtotal=$_POST['subtotal'];
$discount=$_POST['discount'];
$totalbill=$_POST['totalbill'];
$status= "Reserved";
$recep = $_POST['recep'];
$modeofpayment = "Full Payment";
/*addtional variables
$typeofguest = $_POST['guestType'];
$roomNo=$_POST['roomNo'];
$timeOut=$_POST['timeout'];*/

//for contact
if(empty($_POST['contact'])){
	$contactNo = "none";
}else{
	$contactNo=$_POST['contact'];
}

//for email
if(empty($_POST['emailadd'])){
	$email = "none";
}else{
	$email=$_POST['emailadd'];
}
		
/*for status if Arrived/Pending/Reserved
$curTime_t = str_replace(":", "", $curTime);
$timeIn_t = str_replace(":", "",$timeIn);
if(strtotime($curDate)==strtotime($checkIn)&& $timeIn_t <= $curTime_t){
	$status = "Arrived";
}else if(strtotime($curDate)<strtotime($checkIn)||$timeIn_t > $curTime_t){
	$status = "Reserved";
}
//end./status*/

//check if may nauna
$valid = true;

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
	//save to tbl_addguest
	mysql_query("INSERT into tbl_addguest(rcode,checkin,checkout,nights,arrivaltime,roomtype,roomrates
		,numberofrooms,salutation,firstname,lastname,guestType,emailaddress,contact,status,discount,modeofpayment,subTotal,totalcost)
		VALUES('".$rcode."','".$checkIn."','".$checkOut."','".$nights."','".$timeIn."','".$roomtype."','".$roomrates."',
		'".$numberofrooms."','".$salutation."','".$fname."','".$lname."','".$guestType."','".$email."','".$contactNo."',
		'".$status."','".$discount."','".$modeofpayment."','".$subtotal."','".$totalbill."')")or die(mysql_error());;
	?>
	<script type="text/javascript">
		window.location = "home.php";
	</script><?php
}
else{
?>
<script type="text/javascript">
	window.location = "addGuest1.php?noavailable";
</script>
<?php
}
?>