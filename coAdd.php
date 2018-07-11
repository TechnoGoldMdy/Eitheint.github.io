<?php 
include("db.php");
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql="INSERT INTO company (name,phone,address) VALUES ('$name','$phone','$address')";
mysql_query($sql);
header("location:coList.php");
?>