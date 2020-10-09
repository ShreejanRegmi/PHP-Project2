<main class="admin">
	<!-- contents of category_sidebar.php -->
	<?php echo loadFromTemplate('../templates/category_sidebar_template.php', ['categories'=>$categories]); ?>
	
	<section class="right">
	<div style="margin-left: 29%;">
		<!-- form addded for second hand/new -->
		<form action="furnitures<?php if(isset($_GET['c_id'])) echo '&c_id='.$_GET['c_id']  ?>" method="POST">
			<input type="submit" name="new" value="Show New"> <!-- input button for form --> 
			<input type="submit" name="second_hand" value="Show Second Hand">	<!-- input button for form -->
		</form>
	</div>
		<h1>Furniture</h1>
		<!-- furniture ul element -->
	<ul class="furniture">
	<?php echo loadFromTemplate('../templates/furniture_list_template.php', ['furnitureQuery'=>$furnitureQuery]); ?>
	</ul>
	</section>
</main>