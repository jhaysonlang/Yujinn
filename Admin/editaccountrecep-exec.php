<?php
include('../Yujinn/connect.php');
$username = ucwords(strtolower($_POST['username']));
$password = $_POST['password'];
$firstname = ucwords(strtolower($_POST['firstname']));
$lastname = ucwords(strtolower($_POST['lastname']));
$id = $_GET['receptionist_id'];

mysql_query("UPDATE `tbl_receptionist_id` SET `username`='$username', `password`='$password', `firstname`='$firstname',`lastname`='$lastname' WHERE receptionist_id='$id'");
	
mysql_close($con);
?>
<script type="text/javascript">
window.location = "viewaccounts.php";
</script>