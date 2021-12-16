  <!-- _______________________________________CONTACT BACKGROUND IMAGE________________________________ -->
<div class="contact-bg">
  <div class="container">
    <div class="row">
      <div class=" col-md-4 col-sm-12 col-xs-12">
        <h2 class="contact-us" data-aos="fade-left">Flight Search Results</h2>
      </div>
      <div class=" offset-md-5 col-md-3 d-md-block d-none">
        <button type="button" class="btn contact-btn"><span class="hotel">Flights</span> <i class="fas fa-angle-right"></i>Flight Search</button>
      </div>
    </div>
  </div>
</div>
 <!--  _________________________DELHI TO MUMBAI___________________________ -->
<div class="container one-way-margin">
  <div class="row">
    <div class="col-md-4">
      <div id="mydiv">
        <button type="button" class="btn found-hotel-btn-grid" >
          <div class="row">
            <div class="col-md-2 col-sm-6">
              <i class="fas fa-bell bell"></i>
            </div>
            <div class="col-md-10 col-sm-12">
              <li class="found-btn-font-grid">FOUND 307 HOTELS  <a class="closebtn cross-btn" id="div-close" >&times;</a><br>IN 1.6 SECONDS</li>
            </div>
          </div>
        </button>
      </div>
      <div class="bbb">
        <h3>
          <p class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png"> Search <button aria-expanded="true" class="test">
            <svg viewBox="0 0 10 10">
              <rect class="vert" height="8" width="2" y="1" x="4"/>
              <rect height="2" width="8" y="4" x="1"/>
            </svg> 
          </button> </p>
        </h3>
        <div>
          <div class="search-tool">
            <input class="form-control search-tool1" type="text" placeholder="Search Here .." aria-label="Search">
          </div>
        </div> 
      </div> 
      <div class="bbb">
        <h3>
          <p class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png">Pricing<button aria-expanded="true" class="test">
            <svg viewBox="0 0 10 10">
              <rect class="vert" height="8" width="2" y="1" x="4"/>
              <rect height="2" width="8" y="4" x="1"/>
            </svg> 
          </button> </p>
        </h3>
        <div>
          <div class="row dba">
            <div class=" offset-md-1 col-md-10">
              <div id="slider-container"></div>
              <p>
                  <input type="text" id="amount" style="border: 0; color: #9ea1a3; font-weight: bold;width: 100%;text-align: center;" />
              </p>
              <div id="slider-range"></div>
            </div>
          </div>
        </div>    
      </div>
      <div class="table-b1">
        <h3>
          <p class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png">Flights Stops<button aria-expanded="true" class="test">
            <svg viewBox="0 0 10 10">
              <rect class="vert" height="8" width="2" y="1" x="4"/>
              <rect height="2" width="8" y="4" x="1"/>
            </svg> 
          </button> </p>
        </h3>
        <div>
          <div class="b1-table">
            <table class="table">
              <tbody>
                <tr class="jul-font">
                  <td>0</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3+</td>
                </tr>
                <tr class="july">
                  <td>$212</td>
                  <td>$767</td>
                  <td>$624</td>
                  <td>$180</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div> 
      </div>
      <div class="bbb">
        <h3>
          <p class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png">Airlines<button aria-expanded="true" class="test">
            <svg viewBox="0 0 10 10">
              <rect class="vert" height="8" width="2" y="1" x="4"/>
              <rect height="2" width="8" y="4" x="1"/>
            </svg> 
          </button> </p>
        </h3>
        <div>
          <?php foreach($posts as $post){?>
          <div class="row">
            <div class="col-md-2">
              <input class="form-check-input check-box-jul" type="checkbox" id="inlineCheckbox1" value="option1">
            </div>
            <div class="col-md-7">
              <img src="<?php echo base_url('uploads/'.$post->thumb); ?>" class="jul-bx-flight" >
              <label class="form-check-label check-font-july" for="inlineCheckbox1"><?php echo $post->departure_airline;?> </label>
            </div>
            <div class="col-md-3 flight-airline-list-price">
              <span class="flight-airline-list">$<?php echo $uni = $post->price_adults + $post->price_infant + $post->price_child;?></span>
            </div>  
          </div>
          <hr>
          <?php } ?>
        </div> 
      </div>
      <div class="table-b1">
        <h3>
          <p class="depart-font"><img src="<?php echo base_url(); ?>assets/image/search-hotel/red.png">Depart Timing<button aria-expanded="true" class="test">
            <svg viewBox="0 0 10 10">
              <rect class="vert" height="8" width="2" y="1" x="4"/>
              <rect height="2" width="8" y="4" x="1"/>
            </svg> 
          </button> </p>
        </h3>
        <div>
          <div class="b1-table">
            <table class="table">
              <tbody>
                <tr>
                  <td><img src="<?php echo base_url(); ?>assets/image/flight-search-list/half-sun.png" class="jul-table"></td>
                  <td><img src="<?php echo base_url(); ?>assets/image/flight-search-list/sun.png" class="jul-table"></td>
                  <td><img src="<?php echo base_url(); ?>assets/image/flight-search-list/mid-sun.png" class="jul-table"></td>
                  <td><img src="<?php echo base_url(); ?>assets/image/flight-search-list/moon.png" class="jul-table"></td>
                </tr>
                <tr class="july">
                  <td>00-06</td>
                  <td>06-12</td>
                  <td>12-18</td>
                  <td>18-00</td>
                </tr>
              </tbody>
            </table>
          </div>
          <h4 class="july-current">Current Time 6:45 PM</h4>
        </div>  
      </div>
    </div>
    <div class="col-md-8">
      <h2>Result Not Found</h2>
    </div>
  </div>
