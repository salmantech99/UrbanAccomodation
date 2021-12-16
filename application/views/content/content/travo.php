

<!-- _______________________________Main Image_______________________________ -->
  
<div class="menu main-image background">
    <div class="container-fluid ">
        <div class="row">
              <div class="offset-md-3 col-md-8 col-xs-12 col-sm-12">
                <h2 class="medium"> 
                  <button class="btn btn-default btn-page">DUBAI</button><br><br>GET AN EXTRA 15% OFF <br><span class="medium-span">Select Hotels Deal</span></h2>
                <div class="star1">
                      <li><img src="image/travo/star.png"> 
                        <img src="image/travo/star1.png">   
                        <img src="image/travo/heart.png" class="heart"> 4256 
                        <img src="image/travo/chat.png" class="heart"> 24568
                      </li>        
                </div>
                <br>
                <button class="btn btn-default main-btn btn-deal">Grab Deal</button>
              </div>
        </div>
      </div>
 <div class="container bx-nav-div" data-aos="fade-down">
    <div class="row">
    <div class="col-md-12 d-none d-md-block">
              <ul class="index-nav-one">
            <li><a href="#" class="active tablink" onclick="openPage('home')" id="defaultOpen"><img src="image/travo/hotel.png"><span class="hotel"> HOTEL</span> </a></li>
            <li><a href="#" class="tablink" onclick="openPage('flight')"><img src="image/travo/flight.png"> FLIGHT</a></li>
            <li><a href="#" class="tablink" onclick="openPage('car')"><img src="image/travo/cars.png"> CARS</a></li>
            <li><a href="#" class="tablink" onclick="openPage('cruise')"><img src="image/travo/cruise.png"> CRUISE</a></li>
            <li><a href="#" class="tablink" onclick="openPage('vacations')"><img src="image/travo/sun.png"> VACATIONS</a></li>
          </ul>
    </div>
  </div>
  <div class="row d-md-none d-sm-block">
          <div class="col-md-12">
               <ul class="ul1">
                  <li class="li1"><a href="#"><img src="image/travo/hotel.png" class="ccoki"></a></li>
                  <li class="li1"><a href="#"><img src="image/travo/flight.png" class="ccoki"></a></li>
                  <li class="li1"><a href="#"><img src="image/search-hotel/car-p.png" class="ccoki"></a></li>
                  <li class="li1"><a href="#"><img src="image/travo/cruise.png" class="ccoki"></a></li>
                  <li class="li1"><a href="#"><img src="image/travo/sun.png" class="ccoki"></a></li>
              </ul>
         </div>
  </div>

  <!-- Hotel Collapse -->
  <form class='search-form' action="hotel-search.php" method="post">
  <div class="row tabcontent" id="home">
    <div class="col-md-12">
      <div class="row">
         <div class="col-md-4">
             <div class="form-group has-feedback">
                <input class='form-control' placeholder='Destination, landmark or address' type='text' id="input" name="query">
                <img src="image/travo/location.png" id="input_img">
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-group has-feedback">
               <input type="text" class="form-control" id="datepicker" placeholder="Check in" id="input">
               <img src="image/travo/check-in.png" id="input_img">
            </div>
         </div>
        <div class="col-md-3">
          <div class="form-group has-feedback">
             <input type="text" class="form-control" id="datepickerdate" placeholder="Check out" id="input">
             <img src="image/travo/check-in.png" id="input_img">
          </div>
        </div>
       <div class="col-md-2">
          <button class="btn btn-default srch-btn1 btn-sm" type="submit"  aria-haspopup="true" style="background-color: red; color: white;">
                   Find Hotels
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
  <!-- Flights Collapse -->
  <form class='search-form' action="travo.php" method="post">
  <div class="row tabcontent" id="flight">
    <div class="col-md-12">
      <div class="row">
         <div class="col-md-4">
             <div class="form-group has-feedback">
                <input class='form-control' placeholder='Search Flights' type='text' id="input">
                <img src="image/travo/location.png" id="input_img">
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-group has-feedback">
               <input type="text" class="form-control" id="datepickerflight" placeholder="Check in" id="input">
               <img src="image/travo/check-in.png" id="input_img">
            </div>
         </div>
        <div class="col-md-3">
          <div class="form-group has-feedback">
             <input type="text" class="form-control" id="datepickerflights" placeholder="Check in" id="input">
             <img src="image/travo/check-in.png" id="input_img">
          </div>
        </div>
       <div class="col-md-2">
          <button class="btn btn-default srch-btn1 btn-sm" type="submit"  aria-haspopup="true" style="background-color: red; color: white;" name="flight">
                   Find Flights
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
   
    <!-- Cruise Collapse -->
    <form class='search-form' action="travo.php" method="post">
  <div class="row tabcontent" id="cruise">
    <div class="col-md-12">
      <div class="row">
         <div class="col-md-4">
             <div class="form-group has-feedback">
                <input class='form-control' placeholder='Destination, landmark or address' type='text' id="input">
                <img src="image/travo/location.png" id="input_img">
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-group has-feedback">
               <input type="text" class="form-control" id="datepicker" placeholder="Check in" id="input">
               <img src="image/travo/check-in.png" id="input_img">
            </div>
         </div>
        <div class="col-md-3">
          <div class="form-group has-feedback">
             <input type="text" class="form-control" id="datepickerdate" placeholder="Check in" id="input">
             <img src="image/travo/check-in.png" id="input_img">
          </div>
        </div>
       <div class="col-md-2">
          <button class="btn btn-default srch-btn1 btn-sm" type="submit"  aria-haspopup="true" style="background-color: red; color: white;">
                   Find Cruise
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
    <!-- Vacations Collapse -->
    <form class='search-form' action="travo.php" method="post">
  <div class="row tabcontent" id="vacations">
    <div class="col-md-12">
      <div class="row">
         <div class="col-md-4">
             <div class="form-group has-feedback">
                <input class='form-control' placeholder='Destination, landmark or address' type='text' id="input">
                <img src="image/travo/location.png" id="input_img">
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-group has-feedback">
               <input type="text" class="form-control" id="datepicker" placeholder="Check in" id="input">
               <img src="image/travo/check-in.png" id="input_img">
            </div>
         </div>
        <div class="col-md-3">
          <div class="form-group has-feedback">
             <input type="text" class="form-control" id="datepickerdate" placeholder="Check in" id="input">
             <img src="image/travo/check-in.png" id="input_img">
          </div>
        </div>
       <div class="col-md-2">
          <button class="btn btn-default srch-btn1 btn-sm" type="submit"  aria-haspopup="true" style="background-color: red; color: white;">
                   Find Vacations
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
    <!-- Car Collapse -->
  <form class='search-form' action="travo.php" method="post">
  <div class="row tabcontent" id="car">
    <div class="col-md-12">
      <div class="row">
         <div class="col-md-4">
             <div class="form-group has-feedback">
                <input class='form-control' placeholder='Find cars' type='text' id="input" name="cars">
                <img src="image/travo/location.png" id="input_img">
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-group has-feedback">
               <input type="text" class="form-control" id="datepicker" placeholder="Check in" id="input">
               <img src="image/travo/check-in.png" id="input_img">
            </div>
         </div>
        <div class="col-md-3">
          <div class="form-group has-feedback">
             <input type="text" class="form-control" id="datepickerdate" placeholder="Check in" id="input">
             <img src="image/travo/check-in.png" id="input_img">
          </div>
        </div>
       <div class="col-md-2">
          <button class="btn btn-default srch-btn1 btn-sm" type="submit" aria-haspopup="true" style="background-color: red; color: white;" name="car">
                   Find Cars
          </button>

        </div>
      </div>
    </div>
  </div>
