<?php
 
$conn = mysqli_connect("localhost", "root", "","pcs_msit_db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
		$c=0;
		$sql="SELECT * FROM orderlist";
		$query=mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query,MYSQLI_NUM))
		{
			++$c;

		}

 session_start();?>
<!DOCTYPE php>

<php>
<head>
	
<title>OFDS | Jimit Raval |</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script src="js/simpleCart.min.js"> </script>	
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="queries">
					<p>Questions? Call us Toll-free!<span>9427490278 | 8980483853 </span><label>(11AM to 11PM)</label></p>
				</div>
				




				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <span id="pid" > ₹<?php echo $c*30;?> </span> (
									<span id="simpleCart_quantity" ><?php echo $c;?></span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li><a href="index.php">Home</a></li>|
						<li><a href="restaurants.php">MENU</a></li>|
						<!--<li><a href="order.php">Order</a></li>|-->
						<li class="active"><a href="contact.php">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
								

				<?php if(isset($_SESSION['uid']))
							{ ?>
								<li><a href="profile.php">Hii, <?php echo $_SESSION['uname'];?></a></li>|
						
								<li><a href="./logout.php">logout</a></li>
							
								<?php					
   							 }
   							else{
   							 ?>
   							<li><a href="login.php">Login</a>  </li>|
					 	<li><a href="register.php">Register</a> </li>
							<?php } ?>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

<?php 

			$query=mysqli_query($conn, "SELECT * FROM orderlist"); 
?>
	<!-- header-section-ends -->
	<div class="contact-section-page">
		<div class="contact-head">
		    <div class="container">
				<h3>Contact</h3>
				<p>Home/Contact</p>
			</div>
		</div>
		<div class="contact_top">
			 		<div class="container">
			 			<div class="col-md-6 contact_left wow fadeInRight" data-wow-delay="0.4s">
			 				<h4>Contact Us</h4>
			 				
							  
					        </div>
					        <div class="col-md-6 company-right wow fadeInLeft" data-wow-delay="0.4s">
					        	
		</div>
      
	  <div class="company-right">
					        	<div class="company_ad">
							     		
							     		
			      						<address>
											 <p style="font-size: 25px">email:<a href="mailto:12jraval@gmail.com">12jraval@gmail.com</a></p><br/>
											 <p style="font-size: 25px">JIMIT RAVAL:  +91 89427490278</p><br/>
											 <p style="font-size: 25px">email:<a href="mailto:jimitraval126i998@gmail.com">jimitraval126i998@gmail.com</a></p><br/>
									   		<p style="font-size: 25px">JIMIT RAVAL:  +91 8980483853</p>
									   		<?php 
									   		$i=0;
									   		 while ($row = mysqli_fetch_array($query))
		{
			echo $row['name'];
			?><br/><?php

		}
								
						?>			 	 	
							   			</address>
							   		</div>
									</div>	
									<div class="follow-us">
										<h3>follow us on</h3>
										<a href="https://www.facebook.com/jimmiraval1998"><i class="facebook"></i></a>
										<a href="https://twitter.com/jimmiraval"><i class="twitter"></i></a>
										<!--<a href="https://www.instagram.com/jimit_raval1206/"><i class="instagram"></i></a>-->
									</div>
			
							
							 </div>
						</div>
					</div>

	</div>
	<!-- footer-section-starts -->
	
<?php include 'footer.php';?>