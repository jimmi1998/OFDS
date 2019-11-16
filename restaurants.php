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
						<li class="active"><a href="restaurants.php">MENU</a></li>|
						<!--<li><a href="order.php">Order</a></li>|-->
						<li><a href="contact.php">contact</a></li>
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

	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="Popular-Restaurants-content">
		<div class="Popular-Restaurants-grids">
			<div class="container">
				<div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="images/chinese.jpg" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 restaurent-title">
						<div class="logo-title">
							<h4><a href="chinese.php">Chinese</a></h4>
						</div>
						<div class="rating">
							<span>ratings</span>
							<a href="#"> <img src="images/star1.png" class="img-responsive" alt="">(004)</a>
						</div>
					</div>
					<div class="col-md-7 buy">
						<span></span>
						<a class="morebtn hvr-rectangle-in" href="chinese.php">Order</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="Popular-Restaurants-grid wow fadeInLeft" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="images/punjabi.jpg" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 restaurent-title">
						<div class="logo-title logo-title-1">
							<h4><a href="punjabi.php">Punjabi</a></h4>
						</div>
						<div class="rating">
							<span>ratings</span>
							<a href="#"> <img src="images/star2.png" class="img-responsive" alt="">(005)</a>
						</div>
					</div>
					<div class="col-md-7 buy">
						<span></span>
						<a class="morebtn hvr-rectangle-in" href="punjabi.php">Order</a>
					</div>
					<div class="clearfix"></div>
				</div>
				
				<div class="Popular-Restaurants-grid wow fadeInLeft" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="images/pizza.jpg" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 restaurent-title">
						<div class="logo-title logo-title-3">
							<h4><a href="#">Fast Food</a></h4>
						</div>
						<div class="rating">
							<span>ratings</span>
							<a href="#"> <img src="images/star2.png" class="img-responsive" alt="">(005)</a>
						</div>
					</div>
					<div class="col-md-7 buy">
						<span></span>
						<a class="morebtn hvr-rectangle-in" href="fastfood.php">Order</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="images/dessert.jpg" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 restaurent-title">
						<div class="logo-title logo-title-4">
							<h4><a href="#">Desserts</a></h4>
						</div>
						<div class="rating">
							<span>ratings</span>
							<a href="#"> <img src="images/star1.png" class="img-responsive" alt="">(004)</a>
						</div>
					</div>
					<div class="col-md-7 buy">
						<span></span>
						<a class="morebtn hvr-rectangle-in" href="desserts.php">Order</a>
					</div>
					<div class="clearfix"></div>
				</div>
				
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	
	
	 <?php include 'footer.php';?>