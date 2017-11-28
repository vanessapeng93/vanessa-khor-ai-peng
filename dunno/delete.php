<?php  
 $con = mysqli_connect("localhost","root","","registration");   
 $sql = "DELETE FROM customer WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($con, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>