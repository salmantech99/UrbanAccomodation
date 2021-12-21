<!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->
  <div class="contact-bg">
    <div class="container">
      <div class="row">
        <div class=" col-md-4 col-sm-12 col-xs-12">
          <h2 class="contact-us" data-aos="fade-left">Car Detailed Single</h2>
        </div>
        <div class=" offset-md-5 col-md-3 d-md-block d-none">
          <button type="button" class="btn contact-btn"><a href="<?php echo site_url('Car/cars_search/'); ?>"><span class="hotel">Car </span></a><i class="fas fa-angle-right"></i> Car Single</button>
        </div>
      </div>
    </div>
  </div>
 <!--  _________________________LAHORE TO ISLAMABAD___________________________ -->
<!-- ___________________________OVERVIEW LOCATION____________________________ -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="car-name-single">
          <p class="single-car-name"><i class="fas fa-car main-index-icons"></i><?php echo $post->car_name;?></p>
          <p class="single-car-greater"><a href="<?php echo site_url('Car/cars_search/'); ?>" class="single-car-greater"><abbr title="Back"><</abbr></a></p>
          <p class="single-car-name1"><i class="fas fa-map-marker-alt main-index-icons"></i><?php echo $post->pickup_location1;?></p>
          <br>
        </div>
      </div> 
      <div class="col-md-8">
        <div class="col-md-12">
          <img src="<?php echo base_url('uploads/'.$post->car_image); ?>" class="single-img">
        </div>
      </div>
      <div class="col-md-4">
        <div class="location-single-car">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13605.684162787991!2d74.34114004999999!3d31.512594000000004!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2s!4v1524725473843" class="google" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" style="margin-top: 20px;">
        <div class="row" style="border:1px solid #ddd;">
          <div class="col-md-12" style="background-color: #f8f8f8;">
            <br>
            <p class="single-car-detail"><b>Details</b></p>
          </div>
          <div class="col-md-12">
            <div>
              <p class="car-single-description"><b>Description</b></p>
              <?php echo $post->car_description;?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div style="margin-top: 20px;">
          <h6>Privacy Policy</h6>
          <p><?php echo $post->policy_and_terms;?></p>
        </div>
      </div>
      <div> 
        <form action="<?php echo site_url('Car/cars_order?id='.$post->id); ?>" method="post">
          <div class="row car-single-border">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12 single-car-background">
                  <br>
                  <p class="single-car-booking">Booking Option</p>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <p class="car_single_text"><i class="fas fa-map-marker-alt"></i> <b>Pick up</b></p>
                      <select Id="height" onChange="Calculate();" class="car_single_option" name="starting">
                        <option disabled selected>  --Select--  </option>
                        <option value=1><?php echo $post->pickup_location1;?></option>
                      </select>
                      <input type="hidden" name="car_id" value="<?php echo $post->id;?>" />
                      <input type="hidden" name="pick_location" value="<?php echo $post->pickup_location1;?>"/>
                      <input type="hidden" name="location1" value="<?php echo $post->dropoff_location1;?>" />
                      <input type="hidden" name="price1_equality" value="<?php echo $post->price1;?>" />
                      <input type="hidden" name="location2" value="<?php echo $post->dropoff_location2;?>" />
                      <input type="hidden" name="price2_equality" value="<?php echo $post->price2;?>" />
                      <input type="hidden" name="location3" value="<?php echo $post->dropoff_location3;?>" />
                      <input type="hidden" name="price3_equality" value="<?php echo $post->price3;?>" />
                      <input type="hidden" name="location4" value="<?php echo $post->dropoff_location4;?>" />
                      <input type="hidden" name="price4_equality" value="<?php echo $post->price4;?>" />
                      <input type="hidden" name="location5" value="<?php echo $post->dropoff_location5;?>" />
                      <input type="hidden" name="price5_equality" value="<?php echo $post->price5;?>" />
                      <input type="hidden" name="location6" value="<?php echo $post->dropoff_location6;?>" />
                      <input type="hidden" name="price6_equality" value="<?php echo $post->price6;?>" />
                      <input type="hidden" name="location7" value="<?php echo $post->dropoff_location7;?>" />
                      <input type="hidden" name="price7_equality" value="<?php echo $post->price7;?>" />
                      <input type="hidden" name="location8" value="<?php echo $post->dropoff_location8;?>" />
                      <input type="hidden" name="price8_equality" value="<?php echo $post->price8;?>" />
                      <input type="hidden" name="location9" value="<?php echo $post->dropoff_location9;?>" />
                      <input type="hidden" name="price9_equality" value="<?php echo $post->price9;?>" />
                      <input type="hidden" name="location10" value="<?php echo $post->dropoff_location10;?>" />
                      <input type="hidden" name="price10_equality" value="<?php echo $post->price10;?>" /> 
                      <div class="row">
                        <div class="col-md-6">
                          <p class="car_single_text"><i class="fas fa-calendar-alt"></i> <b>pick up Date</b></p>
                          <input class="car_single_input" id="datepicker" type="" name="pickupdate" placeholder="Enter Date" required>
                        </div>
                        <div class="col-md-6">
                          <p class="car_single_text"><i class="fas fa-clock"></i> <b>pick up Time</b></p>
                          <select class="car_single_input" name="pickuptime" required>
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
                            <option value="10:00" selected="">10:00</option>
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
                    </div> 
                     <div class="col-md-6">
                      <p class="car_single_text"><i class="fas fa-map-marker-alt"></i> <b>Drop off</b></p>
                      <select Id="length" onChange="Calculate();" class="car_single_option" name="ending_point">
                        <option disabled selected>  --Select--  </option>
                        <option value="<?php echo $post->price1;?>"><?php echo $post->dropoff_location1;?></option>
                        <option value="<?php echo $post->price2;?>"><?php echo $post->dropoff_location2;?></option>
                        <option value="<?php echo $post->price3;?>"><?php echo $post->dropoff_location3;?></option>
                        <option value="<?php echo $post->price4;?>"><?php echo $post->dropoff_location4;?></option>
                        <option value="<?php echo $post->price5;?>"><?php echo $post->dropoff_location5;?></option>
                        <option value="<?php echo $post->price6;?>"><?php echo $post->dropoff_location6;?></option>
                        <option value="<?php echo $post->price7;?>"><?php echo $post->dropoff_location7;?></option>
                        <option value="<?php echo $post->price8;?>"><?php echo $post->dropoff_location8;?></option>
                        <option value="<?php echo $post->price9;?>"><?php echo $post->dropoff_location9?></option>
                        <option value="<?php echo $post->price10;?>"><?php echo $post->dropoff_location10;?></option>
                      </select>
                      <div class="row">
                        <div class="col-md-6">
                          <p class="car_single_text"><i class="fas fa-calendar-alt"></i> <b>Drop off Date</b></p>
                          <input class="car_single_input" id="datepickerdate" type="" name="dropoffdate" placeholder="Enter Date" required>
                        </div>
                        <div class="col-md-6">
                          <p class="car_single_text"><i class="fas fa-clock"></i> <b>Drop off Time</b></p>
                          <select class="car_single_input" name="dropofftime" required>
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
                            <option value="10:00" selected="">10:00</option>
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
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="car-single-back">
                    <br>
                    <p class="car-single-text">Total USD $<label id="lblRes" name="result">0
                    </label></p>
                    <p class="car-single-usd"><small> Tax &amp; VAT USD $<span class="totalTax">5</span> </small><small> Deposit Now USD $<span class="totaldeposit"><label id="taxes" name="tax">0</label></span> </small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="single-car-button">
                <button type="submit" class="btn btn-default single_car_button">Book Now</button>
              </div>
            </div>
          </div>
        </form>
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
