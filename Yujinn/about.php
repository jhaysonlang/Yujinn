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
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

  <style>

	div.contai {
		position:fixed;
			top:0px;
		bottom:520px;
		left:90px;
		z-index:1;
		
	}
</style>
    <body>
  <?php
			//include('header.php');
			include('connect.php');
		?>
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
                                <a class="brands" href="index.php">Yuj Inn Hostel</a>
                            </h1>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li>
                                        <a href="index.php"><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li >
                                       <a href="rates.php"><i class=""><img src="beds.png"></i><br />Room & Rates</a>
                                    </li>
                                   
                                    <li >
                                        <a href="reservation.php"><i class="icon-calendar"></i><br />Reservation</a>
                                    </li>
                                    <li>
                                        <a href="contact.php"><i class="icon-envelope-alt"></i><br />Contact</a>
                                    </li>
									<li class="current-page">
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
                        <i class="icon-user page-title-icon"></i>
                        <h2>About Us /</h2>
                        <p>Below you can find more information about Yuj Inn</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Text -->
        <div class="about-us container">
            <div class="row">
                <div class="about-us-text span12">
                    <h4>About Yuj Inn</h4>
                    <p>YUJ INN HOSTEL IS YOUR HOMEY TRANSIENT HOSTEL OFFERING AFFORDABLE, ACCESSIBLE, CLEAN, SAFE ACCOMODATION IN DILIMAN AREA.</p>
					<p>The hostel is composed of 22 fully air conditioned rooms with options for fan room only which can accommodate a total of 60 persons.
						The Hostel is located near establishments like strEAT Maginhawa Food Park, Ice Creamist, Buffalo Bro’s Ribs and Wings, All About Pasta and many more. It is centrally located along Maginhawa St., UP Village where numerous exciting food establishments are found. The area is considered as the Think Tank of Philippine Food Entrepreneurs or at the least this part of the Metro. 
						It is also located to be very accessible to the following establishments like UP Diliman, UP Ayala TechnoHub, Quezon City, City Hall, Ninoy Aquino Parks & Wildlife Center, BIR, NAPOCOR, Veterans Memorial Medical Center, SM & TRINOMA MALLS and many more. Yuj Inn Hostel was marked ‘RECOMMENDED’ by the World’s Largest Travel Site : Trip Advisor. The Hostel was also rated ‘EXCELLENT’ in Reviews in terms of services and accomodations.
</p>
					
					<!--<h4>Our Mission</h4>-->
                    <p></p>
					<!--<h4>Why Choose Us</h4>-->
                    <p></p>
					
					
					
					</div>
            </div>
        </div>

        <!-- Meet Our Team -->
        <!--<div class="team container">
            <div class="team-title">
                <h3>Our Staffs</h3>
            </div>
            <div class="row">
                <div class="team-text span3">
                    <img src="assets/img/team/1.jpg" alt="" class="team">
                    <h4>Brian Chan</h4>
                    <p>Ugali katangian ng empleyado</p>
                    <div class="social-links">
                        <a class="facebook" href=""></a>
                        <a class="twitter" href=""></a>
                        
                    </div>
                </div>
                <div class="team-text span3">
                    <img src="assets/img/team/2.jpg" alt="" class="team">
                    <h4>Jason Landayan</h4>
                    <p>Ugali katangian ng empleyado</p>
                    <div class="social-links">
                        <a class="facebook" href=""></a>
                        <a class="twitter" href=""></a>
                        
                    </div>
                </div>
                <div class="team-text span3">
                    <img src="assets/img/team/3.jpg" alt="" class="team">
                    <h4>Marlow Osayan</h4>
                    <p>Ugali katangian ng empleyado</p>
                    <div class="social-links">
                        <a class="facebook" href=""></a>
                        <a class="twitter" href=""></a>
                       
                    </div>
                </div>
                <div class="team-text span3">
                    <img src="assets/img/team/4.jpg" alt="" class="team">
                    <h4>Angieleth Dela Cruz</h4>
                    <p>Ugali katangian ng empleyado</p>
                    <div class="social-links">
                        <a class="facebook" href=""></a>
                        <a class="twitter" href=""></a>
                       
                    </div>
                </div>
				
            </div>
        </div>-->

        
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

