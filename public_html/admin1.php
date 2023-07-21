<?php 
session_start();  



      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:adminlogin.php");  
       }
	   else
	   {
		  ?>
		 
		   <!DOCTYPE html>
		   <html>
  <head>
       <title> Home </title>
  </head>
  <body>
      
 <head>
   <meta charset="utf-8">
   <title>NeonFlix-Admin</title>
  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
      <a href="logout.php">logout</a>
   <header>
     <div class="container-fluid">
     

       <div class="container">

         <div class="jumbotron">
           <h1> Enter the Movie details</h1>
           <p> <b></b> </p> <br>

           <form class="" action="admin-control.php" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Movie Name" name="mname" value=""><br>
             <input type="text" class="form-control" placeholder="Year of Release" name="release" value="">
             <br>
             <input type="text" class="form-control" placeholder="Rating" name="genre" value="">
             <br>
             <input type="number" class="form-control" placeholder="Runtime in minutes" name="rtime" value="">
             <br>
             <input type="text" class="form-control" placeholder="Description..." name="desc" value="">
             <br>
			 <input type="text" class="form-control" placeholder="link" name="link" value="">
             <br>
			 <input type="text" class="form-control" placeholder="language" name="embd" value="">
             <br>
			  <input type="text" class="form-control" placeholder="Type/Genre" name="typ" value="">
             <br>
			  <input type="radio" name="rd" value="movie" checked>movie<br> 
    <input type="radio" name="rd" value="series">series
             <div class="row">
               <div class="col">
                 <table>
                   <tr>
                     <td> <label for=""><b>Upload Image : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="100000">

                              <input type="file" name="image" value="">
                          </div>
                     </td>
                   </tr>
                 </table>
               </div>
               
             </div> <br><br>
             <div class="signupbutton">
               <input type="submit" class ="btn btn-success btn-lg" name="upload" value="Submit" >
             </div>


           </form>

        </div>


         </div>

       </div>


   </div>

 </header>
 
   </body>
 </html>
		  
		  <?php
	   }

        
?>
</body>
</html>