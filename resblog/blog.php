<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>

	<style>
.dropbtn {
  background-color: rgba(0,0,0,0.2);
  color: white;
  padding: 6px;
  font-size: 10px;
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

	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/style1.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
</head>

<body>
	<?php include("header.php");?>
	<?php include("banner.php");?>
	<section class="bottom-slider">
		<!--<div class="course_demo1">
			<ul id="flexiselDemo1">
				<?php //getbottomsliderposts("blogs");?>
			</ul>
		</div>-->
		<div id="availability-agileits">
		<div class="col-md-12" style="text-align:center;color: red;">
  <a href="#"><h6 style="color: blue;">YOU ARE WELCOME TO OUR BLOG ...</h6></a>
</div>
</div>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<!--grid blogs below-->
					<div class="blog-girds-sec">
						<div class="row" >
							<?php getblogridposts("blogs");?>
							<!--bloggrids-->
						</div>
					</div>
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<h4><strong>Blogs</strong></h4>
				

     <div class="dropdown">
  <button class="dropbtn">Categories</button>
  <div class="dropdown-content">
    <a href="#"></a>
    <?php getcategoriesmenu("blog_categories"); ?>
  </div>
</div><br><br><br>




										<div class="tech-btm">
											<h4>Older Posts</h4>
											<?php getolderposts("blogs");?>
											<!--olderpostsendhere-->
										</div>
									</div>
								</aside>
								<!--//right-->
							</div>
						</div>
					</section>
					<!--//main-->
					<!--/middle-->
					<!--<section class="middle-sec-agileinfo-w3ls">
						<div class="container">
							<div class="row inner-sec">
								<div class="col-md-4 news-left">
									<ul id="demo1_thumbs" class="list-inline">
										get latest four
										<?php //getfour("blogs");?>
									</ul>
								</div>
								<div id="demo1_main_image" class="col-md-8  news-right"></div>
								<div class="clearfix"> </div>
							</div>
						</div>

					</section>-->
					<!--//middle-->
					<!---->
					<section class="main-content-w3layouts-agileits">
						<div class="container">
							<div class="row">
								<!--left-->
								<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
									<?php getonelatest("blogs");?>
								</div>
								<!--//left-->
								<!--right-->
								<aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
									<div class="tech-btm">
										<h4>Editor's Choice</h4>
										
										<?php geteditorschoice("editors_choice"); ?>
										
									</div>
									
								</aside>
								<!--//right-->
							</div>
						</div>
					</section>
					<!--//main-->
					
 <?php include("footer.php"); ?>
    <!---->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <!--// end-smoth-scrolling -->

    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            				  			containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            				 		};
            				 		*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <a href="#home" class="scroll" id="toTop" style="display: block;">
        <span id="toTopHover" style="opacity: 1;"> </span>
    </a>

    <!-- //Custom-JavaScript-File-Links -->
    <script src="js/bootstrap.js"></script>


</body>

</html> 
