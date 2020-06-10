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
      <h4><a style='font-size:50px;'>Project / Facility Management</a></h4>
      <h5>We exploit the use of technology to the best advantage in whole process of planning; execution and control of projects to achieve desired result within a predetermined time frame.
      We also offer an efficient and effective delivery of support services for various sectors within the built environment.</h5>
      </div>
    </div>
</div> 



<div class="row">
    <div class="col-6">
      <div id="abt-content"> 
      <span class="abtc">
      
      <ul>
        <li><a>Project Management.</a></li>
        <li><a>Facilities / Assets management.</a></li>
      </ul>
      </span>
      </div>
    </div>
</div> 


<section class="container">
<section class="row">
<!-- rooms & rates -->
      <div class="plans-section" id="rooms">
         <div class="container">
        <!-- <h3 class="title-w3-agileits title-black-wthree">FM</h3>-->
            <div class="priceing-table-main">
       
           <div class="col-md-3 price-grid">
          <div class="price-block agile">
            <div class="price-gd-topi">
            <img src="assets/images1/ourServices/facility/PFMgt.jpg" alt=" " class="img-responsive" />
              <h4>Project / Facility Management</h4>
            </div>
            
            
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
   <!--// rooms & rates -->
  
    </section>
     </section>
   

<br><br><br>
    <div class="row">
<div class="col-12">  
<div class="galc">
<h3><p>@ FCC..</p></h3>
      <h5>We are dedicated to the service of improving quality of life of people and productivity of the core business.</h5>
    </div>
    </div> 

</div> <br><br>

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
