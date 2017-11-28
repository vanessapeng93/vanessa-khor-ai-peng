<?php

	include("connect.php");
	include("functions.php");

	if(logged_in())
	{
		header("location:profile.php");
		exit();
	}


	$error ="";
	

	if(isset($_POST['submit']))
	{
		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];
		$email= $_POST['email'];
		$password = $_POST['password'];
		$passwordConfirm = $_POST['passwordConfirm'];
		
		
		$image = $_FILES['image']['name'];
		$tmp_image = $_FILES['image']['tmp_name'];
		$imageSize = $_FILES['image']['size'];
		
		$conditions = isset($_POST['conditions']);
		
		$date = date("F,d Y");
		
		if(strlen($firstName) < 3)
		{
			$error = "First name is too short";
		}
		else if(strlen($lastName) < 3)
		{
			$error = "Last name is too short";
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error="Please enter valid email address";
		}
		else if(email_exists($email,$con))
		{
			$error ="Someone is already registered with this email";
		}
		else if(strlen($password) < 8)
		{
			$error="Password not be greater than 8 character";
		}
		else if($password != $passwordConfirm)
		{
			$error ="Password does not match";
		}
		else if($image == "")
		{
			$error ="Please upload your image";
		}
		else if($imageSize >1048576)
		{
			$error ="Image size must be less than 1 mb ";
		}
		else if(!$conditions)
		{
			$error = "You must be agree with the terms and conditions";
		}
		else
		{
			$password = md5($password);
			
			$imageExt = explode(".",$image);
			$imageExtension = $imageExt[1];
			
			if($imageExtension == "PNG" || $imageExtension=="png" || $imageExtension
			 =="JPG" || $imageExtension == "jpg")
			{
				
			
			
			$image = rand(0,100000).rand(0,10000).rand(0,10000).time().".".$imageExtension;
			
			$insertQuery = "INSERT INTO users(firstName,lastName,email,password,image,date) VALUES ('$firstName','$lastName','$email','$password','$image','$date')";
			if(mysqli_query($con, $insertQuery))
			{
				if(move_uploaded_file($tmp_image,"images/$image"))
				{
					$error ="You are successfully registered!";
				}
				else
				{
					$error ="Image is not uploaded";
				}
			}
		
			}
			else
			{
				$error = "File must be an image";
			}
			
		}
		/*echo $firstName."<br/>".$lastName."<br/>".$email."<br/>".$password."<br/>".$passwordConfirm."<br/>".$image."<br/>".$imageSize;*/		
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
		<title>Registration Page</title>
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>
	
	<div id="error" style=" <?php if($error != ""){ ?>  display:block; <?php } ?>"><?php echo $error; ?></div>
	
	<div id="wrapper">
		
		<div id="menu">
			<a href = "index.php">Sign Up</a>
			<a href = "login.php">Logout</a>
		</div>
		<div id="formDiv">
	       		<form method="POST" action="index.php" enctype="multipart/form-data">
					
					<label>First Name</label><br/>
					<input type="text" name="fname" class="inputFields" required/><br/><br/>
					
					<label>Last Name</label><br/>
					<input type="text" name="lname" class="inputFields" required/><br/><br/>
					
					<label>Email</label><br/>
					<input type="text" name="email"  class="inputFields"required/><br/><br/>
					
					<label>Password</label><br/>
					<input type="password" class="inputFields" name="password" required/><br/><br/>
					
					<label>Re-enter Password</label><br/>
					<input type="password" name="passwordConfirm" class="inputFields" required/><br/><br/>
					
					<label>Image</label><br/>
					<input type="file" name="image" /><br/><br/>
					
					
					<input type="checkbox" name="conditions" />
					<label>I am agree with terms and conditions</label><br/><br/>
					
					<input type="submit" class="theButtons" name="submit" value="Sign Up" />
		
		
		 		 </form>
		</div>
	</div>
	
</body>
</html>