<!DOCTYPE html>
<html lang="en">
<?php include ('database.php')
  ?>


 <!DOCTYPE html>
<html>
<head>
    <title>
        TRAVO
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

    <!--  TOP________________________________NAV______________________________________ BAR -->

 
  <div class="top-nav-bar top-nav-nav">
      <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12 ">
              <ul class="nav top-nav top-nav-option1">
                  <li class="nav-item">
                    <a href="" class="dropdown-toggle nav-link d-md-block d-none ">My Accounts</a><a href=""> <i class="fas fa-user-circle fa fa-phone d-sm-block  d-md-none col-sm-2"></i></a>
                  </li>
                      <li class="dropdown">
                      <a class="nav-link dropdown-toggle d-md-block d-none" data-toggle="dropdown" href="#">Currency
                      <span class="caret"></span></a><a href=""> <i class="fas fa-money-bill-alt d-sm-block  d-md-none col-sm-2"></i></a>
                      <ul class="dropdown-menu">
                      <li><a href="#">Currency</a></li>
                      </ul>
                      </li>
                      <li class="dropdown">
                      <a class="nav-link dropdown-toggle d-md-block d-none" data-toggle="dropdown" href="#">Language
                      <span class="caret"></span></a><a href=""> <i class="fas fa-language d-sm-block  d-md-none  col-sm-2"></i></a>
                      <ul class="dropdown-menu">
                      <li><a href="#">Language</a></li>
                      </ul>
                      </li>
                       <div class="nav top-nav top-nav-opt">
                    <li class="nav-item">
                    <a href=""> <i class="fa fa-phone d-sm-block  d-md-none col-sm-2"></i></a>
                    </li>
                    <li class="nav-item">
                    <a href="login.php"> <i class="fa fa-search d-sm-block  d-md-none col-sm-2"></i></a>
                    </li>
                    <li class="nav-item">
                    <a href="register.php"> <i class="fa fa-lock d-sm-block  d-md-none col-sm-2"></i></a>
                    </li>
                  </div>
              </ul>
        
            </div>
             <div class="col-md-7 col-xs-12 col-sm-12" >
                <ul class="nav top-nav top-option-right">
                    <li class="nav-item">
                    <a href="" class="nav-link d-md-block d-none"><i class="fa fa-phone"></i>Any Questions? Call Us: 1-234-567-8910</a>
                    </li>
                    <li class="nav-item">
                    <a href="login.php" class="nav-link d-md-block d-none"><i class="fa fa-search"></i> Login</a>
                    </li>
                     <li class="nav-item">
                    <a href="register.php" class="nav-link d-md-block d-none"><i class="fa fa-lock"></i> Register</a>
                    </li>
                </ul>
            </div>     
          </div> 
      </div>
  </div>



<!-- ___________________________REGISTER PAGE________________________ -->
<div class="container">
    <br><br><br><br><br><br><br>
    <h4 class="contact-us" style="text-align: center;">REGISTER HERE</h4>
    <br>
    <div class="row">
        <div class="col-md-12 today1">
                            <form action="register.php" method="post" id="register_form">
                            <div class="form-group">
                                <label for="name" >Name</label>
                                <input type="text" name= "name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" >Email</label>
                                <input type="email" name= "email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <br><br>
                            <div class="text-center">
                                <button type="submit" name="register" class="btn register-btn"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                        </form>
        </div>
    </div>
  </div>

 <!--  ___________________REGISTERATION PHP FORM______________________ -->



 <!-- _________________________________FOOTER________________________________ -->

<div class="footer1">
  <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
              <li class="footer-txt"><img src="image/travo/red.png"> About Us</li>
              <p class="footer-txt1">Vivamus fermentum volutpat dolor idor efficitur. Fusce vel commodo lacus ovel rutrum lorem. Aliquam tincidunt mauris nec tellus iaculis, sed auctor lorem.</p>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
              <li class="footer-txt"><img src="image/travo/red.png"> Tag's</li>
              <li class="btn-footer2">
              <button type="button" class="btn btn-outline-danger btn-footer1">DUBAI</button>
              <button type="button" class="btn btn-outline btn-footer">TRAVEL</button>
              <button type="button" class="btn btn-outline btn-footer">PSD</button>
              <button type="button" class="btn btn-outline btn-footer">BOOKING</button>
              <button type="button" class="btn btn-outline btn-footer">DESTINATION</button>
              <button type="button" class="btn btn-outline btn-footer">TRUCK</button></li>
       </div>
       <div class="col-md-3 col-sm-3 col-xs-3">
              <li class="footer-txt"><img src="image/travo/red.png"> Activities</li>
              <p class="footer-txt1">-  Skiing Adventure <br> -  Cycling
              <br> -  Rafting <br> -  Parachuting</p>
       </div>
       <div class="col-md-3 col-sm-12 col-xs-12">
              <li class="footer-txt"><img src="image/travo/red.png"> Latest Blogs</li>
       <div class="row .d-none .d-md-block .d-lg-block .d-xl-block">          
       <div class="col-md-2 col-sm-12 col-xs-12 blog footer-txt1">
             <li class="d-md-block d-none"> <img src="image/travo/demo.jpg" style="width:  90px; height: 70px; margin-left: 10px;"> </li>
             <p class="d-sm-block d-md-none" style="width:273px">Integer amet quam eleifend, commodo sem eget</p>
             <li class="footer-txt4 d-sm-block d-md-none"><img src="image/travo/red.png"> 31 July 2021</li>
       </div>
       <div class="col-md-6 col-sm-12 col-xs-12 footer-txt3 footer-txt1 ">
              <p class="d-md-block d-none" style="width:223px">Integer amet quam eleifend, commodo sem eget</p>
              <li class="footer-txt4 d-md-block d-none"><img src="image/travo/red.png"> 31 July 2021</li> 
       </div>
       </div>
       </div>
       </div>
    </div>
</div>


 <!-- ___________________COPYRIGHT______________________ -->
 <div class="copyright">
   <div class="container-fluid">
     <p class="copy-text">© 2021 - Urban Accomodation PSD Template - Made by Timon Themes</p>
   </div>
 </div>
</body>
</html>
