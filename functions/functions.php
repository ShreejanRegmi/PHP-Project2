<?php
	function loadFromTemplate($nameOfFile, $templateVariables){
		extract($templateVariables);//extract all the variables in array
		ob_start();//start of content buffer 
		require $nameOfFile;//importing file
		$pageContent = ob_get_clean();//stopping content buffer and storing in variable
		return $pageContent;//returning the results
	}

	function login(){//function to check for login
		if(isset($_POST['login'])){//if login button pressed
			$userTable= new Table('users');//new table created
			$user= $userTable->findInDatabase('user_username', $_POST['username']);//querying users table
			if($user->rowCount()>0){//if data available
				$data=$user->fetch();//fetch data
				if (password_verify($_POST['password'], $data['user_password'])){//if password matches
					$_SESSION['session_id']=$data['user_id'];//session variable is set
					$_SESSION['type']=$data['user_type'];//session variable is set
					$_SESSION['fullname']=$data['user_firstname']." ".$data['user_lastname'];//session variable is set
					header("Location:index.php");//redirect to another page
				}
				else{
					echo '<script> alert("Password is incorrect"); </script>';//js alert is shown
				}
			}
			else{
				echo '<script> alert("Username is incorrect"); </script>';//js alert for username incorrect
			}
		}
	}

	function showLogLink(){
		if(isset($_SESSION['session_id'])){
			echo '<li><a href="logout">Logout</a></li>';//link for logout is shown
		}
		else
			echo '<li><a href="login">Login</a></li>';//link for login is shown
		if(isAdmin()){
			echo '<li><a href="users">Users</a></li>';//link for users is shown
			echo '<li><a href="saveupdate">Add update</a></li>';//link for adding update is shown
		}
	}

	function shouldBeAdmin(){
		if(!isAdmin())
			header('Location:index.php?pagemsg=You need to have admin privileges');//if not admin, entry is not permitted
	}	

	//function to check for admin privilege
	function isAdmin(){
	if(isset($_SESSION['type']) && $_SESSION['type']!='user')
		return true;
	else
		return false;
	}

	//function to check for super admin privilege
	function isSuperAdmin(){
		if(isset($_SESSION['type']) && $_SESSION['type']=='superadmin'){
			return true;
		}
		else
			return false;
	}

	//function to check for user privilege
	function isUser(){
		if(isset($_SESSION['type']) && $_SESSION['type']=='user')
			return true;
		else
			return false;
	}

	//function to check if user is not logged in
	function isNotLoggedIn(){
		if(!isset($_SESSION['session_id']))
			return true;
		else
			return false;
	}

?>