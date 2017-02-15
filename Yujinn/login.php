
<!DOCTYPE html>
<?php
	
	include('connect.php');
	include('loginid.php');
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
	h6 {
		color:black;
	}
		h4 {
		color:black;
	}
		h5 {
		color:black;
	}
		h3 {
		color:black;
	}
		div.contai {
		position:fixed;
			top:0px;
		bottom:520px;
		left:90px;
		z-index:1;
		
	}
	a.admin {
		color:blue;
	}
</style>
    <body>
  <?php
			//include('header.php');
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
									<li>
                                        <a href="about.php"><i class="icon-user"></i><br />About</a>
                                    </li>
									<li class="current-page">
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
                        <i class="icon-signin page-title-icon"></i>
                        <h2>Log-in / </h2> 
						<p>Log-in here to Modify, View and Cancel your Reservation</p>
						 </div>
                </div>
            </div>
        </div>
					
					<br>
					 <div class="content">
					 
      <div class="container">
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-headers"><i class="icon-signin"></i> Login to Yuj Inn Hostel</h4>
            <div class="widget-b">
              <div class="center-alignment">
                <form class="form-horizontal form-signin-signup" method="post" action="loginid.php">
                  <input type="text" name="emailaddress" placeholder="E-mail Address">
                  <input type="password" name="rcode" placeholder="Reservation Code">
                  <div class="remember-me">
                    <div class="clearfix"></div>
                  </div>
                  <input type="submit" name="submit" value="Login" class="btn btn-primary btn-medium"><br>
				  <a href="../Admin/admin.php" class="admin">Log-in as Admin</a>
                </form>
               
				 <p class="error">
  <?php
  if (isset($_GET['incomplete'])){
	  echo "Please Complete the above";
  }else if(isset($_GET['invalid'])){
	  echo "Email or Reservation # is invalid";
  }
  ?>
  </p>
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
	
      <script>
	  <!--Validation: Accepts numeric only-->
        function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
          }
          return true;
        }
	  <!--Accept alphabets and space only(Validation)-->
    
            $(document).ready(function(){
			//lagay mo ung id ng textbox dun sa may #
            $("#Fname, #Lname").keypress(function(event){
                var inputValue = event.which;
                // allow letters and whitespaces only.
                if((inputValue > 47 && inputValue < 58) && (inputValue != 32)){
                    event.preventDefault();
                }
            });
        });

      </script>
	  
	 	
		
		
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

