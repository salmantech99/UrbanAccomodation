
  <!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->
<div class="contact-bg">
  <div class="container">
    <div class="row">
      <div class=" col-md-4 col-sm-12 col-xs-12">
        <h2 class="contact-us" data-aos="fade-left">Contact Us</h2>
      </div>
      <div class=" offset-md-5 col-md-3 d-md-block d-none">
        <button type="button" class="btn contact-btn"><span class="hotel">Pages</span> <i class="fas fa-angle-right"></i>Contact Page</button>
      </div>
    </div>
  </div>
</div>
<!-- ______________________________POSTAL ADDRESS________________________________ -->
<div class="postal">  
	<div class="container">
  	<div class="row">
  		<div class="col-md-1 col-sm-6 col-xs-6 d-md-block d-none">
  			<img src="<?php echo base_url(); ?>assets/image/contact/postal.png">
  		</div>
  		<div class="col-md-3 col-sm-6 col-xs-6 ">
  			<p class="postal-font">Postal Address<br><span class="postal-font1">OFFICE NO. 815 FLOOR NO.8 AL HAFEEZ HEIGHTS GULBERG 3 LAHORE.</span></p>
  		</div>
  		<div class="col-md-1 col-sm-6 col-xs-6 d-md-block d-none">
  			<img src="<?php echo base_url(); ?>assets/image/contact/email.png">
  		</div>
  		<div class="col-md-3 col-sm-6 col-xs-6">
  			<p class="postal-font">PHONE & EMAILS<br><span class="postal-font1">+92 305 5454048
			Info@urbanaccomodation.com</span></p>
  		</div>
  		<div class="col-md-1 col-sm-6 col-xs-6 d-md-block d-none">
  			<img src="<?php echo base_url(); ?>assets/image/contact/business.png">
  		</div>
  		<div class="col-md-3 col-sm-6 col-xs-6">
  			<p class="postal-font">BUSINESS HOURS<br><span class="postal-font1">Monday – Friday
			<br>8.00 am – 5.00 pm</span></p>
  		</div>
  	</div>
  </div>
</div>
<div class="postal">
	<div class="container">
		<form method="post" action="<?php echo site_url('Hotels/contact_data');?>">
  		<div class="row">
  			<div class="col-md-6">
  			  <div class="form-group">
				<input class="form-control name-form" type="text" id="exampleFormControlFile1" placeholder="Your Name*" name="c_name" required pattern="[A-Za-z]{3,16}" title="*Please enter the correct Name">
  			  </div>
  			  <div class="form-group">
				<input class="form-control name-form" type="text" id="exampleFormControlFile1" placeholder="Subject*" name="c_subject" required pattern="[A-Za-z]{3,16}" title="*Please enter the correct Name">
  			  </div>
  			  <div class="form-group">
				<input type="email" class="form-control name-form"  name="c_email" id="exampleFormControlFile1" placeholder="Your Email*" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Your email should be e.g 'salman@gmail.com'"/>
  			  </div>
  			</div>
  			<div class="col-md-6">
  			  <div class="form-group contact-textarea">
            <textarea class="form-control comment-form" placeholder="Your Comments*" id="exampleFormControlFile1" name="c_comment"></textarea>
  			  </div>
  			</div>
  		</div>
		  <button type="submit" class="btn form-btn" name="contact">Submit</button> <br>
		</form>
	</div>
</div>