<?php
session_start();
if (isset($_POST['upload'])) {

  include 'dbh.php';

 
  $target = "uploads/".basename($_FILES['image']['name']);
  $name = ($_POST['mname']);
  $rdate = $_POST['release'];
  $genre =($_POST['genre']);
  $rtime = $_POST['rtime'];
  $desc = $_POST['desc'];
  $link = $_POST['link'];
  $embd = $_POST['embd'];
  $tp = $_POST['typ'];
  $rd = $_POST['rd'];
  $image = $_FILES['image']['name'];
 

  $sql = "INSERT INTO movies (name, rdate, genre, runtime, decription, imgpath,link,embd,type,sr)
    VALUES('$name','$rdate','$genre','$rtime','$desc','$image','$link','$embd','$tp','$rd')";

  mysqli_query($conn,$sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'],$target) ) {
    header("Location: index.php");
  }else {
    echo "error uploading";
  }
}
	

?>
