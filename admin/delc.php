<?php 
include("admin_inc/db.php");

$id=$_GET['id'];

$s="SELECT * FROM notice WHERE nid='$id'";
$rs=$con->query($s);
$row=$rs->fetch_assoc();



$d="DELETE FROM notice WHERE nid='$id'";
if($con->query($d)){
    header("location:listnotice.php");
}
?>