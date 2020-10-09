<h2>Categories</h2>
<a class="new" href="savecategory">Add new category</a>
<?php
	echo loadFromTemplate('../templates/category_table_template.php', ['categories'=>$categories]);
?>