</form>   
</div>  
</div>

            <!--  ___________________________TODAYS TOP DEALS SECTION__________________________ -->


<div class="container">
  <div class="row">
    <div class="col-md-12 today">
      <h3 class="heading-deal" data-aos="fade-left">Today's Top Deals </h3>
      <p class="p-heading">Latest Deals For You</p>
      <img src="image/travo/dot-line.png" class="img-dot">
    </div>
  </div>
    <div class="row slider1">
      <div class="col-md-12">
          <div class="deal-lahore">
              <div class="star">
                <img src="image/travo/five.png">
              </div>
              <div class="disc">
                <h2 class="dis-text"> 40</h2>
              </div>
                <h6 class="heading-destination">Lahore Pakistan  </h6>
                <li class="p-destination"><img src="image/travo/red.png"> Booking period: 4 July - 31 July 2021</li>
                <li class="p-destination"><img src="image/travo/red.png"> 2 Days - 3 Nights</li>
          </div>
        <div class="deal-mumbai">
          <div class="star">
            <img src="image/travo/five.png">
          </div>
          <div class="disc">
            <h2 class="dis-text"> 28</h2>
          </div>
          <h6 class="heading-destination">Mumbai India  </h6>
          <li class="p-destination"><img src="image/travo/red.png"> Booking period: 4 July - 31 July 2021</li>
          <li class="p-destination"><img src="image/travo/red.png"> 2 Days - 3 Nights</li>
        </div>
        </div>

        <div class="col-md-12">
            <div class="deal-dhelli">
            <div class="star">
              <img src="image/travo/five.png">
             </div>
             <div class="disc">
                  <h2 class="dis-text"> 20</h2>
             </div>
                  <h6 class="heading-destination">Dhelli India  </h6>
                  <li class="p-destination"><img src="image/travo/red.png"> Booking period: 4 July - 31 July 2021</li>
                  <li class="p-destination"><img src="image/travo/red.png"> 2 Days - 3 Nights</li>
            </div>

            <div class="deal-islamabad">
             <div class="star">
              <img src="image/travo/five.png">
             </div>
             <div class="disc">
                  <h2 class="dis-text"> 30</h2>
             </div>
                  <h6 class="heading-destination">Islamabad Pakistan  </h6>
                  <li class="p-destination"><img src="image/travo/red.png"> Booking period: 4 July - 31 July 2021</li>
                  <li class="p-destination"><img src="image/travo/red.png"> 2 Days - 3 Nights</li>
            </div>
        </div>
        <div class="col-md-12">
            <div class="deal-lahore">
             <div class="star">
              <img src="image/travo/five.png">
             </div>
             <div class="disc">
                  <h2 class="dis-text"> 10</h2>
             </div>
                  <h6 class="heading-destination">Lahore Pakistan  </h6>
                  <li class="p-destination"><img src="image/travo/red.png"> Booking period: 4 July - 31 July 2021</li>
                  <li class="p-destination"><img src="image/travo/red.png"> 2 Days - 3 Nights</li>
            </div>

            <div class="deal-lahore">
               <div class="star">
              <img src="image/travo/five.png">
             </div>
             <div class="disc">
                  <h2 class="dis-text"> 10</h2>
             </div>
                  <h6 class="heading-destination">Lahore Pakistan  </h6>
                  <li class="p-destination"><img src="image/travo/red.png"> Booking period: 4 July - 31 July 2021</li>
                  <li class="p-destination"><img src="image/travo/red.png"> 2 Days - 3 Nights</li>
            </div>
        </div>
        <div class="col-md-12">
            <div class="deal-lahore">
            <div class="star">
              <img src="image/travo/five.png">
             </div>
             <div class="disc">
                  <h2 class="dis-text"> 25</h2>
             </div>
                  <h6 class="heading-destination">Lahore Pakistan  </h6>
                  <li class="p-destination"><img src="image/travo/red.png"> Booking period: 4 July - 31 July 2021</li>
                  <li class="p-destination"><img src="image/travo/red.png"> 2 Days - 3 Nights</li>
            </div>
            <div class="deal-mumbai">
             <div class="star">
              <img src="image/travo/five.png">
             </div>
             <div class="disc">
                  <h2 class="dis-text"> 50</h2>
             </div>
                  <h6 class="heading-destination">Mumbai India  </h6>
                  <li class="p-destination"><img src="image/travo/red.png"> Booking period: 4 July - 31 July 2021</li>
                  <li class="p-destination"><img src="image/travo/red.png"> 2 Days - 3 Nights</li>
            </div>
        </div>
    </div> 
        <div class="b" align="center">
                  <button class="btn-default btn-destination-index dealleft"><img src="image/travo/larrow.png"></button> <button class="btn-default btn-destination-index">VIEW ALL</button> <button class="btn-default btn-destination-index dealright"> <img src="image/travo/rarrow.png"></button>
        </div>
