	<?php
	include('../Yujinn/connect.php');
	$id= $_GET['admin_id'];
	$status = "Disable";
	mysql_query("UPDATE `admin_id` SET `status`='$status' WHERE admin_id='$id'");
	mysql_close($con);
	?>
<script type="text/javascript">
window.location = "updateaccounts.php";
</script>		