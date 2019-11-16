
<?php include 'header.php';


 
$sql="DELETE FROM orderlist";
$query=mysqli_query($conn, $sql);


 session_destroy();

?>
<script>
	document.getElementById('simpleCart_quantity')=0;
		document.getElementById('pid')=0;
</script>
<?php
 header('Location:index.php');
  ?>
   <?php include 'footer.php';?>
