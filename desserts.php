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
	header('Location:desserts.php');
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

				<h4>Ice Creams</h4>

								<p>Sundaes</p>
								<p>Hot Fudge</p>
								<p>Black Forest Pastery Ice Cream</p>
								<p>Royal Scoops</p>

			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('Sundaes')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('HotFudge')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('BlackForestPasteryIceCream')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('RoyalScoops')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					</div>
				</li>
			<div class="clearfix"></div>
		</div>
		<div class="order-top">
			<li class="item-lists"><h4>Thick Shakes</h4>
				<p>Choco Blast</p>
				<p>Royal Vanilla</p>
				<p>Litchi</p>
				<p>Choco Oreo</p>
			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('ChocoBlast')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('RoyalVanilla')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('Litchi')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('ChocoOreo')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					
					</div>
				</li>
			<div class="clearfix"></div>
		</div>
		<div class="order-top">
			<li class="item-lists"><h4>Special</h4>
				<p>Classic Vanilla Cheesecake</p>
				<p>Sizzling Brownie With Ice Cream</p>
				<p>Sitafal Rabdi</p>
			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('ClassicVanillaCheesecake')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('SizzlingBrownieWithIceCream')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('SitafalRabdi')" type="submit" value="Pick" name="Pick"/></span></div>
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