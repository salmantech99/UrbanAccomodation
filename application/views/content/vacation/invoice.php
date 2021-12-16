<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/theme.css">
</head>
<body style="background-color: black;">
  <div class="invoice-background">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-md-2"></div>
        <div class="col-md-8 col-md-8" id="printableArea">
          <div class="invoice-header">
            <p class="invoice-type">UNPAID</p>
          </div>
          <div class="invoice-detail-customer">
            <div class="row">
              <div class="col-md-4 col-md-4">
                <div class="customer-detail-invoice">
                  <p class="invoice-date"><b>Invoice Date:</b><span id="date"></span></p>
                  <p class="invoice-due-date"><b>Due Date:</b><span id="nextdate"></span></p>
                  <h1 class="invoice-name"><b>INVOICE</b></h1>
                  <p><b>Invoice Number:</b><span><?php echo $posts->id;?></span></p>
                </div>
              </div>
              <div class="col-md-8 col-md-8">
                <div class="customer-detail-invoice">
                  <h4 class="customer-detail"><b>CUSTOMER DETAIL</b></h4>
                  <p class="customer-detail"><?php echo $customer_name;?></p>
                  <p class="customer-detail"><?php echo $address;?></p>
                  <p class="customer-detail"><?php echo $phone_number;?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="customer-order-details">
            <div class="row">
              <div class="col-md-11 col-md-11 invoice-res-work">
                <div class="customer-order-car">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h4 class="car-order-invoice-heading"><span class="heading-invoice-car"><?php echo $vacation_name;?></span></h4>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h4 class="car-order-invoice-heading1"><span class="heading-invoice-car"><?php echo $vacation_location;?></span></h4>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <img src="<?php echo base_url('uploads/'.$post->vacational_place_image); ?>" class="invoice-img-car">
                    <p class="customer-order-car-detail">Date</p>
                    <p class="customer-order-car-detail">Vacation Type</p>
                    <p class="customer-order-car-detail">Total Days</p>
                    <p class="customer-order-car-detail">Total Nights</p>
                    <p class="customer-order-car-detail">Adult Price</p>
                    <p class="customer-order-car-detail">Child Price</p>
                    <p class="customer-order-car-detail">Infant Price</p>
                   <!--  
                    <p class="customer-order-car-detail">Drop Off Time</p> -->
                  </div>
                    <div class="col-md-6 col-sm-6" style="margin-top: 78px;">
                      <p class="customer-order-car-detail1"><?php echo $vacation_date;?></p>
                      <p class="customer-order-car-detail1"><?php echo $vacation_type;?></p>
                      <p class="customer-order-car-detail1"><?php echo $vacation_days;?> Day</p>
                      <p class="customer-order-car-detail1"><?php echo $vacation_nights;?> Night</p>
                      <p class="customer-order-car-detail1"><?php echo $vacation_adult_quantity;?></p>
                      <p class="customer-order-car-detail1"><?php echo $vacation_child_quantity;?></p>
                      <p class="customer-order-car-detail1"><?php echo $vacation_infant_quantity;?></p>
                    </div>
                  </div>
                <div class="invoice-table-work">
                  <table>
                    <div class="row">
                      <div class="col-md-12">
                        <tr>
                          <th class="invoice-table-first-heading">DEPOSIT NOW</th>
                          <th class="invoice-table-second-heading">TAX & VAT</th>
                          <th class="invoice-table-third-heading">TOTAL AMOUNT</th>
                        </tr>
                      </div>
                      <div class="col-md-12">
                        <tr>
                          <td class="invoice-table-first-heading">$ <?php echo $vacation_deposit; ?></td>
                          <td class="invoice-table-second-heading">$ <?php echo $vacation_tax; ?></td>
                          <td class="invoice-table-third-heading">$ <?php echo $vacation_total_price; ?></td>
                        </tr>
                      </div>
                    </div>
                  </table>
                </div>
                <div class="row" style="margin-top: 50px;">
                  <div class="col-md-1 col-md-1">
                    <img src="<?php echo base_url(); ?>assets/image/travo/logo.png" class="logo invoice-logo">
                  </div>
                  <div class="col-md-10 col-md-10 invoice-respons-work">
                    <div class="invoice-owner-detail">
                      <h5>Travo</h5>
                      <h6><i class="fas fa-map-marker-alt mark"></i> Office# 815 Floor# 8 Al Hafeez Heights Gulberg 3 Lahore.</h6>
                      <h6><i class="fas fa-envelope mark"></i> info@xpertcoders.com</h6>
                      <h6><i class="fas fa-phone-volume mark"></i> 03164774149</h6>
                    </div>
                  </div>
                </div>
                <div class="col-md-1 col-md-1"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-md-2"></div>
      </div>
      <div class="row">
        <button type="button" class="btn btn-primary">
          <i class="fas fa-print"></i> <input type="button" onclick="printDiv('printableArea')" value="PRINT" /></button>
          <a style="background-color:white;color: black; height: 39px;padding-top: 10px;padding-left: 10px;padding-right: 10px;padding-bottom: 10px;" href="<?php echo site_url('Hotels/urban/'); ?>" type="button"><span style="margin-top: 5px;">Back To Home</span></a>
      </div>
    </div>
  </div>
  <script type="text/javascript" href= "<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" href= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
    }
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
    document.getElementById("nextdate").innerHTML = m + "/" + (d+1) + "/" + y;
  </script>
</body>
</html>