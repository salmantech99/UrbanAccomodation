<div class="main-content">
    <div class="section__content section__content--p30">
    	<form method="post" action="<?php echo base_url(); ?>Flights/insert_flight">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="box2 effect1">
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
	            	 	<i class="fa fa-clock hours-work"></i><input type="text" name="total-hours" class="flight-hours">
	            	 </div>
	            	 <div class="col-md-1">
	            	 	<h6>Vat Tax</h6>
	            	 </div>
	            	 <div class="col-md-2">
	            	 	<i class="fa fa-percent hours-work"></i><input type="text" name="vat-tax" class="flight-hours">
	            	 </div>
	            	 <div class="col-md-1">
	            	 	<h6>Deposit</h6>
	            	 </div>
	            	 <div class="col-md-2">
	            	 	<i class="fa fa-percent hours-work"></i><input type="text" name="deposit" class="flight-hours">
	            	 </div>
	            </div>
	            <div class="row routes-one">
	                <div class="col-md-12">
	                    <div class="box2 effect1">
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
	            				<input type="text" name="adult" class="input-route">
	            			</div>
	            			<div class="col-md-3 routes-flight2">
	            				<input type="text" name="child" class="input-route">
	            			</div>
	            			<div class="col-md-3 routes-flight2">
	            				<input type="text" name="infant" class="input-route">
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
                                   <input type="text" name="pickup_location1" placeholder="Location" class="addcar-input-pick2" />
                                   
                                  </div>
                                </div>
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<div class="dropdown" style="    margin-left: 36px;">
                                    <p class="addcar-pick-work1">Enter Location<i class="fas fa-sort-down pick-arrow1"></i></p>
                                  <div class="dropdown-content route-drop">
                                   <input type="text" name="pickup_location2" placeholder="Location" class="addcar-input-pick2" />
                                   
                                  </div>
                                </div>
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" name="flight-no" class="route-infant" placeholder="Flight No">
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" name="date" id="datepicker" class="route-infant" placeholder="Optional Date">
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" name="check-in" class="route-infant" placeholder="Check in">
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
                                   <input type="text" name="pickup_location3" placeholder="Location" class="addcar-input-pick2" />
                                   
                                  </div>
                                </div>
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<div class="dropdown" style="    margin-left: 36px;">
                                    <p class="addcar-pick-work1">Enter Location<i class="fas fa-sort-down pick-arrow1"></i></p>
                                  <div class="dropdown-content route-drop">
                                   <input type="text" name="pickup_location4" placeholder="Location" class="addcar-input-pick2" />
                                   
                                  </div>
                                </div>
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" name="flights-no" class="route-infant" placeholder="Flight No">
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" id="picker" name="ar-child" class="route-infant" placeholder="Optional Date">
	            			</div>
	            			<div class="col-md-2 routes-flight2">
	            				<input type="text" name="ar-infant" class="route-infant" placeholder="Check in">
	            			</div>
	            		</div>
	            		<div class="row routes-one">
			                <div class="col-md-12">
			                    <div class="box2 effect1">
			                        <h4 class="flight-table">DESCRIPTION AND BAGGAGE INFO</h4>
			                    </div>
			                </div>
			                <div class="col-md-12">
								<textarea name="editor1"></textarea>
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
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>

    <script>
  $(document).ready(function() {
    $("#picker").datepicker();
  });
  </script>
  <!-- <script type="text/javascript">
    $(document).ready(function(){


        $(function() {
          AOS.init();
        });

        $(window).on('load', function() {
          AOS.refresh();
        });
     });
</script> -->
