  <!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->

  <div class="container-fluid contact-bg">
  	<div class="row">
  		<div class=" offset-md-3 col-md-3 col-sm-12 col-xs-12">
  			<h2 class="contact-us" data-aos= "fade-left">Hotel Booking Page</h2>
  		</div>
  		<div class=" offset-md-3 col-md-3 d-md-block d-none">
  			<button type="button" class="btn contact-btn"><span class="hotel">Hotels </span> <i class="fas fa-angle-right"></i> Hotel Booking</button>
  		</div>
  	</div>
  </div>

 <!--  _________________________DELHI TO MUMBAI___________________________ -->
<div class="container one-way-margin" data-aos= "flip-up">
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

<!--  _______________________WELCOME TO THE ONLINE PASSENGER_______________________________ -->
<?php foreach ($hotels as $hotel): ?>
<div class="container welcome-margin">
  <div class="row">
    <div class="col-md-8">
        <h3 class="welcome" data-aos= "fade-left">Welcome to the online Passengers and Payments</h3>
        <p class="welcome-d">Quisque vel finibus ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam sagittis venenatis lobortis. Ut tortor erat, vestibulum vitae ipsum non, rutrum rutrum lectus. Curabitur pretium sed enim quis dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Nulla nec ultrices risus.</p>
        <!-- HTML FORM -->
        <form method="post" action="hotel-order-page.php">
           <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Personal Details </li>
           <hr> 
            <div class="form-group row">
            <label for="staticEmail" class="col-md-3 harry col-form-label">*First Name</label>
            <div class="col-md-3 col-sm-12">
                 <input class="selin" type="text" name="fname">
            </div>
            <label for="staticEmail" class="col-md-3 harry col-form-label"> Last Name</label>
            <div class="col-md-3 col-sm-12">
                 <input class="selin" type="text" name="lname">
            </div>
          </div>
           <div class="form-group row">
            <label for="staticEmail" class="col-md-3 harry col-form-label">* Phone Number</label>
            <div class="col-md-3 col-sm-12">
                 <input class="selin" type="text" name="fnumber">
            </div>
            <label for="staticEmail" class="col-md-3 harry col-form-label"> Email</label>
            <div class="col-md-3 col-sm-12">
                 <input class="selin" type="text" name="email">
            </div>
          </div>
           <li class="travel-seat-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Offers </li>
           <hr>
          <div class="form-group row">
            <label for="staticEmail" class="col-md-3 harry col-form-label">* Coupon Code</label>
            <div class="col-md-9 col-sm-12">
                 <input class="selin" type="text" name="coupon_id">
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
                 <img src="<?php echo base_url(); ?>assets/backend/image/<?php echo $hotel['hotel_image']; ?>" class="order-img" >
               </div>
               <div class="col-md-8">
                 <h5 class="leela-font-ord"><?php echo $hotel['hotel_name']; ?></h5>
                 <li class="depart-font-ord"><i class="fas fa-map-marker-alt mark"></i> <?php echo $hotel['hotel_area']; ?></li>
                 <img src="<?php echo base_url(); ?>assets/image/travo/star-1.png">
               </div>
             </div>
             <hr>
             <li class="depart-font-stay">Check In <span class="stay">12/02/2017</span></li>
             <li class="depart-font-stay">Check Out <span class="stay">13/02/2017</span></li>
             <li class="depart-font-stay">Total Stay <span class="stay">1</span></li>
             <li class="depart-font-stay">Nighty Rate <span class="stay">USD $155</span></li>

          <div class="bbb-hotel-stay">
             <li class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> ROOM </li>
            <!--  <p class="assistance-d">We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p> -->
            <div class="bbb-hotel-stay-one">
              <li class="junior bed-red"><img src="<?php echo base_url(); ?>assets/image/travo/hotel.png"> 1 JUNIOR SUITE <span class="stay">FOR 2 ADULTS</span></li>
            </div>
          </div>
    </div>
  </div>
</div>
<?php endforeach ?>
