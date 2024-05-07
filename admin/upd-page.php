<?php
include("admin_inc/db.php");
 if(isset($_POST['save'])){
   
    $p=$_POST['page'];
    $c=$_POST['content'];
    $id=$_POST['id'];
        $up="UPDATE pages SET page='$p',content='$c' WHERE pid='$id'";
    
 
    
    $con->query($up);
    
    header("location:listpage.php");
    echo "Data Submitted Successfully ";
    }
    else{
        echo "Access Denied";
    }
    ?>