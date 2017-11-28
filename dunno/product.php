<?php

	include("connect.php");
	
	

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$price = $_POST['price'];
		
		$image = $_FILES['image']['name'];
		$tmp_image = $_FILES['image']['tmp_name'];
		$imageSize = $_FILES['image']['size'];
		
		$price = $_POST['price'];
		if(strlen($name) < 3)
		{
			$error = "First name is too short";
		}
		else if($image == "")
		{
			$error ="Please upload your image";
		}
		else if($imageSize >1048576)
		{
			$error ="Image size must be less than 1 mb ";
		}
		else
		{
			
			$imageExt = explode(".",$image);
			$imageExtension = $imageExt[1];
			
			if($imageExtension == "PNG" || $imageExtension=="png" || $imageExtension
			 =="JPG" || $imageExtension == "jpg")
			{
				
			
			
			$image = rand(0,100000).rand(0,10000).rand(0,10000).time().".".$imageExtension;
			
			$insertQuery = "INSERT INTO tbl_product(name,image,price) VALUES ('$name','$image','$price')";
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<title>Untitled Document</title>
</head>

<body>
	
<form enctype="multipart/form-data" method="post" action="product.php">
    <label for="name"><span>Product Name <span class="required">*</span></span>
        <input type="text" name="name" data-required="true"/>
    </label>
    <br /><br/>
    <label><span>Attachment</span>
        <input type="file" name="file_attach[]" multiple/>
    </label>
    <br /><br/>
      
    
	<label for="price"><span>Product price <span class="required">*</span></span>
        <input type="text" name="price" data-required="true"/>
    </label>
	<br /><br/>
    <label><span>&nbsp;</span>
        <button type="submit" name="submit">Submit</button>
    </label>
</form>
	
</body>

</html>