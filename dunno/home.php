<?php

	include("connect.php");


	$error ="";
	

	if(isset($_POST['submit']))
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email= $_POST['email'];
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$website = $_POST['website'];
		
		
		if(strlen($first_name) < 3)
		{
			$error = "First name is too short";
		}
		else if(strlen($last_name) < 3)
		{
			$error = "Last name is too short";
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error="Please enter valid email address";
		}
		
		
		else
		{
			
			
			
			$insertQuery = "INSERT INTO employee(first_name,last_name,email,gender,phone,address,city,state,zip,website) VALUES ('$first_name','$last_name','$email','$gender','$phone','$address','$city','$state','$zip','$website')";
			if(mysqli_query($con, $insertQuery))
			{
				$error ="Records inserted successfully!";
			}
		
			
			else
			{
				$error = "Could not able to execute ";
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
	<style>
	#success_message{ display: none;}
	
	.upload-button {
    padding: 4px;
    border: 1px solid black;
    border-radius: 5px;
    display: block;
    float: left;
}
.profile-pic {
    border-radius: 50%;
    height: 150px;
    width: 150px;
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    vertical-align: middle;
    text-align: center;
    color: transparent;
    transition: all .3s ease;
    text-decoration: none;
}

.profile-pic:hover {
    background-color: rgba(0,0,0,.5);
    z-index: 10000;
    color: #fff;
    transition: all .3s ease;
    text-decoration: none;
}

.profile-pic span {
    display: inline-block;
    padding-top: 4.5em;
    padding-bottom: 4.5em;
}
</style>
</head>
<body>
<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Registration</legend>

<!-- Text input-->



<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="male" /> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="female" /> Female
                                </label>
                            </div>
                        </div>
                    </div>

<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(604)885-1212" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option>Perlis</option>
      <option>Kedah</option>
      <option >Pulau Pinang</option>
      <option >Perak</option>
      <option >Pahang</option>
      <option >Kelantan</option>
      <option >Terengganu</option>
      <option >Kuala Kumpur</option>
      <option >Labuan</option>
      <option> Putrajaya</option>
      <option >Sabah</option>
      <option >Sarawak</option>
      <option >Selangor</option>
      <option >Negeri Sembilan</option>
      <option >Malacca</option>
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
    </div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Website or domain name</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="website" placeholder="Website or domain name" class="form-control" type="text">
    </div>
  </div>
</div>


<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" name="submit">Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>

 <a href="main1.php">
          <span class="glyphicon glyphicon-log-out"></span>
        </a>
</form>
</div>
    </div><!-- /.container -->
      
	
	<script>
	

	</script>
</body>
</html>
