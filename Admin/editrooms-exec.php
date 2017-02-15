<?php
include('../Yujinn/connect.php');
$roomtype = ucwords(strtolower($_POST['roomtype']));
$roomrates = ucwords(strtolower($_POST['roomrates']));
$capacity = ucwords(strtolower($_POST['capacity']));
$roomoffered = ucwords(strtolower($_POST['roomoffered']));
$id = $_GET['room_id'];
$category = $_GET['category'];

mysql_query("UPDATE `tbl_room` SET `roomrates`='$roomrates' WHERE category='$category'");
mysql_query("UPDATE `tbl_room_online` SET `roomrates`='$roomrates'  WHERE category='$category'");
mysql_close($con);
?>
<script type="text/javascript">
window.location = "viewrooms.php";
</script>