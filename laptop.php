<!DOCTYPE html>

<html>

<head>
     <meta charset="UTF-8">
     <title>EShop Website</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="js/upbtn.js"></script>
     <script src="js/getproducts.js"></script>
     <link rel="stylesheet" type="text/css" href="./eshop/css/btnstyle.css">
     <script>
     function getProduct() {
          data = document.getElementById("search").value;
          obj = new XMLHttpRequest();
          obj.open("get", "getproducts.php?id=" + data, true);
          obj.send();
          obj.onreadystatechange = function() {
               if (obj.readyState == 4 && obj.status == 200) {
                    document.getElementById("t1").hidden = true;
                    document.getElementById("t2").innerHTML = obj.responseText;
               }
          }
     }

     function getProductName() {
          data = document.getElementById("search").value;
          obj = new XMLHttpRequest();
          obj.open("get", "getproductname.php?id=" + data, true);
          obj.send();
          obj.onreadystatechange = function() {
               if (obj.readyState == 4 && obj.status == 200) {

                    document.getElementById("hint").innerHTML = obj.responseText;
               }
          }
     }
     </script>
</head>

<body>

     <!-- Header code -->
     <div class="container-fluid" style="background-color: #9cc700;">
          <div class="navbar-header">
               <a class="navbar-brand" href="#" style="color: white;"> Welcome to EShop :)</a>

          </div>
          <form class="navbar-form navbar-left">
               <div class="form-group">
                    <input onkeyup="getProduct()" type="text" id="search" class="form-control"
                         placeholder="Product Search">
               </div>
               <div id="hint"></div>
          </form>
     </div>


     <!-- Menu code start -->
     <?php include 'menu.php' ?>
     <section>
          <div class="container">
               <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Congratulations!</strong> Welcome to EShop.
               </div>
          </div>
     </section>
     <section>
          <div class="container">
               <div id="t2">
               </div>
               <div id="t1">

                    <?php
                include 'db.php';
                $result=mysql_query("select * from laptop where ltype='laptop'");
                    if(mysql_affected_rows()>0)
                    {
                    $x=1;
                        while($r=mysql_fetch_assoc($result))
                        {
                            if($x==1)
                                echo "<div class='row text-center'>";
                                echo "<div class='col-sm-3' >";  //style='border-style:solid'
                                    echo "<div class='row'>";
                                        echo "<br><div class='col-sm-12 text-center'><a href='laptop_desc.php?lid=$r[lid]'><img src='$r[limage]' width='150' height='90'></a></div>";
                                    echo "</div><hr>";
                                    echo "<div class='row'>";
                                        echo "<div class='col-sm-6'>Name</div> <div class='col-sm-6'><b><font color='blue' >$r[lname]</font></b></div>";
                                    echo "</div><hr>";
                                    
                                    echo "<div class='row'>";
                                        echo "<div class='col-sm-6'>Price</div> <div class='col-sm-6'><b><font color='indigo'>$r[lprice]</font></b></div>";
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
               </div>

               <hr style='height: 2px; border-width:0; background-color: darkblue'>
          </div>

     </section>




     <section>
          <div class="container">
               <div class="row">
                    <div class="col-lg-11"></div>
                    <div class="col-lg-1 text-right " style="font-size:30px">
                         <a class="back-to-top btn btn-primary btn-lg back-to-top" id="back-to-top" role="button"
                              href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                    </div>
               </div>
          </div><br><br>
          <br><br><br><br><br><?php include './footer.php' ?>
     </section>


</body>

</html>