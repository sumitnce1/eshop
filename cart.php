<?php
     $id=$_GET['pid'];
     //$id=$_GET['lid'];
     if(isset($_COOKIE['cart']))
     {
          $data=$_COOKIE['cart'].",".$id;
          setcookie("cart",$data);
     }
     else
     {
          setcookie("cart",$id,time()+3600);
     }
     header("location:mobile_desc.php?pid=".$id); 
     //header("location:laptop_desc.php?lid=".$id); 
?>