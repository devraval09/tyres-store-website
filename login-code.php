<?php
session_start();
include("connect.php");
$email= $_POST['email'];
$password= $_POST['password'];
$q="select * from users where email  ='$email' and password='$password'";
$rs=mysqli_query($cn,$q);
if($row=mysqli_fetch_array($rs))
{
    $_SESSION['id']=$row[0];
    header("location:index.php");
}
else{
    header("location:login.php?msg=y");
}
?>