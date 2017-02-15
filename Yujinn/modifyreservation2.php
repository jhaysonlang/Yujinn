<?php
include('session.php');
include('connect.php');
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$checkin = date('m/d/Y');
$checkout = date('m/d/Y', strtotime("+1 day", strtotime($checkin)));
?>
<?php 
	
				$id = $login_session_addguest_id;
				$result = mysql_query("SELECT * FROM `tbl_addguest` where addguest_id = ".$id."");
				while($rs = mysql_fetch_array($result)) {
				$modifyid = $rs['rcode'];
				$f = $rs['firstname'];
				$l = $rs['lastname'];
				$s = $rs['salutation'];
				$arrivaltimeselect = $rs['arrivaltime'];
				}
				
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
         <title>Yuj Inn Hostel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

		<!--Datepicker-->
<link type="text/css" href="datepickercss/jquery-ui-1.8.21.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="datepickerjs/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="datepickerjs/jquery-ui-1.8.21.custom.min.js"></script>
<script>
$(function() {
    $( "#sd" ).datepicker({
        // before datepicker opens run this function
        beforeShow: function(){
            // this gets today's date       
            var theDate = new Date();
            // sets "theDate" 2 days ahead of today
            //theDate.setDate(theDate.getDate() + 2);
			theDate.setDate(<?php echo $checkin ?> + 2);
            // set min date as 2 days from today
            $(this).datepicker('option','minDate',theDate);         
        },
        // When datepicker for start date closes run this function
        onClose: function(){
            // this gets the selected start date        
            var theDate = new Date($(this).datepicker('getDate'));
            // this sets "theDate" 1 day forward of start date
            theDate.setDate(theDate.getDate() + 1);
            // set min date for the end date as one day after start date
            $('#ed').datepicker('option','minDate',theDate);
			
        }
    });
    $( "#ed" ).datepicker({
        // before datepicker opens run this function
        beforeShow: function(){
            // this gets today's date       
            var theDate = new Date($( "#sd" ).datepicker('getDate'));
            // sets "theDate" 2 days ahead of today
            theDate.setDate(theDate.getDate() + 1);
            // set min date as 2 days from today
            $(this).datepicker('option','minDate',theDate);         
        }	
	});
});
function soloroom() {
	var x = document.getElementById("Myselect").value;
   document.getElementById("demo").innerHTML = x;
   if (x == 0) {
	    document.getElementById("solo").value = "";
   }
  else {
	   document.getElementById("solo").value = "Solo Room";
	  
  }
}
function doubleroom() {
	var x = document.getElementById("doubleid").value;
   document.getElementById("demos").innerHTML = x;
    if (x == 0) {
		document.getElementById("double").value = "";
	}
	else
   document.getElementById("double").value = "Double Room";
}
function sixroom() {
	var x = document.getElementById("sixid").value;
   document.getElementById("demoss").innerHTML = x;
    if (x == 0) {
		 document.getElementById("six").value = "";
	}
	else {
   document.getElementById("six").value = "Dorm Type (6 Pax Room)";
   }
}
function eightroom() {
	var x = document.getElementById("eightid").value;
   document.getElementById("demosss").innerHTML = x;
    if (x == 0) {
		document.getElementById("eight").value = "";
		}
		else {
   document.getElementById("eight").value = "Dorm Type (8 Pax Room) ";
		}		
   }

</script>
	
	<!--endDatepicker-->
		
		
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

		
		<!--Table-->
		<link rel="stylesheet" href="table/tablesaw.css">
		<script src="table/dependencies/jquery.js"></script>
		<script src="table/tablesaw.js"></script>
		<script src="table/tablesaw-init.js"></script>
		<!--endTable-->
		
    </head>
