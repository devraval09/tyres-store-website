<?php
session_start();
include 'connect.php';  
$qty=$_POST['qty'];
$product_id=$_POST['product_id'];
$user_id=$_SESSION['id'];
$q="insert into add_to_cart(product_id,user_id,qty) values('$product_id','$user_id','$qty')";
mysqli_query($cn,$q);

header("location:mycart.php");
?>