</div>

<!-- ________________________Blue banner starts________________________ -->



  <div class="container-fluid banner-image">
      <div class="row">
        <div class="col-md-6 col-xs-6 col-sm-6">
              <li class="nav-item">
              <a href="" class="nav-link logo1">
              <img src="image//travo/logo.png"> <span class="rpspan1">Urban Accomodation</span> </a>
              </li>
        </div>
        <div class="col-md-6 col-xs-6 col-sm-6 blue-text" data-aos="fade-left">
              <button class="btn btn-danger btn-offer btn-font">OFFER</button>
              <h2 class="offer-text">Up to $300 Cashback* </h2>
              <h5 class="offer-text1">on International Flights</h5>
              <button class="btn btn-image d-md-block d-none"></button>
        </div>
      </div>
  </div>

  <!-- __________________________TOP DESTINATATION SECTION______________________ -->

<div class="container">
      <h3 class="heading-deal" data-aos="fade-down">Top Destination To Urban Accomodation. </h3>
      <p class="p-heading">A DIFFERENT WAY TO TRAVEL</p>
      <img src="image/travo/dot-line.png" class="img-dot">
      <div class="row">
            <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/travo/top.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
            </div>
          <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/travo/travo-1.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
          </div>
          <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/02-index/agra.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
          </div>
          <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/travo/top-3.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
          </div>
      </div>
      <div class="row">
          <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/travo/top-4.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
          </div>
                  <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/travo/top-5.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
          </div>
          <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/travo/top-7.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
          </div>
          <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/travo/top-8.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
          </div>
        </div>

        <!-- VIEW MORE DESTINATTIONS COLLAPSE -->
        <div class="collapse" id="demo">
                <div class="row">
            <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/travo/top.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
            </div>
          <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/travo/travo-1.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
          </div>
          <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/02-index/agra.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
          </div>
          <div class="col-md-3 col-xs-3 col-sm-3" data-aos="flip-left">
                  <img src="image/travo/top-3.png" class="destination">
                  <h6 class="heading-destination">Top Destination To Urban Accomodation. </h6>
                  <p class="p-destination">A DIFFERENT WAY TO TRAVEL</p>
          </div>
      </div>
        </div>

        <div class="b" align="center">
                  <button class="btn-default btn-destination-bd" data-toggle="collapse" data-target="#demo">More Destinations</button>
        </div>
