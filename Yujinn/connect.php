<?php
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$currdate = date("D, M d, Y");
$status = "No Show";
$Pending = "Pending";
	$con = mysql_connect("localhost", "root", "");
	if(!$con) {
		die(mysql_error());
		
		
	}
	mysql_select_db('yujinn');
			$getLinks = "SELECT * FROM tbl_addguest";
			$result = mysql_query($getLinks);
			while($rs=mysql_fetch_array($result)) {
				$reservation_date = $rs['reservation_date'];
				$expiry_date = $rs['expiry_date'];
			
				
			
			if ($expiry_date == $currdate) {
				mysql_query("UPDATE `tbl_addguest` SET `status`='$status' WHERE expiry_date='$currdate' AND status='$Pending'");
				
			}
			
			}

	
	
	
	
	?>