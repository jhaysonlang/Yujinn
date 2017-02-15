<?php
				include('../Yujinn/connect.php');
	
			if(isset($_POST['update'])) {
			$status = "Active";
			$username = ucwords(strtolower($_POST['username']));
			$password = $_POST['password'];
			$firstname = ucwords(strtolower($_POST['firstname']));
			$lastname = ucwords(strtolower($_POST['lastname']));
			$position = $_POST['position'];
			$positions = $position;
			if ($positions == "Admin"){
			$sqlINSERT = "INSERT INTO tbl_admin_id(username,password,firstname,lastname,position,status)VALUES('".$username."','".$password."','".$firstname."','".$lastname."','".$position."','".$status."')";
			$result = mysql_query($sqlINSERT);
			}
			else {
				$sqlINSERT = "INSERT INTO tbl_receptionist_id(username,password,firstname,lastname,position,status)VALUES('".$username."','".$password."','".$firstname."','".$lastname."','".$position."','".$status."')";
			$result = mysql_query($sqlINSERT);
				
			}
			
			mysql_close($con);
			if(!$result) {
				die(mysql_error());
				
			} 
	}
	?>
			<script type="text/javascript">
window.location = "viewaccounts.php";
</script>		