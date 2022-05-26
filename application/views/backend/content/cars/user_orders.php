<!-- MAIN CONTENT-->
<div class="main-content" >
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box effect1">
                        <h4 class="hotel-table">Car Order Reports</h4>
                        <hr>
                        <div class="table-responsive">
                            <form action="" name="delete-form" method="post">   
                                <table class="table table-hover table-earning">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Car Id</th>
                                            <th>User Name</th>
                                            <th>User Phone Number</th>
                                            <th>User Address</th>
                                            <th>User Email</th>
                                            <th>Car Name</th>
                                            <th>PickUp Place</th>
                                            <th>DropOff Place</th>
                                            <th>PickUp Date</th>
                                            <th>DropOff Date</th>
                                            <th>PickUp Time</th>
                                            <th>DropOff Time</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($posts as $post){?>
                                        <tr>
                                            <td class="hotel-add-alignment"><?php echo $post->id;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->car_id;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->user_name;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->phone_number;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->address;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->email;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->car_name;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->car_booking_pickup;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->car_booking_dropoff;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->car_book_pickupdate;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->car_book_dropoffdate;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->car_book_pickuptime;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->car_book_dropofftime;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->total_price;?></td>
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