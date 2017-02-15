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
		<link rel="stylesheet" href="assets/css/modal.css">

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
                                    <li class="current-page">
                                        <a href="contact.php"><i class="icon-envelope-alt"></i><br />Contact</a>
                                    </li>
									<li >
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
                        <i class="icon-envelope-alt page-title-icon"></i>
                        <h2>Contact Us /</h2>
                        <p>Here is how you can contact us</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us container">
            <div class="row">
                <div class="contact-form span7">
                     <form method="post" action="sendmail.php">
                        <label for="name" class="nameLabel">Name</label>
                          <input id="name" type="text" name="name" placeholder="Enter your name...">
                        <label for="email" class="emailLabel">Email</label>
                          <input id="email" type="text" name="email" placeholder="Enter your email...">
                        <label for="subject">Subject</label>
                          <input id="subject" type="text" name="subject" placeholder="Your subject...">
                        <label for="message" class="messageLabel">Message</label>
                          <textarea id="message" name="message" placeholder="Your message..."></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
                <div class="contact-address span5">
                    <h4>You Are Here </h4>
					
                    <div class="yujinn">
					<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="526" height="343" src="https://maps.google.com/maps?hl=en&q=yujinn philippines&ie=UTF8&t=roadmap&z=20&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://buyproxies.io/">buyproxies.io</a></small></div></iframe>
					</div>
					<h4>Address</h4>
                    <p>3rd Floor #65 Maginhawa St., UP Village, Diliman, 1101 Quezon City, Philippines</p>
                    <p>Phone: 0917 444 4795 , (02) 794 5526</p>
					<p><a href="#openStreetView" class="streetview">Click Here for Street View</a></p>
                </div>
            </div>
        </div>

		
		<div id="openStreetView" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<iframe width="600" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://my.ctrlq.org/maps/#street|1|73.37793776410287|15.97088127779495|14.6479555|121.05717570000002"></iframe>
                    
		
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

