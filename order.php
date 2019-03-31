<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 3/12/2019
 * Time: 11:35 AM
 */
extract($_GET);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodbytes - Openfire Hosting</title>
    <link rel="icon" type="image/png" href="img/favicon.ico" sizes="128x128" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!-- CSS ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-18607725-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-18607725-2');
    </script>
</head>
<body>
<header id="header">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html">
                    <img src="img/GoodBytes-Logo-Small.png" alt="" title="" width="100px" />
                </a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.html#page">Home</a></li>
                    <li><a href="index.html#features">Services</a></li>
                    <li><a href="index.html#price">Pricing</a></li>
                    <li><a href="index.html#contact">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>
<!-- start banner Area -->
<section class="banner-area2 relative mt-100" id="home" style="height: 100%">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-8 col-md-12">
                <h1 class="text-uppercase text-black" style="color: black;">
                    <?php if ($order==1):?>
                        Team
                    <?php elseif ($order==2) : ?>
                        Office
                    <?php elseif ($order==3) : ?>
                        Enterprise
                    <?php else : ?>
                        No record found for this plan
                    <?php endif; ?>
                </h1>
                <p class="text-black">
                    <?php if ($order==1):?>
                        For Individuals
                    <?php elseif ($order==2) : ?>
                        For the small Company
                    <?php elseif ($order==3) : ?>
                        For the large Company
                    <?php else : ?>
                        No record found for this plan
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- start contact Area -->
<section class="contact-area section-gap" id="contact">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content col-lg-8">
                <div class="title text-center">
                    <h1>Confirm your order</h1>
                </div>
            </div>
        </div>
        <!-- Start price Area -->
        <section class="price-area pb-10 pt-20" id="pricing">
            <div class="">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-price">
                            <div class="top-sec d-flex justify-content-between <?php if ($order==1) echo 'orange-bg' ?>">
                                <div class="top-left">
                                    <h4 class="<?php if ($order==1) echo 'text-white' ?>">Team</h4>
                                    <p>For the <br>individuals</p>
                                </div>
                                <div class="top-right">
                                    <h1 class="<?php if ($order==1) echo 'text-white' ?>">€50</h1>
                                </div>
                            </div>
                            <div class="end-sec">
                                <a href="order.php?order=1" class="primary-btn price-btn">Choose<span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-price">
                            <div class="top-sec d-flex justify-content-between <?php if ($order==2) echo 'orange-bg' ?>">
                                <div class="top-left">
                                    <h4 class="<?php if ($order==2) echo 'text-white' ?>">Office</h4>
                                    <p>For the <br>small Company</p>
                                </div>
                                <div class="top-right">
                                    <h1 class="<?php if ($order==2) echo 'text-white' ?>">€100</h1>
                                </div>
                            </div>
                            <div class="end-sec">
                                <a href="order.php?order=2" class="primary-btn price-btn">Choose<span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-price">
                            <div class="top-sec d-flex justify-content-between <?php if ($order==3) echo 'orange-bg' ?>">
                                <div class="top-left">
                                    <h4 class="<?php if ($order==3) echo 'text-white' ?>">Enterprise</h4>
                                    <p>For the <br>large Company</p>
                                </div>
                                <div class="top-right">
                                    <h1 class="<?php if ($order==3) echo 'text-white' ?>">€200</h1>
                                </div>
                            </div>
                            <div class="end-sec">
                                <a href="order.php?order=3" class="primary-btn price-btn">Choose<span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End price Area -->
        <form class="form-area" id="myForm" action="mail2.php" method="post" class="contact-form text-right">
            <div class="row">
                <div class="col-lg-6">
                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = 'Enter your name'" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = 'Enter email address'" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
                    <input name="comp_name" placeholder="Company name" onfocus="this.placeholder = 'Company name'" onblur="this.placeholder = 'Company name'" class="common-input mb-20 form-control" required="" type="text">
                    <input name="comp_bill1" placeholder="Billing Address Line 1" onfocus="this.placeholder = 'Billing Address Line 1'" onblur="this.placeholder = 'Billing Address Line 1'" class="common-input mb-20 form-control" required="" type="text">
                </div>

                <div class="col-lg-6">
                    <input name="comp_bill2" placeholder="Billing Address Line 2 (optional)" onfocus="this.placeholder = 'Billing Address Line 2 (optional)'" onblur="this.placeholder = 'Billing Address Line 2 (optional)'" class="common-input mb-20 form-control" type="text">
                    <input name="comp_city" placeholder="City" onfocus="this.placeholder = 'City'" onblur="this.placeholder = 'City'" class="common-input mb-20 form-control" required="" type="text">
                    <input name="comp_zipCode" placeholder="Postal Code" onfocus="this.placeholder = 'Postal Code'" onblur="this.placeholder = 'Postal Code'" class="common-input mb-20 form-control" required="" type="text">
                    <input name="comp_country" placeholder="Country" onfocus="this.placeholder = 'Country'" onblur="this.placeholder = 'Country'" class="common-input mb-20 form-control" required="" type="text">
                </div>

                <div class="col-lg-12 form-group">
                    <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Comments (optional)" onfocus="this.placeholder = 'Comments (optional)'" onblur="this.placeholder = 'Comments (optional)'"></textarea>
                </div>
                <div class="col-lg-12 text-center">
                    <input type="text" name="order" value="<?= $order ?>" hidden>
                    <button class="primary-btn mt-20">Submit<span class="lnr lnr-arrow-right"></span></button>
                    <div class="mt-10 alert-msg"></div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- end contact Area -->

</body>
</html>
