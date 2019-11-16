<?php
$conn = mysqli_connect("localhost:3306", "root", "","pcs_msit_db");
 
$itemid=$_POST['name'];

		$sql = "DELETE FROM orderlist WHERE itemid=$itemid";
                if(mysqli_query($conn, $sql)){
        
                
                header('Location:checkout.php');
                } 
                else{
                echo "ERROR: Could not able to execute $sql. ". mysqli_error($link);
                }
	
?>