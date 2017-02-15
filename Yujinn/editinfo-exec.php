<?php
include('connect.php');
$id = $_GET['addguest_id'];
$firstname = ucwords(strtolower($_POST['firstname']));
$lastname = ucwords(strtolower($_POST['lastname']));
$emailaddress = $_POST['emailaddress'];
$contact = $_POST['contact'];


mysql_query("UPDATE `tbl_addguest` SET `firstname`='$firstname', `lastname`='$lastname', `emailaddress`='$emailaddress',`contact`='$contact' WHERE addguest_id='$id'");
header("location: payment.php?addguest_id=".$id."");	
mysql_close($con);
?>