<!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->
<div class="contact-bg">
  <div class="container">
    <div class="row">
      <div class=" col-md-4 col-sm-12 col-xs-12">
        <h2 class="contact-us" data-aos="fade-left">Hotel Detailed Single</h2>
      </div>
      <div class=" offset-md-5 col-md-3 d-md-block d-none">
        <button type="button" class="btn contact-btn"><a href="<?php echo site_url('Hotels/hotel_search/'); ?>"><span class="hotel">Hotels </span></a><i class="fas fa-angle-right"></i> Hotel Single</button>
      </div>
    </div>
  </div>
</div>
 <!--  _________________________DELHI TO MUMBAI___________________________ -->
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
        <p><span class="hotel-name-heading"><?php echo $post->hotel_name;?><span class="location nws"><img src="<?php echo base_url(); ?>assets/image/hotel-single/location.png" class="star-r"><span class="location-set"><?php echo $post->location;?></span></span></p>
        <li class="location-h">
          <hr><img src="<?php echo base_url(); ?>assets/image/hotel-single/yellow.png"> Location</li>
        <p class="location-set"><?php echo $post->address_location;?></p>
        <li class="location-h"><img src="<?php echo base_url(); ?>assets/image/hotel-single/yellow.png"> Room Amenities</li>
        <p class="location-set"><?php echo $post->amnesty;?></p>
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
      <?php foreach($posts as $posts){?>
      <div class="rw-marg">
        <div class="bb-room">
          <h6 class="room-a">
            AVAILABLE ROOMS 
          </h6>
          <div class="row" style="margin-bottom: 15px;">
            <div class="col-md-6 col-sm-12"">
              <div class="row">
                <div class="col-md-6 col-sm-12"">
                  <img src="<?php echo base_url('uploads/'.$post->hotel_image); ?>" class="room-img">
                </div>
                <div class="col-md-6 col-sm-12"">
                  <h6><?php echo $posts->room_type;?></h6>
                  <hr>
                  <p class="adulty">ADULTS <?php echo $posts->max_adults;?> CHILD <?php echo $posts->max_children;?></p>
                  <div class="row">
                    <div class="col-md-6 col-sm-12"">
                      <p class="beds">ROOMS</p>
                    </div>
                    <div class="col-md-6 col-sm-12"">
                      <select class="form-control mr-option-mr">Rooms
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <input type="hidden" name="hotel_id" value="<?php echo $posts->hotel_id;?>" />
                  <div class="row">
                    <div class="col-md-6 col-sm-12"">
                      <p class="beds">BEDS</p>
                    </div>
                    <div class="col-md-6 col-sm-12"">
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
            <div class="col-md-6 col-sm-12"">
              <div class="row">
                <div class="col-md-3 col-sm-12">
                  <a href=""> <button type="button" class="btn details"><a href=""><?php echo anchor('Hotels/room_single?id='.$posts->id, 'Details',array('class' => 'anchor_tag1')); ?></a></button>
                  <button class="btn avail" type="button">Availability</button>
                </div>
                <div class="col-md-4 col-sm-12"">
                  <h6 class="dollars">USD <span class="sixty-five">$<?php echo $posts->price;?></span></h6>
                </div>
                <div class="col-md-5 col-sm-12"">
                  <a href=""> <button type="button" class="btn book-hotel-one"><a href="<?php echo site_url('Car/car_show/'); ?>"><?php echo anchor('Hotels/hotel_order?id='.$posts->id, 'BOOK NOW',array('class' => 'anchor_tag')); ?></a></button> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
          <?php } ?>
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
          <img src="<?php echo base_url(); ?>assets/image/hotel-single/demo.png" style="height: 80px !important; width: 80px !important;">
        </div>
        <div class=" offset-md-1 col-md-10 chat-box">
          <li class="location-set hello-star"><img src="<?php echo base_url(); ?>assets/image/hotel-single/five.png" class="star-r"> -3 Star</li>
          <p class="location-set">Maecenas mollis lacinia enim ut commodo. Proin ullamcorper ultriceos risus non aliquam 
            Nullam ac neque ac felis.</p>
          <li class="nargis">NARGIS FAKRI<span class="two-days"> - 2 DAY AGO</span><span class="reply"><i class="fa fa-reply repy-icon"></i>  REPLY</span></li>
        </div>
        <div class="col-md-1 chatt">
          <img src="<?php echo base_url(); ?>assets/image/hotel-single/demo.png" style="height: 80px !important; width: 80px !important;">
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
    </div>
  </div>
</div>
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
