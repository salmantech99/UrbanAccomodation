
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
  			<p class="postal-font">PHONE & EMAILS<br><span class="postal-font1">+61 3 8376 6284
			Info@xpertcoders.com</span></p>
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
  			    <input type="text" class="form-control name-form" id="exampleFormControlFile1" placeholder="Your Name*" name="c_name" value="<?php echo $posts->register_name;?>">
  			  </div>
  			  <div class="form-group">
  			    <input type="text" class="form-control name-form" id="exampleFormControlFile1" placeholder="Subject" name="c_subject">
  			  </div>
  			  <div class="form-group">
  			    <input type="text" class="form-control name-form" id="exampleFormControlFile1" placeholder="Your Email*" name="c_email" value="<?php echo $posts->register_email;?>">
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