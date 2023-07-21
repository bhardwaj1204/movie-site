<?php
  session_start(); 
	include "dbh.php";
	if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
	{
    header("Location:index.php"); 
	}
 
	if(isset($_POST['em']))
	{
		$em = $_POST['em'];
		$ps = $_POST['ps'];
		$watc="go now!!";
		$sql= "select * from `people` where `email`='$em' and `pass`='$ps'";
		$res = mysqli_query($conn,$sql);
		$count=mysqli_num_rows($res);
		if($count > 0)  
         {                                     

      $_SESSION['watc']=$watc;
      header('location:index.php');
        }

        else
        {
            echo "invalid UserName or Password";        
        }
	}
	
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Login </title>
    <link rel="stylesheet" href="userstyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>Login</header>
        <form action="" method="post">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="email" required placeholder="Email" name="em">
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" class="pass-key" required placeholder="Password" name="ps">
            <span class="show">SHOW</span>
          </div>
		  <br>
          
          <div class="field">
            <input type="submit" value="LOGIN">
          </div>
        </form>
        
       
        <div class="signup">Don't have account?
          <a href="usersignup.php">Signup Now</a>
        </div>
      </div>
    </div>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>


  </body>
</html>
