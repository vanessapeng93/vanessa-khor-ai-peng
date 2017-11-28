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
					header("refresh:0; url=main.php");
					echo'<script language="javascript">';
					echo'alert("successful register product")';
					echo'</script>';
				}
				else
				{
					$error ="Image is not uploaded";
					header("refresh:0; url=index.php");
				    echo'<script language="javascript">';
				    echo'alert("not successful, please try again")';
				    echo'</script>';
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
<html>
<head>

	<meta charset="utf-8">
	<title>Basic HTML File</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  
	
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
	<style>
.list-group.panel > .list-group-item {
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px
}
.list-group-submenu {
  margin-left:20px;
}
body {
  background: url(https://superdevresources.com/wp-content/uploads/2015/12/new-york-background.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.content {
  text-align: center;
  font-family: 'Open Sans', sans-serif;
  color: #DECBA4 ;
  margin: 40px auto;
  background: rgba(22,22,22, 0.5);
  width: 100%;
  max-width: 960px;
  border-radius: 5px;
  padding-bottom: 32px;
}

h1, h1 a {
  min-height: 120px;
  width: 90%;
  max-width: 700px;
  vertical-align: middle;
  text-align: center;
  margin: 0 auto;
  text-decoration: none;
  color: #fff;
  padding-top: 80px;
}


</style>
</head>
<body>
<div class="content">
  <h1><a href="https://superdevresources.com/full-background-image-css/" target="_blank">Product Registration</a></h1>
		<form enctype="multipart/form-data" method="post" action="main.php">
		  <br /><br/>
    <label for="name"><span>Product Name <span class="required">*</span></span>
        <input type="text" name="name" required/>
    </label>
    <br /><br/>
    <label><span>Attachment</span>
        <input type="file" name="image" multiple/>
    </label>
    <br /><br/>
      
    
	<label for="price"><span>Product price <span class="required">*</span></span>
        <input type="text" name="price" required/ >
    </label>
	<br /><br/>
    <label><span>&nbsp;</span>
        <button type="submit" name="submit">Submit</button>
    </label>
	
       <a href="main1.php">
          <span class="glyphicon glyphicon-log-out"></span>
        </a>

</form>
</div>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
