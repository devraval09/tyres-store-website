<?php

include ("connect.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact_no=$_POST['contact_no'];
$address=$_POST['address'];

$q = "insert into users (name,email,password,contact_no,address) values ('$name','$email','$password','$contact_no','$address')";
mysqli_query($cn,$q);
//print $q;

header("location:user_view.php");


?>