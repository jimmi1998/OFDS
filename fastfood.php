<?php include 'header.php';?>
<script>
	function fun(item1) 
	{
		
		document.getElementById('hidden1').value=item1;
		document.getElementById("form_id").submit();
		/*<?php
		/*$id=$_SESSION['uid'];
		$item1= "<script>document.getElementByID('item1').value</script>";
		$sql="INSERT INTO orderlist VALUES ('$id','','$item1','30')";
		$query=mysqli_query($conn, $sql);
		*/?>*/
		
	}
</script>

<?php
	
	if(isset($_POST['hid']))
	{
	$name=$_POST['hid'];
	$id=$_SESSION['uid'];
		$sql="INSERT INTO orderlist VALUES ('$id','','$name','30')";
		$query=mysqli_query($conn, $sql);
	header('Location:fastfood.php');
	}
?>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="orders">
	<div class="container">
		<div class="order-top">
			<li class="item-lists">
				<form method="POST" id="form_id">
					<input type="hidden" id="hidden1"  name="hid" onchange="<?php echo $_SERVER['PHP_SELF']; ?>"/>
					<input style="display: none;" type="submit"/>
					</form>
					<h4>Pizzas</h4>

								<p>Margherita Pizza</p>
								<p>Mexican Delight</p>
								<p>Cheese Burst Pizza</p>
								<p>American Heat</p>

			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('MargheritaPizza')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('MexicanDelight')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('CheeseBurstPizza')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('AmericanHeat')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					
					
					</div>
				</li>
			<div class="clearfix"></div>
		</div>
		<div class="order-top">
			<li class="item-lists"><h4>Burgers</h4>
				<p>Herb Chilly Burger</p>
				<p>Masala Twist Burger</p>
				<p>Panner Burger</p>
				
			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('HerbChillyBurger')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('MasalaTwistBurger')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('PannerBurger')" type="submit" value="Pick" name="Pick"/></div>
						</div>
							<div class="clearfix"></div>
					</div>
					
					</div>
				</li>
			<div class="clearfix"></div>
		</div>
		<div class="order-top">
			<li class="item-lists"><h4>Hot Dogs</h4>
				<p>Veg Cheese Hot Dog</p>
				<p>Colesaw Hot Dog</p>
				<p>Grill Cheese Masala Hot Dog</p>
			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('VegCheeseHotDog')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('ColesawHotDog')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('GrillCheeseMasalaHotDog')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					
					</div>
				</li>
			<div class="clearfix"></div>
		</div>
		
		
		
		
		
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
	
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	
	<!-- footer-section-ends -->
	 <?php include 'footer.php';?>