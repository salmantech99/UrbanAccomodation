<!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->
  <div class="contact-bg">
    <div class="container">
      <div class="row">
        <div class=" col-md-4 col-sm-12 col-xs-12">
          <h4 class="contact-us" data-aos="fade-left">Vacation Detailed Single</h4>
        </div>
        <div class=" offset-md-5 col-md-3 d-md-block d-none">
          <button type="button" class="btn contact-btn"><a href="<?php echo site_url('Vacation/vacation_search/'); ?>"><span class="hotel">Vacation</span></a><i class="fas fa-angle-right"></i>Vacation Single</button>
        </div>
      </div>
    </div>
  </div>
<!--  _________________________DELHI TO MUMBAI___________________________ -->
<!-- ___________________________OVERVIEW LOCATION____________________________ -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="car-name-single">
        <p class="single-car-name"><i class="fas fa-car main-index-icons"></i><?php echo $post->vacation_name;?></p>
        <p class="single-car-greater"><a href="<?php echo site_url('Vacation/vacation_search/'); ?>" class="single-car-greater"><abbr title="Back"><</abbr></a></p>
        <p class="single-car-name1"><i class="fas fa-map-marker-alt main-index-icons"></i><?php echo $post->location1;?></p>
        <br>
      </div>
    </div> 
    <div class="col-md-8">
      <div class="col-md-12">
        <img src="<?php echo base_url('uploads/'.$post->vacational_place_image); ?>" class="single-img">
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
            <?php echo $post->vacation_description;?>
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
    <div class="col-md-12">
      <form action="<?php echo site_url('Vacation/vacation_booking?id='.$post->id); ?>" method="post">
        <div class="row car-single-border">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 single-car-background">
                <br>
                <p class="single-car-booking">BOOKING OPTIONS</p>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <div class="vacation-single-page-detail">
                      <p class="car_single_text vacation-date"><b>SELECT DATE</b></p>
                      <input class="car_single_input vacation-single-input" id="datepicker" type="" name="pickupdate" placeholder="Enter Date" required>
                      <input type="hidden" name="vacation_id" value="<?php echo $post->id;?>" />
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="vacation-single-page-detail">
                          <div class="row">
                            <div class="col-md-4">
                               <p class="vacation-order-booking-border"><b>Who</b></p>
                               <p class="vacation-order-booking-border2"><b>Adult $<?php echo $post->adult_price;?></b></p>
                               <p class="vacation-order-booking-border2"><b>Child $<?php echo $post->child_price;?></b></p>
                               <p class="vacation-order-booking-border2"><b>Infant $<?php echo $post->infant_price;?></b></p>
                            </div>
                            <div class="col-md-4">
                              <p class="vacation-order-booking-border"><b>No.</b></p>
                              <select class="vacation-order-booking-border vacation-select-front" onChange="Calcula();" name="adult-quantity" id="height">
                                <option value="<?php echo $post->adult_price;?>">1</option>
                                <option value="<?php echo $post->adult_price*2;?>">2</option>
                                <option value="<?php echo $post->adult_price*3;?>">3</option>
                                <option value="<?php echo $post->adult_price*4;?>">4</option>
                                <option value="<?php echo $post->adult_price*5;?>">5</option>
                                <option value="<?php echo $post->adult_price*6;?>">6</option>
                              </select>
                              <select class="vacation-order-booking-border vacation-select-front" onChange="Calcula();" name="child-quantity" id="childprice">
                                <option value="<?php echo $post->child_price*0;?>">0</option>
                                <option value="<?php echo $post->child_price;?>">1</option>
                                <option value="<?php echo $post->child_price*2;?>">2</option>
                                <option value="<?php echo $post->child_price*3;?>">3</option>
                                <option value="<?php echo $post->child_price*4;?>">4</option>
                              </select>
                              <select class="vacation-order-booking-border vacation-select-front" onChange="Calcula();" name="infant-quantity" id="infantprice">
                                <option value="<?php echo $post->infant_price*0;?>">0</option>
                                <option value="<?php echo $post->infant_price;?>">1</option>
                                <option value="<?php echo $post->infant_price*2;?>">2</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                              <p class="vacation-order-booking-border1"><b>Price</b></p>
                              <p class="vacation-order-booking-border3">$<label id="lblRes" name="result_adult"> <!-- a Label to locate result in it -->
                              <?php echo $post->adult_price;?>
                              </label></p>
                              <p class="vacation-order-booking-border3">$<label id="child" name="result_child"> <!-- a Label to locate result in it -->
                              0
                              </label></p>
                              <p class="vacation-order-booking-border3">$<label id="infant" name="result_infant"> <!-- a Label to locate result in it -->
                              0
                              </label></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col-md-6">
                <div class="car-single-back">
                  <br>
                  <p class="car-single-text">Total USD $<label id="lblRe" name="total_result">
                   <?php echo $post->adult_price;?>
                  </label></p>
                  <p class="car-single-usd"><small> Deposit Now USD $<label class="totaldeposit" id="usdr" name="usd_result">0</label> </small></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-car-button">
                  <button type="submit" class="btn btn-default single_car_button">Book Now</button>
                </div>
              </div>
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