</div>


<!-- __________________START TRAVEL PLANNING HERE_____________________ -->



<div class="travel-planning">
            <div class="container">
                  <div class="row">
                      <div class="col-md-6 col-sm-12 col-xs-12 travel">
                          <h3 class="heading-destination1" data-aos="fade-right">Start your travel planning here </h3>
                          <p class="p-destination1">SEARCH HOTELS & RENTAL CARS</p>
                          <img src="image/travo/dot-line.png">
                          
                      </div>
                       <div class="col-md-6 col-sm-12 col-xs-12" align="right">
                      <button class="btn  butn-deal1 left">
                          <img src="image/travo/larrow.png" class="arow-left ">
                      </button> 
                      <button class="btn  butn-deal1 right">
                          <img src="image/travo/rarrow.png" class="arow-left ">
                      </button>
                  </div>
                </div>
            </div>
          <div class="container-fluid" >
              
              <div class="row slider" style="margin-left: 20%;">
                  <div class="img-lahore">      
                      <img src="image/travo/icons.png" alt="icons" class="img-fluid icon" />
                      <img src="image/travo/star-1.png" alt="rating" class="img-fluid rating">
                      <h3 class="heading-new" style="margin-left: 20px;"> Lahore Pakistan</h3>
                      <ul class="list">
                          <li>Booking Period:4 July - 31 July 2021</li>
                      </ul>
                  </div>
                  <div class="img-islamabad">      
                    <img src="image/travo/icons.png" alt="icons" class="img-fluid icon" />
                      <img src="image/travo/star-1.png" alt="rating" class="img-fluid rating">
                      <h3 class="heading-new"> Islamabad Pakistan</h3>
                      <ul class="list">
                          <li>Booking Period:4 July - 31 July 2021</li>
                      </ul>
                  </div>
                  <div class="img-agra">      
                     <img src="image/travo/icons.png" alt="icons" class="img-fluid icon" />
                      <img src="image/travo/star-1.png" alt="rating" class="img-fluid rating">
                      <h3 class="heading-new"> Agra India</h3>
                      <ul class="list">
                          <li>Booking Period:4 July - 31 July 2021</li>
                      </ul>
                  </div>
                  <div class="img-mumbai">      
                       <img src="image/travo/icons.png" alt="icons" class="img-fluid icon" />
                      <img src="image/travo/star-1.png" alt="rating" class="img-fluid rating">
                      <h3 class="heading-new"> Mumbai India</h3>
                      <ul class="list">
                          <li>Booking Period:4 July - 31 July 2021</li>
                      </ul>
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
        <button type="button" class="btn btn-outline-danger btn-footer1">DUBAI</button>
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
          <div class="col-md-2 col-sm-12 col-xs-12 blog footer-txt1">
            <li class="d-md-block d-none"> <img src="<?php echo base_url(); ?>assets/image/travo/demo.jpg" style="width:  90px; height: 70px; margin-left: 10px;"> </li>
            <p class="d-sm-block d-md-none" style="width:273px">Integer amet quam eleifend, commodo sem eget</p>
            <li class="footer-txt4 d-sm-block d-md-none"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> 31 July 2021</li>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 footer-txt3 footer-txt1 ">
            <p class="d-md-block d-none" style="width:223px">Integer amet quam eleifend, commodo sem eget</p>
            <li class="footer-txt4 d-md-block d-none"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> 31 July 2021</li> 
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







  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      <!-- calendar -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
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
  <!-- Tabs -->
  <script>
