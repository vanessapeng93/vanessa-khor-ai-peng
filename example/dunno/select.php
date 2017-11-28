<?php  
 $con = mysqli_connect("localhost","root","","registration"); 
 $output = '';  
 $sql = "SELECT * FROM checkout ORDER BY id DESC";  
 $result = mysqli_query($con, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">Id</th>  
                     <th width="20%">Name</th> 
					 <th width="15%">Card</th>  
					 <th width="15%">CVC</th>
					 <th width="15%">Month</th>
					 <th width="20%">Year</th>    
                     <th width="10%">Amount</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row["name"].'</td> 
					 <td class="card" data-id2="'.$row["id"].'" contenteditable>'.$row["card"].'</td> 
					 <td class="cvc" data-id3="'.$row["id"].'" contenteditable>'.$row["cvc"].'</td> 
					 <td class="month" data-id4="'.$row["id"].'" contenteditable>'.$row["month"].'</td> 
					  <td class="year" data-id5="'.$row["id"].'" contenteditable>'.$row["year"].'</td> 
					   <td class="amount" data-id6="'.$row["id"].'" contenteditable>'.$row["amount"].'</td> 
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable></td>  
				<td id="card" contenteditable></td>
				<td id="cvc" contenteditable></td>
				<td id="month" contenteditable></td>
				<td id="year" contenteditable></td>
				<td id="amount" contenteditable></td>
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