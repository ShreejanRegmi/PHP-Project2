<?php
	$userTable=new Table('users');// new table object created
	$users=$userTable->findAllInDatabase();//find all the data in the table
?>