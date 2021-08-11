<style>
.footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: red;
     color: white;
     text-align: center;
}
</style>

<div class="footer">
     <br>
     <p>All Rights Reserved. &copy; 2020 EShop | Design By<a href="https://sumitnce1.github.io/">
               <font color="Yellow">SUMIT</font>
          </a></p>
     <hr width="50%">
     <label class='footer-comapnay'>Visiter: <?php
     $ip=$_SERVER['REMOTE_ADDR'];
     $v=0;
     $link=fopen("ipdata","a+");
     //rewind($link);
     $i=0;
     $arr=array();
     if(filetype(("ipdata")!=0))
     {
     while(!feof($link))
     {
       $arr[$i]=fgets($link);
     }
     $v=count($arr);     
     if(!array_search($ip."\n", $arr))
     {
          fwrite($link, $ip. "\n");
          $v+=1;
     }  
     }
     else
     {
          fwrite($link, $ip. "\n");
          $v+=1;
     }
     echo $v;

     fclose($link);

      ?></label>
     <!-- //page view code -->
     <label>Page View: <?php
          $h=fopen("pageview", "r");
          $x=fgets($h);
          echo $x;
          fclose($h);
          $h=fopen("pageview","w");
          $x=$x+1;
          fwrite($h, $x);
          fclose($h);
          ?></label>
</div>