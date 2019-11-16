<?php
 session_start();
$conn = mysqli_connect("localhost:3306", "root", "","pcs_msit_db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if(isset($_POST["Pick1"]))
  {
  	$name1=$_POST["item1"];
  }
  elseif(isset($_POST["Pick2"]))
  {
  	$name1=$_POST["item2"];
  }
  elseif(isset($_POST["Pick3"]))
  	{$name1=$_POST["item3"];}


$id=$_SESSION['uid'];
$sql="INSERT INTO orderlist VALUES ('$id','','$name1','30')";
$query=mysqli_query($conn, $sql);

header('Location:chinese.php');

 ?>
