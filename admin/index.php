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
			
			
			echo '<script>window.location="student_view_pagi.php";</script>';
		}
		else {
			$msg="Username or Password didn't match or available";		
		}
	
	
	}

	
	
	
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Port City International University,Chittagong</title>
	<!--  Custom External CSS -->
	
	<link rel="stylesheet" href="css/signin.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Start  Calender Integration on Bootstrap -->
	<link rel="stylesheet" href="datepicker/datepicker.css">
	
	<!-- End  Calender Integration on Bootstrap -->
	
	<!--  Custom External CSS -->

	<!-- Start  Scroll UP Integration on Bootstrap -->
	<link rel="stylesheet" href="scrollUp/scrollUp.css">
	<!-- End  Scroll Up Integration on Bootstrap -->
	

	

    <!-- Bootstrap -->
    <link href="css/m_b_start.bootstrap.min.css" rel="stylesheet">
		 <!--<link rel="shortcut icon" href="favicon.ico" >-->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">	
        <link rel="stylesheet" href="../css/style.css">
         <link rel="stylesheet" href="../css/responsive.css">
    
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
	<section id="header">
		<div class="container-fluid">
		<div class="container header">
			<div class="row">
				<div class="logo" class="col-lg-12 col-md-12 col-xm-1">
					<img src="../image/Logo.jpg" class="img-responsive center-block img-rounded"  width="100%" height="100%" />
				</div>
			</div>
			<div class="row">
		<div class="container-fluid">
				<nav class="navbar mainmenu ">
			
				<div class="container">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#maintaslim">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
				  </div>
				<div class="collapse navbar-collapse" id="maintaslim">
					<ul class="nav navbar-nav">
					  <li class="active"><a href="index.php">Home</a></li>
					  
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">About us  <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#">About PICU</a></li>
						  <li><a href="#">Mission & Vision</a></li>					
						  <li><a href="#">Rules & regulations </a></li>

						 
						</ul>
					  </li>
					  
					  
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Management <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#">BOT</a></li>
						  <li><a href="#">Office</a></li>
						  <li><a href="#">Faculty</a></li>
						  <li><a href="#">Proctorial Body</a></li>

						</ul>
					  </li>
					  

					  					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#">Admission Requirements</a></li>
						  <li><a href="#">Admission Schedule</a></li>
						  <li><a href="#">Admission Test</a></li>
						  <li><a href="#">Direct Admission</a></li>
						  <li><a href="#">Documents Required For Admission</a></li>
						  <li><a href="#">Payment Policy</a></li>
						  <li><a href="#">Scholarship & Financial Assistance</a></li>
						  <li><a href="#">Tuition And Other Fees </a></li>
						  <li><a href="#">Frequently Asked Question (FAQ)</a></li>
						 			 
						</ul>
					  </li>
					  					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Academic <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#">Course/Program Management</a></li>
						  <li><a href="#">Academic Policies</a></li>
						  <li><a href="#">Evaluation & Grading System</a></li>
						  <li><a href="#">Examination Policy</a></li>
						  <li><a href="#">Online Result</a></li>
						  <li><a href="#">Admit Card Generation</a></li>						  
						  
						</ul>
					  </li>	
						
					  
					  
					
					  
					  <li >
						<a href="#" > Student Search</b></a>
					  </li>
					  
					  					  					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">E-Learning <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#">E-Library</a></li>
						  <li><a href="#">Video Lecture System</a></li>
						  
						</ul>
					  </li>	
					  
					  <li><a href="admin/index.php">Admin Login</a></li>
					  <li><a href="#">Contact Us</a></li>
					  
					</ul>
				  </div><!-- /.navbar-collapse -->
				  </div>
				 
				</nav>			
			</div>
			 </div>


</div>

			<div class="row">
<div class="col-lg-12">
<?php echo $msg; ?>
      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading"> Admin Login</h2>
        <label for="inputEmail" class="sr-only">User ID </label>
        <input  name="user_id" class="form-control" placeholder="User ID" required="" autofocus="" >
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="inputPassword" class="form-control" name="user_pass" placeholder="Password" required="" type="password">
       
        <button class="btn btn-lg btn-primary btn-block"  type="submit" name="submit" value="Submit">Sign in</button>
      </form>
</div>

</div>

		</div>
	</section>
			
			
			







			
			<!-- End Custom Cursol -->
		
	<?php include"../footer.php" ?>