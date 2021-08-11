<?php
     $data=$_GET['id'];
     include 'db.php';
     $result= mysql_query("select pname from product_master where pname like '$data'");
     while ($r = mysql_fetch_array($result))
     {
          echo $r[0]."<br>";
     }
?>