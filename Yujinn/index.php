<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php


if(isset($_GET['noavailable']))
{
    echo'<script>alert("May nauna!"); location.href="addGuest1.php";</script>';
}

$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$checkin = date('m/d/Y', strtotime("+1 day"));
$checkout = date('m/d/Y', strtotime("+1 day", strtotime($checkin)));
$checkouts = date('d', strtotime("-1 day", strtotime($checkin)));
$time_in_12_hour_format  = date("g:i a", strtotime("13:30"));
?>
        <!--Datepicker-->
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" />   
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.21.custom.min.js"></script>
<script>


$(function() {

    $( "#sd" ).datepicker({
        // before datepicker opens run this function
        
        beforeShow: function(){
            // this gets today's date       
            var theDate = new Date();
            // sets "theDate" 2 days ahead of today
            theDate.setDate(theDate.getDate());
            //theDate.setDate(<?php echo $checkin ?>);
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

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m;
    var t = setTimeout(startTime, 500);
};
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
};
function timeAdjust()
{
    var elem1=document.getElementById('nights').value;
    var elem2 = $('#sd').val();
    var elem3 = $('#ed').val();
    var elem=document.getElementById('nights');
    var date1 = new Date(elem2);
    var date2 = new Date(elem3);
    var nights=(date2.getTime()-date1.getTime())/86400000;

    if(nights==0){
        elem.value=1;
    }else{
        elem.value=nights;
    }
    
}
</script>
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

div.calendar {
    position: absolute;
    right:130px;
}
div.contai {
        position:fixed;
        top:0px;		
		bottom:550px;
		left:90px;
		z-index:1;
     
		
	}
	img.galaw {
		height:700px;
		width:200px;
	}
    a.av {
        position: relative;
        top:-5px;
    }
</style>
    <body>

        <?php
			
			include('connect.php');
		?>

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
                                <a class="brands" href="index.php"></a>
                            </h1>

                            <div class="nav-collapse collapse">

                                <ul class="nav pull-right">
                                     <li class="current-page">
                                        <a href="index.php"><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li >
                                        <a href="rates.php"><i class=""><img src="beds.png"></i><br />Room & Rates</a>
                                    </li>
                                    
                                    <li>
                                        <a href="reservation.php"><i class="icon-calendar"></i><br />Reservation</a>
                                    </li>
                                    <li>
                                        <a href="contact.php"><i class="icon-envelope-alt"></i><br />Contact</a>
                                    </li>
									<li>
                                        <a href="about.php"><i class="icon-user"></i><br />About</a>
                                    </li>
									<li>
                                        <a href="login.php"><i class="icon-signin"></i><br />Log-in</a>
                                    </li>
                                   
                    
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
 <form method="GET" action="reservation2.php">
             <div class="calendar" id="avail">
                  <b>Check-in:</b>&nbsp; <input type="text"  name="checkin" id='sd' placeholder="Check-in" value="<?php echo $checkin ?>"required>
                    &nbsp;&nbsp;&nbsp;
                   <b>Check-out:</b> <input type="text"  name="checkout" id='ed' placeholder="Check-out" value="<?php echo $checkout ?>"required>
                    <a href="" class="av"><input type="submit" name="proceed" class="btn btn-success btn-md" value="Search Available Rooms"></a> 
                    </div>
                                 </form>

        <!-- Slider -->
       
            <div class="container">
                <div class="row">
                    <div class="span10 offset1">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="">
                                    <img src="assets/img/slider/yuj.jpg" class="galaw">
                                    <p class="flex-caption">YUJ INN HOSTEL IS YOUR HOMEY TRANSIENT HOSTEL OFFERING AFFORDABLE, ACCESSIBLE, CLEAN, SAFE ACCOMODATION IN DILIMAN AREA.</p>
                                </li>
                                <li data-thumb="">
                                    <img src="assets/img/slider/2.jpg" class="galaw">
                                    <p class="flex-caption"> YUJ INN is a convenient place to stay within the Diliman, Quezon City area, where the University of the Philippines and numerous Government Offices are located.</p>                                
								</li>
                               
								<li data-thumb="">
                                    <img src="assets/img/slider/3.jpg" class="galaw">
                                    <p class="flex-caption">Designed as a backpacker hostel, we offer very accessible,  affordable and clean accommodation to make your stay in Manila (Diliman, Quezon City) as pleasant as possible without hurting your pockets</p>
                                </li>
								
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Site Description -->
        <div class="presentation container">
            <h2>We are <span class="violet">Yuj Inn</span>, a super cool hostel in town.</h2>
            <p>We offer Beautiful and Cool rooms. Your vacation is safe with us.</p>
        </div>

        <!-- Services -->
        <div class="what-we-do container">
            <div class="row">
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class=""><img src="icon/bed.png"></i>
                    </div>
                    <h4>Comfortable Rooms</h4>
                    <p>Fully airconditioned rooms spread over 3 floors with daily, weekly, monthly and long stay rates. We provide a warm and pleasant home away from home feel with basic comforts </p>
					<a href="rates.php">Read more</a>
                </div>
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-glass"></i>
                    </div>
                    <h4>strEAT Maginhawa</h4>
                    <p>YUJ INN is the perfect jump off point to start your adventure along MAGINHAWA EAT STREET where you can find more than 200++ restos and food hubs.</p>
					<a href="">Read more</a>
                </div>
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-map-marker"></i>
                    </div>
                    <h4>Better Location</h4>
                   <p>YUJ INN is a convenient place to stay within the Diliman, Quezon City area, where the University of the Philippines and numerous Government Offices are located. </p>
				   <a href="contact.php">Read more</a>
                </div>
               <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-question-sign"></i>
                    </div>
                    <h4>Why Choose Us</h4>
                    <p >The hostel offers a wonderful no-frills accommodation to make your stay truly unforgettable. Superb service and an excellent location make Yuj Inn the perfect base </p>
					<a href="about.php">Read more</a>
                </div>
            </div>
        </div>

       

        

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

