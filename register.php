<?php include 'header.php';?>
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
						<span>First Name<label>*</label></span>
						<input type="text" name="fname" required="required"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Last Name<label>*</label></span>
						<input type="text" name="lname" required="required"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Email Address<label>*</label></span>
						 <input type="text" name="email" required="required"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Address<label>*</label></span>
						 <input type="textarea" name="address" required="required"> 
					 </div>
					 <div  class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Contact Number<label>*</label></span>
						 <input  type="text" name="tel" pattern="[789][0-9]{9}" title="You must enter 10 digits" required="required"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>City<label>*</label></span>
						 <input type="text" name="city" required="required"> 
					 </div>
					 <div class="clearfix"> </div>

					  <a class="news-letter" href="#">
						 <!--<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>-->	
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							 <div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Password<label>*</label></span>
								<input type="password" name="password" required="required">
							 </div>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Confirm Password<label>*</label><label id="er">    </label></span>
								<input type="password" name="conpassword" required="required">
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
				  	   <input type="submit" value="submit" name="submit">
					   <div class="clearfix"> </div>
				   
				</div>
				</form >

		   </div>
	     </div>
	    </div>

		</div>
		</div>

	<?php include 'footer.php';?>