<style>
	img.image {
	padding-top:10px;
	padding-bottom:10px;
	width:290px;
	height:140px;
	border-radius:15px;
}

	td.title {
		text-indent:20px;
		padding-bottom:10px;
			padding-top:10px;
			
	
		
	}
	 td.selectionofrooms {
		 padding-top:15px;
		 padding-bottom:10px;
		 font-weight:bold;
		 
	 }
	 input.haha {
		 display:none;
		 
	 }
	 td.soldout {
		 font-family:courier new;
		 
	 }
	 	 h4.widget-headerss {
	background:white;
	 box-shadow: 1px 1px 10px 6px #888888;
	 background-image: url("bg.jpg");
	  background-repeat: no-repeat;
	   background-size: 1280px 1260px;
}
img.process {
	width:500px;
	height:70px;
}
table.roomtable {
	border: 0px;
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
                                    
                                    <li class="" >
                                        <a href="" data-toggle='modal' data-target='#myModal' ><i class="icon-search"></i><br />View Reservation</a>
                                    </li>
									<li class="current-page">
                                        <a href="" data-toggle='modal' data-target='#myModal'><i class="icon-edit"></i><br />Modify Reservation</a>
                                    </li>
									<li class="">
                                        <a href="" data-toggle='modal' data-target='#myModal'><i class="icon-trash"></i><br />Cancel Reservation</a>
                                    </li>
									
									<li class="">
                                        <a href="" data-toggle='modal' data-target='#myModal'><i class="icon-signin"></i><br />Log-out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-calendar page-title-icon"></i>
                        <h2>Modifying Reservation /</h2>
                          <p>Your Currently Modifying,Your Reservation Booking ID # <?php echo $modifyid;?> <?php echo $s;?> <b><?php echo $l;?>, <?php echo $f;?></b> 

                    </div>
                </div>
            </div>
        </div>
<br>
<?php







	//get variables
    $checkin = $_GET['checkin'];
    $checkout = $_GET['checkout'];
	$arrivaltime = $_GET['arrivaltime'];
    $nights = $_GET['nights'];
	$modifyid = $_GET['addguest_id'];
	
			
	//Soloroom
	$getLinks = "SELECT * FROM tbl_room_online WHERE category = 'Soloroom'";
	$result = mysql_query($getLinks);
	while($rs=mysql_fetch_array($result)) {
		$roomtype= $rs['roomtype'];
		$roomrate = $rs['roomrates'];
		$capacity = $rs['capacity'];
	}
	//Doubleroom
	$getLinks1 = "SELECT * FROM tbl_room_online WHERE category = 'Doubleroom'";
	$result1 = mysql_query($getLinks1);
	while($rs=mysql_fetch_array($result1)) {
		$roomtype1= $rs['roomtype'];
		$roomrate1 = $rs['roomrates'];
		$capacity1 = $rs['capacity'];
	}
	//Sixbedroom
	$getLinks2 = "SELECT * FROM tbl_room_online WHERE category = 'Sixbedroom'";
	$result2 = mysql_query($getLinks2);
	while($rs=mysql_fetch_array($result2)) {
		$roomtype2= $rs['roomtype'];
		$roomrate2 = $rs['roomrates'];
		$capacity2 = $rs['capacity'];
	}
	//Eightbedroom
	$getLinks3 = "SELECT * FROM tbl_room_online WHERE category = 'Eightbedroom'";
	$result3 = mysql_query($getLinks3);
	while($rs=mysql_fetch_array($result3)) {
		$roomtype3= $rs['roomtype'];
		$roomrate3 = $rs['roomrates'];
		$capacity3 = $rs['capacity'];
	}
?>
      
     <div class="content">
      <div class="containersss" >
        
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-headerss"><br>
		   <br>
		    <br><img src="assets/img/steps/Step2.png" >
          <br>
		   <br>
		    <br> 
           
			<center>
			<table class="details" width="95%" border=0 height="70">
			
			<p class="hide" id="demo"></p>
			<p class="hide" id="demos"></p>
			<p class="hide" id="demoss"></p>
			<p class="hide" id="demosss"></p>
				<?php
				echo ' <div class="modal fade" id="myModal" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">Cancel Reservation</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
      echo '    <p>Are you sure you want to cancel your reservation ?</p>';
	  echo '<a  href="viewreservation.php"> <input type="submit" name="Delete" value="Yes" class="btn btn-danger btn-sm"></a> &nbsp;';
	
	  echo  '<button type="button" class="btn btn-default" data-dismiss="modal">No</button>';
	
        
		echo '</div>';
       
     echo ' </div>';
   echo ' </div>';
  echo '</div>';
echo '</div>';


//soloroommodal
echo ' <div class="modal fade" id="soloroom" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">Solo Room</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
	  echo '<img height="300" width="200" class="images" src="assets/img/rooms/solo.jpg">';
	  echo "<br>";
	    echo "<br>";
		  echo "<br>";
      echo '    <p class="note">Solo Room is with a single bed and a wooden table available for studying. Private rooms are next to shared family style bathrooms. Rooms may also have a TV with cable connection with extra charges.</p>';
	 
	
        
		echo '</div>';
       
     echo ' </div>';
   echo ' </div>';
  echo '</div>';
echo '</div>';
			//soloroommodalend

//doubleroommodal
echo ' <div class="modal fade" id="double" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">Double Room</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
	  echo '<img height="300" width="200" class="images" src="assets/img/rooms/double.jpg">';
	  echo "<br>";
	    echo "<br>";
		  echo "<br>";
      echo '    <p class="note">A great place for Romantic Getaways. Room has a (size of bed). Air conditioning (A/C) in bedroom and an attached bathroom. Rooms may also have a TV with cable connection with extra charges.</p>';
	 
	
        
		echo '</div>';
       
     echo ' </div>';
   echo ' </div>';
  echo '</div>';
echo '</div>';
			//doubleroommodalend
			
			//sixroommodal
echo ' <div class="modal fade" id="six" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">6 Bed Room</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
	  echo '<img height="300" width="200" class="images" src="assets/img/rooms/six.jpg">';
	  echo "<br>";
	    echo "<br>";
		  echo "<br>";
      echo '    <p class="note">Spacious dorm rooms with 3 custom wood bunk beds made for adults. Rooms can occupy a total of 6 people. Most have bathrooms in the room, some have shared bathrooms.</p>';
	 
	
        
		echo '</div>';
       
     echo ' </div>';
   echo ' </div>';
  echo '</div>';
echo '</div>';
			//sixroommodalend
			
			//eightroommodal
echo ' <div class="modal fade" id="eight" role="dialog">';
   echo ' <div class="modal-dialog modal-sm">';
    echo '  <div class="modal-content">';
     echo '   <div class="modal-header">';
      
      echo '    <h4 class="modal-title">8 Bed Room</h4>';
      echo '  </div>';
      echo '  <div class="modal-body">';
	  echo '<img height="300" width="200" class="images" src="assets/img/rooms/eight.jpeg">';
	  echo "<br>";
	    echo "<br>";
		  echo "<br>";
      echo '    <p class="note">A spacious dorm room with 4 custom wood bunk beds made for adults. Sleeps up to 8 people with a private bathroom. Rooms can be Mixed or Female only.</p>';
	 
	
        
		echo '</div>';
       
     echo ' </div>';
   echo ' </div>';
  echo '</div>';
echo '</div>';
			//eightroommodalend
			
			
				echo"<tr>";
					echo"<td width='70'>Check In</td>";
					echo"<td width='10'>:</td>";
					echo"<td width='135'><b>".$checkin."</b></td>";
					echo"<td width='80'>Arrival Time</td>";
					echo"<td width='10'>:</td>";
					echo"<td width='60'>".$arrivaltime."</td>";
					
				echo"</tr>";
				
				echo "<tr>";
					echo"<td>Check Out</td>";
					echo"<td>:</td>";
					echo"<td><b>".$checkout."</b></td>";
					echo"<td>Nights</td>";
					echo"<td>:</td>";
					echo"<td><b>".$nights."</b></td>";
					
				echo "</tr>";								
			echo '</table>';
			echo '<br>';
			echo '<center>';
			echo '<table border=0 width="95%" class="roomtable">';
			echo '<tr>';
				echo '<td align="left" class="title">Room Type</td>';
				echo '<td>Capacity</td>';
				echo '<td>Rate per room</td>';
				echo '<td>Number of Room(s)</td>';
				
			echo '</tr>';
			
				
				?>
			<form action="modifyreservation3.php" method="GET">
			
    <input type = "hidden" name = "checkin" value = "<?php echo $checkin;?>">
    <input type = "hidden" name = "checkout" value = "<?php echo $checkout;?>">
	<input type = "hidden" name = "arrivaltime" value = "<?php echo $arrivaltime;?>">
	<input type = "hidden" name = "nights" value = "<?php echo $nights;?>">
	<input type = "hidden" name = "addguest_id" value = "<?php echo $modifyid;?>">
	
	<!-- Display Soloroom Row-->
                <tr>
                  <td> <a href="" data-toggle='modal' data-target='#soloroom'><img height="150" width="200" src="assets/img/rooms/solo.jpg" class="image"></a></td>
                  <td><?php echo $capacity; ?></td>
                  <td><?php echo $roomrate; ?></td>
                  <td>
	<?php //Date validation for soloroom
    $qry1 = mysql_query("SELECT * FROM tbl_addguest WHERE (status = 'Pending' OR status = 'Reserved' OR status = 'Arrived') AND roomtype LIKE '%Soloroom%'");
    $qrycat1 = mysql_query("SELECT * FROM tbl_room WHERE category = 'Soloroom'");
    $numcat1 = mysql_num_rows($qrycat1);
    while($row1 = mysql_fetch_array($qry1)) 
    {
      if((strtotime($row1['checkin']) <= strtotime($checkin) && strtotime($row1['checkout']) >= strtotime($checkin)) || (strtotime($row1['checkin']) <= strtotime($checkout) && strtotime($row1['checkout']) >= strtotime($checkout)) || (strtotime($checkin) < strtotime($row1['checkin']) && strtotime($checkin) < strtotime($row1['checkout']) && strtotime($checkout) > strtotime($row1['checkin']) && strtotime($checkout) > strtotime($row1['checkout'])))
      {
        $explode1 = explode(' ',trim($row1['roomtype']));
        if(count($explode1) > 1)
        {
          $key1 = 0;
          foreach ($explode1 as $explode1) {
            if($explode1 == 'Soloroom')
            {
              break;
            }
            $key1++;
          }
         $explode11 = explode(' ',trim($row1['numberofrooms']));
         $numcat1 = $numcat1 - $explode11[$key1];
        }
        else
        {
          $numcat1 = $numcat1 - $row1['numberofrooms'];
        }
      }
    }

    if($numcat1 <= 0)
    {
      echo 'No available rooms!<br> Please select another date.';
    }
    else
    {
    ?>
      <select name="number1" class = "x number1">
        <?php if(isset($_GET['number1']))
        {
        echo '<option hidden selected value="'.$_GET['number1'].'">'.$_GET['number1'].'</option>';
        }
        ?>
        <option value=""></option>
      <?php 
      $ctr1 = 1;
      while($numcat1 >= $ctr1)
      {
        ?>
        <option value="<?php echo $ctr1;?>"><?php echo $ctr1;?></option>
        <?php
        $ctr1++;
      }
	}
      ?>
 </select>
</td>
 </tr>
			<!-- Display Doubleroom Row-->
                <tr>
				  <td><a href="" data-toggle='modal' data-target='#double'><img height="150" width="200" src="assets/img/rooms/double.jpg" class="image"></a></td>
                  <td><?php echo $capacity1; ?></td>
                  <td><?php echo $roomrate1; ?></td>
                  <td>
	<?php  //Date validation for Double
    $qry2 = mysql_query("SELECT * FROM tbl_addguest WHERE (status = 'Pending' OR status = 'Reserved' OR status = 'Arrived') AND roomtype LIKE '%Doubleroom%'");
    $qrycat2 = mysql_query("SELECT * FROM tbl_room WHERE category = 'Doubleroom'");
    $numcat2 = mysql_num_rows($qrycat2);
    while($row2 = mysql_fetch_array($qry2)) 
    {
      if((strtotime($row2['checkin']) <= strtotime($checkin) && strtotime($row2['checkout']) >= strtotime($checkin)) || (strtotime($row2['checkin']) <= strtotime($checkout) && strtotime($row2['checkout']) >= strtotime($checkout)) || (strtotime($checkin) < strtotime($row2['checkin']) && strtotime($checkin) < strtotime($row2['checkout']) && strtotime($checkout) > strtotime($row2['checkin']) && strtotime($checkout) > strtotime($row2['checkout'])))
      {
        $explode2 = explode(' ',trim($row2['roomtype']));
        if(count($explode2) > 1)
        {
          $key2 = 0;
          foreach ($explode2 as $explode2) {
            if($explode2 == 'Doubleroom')
            {
              break;
            }
            $key2++;
          }
         $explode22 = explode(' ',trim($row2['numberofrooms']));
         $numcat2 = $numcat2 - $explode22[$key2];
        }
        else
        {
          $numcat2 = $numcat2 - $row2['numberofrooms'];
        }
      }
    }

    if($numcat2 <= 0)
    {
      echo 'No available rooms!<br> Please select another date.';
    }
    else
    {
    ?>
      <select name="number2" class = "x number2">
        <?php if(isset($_GET['number2']))
        {
        echo '<option hidden selected value="'.$_GET['number2'].'">'.$_GET['number2'].'</option>';
        }
        ?>
        <option value=""></option>
      <?php 
      $ctr2 = 1;
      while($numcat2 >= $ctr2)
      {
        ?>
        <option value="<?php echo $ctr2;?>"><?php echo $ctr2;?></option>
        <?php
        $ctr2++;
      }
	}
      ?>
 </select>
</td>
</tr>
				<!-- Dispkay Sixbedroom Row-->
                <tr>
				  <td><a href="" data-toggle='modal' data-target='#six'><img height="150" width="200" src="assets/img/rooms/six.jpg" class="image"></a></td>
                  <td><?php echo $capacity2; ?></td>
                  <td><?php echo $roomrate2; ?></td>
                  <td>
	<?php //Date validation for sixbedroom
    $qry3 = mysql_query("SELECT * FROM tbl_addguest WHERE (status = 'Pending' OR status = 'Reserved' OR status = 'Arrived') AND roomtype LIKE '%Sixbedroom%'");
    $qrycat3 = mysql_query("SELECT * FROM tbl_room WHERE category = 'Sixbedroom'");
    $numcat3 = mysql_num_rows($qrycat3);
    while($row3 = mysql_fetch_array($qry3)) 
    {
      if((strtotime($row3['checkin']) <= strtotime($checkin) && strtotime($row3['checkout']) >= strtotime($checkin)) || (strtotime($row3['checkin']) <= strtotime($checkout) && strtotime($row3['checkout']) >= strtotime($checkout)) || (strtotime($checkin) < strtotime($row3['checkin']) && strtotime($checkin) < strtotime($row3['checkout']) && strtotime($checkout) > strtotime($row3['checkin']) && strtotime($checkout) > strtotime($row3['checkout'])))
      {
        $explode3 = explode(' ',trim($row3['roomtype']));
        if(count($explode3) > 1)
        {
          $key3 = 0;
          foreach ($explode3 as $explode3) {
            if($explode3 == 'Sixbedroom')
            {
              break;
            }
            $key3++;
          }
         $explode33 = explode(' ',trim($row3['numberofrooms']));
         $numcat3 = $numcat3 - $explode33[$key3];
        }
        else
        {
          $numcat3 = $numcat3 - $row3['numberofrooms'];
        }
      }
    }

    if($numcat3 <= 0)
    {
      echo 'No available rooms!<br> Please select another date.';
    }
    else
    {
    ?>
      <select name="number3" class = "x number3">
        <?php if(isset($_GET['number3']))
        {
        echo '<option hidden selected value="'.$_GET['number3'].'">'.$_GET['number3'].'</option>';
        }
        ?>
        <option value=""></option>
      <?php 
      $ctr3 = 1;
      while($numcat3 >= $ctr3)
      {
        ?>
        <option value="<?php echo $ctr3;?>"><?php echo $ctr3;?></option>
        <?php
        $ctr3++;
      }
	}
      ?>
 </select>
</td>
</tr>
			<!-- Display Eightbedroom Row-->
                <tr>
				  <td><a href="" data-toggle='modal' data-target='#eight'><img height="150" width="200" src="assets/img/rooms/eight.jpeg" class="image"></a></td>
                  <td><?php echo $capacity3; ?></td>
                  <td><?php echo $roomrate3; ?></td>
                  <td>
	<?php //date validation for eightbedroom
    $qry4 = mysql_query("SELECT * FROM tbl_addguest WHERE (status = 'Pending' OR status = 'Reserved' OR status = 'Arrived') AND roomtype LIKE '%Eightbedroom%'");
    $qrycat4 = mysql_query("SELECT * FROM tbl_room WHERE category = 'Eightbedroom'");
    $numcat4 = mysql_num_rows($qrycat4);
    while($row4 = mysql_fetch_array($qry4)) 
    {
      if((strtotime($row4['checkin']) <= strtotime($checkin) && strtotime($row4['checkout']) >= strtotime($checkin)) || (strtotime($row4['checkin']) <= strtotime($checkout) && strtotime($row4['checkout']) >= strtotime($checkout)) || (strtotime($checkin) < strtotime($row4['checkin']) && strtotime($checkin) < strtotime($row4['checkout']) && strtotime($checkout) > strtotime($row4['checkin']) && strtotime($checkout) > strtotime($row4['checkout'])))
      {
        $explode4 = explode(' ',trim($row4['roomtype']));
        if(count($explode4) > 1)
        {
          $key4 = 0;
          foreach ($explode4 as $explode4) {
            if($explode4 == 'Eightbedroom')
            {
              break;
            }
            $key4++;
          }
         $explode44 = explode(' ',trim($row4['numberofrooms']));
         $numcat4 = $numcat4 - $explode44[$key4];
        }
        else
        {
          $numcat4 = $numcat4 - $row4['numberofrooms'];
        }
      }
    }

    if($numcat4 <= 0)
    {
      echo 'No available rooms!<br> Please select another date.';
    }
    else
    {
    ?>
      <select name="number4" class = "x number4">
        <?php if(isset($_GET['number4']))
        {
        echo '<option hidden selected value="'.$_GET['number4'].'">'.$_GET['number4'].'</option>';
        }
        ?>
        <option value=""></option>
      <?php 
      $ctr4 = 1;
      while($numcat4 >= $ctr4)
      {
        ?>
        <option value="<?php echo $ctr4;?>"><?php echo $ctr4;?></option>
        <?php
        $ctr4++;
      }
	}
      ?>
 </select>
				  </td>
                </tr>
				
				
				
			
			
			</table>
	<br>
		
			<?php
		echo '<input type="submit" name="save" value="Continue to Next Step" class="btn btn-primary btn-small">';
        echo '</div>';
         echo ' </div>';
        echo '</div>';
     echo ' </div>';
    echo '</div>';
			echo '</div>';
			echo '</form>';
			
			?>
			
    </center>
<br>
        <!-- Footer -->
    
		<?php
			include('footer.php');
		?>

        <!-- Javascript -->
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

