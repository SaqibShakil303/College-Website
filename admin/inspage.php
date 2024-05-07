<?php 
include("admin_inc/db.php");

if(isset($_POST['save'])){

    
    $p=$_POST['page'];
    $c=$_POST['content'];
   


    $ins="INSERT INTO pages SET page='$p',content='$c'";
    if($con->query($ins)){
        header("location:listpage.php");
    }




}else{
    echo "403 Access denied";
}


?>