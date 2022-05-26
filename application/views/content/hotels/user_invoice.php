<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/theme.css">
  <style>
    .table_custom tr td, .table_custom tr th{
      border: 1px solid grey;
      text-align:center;
    }
    .table_custom tr, .table_custom tr td{
      height:45px;
    }
    thead th{
      border: 1px solid grey;
    }
  </style>
</head>
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="row">
      <div class="col-lg-6 col-mdd-6 col-12">
        <button  type="button" class="btn btn-primary btn-lg ml-auto d-block col-lg-4" onclick="printDiv('printableArea')" style="margin-top:20px;"><i class="fas fa-print"></i>&nbsp;&nbsp;Print</button>
      </div>
      <div class="col-lg-6 col-mdd-6 col-12">
        <a href="<?php echo site_url('Hotels/urban/'); ?>" class="btn btn-secondary btn-lg col-lg-4" style="margin-top:20px;">Back</a>
      </div>
      
<!--         <button type="button" class="btn btn-primary">
          <i class="fas fa-print"></i> <input type="button" onclick="printDiv('printableArea')" value="PRINT" /></button> -->
<!--           <a style="background-color:white;color: black; height: 39px;padding-top: 10px;padding-left: 10px;padding-right: 10px;padding-bottom: 10px;" href="<?php echo site_url('Hotels/urban/'); ?>" type="button"><span style="margin-top: 5px;">Back To Home</span></a> -->
      </div>
    <div class="app-content content " id="printableArea">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="invoice-print p-3">
                    <div class="d-flex justify-content-between flex-md-row flex-column pb-2">
                        <div>
                            <div class="d-flex mb-1">
                                
                                <h3 class="text-primary fw-bold ms-1">Urban Accomodation</h3>
                            </div>
                            <p class="mb-25">Office# 815 Gulberg 3 Lahore.</p>
                            <p class="mb-25">Punjab, Pakistan</p>
                            <p class="mb-0">+923000162050</p>
                        </div>
                        <div class="mt-md-0 mt-2">
                            <h4 class="fw-bold text-end mb-1">INVOICE #3492</h4>
                            <div class="invoice-date-wrapper mb-50">
                                <span class="invoice-date-title">Date Issued:</span>
                                <span id="date"></span>
                            </div>
                            <div class="invoice-date-wrapper">
                                <span class="invoice-date-title">Due Date:</span>
                                <span id="nextdate"></span>
                            </div>
                        </div>
                    </div>

                    <hr class="my-2" />

                    <div class="row pb-2">
                        <div class="col-sm-6">
                            <h6 class="mb-1">Invoice To:</h6>
                            <p class="mb-25"><?php echo $user_name;?></p>
                            <p class="mb-25"><?php echo $address;?></p>
                            <p class="mb-25"><?php echo $email;?></p>
                            <p class="mb-25"><?php echo $phone_number;?></p>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-2">
                            <h6 class="mb-1">Payment Details:</h6>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pe-1">Deposit Now:</td>
                                        <td>$ <?php echo $deposit_now; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Tax & Vat:</td>
                                        <td>$ <?php echo $tax; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Total Amount:</td>
                                      <td><strong>$ <?php echo $total_price; ?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="table-responsive mt-2">
                      <table class="table m-0 table_custom">
                            <thead>
                                <tr>
                                    <th class="py-1 ps-4">Hotel Name</th>
                                    <th class="py-1 ps-4">Hotel Type</th>
                                    <th class="py-1">Location</th>
                                </tr>
                            </thead>
                         <tbody>
                           <tr style="height:25px;">
                            <td class="py-1 ps-4">
                              <p class="fw-semibold mb-25"><?php echo $post->hotel_name;?></p>
                            </td>
                             <td class="py-1 ps-4">
                              <p class="fw-semibold mb-25"><?php echo $post->hotel_type;?></p>
                             </td>
                            <td class="py-1 ps-4">
                              <p class="fw-semibold mb-25"><?php echo $post->location;?></p>
                             </td>
                           </tr>
                        </tbody>
                        </table>
                      <br>
                        <table class="table m-0 table_custom">
                            <thead>
                                <tr>
                                    <th class="py-1 ps-4">Featured From</th>
                                    <th class="py-1">Featured To</th>
                                    <th class="py-1">Total Days</th>
                                    <th class="py-1">Maximum Adult</th>
                                    <th class="py-1">Maximum Child</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1 ps-4">
                                        <p class="fw-semibold mb-25"><?php echo $post->featured_from;?></p>
                                    </td>
                                    <td class="py-1 ps-4">
                                        <p class="fw-semibold mb-25"><?php echo $post->featured_to;?></p>
                                    </td>
                                  <td class="py-1 ps-4">
                                        <p class="fw-semibold mb-25">
                                      <?php
                              $date1 = date_create($post->featured_from);
                              $date2 = date_create($post->featured_to);
                              //difference between two dates
                              $diff = date_diff($date1,$date2);
                              //count days
                               echo ' '.$diff->format("%d days");
                              ?>
                                      </p>
                                    </td>
                                  <td class="py-1 ps-4">
                                        <p class="fw-semibold mb-25"><?php echo $post->max_adults;?></p>
                                    </td>
                                  <td class="py-1 ps-4">
                                        <p class="fw-semibold mb-25"><?php echo $post->max_children;?></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                    <div class="d-flex justify-content-between flex-md-row flex-column pb-2">
                        <div>
                            <div class="d-flex mb-1">
                                
                                <h3 class="text-primary fw-bold ms-1">Urban Accomodation</h3>
                            </div>
                        </div>
                        <div class="mt-md-0 mt-2">
                            <div class="invoice-date-wrapper mb-50">
                                <span class="invoice-date-title">DEPOSIT NOW:</span>
                                <strong><span>$ <?php echo $deposit_now; ?></span></strong>
                            </div>
                            <div class="invoice-date-wrapper">
                                <span class="invoice-date-title">TAX & VAT:</span>
                                <strong><span>$ <?php echo $tax; ?></span></strong>
                            </div>
                            <div class="invoice-date-wrapper">
                                <span class="invoice-date-title">TOTAL AMOUNT:</span>
                                <strong><span>$ <?php echo $total_price; ?></span></strong>
                            </div>
                        </div>
                    </div>

                    <hr class="my-2" />

                    <div class="row">
                        <div class="col-12">
                            <span class="fw-bold">Note:</span>
                            <span>It was a pleasure to serve you. Hope to see you soon, Thanks.</span>
                        </div>
                    </div>
                </div>

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