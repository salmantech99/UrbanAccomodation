        <!-- Page Content -->
        <div id="page-wrapper">
                    <!-- /.col-lg-12 -->
                    <div class="container-fluid">
                        <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-header">Hotel Search List</h1>
                       <form action="hotel-search.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                     <label>Upload Hotel Image</label>
                                         <div id="dropzone" class="form1-drop-text">
                                            <div>
                                                <p style="margin-top: 75px; ">Drag Your Image</p>
                                            </div>
                                            <input type="file" name="hotel_custom" />
                                        </div><br>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Hotel Name</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="hotel_name">
                                          <option>The Leela Palace Hotel</option>
                                          <option>PC Hotel Lahore</option>
                                          <option>The Le Schanze Hotel</option>
                                          <option>The Javson Hotel</option>
                                          <option>The Safari Hotel</option>
                                        </select>
                                    </div>  
                                </div>
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Hotel Area</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="hotel_area">
                                          <option>Udepur India | Map</option>
                                          <option>Mall Road Pakistan | Map</option>
                                          <option>Johar Town | Map</option>
                                          <option>Kashmir Road Sialkot | Map</option>
                                          <option>Khadim Ali Road | Map</option>
                                        </select>
                                    </div>  
                                </div>
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Hotel Description</label>
                                      <textarea class="form-control" rows="5" name="hotel_description"></textarea>
                                    </div>  
                                </div>
                                 <div class="col-md-6">
                                      <div class="form-group">
                                    <label>PRICE</label>
                                    <input type="text" class="form-control" placeholder="$ PRICE" name="hotel_price">
                                </div>
                                </div>
                            </div>
                            <hr>
                            <h4><b>Hotel Characteristics</b></h4>
                            <div class="row">
                                <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1">Hotel Location</label>
                                      <textarea class="form-control" rows="4" name="location"></textarea>
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1">Room Amenities</label>
                                      <textarea class="form-control" rows="4" name="room-amenities"></textarea>
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1">Hotel Facilities</label>
                                      <textarea class="form-control" rows="4" name="hotel-facilities"></textarea>
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1">Dinning</label>
                                      <textarea class="form-control" rows="4" name="dinning"></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4><b>Hotel Facilities Offered</b></h4>
                            <div class="row">
                                <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="exampleFormControlSelect1">Free Parking</label><br>
                                        <input type="radio" name="gender" value="yes"> Yes<br>
                                        <input type="radio" name="gender" value="no"> No<br>
                                    </div> 
                                </div>
                                 <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="exampleFormControlSelect1">Free HighTea</label><br>
                                        <input type="radio" name="tea" value="yes"> Yes<br>
                                        <input type="radio" name="tea" value="no"> No<br>
                                    </div> 
                                </div>
                                <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="exampleFormControlSelect1">Swimming Pool</label><br>
                                        <input type="radio" name="swim" value="yes"> Yes<br>
                                        <input type="radio" name="swim" value="no"> No<br>
                                    </div> 
                                </div>
                                <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="exampleFormControlSelect1">Free Breakfast</label><br>
                                        <input type="radio" name="breakfast" value="yes"> Yes<br>
                                        <input type="radio" name="breakfast" value="no"> No<br>
                                    </div> 
                                </div>
                                <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="exampleFormControlSelect1">Firstad List</label><br>
                                        <input type="radio" name="firstad" value="yes"> Yes<br>
                                        <input type="radio" name="firstad" value="no"> No<br>
                                    </div> 
                                </div>
                            </div>
                            <button type="submit" class="btn btn-submit" name="hotel"> SUBMIT</button>
                        </form>




<br>
                            <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>HOTEL IMAGE</th>
                                <th>HOTEL NAME</th>
                                <th>HOTEL AREA</th>
                                <th>HOTEL DESCRIPTION</th>
                                <th>HOTEL PRICE</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                              </tr>
                            </thead>

                          </table> 

                            </div>
                        </div>
                    </div>
                </div>