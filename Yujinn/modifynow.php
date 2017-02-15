<?php

include('session.php');
include('connect.php');
$email = $_GET['email'];

$to = $email;
$subject = "Hotel Reservation";
$body = "Your Reservation Is not yet booked already, kindly wait for our confirmation via email";
$headers = "From: yuj_inn@yahoo.com.ph";
mail($to, $subject, $body, $headers);


$modifyid = $_POST['addguest_id'];
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

mysql_query("UPDATE `tbl_addguest` SET `checkin`='$checkIn',`checkout`='$checkOut',`nights`='$nights',`arrivaltime`='$arrivaltime',`roomtype`='$roomtype'
,`roomrates`='$roomrates',`numberofrooms`='$numberofrooms',`totalcost`='$totalcost',`subTotal`='$subTotal',`discount`='$weekdiscount' where `rcode` = '$modifyid'");


header("location: viewreservation.php");
mysql_close($con);
?>