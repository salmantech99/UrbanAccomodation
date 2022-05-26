 MAIN CONTENT-->
<div class="main-content" >
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box effect1">
                        <h4 class="hotel-table">Vacation Order Reports</h4>
                        <hr>
                        <div class="table-responsive">
                            <form action="" name="delete-form" method="post">
                                <table class="table table-hover table-earning">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Vacation Id</th>
                                            <th>Vacation Name</th>
                                            <th>Vacation Type</th>
                                            <th>Vacation Location</th>
                                            <th>Vacation Date</th>
                                            <th>Vacation Days</th>
                                            <th>Vacation Nights</th>
                                            <th>User Name</th>
                                            <th>User Phone Number</th>
                                            <th>User Address</th>
                                            <th>User Email</th>
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
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_id;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_name;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_type;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_location;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_date;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_days;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_nights;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->user_name;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->phone_number;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->address;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->email;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_adult_quantity;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_child_quantity;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_infant_quantity;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_tax;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->vacation_total_price;?></td>
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