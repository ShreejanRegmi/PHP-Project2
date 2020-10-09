<?php
	if(isset($_GET['uid'])){
		echo '<h2>Edit User</h2>';
	}
	else
		echo '<h2>Add User</h2>';
?>
<form action="saveuser" method="POST">
	<!-- respective input field for saving user -->
	<input type="hidden" name="id" value="<?php if(isset($user['user_id'])) echo $user['user_id']; ?>">
	<label>First Name</label><!-- label element -->
	<!-- respective input field for saving user -->
	<input type="text" name="firstname" value="<?php if(isset($user['user_firstname'])) echo $user['user_firstname']; ?>" required/>
	<label>Last Name</label><!-- label element -->
	<!-- respective input field for saving user -->
	<input type="text" name="lastname" value="<?php if(isset($user['user_lastname'])) echo $user['user_lastname']; ?>" required/>
	<label>Email</label><!-- label element -->
	<!-- respective input field for saving user -->
	<input type="email" name="email" value="<?php if(isset($user['user_email'])) echo $user['user_email']; ?>" required/>
	<label>Username</label><!-- label element -->
	<!-- respective input field for saving user -->
	<input type="text" name="username" value="<?php if(isset($user['user_username'])) echo $user['user_username']; ?>" required/>
	<label>Password</label><!-- label element -->
	<!-- respective input field for saving user -->
	<input type="password" name="password" required/>
	<label>Type</label><!-- label element -->
	<!-- select drop down for saving user -->
	<select name="type">
		<option value="user">User</option><!-- option for select -->
		<option value="admin">Admin</option><!-- option for select -->
	</select>
	<!-- submit input button for saving user -->
	<input type="submit" name="submit" value="Save User"/>
</form>