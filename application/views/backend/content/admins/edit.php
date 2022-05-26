
<br>
<br>
<br>
<form method="post" action="<?=  base_url(); ?>Admin/update?id=<?=$admin->id?>" enctype="multipart/form-data">
   <!-- MAIN CONTENT-->
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active fade active show">                  
            <div class="main-content1"> 
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Username</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="username" value="<?= $admin->username ?>" placeholder="Username" class="form-control" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Email</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="email" name="email_address" value="<?= $admin->email_address ?>"  class="form-control" placeholder="Email" required>
                            </div>
                        </div>
						<div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Mobile Number</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="mobile_number" value="<?= $admin->mobile_number ?>" class="form-control" placeholder="Mobile" required>
                            </div>
                        </div>
						<div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">DOB</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="date" name="dob" class="form-control" value="<?= $admin->dob ?>" placeholder="DOB" required>
                            </div>
                        </div>
						<div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Country</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="country" class="form-control" value="<?= $admin->country ?>" placeholder="Country" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Password</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
						<div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <h5 class="addcar-status">Confirm Password</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="confirm_password">
                            </div>
                        </div>
                        <hr>
                        <hr>
                    </div>
                </div>
            </div>       
        </div>
     <!-- END MAIN CONTENT-->
        <div class="row">
            <div class="col-md-2" style="margin-bottom: 30px;">
                <button type="submit" class="addcar-button">Submit</button>
            </div>                                
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
    $(document).ready(function() {
    $("#datethere").datepicker();
  });
  </script>
   <script>
  $(document).ready(function() {
    $("#datehere").datepicker();
  });
</script>
