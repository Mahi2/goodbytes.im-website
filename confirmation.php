<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 3/12/2019
 * Time: 11:35 AM
 */
extract($_GET);

if ($order==1)
    $plan= 'Team';
elseif ($order==2)
    $plan= 'Office';
elseif ($order==3)
    $plan= 'Enterprise';
else
    $plan= 'No record found for this plan';

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
<div class="col-sm-12 text-center">
    <img src="views/images/openfire-1.png" alt="" width="30%">
    <h1 class="text-center">
        Your order for <strong style="color: #749a4f"><?= $plan ?></strong> have been submitted
    </h1>
    <br>
    <a href="index.html" class="btn btn-secondary">Go to main page</a>
</div>
</body>
</html>
