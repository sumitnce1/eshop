<?php
$msg = "";
if (isset($_POST['add_query'])) {
     include_once 'db.php';
     $name = $_POST['txt_name'];
     $emailid = $_POST['txt_emailid'];
     $subject = $_POST['txt_subject'];

     $qry = "insert into contactus values('$name','$emailid','$subject')";
     mysql_query($qry);
     if (mysql_affected_rows() > 0) {
          $msg = "<font color='green'>Successfully Sent !!</font>";
          header("location:index.php");
     } else {
          $msg = "<font color='red'>Failed Something Wrong !!</font>";
     }
     mysql_close($link);
}
?>

<!DOCTYPE html>

<html>

<head>
     <meta charset="UTF-8">
     <title>EShop Contact US</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="js/upbtn.js"></script>
     <link rel="stylesheet" type="text/css" href="css/socialicon.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
     <?php include 'header.php' ?>
     <?php include 'menu.php' ?>
     <div class="container">
          <div class="row">
               <div class="col-sm-12">
                    <h4 style="color: #006400; font-weight :bold"><i class="fa fa-address-card" aria-hidden="true"></i>
                         Contact
                         Us:
                    </h4>
                    <hr style="height:3px; border-width:0; background-color: #006400">
               </div>
          </div>
     </div>


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
                    <div class="col-sm-6">
                         <form method="POST">
                              <div class="alert alert-success alert-dismissible">
                                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                   Please use this contact form to get in touch with us.
                              </div>
                              <div class="form-group">
                                   <label><span class="glyphicon glyphicon-user"></span> Name:</label>
                                   <input type="name" name="txt_name" class="form-control" placeholder="Enter Name"
                                        required>
                              </div>
                              <div class="form-group">
                                   <label><span class="glyphicon glyphicon-envelope"></span> Email ID:</label>
                                   <input type="email" name="txt_emailid" class="form-control"
                                        placeholder="Enter Email ID" required>
                              </div>
                              <div class="form-group">
                                   <label>Subject: <font color="blue">Max 190 Char.</font></label>
                                   <textarea name="txt_subject" class="form-control" rows="4"
                                        placeholder="Enter your subject Maximum 190 Character !!" required></textarea>
                              </div>

                              <button type="submit" name="add_query" class=" btn btn-success" style=" width: 60%;"
                                   data-toggle="tooltip" title="Submit !!"><i class="fa fa-check-circle-o"
                                        aria-hidden="true"></i>
                                   Submit</button>
                         </form>
                    </div>

                    <div class="col-sm-6 ">
                         <h2><b><i class="fa fa-map-marker" aria-hidden="true"></i> Company Address</b></h2>
                         <h4>EShop Patna Main Office.</h4>
                         <p>
                              <b>Anisabad Patna-2</b></p>
                         <p>
                              <b>Email: </b>
                              <font color="indigo">&nbsp; info@eshop.com</font>
                         </p>
                         <p>
                              <b>Phone: </b>
                              <font color="indigo">+91 9570268540 </font>
                         </p>
                         <p>
                              <img src="lct.svg" width="300px" height="150px">
                         </p>
                    </div>

               </div>
          </div>
          <br><br><br>
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