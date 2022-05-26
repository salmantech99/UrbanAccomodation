<div class="main-content">
    <div class="section__content section__content--p30">
    	<form action="<?php echo base_url(); ?>Flights/insert_flight_settings" method="post">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="box1 effect1">
	                        <h4 class="flight-table">FLIGHT SETTINGS</h4>
	                    </div>
	                </div>
	            </div>
	            <div class="row testing-mode">
	            	 <div class="col-md-2">
	            	 	<h6>Testing Mode</h6>
	            	 </div>
	            	 <div class="col-md-10">
	            	 	<select name="flight-test" class="flight-option">
	            	 		<option value="on">On</option>
	            	 		<option value="off">Off</option>
	            	 	</select>
	            	 </div>
	            </div>
	            <div class="row">
                    <div class="col-md-2" style="margin-bottom: 30px;">
                        <button type="submit" class="airport-button">Submit</button>
                    </div>                                
                </div>
	        </div>
	    </form>
    </div>
</div>