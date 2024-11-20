<?php
include('connect.php');
$comp_name = $_POST['comp_name'];
$logo = "icon/".$_FILES['logo']['name'];
move_uploaded_file($_FILES['logo']['tmp_name'],$logo);
$com_id=$_POST['com_id'];

$q = "update company set comp_name='$comp_name',logo='$logo' where com_id='$com_id'";
mysqli_query($cn,$q);

header("location:company_view.php");

?>