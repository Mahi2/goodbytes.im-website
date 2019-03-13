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
                    <li class="menu-active"><a href="index.html#home">Home</a></li>
                    <li><a href="index.html#services">Services</a></li>
                    <li><a href="index.html#pricing">Pricing</a></li>
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
            <div class="menu-content pb-30 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Confirm your order</h1>
                </div>
            </div>
        </div>
        <form class="form-area mt-60" id="myForm" action="mail.php" method="post" class="contact-form text-right">
            <div class="row">
                <div class="col-lg-12">
                    <label for="plan">Plan</label>
                    <select name="plan" id="plan" class="common-input mb-20 form-control">
                        <option value="Team">Team</option>
                        <option value="Office">Office</option>
                        <option value="Enterprise">Enterprise</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" class="common-input mb-20 form-control" required="" type="text">
                    <input name="comp_name" placeholder="Enter your company name" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" class="common-input mb-20 form-control" required="" type="text">
                    <input name="comp_street" placeholder="Enter your company street" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" class="common-input mb-20 form-control" required="" type="text">
                </div>
                <div class="col-lg-6">
                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
                    <input name="comp_email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
                    <input name="comp_street" placeholder="Enter your company postal address" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" class="common-input mb-20 form-control" required="" type="text">
                </div>

                <div class="col-lg-12 form-group">
                    <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Comments" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                </div>
                <div class="col-lg-12 text-center">
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
