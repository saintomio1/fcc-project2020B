<?php require("libs/fetch_data.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>FCC</title>

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

	<section class="row">
		<article class="col-sm-12"><br><br><br>


  <!--sevices-->
<div class="advantages">
  <div class="container">

<div class="row">
  <div class="col-12"> 
       <div class="dropdown">
  <button class="dropbtn">More..</button>
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
</div>

    <div class="advantages-main">
        <h3 class="title-w3-agileits">Our Services</h3>
       <div class="advantage-bottom">
       <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
        <div class="advantage-block ">
          <i class="fa fa-credit-card" aria-hidden="true"></i>
          <h4>Pre-Contract Activities </h4>
          <p>Our business activities before the actual construction works are as follows</p>
          <p><i class="fa fa-check" aria-hidden="true"></i>Professional Advise: Interpretation of Initial Client brief.</p>
          <p><i class="fa fa-check" aria-hidden="true"></i>Project Design and Work Specification.</p>
          <p><i class="fa fa-check" aria-hidden="true"></i>Project Documentation.</p>
           <p><i class="fa fa-check" aria-hidden="true"></i>Project Cost Planning.</p>
          
        </div>
       </div>
       <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
        <div class="advantage-block">
          <i class="fa fa-clock-o" aria-hidden="true"></i>
          <h4>Post-Contract Activities</h4>
          <p>We had built competence over the years in the following aspects of works </p>
          <p><i class="fa fa-check" aria-hidden="true"></i>Building Construction.</p>
          <p><i class="fa fa-check" aria-hidden="true"></i>Interior and Exterior Finishing.</p>
          <p><i class="fa fa-check" aria-hidden="true"></i>Electrical and Plumbing Installation.</p>
          <p><i class="fa fa-check" aria-hidden="true"></i>Landscaping.</p>
        </div>
       </div>
      <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!--//sevices-->
<br><br>


 <div class="col-md-12">
    <span><h2 style="font-family:Lucida Sans; color:red; font-weight:bold;">Key Markets..<s>N</s></h2>
      </span>

<a style="font-size:20px; color:white; font-weight:bold;">Our operational service cater to a wider spectrum of construction needs in both private and public sectors. Our work portfolio has record of project success in the Residential and Commercial spaces and working with clients across different sector and with varying budgets.</a>
</div><br><br><br>

</article>
</section>


<section class="container">
<section class="row">

<div class="col-3" style='padding: 2%;'>	  
<div class="img3c"> <p><img src="assets/images1/Hmpg/Model2.jpg" width="220px" height="150px"></p></div>	
<h4><span class='glyphicon glyphicon fa fa-chevron-circle-right' style='font-size:20px; color: rgb(70, 68, 66)'></span><a style='font-family:Helvetica; color: #423f3d;'>    Project Design</a></h4>
<h5 style='font-family:calibri;color: #686260;'>We offer the best Architecture of various project with high competetive edge </h5>
    </div>
  
    
    <div class="col-3" style='padding: 2%;'>	
<div class="img3c"> <p><img src="assets/images1/Hmpg/BGd8.jpg" width="220px" height="150px"></p></div>	
<h4><span class='glyphicon glyphicon fa fa-chevron-circle-right' style='font-size:20px; color: rgb(70, 68, 66)'></span><a style='font-family:Helvetica; color: #423f3d;'>    Buiding Construction</a></h4>  
<h5 style='font-family:calibri;color: #686260;'>We handle Building Construction with high level of competence.</h5>
		</div>


    <div class="col-3" style='padding: 2%;'>	
<div class="img3"> <p><img src="assets/images1/Hmpg/kk5.jpg" width="220px" height="150px"></p></div>	
<h4><span class='glyphicon glyphicon fa fa-chevron-circle-right' style='font-size:20px; color: rgb(70, 68, 66)'></span><a style='font-family:Helvetica; color: #423f3d;'>    Project /Facility Management</a></h4>   
<h5 style='font-family:calibri;color: #686260;'>We undertake wide range of facility and assets management.</h5>
		</div>

<div class="col-3" style='padding: 2%;'>	
<div class="img3c"> <p><img src="assets/images1/web/PSB.jpg" width="220px" height="150px"></p></div>	
<h4><span class='glyphicon glyphicon fa fa-chevron-circle-right' style='color: #423f3d;'></span><a style='font-family:Helvetica; color: #423f3d;'>   FCC Properties</a></h4> 
<h5 style='font-family:calibri;color: #686260;'>We have the best hands in real-estate business to the best advantage of our Clients.</h5>
		</div>
     
</section>
</section>

 <?php include("footer2.php");?>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="assets2/js/jquery-2.1.4.min.js"></script>

    <script src="assets2/js/jquery-ui.js"></script>
    <script>
        $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
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