</div>
 <!-- _________________________________FOOTER________________________________ -->
<div class="footer1">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-12 col-xs-12">
        <a href="about.php"><li class="footer-txt"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> About Us</li></a>
        <p class="footer-txt1">Vivamus fermentum volutpat dolor idor efficitur. Fusce vel commodo lacus ovel rutrum lorem. Aliquam tincidunt mauris nec tellus iaculis, sed auctor lorem.</p>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3">
        <li class="footer-txt"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> Tag's</li>
        <li class="btn-footer2">
        <button type="button" class="btn btn-outline btn-footer">DUBAI</button>
        <button type="button" class="btn btn-outline btn-footer">TRAVEL</button>
        <button type="button" class="btn btn-outline btn-footer">PSD</button>
        <button type="button" class="btn btn-outline btn-footer">BOOKING</button>
        <button type="button" class="btn btn-outline btn-footer">DESTINATION</button>
        <button type="button" class="btn btn-outline btn-footer">TRUCK</button></li>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3">
        <li class="footer-txt"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> Activities</li>
        <p class="footer-txt1">-  Skiing Adventure <br> -  Cycling
        <br> -  Rafting <br> -  Parachuting</p>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <li class="footer-txt"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> Latest Blogs</li>
        <div class="row .d-none .d-md-block .d-lg-block .d-xl-block">          
          <div class="col-md-12 col-sm-12 col-xs-12 blog footer-txt1">
            <li class="d-md-block d-none"> <img src="<?php echo base_url(); ?>assets/image/travo/demo.jpg" style="width:  72%; height: 89px;"> </li>
            <p class="d-sm-block d-md-none" style="width:273px">Integer amet quam eleifend, commodo sem eget</p>
            <li class="footer-txt4 d-sm-block d-md-none"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> 31 July 2021</li>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 footer-txt3 footer-txt1 ">
            <p class="d-md-block d-none" style="width:223px">Integer amet quam eleifend, commodo sem eget</p>
            <li class="footer-txt4 d-md-block d-none"><img src="<?php echo base_url(); ?>assets/image/travo/red.png"> 31 July 2021</li> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ___________________COPYRIGHT______________________ -->
<div class="copyright1">
  <div class="container-fluid">
    <p class="copy-text">© 2021 - Urban Accomodation PSD Template - Made by Timon Themes</p>
  </div>
</div>
<script>
$(function () {
      $('#slider-container').slider({
          range: true,
          min: 30,
          max: 300000,
          values: [30, 300000],
          create: function() {
              $("#amount").val("$30 - $300000");
          },
          slide: function (event, ui) {
              $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
              var mi = ui.values[0];
              var mx = ui.values[1];
              filterSystem(mi, mx);
          }
      })
});

  function filterSystem(minPrice, maxPrice) {
      $("#computers div.system").hide().filter(function () {
          var price = parseInt($(this).data("price"), 10);
          return price >= minPrice && price <= maxPrice;
      }).show();
  }
</script>
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $("#div-close").click(function(){
        $("#mydiv").hide();
    });
});
</script>
<script>
  (function() {
  const headings = document.querySelectorAll('h3');
  
  Array.prototype.forEach.call(headings, h => {
    let btn = h.querySelector('button');
    let target = h.nextElementSibling;
    
    btn.onclick = () => {
      let expanded = btn.getAttribute('aria-expanded') === 'true';
      
      btn.setAttribute('aria-expanded', !expanded);
      target.hidden = expanded;  
    }
  });
})()
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/slick.min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".center").slick({
        dots: false,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3


      });
       $('.july-left').click(function(){
          $('.center').slick('slickPrev');
        })

      $('.july-right').click(function(){
        $('.center').slick('slickNext');
      })
    });

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
 <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  </body>
</html>


