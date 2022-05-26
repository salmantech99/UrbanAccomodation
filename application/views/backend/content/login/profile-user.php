<form action="<?php echo base_url(); ?>Login/update_admin_user" method="post" class="profile-admin">
    <div class="panel panel-default">
        <div class="panel-heading"><b class="profile-heading">Profile</b></div>
        <div class="panel-body">
            <?php foreach($posts as $post){?>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group ">
                          <label class="required">Account Type</label>
                          <input class="form-control" type="text" disabled="disabled" placeholder="Account Type" name="" value="Admin">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                          <label class="required">Name</label>
                          <input class="form-control" type="text" name="fname" value="<?php echo $post->username ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                          <label class="required">Date Of Birth</label>
                          <input class="form-control" type="text" name="dob" value="<?php echo $post->dob ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                          <label class="required">Email</label>
                          <input class="form-control" type="email" placeholder="Email address" name="email" value="<?php echo $post->email_address?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                          <label class="required">Password</label>
                          <input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo $post->password?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                          <label class="required">Mobile Number</label>
                          <input class="form-control" type="text" placeholder="Mobile Number" name="mobile" value="<?php echo $post->mobile_number?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label class="required">Country</label>
                            <input class="form-control" type="text" placeholder="Mobile Number" name="country" value="<?php echo $post->country?>">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php } ?>
        </div>
        <div class="panel-footer">
            <button type="submit" class="addcar-button" value="upload">Update</button>
        </div>
    </div>
</form>