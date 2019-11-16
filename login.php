<?php include 'header.php';?>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
	<div class="container">
		<div class="login-page">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Login
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our site, you will be able to move through the checkout process faster, view your order.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form action="./login123.php" method="post">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text" name="email"> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" name="password"> 
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a>
				  <input type="submit" value="submit" name="submit">
			    </form>
			   <!--<form action="<?php $_PHP_SELF ?>" method="POST">  
Username: <input type="email" name="email"><br/>  
Password: <input type="password" name="password"><br />   
<input type="submit" value="Login" name="submit" />  
</form>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['email']) && !empty($_POST['password'])) {  
    $user=$_POST['email'];  
    $pass=$_POST['password'];  
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('psc_msit_db') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM admin WHERE username='".$user."' AND password='".$password."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location:index.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?> -->
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>

		</div>
		</div>

					
	<?php include 'footer.php';?>