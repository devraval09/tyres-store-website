<?php
include "connect.php";

$comp_name = $_POST['comp_name'];
$logo = "icon/".$_FILES['logo']['name'];
move_uploaded_file($_FILES['logo']['tmp_name'],$logo);

$q = "insert into company (comp_name,logo) values ('$comp_name','$logo')";
mysqli_query($cn,$q);
header("location:company_view.php");


?>