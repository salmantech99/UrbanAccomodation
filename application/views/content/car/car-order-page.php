<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
<!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->
  <div class="contact-bg">
    <div class="container">
      <div class="row">
        <div class=" col-md-4 col-sm-12 col-xs-12">
          <h2 class="contact-us">Car Booking Page</h2>
        </div>
        <div class=" offset-md-5 col-md-3 d-md-block d-none">
          <button type="button" class="btn contact-btn"><span class="hotel">Cars </span> <i class="fas fa-angle-right"></i>Car Booking</button>
        </div>
      </div>
    </div>
  </div>
<!--  _________________________LAHORE TO ISLAMABAD___________________________ -->
<!--  _______________________WELCOME TO THE ONLINE PASSENGER_______________________________ -->
<div class="container welcome-margin">
  <div class="row">
    <div class="col-md-8">
      <h3 class="welcome" data-aos= "fade-left">Welcome to the online Passengers and Payments</h3>
      <p class="welcome-d">Quisque vel finibus ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam sagittis venenatis lobortis. Ut tortor erat, vestibulum vitae ipsum non, rutrum rutrum lectus. Curabitur pretium sed enim quis dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Nulla nec ultrices risus.</p>
      <!-- HTML FORM --> 
      <form method="post" action="<?php echo site_url('Car/book_car_order?id='.$post->id);?>">
        <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Personal Details </li>
         <hr> 
        <div class="form-group row">
          <label for="staticEmail" class="col-md-3 harry col-form-label">*Name</label>
          <div class="col-md-6 col-sm-12">
          <input class=" selin" type="text" name="fullname" required pattern="[A-Za-z]{3,16}" title="*Please enter the correct Name">
          </div>
           <input type="hidden" name="car_id" value="<?php echo $post->id;?>" />
           <input type="hidden" name="car_name" value="<?php echo $post->Car_name;?>" />
           <input type="hidden" name="car_booking_pickup" value="<?php echo $book_pickup;?>" />
           <input type="hidden" name="car_booking_dropoff" value="<?php echo $book_dropoff_place;?>" />
           <input type="hidden" name="car_book_pickupdate" value="<?php echo $book_pickupdate;?>" />
           <input type="hidden" name="car_book_pickuptime" value="<?php echo $book_pickuptime;?>" />
           <input type="hidden" name="car_book_dropoffdate" value="<?php echo $book_dropoffdate;?>" />
           <input type="hidden" name="car_book_dropofftime" value="<?php echo $book_dropofftime;?>" />
           <input type="hidden" name="car_booking_price" value="<?php echo $price;?>" />
           <input type="hidden" name="car_booking_tax" value="<?php echo $tax;?>" />
           <input type="hidden" name="car_booking_total_price" value="<?php echo $tax+$price;?>" 
           />
           <input type="hidden" name="car_booking_deposit" value="<?php echo ($tax+$price)/10;?>" 
           />
          <input type="hidden" name="car_type" value="<?php echo $post->car_type;?>" />
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-3 harry col-form-label">* Phone Number</label>
          <div class="col-md-3 col-sm-12">
          <input type="text" class="selin" name="fnumber" placeholder="Number" data-inputmask="'mask': '0399-99999999'" required=""  type = "number" maxlength = "12">

          </div>
          <label for="staticEmail" class="col-md-2 harry col-form-label"> Email</label>
          <div class="col-md-4 col-sm-12">
          <input type="email" class="selin"  name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Your email should be e.g 'salman@gmail.com'"/>
          </div>
        </div>
        <div class="form-group row">
          <label for="Address" class="col-md-3 harry col-form-label">* Address</label>
          <div class="col-md-6 col-sm-12">
          <input class="selin" type="text" name="address" required pattern="[A-Za-z0-9'\.\-\s\,]{15,}" title="*Please enter correct Address">
          </div>
        </div>
        <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Offers </li>
         <hr>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-3 harry col-form-label">Coupon Code</label>
          <div class="col-md-9 col-sm-12">
            <input class="selin" type="text" name="coupon_id" maxlength="5" placeholder="12345">
          </div>
        </div>
        <div class="row">
          <div class="col-md-3" data-aos= "flip-up">
            <button class="btn btn-default sub-btn" type="submit" name="coupon">SUBMIT</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4 ">
      <li class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> BOOKING SUMMARY</li>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo base_url('uploads/'.$post->car_image); ?>" class="order-img">
        </div>
        <div class="col-md-8">
          <h5 class="leela-font-ord"><?php echo $post->Car_name;?></h5>
          <li class="depart-font-ord"><i class="fas fa-map-marker-alt mark"></i> <?php echo $book_pickup;?></li>
          <img src="<?php echo base_url(); ?>assets/image/travo/star-1.png">
        </div>
      </div>
      <hr>
      <li class="depart-font-stay">Pick-up<span class="stay"><?php echo $book_pickup;?></span></li>
      <li class="depart-font-stay">Drop-off<span class="stay"><?php echo $book_dropoff_place;?></span></li>
      <li class="depart-font-stay">Total Cars <span class="stay">1</span></li>
      <li class="depart-font-stay">Fare Estimate Rate <span class="stay">USD $<?php echo $price;?></span></li>
      <li class="depart-font-stay">Fare Tax Rate <span class="stay">USD $<?php echo $tax;?></span></li>
      <li class="depart-font-stay">Fare Total<span class="stay">USD $<?php echo $tax+$price;?></span></li>
      
      <div class="bbb-hotel-stay">
        <div class="bbb-hotel-stay-one">
          <li class="junior bed-red">Deposit Now<span class="stay">$<?php echo ($tax+$price)/10; ?></span></li>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $(":input").inputmask();

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