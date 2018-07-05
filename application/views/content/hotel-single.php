  <!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->
<?php foreach ($hotels as $hotel): ?>
  <div class="container-fluid contact-bg">
  	<div class="row">
  		<div class=" offset-md-3 col-md-3 col-sm-12 col-xs-12">
  			<h2 class="contact-us">Hotel Detailed Single</h2>
  		</div>
  		<div class=" offset-md-3 col-md-3 d-md-block d-none">
  			<button type="button" class="btn contact-btn"><span class="hotel">Hotels </span> <i class="fas fa-angle-right"></i> Hotel Single</button>
  		</div>
  	</div>
  </div>

 <!--  _________________________DELHI TO MUMBAI___________________________ -->
<div class="container one-way-margin">
   <div class="row">
     <div class="col-md-3 one-way">
       <div class="row">
         <div class="col-2">
            <img src="<?php echo base_url(); ?>assets/image/car-single/car.png" class="car-img">
         </div>
         <div class="col-10 pencil1">
           <i class="fas fa-pencil-alt pencil"></i>
           <span class="one-way-text">ONE WAY <br><span class="delhi-font">DELHI TO MUMBAI</span></span>
         </div>
       </div>
     </div>
     <div class="col-md-4 one-way">
        <div class="row">
         <div class="col-1">
            <img src="<?php echo base_url(); ?>assets/image/car-single/calender.png" class="car-img">
         </div>
         <div class="col-4 pencil1">
           <span class="one-way-text">DEPARTURE <br><span class="delhi-font"><span class="twenty">27</span> JUL THU</span></span>
         </div>
          <div class="col-1">
            <img src="<?php echo base_url(); ?>assets/image/car-single/arrow.png" class="car-img1">
         </div>
         <div class="col-1">
            <img src="<?php echo base_url(); ?>assets/image/car-single/calender.png" class="car-img">
         </div>
         <div class="col-5 pencil1">
           <span class="one-way-text">RETURN <br><span class="delhi-font"><span class="twenty">30</span> JUL THU</span></span>
         </div>
       </div>
     </div>
     <div class="col-md-5 one-way">
           <div class="row">
              <div class="col-2 pencil1">
                 <span class="one-way-text">ADULT<br><span class="delhi-font">01 PER</span></span>
              </div>
              <div class="col-2 pencil1">
                 <span class="one-way-text">CHILD<br><span class="delhi-font">- - - - -</span></span>
              </div>
               <div class="col-2 pencil1">
                 <span class="one-way-text">INFANT<br><span class="delhi-font">- - - - -</span></span>
              </div>
              <div class="col-6">
                <button class="btn btn-default modify-search">MODIFY SEARCH</button>
              </div>
          </div>
     </div>
   </div>
</div>

<!-- ___________________________OVERVIEW LOCATION____________________________ -->

<div class="container">
  <div class="row">
    <div class="col-md-8">
          <div class="col-md-12 overview">
      <ul>
        <li>
          <a href="#overview" class="over"> OVERVIEW</a> 
          <a href="#room-type" class="over"> ROOM TYPE 1 <img src="<?php echo base_url(); ?>assets/image/hotel-single/arrow-up.png"></a>
          <a href="#location" class="over"> LOCATION</a>
          <a href="#policies" class="over"> POLICIES</a>
          <a href="#user-reviews" class="over"> USER REVIEWS</a></li>
      </ul>
    </div>


