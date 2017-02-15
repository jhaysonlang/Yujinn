<?php
session_start();
	
if(session_destroy()) // Destroying All Sessions
{
header('Location: ../Yujinn/index.php'); // Redirecting To Home Page
}
?>