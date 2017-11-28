<?php  
 $con = mysqli_connect("localhost","root","","registration"); 
 $output = '';  
 $sql = "SELECT * FROM customer ORDER BY id DESC";  
 $result = mysqli_query($con, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="10%">Name</th> 
					 <th width="15%">Email</th>  
					 <th width="15%">Subject</th>  
					 <th width="20%">Message</th>    
                     <th width="10%">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row["name"].'</td> 
					 <td class="email" data-id2="'.$row["id"].'" contenteditable>'.$row["email"].'</td> 
					 <td class="subject" data-id3="'.$row["id"].'" contenteditable>'.$row["subject"].'</td> 
					 <td class="message" data-id4="'.$row["id"].'" contenteditable>'.$row["message"].'</td> 
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable></td>  
				<td id="email" contenteditable></td>
				<td id="subject" contenteditable></td>
				<td id="message" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>