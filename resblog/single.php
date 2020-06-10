<?php require("libs/fetch_data.php"); ?>
<?php  //code to get the item using its id
include("database/conn.php"); //database config file
$id = $_REQUEST['id'];
$query = "SELECT * from blogs where id='" . $id . "'";
$result = mysqli_query($GLOBALS["___mysqli_ston"], $query) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : true)));
$row = mysqli_fetch_assoc($result);
//pageview count query
$page = $row['title'];
$count = "SELECT * FROM page_hits WHERE page='" . $page . "'";
$feedback = mysqli_query($GLOBALS["___mysqli_ston"], $count) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : true)));
$roo = mysqli_fetch_assoc($feedback); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $row['title']; ?>|<?php getwebname("titles"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
    <meta charset="utf-8" name="description" content="<?php getshortdescription("titles"); ?>">
    <meta name="keywords" content="<?php getkeywords("titles"); ?>" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/single.css">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
     <link href="css/style1.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <!--additional javascripts will be placed here-->
    <?php getjavascripts("links"); ?>
</head>

<body>
    <!--Header-->
    <?php include("header.php"); ?>
    <!--//header-->
    <!--update database on page views-->
    <?php require_once('adminstats/conn.php');
		require_once('counter.php');
		$pn = updateCounter('' . $row['title'] . ''); // Updates page hits
		echo $pn;
		updateInfo(); ?>
    <div class="banner-inner">
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="home.php">Home</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="blog.php">Blog</a>
        </li>
        
    </ol>

    <!--//banner-->
    <section class="banner-bottom">
        <!--/blog-->
        <div class="container">
            <div class="row">
                <!--left-->
                <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                    <div class="blog-grid-top">
                        <div class="b-grid-top">
                            <div class="blog_info_left_grid">
                                <a href="#">
                                    <img src="blogadmin/images/<?php echo $row['photo']; ?>" class="img-fluid" alt="image not available" style="width:150px;height:90px">
                                </a>
                            </div>
                   
                        </div><br>
        
                        <h2c>
                        <span style="font-family:calibri; font-size:30px; color:black;padding-top: 25%;"><a1 href="single.html"><?php echo $row['title']; ?></a1></span>
                        </h2c>

                         <div class="hi1">
                           <span class="post-date">
                            <a href="#" class="far fa-calendar-alt"><?php echo $row['date']; ?></a>
                            <a href="#" class="far fa-user"> <?php echo $row['author']; ?></a>
                            <a href="#" class="far fa-tags"> <?php echo $row['tags']; ?></a>
                            <a href="#" class="far fa-eye fa-x2"> <?php echo $roo['count']; ?></a>
                            </span>
                         </div>       


                        <!--sharing script-->
                        <?php getsharingscript("links"); ?>
                       <div class="pstcnt" style="background: antiquewhite;padding: 2%;"><?php echo $row['content']; ?></div> 
                    </div>
                    <!--comments script will go here-->
                    <?php getcommentsscript("links"); ?>
                </div>

                <!--//left-->
                <!--right-->
                <aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
                    <div class="right-blog-info text-left">



                        <div class="tech-btm" style="background-color: white; padding: 6%;">
                            <h4>Editor's Choice</h4>
                            <?php geteditorschoice("editors_choice"); ?>
                            <!--olderpostsendhere-->
                        </div>
                    </div>
                </aside>
                <!--//right-->
            </div>
        </div>
    </section>
    <!--//main-->
    <!--footer-->
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
