<!-- MAIN CONTENT-->
<div class="main-content" >
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box effect1">
                        <h4 class="hotel-table">Flight Order Reports</h4>
                        <hr>
                        <div class="table-responsive">
                            <form action="" name="delete-form" method="post">   
                                <table class="table table-hover table-earning">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Flight Id</th>
                                            <th>Airline Id</th>
                                            <th>User Name</th>
                                            <th>User Phone Number</th>
                                            <th>User Address</th>
                                            <th>User Email</th>
                                            <th>Flight Departure City</th>
                                            <th>Flight Arrival City</th>
                                            <th>Flight Departure Date</th>
                                            <th>Flight Departure Time</th>
                                            <th>Flight Arrival Date</th>
                                            <th>Flight Arrival Time</th>
                                            <th>Flight Total Hours</th>
                                            <th>Adult Price</th>
                                            <th>Child Price</th>
                                            <th>Infant Price</th>
                                            <th>Tax Price</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($posts as $post){?>
                                        <tr>
                                            <td class="hotel-add-alignment"><?php echo $post->id;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_id;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->airline_id;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->user_name;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->phone_number;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->address;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->email;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_departure;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_arrival;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_dep_date;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_dep_time;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_arr_date;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_arr_time;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_hours;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_price_adult;?></td>
                                             <td class="hotel-add-alignment"><?php echo $post->flight_price_child;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_price_infant;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_tax_price;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->flight_total_price;?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </form> 
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- END MAIN CONTENT-->