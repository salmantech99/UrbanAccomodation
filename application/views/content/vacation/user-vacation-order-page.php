<!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->
<div class="contact-bg">
  <div class="container">
    <div class="row">
      <div class=" col-md-4 col-sm-12 col-xs-12">
        <h4 class="contact-us">Vacation Booking Page</h4>
      </div>
      <div class=" offset-md-5 col-md-3 d-md-block d-none">
        <button type="button" class="btn contact-btn"><span class="hotel">Vacation</span> <i class="fas fa-angle-right"></i>Vacation Booking</button>
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
      <form method="post" action="<?php echo site_url('Vacation/book_vacation_order?id='.$post->id);?>">
        <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Personal Details </li>
         <hr> 
        <div class="form-group row">
          <label for="staticEmail" class="col-md-3 harry col-form-label">*Name</label>
          <div class="col-md-6 col-sm-12">
            <input class="selin" type="text" name="fullname" required value="<?php echo $posts->register_name;?>">
          </div>
          <input type="hidden" name="vacation_id" value="<?php echo $vacation_id;?>" />
          <input type="hidden" name="vacation_name" value="<?php echo $post->vacation_name;?>" />
          <input type="hidden" name="vacation_location" value="<?php echo $post->location1;?>"/>
          <input type="hidden" name="vacation_type" value="<?php echo $post->vacation_type;?>"/>
          <input type="hidden" name="vacation_date" value="<?php echo $date;?>" />
          <input type="hidden" name="vacation_adult_quantity" value="<?php echo $adult_quantity;?>" />
          <input type="hidden" name="vacation_child_quantity" value="<?php echo $child_quantity;?>" />
          <input type="hidden" name="vacation_infant_quantity" value="<?php echo $infant_quantity;?>" />
          <input type="hidden" name="vacation_price" value="<?php echo $total_price;?>" />
          <input type="hidden" name="vacation_tax" value="<?php echo $tax;?>" />
          <input type="hidden" name="vacation_days" value="<?php echo $post->total_days;?>" />
          <input type="hidden" name="vacation_nights" value="<?php echo $post->total_nights;?>" />
          <input type="hidden" name="vacation_total_price" value="<?php echo $total_price+$tax;?>" />
          <input type="hidden" name="vacation_deposit" value="<?php echo ($total_price+$tax)/10;?>" />
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-3 harry col-form-label">* Phone Number</label>
          <div class="col-md-3 col-sm-12">
            <input class="selin" type="number" name="fnumber" required value="<?php echo $posts->phone_number;?>">
          </div>
          <label for="staticEmail" class="col-md-2 harry col-form-label"> *Email</label>
          <div class="col-md-4 col-sm-12">
            <input class="selin" type="email" name="email" value="<?php echo $posts->register_email;?>" required>
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
          <img src="<?php echo base_url('uploads/'.$post->vacational_place_image); ?>" class="order-img">
        </div>
        <div class="col-md-8">
          <h5 class="leela-font-ord"><?php echo $post->vacation_name;?></h5>
          <li class="depart-font-ord"><i class="fas fa-map-marker-alt mark"></i> <?php echo $post->location1;?></li>
          <img src="<?php echo base_url(); ?>assets/image/travo/star-1.png">
        </div>
      </div>
      <hr>
      <li class="depart-font-stay">Fare Estimate Rate <span class="stay">USD $<?php echo $total_price;?></span></li>
      <li class="depart-font-stay">Fare Tax Rate <span class="stay">USD $<?php echo $tax;?></span></li>
      <li class="depart-font-stay">Fare Total<span class="stay">USD $<?php echo $total_price+$tax;?></span></li>
      <li class="depart-font-stay">Vacation Type<span class="stay"><?php echo $post->vacation_type;?></span></li>
      <div class="bbb-hotel-stay">
        <li class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> CAR </li>
        <div class="bbb-hotel-stay-one">
          <li class="junior bed-red">Deposit Now<span class="stay">$<?php echo ($total_price+$tax)/10;?></span></li>
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