<?php 
include("admin_inc/db.php");

$id=$_GET['id'];

$s="SELECT * FROM pages WHERE pid='$id'";
$rs=$con->query($s);
$row=$rs->fetch_assoc();



$d="DELETE FROM pages WHERE pid='$id'";
if($con->query($d)){
    header("location:listpage.php");
}
?>