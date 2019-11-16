<?php
 
$conn = mysqli_connect("localhost:3306", "root", "","pcs_msit_db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$ID = $_POST["email"];
$Password = $_POST["password"]; 
 session_start(); 
   function SignIn() { 


   	$conn=$GLOBALS['conn'];
    
     if(!empty($_POST['email']))      //checking the 'user' name which is from Sign-In.php, is it empty or have some text 
     	{
     		$query=mysqli_query($conn, "SELECT * FROM Userinfo where email = '$_POST[email]' AND password = '$_POST[password]'"); 
     	 $row = mysqli_fetch_array($query,MYSQLI_NUM);
     	 
     	 if(!empty($row[7]) AND !empty($row[3])) 
     	 	{ $_SESSION['password'] = $row[7];
          $_SESSION['uid'] = $row[0];
          $_SESSION['uname'] = $row[1];


         header('Location:index.php');
     	 	 }
     	 else 
     	 {
         header('Location:register.php');
     	 }
     	}
   	}
    if(isset($_POST['submit'])) { 
    
    SignIn();

 	}
 	else{
 		echo "not call";
 	}
 	

  ?>
