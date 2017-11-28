<?php

	include("connect.php");
    include("functions.php");

	$error = "";
	if(isset($_POST['savepass']))
	{
		$password = $_POST['password'];
		$confirmPassword = $_POST['passwordConfirm'];
		
		if(strlen($password) < 3)
		{
		   $error="Password must be greater than 8 character";
		}
		else if($password != $confirmPassword)
		{
			$error = "Password does not match";
		}
		else
		{
			$password = md5($password);
			
			$email = $_SESSION['email'];
			if(mysqli_query($con,"UPDATE users SET password = '$password' WHERE email = '$email'"))
			{
				$error = "Password changed successfully,<a href = 'profile.php'>click here </a>to go to the profile";
			}
		}
	}
	
	if(logged_in())
	{
		
		
		?>
			<?php echo $error; ?>
			<form method="POST" action="changepassword.php">

			<label>New Password</label><br/>
			<input type="password" name="password" /><br/><br/>
					
			<label>Re-enter Password</label><br/>
			<input type="password" name="passwordConfirm" /><br/><br/>
			
			<input type="submit" name="savepass" value="Submit" /><br/><br/>
		</form>	

		<?php
	}
	else
	{
		header("location:profile.php");
	}
?>    