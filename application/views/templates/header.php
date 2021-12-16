<!DOCTYPE html>
<html>
<head>
    <title>
        Urban Accomodation
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/others/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/others/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form/select2.min.css">
    <!-- Calender -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <script language="javascript">
        function Calculate()
        { 
            var h = document.getElementById('height').value;
            var l = document.getElementById('length').value;
            var result = h * l;
            var tax = result/10;
            document.getElementById('lblRes').innerHTML = result;
            document.getElementById('taxes').innerHTML = tax;
        }
    </script>
    <script language="javascript">
        function Calcula()
        {
            var h = document.getElementById('height').value;
            var c = document.getElementById('childprice').value;
            var i = document.getElementById('infantprice').value;
            // var l = document.getElementById('length').value;
            var result_adult = h;
            var result_child = c;
            var result_infant = i;
            var total_result = parseFloat(h)+ parseFloat(c)+ parseFloat(i);
            var usd_result = total_result/10;
            document.getElementById('lblRes').innerHTML = result_adult;
            document.getElementById('child').innerHTML = result_child;
            document.getElementById('infant').innerHTML = result_infant;
            document.getElementById('lblRe').innerHTML = total_result;
            document.getElementById('usdr').innerHTML = usd_result;
        }
    </script>
    <style>
#input {
    
    margin:0;
    padding-right: 30px;
    width: 100%;
}
#input_img {
    position:absolute;
    bottom:26px;
    right:28px;
    width:13px;
    height:16px;
}
.test{
  border: 0;
  display: flex;
  justify-content: space-between;
  width: 100%;
  padding: 0.5em 0;
}
.test svg {
     border-radius: 7px;
    color: white;
    background-color: red;
    border: 1px solid red;
    margin-top: -28px;
    height: 0.5em;
    font-size: 25px;
    margin-left: 287px;
}
[aria-expanded="true"] .vert {
  display: none;
}

[aria-expanded="true"] .vert {
  display: none;
}

[aria-expanded] rect {
  fill: currentColor;
}
.ui-widget-header{
  background-color: red !important;
}
</style>
</head>
<body>
<!--  TOP________________________________TOP HEADER______________________________________ BAR -->
  <div class="top-nav-bar top-nav-nav">
      <div class="container">
          <div class="row" data-aos="fade-left">
            <div class="col-md-5 col-sm-12 col-xs-12 ">
              <ul class="nav top-nav top-nav-option1">
                  <!-- <li class="nav-item">
                    <a href="" class="dropdown-toggle nav-link d-md-block d-none ">My Accounts</a><a href=""> <i class="fas fa-user-circle fa fa-phone d-sm-block  d-md-none col-sm-2"></i></a>
                  </li> -->
                      <!-- <li class="dropdown">
                      <a class="nav-link dropdown-toggle d-md-block d-none" data-toggle="dropdown" href="#">Currency
                      <span class="caret"></span></a><a href=""> <i class="fas fa-money-bill-alt d-sm-block  d-md-none col-sm-2"></i></a>
                      <ul class="dropdown-menu">
                      <li><a href="#">Currency</a></li>
                      </ul>
                      </li> -->
                      <!-- <li class="dropdown">
                      <a class="nav-link dropdown-toggle d-md-block d-none" data-toggle="dropdown" href="#">Language
                      <span class="caret"></span></a><a href=""> <i class="fas fa-language d-sm-block  d-md-none  col-sm-2"></i></a>
                      <ul class="dropdown-menu">
                      <li><a href="#">Language</a></li>
                      <b id="logout"><a href="logout">Logout</a></b>
                      </ul>
                      </li> -->
                       <div class="nav top-nav top-nav-opt-ind">
                    <li class="nav-item">
                    <a href="" class="nav-link d-sm-block  d-md-none"><i class="fa fa-phone"></i>03154311685</a>
                    </li>
                    <li class="nav-item">
                    <a href="<?php echo site_url('Login/login/'); ?>" class="nav-link d-sm-block  d-md-none"><i class="fas fa-user"></i> Login</a>
                    </li>
                    <li class="nav-item">
                   <a href="<?php echo site_url('Login/register/'); ?>" class="nav-link d-sm-block  d-md-none"><i class="fa fa-lock"></i> Register</a>
                    </li>
                  </div>
              </ul>
            </div>
             <div class="col-md-7 col-xs-12 col-sm-12" >
                <ul class="nav top-nav top-option-right">
                    <li class="nav-item">
                    <a href="" class="nav-link d-md-block d-none"><i class="fa fa-phone"></i>Any Questions? Call Us: + 92305 5454048</a>
                    </li>
                    <li class="nav-item">
                    <a href="<?php echo site_url('Login/login/'); ?>" class="nav-link d-md-block d-none"><i class="fas fa-user"></i> Login</a>
                    </li>
                     <li class="nav-item">
                    <a href="<?php echo site_url('Login/register/'); ?>" class="nav-link d-md-block d-none"><i class="fa fa-lock"></i> Register</a>
                    </li>
                    <li class="nav-item">
                    <a href="<?php echo site_url('Hotels/logout/'); ?>" class="nav-link d-md-block d-none"><i class="fa fa-lock"></i> Admin</a>
                    </li>
                </ul>
            </div>     
          </div> 
      </div>
  </div>
  <!-- ______________________________TOP HEADER_______________________________ -->
  <!-- ______________________________HEADER MENU_______________________________ -->
<div class="container navbar-expand-sm navbar-light bg-faded main">
  <div class="row .d-none .d-md-block .d-lg-block .d-xl-block">
    <div class="col-md-1 col-xs-12 col-sm-12">
      <button class="navbar-toggler toggle" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav menu-nav1">
        <li class="nav-item">
            <a href="<?php echo site_url('Hotels/urban/'); ?>" class="nav-link navbar-brand logo-alignment"><img src="<?php echo base_url(); ?>assets/image/travo/logo.png" class="logo"> <span class="rpspan">Urban Accomodation</span> </a>
        
          </li>
      </ul>
    </div>            
    <div class="col-md-7 offset-md-4 col-xs-12 col-sm-12">
      <div class="collapse navbar-collapse toggle res-head-work" id="nav-content">   
        <ul class="nav menu-nav menu-option-right navbar-nav res-head-work">
        <li class="nav-item">
          <a href="<?php echo site_url('Hotels/hotel_search/'); ?>" class="nav-link">Hotels</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo site_url('Flights/flight_search/'); ?>" class="nav-link res-header-work-list">Flights</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo site_url('Car/cars_search/'); ?>" class="nav-link res-header-work-list">Cars</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo site_url('Hotels/about/'); ?>" class="nav-link res-header-work-list">About</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo site_url('Vacation/vacation_search/'); ?>" class="nav-link res-header-work-list">Vacations</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo site_url('Hotels/terms/'); ?>" class="nav-link res-header-work-list">Pages</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo site_url('Hotels/contact_us/'); ?>" class="nav-link res-header-work-list">Contact US</a>
        </li>
        </ul>
      </div>
    </div>
  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      <!-- calendar -->
 <!-- ______________________________HEADER MENU ENDS_______________________________ -->
