<?php 
include("db.php");
$id=$_GET['id'];
$sql=mysql_query("DELETE FROM company WHERE id=$id");
header("location:coList.php");
?>