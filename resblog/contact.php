<?php require("libs/fetch_data.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>FCC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


<body>
	<?php include("header1.php");?>

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


<!-- contact -->
<section class="contact-w3ls" id="contact">
  <div class="container">

 <!-- visitors -->
  <div class="w3l-visitors-agile" >
    <div class="container">

   <div class="row">
  <div class="col-12"> 
       <div class="dropdown">
  <button class="dropbtn">More...</button>
  <div class="dropdown-content">
    <a href="interiors">Interior Decoration</a>
    <a href="buildg_constructn">Building Construction</a>
    <a href="renovation">Renovation Works</a>
    <a href="property_mkt">FCC Properties</a>
    <a href="facility_mangmt">Facility Management</a>
    <a href="Contact_Us">Contact Us</a>
  </div>
</div>
  </div>
</div>   <br />

    <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
      <div class="contact-agileits">
        <h4>Contact Us</h4>
        <p class="contact-agile2">Sign Up For Our Consulting Services</p>
        <form  method="post" name="sentMessage" id="contactForm" >
         
          <div class="control-group ">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                    </div>  

                    <div class="control-group ">
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
              <p class="help-block"></p>
                    </div>

                    <div class="control-group ">                  
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
              <p class="help-block"></p>     
                    </div>

                    <div class="control-group ">              
                            <label class="contact-p1">Your request:</label>
                            <textarea class="form-control" name="msg" id="req" required ></textarea>
              <p class="help-block"></p>
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary"> 
        </form>
        <?php
        require("database/db_connect.php");
        
        if (isset($_POST['sub'])) {
          $name = mysqli_real_escape_string($con, $_POST['name']);
          $phone = mysqli_real_escape_string($con, $_POST['phone']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $msg = mysqli_real_escape_string($con, $_POST['msg']);

          $sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`message`) VALUES ('$name','$phone','$email',now(),'$msg')";

          mysqli_query($con, $sql);


          mail('firstcostconceptz@gmail.com', 'Request from website', $msg, $email);
        }
        ?>

      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
      <h4>Connect With Us</h4>
      <p class="contact-agile1"><strong>Phone :</strong>+234 8033-287-183</p>
      <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:">firstcostconceptz@gmail.com</a></p>
      <p class="contact-agile1"><strong>Address :</strong> Plot 3578, Ossi Uzoamaka street, Lakeview Estate, Phase 1, Amuwo Odofin, Lagos.</p><br /><br />
                                
      <!--<div class="social-bnr-agileits footer-icons-agileinfo">
        <ul class="social-icons3">
                <li><a href="http://facebook.com/firstcostconceptz" target="_blank" class="fa fa-facebook icon-border facebook"> </a></li>
                <li><a href="https://twitter.com/firstcostconceptz" class="fa fa-twitter icon-border twitter"> </a></li>
                <li><a href="https://linkedin.com/company/firstcostconceptz"><span class="fa fa-2x fa-linkedin"></span></a></li> 
                <li><a href="https://plus.google.com/firstcostconceptz" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                <li><a href="https://faq.whatsapp.com/firstcostconceptz" class="fa fa-whatsapp icon-border whatsapp" style="background-color: green; "> </a></li>
                
              </ul>
      </div>-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7928.4926141671685!2d3.2971896293330447!3d6.490464287123995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPlot+3578%2C+Ossi+Uzoamaka+street%2C+Lakeview+Estate%2C+Phase+1%2C+Amuwo+Odofin%2C+Lagos.!5e0!3m2!1sen!2sng!4v1549734278821" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="clearfix"></div>
  </div>
</section>
<!-- /contact -->
      <div class="copy">
            <p>© 2019 FCC . All Rights Reserved | Design by <a href="index.php">FIRST COST CONCEPTZ</a> </p>
        </div>
 </div>
  </div>


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
