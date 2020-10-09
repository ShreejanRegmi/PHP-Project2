<?php
	$categoryTable=new Table('category');//creating object of Table: category
	$categories=$categoryTable->findAllInDatabase();//returning all data from table categories
?>