<div class="col-md-12">
      <img src="<?php echo base_url(); ?>assets/backend/image/<?php echo $hotel['hotel_image']; ?>" class="single-img">
    </div>
    <div id="overview">
      
      <li class="star-reviews"><img src="<?php echo base_url(); ?>assets/image/hotel-single/star.png" class="star-r"> 360 Reviews</li>
      <p class="hayyat-font"><?php echo $hotel['hotel_name']; ?><span class="location nws"><img src="<?php echo base_url(); ?>assets/image/hotel-single/location.png" class="star-r"> <?php echo $hotel['hotel_area']; ?> </span></p>
      <hr>
      <li class="location-h"><img src="<?php echo base_url(); ?>assets/image/hotel-single/yellow.png"> Location</li>
      <p class="location-set">Set in the very heart and soul of the Coromandel Coast over 44 acres and built over the ramparts of a Dutch castle is the Vivanta by Taj Fisherman's Cove. </p>
      <li class="location-h"><img src="<?php echo base_url(); ?>assets/image/hotel-single/yellow.png"> Room Amenities</li>
      <p class="location-set">Set in the very heart and soul of the Coromandel Coast over 44 acres and built over the ramparts of a Dutch castle is the Vivanta by Taj Fisherman's Cove. </p>
      <li class="location-h"><img src="<?php echo base_url(); ?>assets/image/hotel-single/yellow.png"> Hotel Facilities</li>
      <p class="location-set">Set in the very heart and soul of the Coromandel Coast over 44 acres and built over the ramparts of a Dutch castle is the Vivanta by Taj Fisherman's Cove. </p>
      <li class="location-h"><img src="<?php echo base_url(); ?>assets/image/hotel-single/yellow.png"> Dining</li>
      <p class="location-set">Set in the very heart and soul of the Coromandel Coast over 44 acres and built over the ramparts of a Dutch castle is the Vivanta by Taj Fisherman's Cove. </p>
      <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Facilities Offered Here </li>
        <hr>
        <div class="row park-margin">
          <div class="col-md-2">
            <img src="<?php echo base_url(); ?>assets/image/hotel-single/car-p.png" class="park-img">
            <h5 class="parking-font1">Free Parking</h5>
          </div>
           <div class="col-md-2">
            <img src="<?php echo base_url(); ?>assets/image/hotel-single/breakfast.png" class="park-img">
            <h5 class="parking-font1">Free Breakfast</h5>
          </div>
           <div class="col-md-2">
            <img src="<?php echo base_url(); ?>assets/image/hotel-single/swimming.png" class="park-img">
            <h5 class="parking-font1">Swimming Pool</h5>
          </div>
           <div class="col-md-2">
            <img src="<?php echo base_url(); ?>assets/image/hotel-single/breakfast1.png" class="park-img">
            <h5 class="parking-font1">Free Breakfast</h5>
          </div>
           <div class="col-md-2">
            <img src="<?php echo base_url(); ?>assets/image/hotel-single/kit.png" class="park-img">
            <h5 class="parking-font1">Firstad List</h5>
          </div>
           <div class="col-md-2">
            <img src="<?php echo base_url(); ?>assets/image/hotel-single/more.png" class="park-img">
            <h5 class="parking-font1">More Amenties</h5>
          </div>
        </div>
        <li class="travel-seat-font" id="room-type"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Select Rooms </li>
        <hr>
        <li class="location-h"><img src="<?php echo base_url(); ?>assets/image/hotel-single/yellow.png"> Superior Charm Twin Bed 291 Sq FtEl Safe Comp Basic Wifi</li>
        <p class="location-set">Set in the very heart and soul of the Coromandel Coast over 44 acres and built over the ramparts of a Dutch castle is the Vivanta by Taj Fisherman's Cove. </p>
        </div>


<!-- ____________________AVAILABLE ROOMS_____________________ -->
<div class="rw-marg">
<div class="bb-room">
 <h6 class="room-a">
    AVAILABLE ROOMS
  </h6>
    <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo base_url(); ?>assets/image/travo/lahore.jpg" class="room-img">
        </div>
        <div class="col-md-6">
          <h6>JUNIOR SUITES</h6>
          <hr>
          <p class="adulty">ADULTS 3 CHILD 3</p>
          <div class="row">
            <div class="col-md-6">
              <p class="beds">ROOMS</p>
            </div>
            <div class="col-md-6">
              <select class="form-control mr-option-mr">Rooms
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
            <div class="row">
            <div class="col-md-6">
              <p class="beds">BEDS</p>
            </div>
            <div class="col-md-6">
              <select class="form-control mr-option-mr">Beds
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-3">
          <button class="btn details" type="button">Details</button>
          <button class="btn avail" type="button">Availability</button>
        </div>
        <div class="col-md-4">
          <h6 class="dollars">USD <span class="sixty-five">$651</span></h6>
        </div>
        <div class="col-md-5">
          <a href="<?php echo site_url('welcome/hotel_order/'.$hotel['id']); ?>"><button type="button" class="btn book-hotel-one">BOOK NOW</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ____________________AVAILABLE ROOMS END_____________________ -->
