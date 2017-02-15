
<?php
include('../Yujinn/connect.php');
	
	//assigning variables
	$id= $_GET['guestid'];
	$status= "No Show";
	
	//update tbl_addguest status = No show
	mysql_query("UPDATE tbl_addguest SET status='".$status."' WHERE addguest_id='".$id."'");
		
	mysql_close($con);
			
?>
	<script>
		alert('Successfully removed no show guest');
		window.location.href='home.php';
	</script>