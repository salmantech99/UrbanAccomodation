 <form method="post" action="<?php echo base_url(); ?>Hotels/insert_room"> 
  <ul class="nav nav-tabs" style="margin-top: 76px;">
    <li class="active tabs_content_list" style="margin-top: 30px;"><a data-toggle="tab" href="#home" aria-expanded= "true" >General</a></li>
    <li class="tabs_content_lists" style="margin-top: 30px;"><a data-toggle="tab" href="#menu1" aria-expanded= "false" class="here">Amenties</a></li>
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
                                      <input list="browsers" name="room_type" class="form-control">
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
                                      <select name="hotel">
                                        <?php foreach($posts as $post){?>
                                         <option value="<?php echo $post->id;?>"><?php echo $post->hotel_name;?></option>
                                         <?php } ?>
                                      </select>
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
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Price" name="price">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Quantity</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37" value="1" min="1" style="margin-top: 15px;" name="quantity">
                                </div>
                            </div>
                           <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Minimum Stay</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Minimum Stay" name="minimum-stay">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Max Adults</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" value="1" name="max-adults">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Max Children</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Max Children" name="max-children">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">No. of Extra Beds</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Extra Beds" name="extra-beds">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status">Extra Bed Charges</h5>
                                </div>
                                <div class="col-md-2">
                                   <input class="form-control" type="number" id="order_37"  min="1" style="margin-top: 15px;" placeholder="Extra Charges" name="extra-bed-charges">
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
            <div class="main-content1">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control control--checkbox check-me check-to">  <span class="check-box-marg">Select All
                                                    <input type="checkbox" id="select_all" />
                                                    <div class="control__indicator"></div>
                                        </label>
                                        <hr>
                                    </div>
                                    <!-- ONE LINE -->
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Access via exterior corridors
                                        
                                                    <input name="amnesty[]" value="Access via exterior corridors" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>>
                                    <!-- <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Direct-dial phone
                                                    <input name="amnesty[]" value="Direct-dial phone" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">In-room childcare (surcharge)
                                                    <input value="In-room childcare (surcharge)" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Bathrobes
                                                    <input name="amnesty[]" value="Bathrobes" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Climate control
                                                    <input name="amnesty[]" value="Climate control" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Hair dryer
                                                    <input name="amnesty[]" value="Hair dryer" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Makeup/shaving mirror
                                                    <input name="amnesty[]" value="Makeup/shaving mirror" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Individually decorated
                                                    <input name="amnesty[]" value="Individually decorated" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg"> Refrigerator
                                                    <input name="amnesty[]" value="Refrigerator" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Air conditioning
                                                    <input name="amnesty[]" value="Air conditioning" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Cribs/infant beds available
                                                    <input name="amnesty[]" value="Cribs/infant beds available" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Handheld showerhead
                                                    <input name="amnesty[]" value="Handheld showerhead" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Minibar
                                                    <input name="amnesty[]" value="Minibar" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Bathrobes</span>
                                                    <input name="amnesty[]" value="Bathrobes" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Daily housekeeping</span>
                                                    <input name="amnesty[]" value="Daily housekeeping" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Hypo-allergenic bedding available</span>
                                                    <input name="amnesty[]" value="Hypo-allergenic bedding available" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Private bathroom</span>
                                                    <input name="amnesty[]" value="Private bathroom" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Bathroom phone</span>
                                                    <input name="amnesty[]" value="Bathroom phone" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Extra towels/bedding</span>
                                                    <input name="amnesty[]" value="Extra towels/bedding" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> In-room safe (laptop compatible)</span>
                                                    <input name="amnesty[]" value="In-room safe (laptop compatible)" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Shower/tub combination</span>
                                                    <input name="amnesty[]" value="Shower/tub combination" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Blackout drapes/curtains</span>
                                                    <input name="amnesty[]" value="Blackout drapes/curtains" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Dial-up Internet access (surcharge)</span>
                                                    <input name="amnesty[]" value="Dial-up Internet access (surcharge)" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Individually furnished</span>
                                                    <input name="amnesty[]" value="Individually furnished" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Satellite TV service</span>
                                                    <input name="amnesty[]" value="Satellite TV service" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">City view</span>
                                                    <input name="amnesty[]" value="City view" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Complimentary toiletries</span>
                                                    <input name="amnesty[]" value="Complimentary toiletries" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Free Wi-Fi</span>
                                                    <input name="amnesty[]" value="Free Wi-Fi" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Iron/ironing board (on request)</span>
                                                    <input name="amnesty[]" value="Iron/ironing board (on request)" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> Slippers</span>
                                                    <input name="amnesty[]" value="Slippers" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Complimentary weekday newspaper</span>
                                                    <input name="amnesty[]" value="Complimentary weekday newspaper" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Free wired high-speed Internet</span>
                                                    <input name="amnesty[]" value="Free wired high-speed Internet" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"><span class="check-box-marg"> LCD TV</span>
                                                    <input name="amnesty[]" value="LCD TV" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Wake-up calls</span>
                                                    <input name="amnesty[]" value="Wake-up calls" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div>
                                    <div class="col-md-4">
                                      <label class="control control--checkbox check-me"> <span class="check-box-marg">Bathroom Phone</span>
                                                    <input name="amnesty[]" value="Bathroom Phone" type="checkbox" class="checkbox"/>
                                                    <div class="control__indicator"></div>
                                        </label>  
                                    </div> -->
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
</script>
