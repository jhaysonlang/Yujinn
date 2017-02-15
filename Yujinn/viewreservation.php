
<!DOCTYPE html>
<?php 
	include('session.php');
	include('connect.php');
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
         <title>Yuj Inn Hostel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/flexslider.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
         <link rel="shortcut icon" href="assets/ico/yujinnhostel.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

<style>

	td.total {
		font-size:20px;
		text-indent:40px;
		color:red;
		font-weight:bold;
		
	}
</style>

    <body>

         <!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brands" href="">Yuj Inn Hostel</a>
                            </h1>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    
                                    <li class="current-page">
                                        <a href="viewreservation.php""><i class="icon-search"></i><br />View Reservation</a>
                                    </li>
									<li>
                                        <a href="modifyreservation.php" ><i class="icon-edit"></i><br />Modify Reservation</a>
                                    </li>
									<li class="">
                                        <a href="cancelreservation.php" ><i class="icon-trash"></i><br />Cancel Reservation</a>
                                    </li>
									<li class="">
                                        <a href="logout.php"><i class="icon-signin"></i><br />Log-out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
<?php

$msg = '';
if(isset($_POST['upload'])){
	
	$target = "assets/img/receipt/" .basename($_FILES['image']['name']);
	$db = mysqli_connect('localhost','root','','yujinn') or die('Unable To connect');
	$id = $login_session_addguest_id;
	$image = $_FILES['image']['name'];
	$sql= "UPDATE tbl_addguest SET image = '$image' WHERE addguest_id = '$id'";
    mysqli_query($db,$sql);
	
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
		$msg = "Image Uploaded";
		
	}
	else {
		$msg = "Image is not good";
	}
	

}
?>

       
					<br>
					 <div class="content">
					 
      <div class="containers">
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-headerss"><i class="icon-search"></i> View Reservation</h4>
            <div class="widget-bod" >
			<center>
			 <table class="detail" width="95%" border=0>
				
				
				</table>
			
             <table class="detail" width="95%" border=0 height="550">
			
				<?php
				
				$id = $login_session_addguest_id;
				$result = mysql_query("SELECT * FROM `tbl_addguest` where addguest_id = ".$id."");
				while($rs = mysql_fetch_array($result))
				{
					$rooms = $rs['roomtype'];
					$checkin = $rs['checkin'];
					$checkout = $rs['checkout'];
					$roomrates = $rs['roomrates'];
					$receipt = $rs['image'];
					$numberofrooms = $rs['numberofrooms'];
					$nights = $rs['nights'];
					$total = ($rs['roomrates'] * $nights) * $numberofrooms;
					$totalcost = $rs['totalcost'];
					$totalcost = number_format($totalcost);
					
				echo"<tr>";
					echo"<td width='70'> Name</td>";
					echo"<td width='10'>:</td>";
					echo"<td width='135'><b>".$rs['salutation']. " ".$rs['firstname']. " " .$rs['lastname']."</b></td>";
					echo"<td width='100'>Contact</td>";
					echo"<td width='10'>:</td>";
					echo"<td width='60'><b>".$rs['contact']."</b></td>";
					
				echo"</tr>";	
				echo"<tr>";
					echo"<td width='70'>Check In</td>";
					echo"<td width='10'>:</td>";
					
					?>
					<td width='135'><b><?php echo date_format(date_create($checkin),"M j,Y");?></b></td>
					<?php
					echo"<td  width='100'>Check Out</td>";
					echo"<td>:</td>";
					?>
					<td width='135'><b><?php echo date_format(date_create($checkout),"M j,Y");?></b></td>
					<?php
				
					
				echo"</tr>";
				echo "<tr>";
					echo"<td width='80'> Time</td>";
					echo"<td width='10'>:</td>";
					echo"<td width='60'><b>".$rs['arrivaltime']."</b></td>";
					echo"<td>Nights</td>";
					echo"<td>:</td>";
					echo"<td><b>".$rs['nights']."</b></td>";
					
				echo "</tr>";
				echo "<tr>";
					echo"<td>E-mail </td>";
					echo"<td>:</td>";
					echo"<td><b>".$rs['emailaddress']."</b></td>";
					echo"<td>Room type </td>";
					
					echo "<td >: &nbsp;&nbsp;&nbsp;</td>";
					echo "<b>";
					echo "<td><b>";
					echo preg_replace('/ /', ' and ', trim($rooms));
					echo "</b>";
					echo "</td>";
					
			
				echo"<tr>";
					
					echo"<td width='125' colspan=6></td>";
		
					
					
				echo"</tr>";
				echo"<tr bgcolor=' #d9d9d9'>";
					
					echo"<td width='125' colspan=5><b>Total Cost:</b></td>";
					echo"<td width='125' colspan=1 class='total'>P".$totalcost.".00</td>";
					
					
				echo"</tr>";
				}
					echo"<tr>";
					
					echo"<td width='125' colspan=6></td>";
		
					
					
				echo"</tr>";
				?>
				  <form action="viewreservation.php" method="post" enctype="multipart/form-data">
				<tr>
					<td colspan=3><h4>Upload your Receipt Here:</h4></td>
				<td rowspan=3 colspan=3><?php 
						if ($receipt == !null)
						{
					echo "<img src='assets/img/receipt/" .$receipt. "'>";
						}
						else {
							echo "No Receipt Uploaded";
						}
					?>
					
				</td>
				</tr>
				<tr>
					<td colspan=3><input type="file" name="image"></td>	
				</tr>
				<tr>
						<td colspan=3><input type="submit" name="upload" value="Upload Image" class="btn btn-success"><?php echo $msg?></td>
				</tr>
				
               </table>
			   </form>
				</center>
				
			
			  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
				
                   

       <br>

        <!-- Footer -->
    
		<?php
			include('footer.php');
		?>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/jquery.tweet.js"></script>
        <script src="assets/js/jflickrfeed.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/jquery.quicksand.js"></script>
        <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

