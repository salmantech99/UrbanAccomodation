
<!-- _______________________________Main Image_______________________________ --> 
<div class="menu main-image background">
  <div class="container-fluid ">
    <div class="row">
      <div class="offset-md-3 col-md-8 col-xs-12 col-sm-12">
        <h2 class="medium"> 
          <button class="btn btn-default btn-page">DUBAI</button><br><br>GET AN EXTRA 15% OFF <br><span class="medium-span">Select Hotels Deal</span>
        </h2>
        <div class="star1">
          <li><img src="<?php echo base_url(); ?>assets/image/travo/star.png"> 
            <img src="<?php echo base_url(); ?>assets/image/travo/star1.png">   
            <img src="<?php echo base_url(); ?>assets/image/travo/heart.png" class="heart"> 4256 
            <img src="<?php echo base_url(); ?>assets/image/travo/chat.png" class="heart"> 24568
          </li>        
        </div>
        <br>
        <button class="btn btn-default main-btn btn-deal">Grab Deal</button>
      </div>
    </div>
  </div>
  <div class="container bx-nav-div" data-aos="fade-down">
    <div class="row">
      <div class="col-md-12 ">
        <ul class="index-nav-one">
          <li style="color: white;"><a class="active tablink" onclick="openPage('home')" id="defaultOpen"><i class="fas fa-hotel main-index-icons"></i><span class="small-screen-icon">HOTEL</span></span></a></li>
          <li style="color: white;"><a class="tablink" onclick="openPage('flight')" id="flight_button"><i class="fas fa-plane main-index-icons"></i><span class="small-screen-icon">FLIGHT</span></a></li>
          <li style="color: white;"><a class="tablink" onclick="openPage('car')" id="car_button"><i class="fas fa-car main-index-icons"></i><span class="small-screen-icon">CARS</span></a></li>
          <li style="color: white;"><a class="tablink" onclick="openPage('cruise')" id="cruise_button"><i class="fas fa-ship main-index-icons"></i><span class="small-screen-icon">CRUISE</span></a></li>
          <li style="color: white;"><a class="tablink" onclick="openPage('vacations')" id="vacation_button"><i class="fas fa-sun main-index-icons"></i><span class="small-screen-icon">VACATIONS</span></a></li>
        </ul>
      </div>
    </div>
    <!-- Hotel Collapse -->
    <form class='search-form' action="<?php echo site_url('Hotels/search_by_form/'); ?>" method="post">
      <div class="row tabcontent" id="home">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group has-feedback hotel_tab_arange">
                <input class='form-control search-area-align' placeholder='Destination, landmark or address' type='text' name="query" spellcheck="false" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/location.png" id="input_img">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" id="datepicker" placeholder="Check in" id="input" name="hotel_checkin" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/check-in.png" id="input_img">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" id="datepickerdate" placeholder="Check out" id="input" name="hotel_checkout" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/check-in.png" id="input_img">
              </div>
            </div>
            <div class="col-md-2 hotel_tab_arange">
              <button class="btn btn-default srch-btn1 btn-sm" type="submit"  aria-haspopup="true" style="background-color: red; color: white;">
                <a class="main-references">Find Hotels</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Flights Collapse -->
    <form class='search-form' action="<?php echo site_url('Flights/search_by_form/'); ?>" method="post">
      <div class="row tabcontent" id="flight">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group has-feedback hotel_tab_arange">
                <input class='form-control search-area-align' placeholder='ENTER FLIGHT NAME' type='text' id="input" name="flight_search" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/location.png" id="input_img">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" id="datepickerflight" placeholder="Check in" name="flight_checkin" id="input" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/check-in.png" id="input_img">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" id="datepickerflights" placeholder="Check out" name="flight_checkout" id="input" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/check-in.png" id="input_img">
              </div>
            </div>
            <div class="col-md-2 hotel_tab_arange">
              <button class="btn btn-default srch-btn1 btn-sm" type="submit"  aria-haspopup="true" style="background-color: red; color: white;">
                <a class="main-references"> Find Flights</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>  
    <!-- Cruise Collapse -->
    <form class='search-form' action="" method="post">
      <div class="row tabcontent" id="cruise">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group has-feedback hotel_tab_arange">
                <input class='form-control search-area-align' placeholder='Destination, landmark or address' type='text' id="input" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/location.png" id="input_img">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" id="datepicker" placeholder="Check in" id="input" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/check-in.png" id="input_img">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" id="datepickerdate" placeholder="Check in" id="input" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/check-in.png" id="input_img">
              </div>
            </div>
            <div class="col-md-2 hotel_tab_arange">
              <button class="btn btn-default srch-btn1 btn-sm" type="submit"  aria-haspopup="true" style="background-color: red; color: white;">
                <a class="main-references" href="<?php echo site_url('Hotels/hotel_search/'); ?>"> Find Cruise</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Vacations Collapse -->
    <form class='search-form' action="<?php echo site_url('Vacation/search_by_form/'); ?>" method="post">
      <div class="row tabcontent" id="vacations">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group has-feedback hotel_tab_arange">
                <input class='form-control search-area-align' placeholder='Enter Place' type='text' id="input" name="vacation_place" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/location.png" id="input_img">
               </div>
            </div>
            <div class="col-md-3">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" id="vacationdate" placeholder="Check in" id="input" name="vacation_checkin" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/check-in.png" id="input_img">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group has-feedback">
                <select class="index-car-search-time" name="vacation_type">
                  <option disabled selected>Select</option>
                  <option value="Private">Private</option>
                  <option value="Join-In">Join-In</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Educational">Educational</option>
                  <option value="Corporate">Corporate</option>
                  <option value="Couples">Couples</option>
                  <option value="Staff training">Staff training</option>
                  <option value="Discovery Tours">Discovery Tours</option>
                  <option value="Family">Family</option>
                  <option value="Holidays">Holidays</option>
                  <option value="Wildlife Safaris">Wildlife Safaris</option>
                  <option value="History / Culture">History / Culture</option>
                  <option value="Beach Holidays">Beach Holidays</option>
                  <option value="Discovery Tours">Sightseeing</option>
                </select>
              </div>
            </div>
            <div class="col-md-2 hotel_tab_arange">
              <button class="btn btn-default srch-btn1 btn-sm" type="submit"  aria-haspopup="true" style="background-color: red; color: white;">
                       Find Vacations
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Car Collapse -->
    <form class='search-form' action="<?php echo site_url('Car/search_by_form/'); ?>" method="post">
      <div class="row tabcontent" id="car">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-2">
              <div class="form-group has-feedback hotel_tab_arange">
                <input class='form-control search-area-align' placeholder='Car Name' type='text' id="input" name="cars" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/location.png" id="input_img">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group has-feedback hotel_tab_arange">
                <input class='form-control search-area-align' placeholder='PICK UP' type='text' id="input" name="car_pickup" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/location.png" id="input_img">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" id="datepickercar" placeholder="Check In Date" name="car_checkin" id="input" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/check-in.png" id="input_img">
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group has-feedback">
                <select class="index-car-search-time" name="pickuptime">
                  <option disabled selected>Time</option>
                  <option value="00:00">00:00</option>
                  <option value="00:30">00:30</option>
                  <option value="01:00">01:00</option>
                  <option value="01:30">01:30</option>
                  <option value="02:00">02:00</option>
                  <option value="02:30">02:30</option>
                  <option value="03:00">03:00</option>
                  <option value="03:30">03:30</option>
                  <option value="04:00">04:00</option>
                  <option value="04:30">04:30</option>
                  <option value="05:00">05:00</option>
                  <option value="05:30">05:30</option>
                  <option value="06:00">06:00</option>
                  <option value="06:30">06:30</option>
                  <option value="07:00">07:00</option>
                  <option value="07:30">07:30</option>
                  <option value="08:00">08:00</option>
                  <option value="08:30">08:30</option>
                  <option value="09:00">09:00</option>
                  <option value="09:30">09:30</option>
                  <option value="10:00">10:00</option>
                  <option value="10:30">10:30</option>
                  <option value="11:00">11:00</option>
                  <option value="11:30">11:30</option>
                  <option value="12:00">12:00</option>
                  <option value="12:30">12:30</option>
                  <option value="13:00">13:00</option>
                  <option value="13:30">13:30</option>
                  <option value="14:00">14:00</option>
                  <option value="14:30">14:30</option>
                  <option value="15:00">15:00</option>
                  <option value="15:30">15:30</option>
                  <option value="16:00">16:00</option>
                  <option value="16:30">16:30</option>
                  <option value="17:00">17:00</option>
                  <option value="17:30">17:30</option>
                  <option value="18:00">18:00</option>
                  <option value="18:30">18:30</option>
                  <option value="19:00">19:00</option>
                  <option value="19:30">19:30</option>
                  <option value="20:00">20:00</option>
                  <option value="20:30">20:30</option>
                  <option value="21:00">21:00</option>
                  <option value="21:30">21:30</option>
                  <option value="22:00">22:00</option>
                  <option value="22:30">22:30</option>
                  <option value="23:00">23:00</option>
                  <option value="23:30">23:30</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" id="datepickerdatecar" placeholder="Check out" id="input" name="car_checkout" required>
                <img src="<?php echo base_url(); ?>assets/image/travo/check-in.png" id="input_img">
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group has-feedback">
                <select class="index-car-search-time" name="pickuptime">
                  <option disabled selected>Time</option>
                  <option value="00:00">00:00</option>
                  <option value="00:30">00:30</option>
                  <option value="01:00">01:00</option>
                  <option value="01:30">01:30</option>
                  <option value="02:00">02:00</option>
                  <option value="02:30">02:30</option>
                  <option value="03:00">03:00</option>
                  <option value="03:30">03:30</option>
                  <option value="04:00">04:00</option>
                  <option value="04:30">04:30</option>
                  <option value="05:00">05:00</option>
                  <option value="05:30">05:30</option>
                  <option value="06:00">06:00</option>
                  <option value="06:30">06:30</option>
                  <option value="07:00">07:00</option>
                  <option value="07:30">07:30</option>
                  <option value="08:00">08:00</option>
                  <option value="08:30">08:30</option>
                  <option value="09:00">09:00</option>
                  <option value="09:30">09:30</option>
                  <option value="10:00">10:00</option>
                  <option value="10:30">10:30</option>
                  <option value="11:00">11:00</option>
                  <option value="11:30">11:30</option>
                  <option value="12:00">12:00</option>
                  <option value="12:30">12:30</option>
                  <option value="13:00">13:00</option>
                  <option value="13:30">13:30</option>
                  <option value="14:00">14:00</option>
                  <option value="14:30">14:30</option>
                  <option value="15:00">15:00</option>
                  <option value="15:30">15:30</option>
                  <option value="16:00">16:00</option>
                  <option value="16:30">16:30</option>
                  <option value="17:00">17:00</option>
                  <option value="17:30">17:30</option>
                  <option value="18:00">18:00</option>
                  <option value="18:30">18:30</option>
                  <option value="19:00">19:00</option>
                  <option value="19:30">19:30</option>
                  <option value="20:00">20:00</option>
                  <option value="20:30">20:30</option>
                  <option value="21:00">21:00</option>
                  <option value="21:30">21:30</option>
                  <option value="22:00">22:00</option>
                  <option value="22:30">22:30</option>
                  <option value="23:00">23:00</option>
                  <option value="23:30">23:30</option>
                </select>
              </div>
            </div>
            <div class="col-md-2 hotel_tab_arange">
              <button class="btn btn-default srch-btn1 btn-sm" type="submit" aria-haspopup="true" style="background-color: red; color: white;" name="car">
                       <a class="main-references">  Find Cars</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>   
  </div> 
