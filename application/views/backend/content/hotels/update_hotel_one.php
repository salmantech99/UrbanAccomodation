<br>
<br>
<br>
<form method="post" action="<?php echo base_url(); ?>Hotels/insert_update_hotel">
    <ul class="nav nav-tabs tabs_content_ul">
        <li class="active tabs_content_list lists"><a data-toggle="tab" href="#home" aria-expanded= "true" >Hotel General</a></li>
        <li class="tabs_content_lists list1"><a data-toggle="tab" href="#menu1" aria-expanded= "false" class="here">Hotel Extras</a></li>
        <li class="tabs_content_lists list2"><a data-toggle="tab" href="#menu2" aria-expanded= "false">Hotel Meta</a></li>
        <li class="tabs_content_lists list3"><a data-toggle="tab" href="#menu3" aria-expanded= "false">Hotel Contact</a></li>
        <li class="tabs_content_lists list4"><a data-toggle="tab" href="#menu4" aria-expanded= "false">Hotel Policy</a></li>
    </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active fade active show">                  
            <!-- MAIN CONTENT-->
            <div class="main-content1">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Status</h5>
                                </div>
                                <div class="col-md-10">
                                    <select name="status" class="addcar-status-work">
                                        <option value="Enabled">Enabled</option>
                                        <option value="Disabled">Disabled</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo $post->hotel_id;?>" name="hotel_id">
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Hotel Name</h5>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="hotel_name" class="input-car-name" placeholder="Hotel Name" value="<?php echo $post->hotel_name;?>">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Hotel Description</h5>
                            </div>
                            <div class="col-md-10">
                                <textarea name="editor1"><?php echo $post->hotel_description;?></textarea>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Stars</h5>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control addcar-status-work" name="stars" value="<?php echo $post->stars;?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Hotel Type</h5>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control addcar-status-work" name="hotel_type" value="<?php echo $post->hotel_type;?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Location</h5>
                                </div>
                                <div class="col-md-2">
                                
                                    <div class="dropdown">
                                        <p class="addcar-location-work">Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                      <div class="dropdown-content">
                                       <input type="text" name="location" placeholder="Location" class="addcar-input-pick" value="<?php echo $post->location;?>" />
                                       
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="addcar-pickup">Price</h5>
                                </div>
                                <div class="col-md-1">
                                    <input type="text" name="price1" class="input-car-price" value="<?php echo $post->price1;?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Airport Pickup</h5>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control addcar-status-work" name="airport_pickup" value="<?php echo $post->airport_pickup;?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Featured</h5>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control addcar-status-work" name="featured" value="<?php echo $post->featured;?>">
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback car-cal-from">
                                       <input type="text" class="form-control" id="datepicker" placeholder="From" id="input" name="featured_from" value="<?php echo $post->featured_from;?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group has-feedback car-cal-from">
                                       <input type="text" class="form-control" id="datechecker" placeholder="To" id="input" name="featured_to" value="<?php echo $post->featured_to;?>">
                                    </div>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup tax">Vat Tax</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control addcar-status-work" name="vat_tax" value="<?php echo $post->vat_tax;?>">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="vat_tax_detail" class="addcar-input-deposit" value="<?php echo $post->vat_tax_detail;?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2" style="margin-bottom: 30px;">
                                    <h5 class="addcar-pickup">Related Hotels</h5>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="addcar-input-related" name="related_hotels" value="<?php echo $post->related;?>">
                                </div>
                            </div>
                            <hr>
                            <h5>ADD ADDRESS</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <br>
                                           Enter Location 
                                        </div>
                                        <div class="col-md-8">
                                            <br>
                                           <input type="text" name="google" class="form-control" placeholder="Enter a query" value="<?php echo $post->address_location;?>"> 
                                        </div>
                                        <div class="col-md-4">
                                            <br>
                                           Latitude 
                                        </div>
                                        <div class="col-md-8">
                                            <br>
                                           <input type="text" name="latitude" class="form-control" value="<?php echo $post->latitude;?>"> 
                                        </div>
                                           <div class="col-md-4">
                                            <br>
                                           Longitude 
                                        </div>
                                        <div class="col-md-8">
                                            <br>
                                           <input type="text" name="longitude" class="form-control" value="<?php echo $post->longitude;?>"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d54422.736651151965!2d74.34114!3d31.512594!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1531132647096" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <hr>
                            <hr>
                 </div>
                </div>
            </div> 
            <!-- END GENERAL -->
    </div>
    <div id="menu1" class="tab-pane fade">
                    <!-- MAIN CONTENT-->
            <div class="main-content1">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <h4>Add Hotel</h4>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control control--checkbox check-me check-to"> <span class="check-box-marg">Select All</span>
                                                    <input type="checkbox" name="check1" / >
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>
                                        <hr>
                                    </div>
                                    <!-- ONE LINE -->
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Airport Transport</span>
                                                    <input type="checkbox" name="check2"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Night Club</span>
                                                    <input type="checkbox" name="check3"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Business Center</span>
                                                    <input type="checkbox" name="check4"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Disabled Facilities</span>
                                                    <input type="checkbox" name="check5"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Restaurant</span>
                                                    <input type="checkbox" name="check6"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Laundry Service</span>
                                                    <input type="checkbox" name="check8"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Swimming Pool</span>
                                                    <input type="checkbox" name="check9"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Bar Lounge</span>
                                                    <input type="checkbox" name="check10"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Wi-Fi Internet</span>
                                                    <input type="checkbox" name="check11"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Fitness Center</span>
                                                    <input type="checkbox" name="check12"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Shuttle Bus Service</span>
                                                    <input type="checkbox" name="check13"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Inside Parking</span>
                                                    <input type="checkbox" name="check14"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> SPA</span>
                                                    <input type="checkbox" name="check15"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Bissiness Class Traveling</span>
                                                    <input type="checkbox" name="check16"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Fitness Center</span>
                                                    <input type="checkbox" name="check17"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Banquet Hall</span>
                                                    <input type="checkbox" name="check18"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Children Activites</span>
                                                    <input type="checkbox" name="check19"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Air Conditioner</span>
                                                    <input type="checkbox" name="check20"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Pets Allowed</span>
                                                    <input type="checkbox" name="check21"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Cards Accepted</span>
                                                    <input type="checkbox" name="check22"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Elevator</span>
                                                    <input type="checkbox" name="check23"/>
                                                    <div class="control__indicator check_box_work"></div>
                                        </label>  
                                    </div>
                                </div>
                                <hr>
                                
                            </div>
                    </div>
                </div>
            </div> 
            <!-- END MAIN CONTENT-->
    </div>
    <div id="menu2" class="tab-pane fade">
                <!-- MAIN CONTENT-->
            <div class="main-content1">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <h4>Add Hotel</h4>
