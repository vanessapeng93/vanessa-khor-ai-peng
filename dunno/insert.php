<?php  
 $con = mysqli_connect("localhost","root","","registration");   
 $sql = "INSERT INTO customer(name,email,subject,message)
 VALUES('".$_POST["name"]."','".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."')";  
 if(mysqli_query($con, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 