<?php
	echo '<table id="user-table">';//table's designated element and data is created
	echo '<thead>';//table's designated element and data is created
	echo '<tr>';//table's designated element and data is created
	echo '<th>Name</th>';//table's designated element and data is created
	echo '<th style="width: 10%">Email</th>';//table's designated element and data is created
	echo '<th style="width: 10%">Username</th>';//table's designated element and data is created
	echo '<th style="width: 10%">Role</th>';//table's designated element and data is created
	echo '<th style="width: 5%">&nbsp;</th>';//table's designated element and data is created
	echo '<th style="width: 5%">&nbsp;</th>';//table's designated element and data is created
	echo '</tr>';//table's designated element and data is created
	foreach ($users as $user) {
		echo '<tr>';//table's designated element and data is created
		echo '<td>' .$user['user_firstname'].' '.$user['user_lastname'].'</td>';//table's designated element and data is created
		echo '<td>' . $user['user_email'] . '</td>';//table's designated element and data is created
		echo '<td>' . $user['user_username'] . '</td>';//table's designated element and data is created
		echo '<td>' . $user['user_type'] . '</td>';//table's designated element and data is created
		echo '<td><a style="float: right" href="saveuser&uid=' . $user['user_id'] . '">Edit</a></td>';//table's designated element and data is created
		echo '<td><button class="delete-u" id="'.$user['user_id'].'">Delete</button></td>';//table's designated element and data is created
		echo '</tr>';//table's designated element and data is created
	}
	echo '</thead>';//table's designated element and data is created
	echo '</table>';//table's designated element and data is created