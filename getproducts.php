<?php
     $data=$_GET['id'];
   include 'db.php';
   $result=mysql_query("select * from product_master where ptype='mobile' and pname like '$data%'");
       if(mysql_affected_rows()>0)
       {
       $x=1;
           while($r=mysql_fetch_assoc($result))
           {
               if($x==1)
                   echo "<div class='row text-center'>";
                   echo "<div class='col-sm-3' >";  //style='border-style:solid'
                       echo "<div class='row'>";
                           echo "<br><div class='col-sm-12 text-center'><a href='mobile_desc.php?pid=$r[pid]'><img src='$r[pimage]' width='90' height='180'></a></div>";
                       echo "</div><hr>";
                       echo "<div class='row'>";
                           echo "<div class='col-sm-6'>Name</div> <div class='col-sm-6'><b><font color='blue' >$r[pname]</font></b></div>";
                       echo "</div><hr>";
                       
                       echo "<div class='row'>";
                           echo "<div class='col-sm-6'>Price</div> <div class='col-sm-6'><b><font color='indigo'>$r[pprice]</font></b></div>";
                       echo "<br></div>";
                       echo "<br></div>";
               $x++;
               if($x==5)
               
               
               {
                   echo "</div><hr >";
                   $x=1;
               } 
           }
       }
       else
       {
       echo  "<h2>Currently no product avaiable</h2>";
       }   
?>