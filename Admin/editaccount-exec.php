<?php
include('../Yujinn/connect.php');
$username = ucwords(strtolower($_POST['username']));
$password = $_POST['password'];
$firstname = ucwords(strtolower($_POST['firstname']));
$lastname = ucwords(strtolower($_POST['lastname']));
$id = $_GET['admin_id'];

mysql_query("UPDATE `tbl_admin_id` SET `username`='$username', `password`='$password', `firstname`='$firstname',`lastname`='$lastname' WHERE admin_id='$id'");
mysql_close($con);
?>
<script type="text/javascript">
window.location = "viewaccounts.php";
</script>