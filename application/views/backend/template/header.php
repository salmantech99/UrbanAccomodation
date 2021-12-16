
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Dashboard</title>
    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url(); ?>assets/backend/css/font-face.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>assets/backend/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/backend/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/backend/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>assets/backend/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/backend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/backend/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/backend/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/backend/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/backend/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/backend/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="<?php echo base_url(); ?>assets/backend/css/theme.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/theme/theme.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/backend/css/admin-custom.css" rel="stylesheet" media="all"> 
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
            width:15px;
            height:18px;
        }
    </style>
</head>
<body>
      <!-- HEADER MOBILE-->
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url(); ?>assets/backend/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-hotel"></i>Hotels</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo site_url('Hotels/add_hotels/'); ?>">
                                Hotels</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Hotels/rooms/'); ?>">
                                Rooms</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Hotels/room_extra/'); ?>">
                                Hotel Extras</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Hotels/hotel_reviews/'); ?>">
                                Hotel Reviews</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Hotels/hotel_settings/'); ?>">
                                Hotel Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-plane"></i>Flights</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo site_url('Flights/flights_add/'); ?>">
                                ROUTES</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Flights/airport_add/'); ?>">
                                AIRPORTS</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Flights/flight_settings/'); ?>">
                                SETTINGS</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Flights/airlines_add/'); ?>">
                                AIRLINES</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Flights/countries_add/'); ?>">
                                COUNTRIES</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Flights/flight_slider/'); ?>">
                                FLIGHTS SLIDER</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-car"></i>Cars</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo site_url('Car/car_page/'); ?>">
                                    Cars</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Car/extra_car/'); ?>">
                                    Extras</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Car/car_settings/'); ?>">
                                    Cars Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-suitcase"></i>Vacation</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo site_url('Vacation/vacations/'); ?>">
                                    Vacations</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Vacation/vacations_add/'); ?>">
                                    Add New</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Vacation/vacations_extra/'); ?>">
                                    Extras</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Vacation/vacation_settings/'); ?>">
                                    Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Reports And Orders</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo site_url('Hotels/hotel_orders/'); ?>">Hotel Orders</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Flights/flight_orders/'); ?>">Flight Orders</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Car/car_orders/'); ?>">Car Orders</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Vacation/vacation_orders/'); ?>">Vacation Orders</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Login User Orders</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo site_url('Hotels/user_hotel_orders/'); ?>">Hotel Orders</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Flights/user_flight_orders/'); ?>">Flight Orders</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Car/user_car_orders/'); ?>">Car Orders</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Vacation/user_vacation_orders/'); ?>">Vacation Orders</a>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="js-arrow" href="<?php echo site_url('Hotels/logout/'); ?>"><i class="zmdi zmdi-power"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        <!-- PAGE CONTAINER-->
        <!-- HEADER DESKTOP-->
        <div class="page-container">
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url(); ?>assets/backend/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url(); ?>assets/backend/images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url(); ?>assets/backend/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url(); ?>assets/backend/images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url(); ?>assets/backend/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2021</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2021 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2021 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2021 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url(); ?>assets/backend/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <?php foreach($posts as $post){?>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $post->username;?></a>
                                        </div>
                                        <?php } ?>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo base_url(); ?>assets/backend/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <?php foreach($posts as $post){?>
                                                        <h5 class="name">
                                                            <a href="#"><?php echo $post->username;?></a>
                                                        </h5>
                                                        <span class="email"><?php echo $post->email_address;?></span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo site_url('Login/profile/'); ?>">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo site_url('Hotels/logout/'); ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->



