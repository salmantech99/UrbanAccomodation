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
      <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Passenger: Adult </li>
      <hr>
      <form method="post" action="<?php echo site_url('Flights/book_flight_order?id='.$post->id);?>">
        <div class="form-group row">
          <label for="staticEmail" class="col-md-4 harry col-form-label">*Title</label>
          <div class="col-md-3 col-sm-12">
            <select class="form-control mr-option sel" name="title">
              <option>Mr.</option>
              <option>Miss</option>
            </select>
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
          <label for="staticEmail" class="col-md-4 harry col-form-label">*Name</label>
          <div class="col-md-8 col-sm-12">
            <input class=" title" type="text" name="fullname">
            <span class="focus-input2"></span>
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-4 harry col-form-label">*Date of Birth</label>
          <div class="col-md-8 col-sm-12">
            <div class="form-group">
              <div class="col-xs-5 date">
                <div class="input-group input-append date">
                  <input type="text" class="form-control" name="date" / id="datepickerdate">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-4 harry col-form-label">*Gender</label>
          <div class="col-md-3 col-sm-12">
            <select class="form-control mr-option sel" name="gender">
              <option>Male</option>
              <option>Female</option>
              <option>Others</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="Address" class="col-md-3 harry col-form-label">* Address</label>
          <div class="col-md-6 col-sm-12">
            <input class="selin" type="text" name="address" required>
          </div>
        </div>
        <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Primary Travel Document </li>
        <hr>
        <div class="primary"></div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-4 harry col-form-label">Type</label>
          <div class="col-md-3 col-sm-12">
            <select class="form-control mr-option sel" id="sel6" name="passport_type">
              <option>Passport</option>
              <option>Others</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-4 harry col-form-label">Nationality</label>
          <div class="col-md-3 col-sm-12">
            <select class="form-control mr-option sel" id="sel6" name="nationality">
              <option>India</option>
              <option>Pakistan</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-4 harry col-form-label">Passport issue Country</label>
          <div class="col-md-3 col-sm-12">
            <select class="form-control mr-option sel" id="sel6" name="issue_country">
              <option>India</option>
              <option>Pakistan</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-4 harry col-form-label">*Passport Expiry</label>
          <div class="col-md-8 col-sm-12">
            <div class="form-group">
              <div class="col-xs-5 date">
                <div class="input-group input-append date" id="datePicker">
                  <input type="text" class="form-control" name="expiry_date" / id="datepicker">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-4 harry col-form-label">Passport Number</label>
          <div class="col-md-8 col-sm-12">
            <input class="sel" type="text" name="passport_number">
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-4 harry col-form-label">Meal Preference</label>
          <div class="col-md-8 col-sm-12">
            <select class="form-control mr-option sel" id="sel11" name="mpreference">
              <option>No Meal Preference</option>
              <option>Meal Preference</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-4 harry col-form-label">Special Assistance</label>
          <div class="col-md-8 col-sm-12">
            <select class="form-control mr-option sel" id="sel11" name="special_assistance">
              <option>No Special Assistance Required</option>
              <option>Special Assistance Required</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-4 harry col-form-label">Frequent Flayer Number</label>
          <div class="col-md-2 col-sm-12">
             <input class="selin mr-option" type="text" name="flayer_number">
          </div>
          <div class="col-md-6 col-sm-12">
            <select class="form-control mr-option selin" id="sel11" name="flayer-number">
              <option>03332</option>
              <option>03442</option>
              <option>03552</option>
              <option>03662</option>
            </select>
          </div>
        </div>
        <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Travel Seating </li>
        <hr>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-3 harry col-form-label">Travel Seating</label>
          <div class="col-md-3 col-sm-12">
            <button class="btn btn-default select-seat-btn"><i class="fas fa-check"></i> SELECT SEAT</button>
          </div>
        </div>
        <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Contact Details </li>
        <hr>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-3  harry col-form-label">*Telephone</label>
          <div class="col-md-3 col-sm-12">
            <select class="form-control mr-option selin" name="country_code">
              <option>Australia-61</option>
              <option>Pakistan-92</option>
              <option>Italy-72</option>
              <option>England-62</option>
              <option>Spain-32</option>
            </select>
          </div>
          <div class="col-md-3 col-sm-12">
            <input class="selin" type="text" name="area_code" placeholder="Area Code">
          </div>
          <div class="col-md-3 col-sm-12">
            <input class="selin" type="text" name="telephone" placeholder="Number">
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-3 harry col-form-label">Mobile Telephone</label>
          <div class="col-md-3 col-sm-12">
            <select class="form-control selin mr-option" name="mobile_telephone">
              <option>Australia-61</option>
              <option>Pakistan-92</option>
              <option>Spain-61</option>
              <option>Dubai-61</option>
              <option>Italy-61</option>
            </select>
          </div>
          <div class="col-md-4 col-sm-12">
            <input class="selin" type="text" name="mobile" placeholder="Number">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-9 offset-md-3 col-sm-12">
            <label class="container-check"><p class="please">Please click here to confirm if you wish to receive SMS messages related to this booking on this Mobile number. The SMS message can be sent to Indian mobile phone numbers only.</p>
              <input type="checkbox" checked="checked">
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-md-3 harry col-form-label">Email Address</label>
          <div class="col-md-9 col-sm-12">
            <input class="selin" type="text" name="detail_email">
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