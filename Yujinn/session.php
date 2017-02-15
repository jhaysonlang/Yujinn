<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("yujinn", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from tbl_addguest where rcode='$user_check'", $connection);

$row = mysql_fetch_assoc($ses_sql);
$login_session_addguest_id=$row['addguest_id'];
$login_session_firstname=$row['firstname'];
$login_session_lastname=$row['lastname'];

if(!isset($login_session_addguest_id)){
mysql_close($connection); // Closing Connection
header('Location: login.php'); // Redirecting To Home Page
}
?>