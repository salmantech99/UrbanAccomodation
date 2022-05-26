 MAIN CONTENT-->
<div class="main-content" >
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box effect1">
                        <h4 class="hotel-table">Hotel Order Reports</h4>
                        <hr>
                        <div class="table-responsive">
                            <form action="" name="delete-form" method="post">
                                <table class="table table-hover table-earning">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Hotel Id</th>
                                            <th>Room Id</th>
                                            <th>Hotel Name</th>
                                            <th>Hotel Location</th>
                                            <th>Order By</th>
                                            <th>Customer Phone Number</th>
                                            <th>Customer Address</th>
                                            <th>Customer Email</th>
                                            <th>Tax Price</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($posts as $post){?>
                                        <tr>
                                            <td class="hotel-add-alignment"><?php echo $post->id;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->hotel_id;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->room_id;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->hotel_name;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->hotel_location;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->customer_name;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->phone_number;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->address;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->email;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->tax;?></td>
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
<!-- END MAIN CONTENT