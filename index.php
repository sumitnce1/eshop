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
     <link rel="stylesheet" type="text/css" href="css/btnstyle.css">
     <link rel="stylesheet" type="text/css" href="css/socialicon.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
     .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
     }
     </style>

</head>

<body>

     <?php include 'header.php' ?>
     <?php include 'menu.php' ?>
     <section>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <!-- Indicators start -->
               <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
               </ol>

               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                    <div class="item active">
                         <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/summer-sale-design-template-ea1364183945c499a0b15ce4ce95184d_screen.jpg?ts=1566594588"
                              alt=" sumitnce" style="width:1600px; height: 500px">
                         <div class="carousel-caption">
                              <h3>Sell</h3>
                              <p>75% off.</p>
                         </div>
                    </div>

                    <div class="item">
                         <img src="https://media.gettyimages.com/photos/closeup-of-small-shopping-boxes-with-credit-card-on-laptop-picture-id1164137032?s=2048x2048"
                              alt="sumitnce" style="width:1600px; height: 500px">
                         <div class="carousel-caption">
                              <h3>More Sell</h3>
                              <p>comming soon..</p>
                         </div>
                    </div>
                    <div class="item">
                         <img src="https://media.gettyimages.com/photos/closeup-of-laptop-with-shopping-cart-on-wooden-table-picture-id1160174814?s=2048x2048"
                              alt="sumitnce" style="width:1600px; height: 500px">
                         <div class="carousel-caption">
                              <h3>More Sell </h3>
                              <p>LapTop 30% off</p>
                         </div>
                    </div>
                    <div class="item">
                         <img src="https://media.gettyimages.com/photos/cropped-hands-of-person-doing-online-shopping-on-table-at-home-picture-id1153820810?s=2048x2048"
                              alt="sumitnce" style="width:1600px; height: 500px">
                         <div class="carousel-caption">
                              <h3>Lenevo Sell</h3>
                              <p>LapTop 30% off.</p>
                         </div>
                    </div>
               </div>

               <!-- Left and right controls -->
               <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
               </a>
          </div>
     </section>
     <!-- Indicators section close -->

     <!-- social icon hover start -->
     <section>
          <div class="sticky-container">
               <ul class="sticky">
                    <li>
                         <img src="images/fb.png" width="32" height="32">
                         <p><a href="https://www.facebook.com/sumitnce" target="_blank">Like Us on<br>Facebook</a></p>
                    </li>
                    <li>
                         <img src="images/twitter.jpg" width="32" height="32">
                         <p><a href="https://twitter.com/sumitnce" target="_blank">Follow Us on<br>Twitter</a></p>
                    </li>
                    <li>
                         <img src="images/insta.jpg" width="32" height="32">
                         <p><a href="https://plus.google.com/sumitnce" target="_blank">Follow Us on<br>Instagram</a>
                         </p>
                    </li>
                    <li>
                         <img src="images/li.png" width="32" height="32">
                         <p><a href="https://www.linkedin.com/company/sumitnce" target="_blank">Follow Us
                                   on<br>LinkedIn</a></p>
                    </li>
                    <li>
                         <img src="images/youtube.png" width="32" height="32">
                         <p><a href="http://www.youtube.com/sumitnce" target="_blank">Subscribe on<br>YouTube</a></p>
                    </li>
                    <li>
                         <img src="images/pi.png" width="32" height="32">
                         <p><a href="https://www.pinterest.com/sumitnce1" target="_blank">Follow Us on<br>Pinterest</a>
                         </p>
                    </li>
               </ul>
          </div>
     </section> <!-- social icon hover close -->

     <!-- latest product controls -->
     <section>
          <di class="container text-center">
               <h1 style="font-size: 45px">Latest Products</h1><br>
               <div class="row img-responsive">
                    <div class=" col-sm-4 ">
                         <a href="mobile_desc.php?pid=1001"><img src=" mobile/1m.jpg" class="center "
                                   style="width:110px; height:200px; " alt=" Image"></a>
                         <h3>MI 10</h3>
                    </div>
                    <div class="col-sm-4">
                         <a href="laptop_desc.php?lid=511"><img src=" laptop/l1.jpg" class="center "
                                   style="width:200px; height:110px; " alt=" Image"></a>
                         <h3>MI 20</h3>
                    </div>
                    <div class="col-sm-4">
                         <a href="mobile_desc.php?pid=1003"><img src=" mobile/3m.jpg" class="center "
                                   style="width:110px; height:200px; " alt=" Image"></a>
                         <h3>MI 30</h3>
                    </div>
               </div><br><br>
               <hr>
               <h1 style="font-size: 45px">Recent Products</h1><br>
               <div class="row img-responsive">
                    <div class=" col-sm-4 ">
                         <a href="mobile_desc.php?pid=1020"><img src=" mobile/20m.jpg" class="center "
                                   style="width:110px; height:200px; " alt=" Image"></a>
                         <h3>Nokia 9 Pro</h3>
                    </div>
                    <div class="col-sm-4">
                         <a href="laptop_desc.php?lid=510"><img src=" laptop/l2.jpg" class="center "
                                   style="width:200px; height:90px; " alt=" Image"></a>
                         <h3> Iphone 11 Pro</h3>
                    </div>
                    <div class="col-sm-4">
                         <a href="mobile_desc.php?pid=1018"><img src=" mobile/18m.jpg" class="center "
                                   style="width:110px; height:200px; " alt=" Image"></a>
                         <h3> Iphone 11</h3>
                    </div>
               </div><br><br>
               <hr><br>

               </di<div class="row img-responsive">
               <div class=" col-sm-4 ">
                    <a href="mobile_desc.php?pid=1017"><img src=" mobile/17m.jpg" class="center "
                              style="width:110px; height:200px; " alt=" Image"></a>
                    <h3> Oppo A9 Pro</h3>
               </div>
               <div class="col-sm-4">
                    <a href="mobile_desc.php?pid=1016"><img src=" mobile/16m.jpg" class="center "
                              style="width:110px; height:200px; " alt=" Image"></a>
                    <h3> Oppo A5 Pink</h3>
               </div>
               <div class="col-sm-4">
                    <a href="mobile_desc.php?pid=1015"><img src=" mobile/15m.jpg" class="center "
                              style="width:110px; height:200px; " alt=" Image"></a>
                    <h3> Oppo A5 Black</h3>
               </div>
               </div><br>
               <hr style='height: 2px; border-width:0; background-color: darkblue'>
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