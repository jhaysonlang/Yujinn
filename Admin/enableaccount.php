	<?php
include('../Yujinn/connect.php');

	$id= $_GET['admin_id'];
	$status = "Active";
	mysql_query("UPDATE `tbl_admin_id` SET `status`='$status' WHERE admin_id='$id'");
	header("location: viewaccounts.php");		
	?>	
		<script type="text/javascript">
window.location = "updateaccounts.php";
</script>		