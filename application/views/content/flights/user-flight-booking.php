<!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->
<div class="contact-bg">
  <div class="container">
    <div class="row">
      <div class=" col-md-4 col-sm-12 col-xs-12">
        <h2 class="contact-us" data-aos="fade-left">Flight Booking Page</h2>
      </div>
      <div class=" offset-md-5 col-md-3 d-md-block d-none">
        <button type="button" class="btn contact-btn"><a href="<?php echo site_url('Flights/flight_search/'); ?>"><span class="hotel">Flights</span></a> <i class="fas fa-angle-right"></i>Flight Booking</button>
      </div>
    </div>
  </div>
</div>
 <!--  _________________________DELHI TO MUMBAI___________________________ -->
<div class="container one-way-margin">
  <div class="row search_modify_work">
    <div class="col-md-3 one-way">
      <div class="row">
        <div class="col-2">
          <i class="fas fa-plane hotel_single_icon"></i>
        </div>
        <div class="col-10 pencil1">
          <i class="fas fa-pencil-alt pencil"></i>
          <span class="one-way-text"><?php echo $post->departure_city;?>-<?php echo $post->arrival_city;?><br><span class="delhi-font"><?php echo $post->departure_airline;?></span></span>
        </div>
      </div>
    </div>
    <div class="col-md-4 one-way">
      <div class="row">
        <div class="col-1">
          <img src="<?php echo base_url(); ?>assets/image/car-single/calender.png" class="car-img">
        </div>
        <div class="col-4 pencil1">
          <span class="one-way-text">Departure <br><span class="delhi-font"><input class="feature-from" id="datepicker" type="" name="" value="<?php echo $post->departure_date;?>"></span></span>
        </div>
        <div class="col-1">
          <img src="<?php echo base_url(); ?>assets/image/car-single/calender.png" class="car-img">
        </div>
        <div class="col-5 pencil1">
          <span class="one-way-text">Arrival <br><span class="delhi-font"><input class="feature-from" id="datepickerdate" type="" name="" value="<?php echo $post->arrival_date;?>"></span></span>
        </div>
      </div>
    </div>
    <div class="col-md-5 one-way">
      <div class="row">
        <div class="col-2 pencil1">
          <span class="one-way-text">ADULT<br><span class="delhi-font"><input class="feature-adults" id="datepicker" type="" name="" value="<?php echo $post->price_adults;?>"></span></span>
        </div>
        <div class="col-2 pencil1">
          <span class="one-way-text">INFANT<br><span class="delhi-font"><input class="feature-adults" id="datepicker" type="" name="" value="<?php echo $post->price_infant;?>"></span></span>
        </div>
        <div class="col-2 pencil1">
          <span class="one-way-text">CHILD<br><span class="delhi-font"><input class="feature-adults" id="datepicker" type="" name="" value="<?php echo $post->price_child;?>"></span></span>
        </div>
        <div class="col-6">
          <button class="btn btn-default modify-search">MODIFY SEARCH</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  _______________________WELCOME TO THE ONLINE PASSENGER_______________________________ -->
