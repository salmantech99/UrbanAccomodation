<div class="main-content">
  <form method="post" action="<?php echo base_url(); ?>Car/edit_car">
    <div class="section__content section__content--p30">
        <ul class="nav nav-tabs">
            <li class="active tabs_content_lists"><a data-toggle="tab" href="#home" aria-expanded= "true" class="cars-add-tabs">Cars General</a></li>
            <li class="tabs_content_lists"><a data-toggle="tab" href="#menu2" aria-expanded= "false" class="cars-add-tabs">Meta Info</a></li>
            <li class="tabs_content_lists"><a data-toggle="tab" href="#menu3" aria-expanded= "false" class="cars-add-tabs">Policy</a></li>
        </ul>
            <!-- MAIN CONTENT--> 
        <div class="tab-content">                                 
            <div id="home" class="tab-pane fade in active fade active show">
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
                                <h5 class="addcar-name">Car Name</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="car_name" class="input-car-name" placeholder="Car Name" value="<?php echo $post->car_name;?>">
                                <input type="hidden" value="<?php echo $post->id;?>" name="id">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Car Description</h5>
                            </div>
                            <div class="col-md-10">
                                <textarea name="editor1"><?php echo $post->car_description;?></textarea>
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
                                <h5 class="addcar-pickup">Passenger</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control addcar-status-work" name="passenger" value="<?php echo $post->passenger;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Car Doors</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control addcar-status-work" name="car_doors" value="<?php echo $post->car_doors;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Transmission</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control addcar-status-work" name="transmission" value="<?php echo $post->transmission;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Baggage</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control addcar-status-work" name="baggage" value="<?php echo $post->baggage;?>">
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
                                <h5 class="addcar-pickup">Milage</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="" name="milage" class="addcar-passenger-work" value="<?php echo $post->milage;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Car Pickup</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="" name="pickup" class="addcar-passenger-work" value="<?php echo $post->pick_up;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Car Type</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="" name="car-type" class="addcar-passenger-work" value="<?php echo $post->car_type;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Pick up location</h5>
                            </div>
                            <div class="col-md-3">
                                
                                <div class="dropdown">
                                    <p class="addcar-pick-work">Enter Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                  <div class="dropdown-content">
                                   <input value="<?php echo $post->pickup_location1;?>" type="text" name="pickup_location1" placeholder="Location" class="addcar-input-pick" />
                                   
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Drop off location</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <p class="addcar-pick-work">Enter Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                  <div class="dropdown-content">
                                   <input value="<?php echo $post->dropoff_location1;?>" type="text" name="dropoff_location1" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input value="<?php echo $post->price1;?>" type="text" name="price1" class="input-car-price">
                            </div>

                        </div>
                        <div class="row cars_add_rows">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-3">
                            </div>
                             <div class="col-md-2">
                                <h5 class="addcar-pickup">Drop off location</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <p class="addcar-pick-work">Enter Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                  <div class="dropdown-content">
                                   <input value="<?php echo $post->dropoff_location2;?>" type="text" name="dropoff_location2" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input value="<?php echo $post->price2;?>" type="text" name="price2" class="input-car-price">
                            </div>

                        </div>
                        <div class="row cars_add_rows">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-3">
                            </div>
                             <div class="col-md-2">
                                <h5 class="addcar-pickup">Drop off location</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <p class="addcar-pick-work">Enter Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                  <div class="dropdown-content">
                                   <input value="<?php echo $post->dropoff_location3;?>" type="text" name="dropoff_location3" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input value="<?php echo $post->price3;?>" type="text" name="price3" class="input-car-price">
                            </div>

                        </div>
                        <div class="row cars_add_rows">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-3">
                            </div>
                             <div class="col-md-2">
                                <h5 class="addcar-pickup">Drop off location</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <p class="addcar-pick-work">Enter Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                  <div class="dropdown-content">
                                   <input value="<?php echo $post->dropoff_location4;?>" type="text" name="dropoff_location4" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input value="<?php echo $post->price4;?>" type="text" name="price4" class="input-car-price">
                            </div>

                        </div>
                        <div class="row cars_add_rows">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-3">
                            </div>
                             <div class="col-md-2">
                                <h5 class="addcar-pickup">Drop off location</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <p class="addcar-pick-work">Enter Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                  <div class="dropdown-content">
                                   <input value="<?php echo $post->dropoff_location5;?>" type="text" name="dropoff_location5" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input value="<?php echo $post->price5;?>" type="text" name="price5" class="input-car-price">
                            </div>
                        </div>
                        <div class="row cars_add_rows">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-3">
                            </div>
                             <div class="col-md-2">
                                <h5 class="addcar-pickup">Drop off location</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <p class="addcar-pick-work">Enter Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                  <div class="dropdown-content">
                                   <input value="<?php echo $post->dropoff_location6;?>" type="text" name="dropoff_location6" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input value="<?php echo $post->price6;?>" type="text" name="price6" class="input-car-price">
                            </div>
                        </div>
                        <div class="row cars_add_rows">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-3">
                            </div>
                             <div class="col-md-2">
                                <h5 class="addcar-pickup">Drop off location</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <p class="addcar-pick-work">Enter Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                  <div class="dropdown-content">
                                   <input value="<?php echo $post->dropoff_location7;?>" type="text" name="dropoff_location7" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input value="<?php echo $post->price7;?>" type="text" name="price7" class="input-car-price">
                            </div>
                        </div>
                        <div class="row cars_add_rows">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-3">
                            </div>
                             <div class="col-md-2">
                                <h5 class="addcar-pickup">Drop off location</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <p class="addcar-pick-work">Enter Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                  <div class="dropdown-content">
                                   <input value="<?php echo $post->dropoff_location8;?>" type="text" name="dropoff_location8" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input value="<?php echo $post->price8;?>" type="text" name="price8" class="input-car-price">
                            </div>
                        </div>
                        <div class="row cars_add_rows">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-3">
                            </div>
                             <div class="col-md-2">
                                <h5 class="addcar-pickup">Drop off location</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <p class="addcar-pick-work">Enter Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                  <div class="dropdown-content">
                                   <input value="<?php echo $post->dropoff_location9;?>" type="text" name="dropoff_location9" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input value="<?php echo $post->price9;?>" type="text" name="price9" class="input-car-price">
                            </div>
                        </div>
                        <div class="row cars_add_rows">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-3">
                            </div>
                             <div class="col-md-2">
                                <h5 class="addcar-pickup">Drop off location</h5>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <p class="addcar-pick-work">Enter Location<i class="fas fa-sort-down pick-arrow"></i></p>
                                  <div class="dropdown-content">
                                   <input value="<?php echo $post->dropoff_location10;?>" type="text" name="dropoff_location10" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input value="<?php echo $post->price10;?>" type="text" name="price10" class="input-car-price">
                            </div>
                        </div>
                        <div class="row cars_add_rows">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Featured</h5>
                            </div>
                            <div class="col-md-3">
                                <select name="featured" class="addcar-passenger-work">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group has-feedback car-cal-from">
                                   <input value="<?php echo $post->featured_from;?>" type="text" class="form-control car-place-from" id="datepicker" placeholder="From" id="input" name="date-from">
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="form-group has-feedback car-cal-from">
                                   <input value="<?php echo $post->featured_to;?>" type="text" class="form-control car-place-from" id="datechecker" placeholder="To" id="input" name="date-to">
                                </div>
                             </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Deposit / Commission</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control addcar-status-work" name="deposit" value="<?php echo $post->deposit;?>">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="deposit_price" class="addcar-input-deposit" value="<?php echo $post->deposit_price;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Vat Tax</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control addcar-status-work" name="vat_tax" value="<?php echo $post->vat_tax;?>">
                            </div>
                            <div class="col-md-3">
                                <input value="<?php echo $post->vat_tax_detail;?>" type="" name="vat_tax_detail" class="addcar-input-deposit">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2" style="margin-bottom: 30px;">
                                <h5 class="addcar-pickup">Related Cars</h5>
                            </div>
                            <div class="col-md-10">
                                <input value="<?php echo $post->related;?>" type="" name="related" class="addcar-input-related">
                            </div>
                        </div>
                        
                </div>
            </div>
                <!-- END GENERAL -->
        
                <!-- MAIN CONTENT-->
            <div id="menu2" class="tab-pane fade">
                <div class="container-fluid">
                    <br>
                        <div class="row form-group">
                            <div class="col col-md-2">
                            <label class=" form-control-label">Meta Title</label>
                            </div>
                            <div class="col-12 col-md-6">
                            <input value="<?php echo $post->meta_title;?>" name="title" placeholder="Meta Title" class="form-control car-place-from" type="text">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-2 control-label text-left">Meta Keywords</label>
                            <div class="col-md-6">
                              <textarea name="meta_keywords" placeholder="Meta Keywords" class="form-control car-place-from" id="" cols="30" rows="2"><?php echo $post->meta_keywords;?></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-2 control-label text-left">Meta Description</label>
                            <div class="col-md-6">
                              <textarea name="meta_description" placeholder="Meta Description" class="form-control car-place-from" id="" cols="30" rows="4"><?php echo $post->meta_description;?></textarea>
                            </div>
                        </div>  
                </div> 
            </div>
                <!-- END MAIN CONTENT-->
                <!-- MAIN CONTENT-->
            <div id="menu3" class="tab-pane fade">
                <div class="container-fluid">
                    <form>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="policy-status">Payment Options</h5>
                            </div>
                            <div class="col-md-10">
                                <input value="<?php echo $post->policy_options;?>" name="payment" list="hosting-plan" type="text" class="policy-input">
                                    <datalist  id="hosting-plan">
                                        <option value="Cash"/>
                                        <option value="Pay on Arrival"/>
                                        <option value="Credit Card"/>
                                        <option value="Wire Transfer"/>
                                    </datalist>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="policy-status">Policy and Terms</h5>
                            </div>
                            <div class="col-md-10">
                                <textarea name="policy" id="" cols="80" rows="3" class="policy-car-description"><?php echo $post->policy_and_terms;?></textarea>
                            </div>
                        </div>
                      
                </div>
            </div>
                <!-- END MAIN CONTENT-->
        </div>
    </div>
                         <div class="row">
                            <div class="col-md-2" style="margin-bottom: 30px;">
                                <button type="submit" class="addcar-button">Submit</button>
                            </div>                                
         

                  </div>
  </form> 
</div>