function openPage(pageName) {
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
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- calendar -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
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
                slidesToShow: 2
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

           $('.slider').slick({  
            slidesToShow: 3,
            arrows: false,
            variableWidth: true,
            infinite: true
            
        });

        $('.left').click(function(){
          $('.slider').slick('slickPrev');
        })

        $('.right').click(function(){
          $('.slider').slick('slickNext');
        })

      $('.slider-two').slick({
        infinte:true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth:true,
        arrows:false
      });
           $('.slider-one').slick({
        infinte:true,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth:true,
        arrows:false
      });

      $('.founderleft').click(function(){
          $('.slider-two').slick('slickPrev');
        })

      $('.founderright').click(function(){
        $('.slider-two').slick('slickNext');
      })

      $('.founderright').click(function(){
        $('.slider-one').slick('slickNext');
      })
    });
  
      </script>
      <script>
        $(".background").fadeShow({

// the aspect fill will be intact even when resizing the window
//only handy for full width / height slideshows, otherwise slows your page down
correctRatio: true,

// the slides will be shuffled before shown, get a unique slider each refresh
shuffle: true,

// milliseconds per slide
speed: 10000,

// images (urls) to create the slideshow with, array of strings
images: ['image/travo/travo.png', '2.jpg','3.jpg']

});
      </script>
</body>
</html>