<?php
	$con = mysql_connect('localhost','root','');
	if(!$con) {
		die(mysql_error());
		
		
	}
	mysql_select_db('admin');
				$result = mysql_query("SELECT * FROM `tbl_addguest`");
				while($rs=mysql_fetch_array($result)) {
					echo "<tr>";
					echo "<td>".$rs['id']."</td>";
					echo "</tr>";
						
						
					
					}
					
?>