	<?php
	include('conn.php');
	
	mysql_query("DELETE FROM `tbl_addguest` WHERE process=' '");
	header("location: onlinereservation.php");	
	mysql_close($con);
	?>	