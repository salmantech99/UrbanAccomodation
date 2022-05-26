<!DOCTYPE html>
<html>
<head>
    <title>
        TRAVO
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/others/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/others/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form/select2.min.css">
    <!-- Calender -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <style>
      /*body {
  max-width: 40rem;
  margin: 0 auto;
  padding: 1em;
}
*/
/*main {
  border-width: 2px 0;
  border-style: solid;
}

main h2 {
  margin: 0;
}

main > div + h2 {
  border-top: 2px solid;
}
*/
.test{
  all: inherit;
  border: 0;
  display: flex;
  justify-content: space-between;
  width: 100%;
  padding: 0.5em 0;
}

.test:focus svg {
  outline: 2px solid;
}

.test svg {
  height: 1em;
  margin-left: 0.5em;
}

[aria-expanded="true"] .vert {
  display: none;
}

[aria-expanded] rect {
  fill: currentColor;
}

/* page styles */


    </style>
</head>
<body>
  <h2>
    <button aria-expanded="false" class="test">
      <svg aria-hidden="true" focusable="false" viewBox="0 0 10 10">
        <rect class="vert" height="8" width="2" y="1" x="4"/>
        <rect height="2" width="8" y="4" x="1"/>
      </svg> 
    </button> 
  </h2>
  <div hidden>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo purus quis mi cursus hendrerit eu eu metus. Aliquam aliquam arcu eget aliquet scelerisque. Pellentesque sodales turpis vitae venenatis vehicula. Ut id porta velit. Ut eu dignissim dui, quis gravida est. Cras quis venenatis mauris, a bibendum enim. Sed at augue libero. Nullam tortor metus, tincidunt ut urna id, posuere placerat orci. Ut quis risus dictum risus facilisis imperdiet quis sed eros.</p>
  </div>
  <h2>
    <button aria-expanded="false" class="test">
      <svg aria-hidden="true" focusable="false" viewBox="0 0 10 10">
        <rect class="vert" height="8" width="2" y="1" x="4"/>
        <rect height="2" width="8" y="4" x="1"/>
      </svg>   
    </button>
  </h2>
  <div hidden>
    <p>Nullam tortor metus, tincidunt ut urna id, posuere placerat orci. Ut quis risus dictum risus facilisis imperdiet quis sed eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo purus quis mi cursus hendrerit eu eu metus. Aliquam aliquam arcu eget aliquet scelerisque. Pellentesque sodales turpis vitae venenatis vehicula. Ut id porta velit. Ut eu dignissim dui, quis gravida est. Cras quis venenatis mauris, a bibendum enim. Sed at augue libero.</p>
  </div>
</body>
<script type="text/javascript" href= "js/jquery.min.js"></script>
<script type="text/javascript" href= "js/bootstrap.min.js"></script>
<script>
  (function() {
  const headings = document.querySelectorAll('h2');
  
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
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" href= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</html>