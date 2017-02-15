	<?php
include('../Yujinn/connect.php');

	$id= $_GET['receptionist_id'];
	$status = "Active";
	mysql_query("UPDATE `tbl_receptionist_id` SET `status`='$status' WHERE receptionist_id='$id'");
	
	mysql_close($con);
	?>	
	<script type="text/javascript">
window.location = "updateaccounts.php";
</script>		