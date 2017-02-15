<?php
include('../Yujinn/connect.php');
$bankname = $_POST['bankname'];
$accountnumber = $_POST['accountnumber'];
$accountname = $_POST['accountname'];

$query = mysql_query("select deposit_id from tbl_deposit_account ORDER BY deposit_id DESC LIMIT 1",$con)or die(mysql_error());
$id = mysql_result($query,0);

mysql_query("UPDATE `tbl_deposit_account` SET `bankname`='$bankname', `accountnumber`='$accountnumber', `accountname`='$accountname' WHERE deposit_id='$id'");
mysql_close($con);
?>

<script type="text/javascript">
window.location = "depositaccount.php";
</script>