<?php

require('connect.php');

if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$card = $_POST['card'];
		$cvc= $_POST['cvc'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$amount = $_POST['amount'];
		
		
		
		if(strlen($name) < 3)
		{
			$error = "Your name is too short";
		}
		
		
		
		else
		{
			
			
			
			$insertQuery = "INSERT INTO checkout(name,card,cvc,month,year,amount) VALUES ('$name','$card','$cvc','$month','$year','$amount')";
			if(mysqli_query($con, $insertQuery))
			{
				$error ="Records inserted successfully!";
				header("refresh:0; url=index.php");
				echo'<script language="javascript">';
				echo'alert("successful")';
				echo'</script>';
			}
		
			
			else
			{
				$error = "Could not able to execute ";
				header("refresh:0; url=checkout.php");
				echo'<script language="javascript">';
				echo'alert("successful")';
				echo'</script>';
			}
			
		}
		/*echo $firstName."<br/>".$lastName."<br/>".$email."<br/>".$password."<br/>".$passwordConfirm."<br/>".$image."<br/>".$imageSize;*/		
	}
?>