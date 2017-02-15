<?php


include('connect.php');

$to = "jasonmarklandayan@yahoo.com";
$from = $_POST['email'];
$body = $_POST['message'];
$from = $_POST['email'];
$subject = $_POST['subject'];
$headers1 = $_POST['email'];
$sentmail = mail ( $to, $subject, $body, $headers1 );


?>
<script type="text/javascript">
window.location = "contact.php";
</script>