<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Us | Corlate</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

<header id="header">
    <?php include 'common/topbar/topbar.php'; ?><!--/.top-bar-->
    <?php include 'common/navbar/navbar.php'; ?><!--/nav-->
</header><!--/header-->


<section class="pricing-page">
    <div class="container">
        <div class="center">
            <h2>Pricing Table</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
        <div class="pricing-area text-center">
            <div class="row">

                <?php include 'elements/pricing/pricing_main.php' ?><!--/pricing_main-->

                <?php include 'elements/pricing/pricing_secondary.php' ?><!--/pricing_main-->

            </div>
        </div><!--/pricing-area-->
    </div><!--/container-->
</section><!--/pricing-page-->

<?php include 'common/bottom/bottom.php' ?><!--/#bottom-->

<?php include 'common/footer/footer.php' ?><!--/#footer-->


<script src="js/jquery.js"></script>
<script type="text/javascript">
    $('.carousel').carousel()
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>