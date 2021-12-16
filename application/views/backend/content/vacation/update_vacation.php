<br>
<br>
<br>
<form method="post" action="<?php echo base_url(); ?>Vacation/insert_update_vacation">
    <ul class="nav nav-tabs tabs_content_ul">
        <li class="active tabs_content_list lists"><a data-toggle="tab" href="#home" aria-expanded= "true" >vacation General</a></li>
        <li class="tabs_content_lists list1"><a data-toggle="tab" href="#menu1" aria-expanded= "false" class="here">vacation Extras</a></li>
        <li class="tabs_content_lists list2"><a data-toggle="tab" href="#menu2" aria-expanded= "false">vacation Meta</a></li>
        <li class="tabs_content_lists list3"><a data-toggle="tab" href="#menu3" aria-expanded= "false">vacation Contact</a></li>
        <li class="tabs_content_lists list4"><a data-toggle="tab" href="#menu4" aria-expanded= "false">vacation Policy</a></li>
    </ul>
   <!-- MAIN CONTENT-->
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active fade active show">                  
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
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Vacation Name</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="vacation_name" class="input-car-name" placeholder="Vacation Name" value="<?php echo $post->vacation_name;?>">
                                <input type="hidden" value="<?php echo $post->id;?>" name="id">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Vacation Description</h5>
                            </div>
                            <div class="col-md-10">
                                <textarea name="editor1"><?php echo $post->vacation_description;?></textarea>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;margin-left: 4px;">
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-2 routes-flight">
                                
                                    </div>
                                    <div class="col-md-3 routes-flight1">
                                        <h6>Adults</h6>
                                    </div>
                                    <div class="col-md-3 routes-flight1">
                                        <h6>Child</h6>
                                    </div>
                                    <div class="col-md-3 routes-flight1">
                                        <h6>Infant</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 vacation-route1">
                                        <p style="text-align: center;">Quantity</p>
                                    </div>
                                    <div class="col-md-3 routes-flight2">
                                        <input type="text" name="quantity_adult" class="vacation-route" value="<?php echo $post->adult_quantity;?>">
                                    </div>
                                    <div class="col-md-3 routes-flight2">
                                        <input type="text" name="quantity_child" class="vacation-route" value="<?php echo $post->child_quantity;?>">
                                    </div>
                                    <div class="col-md-3 routes-flight2">
                                        <input type="text" name="quantity_infant" class="vacation-route" value="<?php echo $post->infant_quantity;?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 vacation-route1">
                                        <p style="text-align: center;">Price</p>
                                    </div>
                                    <div class="col-md-3 routes-flight2">
                                        <input type="text" name="price_adult" class="vacation-route" placeholder="Enter Price Adult" value="<?php echo $post->adult_price;?>">
                                    </div>
                                    <div class="col-md-3 routes-flight2">
                                        <input type="text" name="price_child" class="vacation-route" placeholder="Enter Price Child" value="<?php echo $post->child_price;?>">
                                    </div>
                                    <div class="col-md-3 routes-flight2">
                                        <input type="text" name="price_infant" class="vacation-route" placeholder="Enter Price Infant" value="<?php echo $post->infant_price;?>">
                                    </div>
                                </div>
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
                                <h5 class="addcar-status">Total Days</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control addcar-status-work" name="total_days" value="<?php echo $post->total_days;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Total Nights</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control addcar-status-work" name="total_nights" value="<?php echo $post->total_nights;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Vacation Type</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control addcar-status-work" name="vacation_type" value="<?php echo $post->vacation_type;?>">
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
                        <div class="row routes-one">
                            <div class="col-md-12">
                                <div class="box1 effect1 vacation-location-style">
                                    <h4 class="flight-table">Locations</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="vacation-location-style">
                                    <div class="row">
                                        <div class="col-md-2" style="margin-bottom: 30px;">
                                            <h5 class="addcar-pickup vacation-text-styling">Location 1</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="addcar-input-related" name="location1" placeholder="Enter Location 1" value="<?php echo $post->location1;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2" style="margin-bottom: 30px;">
                                            <h5 class="addcar-pickup vacation-text-styling">Location 2</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="addcar-input-related" name="location2" placeholder="Enter Location 2" value="<?php echo $post->location2;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2" style="margin-bottom: 30px;">
                                            <h5 class="addcar-pickup vacation-text-styling">Location 3</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="addcar-input-related" name="location3" placeholder="Enter Location 3" value="<?php echo $post->location3;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2" style="margin-bottom: 30px;">
                                            <h5 class="addcar-pickup vacation-text-styling">Location 4</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="addcar-input-related" name="location4" placeholder="Enter Location 4" value="<?php echo $post->location4;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2" style="margin-bottom: 30px;">
                                            <h5 class="addcar-pickup vacation-text-styling">Location 5</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="addcar-input-related" name="location5" placeholder="Enter Location 5" value="<?php echo $post->location5;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2" style="margin-bottom: 30px;">
                                            <h5 class="addcar-pickup vacation-text-styling">Location 6</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="addcar-input-related" name="location6" placeholder="Enter Location 6" value="<?php echo $post->location6;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2" style="margin-bottom: 30px;">
                                            <h5 class="addcar-pickup vacation-text-styling">Location 7</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="addcar-input-related" name="location7" placeholder="Enter Location 7" value="<?php echo $post->location7;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2" style="margin-bottom: 30px;">
                                            <h5 class="addcar-pickup vacation-text-styling">Location 8</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="addcar-input-related" name="location8" placeholder="Enter Location 8" value="<?php echo $post->location8;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2" style="margin-bottom: 30px;">
                                            <h5 class="addcar-pickup vacation-text-styling">Location 9</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="addcar-input-related" name="location9" placeholder="Enter Location 9" value="<?php echo $post->location9;?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2" style="margin-bottom: 30px;">
                                            <h5 class="addcar-pickup vacation-text-styling">Location 10</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="addcar-input-related" name="location10" placeholder="Enter Location 10" value="<?php echo $post->location10;?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup tax">Deposit / Commission</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="addcar-passenger-work" name="deposit">
                                    <option value="Fixed">Fixed</option>
                                    <option value="Percentage">Percentage</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="deposit_detail" class="addcar-input-deposit" value="<?php echo $post->deposit_percent;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup tax">Vat Tax</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="addcar-passenger-work" name="vat_tax">
                                    <option value="Fixed">Fixed</option>
                                    <option value="Percentage">Percentage</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="vat_tax_detail" class="addcar-input-deposit" value="<?php echo $post->vat_tax_detail;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2" style="margin-bottom: 30px;">
                                <h5 class="addcar-pickup">Related Vacation</h5>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="addcar-input-related" name="related_vacations" value="<?php echo $post->related_vacation;?>">
                            </div>
                        </div>
                        <hr>
                        <h5>MAP ADDRESS FOR LISTING PAGE</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row" style="margin-top: 35px;">
                                    <div class="col-md-4">
                                       Enter Location 
                                    </div>
                                    <div class="col-md-8">
                                       <input type="text" name="google" class="form-control" placeholder="Enter a query" value="<?php echo $post->map_address_location;?>"> 
                                    </div>
                                    <div class="col-md-4">
                                       Latitude 
                                    </div>
                                    <div class="col-md-8">
                                       <input type="text" name="latitude" class="form-control" value="<?php echo $post->map_address_latitude;?>"> 
                                    </div>
                                    <div class="col-md-4">
                                       Longitude 
                                    </div>
                                    <div class="col-md-8">
                                       <input type="text" name="longitude" class="form-control" value="<?php echo $post->map_address_longitude;?>"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d54422.736651151965!2d74.34114!3d31.512594!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1531132647096" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <hr>
                        <hr>
                    </div>
                </div>
            </div>       
        </div>
     <!-- END GENERAL -->
     <!-- MAIN CONTENT-->
        <div id="menu1" class="tab-pane fade">
            <div class="main-content1">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <br>
                        <div class="box">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control control--checkbox check-me check-to"> <span class="check-box-marg">Select All</span>
                                        <input type="checkbox" id="select_all" name="check1" / >
                                        <div class="control__indicator check_box_work"></div>
                                    </label>
                                    <hr>
                                </div>
                                <!-- ONE LINE -->
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"><span class="check-box-marg">Cab Facilities</span>
                                        <input type="checkbox" class="checkbox" name="check2"/>
                                        <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"> <span class="check-box-marg">Local tax</span>
                                        <input type="checkbox" class="checkbox" name="check3"/>
                                        <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"> <span class="check-box-marg">Playground Nearby</span>
                                        <input type="checkbox" class="checkbox" name="check4"/>
                                        <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"> <span class="check-box-marg">Return Ferry Tickets</span>
                                        <input type="checkbox" class="checkbox" name="check5"/>
                                        <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"> <span class="check-box-marg">Bike equipment</span>
                                        <input type="checkbox" class="checkbox" name="check6"/>
                                        <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"> <span class="check-box-marg">Complimentary Breakfast</span>
                                        <input type="checkbox" class="checkbox" name="check8"/>
                                        <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"><span class="check-box-marg">Local Guides/Maps</span>
                                            <input type="checkbox" class="checkbox" name="check9"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"><span class="check-box-marg">Collision Coverage</span>
                                            <input type="checkbox" class="checkbox" name="check10"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"> <span class="check-box-marg">Transportation</span>
                                            <input type="checkbox" class="checkbox" name="check11"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"> <span class="check-box-marg">Restaurant Nearby</span>
                                            <input type="checkbox" class="checkbox" name="check12"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"> <span class="check-box-marg">Golf Nearby</span>
                                            <input type="checkbox" class="checkbox" name="check13"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"> <span class="check-box-marg">Deluxe Coach</span>
                                            <input type="checkbox" class="checkbox" name="check14"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"><span class="check-box-marg">Central Air/Heat</span>
                                            <input type="checkbox" class="checkbox" name="check15"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"> <span class="check-box-marg">Parking</span>
                                            <input type="checkbox" class="checkbox" name="check16"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"><span class="check-box-marg">Guides / Assistance</span>
                                            <input type="checkbox" class="checkbox" name="check17"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"><span class="check-box-marg">Live entertainment</span>
                                            <input type="checkbox" class="checkbox" name="check18"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"><span class="check-box-marg">Dinner</span>
                                            <input type="checkbox" class="checkbox" name="check19"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"><span class="check-box-marg">Cruise</span>
                                            <input type="checkbox" class="checkbox" name="check20"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"><span class="check-box-marg">Room service and meals</span>
                                            <input type="checkbox" class="checkbox" name="check21"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"> <span class="check-box-marg">Professional tour escort</span>
                                            <input type="checkbox" class="checkbox" name="check22"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                                <div class="col-md-4">
                                    <label class="control control--checkbox check-me"><span class="check-box-marg">Beach Access</span>
                                            <input type="checkbox" class="checkbox" name="check23"/>
                                            <div class="control__indicator check_box_work"></div>
                                    </label>  
                                </div>
                            </div>
                            <hr> 
                        </div>
                    </div>
                </div>
            </div>     
        </div>
     <!-- END MAIN CONTENT-->
     <!-- MAIN CONTENT-->
        <div id="menu2" class="tab-pane fade">
            <div class="main-content1">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
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
        </div>
     <!-- END MAIN CONTENT-->
     <!-- MAIN CONTENT-->
        <div id="menu3" class="tab-pane fade">
            <div class="main-content1">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <br>
                        <div class="row form-group">
                            <div class="col-md-3">
                               <label class=" form-control-label">Vacation Operator's Email</label>
                            </div>
                            <div class="col-md-6">
                               <input name="vacation_operators_email" placeholder="Email" class="form-control" type="text" value="<?php echo $post->vacational_operator_email;?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 control-label text-left">Operator's Website</label>
                            <div class="col-md-6">
                              <input name="operator_website" placeholder="Website" class="form-control" type="text" value="<?php echo $post->operators_website;?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 control-label text-left">Operator's Phone</label>
                            <div class="col-md-6">
                              <input name="operator_phone" placeholder="Phone" class="form-control" type="text" value="<?php echo $post->operators_phone_number;?>">
                            </div>
                         </div> 
                         <div class="row form-group">
                            <label class="col-md-3 control-label text-left">Operator's Address</label>
                            <div class="col-md-6">
                              <input name="operator_address" placeholder="Address" class="form-control" type="text" value="<?php echo $post->operators_address;?>">
                            </div>
                        </div>
                        <hr>  
                    </div> 
                </div>
            </div> 
        </div>
     <!-- END MAIN CONTENT-->
     <!-- MAIN CONTENT-->
        <div id="menu4" class="tab-pane fade">
            <div class="main-content1">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="policy-status-hotel">Payment Options</h5>
                            </div>
                            <div class="col-md-10">
                                <input list="hosting-plan" type="text" class="policy-input" name="payment_options" value="<?php echo $post->payment_option;?>">

                                    <datalist id="hosting-plan">
                                        <option value="Cash"/>
                                        <option value="Moneybookers"/>
                                        <option value="American Express"/>
                                        <option value="Paypal"/>
                                        <option value="Master/ Visa Card"/>
                                        <option value="Credit Card"/>
                                        <option value="Wire Transfer"/>
                                    </datalist>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="policy-status-hotel">Policy and Terms</h5>
                            </div>
                            <div class="col-md-10">
                                <textarea name="policy_and_terms" cols="80" rows="3" class="policy-car-description"><?php echo $post->policy_and_terms;?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!-- END MAIN CONTENT-->
        <div class="row">
            <div class="col-md-2" style="margin-bottom: 30px;">
                <button type="submit" class="addcar-button">Submit</button>
            </div>                                
        </div>
    </div>   
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
 
        $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
    });
    $(document).ready(function() {
    $("#datethere").datepicker();
  });
  </script>
   <script>
  $(document).ready(function() {
    $("#datehere").datepicker();
  });
</script>
