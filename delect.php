<?php



include_once 'config.php';
?>

<?php

$id = $_GET['id'];

$qurrey = "DELETE FROM categories WHERE category_id= '$id'";

$result = mysqli_query($db , $qurrey);

if($result){
    header("location:Allcategory.php");
}else{
    header("location:dashboard.php");
}








?>