<?php  
 $con = mysqli_connect("localhost","root","","registration");   
 $sql = "INSERT INTO checkout(name,card,cvc,month,year,amount)
 VALUES('".$_POST["name"]."','".$_POST["card"]."','".$_POST["cvc"]."','".$_POST["month"]."','".$_POST["year"]."''".$_POST["amount"]."')";  
 if(mysqli_query($con, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 