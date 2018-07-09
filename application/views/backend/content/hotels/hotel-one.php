
  <h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>
<br>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home" aria-expanded= "true" >Hotel General</a></li>
    <li><a data-toggle="tab" href="#menu1" aria-expanded= "false">Hotel Extras</a></li>
    <li><a data-toggle="tab" href="#menu2" aria-expanded= "false">Hotel Meta</a></li>
    <li><a data-toggle="tab" href="#menu3" aria-expanded= "false">Contact</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
                             
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Status</h5>
                                </div>
                                <div class="col-md-10">
                                    <select class="addcar-status-work">
                                        <option>Enabled</option>
                                        <option>Disabled</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Hotel Name</h5>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="" class="input-car-name" placeholder="Hotel Name">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Hotel Description</h5>
                                </div>
                                <div class="col-md-10">
                                    <textarea name="" id="" cols="100" rows="6" class="input-car-description" placeholder="Hotel Description"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Stars</h5>
                                </div>
                                <div class="col-md-10">
                                    <select class="addcar-status-work">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Hotel Type</h5>
                                </div>
                                <div class="col-md-10">
                                    <select class="addcar-passenger-work">
                                        <option>Apartment</option>
                                        <option>Hotel</option>
                                        <option>Guest Room</option>
                                        <option>Motel</option>
                                        <option>Residence</option>
                                        <option>Resort</option>
                                        <option>Time Share</option>
                                        <option>Extended Stay</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Location</h5>
                                </div>
                                <div class="col-md-10">
                                    <select class="addcar-passenger-work">
                                        <option>Auto</option>
                                        <option>Manual</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Airport Pickup</h5>
                                </div>
                                <div class="col-md-10">
                                    <select class="addcar-passenger-work">
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup">Featured</h5>
                                </div>
                                <div class="col-md-3">
                                    <select class="addcar-passenger-work">
                                        <option>No</option>
                                        <option>Yes</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback car-cal-from">
                                       <input type="text" class="form-control" id="datepicker" placeholder="From" id="input">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group has-feedback car-cal-from">
                                       <input type="text" class="form-control" id="datechecker" placeholder="From" id="input">
                                    </div>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-pickup tax">Var Tax</h5>
                                </div>
                                <div class="col-md-3">
                                    <select class="addcar-passenger-work">
                                        <option>Fixed</option>
                                        <option>Percentage</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="" name="" class="addcar-input-deposit">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2" style="margin-bottom: 30px;">
                                    <h5 class="addcar-pickup">Related Hotels</h5>
                                </div>
                                <div class="col-md-8">
                                    <input type="" name="" class="addcar-input-related">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2" style="margin-bottom: 30px;">
                                    <button type="submit" class="addcar-button">Submit</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
            <!-- END GENERAL -->
    </div>
    <div id="menu1" class="tab-pane fade">
                    <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <h4>Add Hotel</h4>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control control--checkbox check-me check-to"> Select All
                                                    <input type="checkbox"/ >
                                                    <div class="control__indicator"></div>
                                        </label>
                                        <hr>
                                    </div>
                                    <!-- ONE LINE -->
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Airport Transport
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Night Club
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Business Center
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Disabled Facilities
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Restaurant
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Laundry Service
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Swimming Pool
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Bar Lounge
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Wi-Fi Internet
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Fitness Center
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Shuttle Bus Service
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Inside Parking
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> SPA
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Bissiness Class Traveling
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Fitness Center
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Banquet Hall
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Children Activites
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Air Conditioner
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Pets Allowed
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Cards Accepted
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Elevator
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                </div>
                                <hr>
                                <a class="btn btn-primary blue-btn" href="#" role="button">Submit</a>
                                
                            </div>
                    </div>
                </div>
            </div> 
            <!-- END MAIN CONTENT-->
    </div>
    <div id="menu2" class="tab-pane fade">
                    <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <h4>Add Hotel</h4>
                            <form><br>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                    <label class=" form-control-label">Meta Title</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <input name="title" placeholder="Meta Title" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-2 control-label text-left">Meta Keywords</label>
                                    <div class="col-md-6">
                                      <textarea name="hotelkeywords" placeholder="Meta Keywords" class="form-control" id="" cols="30" rows="2"></textarea>
                                    </div>
                              </div>
                              <div class="row form-group">
                                    <label class="col-md-2 control-label text-left">Meta Description</label>
                                    <div class="col-md-6">
                                      <textarea name="hotelkeywords" placeholder="Meta Description" class="form-control" id="" cols="30" rows="4"></textarea>
                                    </div>
                              </div> 
                            </form>  
                                <hr>
                                <a class="btn btn-primary blue-btn" href="#" role="button">Submit</a>  
                            </div> 
                    </div>
                </div> 
            <!-- END MAIN CONTENT-->
    </div>
    <div id="menu3" class="tab-pane fade">
                  <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <h4>Add Hotel</h4>
                            <form><br>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                    <label class=" form-control-label">Hotel's Email</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <input name="email" placeholder="Email" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-2 control-label text-left">Hotel's Website</label>
                                    <div class="col-md-6">
                                      <input name="website" placeholder="Website" class="form-control" type="text">
                                    </div>
                              </div>
                              <div class="row form-group">
                                    <label class="col-md-2 control-label text-left">Phone</label>
                                    <div class="col-md-6">
                                      <input name="phone" placeholder="Phone" class="form-control" type="text">
                                    </div>
                              </div> 
                            </form>  
                                <hr>
                                <a class="btn btn-primary blue-btn" href="#" role="button">Submit</a>  
                            </div> 
                    </div>
                </div> 
            <!-- END MAIN CONTENT-->
    </div>
  </div>
