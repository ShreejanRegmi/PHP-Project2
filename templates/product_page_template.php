<main class="home" style="display: grid;">
	<!-- <main class="home"> -->
		
	<h2>Furniture Page</h2><!-- header for furniture page -->

	<!-- furniture name is shown -->
	<h2><?php echo $furniture['furniture_name']; ?></h2>
	<div id="page-image">
	<?php
	//query to show multiple images
	foreach ($photoQuery as $ePhoto) {//start of foreach loop
		echo '<a href="../images/furniture/'. $ePhoto['image_name'].'"><img src="../images/furniture/'.$ePhoto['image_name'].'"/></a>';//the code to show image is written here
		}
	?>
	</div>
	<div class="flex">
		<div>
			<h3>Product details</h3>
			<!-- furniture details are shown here -->
			<p><?php echo $furniture['furniture_description'] ?></p>		
		</div>
		<div style="margin-left: 10%;">
			<h3>Price</h3>
			<!-- furniture details are shown here -->
			<p><?php echo '£'.$furniture['furniture_price']; ?></p>
		</div>
		<div style="margin-left: 10%;">
			<h3>Condition</h3>
			<!-- furniture details are shown here -->
			<p><?php echo $furniture['furniture_condition']; ?></p>
		</div>
	</div>
</main><!-- main closing -->
