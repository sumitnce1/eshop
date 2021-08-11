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
     <script src="./eshop/js/upbtn.js"></script>
     <link rel="stylesheet" type="text/css" href="./eshop/css/btnstyle.css">
     <style>
     .btn1 {
          height: 45px;
          width: 180px;
          background-color: indigo;
          color: white;
          font-weight: bold;
          font-size: 22px;
          border-radius: 25px;
     }
     </style>
</head>

<body>

     <?php include './header.php'?>
     <?php include 'menu.php'?>
     <section>

          <div class="container">
               <?php include_once 'db.php';
          
                    $result=mysql_query("select * from laptop where lid=$_GET[lid]");
                    $r=mysql_fetch_assoc($result);
                         
                         echo"<div class='row text-center'>";
                              echo "<div class='col-sm-2'></div>";
                              echo "<div class='col-sm-8 '>";
                                   echo "<img src='$r[limage]' width='260' height='150' style='text-align:center'>";
                              echo "</div>";
                              echo "<div class='col-sm-2'></div>";
                         echo "</div>";

                         echo "<div class='container'>";
                              echo "<div class='row'>";
                                   echo "<br><div class='col-sm-12 bg-warning text-center'>";
                                        echo "<br><h4><div class ='row'><div class='col-sm-6'>Name</div><divclass='col-sm-6'><b><font color='darkred'>$r[lname]</font></b></divclass=></div></h4><hr> ";
                                        echo "<h4><div class ='row'><div class='col-sm-6'>Price</div><divclass='col-sm-6'><b><font color='darkred'>$r[lprice]</font></b></divclass=></div></h4><hr> ";
                                        echo "<div class='row'>";
                                        echo "<div class='alert alert-success'>";
                                        echo "<h5 style='text-align: center'></<b> Available Offers</b><h5><hr>";
                                        echo "<ol>";
                                        echo "<li type='circle'>10% off with HDFC Credit Card</li>";
                                        echo "<li type='circle'>15% off with SBI Credit Card</li>";
                                        echo "<li type='circle'>5% Cash back on shop card</li>";
                                        echo "<li type='circle'>4 months Youube Premium Free</li>";
                                        echo "</ol>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class ='row'><div class='col-sm-6' <b><h3><font color='darkgreen'>Check Delivery</font></h3></b></div><divclass='col-sm-6'><br><input type='text' name='d1'></divclass=></div>";
                                        echo "<br><div class ='row'><div class='col-sm-6'><a href='laptop.php'><input type='button' name='addtocart' value='Add To Cart' class='btn1'></a> </div><divclass='col-sm-6'></div><br> ";
                                   echo "</div>";
                              echo "</div>";
                         echo "</div>";
               ?>
          </div>
     </section>
     <section>
          <div class="container">
               <div class="row">
                    <div class="col-lg-" 12>
                         <div class="title-all text-center">
                              <h1>LapTop Specifications</h1>
                              <hr style='height: 2px; border-width:0; background-color: darkblue'>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <section>
          <div class="container">
               <?php $result=mysql_query("select * from laptop_desc where lid=$_GET[lid]");
               $r=mysql_fetch_array($result);

                    echo "<div class='row text-center'>";
                    echo "<div class='col-sm-2'></div>";

                    echo "<div class='col-sm-8'>";

                    echo "<table class='table table-striped table-hover' width='100%'>";
                    echo "<tr>";
                    echo "<td >Product ID</td> <td>$r[0]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td >Model Number</td> <td>$r[1]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td >Company Name</td> <td>$r[2]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td >Processor</td> <td>$r[3]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td >Ram</td> <td>$r[4]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td >Screen Size</td> <td>$r[5]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td >Storage</td> <td>$r[6]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td >Graphics</td> <td>$r[7]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td >Operationg System</td> <td>$r[8]</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td >Battery Life</td> <td>$r[9]</td>";
                    echo "</tr>";
                    echo "</table>";

                    echo "</div>";
                    echo "<div class='col-sm-2'></div>";
                    echo "</div><hr style='height: 2px; border-width:0; background-color: darkblue'>";

               ?>
          </div><br><br><br>
     </section>


     <!-- Footer  & UP button Section -->
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