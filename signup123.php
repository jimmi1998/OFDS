<?php
 
$conn = mysqli_connect("localhost:3306", "root", "","pcs_msit_db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 session_start(); 
//function start

 function SignIn() { 
  $conn=$GLOBALS['conn'];
$ID = $_POST["email"];
$Password = $_POST["password"]; 
$email = $_POST["email"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$Adress = $_POST["address"]; 
$Phonenumber = $_POST["tel"];
$city = $_POST["city"]; 
$Confirmpass = $_POST["conpassword"]; 


if($Confirmpass==$Password){
  unset($_SESSION['error']);
              
              $sql="INSERT INTO Userinfo VALUES ('', '$fname','$lname', '$email','$Adress', '$Phonenumber',  '$city', '$Password')";
                //$query=mysqli_query($conn, $sql);
                if (!mysqli_query($conn, $sql))
              {
              echo("Error description: " . mysqli_error($conn));
              } 
              else
              {
                header('Location:login.php');
              }
              


}
else
{$_SESSION['error']=1;
  header('Location:register.php');
}















}



//function end
if(isset($_POST['submit'])) { 
    
    SignIn();

  }
  else{
    echo "not call";
  }
  






  ?>
