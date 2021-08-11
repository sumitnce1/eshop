<!DOCTYPE html>

<html>

<head>
     <meta charset="UTF-8">
     <title>EShop About</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="js/upbtn.js"></script>
     <link rel="stylesheet" type="text/css" href="css/btnstyle.css">
     <link rel="stylesheet" type="text/css" href="css/socialicon.css">
     <link rel="stylesheet" type="text/css" href="css/loader.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

     <?php include 'header.php' ?>
     <?php include 'menu.php' ?>
     <section>
          <div class="container">
               <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Welcome!</strong> to About Us Section.
               </div>
          </div>
     </section>

     <div class="container">
          <div class="row">
               <div class="col-sm-12">
                    <h4 style="color: DarkViolet; font-weight :bold"><i class="fa fa-address-card"
                              aria-hidden="true"></i>
                         About
                         Us:
                    </h4>
                    <hr style="height:3px; border-width:0; background-color: DarkViolet">
               </div>
          </div>
     </div>

     <section>
          <div class="container ">
               <div class="row ">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                         <div class="loader"></div>
                    </div>
                    <div class="col-sm-4"></div>
               </div>
          </div>
     </section>

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