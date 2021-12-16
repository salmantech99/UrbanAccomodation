<div style="margin-top: 77px;">
  <ul class="nav nav-tabs">
    <li class="active tabs_content_lists list"><a data-toggle="tab" href="#home" aria-expanded= "true" >General</a></li>
    <li class="tabs_content_lists list5"><a data-toggle="tab" href="#menu1" aria-expanded= "false" class="here">Hotel Types</a></li>
    <li class="tabs_content_lists list6"><a data-toggle="tab" href="#menu2" aria-expanded= "false">Room Types</a></li>
    <li class="tabs_content_lists list7"><a data-toggle="tab" href="#menu3" aria-expanded= "false">Payment Methods</a></li>
    <li class="tabs_content_lists list8"><a data-toggle="tab" href="#menu4" aria-expanded= "false">Hotel Amenities</a></li>
    <li class="tabs_content_lists list9"><a data-toggle="tab" href="#menu5" aria-expanded= "false">Room Amenities</a></li>
  </ul>
</div>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active fade active show">           
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form method="post" action="<?php echo base_url(); ?>Hotels/insert_hotelsettings">
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Target</h5>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="target">
                                        <option>Self</option>
                                        <option>Blank</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Header Title</h5>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="header_title" class=" form-control" placeholder="Hotels Listing">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Home Features Hotels</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="home_features" class=" form-control" placeholder="8">
                                </div>
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;" >Display Order</h5>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" name="display_order1">
                                        <option value="ol" label="By Order Given">By Order Given</option>
                                        <option value="newf" label="By Latest First" selected="">By Latest First</option>
                                        <option value="oldf" label="By Oldest First">By Oldest First</option>
                                        <option value="az" label="Ascending Order (A-Z)">Ascending Order (A-Z)</option>
                                        <option value="za" label="Descending  Order (Z-A)">Descending  Order (Z-A)</option>
                                      </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Listing Hotels</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="listing_hotels" class=" form-control" placeholder="7">
                                </div>
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;" >Display Order</h5>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" name="display_order2">
                                        <option value="ol" label="By Order Given">By Order Given</option>
                                        <option value="newf" label="By Latest First" selected="">By Latest First</option>
                                        <option value="oldf" label="By Oldest First">By Oldest First</option>
                                        <option value="az" label="Ascending Order (A-Z)">Ascending Order (A-Z)</option>
                                        <option value="za" label="Descending  Order (Z-A)">Descending  Order (Z-A)</option>
                                      </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Serach Hotel Results</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="search_hotels" class=" form-control" placeholder="6">
                                </div>
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;" >Display Order</h5>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" name="display_order3">
                                        <option value="ol" label="By Order Given">By Order Given</option>
                                        <option value="newf" label="By Latest First" selected="">By Latest First</option>
                                        <option value="oldf" label="By Oldest First">By Oldest First</option>
                                        <option value="az" label="Ascending Order (A-Z)">Ascending Order (A-Z)</option>
                                        <option value="za" label="Descending  Order (Z-A)">Descending  Order (Z-A)</option>
                                      </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Related Hotels</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="related_hotels" class=" form-control" placeholder="8">
                                </div>
                            </div>
                            <hr>
                            <h5 class="addcar-pickup tax">Search Settings</h5>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Minimum Price</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="minimum_price" class=" form-control"  value="50">
                                </div>
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Maximum Price</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="maximum_price" class=" form-control" value="100">
                                </div>
                            </div>
                            <hr>
                            <h5 class="addcar-pickup tax">Default Check Time</h5>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Check In</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="check_in" class=" form-control"  placeholder="Check In">
                                </div>
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Check Out</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="check_out" class=" form-control" placeholder="Check Out">
                                </div>
                                
                            </div> 
                            <h5 class="addcar-pickup tax">SEO</h5>
                            <div class="row">
                                
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Meta Keywords</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="meta_keywords" class=" form-control" placeholder="Meta Keywords">
                                </div>
                                <div class="col-md-2">
                                    <h5 class="addcar-status" style="margin-top: 15px;">Meta Description</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="meta_descriptions" class=" form-control" placeholder="Meta Description">
                                </div>   
                                </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2" style="margin-bottom: 30px;">
                                    <button type="submit" class="addcar-button">Submit</button>
                                </div>
                                
                            </div>
                            <hr>
                        </form>
                    </div>
                </div>
            </div> 
            <!-- END GENERAL -->
    </div>
    <div id="menu1" class="tab-pane fade">
                    <!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box effect1">
                        <h4 class="hotel-table"></h4>
                        <hr>
                        <div class="table-responsive">
                            <a href="<?php echo site_url('Hotels/hotel_one/'); ?>"><button type="button" class="btn btn-success btn-md btn-add btn-margin">
                            <i class="fas fa-plus-circle"></i>&nbsp; ADD</button></a>
                            <div class="btn-hotel">
                                <button type="button" class="btn btn-danger btn-md btn-add">
                                <i class="fas fa-times-circle"></i>&nbsp;DELETE SELECTED</button>
                                <button type="button" class="btn btn-outline-secondary btn-md btn-add">
                                <i class="fas fa-print"></i>&nbsp; PRINT</button>
                                <button type="button" class="btn btn-outline-secondary btn-md btn-add btn-marginn">
                                <i class="fas fa-file"></i>&nbsp; EXPORT INTO CSV</button>  
                            </div>
                            <table class="table table-hover table-earning">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>   
                                         <label class="control control--checkbox check-margin">
                                            <input type="checkbox"/>
                                            <div class="control__indicator hotel-add-indicator"></div>
                                        </label>
                                        </th>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($posts as $post){?>
                                    <tr style="text-align: center;">
                                        <td><label class="control control--checkbox">
                                            <input type="checkbox"/>
                                            <div class="control__indicator"></div>
                                        </label></td>
                                        <td><?php echo $post->id;?></td>
                                        <td class="hotel-add-alignment"><?php echo $post->hotel_name;?></td>
                                        <td><i class="fas fa-check tick"></i></td>
                                        <td><i class="fas fa-edit edit"></i></td>
                                        <td><i class="fas fa-times delete"></i></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <br><div class="card-body card-block">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-8">
                                             <div class="search-container">
                                                <form action="/action_page.php">
                                                    <button type="submit" style="background-color: lightgrey; height: 42px; width: 44px; margin-left: 10px;"><i class="fa fa-search"></i></button>
                                                  <input type="text" placeholder="Search Hotels" name="search">
                                                </form>
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="execution">Execution Time 0.00030 <span class="memory"> Memory Usage 30MB</span></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- END MAIN CONTENT-->
    </div>
    <div id="menu2" class="tab-pane fade">
                <!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box effect1">
                        <h4 class="hotel-table"></h4>
                        <hr>
                        <div class="table-responsive">
                            <a href="<?php echo site_url('Hotels/hotel_one/'); ?>"><button type="button" class="btn btn-success btn-md btn-add btn-margin">
                            <i class="fas fa-plus-circle"></i>&nbsp; ADD</button></a>
                            <div class="btn-hotel">
                                <button type="button" class="btn btn-danger btn-md btn-add">
                                <i class="fas fa-times-circle"></i>&nbsp;DELETE SELECTED</button>
                                <button type="button" class="btn btn-outline-secondary btn-md btn-add">
                                <i class="fas fa-print"></i>&nbsp; PRINT</button>
                                <button type="button" class="btn btn-outline-secondary btn-md btn-add btn-marginn">
                                <i class="fas fa-file"></i>&nbsp; EXPORT INTO CSV</button>  
                            </div>
                            <table class="table table-hover table-earning">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>   
                                         <label class="control control--checkbox check-margin">
                                            <input type="checkbox"/>
                                            <div class="control__indicator hotel-add-indicator"></div>
                                        </label>
                                        </th>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($posts as $post){?>
                                    <tr style="text-align: center;">
                                        <td><label class="control control--checkbox">
                                            <input type="checkbox"/>
                                            <div class="control__indicator"></div>
                                        </label></td>
                                        <td><?php echo $post->id;?></td>
                                        <td class="hotel-add-alignment"><?php echo $post->hotel_type;?></td>
                                        <td><i class="fas fa-check tick"></i></td>
                                        <td><i class="fas fa-edit edit"></i></td>
                                        <td><i class="fas fa-times delete"></i></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <br><div class="card-body card-block">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-8">
                                             <div class="search-container">
                                                <form action="/action_page.php">
                                                    <button type="submit" style="background-color: lightgrey; height: 42px; width: 44px; margin-left: 10px;"><i class="fa fa-search"></i></button>
                                                  <input type="text" placeholder="Search Hotels" name="search">
                                                </form>
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="execution">Execution Time 0.00030 <span class="memory"> Memory Usage 30MB</span></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- END MAIN CONTENT-->
    </div>
    <div id="menu3" class="tab-pane fade">
                  <!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box effect1">
                        <h4 class="hotel-table"></h4>
                        <hr>
                        <div class="table-responsive">
                            <a href="<?php echo site_url('Hotels/hotel_one/'); ?>"><button type="button" class="btn btn-success btn-md btn-add btn-margin">
                            <i class="fas fa-plus-circle"></i>&nbsp; ADD</button></a>
                            <div class="btn-hotel">
                                <button type="button" class="btn btn-danger btn-md btn-add">
                                <i class="fas fa-times-circle"></i>&nbsp;DELETE SELECTED</button>
                                <button type="button" class="btn btn-outline-secondary btn-md btn-add">
                                <i class="fas fa-print"></i>&nbsp; PRINT</button>
                                <button type="button" class="btn btn-outline-secondary btn-md btn-add btn-marginn">
                                <i class="fas fa-file"></i>&nbsp; EXPORT INTO CSV</button>  
                            </div>
                            <table class="table table-hover table-earning">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>   
                                         <label class="control control--checkbox check-margin">
                                            <input type="checkbox"/>
                                            <div class="control__indicator hotel-add-indicator"></div>
                                        </label>
                                        </th>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Selected</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($posts as $post){?>
                                    <tr style="text-align: center;">
                                        <td><label class="control control--checkbox">
                                            <input type="checkbox"/>
                                            <div class="control__indicator"></div>
                                        </label></td>
                                        <td><?php echo $post->id;?></td>
                                        <td class="hotel-add-alignment"><?php echo $post->payment_option;?></td>
                                        <td class="hotel-add-alignment">0</td>
                                        <td><i class="fas fa-check tick"></i></td>
                                        <td><i class="fas fa-edit edit"></i></td>
                                        <td><i class="fas fa-times delete"></i></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <br><div class="card-body card-block">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-8">
                                             <div class="search-container">
                                                <form action="/action_page.php">
                                                    <button type="submit" style="background-color: lightgrey; height: 42px; width: 44px; margin-left: 10px;"><i class="fa fa-search"></i></button>
                                                  <input type="text" placeholder="Search Hotels" name="search">
                                                </form>
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="execution">Execution Time 0.00030 <span class="memory"> Memory Usage 30MB</span></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- END MAIN CONTENT-->
 <!-- MAIN CONTENT-->
</div>
<div id="menu4" class="tab-pane fade">
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box effect1">
                        <h4 class="hotel-table">HOTEL SETTINGS</h4>
                        <hr>
                        <div class="table-responsive">
                            <a href="<?php echo site_url('Hotels/hotel_one/'); ?>"><button type="button" class="btn btn-success btn-md btn-add btn-margin">
                            <i class="fas fa-plus-circle"></i>&nbsp; ADD</button></a>
                            <div class="btn-hotel">
                                <button type="button" class="btn btn-danger btn-md btn-add">
                                <i class="fas fa-times-circle"></i>&nbsp;DELETE SELECTED</button>
                                <button type="button" class="btn btn-outline-secondary btn-md btn-add">
                                <i class="fas fa-print"></i>&nbsp; PRINT</button>
                                <button type="button" class="btn btn-outline-secondary btn-md btn-add btn-marginn">
                                <i class="fas fa-file"></i>&nbsp; EXPORT INTO CSV</button>  
                            </div>
                            <table class="table table-hover table-earning">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>   
                                         <label class="control control--checkbox check-margin">
                                            <input type="checkbox"/>
                                            <div class="control__indicator hotel-add-indicator"></div>
                                        </label>
                                        </th>
                                        <th>#</th>
                                        <th>Icons</th>
                                        <th>Name</th>
                                        <th>Selected</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="text-align: center;">
                                        <td><label class="control control--checkbox">
                                            <input type="checkbox"/>
                                            <div class="control__indicator"></div>
                                        </label></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td class="hotel-add-alignment">0</td>
                                        <td class="hotel-add-alignment">0</td>
                                        <td><i class="fas fa-check tick"></i></td>
                                        <td><i class="fas fa-edit edit"></i></td>
                                        <td><i class="fas fa-times delete"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><div class="card-body card-block">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-8">
                                             <div class="search-container">
                                                <form action="/action_page.php">
                                                    <button type="submit" style="background-color: lightgrey; height: 42px; width: 44px; margin-left: 10px;"><i class="fa fa-search"></i></button>
                                                  <input type="text" placeholder="Search Hotels" name="search">
                                                </form>
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="execution">Execution Time 0.00030 <span class="memory"> Memory Usage 30MB</span></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- END MAIN CONTENT-->
    </div>
    <div id="menu5" class="tab-pane fade">
                          <!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box effect1">
                        <h4 class="hotel-table">HOTEL SETTINGS</h4>
                        <hr>
                        <div class="table-responsive">
                            <a href="<?php echo site_url('Hotels/hotel_one/'); ?>"><button type="button" class="btn btn-success btn-md btn-add btn-margin">
                            <i class="fas fa-plus-circle"></i>&nbsp; ADD</button></a>
                            <div class="btn-hotel">
                                <button type="button" class="btn btn-danger btn-md btn-add">
                                <i class="fas fa-times-circle"></i>&nbsp;DELETE SELECTED</button>
                                <button type="button" class="btn btn-outline-secondary btn-md btn-add">
                                <i class="fas fa-print"></i>&nbsp; PRINT</button>
                                <button type="button" class="btn btn-outline-secondary btn-md btn-add btn-marginn">
                                <i class="fas fa-file"></i>&nbsp; EXPORT INTO CSV</button>  
                            </div>
                            <table class="table table-hover table-earning">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>   
                                         <label class="control control--checkbox check-margin">
                                            <input type="checkbox"/>
                                            <div class="control__indicator hotel-add-indicator"></div>
                                        </label>
                                        </th>
                                        <th>#</th>
                                        <th>Icons</th>
                                        <th>Name</th>
                                        <th>Selected</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="text-align: center;">
                                        <td><label class="control control--checkbox">
                                            <input type="checkbox"/>
                                            <div class="control__indicator"></div>
                                        </label></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td class="hotel-add-alignment">0</td>
                                        <td class="hotel-add-alignment">0</td>
                                        <td><i class="fas fa-check tick"></i></td>
                                        <td><i class="fas fa-edit edit"></i></td>
                                        <td><i class="fas fa-times delete"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><div class="card-body card-block">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-8">
                                             <div class="search-container">
                                                <form action="/action_page.php">
                                                    <button type="submit" style="background-color: lightgrey; height: 42px; width: 44px; margin-left: 10px;"><i class="fa fa-search"></i></button>
                                                  <input type="text" placeholder="Search Hotels" name="search">
                                                </form>
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="execution">Execution Time 0.00030 <span class="memory"> Memory Usage 30MB</span></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- END MAIN CONTENT-->
    </div>
  </div>
