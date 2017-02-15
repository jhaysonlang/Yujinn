<?php
include('../Yujinn/connect.php');
$roomtype = ucwords(strtolower($_POST['roomtype']));
$roomnumber = $_POST['roomnumber'];
$roomrates = ucwords(strtolower($_POST['roomrates']));
$capacity = ucwords(strtolower($_POST['capacity']));
$roomoffered = ucwords(strtolower($_POST['roomoffered']));
$id = $_GET['room_id'];

mysql_query("UPDATE `tbl_room` SET `roomtype`='$roomtype', `roomnumber`='$roomnumber', `roomrates`='$roomrates',`capacity`='$capacity', `roomoffered`='$roomoffered'  WHERE room_id='$id'");
mysql_close($con);
?>
<script type="text/javascript">
window.location = "viewrooms.php";
</script>