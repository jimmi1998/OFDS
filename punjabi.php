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
	header('Location:punjabi.php');
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
					<h4>Sabzi</h4>

								<p>Panner Toofani</p>
								<p>Kaju Butter Masala</p>
								<p>Panner Angara</p>
								<p>Palak Panner</p>
								<p>Kaju Kofta</p>

			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('PannerToofani')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('KajuButterMasala')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('PannerAngara')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('PalakPanner')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('KajuKofta')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					
					</div>
				</li>
			<div class="clearfix"></div>
		</div>
		<div class="order-top">
			<li class="item-lists"><h4>Rice</h4>
				<p>Cheese Pulav</p>
				<p>Kashmiri Pulav</p>
				<p>Kaju Pulav</p>
				
			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('CheesePulav')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('KashmiriPulav')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('KajuPulav')" type="submit" value="Pick" name="Pick"/></div>
						</div>
							<div class="clearfix"></div>
					</div>
					
					</div>
				</li>
			<div class="clearfix"></div>
		</div>
		<div class="order-top">
			<li class="item-lists"><h4>Add-ons</h4>
				<p>Butter Tawa Roti</p>
				<p>Kulcha</p>
				<p>Butter Naan</p>
			</li>
			<li class="item-lists">
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('ButterTawaRoti')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('Kulcha')" type="submit" value="Pick" name="Pick"/></span></div>
						</div>
							<div class="clearfix"></div>
					</div>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY ₹30.00</h6></span></div>
						</div>
						<div class="pr-right">
							<div class="item_add"><span class="item_price"><input onclick="fun('ButterNaan')" type="submit" value="Pick" name="Pick"/></span></div>
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