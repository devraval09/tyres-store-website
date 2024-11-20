<?php
session_start();
include 'connect.php'; 
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];
$user_id=$_SESSION['id'];
$q="select * from add_to_cart where user_id =$user_id";
$rs=mysqli_query($cn,$q);
while($row=mysqli_fetch_array($rs))
{
    $qty =$row['qty'];
    $product_id =$row['product_id'];
    $qi="insert into orders (user_id,qty,product_id,name,email,address,city) values('$user_id','$qty','$product_id','$name','$email','$address','$city')";
    mysqli_query($cn,$qi);
}
$qd="delete from add_to_cart where user_id =$user_id";
mysqli_query($cn,$qd);
header("location:thanks.php");
?>
