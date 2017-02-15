<?php
				
	include('../Yujinn/connect.php');
			if(isset($_POST['update'])) {
         	$roomtype = ucwords(strtolower($_POST['roomtype']));
			$roomnumber = ucwords(strtolower($_POST['roomnumber']));
			$roomstatus = "Available";
			$capacity = "";
			$roomrates = "";
			$category = "";
			if($roomtype == "Solo Room"){
				$capacity = 1;
				$roomrates = 900;
				$category = "Soloroom";
			}else if($roomtype == "Double Room"){
				$capacity = 2;
				$roomrates = 1300;
				$category = "Doubleroom";
			}else if($roomtype == "Dorm Type (6 Pax Room)"){
				$capacity = 6;
				$roomrates = 3300;
				$category = "Sixbedroom";
			}else if($roomtype == "Dorm Type (8 Pax Room)"){
				$capacity = 1;
				$roomrates = 1300;
				$category = "Eightbedroom";
			}
			
			//$capacity = ucwords(strtolower($_POST['capacity']));
			//$roomrates = ucwords(strtolower($_POST['roomrates']));
			//$category = ucwords(strtolower($_POST['category']));
			//$roomoffered = ucwords(strtolower($_POST['roomoffered']));
			//$roomstatus = $_POST['roomstatus'];
			
			
			$sqlINSERT = "INSERT INTO tbl_room(roomName,roomnumber,capacity,roomrates,category,roomstatus)VALUES('".$roomtype."','".$roomnumber."','".$capacity."','".$roomrates."','".$category."','".$roomstatus."')";
			$result = mysql_query($sqlINSERT);
			
			mysql_close($con);
			if(!$result) {
				die(mysql_error());
							
			} 
	}
	?>
<script type="text/javascript">
window.location = "updaterooms.php";
</script>		