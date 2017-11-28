<?php
     //session_start();
	include("connect.php");
    include("functions.php");
	
	if(logged_in())
	{
		header("location:profile.php");
		exit();
	}

	$error = "";
	

	if(isset($_POST['submit']))
	{
		
		$email= $_POST['email'];
		$password = $_POST['password'];
		$checkBox = isset($_POST['keep']);
		
		if(email_exists($email,$con))
		{
			
			
			$sql = "SELECT `password`,`role` FROM `users` WHERE `email` = '$email'";
			$query = mysqli_query($con,$sql);
			$row = mysqli_fetch_assoc($query);
			//while($row = mysqli_fetch_assoc($query))
			
			
			$role = $row['role'];
			
			echo $role;
			if(md5($password) != $row['password'])
			{
				$error ="Password is incorrect";
			}
			else
			{
				$_SESSION['email'] = $email;
			
				
				$_SESSION['role']= $role;
				
				if($checkBox == "on")
				{
					setcookie("email",$email,time()+3600);
				}
				
				
				header("location:profile.php");
			}
			
		}
		else
		{
			$error ="Email does not exists";
		}
		
		
		
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
		<title>Login Page</title>
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>
	
	<div id="error" style=" <?php if($error != ""){ ?>  display:block; <?php } ?>">>
	<?php
		echo $error;
	?>
	</div>
	<div id="wrapper">
		<div id="menu">
			<a href = "index.php">Sign Up</a>
			<a href = "login.php">Logout</a>
		</div>
		<div id="formDiv">
	       		<form method="POST" action="login.php" >
					
					
					<label>Email</label><br/>
					<input type="text" class="inputFields" name="email" required/><br/><br/>
				
					
					<label>Password</label><br/>
					<input type="password" name="password"  class="inputFields"required/><br/><br/>
					
					<input type="checkbox" name="keep" />
					<label>Keep me logged in</label><br/><br/>
					
					
					<input type="submit" class="theButtons"  name="submit" value="Log In " />
		
		            
		 		 </form>
		</div>
	</div>
	
</body>
</html>