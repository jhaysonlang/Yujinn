<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
header("location:admin.php?incomplete"); // Redirecting To Other Page
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$login_time = $_POST['login_time'];
$login_date = $_POST['login_date'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "renzopangyarihan", "renzo@powers1A");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("yujinn",$connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from tbl_admin_id where password ='".$password."' AND username ='".$username."'", $connection);
$rows = mysql_num_rows($query);
//RECEPTIONIST
$query1 = mysql_query("select * from tbl_receptionist_id where password ='".$password."' AND username ='".$username."'", $connection);
$rows1 = mysql_num_rows($query1);
if ($rows == 1) {
$_SESSION['login_user1']=$username; // Initializing Session
header("location:dailysale.php"); // Redirecting To Other Page
}else if($rows1 == 1){
$_SESSION['login_user']=$username; // Initializing Session
header("location:../Receptionist/home.php"); // Redirecting To Other Page
}else{
header("location:admin.php?invalid"); // Redirecting To Other Page
}
mysql_close($connection); // Closing Connection
}
}
?>