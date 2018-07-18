<div class="main-content">
  <form method="post" action="<?php echo base_url(); ?>backend/insert_car">
    <div class="section__content section__content--p30">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home" aria-expanded= "true" class="cars-add-tabs">Cars General</a></li>
            <li><a data-toggle="tab" href="#menu2" aria-expanded= "false" class="cars-add-tabs">Meta Info</a></li>
            <li><a data-toggle="tab" href="#menu3" aria-expanded= "false" class="cars-add-tabs">Policy</a></li>
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
                                    <option value="1">Enabled</option>
                                    <option value="0">Disabled</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-name">Car Name</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="car_name" class="input-car-name" placeholder="Car Name">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Car Description</h5>
                            </div>
                            <div class="col-md-10">
                                <textarea name="editor1"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Stars</h5>
                            </div>
                            <div class="col-md-10">
                                <select name="stars" class="addcar-status-work">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Passenger</h5>
                            </div>
                            <div class="col-md-10">
                                <select name="passenger" class="addcar-passenger-work">
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Car Doors</h5>
                            </div>
                            <div class="col-md-10">
                                <select name="car_doors" class="addcar-passenger-work">
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Transmission</h5>
                            </div>
                            <div class="col-md-10">
                                <select name="transmission" class="addcar-passenger-work">
                                    <option value="auto">Auto</option>
                                    <option value="manual">Manual</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Baggage</h5>
                            </div>
                            <div class="col-md-10">
                                <select name="baggage" class="addcar-passenger-work">
                                    <option value="x1">x1</option>
                                    <option value="x2">x2</option>
                                    <option value="x3">x3</option>
                                    <option value="x4">x4</option>
                                    <option value="x5">x5</option>
                                    <option value="x6">x6</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Airport Pickup</h5>
                            </div>
                            <div class="col-md-10">
                                <select name="airport_pickup" class="addcar-passenger-work">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Car Type</h5>
                            </div>
                            <div class="col-md-10">
                                <select name="car_type" class="addcar-passenger-work">
                                    <option disabled selected>Select</option>
                                    <option value="van">Van</option>
                                    <option value="luxury">luxury</option>
                                    <option value="fullsize">Fullsize</option>
                                    <option value="standard">Standard</option>
                                    <option value="compact">Compact</option>
                                    <option value="economy">Economy</option>
                                    <option value="mini">Mini</option>
                                </select>
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
                                   <input type="text" name="pickup_location1" placeholder="Location" class="addcar-input-pick" />
                                   
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
                                   <input type="text" name="dropoff_location1" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="price1" class="input-car-price">
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
                                   <input type="text" name="pickup_location2" placeholder="Location" class="addcar-input-pick" />
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
                                   <input type="text" name="dropoff_location2" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="price2" class="input-car-price">
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
                                   <input type="text" name="pickup_location3" placeholder="Location" class="addcar-input-pick" />
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
                                   <input type="text" name="dropoff_location3" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="price3" class="input-car-price">
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
                                   <input type="text" name="pickup_location4" placeholder="Location" class="addcar-input-pick" />
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
                                   <input type="text" name="dropoff_location4" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="price4" class="input-car-price">
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
                                   <input type="text" name="pickup_location5" placeholder="Location" class="addcar-input-pick" />
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
                                   <input type="text" name="dropoff_location5" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="price5" class="input-car-price">
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
                                   <input type="text" name="pickup_location6" placeholder="Location" class="addcar-input-pick" />
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
                                   <input type="text" name="dropoff_location6" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="price6" class="input-car-price">
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
                                   <input type="text" name="pickup_location7" placeholder="Location" class="addcar-input-pick" />
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
                                   <input type="text" name="dropoff_location7" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="price7" class="input-car-price">
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
                                   <input type="text" name="pickup_location8" placeholder="Location" class="addcar-input-pick" />
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
                                   <input type="text" name="dropoff_location8" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="price8" class="input-car-price">
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
                                   <input type="text" name="pickup_location9" placeholder="Location" class="addcar-input-pick" />
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
                                   <input type="text" name="dropoff_location9" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="price9" class="input-car-price">
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
                                   <input type="text" name="pickup_location10" placeholder="Location" class="addcar-input-pick" />
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
                                   <input type="text" name="dropoff_location10" placeholder="Location" class="addcar-input-pick" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h5 class="addcar-pickup">Price</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="price10" class="input-car-price">
                            </div>
                        </div>
                        <div class="row">
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
                                   <input type="text" class="form-control car-place-from" id="datepicker" placeholder="From" id="input" name="date-from">
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="form-group has-feedback car-cal-from">
                                   <input type="text" class="form-control car-place-from" id="datechecker" placeholder="To" id="input" name="date-to">
                                </div>
                             </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Deposit / Commission</h5>
                            </div>
                            <div class="col-md-3">
                                <select name="deposit" class="addcar-passenger-work">
                                    <option value="fixed">Fixed</option>
                                    <option value="percentage">Percentage</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="" name="" class="addcar-input-deposit">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-pickup">Var Tax</h5>
                            </div>
                            <div class="col-md-3">
                                <select name="var_tax" class="addcar-passenger-work">
                                    <option value="fixed">Fixed</option>
                                    <option value="percentage">Percentage</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="" name="" class="addcar-input-deposit">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2" style="margin-bottom: 30px;">
                                <h5 class="addcar-pickup">Related Cars</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="" name="related" class="addcar-input-related">
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
                            <input name="title" placeholder="Meta Title" class="form-control car-place-from" type="text">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-2 control-label text-left">Meta Keywords</label>
                            <div class="col-md-6">
                              <textarea name="meta_keywords" placeholder="Meta Keywords" class="form-control car-place-from" id="" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-2 control-label text-left">Meta Description</label>
                            <div class="col-md-6">
                              <textarea name="meta_description" placeholder="Meta Description" class="form-control car-place-from" id="" cols="30" rows="4"></textarea>
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
                                <input name="payment" list="hosting-plan" type="text" class="policy-input">
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
                                <textarea name="policy" id="" cols="80" rows="3" class="policy-car-description"></textarea>
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
