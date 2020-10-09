<?php
	if(isset($_GET['cid']))
		echo '<h2>Edit Category</h2>';
	else
		echo '<h2>Add Category</h2>';
?>
<form action="savecategory" method="POST">
	<!-- input hidden for post -->
	<input type="hidden" name="id" value="<?php if(isset($category['category_id'])) echo $category['category_id']; ?>">
	<label>Name</label>
	<!-- name input field  -->
	<input type="text" name="name" value="<?php if(isset($category['category_name'])) echo $category['category_name']; ?>" required/>
	<!-- submit button  -->
	<input type="submit" name="submit" value="Save Category" />
</form>