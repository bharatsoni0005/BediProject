<?php
	session_start();

	//initializing variables
	$username = "";
	$email = "";
	$errors = array();
	
	//connect to database
	$db = mysqli_connect('localhost', 'root', '', 'database');
	
	//Check Connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	//Register User
	if(isset($POST['reg_user']))
	{
		//Receive all input from the form
		$username = mysqli_real_escape_string($db, $POST['username']);
		$email = mysqli_real_escape_string($db, $POST['email']);
		$password_1 = mysqli_real_escape_string($db, $POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $POST['password_2']);
	
	
		//Form Validation
		//by adding (array_push()) corresponding error onto $errors array
		if(empty($username)) { array_push($errors, "Username is Required"); }
		if(empty($email)) { array_push($errors, "Email is Required"); }
		if(empty($password_1)) { array_push ($errors, "Password is Required"); }
		if($password_1 != $password_2)
		{
			array_push($errors, "Password do not match");
		}
		
		//Check Database, user does not already exist with same username and email
		$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		
		if($user)
		{
			if($user['username'] === $username)
			{
				array_push($errors, "Username already exists");
			}
			
			if($user['email'] === $email)
			{
				array_push($errors, "Email already exists");
			}
		}
		
		//Finally register user if there are no errors in form
		if(count($errors) == 0)
		{
			$password = md5($password_1); //encrypt the password before saving into database
			
			$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}
	}	
	
	
	
	//////////////////LOGIN USER////////////////////////////////
	
if (isset($_POST['login_user'])) 
{
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) 
	{
		array_push($errors, "Username is required");
	}
	if (empty($password)) 
	{
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) 
	{
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		
		if (mysqli_num_rows($results) == 1) 
		{
		  $_SESSION['username'] = $username;
		  $_SESSION['success'] = "You are now logged in";
		  header('location: index.php');
		}
			
		else 
		{
			array_push($errors, "Wrong username/password combination");
		}
	}
}
?>