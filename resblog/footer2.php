		</div>

		<section class="footer">
	<footer class="container">
		<section class="row">
			<br><br>
			<article class="col-sm-3">
				<h4>Useful Links</h4>
			<div class="checkbox">
  				<label>
    				<input type="checkbox" value="Home">
	 				<a href="home.php">Home</a>
  				</label>
			</div>
			<div class="checkbox" >
  				<label>
	 				<input type="checkbox" value="">
	 				<a href="#">Technology</a>
  				</label>
			</div>
			<div class="checkbox" >
  				<label>
	 				<input type="checkbox" value="">
	 				<a href="#">Business</a>
  				</label>
			</div>
		</article>
		<article class="col-sm-3">
			<h4>Terms and conditions</h4>
				<div class="checkbox">
  					<label>
    					<input type="checkbox" value="Home">
	 					<a href="#">Policy</a>
  					</label>
				</div>
				<div class="checkbox" >
  					<label>
	 					<input type="checkbox" value="">
	 					<a href="#">Privacy</a>
  					</label>
				</div>
				<div class="checkbox" >
  					<label>
	 					<input type="checkbox" value="">
	 					<a href="#">Disclaimer</a>
  					</label>
				</div>
			</article>
			<article class="col-sm-3">
				<h4>Contacts</h4>
				<div class="checkbox">
  					<label>
    					<input type="checkbox" value="Home">
	 					<a href="contact.php">Contact Us</a>
  					</label>
				</div>
				<div class="checkbox" >
  					<label>
	 					<input type="checkbox" value="">
	 					<a href="aboutUs.php">About</a>
  					</label>
				</div>
				<div class="checkbox" >
  					<label>
	 					<input type="checkbox" value="">
	 					<a href="#">Adverts</a>
  					</label>
				</div>
			</article>
	
		

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
                        <a href="<?php getlinks("links", "faq.whatsapp."); ?>" class="dribble3 mx-2" style="background:green;">
                            <i class="fab fa-whatsapp" ></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php getlinks("links", "plus.google"); ?>" class="pin" style="background:red;">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>

                     <li>
                        <a href="<?php getlinks("links", "linkedin"); ?>" class="pin" style="background:#f5f0ec;">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
         
       <br><br>
       
			
               
    </div>

	
			</article>
		</section>
		<form action="search.php" method="post"  style="background-color: yellow;" name="form">
                   <input  type="search" placeholder="Search here..." required="yes" type="text" name="search[keyword]">
                     <button class="btn" type="submit" name="submit"><i class="fas fa-search"></i></button>
                </form>
					

		<br><br>
		<p class="copyright" align="center">&copy; <?php echo date('Y') ?> All rights reserved; www.firstcostconceptz.com; firstcostconceptz@gmail.com
		<br> +234803-3287183; 234802-2272600</p>
	</footer>
</section>
<script>
CKEDITOR.replace('myeditor');
	/*$(document).ready(function(){
		//alert('hello jquery');
	});*/
</script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<!--<script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.js"></script>-->



</body>
</html>
