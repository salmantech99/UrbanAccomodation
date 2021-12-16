
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <nav class="nav nav-tabs nav-justified">
              <a class="nav-item nav-link active user-profile-list" data-toggle="tab" href="#MyProfile">My Profile</a>
              <br>
              <a class="nav-item nav-link user-profile-list" data-toggle="tab" href="#booking">Bookings</a>
              <br>
            </nav>
        </div>
        <div class="col-md-10">
            <div class="tab-content">
                <div id="MyProfile" class="tab-pane fade show active">
                    <form action="<?php echo base_url(); ?>Login/update_user_profile" method="POST">
                        <div class="form-horizontal">
                            <div class="panel panel-default user-profile-list">
                                <div class="panel-heading">
                                    <h5 class="panel-title go-text-right">Personal Details</h5>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 go-right">Full Name</div>
                                            <div class="col-md-6 go-right">
                                                <input class="form-control" type="text" placeholder="Full Name" name="fullname" value="<?php echo $posts->register_name;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 go-right">Phone</div>
                                            <div class="col-md-6 go-right">
                                                <input class="form-control" type="text" placeholder="Phone" name="phone" value="<?php echo $posts->phone_number;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default user-profile-list">
                                <div class="panel-heading">
                                    <h5 class="panel-title go-text-right">Where should we send your confirmation?</h5>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 go-right">Email</div>
                                            <div class="col-md-6 go-right">
                                                <input type="hidden" name="user_email" value="<?php echo $posts->register_email;?>" />
                                                <input class="form-control" type="text" disabled="disabled" placeholder="Email" name="email" value="<?php echo $posts->register_email;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 go-right">Password</div>
                                            <div class="col-md-6 go-right">
                                                <input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo $posts->register_password;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 go-right">Confirm Password</div>
                                            <div class="col-md-6 go-right">
                                                <input class="form-control" type="password" placeholder="Confirm Password" name="confirmpassword" value="<?php echo $posts->confirm_password;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default user-profile-list">
                                <div class="panel-heading">
                                    <h5 class="panel-title go-text-right">Your Address</h5>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 go-right">Address</div>
                                            <div class="col-md-6 go-right">
                                                <input class="form-control" type="text" placeholder="Address" name="address1" value="<?php echo $posts->address1;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 go-right">Address 2</div>
                                            <div class="col-md-6 go-right">
                                                <input class="form-control" type="text" placeholder="Address 2" name="address2" value="<?php echo $posts->address2;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 go-right">City</div>
                                            <div class="col-md-6 go-right">
                                                <input class="form-control" type="text" placeholder="City" name="city" value="<?php echo $posts->city;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 go-right">State/Region</div>
                                            <div class="col-md-6 go-right">
                                                <input class="form-control" type="text" placeholder="State/Region" name="state" value="<?php echo $posts->region;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 go-right">Postal/Zip Code</div>
                                            <div class="col-md-6 go-right">
                                                <input class="form-control" type="text" placeholder="Postal/Zip Code" name="zip" value="<?php echo $posts->postal_code;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 go-right">Country</div>
                                            <div class="col-md-6 go-right">
                                                <input class="form-control" type="text" placeholder="Country" name="country" value="<?php echo $posts->country;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <input type="hidden" name="oldemail" value="">
                                    <button class="btn btn-action btn-block updateprofile"> Submit </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="booking" class="tab-pane fade user-profile-list">
                    <div class="panel panel-default user-profile-list">
                        <div class="panel-heading">
                            <h5 class="panel-title go-text-right">HOTEL BOOKINGS</h5>
                        </div>
                        <table class="booking-hotel-table">
                            <thead>
                                <tr>
                                    <th class="booking-hotel-heading">Hotel Name</th>
                                    <th class="booking-hotel-heading">Hotel Location</th>
                                    <th class="booking-hotel-heading">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php foreach($post as $post){?>
                                <tr>
                                    <td class="table-booking-work"><?php echo $post->hotel_name;?></td>
                                    <td class="table-booking-work"><?php echo $post->hotel_location;?></td>
                                    <td class="table-booking-work">$ <?php echo $post->total_price;?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel panel-default user-profile-list">
                        <div class="panel-heading">
                            <h5 class="panel-title go-text-right">CAR BOOKINGS</h5>
                        </div>
                        <table class="booking-hotel-table1">
                            <thead>
                                <tr>
                                    <th class="booking-hotel-heading">Car Name</th>
                                    <th class="booking-hotel-heading">Car Pickup Location</th>
                                    <th class="booking-hotel-heading">Car Pickup Date</th>
                                    <th class="booking-hotel-heading">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php foreach($post2 as $post2){?>
                                <tr>
                                    <td class="table-booking-work"><?php echo $post2->car_name;?></td>
                                    <td class="table-booking-work"><?php echo $post2->car_booking_pickup;?></td>
                                    <td class="table-booking-work"><?php echo $post2->car_book_pickupdate;?></td>
                                    <td class="table-booking-work">$ <?php echo $post2->total_price;?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel panel-default user-profile-list">
                        <div class="panel-heading">
                            <h5 class="panel-title go-text-right">FLIGHT BOOKINGS</h5>
                        </div>
                        <table class="booking-hotel-table1">
                            <thead>
                                <tr>
                                    <th class="booking-hotel-heading">Flight Departure City</th>
                                    <th class="booking-hotel-heading">Flight Arrival City</th>
                                    <th class="booking-hotel-heading">Departure Time</th>
                                    <th class="booking-hotel-heading">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php foreach($post4 as $post4){?>
                                <tr>
                                    <td class="table-booking-work"><?php echo $post4->flight_departure;?></td>
                                    <td class="table-booking-work"><?php echo $post4->flight_arrival;?></td>
                                    <td class="table-booking-work"><?php echo $post4->flight_dep_time;?></td>
                                    <td class="table-booking-work">$ <?php echo $post4->flight_total_price;?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel panel-default user-profile-list">
                        <div class="panel-heading">
                            <h5 class="panel-title go-text-right">VACATION BOOKINGS</h5>
                        </div>
                        <table class="booking-hotel-table1">
                            <thead>
                                <tr>
                                    <th class="booking-hotel-heading">Vacation Name</th>
                                    <th class="booking-hotel-heading">Vacation Location</th>
                                    <th class="booking-hotel-heading">Vacation Type</th>
                                    <th class="booking-hotel-heading">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php foreach($post5 as $post5){?>
                                <tr>
                                    <td class="table-booking-work"><?php echo $post5->vacation_name;?></td>
                                    <td class="table-booking-work"><?php echo $post5->vacation_location;?></td>
                                    <td class="table-booking-work"><?php echo $post5->vacation_type;?></td>
                                    <td class="table-booking-work">$ <?php echo $post5->vacation_total_price;?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

