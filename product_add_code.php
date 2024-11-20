<?php
include('connect.php');

$title = $_POST['title'];
$photo = "product/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
$com_id = $_POST['com_id'];
$detail = $_POST['detail'];
$price = $_POST['price'];

$q = "insert into product (title,photo,com_id,detail,price) values ('$title','$photo','$com_id','$detail','$price')";
mysqli_query($cn,$q);
header("location:product_view.php");
?>
