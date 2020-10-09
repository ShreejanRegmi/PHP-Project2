<h2>Users</h2>
<a class="new" href="saveuser">Add new user</a>
<?php
	echo loadFromTemplate('../templates/user_table_template.php', ['users'=>$users]);//sets the content for the index page
	if(!isSuperAdmin()){ ?>
		<script>
			var userDelete =document.getElementsByClassName("delete-u");//gets the elements
			for (var i = 0; i < userDelete.length; i++) {
				userDelete[i].disabled=true;//sets disabled true
			}
		</script>
<?php
	}

