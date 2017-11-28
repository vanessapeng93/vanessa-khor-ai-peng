<?php
include 'connect.php'
?>
<?php

$result = mysqli_query("SELECT * FROM tbl_product") or die(mysql_error()); 


?>

<table border="1" cellpadding="5" cellspacing="5">
<tr> <th>Image</th></tr>

<?php

while($row = mysql_fetch_array($result)) {

$id = $row['id'];

?>
    <tr>

        <td><img src="uploads/<?php echo $row['image'];?>" alt=" " height="75" width="75"></td>

   </tr>

<?php   
} 


?>
</table>