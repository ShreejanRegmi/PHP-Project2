<?php
	require_once '../pages/each_product_data.php';//importing page each product data
	$title="Fran's Furniture - Furniture";//title is set
	$content=loadFromTemplate('../templates/product_page_template.php', ['furniture'=>$furniture,'photoQuery'=>$photoQuery]);//setting content for main page
?>