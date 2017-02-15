<!DOCTYPE html>
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
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.jpg">

    </head>
<style>
	img.port {
		width:300px;
		height:200px;
	}
	div.contai {
		position:fixed;
			top:0px;
		bottom:520px;
		left:90px;
		z-index:1;
		
	}

</style>
    <body>

     
          <!-- Header -->
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
                                <a class="brands" href="index.php">Yuj Inn Hostel</a>
                            </h1>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li>
                                        <a href="index.php"><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li class="current-page">
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
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class=""><img src="icon/rate.png"></i>
                        <h2>Room & Rates /</h2>
                        <p>Here are the different types of our rooms </p>
                    </div>
                </div>
            </div>
        </div>

	
		
		
        <!-- Portfolio -->
        <div class="portfolio portfolio-page container">
            <div class="row">
                <div class="portfolio-navigator span12">
                    <h4 class="filter-portfolio">
                        <a class="all" id="active-imgs" href="#">All</a> /
                        <a class="Solo-Room" id="" href="#">Solo Room</a> /
                        <a class="Double-Room" id="" href="#">Double Room</a> /
                        <a class="6Room" id="" href="#">6 Bed Room</a> /
						 <a class="8Room" id="" href="#">8 Bed Room</a>
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="portfolio-img">
				<!--Solo Room-->
                    <li data-id="p-1" data-type="Solo-Room" class="span3">
                        <div class="work">
                            <a href="assets/img/rooms/solo.jpg" rel="prettyPhoto">
                                <img src="assets/img/rooms/solo.jpg" alt="" class="port">
                            </a>
                            <h4>Solo Room</h4>
                            <p>Solo Room is with a single bed and a wooden table available for studying. Private rooms are next to shared family style bathrooms. Rooms also have a TV with cable connection.</p>
                        </div>
                    </li>
                   
                  
					<!--Double Room-->
                    <li data-id="p-5" data-type="Double-Room" class="span3">
                        <div class="work">
                            <a href="assets/img/rooms/double.jpg" rel="prettyPhoto">
                                <img src="assets/img/rooms/double.jpg" alt="" class="port">
                            </a>
                            <h4>Double Room</h4>
                            <p>A great place for Romantic Getaways. Room has a double bed. Air conditioning (A/C) in bedroom and an attached bathroom. Rooms also have a TV with cable connection.</p>
                        </div>
                    </li>
                   
					<!--6 Bed Room-->
                    <li data-id="p-9" data-type="6Room" class="span3">
                        <div class="work">
                            <a href="assets/img/rooms/six.jpg" rel="prettyPhoto">
                                <img src="assets/img/rooms/six.jpg" alt="" class="port">
                            </a>
                            <h4>6 Bed Room</h4>
                            <p>Spacious dorm rooms with 3 custom wood bunk beds made for adults. Rooms can occupy a total of 6 people. Most have bathrooms in the room, some have shared bathrooms.</p>
                        </div>
                    </li>
                   
					<!--8 Bed Room-->
					<li data-id="p-13" data-type="8Room" class="span3">
                        <div class="work">
                            <a href="assets/img/rooms/eight.jpeg" rel="prettyPhoto">
                                <img src="assets/img/rooms/eight.jpeg" alt="" class="port">
                            </a>
                            <h4>8 Bed Room</h4>
                            <p>A spacious dorm room with 4 custom wood bunk beds made for adults. Sleeps up to 8 people with a private bathroom.</p>
                        </div>
                    </li>
              
                </ul>
            </div>
        </div>
	
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

