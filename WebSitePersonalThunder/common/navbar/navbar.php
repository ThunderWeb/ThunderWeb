<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="active" id="index"><a href="index.php">Home</a></li>
                <li id="about"><a href="about-us.php">За нас</a></li>
                <li id="servies"><a href="services.php">Услуги</a></li>
                <li id="portfolio"><a href="portfolio.php">Портфолио</a></li>
                <li id="price"><a href="pricing.php">Цени</a></li>
                <li id="support"><a href="support.php">Test</a></li>
                <li class="dropdown" onclick="SetActive">
                    <a href="services.php" class="dropdown-toggle" data-toggle="dropdown">Pages <i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="blog-item.php">Blog Single</a></li>
                        <li><a href="pricing.php">Цени</a></li>
                        <li><a href="404.php">404</a></li>
                        <li><a href="shortcodes.php">Shortcodes</a></li>
                    </ul>
                </li>
                <li><a href="blog.php">Блог</a></li>
                <li><a href="contact-us.php">Контакти</a></li>
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
