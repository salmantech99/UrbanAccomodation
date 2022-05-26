<!DOCTYPE html>
<html>
<head>
    <title>
        TRAVO
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/theme.css">
</head>
<body>
<div class="container">
    <!-- <br><br><br><br><br><br><br> -->
    <h4 class="contact-us-dashboard" style="text-align: center;">ADMIN LOGIN</h4>
    <br>
    <div class="row">
        <div class="col-md-12 today1">
            <form action="" method="post">
                <div class="form-group dashboard-email">
                    <label for="email" >Email</label>
                    <input type="email" name= "email" class="form-control" id="email" required>
                </div>
                <div class="form-group dashboard-email">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <br><br>
                <div class="text-center">
                    <button type="submit" class="btn register-btn"><i class="fa fa-user-md"></i> Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>