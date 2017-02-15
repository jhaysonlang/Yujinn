	<?php
	include('../Yujinn/connect.php');
	$id= $_GET['room_id'];
	mysql_query("DELETE FROM `tbl_room` WHERE room_id='$id'");

	mysql_close($con);
	?>
<script type="text/javascript">
window.location = "updaterooms.php";
</script>	