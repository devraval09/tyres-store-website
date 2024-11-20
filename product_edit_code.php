<?php
include('connect.php');

$product_id=$_POST['product_id'];
$title = $_POST['title'];
$photo = "product/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
$com_id = $_POST['com_id'];
$detail = $_POST['detail'];
$price = $_POST['price'];

$q = "update product set title='$title',photo='$photo',com_id='$com_id',detail='$detail',price='$price' where product_id='$product_id'";
mysqli_query($cn,$q);
header("location:product_view.php");
?>
