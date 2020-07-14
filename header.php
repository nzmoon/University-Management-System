<?php
session_start();

	include("db.php");
	$msg="";
	if(isset($_POST['submit']))
	{
		$user_id = $_POST['user_id'];
		$user_pass = $_POST['user_pass'];
		$sql = "select * from admin_user where user_id= '".$user_id."' && user_pass= '".md5($user_pass)."'";
		$dd = mysqli_query($con, $sql);
		if(mysqli_num_rows($dd)>0)
		{
			$result1=mysqli_fetch_array($dd); 						
			$_SESSION["user_id"] = $result1["user_id"];
			
			
			echo '<script>window.location="admin/student_view_pagi.php";</script>';
		}
		else {
			$msg="Username or Password didn't match or available";		
		}
	
	
	}

	
	
	
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Port City International University,Chittagong</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="" />
         <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico" >
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/open-sans.css">
		<link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="css/responsive.css">

	   <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/stylee.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />
        
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>For any information about PCIU; </strong></li>
              <li>Main office: 7-14, Nikunja Housing Society South Khulshi, Chittagong</li>
              <li>Call us <i class="icon-phone"></i> 88 031-2869877 , 88 031-2869899</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
                <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
                <li><a href="#mySignin" data-toggle="modal">Admin Login</a></li>
              </ul>
            </div>

            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
            
			 <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Admin Login </h4>
              </div>
              <div class="modal-body">
			   <?php echo $msg; ?>
                <form class="form-horizontal" action="" method="POST">
                  <div class="control-group">
                    <label class="sr-only" for="inputEmail">Username</label>
                    <div class="controls">
					<input  name="user_id" class="form-control" placeholder="Username" required="" autofocus="" >
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <div class="controls">
                      <input id="inputPassword" class="form-control" name="user_pass" placeholder="Password" required="" type="password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn" name="submit" value="Submit">Sign in</button>
                    </div>
          
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
			 </div>
        </div>


				        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.php"><img src="img/logo.jpg" alt="" class="logo" width="100%" height="100%"/></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Management <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">BOT</a></li>
                        <li><a href="#">Office</a></li>
                        <li><a href="#">Faculty</a></li>
                        <li><a href="#">Proctorial Body</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Academic<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Course/Program Management</a></li>
                        <li><a href="pricingbox.html">Academic Policies</a></li>
						<li><a href="#"> Rules and Regulations</a></li>
                        <li><a href="#">Examination Schedule </a></li>
                        <li><a href="#">Online Result</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Search <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Student Search</a></li>
                        <li><a href="#">Faculty Search</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">E-Learning<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">E-Library</a></li>
                        <li><a href="#">Video Lecture System</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="admin/index.php">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
</header>
</div>
	    <!-- end header -->