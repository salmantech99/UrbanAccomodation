<!-- ___________________________REGISTER PAGE________________________ -->
<!-- <div class="container">
    <br><br><br><br><br><br><br>
    <h4 class="contact-us" style="text-align: center;">REGISTER HERE</h4>
    <br>
    <div class="row">
        <div class="col-md-12 today1">
            <form action="<?php echo base_url(); ?>Login/login_user" method="post">
                <div class="form-group">
                    <label for="name" >Name</label>
                    <input type="text" name= "name" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email" >Email</label>
                    <input type="email" name= "email" class="form-control" id="email" required>
                </div>
                <?php if (isset($error_file1)) {
                                        echo "$error_file1";
                                    } ?>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="password" required>
                </div>
                <?php if (isset($error_file)) {
                                        echo "$error_file";
                                    } ?>
                <br><br>
                <div class="text-center">
                    <button type="submit" class="btn register-btn"><i class="fa fa-user-md"></i> Register</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
<div class="page-wrapper" style="height: 100%;">
    <div class="page-content--bge-page" style="height: 100%;">
        <div class="container">
            <div class="login-wrap">
                <h4 class="contact-us-reg" style="text-align: center;">REGISTER HERE</h4>
                <div class="login-content admin-login-form">
                    <div class="login-form">
                        <form action="<?php echo base_url(); ?>Login/login_user" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="au-input au-input--full" type="text" name="name" placeholder="Name" id="name"  required pattern="[A-Za-z]{3,16}" title="*Please enter the correct Name">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="au-input au-input--full"  name="email" placeholder="Email" id="email"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Your email should be e.g 'salman@gmail.com'"/>
                            </div>
                             <?php if (isset($error_file1)) {
                                        echo "$error_file1";
                                    } ?>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password" id="password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="Password must have One Uppercase letter, Special Character and lenght should be 8 characters or longer">
                                <span id="passwordspan"></span>
                              </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="au-input au-input--full" type="password" name="confirm_password" placeholder="Confirm Password" id="Cpassword" required>
                                <span id="Cpasswordspan"></span>
                              </div>
                            <?php echo $this->session->flashdata("error"); ?>
                            <button class="au-btn au-btn--block au-btn--green m-b-20 register-btn-signin" type="submit" onclick="return passwordcheck()"><i class="fa fa-user-md"></i> Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- _________________________________FOOTER________________________________ -->
<div class="footer-reg">
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

<!-- _________________________FOOTER ENDS___________________________ -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <!-- <script src="js/slick.min.js" type="text/javascript" charset="utf-8"></script> -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script type="text/javascript" href="<?php echo base_url();?>assets/js/slick.min.js"></script>
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/range.js"></script>
<script type="text/javascript" href= "<?php echo base_url();?>js/form/popper.js"></script>
<script type="text/javascript" href= "<?php echo base_url();?>js/form/select2.min.js"></script>
<script type="text/javascript" href="<?php echo base_url();?>js/form/main.js"></script>
<script type="text/javascript" href="<?php echo base_url();?>assets/js/slick.min.js"></script>
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
 <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
  function passwordcheck(){
    var password=document.getElementById('password').value;
    var Cpassword=document.getElementById('Cpassword').value;
    if(password!= Cpassword){
        document.getElementById('Cpasswordspan').innerHTML="**Password Don't match. Please Enter again.";
        return false;
    }
}
</script>

<script type="text/javascript">
    $(document).ready(function(){


        $(function() {
          AOS.init();
        });

        $(window).on('load', function() {
          AOS.refresh();
        });
     });
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
<script>
    $(document).ready(function(){
      $('.responsive').slick({
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 5,
          autoplay: true,
          autoplayspeed:500, 
          dots: false,
          prevArrow: false,
          nextArrow: false,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                autoplay: true,
                autoplayspeed:500, 
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                 autoplay: true,
                 autoplayspeed:500, 
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
              }
            }
          ]
        });
      

      $('.slider1').slick({
        infinte:true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth:true,
        arrows:false
      });

      $('.dealleft').click(function(){
          $('.slider1').slick('slickPrev');
        })

      $('.dealright').click(function(){
        $('.slider1').slick('slickNext');
      })

      $('.slider2').slick({
        infinte:true,
        slidesToShow: 2,
        slidesToScroll: 2,
        variableWidth:true,
        arrows:false

      });

      $('.left2').click(function(){
          $('.slider2').slick('slickPrev');
        })

      $('.right2').click(function(){
        $('.slider2').slick('slickNext');
      })



    });
  
</script>
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
<script type="text/javascript">
    $(document).ready(function(){


        $(function() {
          AOS.init();
        });

        $(window).on('load', function() {
          AOS.refresh();
        });
     });
</script>
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
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
   <script>
  $(document).ready(function() {
    $("#datepickerdate").datepicker();
  });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){


        $(function() {
          AOS.init();
        });

        $(window).on('load', function() {
          AOS.refresh();
        });
     });
</script>
<script type="text/javascript">
    $(document).ready(function(){


        $(function() {
          AOS.init();
        });

        $(window).on('load', function() {
          AOS.refresh();
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
<script>
  (function() {
  const headings = document.querySelectorAll('h4');
  
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
</body>
</html>

