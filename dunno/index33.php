<html>  
      <head>  
           <title>Feedback</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		  <style type="text/css">
		body{
		 background-color: #000000;
   		padding: 0px;
  		 margin: 0px;
 			}

		#gradient
		{
 			 width: 100%;
  			height: 800px;
  			padding: 0px;
  			margin: 0px;
		}
		

	</style>
      </head>  
      <body>  
		  <div id="gradient" />
           <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <h3 align="center">Feedback Form</h3><br />  
                     <div id="live_data"></div>   
						 <a href="main1.php">
          <span class="glyphicon glyphicon-log-out"></span>
        </a>
                </div>  
           </div>  
		  
      </body>  
 </html>  
 <script>  
	 
	 var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,10);
	 
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var name = $('#name').text();
		  var email = $('#email').text();
		  var subject = $('#subject').text();
		  var message = $('#message').text();
		  
           if(name == '')  
           {  
                alert("Enter Name");  
                return false;  
           }  
		   if(email == '')  
           {  
                alert("Enter Email");  
                return false;  
           } 
		   if(subject == '')  
           {  
                alert("Enter Subject");  
                return false;  
           } 
		   if(message == '')  
           {  
                alert("Enter Message");  
                return false;  
           } 
		 
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{name:name,email:email,subject:subject,message:message,date:date},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.name', function(){  
           var id = $(this).data("id1");  
           var name = $(this).text();  
           edit_data(id, name, "name");  
      });  
	 $(document).on('blur', '.name', function(){  
           var id = $(this).data("id1");  
           var email = $(this).text();  
           edit_data(id, email, "email");  
      }); 
	 $(document).on('blur', '.name', function(){  
           var id = $(this).data("id1");  
           var subject = $(this).text();  
           edit_data(id, subject, "subject");  
      }); 
	 $(document).on('blur', '.name', function(){  
           var id = $(this).data("id1");  
           var message = $(this).text();  
           edit_data(id, message, "message");  
      }); 
	
     
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>