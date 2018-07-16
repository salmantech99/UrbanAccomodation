
  <h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>
<br>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home" aria-expanded= "true" >General</a></li>
    <li><a data-toggle="tab" href="#menu1" aria-expanded= "false" class="here">Amenties</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active fade active show">
                             
                       
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
                                    <select class="addcar-status-work form-control">
                                        <option>Enabled</option>
                                        <option>Disabled</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-2">
                                    <h5 class="t">Room Type</h5>
                                </div>
                                <div class="col-md-10">
                                      <input list="browsers" name="browser" class="form-control">
                                  <datalist id="browsers">
                                    <option value="One-Bedroom Apartment">
                                    <option value="One-Bedroom Apartment">
                                    <option value="Studio Apartment with Creek View">
                                    <option value="Superior Double">
                                    <option value="Superior Tripple">
                                    <option value="Double or Twin Rooms">
                                  </datalist>
  
                                </div>
                            </div>
                              <div class="row" style="margin-top: 20px;">
                                <div class="col-md-2">
                                    <h5 class="t">Hotel</h5>
                                </div>
                                <div class="col-md-10">
                                      <input list="browsers" name="browser" class="form-control">
                                  <datalist id="browsers">
                                    <option value="Hotel the Le shanze">
                                    <option value="Safari Hotel, Lahore">
                                    <option value="The Leela Palace Hotel">
                                    <option value="The PC Hotel,Lahore">
                                    <option value="Rose Rayhaan Rotana">
                                    <option value="Hayaat Regency Perht">
                                  </datalist>
  
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Room Description</h5>
                            </div>
                            <div class="col-md-10">
                                <textarea name="editor1"></textarea>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Price</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Price">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Quantity</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37" value="1" min="1" style="margin-top: 15px;">
                                </div>
                            </div>
                           <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Minimum Stay</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Minimum Stay">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Max Adults</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Max Childern</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Max Childern">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">No. of Extra Beds</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Extra Beds">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Extra Bed Charges</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Extra Charges">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2" style="margin-bottom: 30px;">
                                    <button type="submit" class="addcar-button">Submit</button>
                                </div>
                            </div>
                            <hr>
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
                            <h4>Add Room</h4>
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
                                      <label class="control control--checkbox check-me"> Access via exterior corridors
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Direct-dial phone
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> In-room childcare (surcharge)
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Bathrobes
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Climate control
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Hair dryer
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Makeup/shaving mirror
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Individually decorated
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me">  Refrigerator
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Air conditioning
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Cribs/infant beds available
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Handheld showerhead
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Minibar
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Bathrobes
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Daily housekeeping
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Hypo-allergenic bedding available
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Private bathroom
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Bathroom phone
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Extra towels/bedding
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> In-room safe (laptop compatible)
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Shower/tub combination
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Blackout drapes/curtains
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Dial-up Internet access (surcharge)
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Individually furnished
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Satellite TV service
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> City view
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Complimentary toiletries
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Free Wi-Fi
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Iron/ironing board (on request)
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Slippers
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Complimentary weekday newspaper
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Free wired high-speed Internet
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> LCD TV
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Wake-up calls
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> Bathroom Phone
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

  </div>
