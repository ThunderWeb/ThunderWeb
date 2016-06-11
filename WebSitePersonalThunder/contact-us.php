<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Single | Corlate</title>

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


<section id="contact-info">
    <div class="center">
        <h2>Как да се свържете с нас?</h2>
        <p class="lead">Свържете се с нас на един от посочениет телефони или имейли и наш сътрудник с радост ще ви съдейства</p>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe frameborder="0"
                                scrolling="no"
                                marginheight="0"
                                marginwidth="0"
                                src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJPRtFp26FqkARIghjKGQMY2Y&key=AIzaSyAahORvLoTzAQbKcRF3nCB0T2yFjSoa60Y">

                        </iframe>
                        <!--<iframe frameborder="0"-->
                        <!--scrolling="no"-->
                        <!--marginheight="0"-->
                        <!--marginwidth="0"-->
                        <!--src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed">-->
                        <!---->
                        <!--</iframe>-->
                    </div>
                </div>

                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-6">
                            <address>
                                <h5>Head Office</h5>
                                <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                            </address>

                            <address>
                                <h5>Zonal Office</h5>
                                <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                            </address>
                        </li>


                        <li class="col-sm-6">
                            <address>
                                <h5>Zone#2 Office</h5>
                                <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                            </address>

                            <address>
                                <h5>Zone#3 Office</h5>
                                <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->

<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>Оствете ни Съобщение</h2>
            <p class="lead">Ако желаете да се свържете с нас или имате запитване, моля попълнете формата</p>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Име *</label>
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Имейл *</label>
                        <input type="email" name="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Телефон</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Компания</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Заглавие *</label>
                        <input type="text" name="subject" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Съобщение *</label>
                        <textarea name="message" id="message" required="required" class="form-control"
                                  rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">
                            Изпрати
                        </button>
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->

<?php include 'common/bottom/bottom.php' ?><!--/#bottom-->

<?php include 'common/footer/footer.php' ?><!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>