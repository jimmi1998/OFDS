<?php include 'header.php';?>

	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<!-- checkout -->
	<?php
		$c=0;
		$sql="SELECT * FROM orderlist";
		$query=mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query,MYSQLI_NUM))
		{
			++$c;

		}
			?>

 <h1 align="center">My Shopping Bag <?php echo $c?></h1>
	<?php 
	$a=0;
		$sql="SELECT * FROM orderlist";
		$query=mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($query,MYSQLI_NUM))
		{
			++$a;
	?>
<div class="cart-items">
	<div class="container">
		<form method="POST" action="checkout12.php">
			
				
			 <div class="cart-header">
				 
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">  </a><span></span></h3>
						<ul class="qty">
							<li><p style="font-size: 25px"><?php echo $row[2]?> </p></li></br>
							<li><p style="font-size: 25px" ><?php echo $row[3]?></p></li>
							<input type="hidden" name="name" value=<?php echo $row[1]?>>
							<input class="close1" type="submit" name="submit" value=" ">
						</ul>
							 <div class="delivery">
							 
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			</form>
				
		 </div>
		 </div>

		<?php 
			}
			?>
			<div align="center">
				<form action="mail.php" method="POST">
					<input type="hidden" name="price" value=<?php echo $c*30?>>
			 <input style=" background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;" type="submit" name="checkout" value="checkout"/>
			</form>
</div>
			
	<?php include 'footer.php';?>