<?php require("libs/fetch_data.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>FCC</title>

<head>
<style>
.dropbtn {
  background-color: rgba(0,0,0,0.2);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: grey;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: grey;}
</style>

</head>
<body>
<?php include("header1.php");?>

<section class="containerx">
<div class="container">  
  
  <div class="row">
  <div class="col-12"> 
        <div class="dropdown">
  <button class="dropbtn">More...</button>
  <div class="dropdown-content">
    <a href="interiors.php">Interior Decoration</a>
    <a href="building.php">Building Construction</a>
    <a href="renovation.php">Renovation Works</a>
    <a href="property_mkt.php">FCC Properties</a>
    <a href="facility_mangmt.php">Facility Management</a>
    <a href="contact.php">Contact Us</a>
  </div>
</div>
    </div>
  </div><br><br> 

<div class="row">
    <div class="col-12">
      <div class="oxi1c">
      <h4><a style='font-size:50px;'>Renovation Works</a></h4>
      <h5>When it comes to building renovation, quality and trust should never be compromised. Working with a professional is an absolute must.  You can rely on us for your next building renovation works. Our operations are carried out by fully trained personnel to the highest professional standards</h5>
      </div>
    </div>
</div> 

<div class="row">
    <div class="col-6">
      <div id="abt-content"> 
      <span class="abtc">
      <ul>
        <li><a>Repair/Refurbishment Works.</a></li>
        <li><a>Turn-around maintenance.</a></li>
      </ul>
      </span>
      </div>
    </div>
</div> 
<br><br>
<section class="container">
<section class="row">

   <section class="portfolio-w3ls" id="gallery">
   <!--  <h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3>-->
        <div class="col-md-3 gallery-grid gallery1">
          <a href="assets/images1/ourServices/renovatn/asb.jpg" class="swipebox"><img src="assets/images1/ourServices/renovatn/asa.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>FCC Project</h4>
              <p><i href="assets/images1/gallery/akp.jpg" class="swipebox"></i></p>
            </div>
        </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="assets/images1/ourServices/renovatn/asb1.jpg" class="swipebox"><img src="assets/images1/ourServices/renovatn/41bc.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>FCC Project</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
        </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="assets/images1/ourServices/renovatn/so2.jpg" class="swipebox"><img src="assets/images1/ourServices/renovatn/so1.PNG" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>FCC Project</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
        </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="assets/images1/ourServices/renovatn/b4.jpg" class="swipebox"><img src="assets/images1/ourServices/renovatn/after.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>FCC Project</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
        </a>
        </div>
        <div class="clearfix"> </div>
</section>
    </section>
    </section><br><br>


<div class="row">
<div class="col-12">  
  <div class="fcc">
    <h3><p>@ FCC..</p></h3>
      <h5>We combine quality workmanship, superior knowledge and low prices to provide you with service unmatched by our competitors.</h5><br><br><br>
    </div>
  </div>  
</div> 

</div>
</div>
</section>


<?php include("footer2.php");?>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="assets2/js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="assets2/js/jqBootstrapValidation.js"></script>

<!-- /contact form -->  
<!-- Calendar -->
    <script src="assets2/js/jquery-ui.js"></script>
    <script>
        $(function() {
        $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
        });
    </script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="assets2/css/swipebox.css">
        <script src="assets2/js/jquery.swipebox.min.js"></script> 
          <script type="text/javascript">
            jQuery(function($) {
              $(".swipebox").swipebox();
            });
          </script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="assets2/js/move-top.js"></script>
<script type="text/javascript" src="assets2/js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
        <script defer src="assets2/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider){
            $('body').removeClass('loading');
          }
          });
        });
        </script>
      <!-- //flexSlider -->
<script src="assets2/js/responsiveslides.min.js"></script>
      <script>
            // You can also use "$(window).load(function() {"
            $(function () {
              // Slideshow 4
              $("#slider4").responsiveSlides({
              auto: true,
              pager:true,
              nav:false,
              speed: 500,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
              }
              });
          
            });
      </script>
    <!--search-bar-->
    <script src="assets2/js/main.js"></script> 
<!--//search-bar-->
<!--tabs-->
<script src="assets2/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
  <script type="text/javascript">
    $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
      };
    */                
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  
  <div class="arr-w3ls">
  <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  </div>
