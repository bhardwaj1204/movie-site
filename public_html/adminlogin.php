<?php  session_start();   // session starts with the help of this function 


if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:admin1.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $a = $_POST['unm'];
     $b = $_POST['pas'];
	$user = "yess";
	include "dbh.php";
	$sql= "select * from `admin` where `name`='$a' and `pass`='$b'";
	$res = mysqli_query($conn,$sql);
	$count=mysqli_num_rows($res);
      if($count > 0)  
         {                                     

          $_SESSION['use']=$user;
      header('location:admin1.php');
        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>

<form action="" method="post">

     
    <input type="text" placeholder="UserName" name="unm" >
  
    <input type="password" placeholder="PassWord" name="pas">
	<input type="submit" name="login" value="LOGIN">
</form>

</body>
</html>