<!-- ____________________AVAILABLE ROOMS_____________________ -->
<div class="rw-marg">
<div class="bb-room">
 <h6 class="room-a">
    AVAILABLE ROOMS
  </h6>
    <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo base_url(); ?>assets/image/travo/lahore.jpg" class="room-img">
        </div>
        <div class="col-md-6">
          <h6>SUPERIOR DOUBLE</h6>
          <hr>
          <p class="adulty">ADULTS 4 CHILD 4</p>
          <div class="row">
            <div class="col-md-6">
              <p class="beds">ROOMS</p>
            </div>
            <div class="col-md-6">
              <select class="form-control mr-option-mr">Rooms
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
            <div class="row">
            <div class="col-md-6">
              <p class="beds">BEDS</p>
            </div>
            <div class="col-md-6">
              <select class="form-control mr-option-mr">Beds
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-3">
          <button class="btn details" type="button">Details</button>
          <button class="btn avail" type="button">Availability</button>
        </div>
        <div class="col-md-4">
          <h6 class="dollars">USD <span class="sixty-five">$171</span></h6>
        </div>
        <div class="col-md-5">
          <a href="<?php echo site_url('welcome/hotel_order/'); ?>"><button type="button" class="btn book-hotel-one">BOOK NOW</button></a>        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ____________________AVAILABLE ROOMS END_____________________ -->
<!-- ____________________AVAILABLE ROOMS_____________________ -->
<div class="rw-marg">
<div class="bb-room">
 <h6 class="room-a">
    AVAILABLE ROOMS
  </h6>
    <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo base_url(); ?>assets/image/travo/lahore.jpg" class="room-img">
        </div>
        <div class="col-md-6">
          <h6>ONE BED-ROOM</h6>
          <hr>
          <p class="adulty">ADULTS 3 CHILD 3</p>
          <div class="row">
            <div class="col-md-6">
              <p class="beds">ROOMS</p>
            </div>
            <div class="col-md-6">
              <select class="form-control mr-option-mr">Rooms
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
            <div class="row">
            <div class="col-md-6">
              <p class="beds">BEDS</p>
            </div>
            <div class="col-md-6">
              <select class="form-control mr-option-mr">Beds
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-3">
          <button class="btn details" type="button">Details</button>
          <button class="btn avail" type="button">Availability</button>
        </div>
        <div class="col-md-4">
          <h6 class="dollars">USD <span class="sixty-five">$551</span></h6>
        </div>
        <div class="col-md-5">
          <a href="<?php echo site_url('welcome/hotel_order/'); ?>"><button type="button" class="btn book-hotel-one">BOOK NOW</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ____________________AVAILABLE ROOMS END_____________________ -->

