<div class="main-content">
    <div class="section__content section__content--p30">
    	<form method="post" action="<?php echo base_url(); ?>Flights/insert_update_flight">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="box1 effect1">
	                        <h4 class="flight-table">FLIGHT MANAGEMENT</h4>
	                    </div>
	                </div>
	            </div>
	            <div class="row testing-mode">
	            	 <div class="col-md-1">
	            	 	<h6>Status</h6>
	            	 </div>
	            	 <div class="col-md-2">
	            	 	<select name="status" class="flight-management">
	            	 		<option>Enabled</option>
	            	 		<option>Disabled</option>
	            	 	</select>
	            	 </div>
	            	 <div class="col-md-1">
	            	 	<h6>Total Hours</h6>
	            	 </div>
	            	 <div class="col-md-2">
	            	 	<i class="fa fa-clock hours-work"></i><input type="text" name="total-hours" class="flight-hours" value="<?php echo $post->total_hours;?>">
	            	 	 <input type="hidden" value="<?php echo $post->id;?>" name="id">
	            	 </div>
	            	 <div class="col-md-1">
	            	 	<h6>Vat Tax</h6>
	            	 </div>
	            	 <div class="col-md-2">
	            	 	<i class="fa fa-percent hours-work"></i><input type="text" name="vat-tax" class="flight-hours" value="<?php echo $post->vat_tax;?>">
	            	 </div>
	            	 <div class="col-md-1">
	            	 	<h6>Deposit</h6>
	            	 </div>
	            	 <div class="col-md-2">
	            	 	<i class="fa fa-percent hours-work"></i><input type="text" name="deposit" class="flight-hours" value="<?php echo $post->deposit;?>">
	            	 </div>
	            </div>
	            <input type="hidden" value="<?php echo $post->flight_id;?>" name="flight_id">
	            <div class="row routes-one">
	                <div class="col-md-12">
	                    <div class="box1 effect1">
	                        <h4 class="flight-table">One Way</h4>
	                    </div>
	                </div>
	            </div>
	            <div class="row routes-manage">
	            	<div class="col-md-12">
	            		<div class="row">
	            			<div class="col-md-3 routes-flight">
	            				
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
	            			<div class="col-md-3 routes-flight3">
	            				<p style="text-align: center;">Price</p>
	            			</div>
	            			<div class="col-md-3 routes-flight2">
	            				<input type="text" name="adult" class="input-route" value="<?php echo $post->price_adults;?>">
	            			</div>
	            			<div class="col-md-3 routes-flight2">
	            				<input type="text" name="child" class="input-route" value="<?php echo $post->price_child;?>">
	            			</div>
	            			<div class="col-md-3 routes-flight2">
	            				<input type="text" name="infant" class="input-route" value="<?php echo $post->price_infant;?>">
	            			</div>
	            		</div>
	            		<div class="row routes-manage">
	            			<div class="col-md-2 routes-flight1">
	            				<h6>TYPE</h6>
	            			</div>
	            			<div class="col-md-2 routes-flight1">
	            				<h6>CITY-AIRPORT</h6>
	            			</div>
	            			<div class="col-md-2 routes-flight1">
	            				<h6>AIRLINE</h6>
	            			</div>
	            			<div class="col-md-2 routes-flight1">
	            				<h6>FLIGHT NO.</h6>
	            			</div>
	            			<div class="col-md-2 routes-flight1">
	            				<h6>DATE</h6>
	            			</div>
	            			<div class="col-md-2 routes-flight1">
	            				<h6>TIME</h6>
	            			</div>
	            		</div>
	            		<div class="row one-way-route">
	            			<div class="col-md-2">
	            				<p class="routes-departure" style="text-align: center;">Departure</p>
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<div class="dropdown" style="    margin-left: 36px;">
                                    <p class="addcar-pick-work1">Enter Location<i class="fas fa-sort-down pick-arrow1"></i></p>
                                  <div class="dropdown-content route-drop">
                                   <input type="text" name="pickup_location1" placeholder="Location" class="addcar-input-pick2" value="<?php echo $post->departure_city;?>" />
                                   
                                  </div>
                                </div>
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<div class="dropdown" style="    margin-left: 36px;">
                                    <p class="addcar-pick-work1">Enter Location<i class="fas fa-sort-down pick-arrow1"></i></p>
                                  <div class="dropdown-content route-drop">
                                   <input type="text" name="pickup_location2" placeholder="Location" class="addcar-input-pick2" value="<?php echo $post->departure_airline;?>"/>
                                   
                                  </div>
                                </div>
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" name="flight-no" class="route-infant" placeholder="Flight No" value="<?php echo $post->departure_flightno;?>">
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" name="date" class="route-infant" placeholder="Optional Date" value="<?php echo $post->departure_date;?>">
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" name="check-in" class="route-infant" placeholder="Check in" value="<?php echo $post->departure_time;?>">
	            			</div>
	            		</div>
	            		<div class="row one-way-route">
	            			<div class="col-md-2">
	            				<p class="routes-departure" style="text-align: center;">Arrival</p>
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<div class="dropdown" style="    margin-left: 36px;">
                                    <p class="addcar-pick-work1">Enter Location<i class="fas fa-sort-down pick-arrow1"></i></p>
                                  <div class="dropdown-content route-drop">
                                   <input type="text" name="pickup_location3" placeholder="Location" class="addcar-input-pick2" value="<?php echo $post->arrival_city;?>"/>
                                   
                                  </div>
                                </div>
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<div class="dropdown" style="    margin-left: 36px;">
                                    <p class="addcar-pick-work1">Enter Location<i class="fas fa-sort-down pick-arrow1"></i></p>
                                  <div class="dropdown-content route-drop">
                                   <input type="text" name="pickup_location4" placeholder="Location" class="addcar-input-pick2" value="<?php echo $post->arrival_airline;?>" />
                                   
                                  </div>
                                </div>
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" name="flights-no" class="route-infant" placeholder="Flight No" value="<?php echo $post->arrival_flightno;?>">
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" name="ar-child" class="route-infant" placeholder="Optional Date" value="<?php echo $post->arrival_date;?>">
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" name="ar-infant" class="route-infant" placeholder="Check in" value="<?php echo $post->arrival_time;?>">
	            			</div>
	            		</div>
	            		<div class="row routes-one">
			                <div class="col-md-12">
			                    <div class="box1 effect1">
			                        <h4 class="flight-table">DESCRIPTION AND BAGGAGE INFO</h4>
			                    </div>
			                </div>
			                <div class="col-md-12">
								<textarea name="editor1"><?php echo $post->description;?></textarea>
			                </div>
			            </div>
	            	</div>
	            </div>
	        </div> 
	        <div class="row routes-one">
                <div class="col-md-2" style="margin-bottom: 30px;">
                    <button type="submit" class="addcar-button">Submit</button>
                </div>                                
            </div>
	    </form>
	</div>
</div>