</div>
<!-- ____________________________SLIDER____________________________________ -->
<div class="container-fluid today-index">
  <div class="responsive">
    <?php foreach($posts as $post){?>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <div class="col-md-12 cloud-lahore" style="background-image: url(<?php echo base_url('uploads/'.$post->hotel_image); ?>);">
          <img src="<?php echo base_url(); ?>assets/image/02-index/star.png" class="star-index">
          <h4 class="footer-txt"><?php echo $post->hotel_name;?></h4>
          <p class="p-destination-index"><?php echo $post->location;?></p>
          <div class="overlay-index">
            <div class="col-md-12 cloud-slide" style="background-image: url(<?php echo base_url('uploads/'.$post->hotel_image); ?>);">
              <div>
                <img src="<?php echo base_url(); ?>assets/image/02-index/star.png" class="star-index">
                <h4 class="footer-txt"><?php echo $post->hotel_name;?></h4>
                <p class="p-destination-index"><?php echo $post->location;?></p>
              </div>
            </div>
            <div class="slider-ind">
              <p class="heading-deal-index-s"><?php echo anchor('Hotels/hotel_single?id='.$post->id, 'Book Destination',array('class' => 'anchor_tag')); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
     <?php } ?>
  </div>
</div>
<!-- _________________________WHY WE ARE THE BEST__________________________ -->
<div class="container">
  <div class="row" data-aos="fade-down">
    <div class="col-md-12 today">
      <h3 class="heading-deal">Why We are the Best For You </h3>
      <p class="p-heading">DISCOVER HOTELS ON BEST PRICE</p>
      <img src="<?php echo base_url(); ?>assets/image/travo/dot-line.png" class="img-dot">
    </div>
  </div>
  <div class="row about-marg">
    <div class="col-md-3 col-sm-12 col-xs-12" data-aos= "flip-left">
      <p style="text-align: center;"><i class="fas fa-hotel main_index_icons"></i></p>
      <h6 class="about-heading1">+5000 Hotel's</h6>
      <p class="about-p">Vivamus ultricies, non consequat Chay pila de yar  dignissim tortor</p>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12" data-aos= "flip-left">
      <p style="text-align: center;"><i class="far fa-money-bill-alt main_index_icons"></i></p>
      <h6 class="about-heading1">Unbeatable Prices</h6>
      <p class="about-p">Vivamus ultricies, non consequat Chay pila de yar  dignissim tortor</p>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12" data-aos= "flip-left">
      <p style="text-align: center;"><i class="fas fa-user-alt main_index_icons"></i></p>
      <h6 class="about-heading1">Our customers are Satisfied</h6>
      <p class="about-p">Vivamus ultricies, non consequat Chay pila de yar  dignissim tortor</p>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12" data-aos= "flip-left">
      <p style="text-align: center;"><i class="fas fa-user-tie main_index_icons"></i></p>
      <h6 class="about-heading1">Dedicated Team</h6>
      <p class="about-p">Vivamus ultricies, non consequat Chay pila de yar  dignissim tortor</p>
    </div>
  </div>
