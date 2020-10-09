<?php		
	echo '<table id="category-table">';//table's designated element and data is created
	echo '<thead>';//table's designated element and data is created
	echo '<tr>';//table's designated element and data is created
	echo '<th>Name</th>';//table's designated element and data is created
	echo '<th style="width: 5%">&nbsp;</th>';//table's designated element and data is created
	echo '<th style="width: 5%">&nbsp;</th>';//table's designated element and data is created
	echo '</tr>';//table's designated element and data is created
	foreach ($categories as $category) {
		echo '<tr>';//table's designated element and data is created
		echo '<td>' . $category['category_name'] . '</td>';//table's designated element and data is created
		echo '<td><a style="float: right" href="savecategory&cid=' . $category['category_id'] . '">Edit</a></td>';//table's designated element and data is created
		echo '<td><button class="delete-c" id="'.$category['category_id'].'">Delete</button></td>';//table's designated element and data is created
		echo '</tr>';//table's designated element and data is created
	}
	echo '</thead>';//table's designated element and data is created
	echo '</table>';//table's designated element and data is created
?>