<br>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                    <label class=" form-control-label">Meta Title</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <input name="meta_title" placeholder="Meta Title" class="form-control" type="text" value="<?php echo $post->meta_title;?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                    <label class=" form-control-label">Meta Keywords</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <textarea name="meta_keyword" placeholder="Meta Keywords" class="form-control" type="text" rows="2"><?php echo $post->meta_keywords;?></textarea>
                                    </div>
                                </div>
                              <div class="row form-group">
                                    <div class="col col-md-2">
                                    <label class=" form-control-label">Meta Description</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <textarea name="meta_description" placeholder="Meta Description" class="form-control" type="text" rows="3"><?php echo $post->meta_descriptions;?></textarea>
                                    </div>
                                </div> 
                                <hr>  
                            </div> 
                    </div>
                </div> 
            <!-- END MAIN CONTENT-->
    </div>
    <div id="menu3" class="tab-pane fade">
                  <!-- MAIN CONTENT-->
            <div class="main-content1">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <h4>Add Hotel</h4>
<br>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                    <label class=" form-control-label">Hotel's Email</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <input name="hotel_email" placeholder="Email" class="form-control" type="text" value="<?php echo $post->hotel_email;?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-2 control-label text-left">Hotel's Website</label>
                                    <div class="col-md-6">
                                      <input name="hotel_website" placeholder="Website" class="form-control" type="text" value="<?php echo $post->hotel_website;?>">
                                    </div>
                              </div>
                              <div class="row form-group">
                                    <label class="col-md-2 control-label text-left">Phone</label>
                                    <div class="col-md-6">
                                      <input name="hotel_phone" placeholder="Phone" class="form-control" type="text" value="<?php echo $post->hotel_phone_number;?>">
                                    </div>
                              </div> 
                                <hr>  
                            </div> 
                    </div>
                </div> 
            <!-- END MAIN CONTENT-->
    </div>
        <div id="menu4" class="tab-pane fade">
               <!-- Hotel Policy -->
            <div class="main-content1">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="policy-status-work">Check in</h5>
                                </div>
                                <br> 
                                <div class="col-md-3">
                                    <br>
                                   <input type="text" class="form-control hi" id="datethere" placeholder="Check in" name="check_in" value="<?php echo $post->policy_checkin;?>">  
                                </div>
                                <div class="col-md-2">
                                    <h5 class="policy-status-work1">Check out</h5>
                                </div>
                                <div class="col-md-3">
                                    <br>
                                   <input type="text" class="form-control hi" id="datehere" placeholder="Check out" name="check_out" value="<?php echo $post->policy_checkout;?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="policy-status-hotel">Payment Options</h5>
                                </div>
                                <div class="col-md-10">
                                    <input list="hosting-plan" type="text" class="policy-input" name="payment_options" value="<?php echo $post->payment_option;?>">
 
                                        <datalist id="hosting-plan">
                                            <option value="Cash"/>
                                            <option value="Pay on Arrival"/>
                                            <option value="Credit Card"/>
                                            <option value="Wire Transfer"/>
                                        </datalist>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="policy-status-hotel">Policy And Terms</h5>
                                </div>
                                <div class="col-md-10">
                                    <textarea name="policy_and_terms" cols="80" rows="3" class="policy-car-description"><?php echo $post->policy_and_terms;?></textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <!-- Hotel Policy -->
    </div>
  </div>
    <div class="row">
        <div class="col-md-2" style="margin-bottom: 30px;">
            <button type="submit" class="addcar-button">Submit</button>
        </div>                                
    </div>
</form>