<div class="container welcome-margin">
  <div class="row">
    <div class="col-md-8 col-sm-12">
      <h3 class="welcome">Welcome to the online Passengers and Payments</h3>
      <p class="welcome-d">Quisque vel finibus ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam sagittis venenatis lobortis. Ut tortor erat, vestibulum vitae ipsum non, rutrum rutrum lectus. Curabitur pretium sed enim quis dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Nulla nec ultrices risus.</p>
      <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png">User Passenger</li>
      <hr>
      <form method="post" action="<?php echo site_url('Flights/book_flight_order?id='.$post->id);?>">
         <div class="form-group row">
          <label for="staticEmail" class="col-md-3 harry col-form-label">*Name</label>
          <div class="col-md-6 col-sm-12">
            <input class="selin" type="text" name="fullname" value="<?php echo $posts->register_name;?>">
          </div>
        </div>
        <input type="hidden" name="foo" value="<?php echo $post->flight_id;?>" />
        <input type="hidden" name="flight_departure" value="<?php echo $post->departure_city;?>" />
        <input type="hidden" name="flight_dep_date" value="<?php echo $post->departure_date;?>" />
        <input type="hidden" name="flight_arrival" value="<?php echo $post->arrival_city;?>" />
        <input type="hidden" name="flight_arr_date" value="<?php echo $post->arrival_date;?>" />
        <input type="hidden" name="flight_dep_time" value="<?php echo $post->departure_time;?>" />
        <input type="hidden" name="flight_arr_time" value="<?php echo $post->arrival_time;?>" />
        <input type="hidden" name="flight_hours" value="<?php echo $post->total_hours;?>" />
        <input type="hidden" name="flight_price_adult" value="<?php echo $post->price_adults;?>" />
        <input type="hidden" name="flight_price_child" value="<?php echo $post->price_child;?>" />
        <input type="hidden" name="flight_price_infant" value="<?php echo $post->price_infant;?>" />
        <input type="hidden" name="flight_total_pass_price" value="<?php echo $post->price_infant+$post->price_adults+$post->price_child;?>" />
        <input type="hidden" name="flight_tax_price" value="<?php echo ($post->price_infant+$post->price_adults+$post->price_child)/10;?>" />
        <input type="hidden" name="flight_total_price" value="<?php echo (($post->price_infant+$post->price_adults+$post->price_child)/10)+($post->price_infant+$post->price_adults+$post->price_child);?>" />
        <input type="hidden" name="flight_deposit_price" value="<?php echo ((($post->price_infant+$post->price_adults+$post->price_child)/10)+($post->price_infant+$post->price_adults+$post->price_child))/10;?>" />
        <div class="form-group row">
          <label for="staticEmail" class="col-md-3 harry col-form-label">Phone Number</label>
          <div class="col-md-3 col-sm-12">
            <input class="selin" type="text" name="fnumber" value="<?php echo $posts->phone_number;?>">
          </div>
          <label for="staticEmail" class="col-md-2 harry col-form-label"> Email</label>
          <div class="col-md-4 col-sm-12">
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
          <div class="col-md-3 col-sm-12">
            <button class="btn btn-default subm-btn" name="">SUBMIT</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4 col-sm-12">
      <li class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> BOOKING SUMMARY</li>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo base_url('uploads/'.$post->thumb); ?>" class="order-img">
        </div>
        <div class="col-md-8">
          <h5 class="leela-font-ord"></h5>
          <li class="depart-font-ord"><i class="fas fa-map-marker-alt mark"></i></li>
        </div>
      </div>
      <hr>
      <li class="depart-font-stay">Departure date From <?php echo $post->departure_city;?><span class="stay"><?php echo $post->departure_date;?></span></li>
      <li class="depart-font-stay">Arrival date at <?php echo $post->arrival_city;?><span class="stay"><?php echo $post->arrival_date;?></span></li>
      <li class="depart-font-stay">Departure time from <?php echo $post->departure_city;?><span class="stay"><?php echo $post->departure_time;?></span></li>
      <li class="depart-font-stay">Arrival Time at <?php echo $post->arrival_city;?><span class="stay"><?php echo $post->arrival_time;?></span></li>
      <li class="depart-font-stay">Total Travelling Hours<span class="stay"><?php echo $post->total_hours;?> Hours</span></li>
      <li class="depart-font-stay">Adults<span class="stay"><?php echo $post->price_adults;?></span></li>
      <li class="depart-font-stay">Childs<span class="stay"><?php echo $post->price_child;?></span></li>
      <li class="depart-font-stay">Infants<span class="stay"><?php echo $post->price_infant;?></span></li>
      <li class="depart-font-stay">Total Passenger Price<span class="stay"><?php echo $post->price_infant+$post->price_adults+$post->price_child;?></span></li>
      <li class="depart-font-stay">Tax Price<span class="stay"><?php echo ($post->price_infant+$post->price_adults+$post->price_child)/10;?></span></li>
      <li class="depart-font-stay">Total Price<span class="stay"><?php echo (($post->price_infant+$post->price_adults+$post->price_child)/10)+($post->price_infant+$post->price_adults+$post->price_child);?></span></li>
      <div class="bbb-hotel-stay">
        <div class="bbb-hotel-stay-one">
          <li class="junior bed-red">Depsoit Now <span class="stay">$<?php echo ((($post->price_infant+$post->price_adults+$post->price_child)/10)+($post->price_infant+$post->price_adults+$post->price_child))/10;?></span></li>
        </div>
      </div>
      <div class="bbb-car">
        <li class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Need Assistance? <a href="#"><img src="<?php echo base_url(); ?>assets/image/search-hotel/minus.png" class="minus"></a></li>
        <p class="assistance-d">We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
        <div class="info-travo">
          <li><img src="<?php echo base_url(); ?>assets/image/car-single/phone.png">  +61 3 8376 6284</li>
          <li><img src="<?php echo base_url(); ?>assets/image/car-single/message.png"> info@UrbanAccomodation.com</li>
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