 <form method="post" action="<?php echo base_url(); ?>Hotels/insert_update_room"> 
  <ul class="nav nav-tabs" style="margin-top: 76px;">
    <li class="active"><a data-toggle="tab" href="#home" aria-expanded= "true" >General</a></li>
    <li><a data-toggle="tab" href="#menu1" aria-expanded= "false" class="here">Amenties</a></li>
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
                                    <select class="addcar-status-work form-control" name="status">
                                        <option value="enabled">Enabled</option>
                                        <option value="disabled">Disabled</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-2">
                                    <h5 class="t">Room Type</h5>
                                </div>
                                <div class="col-md-10">
                                      <input list="browsers" name="room_type" class="form-control" value="<?php echo $post->room_type;?>">
                                      <input type="hidden" value="<?php echo $post->id;?>" name="id">
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
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Price" name="price" value="<?php echo $post->price;?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Quantity</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37" min="1" style="margin-top: 15px;" name="quantity" value="<?php echo $post->quantity;?>">
                                </div>
                            </div>
                           <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Minimum Stay</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Minimum Stay" name="minimum-stay" value="<?php echo $post->minimum_stay;?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Max Adults</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" name="max-adults" value="<?php echo $post->max_adults;?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Max Children</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Max Children" name="max-children" value="<?php echo $post->max_children;?>">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">No. of Extra Beds</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Extra Beds" name="extra-beds" value="<?php echo $post->extra_beds;?>">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Extra Bed Charges</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Extra Charges" name="extra-bed-charges" value="<?php echo $post->extra_bed_charges;?>">
                                </div>
                            </div>
                            <hr>
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
                                        <label class="control control--checkbox check-me check-to">  <span class="check-box-marg">Select All
                                                    <input type="checkbox"/  name="amnesty">
                                                    <div class="control__indicator"></div>
                                        </label>
                                        <hr>
                                    </div>
                                    <!-- ONE LINE -->
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Access via exterior corridors
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Direct-dial phone
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">In-room childcare (surcharge)
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Bathrobes
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Climate control
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Hair dryer
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Makeup/shaving mirror
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Individually decorated
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg"> Refrigerator
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Air conditioning
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Cribs/infant beds available
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Handheld showerhead
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Minibar
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Bathrobes</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Daily housekeeping</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Hypo-allergenic bedding available</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Private bathroom</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Bathroom phone</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Extra towels/bedding</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> In-room safe (laptop compatible)</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Shower/tub combination</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Blackout drapes/curtains</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Dial-up Internet access (surcharge)</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Individually furnished</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Satellite TV service</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">City view</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Complimentary toiletries</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Free Wi-Fi</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Iron/ironing board (on request)</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Slippers</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Complimentary weekday newspaper</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Free wired high-speed Internet</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> LCD TV</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Wake-up calls</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Bathroom Phone</span>
                                                    <input type="checkbox"/>
                                                    <div class="control__indicator"></div>
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

  </div>
           <div class="row routes-one">
                <div class="col-md-2" style="margin-bottom: 30px;">
                    <button type="submit" class="addcar-button">Submit</button>
                </div>                                
            </div>
</form>
