<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['emailaddress']) || empty($_POST['rcode'])) {
header("location:login.php?incomplete"); // Redirecting To Other Page
}
else
{
// Define $username and $password
$rcode=$_POST['rcode'];
$email=$_POST['emailaddress'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$rcode = ($rcode);
$email = ($email);
$rcode = mysql_real_escape_string($rcode);
$email = mysql_real_escape_string($email);
// Selecting Database
$db = mysql_select_db("yujinn", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from tbl_addguest where  emailaddress='$email' AND rcode='$rcode'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$rcode; // Initializing Session
header("location: viewreservation.php"); // Redirecting To Other Page
} else {
header("location:login.php?invalid"); // Redirecting To Other Page
}
mysql_close($connection); // Closing Connection
}
}
?>