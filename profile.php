<?php include 'header.php';?>


<?php $uid=$_SESSION['uid'];

			$query=mysqli_query($conn, "SELECT * FROM Userinfo where uid='$uid'"); 
			if(!$row = mysqli_fetch_array($query))
			



?>
<style>
.labsty {font-size: 30px;

}
</style>

	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form action="signup123.php" method="post"> 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>First Name</span>
						<label class="labsty"><?php echo $row[1]; ?></label>
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Last Name<label></label></span>
						<label class="labsty"><?php echo $row[2]; ?></label> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Email Address<label></label></span>
						 <label class="labsty"><?php echo $row[3]; ?></label> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Address<label>*</label></span>
						 <label class="labsty"><?php echo $row[4]; ?></label>
					 </div>
					 <div  class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Contact Number<label>*</label></span>
						 <label class="labsty"><?php echo $row[5]; ?></label>
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>City<label>*</label></span>
						 <label class="labsty"><?php echo $row[6]; ?></label> 
					 </div>
					 <div class="clearfix"> </div>

					  <a class="news-letter" href="#">
						 <!--<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>-->	
					   </a>
					 </div>
				     
				     
							

				<script >
					<?php 
					if($_SESSION['error']){
						?>
										

document.getElementById("er").innerHTML ="password and confirm password are not match.";//titary[c]
					
						<?php


					}
					?>
						



				</script>
					 </div>

				<div class="clearfix"> </div>
				<div class="register-but">
				  	   
					   <div class="clearfix"> </div>
				   
				</div>
				</form >

		   </div>
	     </div>
	    </div>
<div class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Special Offers</h4>
				</div>
				<div class="special-offers-section-grids">
				 <div class="m_3"><span class="middle-dotted-line"> </span> </div>
				   <div class="container">
					  <ul id="flexiselDemo3">
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Olister Combo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Crab Combo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
					    </li>
					 </ul>
				 <script type="text/javascript">
					$(window).load(function() {
						
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				    </script>
				    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				</div>
			</div>
		</div>
		</div>

	<?php include 'footer.php';?>



















<?php include 'footer.php';?>