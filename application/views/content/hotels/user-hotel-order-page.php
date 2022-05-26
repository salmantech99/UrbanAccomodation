  <!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->
<div class="contact-bg">
  <div class="container">
    <div class="row">
      <div class=" col-md-4 col-sm-12 col-xs-12">
        <h2 class="contact-us" data-aos="fade-left">Hotel Booking Page</h2>
      </div>
      <div class=" offset-md-5 col-md-3 d-md-block d-none">
        <button type="button" class="btn contact-btn"><a href="<?php echo site_url('Hotels/hotel_search/'); ?>"><span class="hotel">Hotels </span></a><i class="fas fa-angle-right"></i> Hotel Booking</button>
      </div>
    </div>
  </div>
</div> 
 <!--  _________________________DELHI TO MUMBAI___________________________ -->
<div class="container one-way-margin">
  <form action="<?php echo site_url('Hotels/modify_search_by_form/'); ?>" method="post">
    <div class="row search_modify_work">
      <div class="col-md-3 one-way">
        <div class="row">
          <div class="col-2">
            <i class="fas fa-hotel hotel_single_icon"></i>
          </div>
          <div class="col-10 pencil1">
            <i class="fas fa-pencil-alt pencil"></i>
            <span class="one-way-text">Hotel Name<br><span class="delhi-font"><?php echo $post->hotel_name;?></span></span>
          </div>
        </div>
      </div>
      <div class="col-md-4 one-way">
        <div class="row">
          <div class="col-1">
            <img src="<?php echo base_url(); ?>assets/image/car-single/calender.png" class="car-img">
          </div>
          <div class="col-4 pencil1">
            <span class="one-way-text">CHECK IN <br><span class="delhi-font"><input class="feature-from" id="datepicker" type="" name="modify_checkin" value="<?php echo $post->featured_from;?>"></span></span>
          </div>
          <div class="col-1">
            <img src="<?php echo base_url(); ?>assets/image/car-single/calender.png" class="car-img">
          </div>
          <div class="col-5 pencil1">
            <span class="one-way-text">CHECK OUT <br><span class="delhi-font"><input class="feature-from" id="datepickerdate" type="" name="modify_checkout" value="<?php echo $post->featured_to;?>"></span></span>
          </div>
        </div>
      </div>
      <div class="col-md-5 one-way">
        <div class="row">
          <div class="col-3 pencil1">
            <span class="one-way-text">ADULT<br><span class="delhi-font"><input class="feature-from" type="" name="" value="<?php echo $post->max_adults;?>"></span></span>
          </div>
          <div class="col-3 pencil1">
            <span class="one-way-text">CHILD<br><span class="delhi-font"><input class="feature-from" type="" name="" value="<?php echo $post->max_children;?>"></span></span>
          </div>
          <div class="col-6">
            <button class="btn btn-default modify-search">MODIFY SEARCH</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<!--  _______________________WELCOME TO THE ONLINE PASSENGER_______________________________ -->
<div class="container welcome-margin">
  <div class="row">
    <div class="col-md-8">
      <h3 class="welcome" data-aos= "fade-left">Welcome to the online Passengers and Payments</h3>
      <p class="welcome-d">Quisque vel finibus ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam sagittis venenatis lobortis. Ut tortor erat, vestibulum vitae ipsum non, rutrum rutrum lectus. Curabitur pretium sed enim quis dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Nulla nec ultrices risus.</p>
      <!-- HTML FORM -->
      <form method="post" action="<?php echo site_url('Hotels/book_hotel?id='.$post->id); ?>">
        <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png">User Personal Details </li>
         <hr> 
        <div class="form-group row form-label">
          <label for="staticEmail" class="col-md-3 harry col-form-label">*Name</label>
          <div class="col-md-3 col-sm-12">
            <input class="selin" type="text" name="fullname" required="required" value="<?php echo $posts->register_name;?>">
          </div>
          <input type="hidden" name="hotel_id" value="<?php echo $post->hotel_id;?>" />
          <input type="hidden" name="hotel_name" value="<?php echo $post->hotel_name;?>" />
          <input type="hidden" name="hotel_location" value="<?php echo $post->location;?>" />
          <input type="hidden" name="hotel_tax" value="<?php echo $post->price/10;?>" />
          <input type="hidden" name="hotel_total_price" value="<?php echo ($post->price/10)+$post->price;?>" />
          <input type="hidden" name="hotel_deposit_price" value="<?php echo (($post->price/10)+$post->price)/10;?>" />
        </div>
        <div class="form-group row form-label">
          <label class="col-md-3 harry col-form-label">* Phone Number</label>
          <div class="col-md-3 col-sm-12">
            <input class="selin" type="number" name="fnumber" required="required" value="<?php echo $posts->phone_number;?>">
          </div>
          <label for="staticEmail" class="col-md-1 harry col-form-label"> Email</label>
          <div class="col-md-5 col-sm-12">
            <input class="selin" type="text" name="email" value="<?php echo $posts->register_email;?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="Address" class="col-md-3 harry col-form-label">* Address</label>
          <div class="col-md-9 col-sm-12">
            <input class="selin" type="text" name="address" required value="<?php echo $posts->address1;?>">
          </div> 
        </div>
        <div class="row">
          <div class="col-md-3" data-aos= "flip-up">
            <button class="btn btn-default sub-btn" type="submit">SUBMIT</button>
          </div>
        </div>
      </form>
    </div>
    <!-- ______________PHP FOR INSERT VALUES_____________ -->
    <div class="col-md-4 ">
      <li class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> BOOKING SUMMARY</li>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo base_url('uploads/'.$post->hotel_image); ?>" class="order-img">
        </div>
        <div class="col-md-8">
          <h5 class="leela-font-ord"><?php echo $post->hotel_name;?></h5>
          <li class="depart-font-ord"><i class="fas fa-map-marker-alt mark"></i><?php echo $post->location;?></li>
          <img src="<?php echo base_url(); ?>assets/image/travo/star-1.png">
        </div>
      </div>
      <hr>
      <li class="depart-font-stay">Check In <span class="stay"><?php echo $post->featured_from;?></span></li>
      <li class="depart-font-stay">Check Out <span class="stay"><?php echo $post->featured_to;?></span></li>
      <li class="depart-font-stay">Total Stay <span class="stay"><?php
              $date1 = date_create($post->featured_from);
              $date2 = date_create($post->featured_to);
              //difference between two dates
              $diff = date_diff($date1,$date2);
              //count days
               echo ' '.$diff->format("%d days");
              ?>
        </span>
      </li>
      <li class="depart-font-stay">Fare Rate <span class="stay">USD $<?php echo $post->price;?></span></li>
      <li class="depart-font-stay">Tax Rate <span class="stay">USD $<?php echo $post->price/10;?></span></li>
      <li class="depart-font-stay">Total Price Rate <span class="stay">USD $<?php echo ($post->price/10)+$post->price;?></span></li>
      <div class="bbb-hotel-stay">
        <li class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> ROOM </li>
        <div class="bbb-hotel-stay-one">
          <li class="junior bed-red">Deposit Now<span class="stay">$ <?php echo (($post->price/10)+$post->price)/10;?></span></li>
        </div>
      </div>
    </div>
    <div class="col-md-8"></div>
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