<!-- ____________________GOOGLE LOCATION_____________________ -->
<div id="location">
        <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Location </li>
        <hr>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13605.684162787991!2d74.34114004999999!3d31.512594000000004!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2s!4v1524725473843" class="google" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="policies">
        <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Hotel Policies </li>
        <hr>
        <li class="location-h"><img src="<?php echo base_url(); ?>assets/image/hotel-single/yellow.png"> Hotel Policy # 1</li>
        <p class="location-set">Set in the very heart and soul of the Coromandel Coast over 44 acres and built over the ramparts of a Dutch castle is the Vivanta by Taj Fisherman's Cove. </p>
        <li class="location-h"><img src="<?php echo base_url(); ?>assets/image/hotel-single/yellow.png"> Hotel Policy # 2</li>
        <p class="location-set">Set in the very heart and soul of the Coromandel Coast over 44 acres and built over the ramparts of a Dutch castle is the Vivanta by Taj Fisherman's Cove. </p>
      </div>
      <div id="user-reviews">
        <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> User Rating and Reviews </li>
        <hr>
        <div class="row four-point">
          <div class="col-md-2 parrot">
            <h3 class="forty-nine">4.9</h3>
            <p class="eight-reviews">8 REVIEWS</p>
          </div>
          <div class="col-md-5">
            <li class="value">VALUE FOR MONEY <span class="nws"><img src="<?php echo base_url(); ?>assets/image/hotel-single/one-star.png" class="star-r"> 4.9</span></li>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-5"></div>
                </div>
              </div>
              <br>
              <li class="value">LOCATION <span class="nws"><img src="<?php echo base_url(); ?>assets/image/hotel-single/one-star.png" class="star-r"> 4.3</span></li>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-6"></div>
                </div>
              </div>
              <br>
              <li class="value">FOOD <span class="nws"><img src="<?php echo base_url(); ?>assets/image/hotel-single/one-star.png" class="star-r"> 4.8</span></li>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-7"></div>
                </div>
              </div>

          </div>
                <div class="col-md-5">
       <li class="value">SERVICES <span class="nws"><img src="<?php echo base_url(); ?>assets/image/hotel-single/one-star.png" class="star-r"> 4.9</span></li>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-8"></div>
                </div>
              </div>
              <br>
              <li class="value">STAFF <span class="nws"><img src="<?php echo base_url(); ?>assets/image/hotel-single/one-star.png" class="star-r"> 4.3</span></li>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-9"></div>
                </div>
              </div>
              <br>
              <li class="value">CLEANINESS <span class="nws"><img src="<?php echo base_url(); ?>assets/image/hotel-single/one-star.png" class="star-r"> 4.8</span></li>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-1"></div>
                </div>
              </div>
          </div>
        </div>
      </div>
        <hr>
        <div class="row four-point">
          <div class="col-md-1">
            <img src="<?php echo base_url(); ?>assets/image/hotel-single/demo.png" style="height: 80px; width: 80px;">
          </div>
          <div class=" offset-md-1 col-md-10 chat-box">
            <li class="location-set hello-star"><img src="<?php echo base_url(); ?>assets/image/hotel-single/five.png" class="star-r"> -3 Star</li>
            <p class="location-set">Maecenas mollis lacinia enim ut commodo. Proin ullamcorper ultriceos risus non aliquam 
              Nullam ac neque ac felis.</p>
              <li class="nargis">NARGIS FAKRI<span class="two-days"> - 2 DAY AGO</span><span class="reply"><i class="fa fa-reply repy-icon"></i>  REPLY</span></li>
          </div>
            <div class="col-md-1 chatt">
             <img src="<?php echo base_url(); ?>assets/image/hotel-single/demo.png" style="height: 80px; width: 80px;">
          </div>
          <div class=" offset-md-1 col-md-10 chat-box chatt">
            <li class="location-set hello-star"><img src="<?php echo base_url(); ?>assets/image/hotel-single/five.png" class="star-r"> -3 Star</li>
            <p class="location-set">Maecenas mollis lacinia enim ut commodo. Proin ullamcorper ultriceos risus non aliquam 
              Nullam ac neque ac felis.</p>
              <li class="nargis">NARGIS FAKRI<span class="two-days"> - 2 DAY AGO</span><span class="reply"><i class="fa fa-reply repy-icon"></i>  REPLY</span></li>
          </div>
        </div>
    </div>
    <!-- _____SIMILAR SEARCHES SECTION____ -->
    <div class="col-md-4">
        <div class="bbb">
            <li class="search-border-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Search <a href="#"><img src="<?php echo base_url(); ?>assets/image/search-hotel/minus-red.png" class="minus"></a></li>
            <div class="search-tool">
              <input class="form-control search-tool1" type="text" placeholder="Search Here .." aria-label="Search">
          </div>
    </div>
      <div class="bbb">
              <li class="search-border-font-1"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Similar Listings <a href="#"><img src="<?php echo base_url(); ?>assets/image/search-hotel/minus.png" class="minus"></a></li>
             <div class="row syd-margin">
              <div class="col-md-4">
                <img src="<?php echo base_url(); ?>assets/image/hotel-single/tree.jpg" class="sydeny-img single-syd">
              </div>
              <div class="col-md-8">
                <h5 class="sydney">Radisson Blu Plaza 
                Hotel Sydney</h5>
                <li class="sydny"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> NSW 200, Austrlia</li>
              </div>
            </div>
              <div class="row">
              <div class="col-md-4">
                <img src="<?php echo base_url(); ?>assets/image/hotel-single/tree.jpg" class="sydeny-img single-syd">
              </div>
              <div class="col-md-8">
                <h5 class="sydney">Radisson Blu Plaza 
                Hotel Sydney</h5>
                <li class="sydny"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> NSW 200, Austrlia</li>
              </div>
            </div>
              <div class="row">
              <div class="col-md-4">
                <img src="<?php echo base_url(); ?>assets/image/hotel-single/tree.jpg" class="sydeny-img single-syd">
              </div>
              <div class="col-md-8">
                <h5 class="sydney">Radisson Blu Plaza 
                Hotel Sydney</h5>
                <li class="sydny"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> NSW 200, Austrlia</li>
              </div>
            </div>
              <div class="row">
              <div class="col-md-4">
                <img src="<?php echo base_url(); ?>assets/image/hotel-single/tree.jpg" class="sydeny-img single-syd">
              </div>
              <div class="col-md-8">
                <h5 class="sydney">Radisson Blu Plaza 
                Hotel Sydney</h5>
                <li class="sydny"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> NSW 200, Austrlia</li>
              </div>
            </div>
    </div>
    <button type="button" class="btn book-hotel">BOOK HOTEL NOW</button>
    </div>
  </div>
</div>
  <?php endforeach ?>
