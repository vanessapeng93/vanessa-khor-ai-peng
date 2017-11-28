<?php  
$con = mysqli_connect("localhost","root","","registration"); 
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE checkout SET ".$column_name."='".$text."' WHERE id='".$id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?>