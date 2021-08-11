<!DOCTYPE html>

<html>

<head>
     <meta charset="UTF-8">
     <title>EShop Forgot Password</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="./eshop/js/upbtn.js"></script>
     <link rel="stylesheet" type="text/css" href="./eshop/css/btnstyle.css">


</head>

<body>
     <!-- Header Section -->
     <section>
          <div class="container-fluid" style="background-color: #9cc700;">
               <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="color: white;"> Welcome to EShop :)</a>

               </div>
          </div>
     </section>

     <!-- Bottom Section -->
     <section>
          <div>

          </div>
     </section>
     <div class="container">
          <div class="row">
               <div class="col-sm-12">
                    <h4 style="color: darkblue; font-weight :bold"><span class="glyphicon glyphicon-lock"></span> Forgot
                         Password</h4>
                    <hr style="height:3px; border-width:0; background-color: red">
               </div>
          </div>
     </div>

     <section>
          <div class="container">

               <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-4">
                         <form method="POST">

                              <div class="form-group">
                                   <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email:</label>
                                   <input type="email" name="txt_name" class="form-control"
                                        placeholder="Enter Your Email" required>
                              </div>

                              <br><button type="submit" name="btn_login" class=" btn btn-danger" style=" width: 50%;"
                                   data-toggle="tooltip" title="Forgot Password !!"><i class="fa fa-user"
                                        aria-hidden="true"></i>&nbsp;
                                   Forgot Password</button>
                              <br>
                              <br>
                              <label style=" width: 100%; text-align: right;">Have an account?
                                   <a href="signin.php" data-toggle="tooltip" title="Login Here!!">
                                        <b>
                                             Log In
                                        </b>
                                   </a>
                              </label>
                              <br>
                              <label style=" width: 100%; text-align: right;">Don't have an account?
                                   <a href="signup.php" data-toggle="tooltip" title="Signup Here!!">
                                        <b>
                                             Sign up
                                        </b>
                                   </a>
                              </label>

                         </form>
                    </div>

                    <div class="col-sm-5">
                         <div class="alert alert-info text-center ">
                              <strong><a href=" signup.php" data-toggle='tooltip'
                                        title=' Instruction !!'>Instruction!</a> </strong> to Use.
                         </div>
                    </div>
               </div>
          </div><br><br><br><br>
     </section>


     <!-- Footer Section -->
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