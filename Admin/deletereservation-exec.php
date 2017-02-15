	<?php
	include('../Yujinn/connect.php');
	$id= $_GET['addguest_id'];
	mysql_query("DELETE FROM `tbl_addguest` WHERE addguest_id='$id'");
	
	mysql_close($con);
	?>
<script type="text/javascript">
window.location = "onlinereservation.php";
</script>		