<?php 
include("admin_inc/db.php");

if(isset($_POST['save'])){

    $n=$_POST['notice'];
    $c=$_POST['content'];

    
    $ins="INSERT INTO notice SET notice='$n',content='$c'";
    $con->query($ins);
    header("location:listnotice.php");
}
else{
    echo "403 Access denied";
}





?>