<?php
foreach ($furnitureQuery as $furniture) {
	echo '<li>';//list's designated element or data is created
	$photo = new Table('furniture_images');//list's designated element or data is created
	$photoQuery=$photo->findInDatabase('furniture_id',$furniture['furniture_id']);//list's designated element or data is created
	foreach ($photoQuery as $photo) {
		echo '<a href="../images/furniture/'. $photo['image_name'].'"><img src="../images/furniture/'.$photo['image_name'].'"/></a>';//list's designated element or data is created
	}	
		echo '<div class="details">';//list's designated element or data is created
		echo '<h2><a style="text-decoration:none;" href="productpage&id='.$furniture['furniture_id'].'">' . $furniture['furniture_name'] . '</a></h2>';//list's designated element or data is created
		echo '<h3>' . $furniture['category_name'] . '</h3>';//list's designated element or data is created
		echo '<h4>£' . $furniture['furniture_price'] . '</h4>';//list's designated element or data is created
		echo ($furniture['furniture_condition']=='new')? '<h4 style="color:green;">' . $furniture['furniture_condition'] . '</h4>':'<h4 style="color:red;">' . $furniture['furniture_condition'] . '</h4>';//list's designated element or data is created
		echo '<p>' . $furniture['furniture_description'] . '</p>';//list's designated element or data is created
		echo '</div>';//list's designated element or data is created
		echo '</li>';//list's designated element or data is created
}
?>