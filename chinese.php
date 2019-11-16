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
	header('Location:chinese.php');
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

				<h4>Noodles</h4>

								<p>Hakka Noodles</p>
								<p>Manchurian Noodles</p>
								<p>Schezwan Noodles</p>

			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('HakkaNoodles')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('ManchurianNoodles')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('SchezwanRice')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					
					</div>
				</li>
			<div class="clearfix"></div>
		</div>
		<div class="order-top">
			<li class="item-lists"><h4>Rice</h4>
				<p>Fried Rice</p>
				<p>Manchurian Rice</p>
				<p>Combination Rice</p>
				<p>Schezwan Rice</p>
			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('FriedRice')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('ManchurianRice')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('CombinationRice')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('SchezwanRice')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					
					</div>
				</li>
			<div class="clearfix"></div>
		</div>
		<div class="order-top">
			<li class="item-lists"><h4>Soup</h4>
				<p>Manchaw Soup</p>
				<p>Manchurain Soup</p>
				<p>Hot & Sour Soup</p>
			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('ManchawSoup')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('ManchurianSoup')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('Hot&SourSoup')" type="submit" value="Pick" name="Pick"/></span></div>
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