</div>
<!-- __________________________TOP DESTINATATION SECTION______________________ -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 class="heading-deal">Top Destination To Urban Accomodation. </h3>
      <p class="p-heading">A DIFFERENT WAY TO TRAVEL</p>
      <img src="<?php echo base_url(); ?>assets/image/travo/dot-line.png" class="img-dot">
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row destination_travo">
    <?php foreach($posts as $post){?>
    <div class="col-md-3 cloud" style="background-image: url(<?php echo base_url('uploads/'.$post->hotel_image); ?>);">
      <img src="<?php echo base_url(); ?>assets/image/02-index/star.png" class="star-index">
      <h4 class="footer-txt"><?php echo $post->hotel_name;?></h4>
      <p class="p-destination-index"><?php echo $post->location;?></p>
      <div class="overlay-index">
        <li class="cloud-txt"><img src="<?php echo base_url(); ?>assets/image/02-index/cloud.png" class="cloud-img-c"> 25 <sup><sup>o</sup>C<sup>o</sup>F</sup></li>
        <div class="btn-overlay">
          <a href="<?php echo site_url('Hotels/hotel_search/'); ?>"><button type="button" class="btn over-btn-1"><li><img src="<?php echo base_url(); ?>assets/image/travo/bed.png" class="btn-img-over"> 2543</li></button></a><br>
          <a href="<?php echo site_url('Flights/flight_search/'); ?>"><button type="button" class="btn over-btn-2"><li><img src="<?php echo base_url(); ?>assets/image/travo/plane.png" class="btn-img-over"> 2543</li></button></a><br>
          <a href="<?php echo site_url('Car/cars_search/'); ?>"><button type="button" class="btn over-btn-3"><li><img src="<?php echo base_url(); ?>assets/image/travo/car.png" class="btn-img-over"> 2543</li></button></a>
        </div>
        <img src="<?php echo base_url(); ?>assets/image/02-index/star.png" class="star-index-over">
        <h4 class="footer-txt-over"><?php echo $post->hotel_name;?></h4>
        <p class="p-destination-index-over"><?php echo $post->location;?></p>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<!--  ___________________________TODAYS TOP DEALS SECTION__________________________ -->
<div class="container">
  <div class="row">
    <div class="col-md-12 today" data-aos= "fade-down">
      <h3 class="heading-deal">Today's Top Deals </h3>
      <p class="p-heading">Latest Deals For You</p>
      <img src="<?php echo base_url(); ?>assets/image/travo/dot-line.png" class="img-dot">
    </div>
  </div>
  <div class="row slider1">
    <?php foreach($posts as $post){?>
    <div class="col-md-12">
      <div class="deal-lahore" style="background-image: url(<?php echo base_url('uploads/'.$post->hotel_image); ?>);">
        <div class="star">
          <img src="<?php echo base_url(); ?>assets/image/travo/five.png">
        </div>
        <div class="disc">
          <h2 class="dis-text"> 40</h2>
        </div>
        <h6 class="heading-destination"><?php echo $post->location;?>  </h6>
        <li class="p-destination"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> Booking period:<?php echo $post->featured_from;?> - <?php echo $post->featured_to;?></li>
        <li class="p-destination"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"><?php
              $date1 = date_create($post->featured_from);
              $date2 = date_create($post->featured_to);
              //difference between two dates
              $diff = date_diff($date1,$date2);
              //count days
               echo ' '.$diff->format("%d days");
              ?></li>
      </div>
    </div>
    <?php } ?>
  </div> 
  <div class="b" align="center">
    <button class="btn-default btn-destination-index dealleft"><img src="<?php echo base_url(); ?>assets/image/travo/larrow.png"></button> <a href="<?php echo site_url('Hotels/hotel_search/'); ?>"><button class="btn-default btn-destination-index-view">VIEW ALL</button></a><button class="btn-default btn-destination-index dealright"> <img src="<?php echo base_url(); ?>assets/image/travo/rarrow.png"></button>
  </div>
</div>
<!-- _________________________HAPPY CUSTOMERS____________________________ -->
<div class="container-fluid background-index">
  <div class="row">
    <div class="col-md-12 today-happy"  data-aos="fade-left">
      <h4 class="heading-deal-index">Happy Customer's </h4>
      <p class="p-heading-p-index">WHAT ABOUT SAY</p>
      <img src="<?php echo base_url(); ?>assets/image/travo/dot-line.png" class="img-dot-index "><br>
      <img src="<?php echo base_url(); ?>assets/image/travo/qoutes.png" class="img-q-index">
       <h4 class="p-heading-p-index-p">Phasellus nec suscipit justo, at semper velit. Nullam aliquet aliquam neque at efficitur  Fusce <br>ante ex, aliquam ut leo vel, sagittis faucibus mauris. Nunc non felis pharetra  blandit dolor nec,<br> pulvinar diam. Vivamus ante mauris posuere </h4>
       <p class="colis">Salman<br><span class="founder-font">FOUNDER</span></p>
       <p class="colis">Ahmed<br><span class="founder-font">FOUNDER</span></p>
    </div>
  </div>
</div>
<!-- ____________________TRAVELER's CHOICE OF HOTELS_______________________ -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 class="choice-index" data-aos= "fade-left">Travelers Choice of Hotels </h3>
      <div class="row">
        <div class="col-md-4">
          <p class="choice-d-index" data-aos= "fade-left">Plan Your Gateway Today</p>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
          <ul class="index-nav">
            <li><a href="">DUBAI</a></li>
            <li><a href="">AUSTRALIA</a></li>
            <li><a href="">INDIA</a></li>
            <li><a href="">TURKEY</a></li>
            <li><a href="">SPAIN</a></li>
            <li><button class="btn-default btn-nav-index d-md-block d-none left2"> <img src="<?php echo base_url(); ?>assets/image/travo/larrow.png"></button></li>
            <li><button class="btn-default btn-nav-index d-md-block d-none right2"> <img src="<?php echo base_url(); ?>assets/image/travo/rarrow.png"></button></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row slider2">
    <?php foreach($posts as $post){?>
      <div class="col-12 res-index-work">
        <div class="row" style="margin-top: 10px">
          <div class="col-md-6 index-slider-work" style="background-image: url(<?php echo base_url('uploads/'.$post->hotel_image); ?>); height:180px; background-size: cover;">
          </div>
          <div class="col-md-6 index-slider-text">
            <h6 class="about-heading1-index"><?php echo $post->hotel_name;?>  </h6>
            <img src="<?php echo base_url(); ?>assets/image/02-index/star-1.png" class="index-tar">
            <p class="p-index-p"><?php echo $post->hotel_description;?></p>
            <button class="btn-default btn-destination-index"><?php echo anchor('Hotels/hotel_single?id='.$post->id, 'View More',array('class' => 'index-view-more')); ?></button>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- ________________________DONT WAIT________________________ -->
<div class="background-index">
  <div class="container">
    <div class="row wait-index-margin">
      <div class="col-md-3">
        <li class="wait"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> Dont Wait any Longer, Contact Us</li>
      </div>
      <div class="col-md-6">
        <div class="price-font-index">
          <div class="row">
            <div class="col-md-1">
              <img src="<?php echo base_url(); ?>assets/image/02-index/line.png">
            </div>
            <div class="col-md-10">
              <h4>+ 92305 5454048 <br><span class="wait-1">24 - 7 Dedicated Customer Support</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <button type="button" class="btn over-btn-1"><a class="index-book-button" href="<?php echo site_url('Hotels/contact_us/'); ?>">Book Destination</a></button>
      </div>
    </div>
  </div>
</div>
<!-- _________________________________FOOTER________________________________ -->
<div class="footer1">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-12 col-xs-12">
        <a href="about.php"><li class="footer-txt"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> About Us</li></a>
        <p class="footer-txt1">Vivamus fermentum volutpat dolor idor efficitur. Fusce vel commodo lacus ovel rutrum lorem. Aliquam tincidunt mauris nec tellus iaculis, sed auctor lorem.</p>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3">
        <li class="footer-txt"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> Tag's</li>
        <li class="btn-footer2">
        <button type="button" class="btn btn-outline btn-footer">DUBAI</button>
        <button type="button" class="btn btn-outline btn-footer">TRAVEL</button>
        <button type="button" class="btn btn-outline btn-footer">PSD</button>
        <button type="button" class="btn btn-outline btn-footer">BOOKING</button>
        <button type="button" class="btn btn-outline btn-footer">DESTINATION</button>
        <button type="button" class="btn btn-outline btn-footer">TRUCK</button></li>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3">
        <li class="footer-txt"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> Activities</li>
        <p class="footer-txt1">-  Skiing Adventure <br> -  Cycling
        <br> -  Rafting <br> -  Parachuting</p>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <li class="footer-txt"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> Latest Blogs</li>
        <div class="row .d-none .d-md-block .d-lg-block .d-xl-block">          
          <div class="col-md-12 col-sm-12 col-xs-12 blog footer-txt1">
            <li class="d-md-block d-none"> <img src="<?php echo base_url(); ?>assets/image/travo/demo.jpg" style="width:  72%; height: 89px;"> </li>
            <p class="d-sm-block d-md-none" style="width:273px">Integer amet quam eleifend, commodo sem eget</p>
            <li class="footer-txt4 d-sm-block d-md-none"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> 31 July 2021</li>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 footer-txt3 footer-txt1 ">
            <p class="d-md-block d-none" style="width:280px">Integer amet quam eleifend, commodo sem eget</p>
            <li class="footer-txt4 d-md-block d-none"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> 31 July 2021</li> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ___________________COPYRIGHT______________________ -->
<div class="copyright1">
   <div class="container-fluid">
     <p class="copy-text">© 2021 - Urban Accomodation PSD Template - Made by Timon Themes</p>
   </div>
</div>
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
  function openPage(pageName) {
    mb1 = document.getElementById('defaultOpen');
    mb2 = document.getElementById('flight_button');
    mb3 = document.getElementById('car_button');
    mb4 = document.getElementById('cruise_button');
    mb5 = document.getElementById('vacation_button');
    if(pageName == 'home')
    {
      mb1.className = 'active tablink';
      mb2.className = 'tablink';
      mb3.className = 'tablink';
      mb4.className = 'tablink';
      mb5.className = 'tablink';
    }else if(pageName == 'flight')
    {
      mb1.className = 'tablink';
      mb2.className = 'active tablink';
      mb3.className = 'tablink';
      mb4.className = 'tablink';
      mb5.className = 'tablink'; 
    }else if(pageName == 'car')
    {
      mb1.className = 'tablink';
      mb2.className = 'tablink';
      mb3.className = 'active tablink';
      mb4.className = 'tablink';
      mb5.className = 'tablink'; 
    }
    else if(pageName == 'cruise')
    {
      mb1.className = 'tablink';
      mb2.className = 'tablink';
      mb3.className = 'tablink';
      mb4.className = 'active tablink';
      mb5.className = 'tablink'; 
    }
    else if(pageName == 'vacations')
    {
      mb1.className = 'tablink';
      mb2.className = 'tablink';
      mb3.className = 'tablink';
      mb4.className = 'tablink';
      mb5.className = 'active tablink'; 
    }
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    // element.style.backgroundColor = color;
  }
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
</script>
<script>
  $(document).ready(function() {
    $("#datepickerdate").datepicker();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(function() {
      AOS.init();
    });
    $(window).on('load', function() {
      AOS.refresh();
    });
  });
</script>
<script>
  $(document).ready(function() {
    $("#datepickerflight").datepicker();
  });
</script>
<script>
  $(document).ready(function() {
    $("#datepickerflights").datepicker();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(function() {
      AOS.init();
    });

    $(window).on('load', function() {
      AOS.refresh();
    });
  });
</script>
<script>
  $(document).ready(function() {
    $("#datepickercar").datepicker();
  });
</script>
<script>
  $(document).ready(function() {
    $("#datepickerdatecar").datepicker();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(function() {
      AOS.init();
    });
    $(window).on('load', function() {
      AOS.refresh();
    });
  });
</script>
<script>
  $(document).ready(function() {
    $("#vacationdate").datepicker();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(function() {
      AOS.init();
    });
    $(window).on('load', function() {
      AOS.refresh();
    });
  });
</script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
 <script>
    $(document).ready(function(){
      $('.responsive').slick({
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 5,
          autoplay: true,
          autoplayspeed:500, 
          dots: false,
          prevArrow: false,
          nextArrow: false,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                autoplay: true,
                autoplayspeed:500, 
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                 autoplay: true,
                 autoplayspeed:500, 
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
              }
            }
          ]
        });
      

      $('.slider1').slick({
        infinte:true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth:true,
        arrows:false
      });

      $('.dealleft').click(function(){
          $('.slider1').slick('slickPrev');
        })

      $('.dealright').click(function(){
        $('.slider1').slick('slickNext');
      })

      $('.slider2').slick({
        infinte:true,
        slidesToShow: 2,
        slidesToScroll: 2,
        variableWidth:true,
        arrows:false

      });

      $('.left2').click(function(){
          $('.slider2').slick('slickPrev');
        })

      $('.right2').click(function(){
        $('.slider2').slick('slickNext');
      })



    }); 
</script>
</body>
</html>