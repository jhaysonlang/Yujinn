<?php
include('../Yujinn/connect.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailaddress = $_POST['emailaddress'];
$contact = $_POST['contact'];

$id = $_GET['id'];

mysql_query("UPDATE `tbl_addguest` SET `firstname`='$firstname', `lastname`='$lastname', `emailaddress`='$emailaddress',`contact`='$contact' WHERE id='$id'");	
mysql_close($con);
?>
<script type="text/javascript">
window.location = "payment.php";
</script>