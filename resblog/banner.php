<!--/banner-->
<div class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="carousel-caption" style="text-align:center;color: red;">
                    <h3>
                        <?php getbannertext("titles", "1") ?>
                    </h3>
                </div>
            </div>
            <div class="carousel-item item2">
                <div class="carousel-caption" style="text-align:center;color: red;">
                    <h3>
                        <?php getbannertext("titles", "2") ?>
                    </h3>
                </div>
            </div>
            <div class="carousel-item item3">
                <div class="carousel-caption" style="text-align:center;color: red;">
                    <h3>
                        <?php getbannertext("titles", "3") ?>
                    </h3>
                </div>
            </div>
            <div class="carousel-item item4">
                <div class="carousel-caption" style="text-align:center;color: red;">
                    <h3>
                        <?php getbannertext("titles", "4") ?>
                    </h3>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
        <!--<span>Welcome to fcc Blog!</span>-->
        <span class="mx-lg-4 mx-md-2  mx-1" style=";">
            <a href="blogadmin/index.php">
                <i class="fas fa-lock" style="color:green;"></i> <strong>Sign In</strong></a>
        </span>
        <span style=";">
            <a href="blogadmin/membership_signup.php">
                <i class="far fa-user"></i> <strong>Register</strong></a>
        </span>
    </div>
    <!--/model-->
    <!--//banner--> 
