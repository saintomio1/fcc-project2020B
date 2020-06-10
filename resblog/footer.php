<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>About US</h3>
					<p><?php getshortdescription("titles"); ?></p>
					<div class="read">
						<a href="aboutUs.php" class="btn btn-primary read-m">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>Popular Posts</h3>
						<?php getpopularposts("page_hits"); ?>
					</div>
				</div>
				<!-- subscribe -->
				<div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>Signup to our newsletter</h2>
					<div class="subscribe-main text-left">
							<div class="subscribe-form">
									<form action="#" method="post" class="subscribe_form">
										<input class="form-control" type="email" placeholder="Enter your email..." required="">
										<button type="submit" class="btn btn-primary submit">Submit</button>
									</form>
									<div class="clearfix"> </div>
						   </div>
						<p>We respect your privacy.No spam ever!</p>
					</div>
					<!-- //subscribe -->
				</div>
			</div>
			<!-- footer -->
			

<!--<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts">

        <ul class="social-icons3">
                <li><a href="http://facebook.com/firstcostconceptz" target="_blank" class="fa fa-facebook icon-border facebook"> </a></li>
                <li><a href="https://twitter.com/firstcostconceptz" class="fa fa-twitter icon-border twitter"> </a></li>
                <li><a href="https://linkedin.com/company/firstcostconceptz"><span class="fa fa-2x fa-linkedin"></span></a></li> 
                <li><a href="https://plus.google.com/firstcostconceptz" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                <li><a href="https://faq.whatsapp.com/firstcostconceptz" class="fa fa-whatsapp icon-border whatsapp" style="background-color: green; font-size: 28px; color: white; margin-left: 12px;"> </a></li> 
                
              </ul><br>
      </div><br>
</div>

      <div class="clearfix"> </div>
</div>-->


			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
					<ul class="social_list1 mt-3">

                    <li>
                        <a href="<?php getlinks("links", "facebook"); ?>" class="facebook1 mx-2">
                            <i class="fab fa-facebook-f"></i>

                        </a>
                    </li>
                    <li>
                        <a href="<?php getlinks("links", "twitter"); ?>" class="twitter2">
                            <i class="fab fa-twitter"></i>

                        </a>
                    </li>
                    <li>
                        <a href="<?php getlinks("links", "googleplus"); ?>" class="pin" style="background:red;">
                            <i class="fab fa-google"></i>

                        </a>
                    </li>
                    <li>
                        <a href="<?php getlinks("links", "faq.whatsapp"); ?>" class="dribble3 mx-2" style="background:green;">
                            <i class="fab fa-whatsapp" ></i>
                            
                        </a>
                    </li>
                     <li>
                        <a href="<?php getlinks("links", "linkedin"); ?>" class="pin" style="background:#f5f0ec;">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                </ul>


                
					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p> fcc Blog-site <?php $current=date("Y"); print_r($current);?> | powered by
						<a href="https://plus.google.com/firstcostconceptz">First Cost Conceptz</a>
					</p>

				</div>
			</div>
			<!-- //footer -->
		</div>
	</footer>