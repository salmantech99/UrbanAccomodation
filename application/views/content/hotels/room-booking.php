<!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->
<div class="contact-bg">
  <div class="container">
    <div class="row">
      <div class=" col-md-4 col-sm-12 col-xs-12">
        <h2 class="contact-us" data-aos="fade-left">Room Detailed</h2>
      </div>
      <div class=" offset-md-5 col-md-3 d-md-block d-none">
        <button type="button" class="btn contact-btn"><a href="<?php echo site_url('Hotels/hotel_search/'); ?>"><span class="hotel-single-tag">Hotels </span></a><i class="fas fa-angle-right"></i> Room Single</button>
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
        <img src="<?php echo base_url('uploads/'.$post->hotel_image); ?>" class="single-img">
      </div>
      <div id="overview">      
        <li class="star-reviews"><img src="<?php echo base_url(); ?>assets/image/hotel-single/star.png" class="star-r"> 360 Reviews</li>
        <hr>
        <li class="location-h"><img src="<?php echo base_url(); ?>assets/image/hotel-single/yellow.png"> Hotel Name</li>
        <p class="location-set"><?php echo $post->hotel_name;?></p>
        <li class="location-h"><img src="<?php echo base_url(); ?>assets/image/hotel-single/yellow.png"> Location</li>
        <p class="location-set"><?php echo $post->location;?></p>
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
      </div>
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
      <hr>
    </div>
    <!-- _____SIMILAR SEARCHES SECTION____ -->
    <div class="col-md-4">
      <div class="bbb">
        <h4>
          <p class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png">Similar Listings<button aria-expanded="true" class="test">
            <svg viewBox="0 0 10 10">
              <rect class="vert" height="8" width="2" y="1" x="4"/>
              <rect height="2" width="8" y="4" x="1"/>
            </svg> 
          </button> </p>
        </h4>
        <div>
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
      </div>
      <a href=""> <button type="button" class="btn book-hotel"><a href="<?php echo site_url('Car/car_show/'); ?>"><?php echo anchor('Hotels/hotel_order?id='.$post->id, 'BOOK ROOM NOW',array('class' => 'anchor_tag')); ?></a></button>
    </div>
  </div>
</div>
