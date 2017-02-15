		<?php
	$con = mysql_connect("localhost", "renzopangyarihan", "renzo@powers1A");
	if(!$con) {
		die(mysql_error());
		
		
	}
	mysql_select_db('yujinn');
	?>