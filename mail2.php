<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 3/7/2019
 * Time: 9:20 PM
 */
    extract($_POST);
    $to = 'guus@goodbytes.nl';
    //$to = 'antdepadoue@gmail.com';

    if ($order==1){
        $plan = "Team";
        $price = "50";
        $description = "For the individuals";
        $subject = 'Order for Team';
    } elseif ($order==2){
        $plan = "Office";
        $price = "100";
        $description = "For the small Company";
        $subject = 'Order for Office';
    } elseif ($order==3){
        $plan = "Enterprise";
        $price = "200";
        $description = "For the large Company";
        $subject = 'Order for Enterprise';
    }


    $message .='
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns:v="urn:schemas-microsoft-com:vml">

    <head>
        <title>Goodbytes - Order</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
        <meta name="viewport" content="width=600,initial-scale = 2.3,user-scalable=no">
        <link href=\'https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700\' rel="stylesheet">
        <link href=\'https://fonts.googleapis.com/css?family=Quicksand:300,400,700\' rel="stylesheet">
        <link rel="icon" type="image/png" href="img/favicon.ico" sizes="128x128" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://www.goodbytes.im/css/linearicons.css">
        <link rel="stylesheet" href="https://www.goodbytes.im/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.goodbytes.im/css/bootstrap.css">
        <link rel="stylesheet" href="https://www.goodbytes.im/css/magnific-popup.css">
        <link rel="stylesheet" href="https://www.goodbytes.im/css/nice-select.css">
        <link rel="stylesheet" href="https://www.goodbytes.im/css/animate.min.css">
        <link rel="stylesheet" href="https://www.goodbytes.im/css/owl.carousel.css">
        <link rel="stylesheet" href="https://www.goodbytes.im/css/main.css">
        <!--<![endif]-->
    </head>
    <body class="respond">

    <div class="row mt-10">
        <div class="col-sm-12 col-lg-12 text-center">
            <img width="200" border="0" style="width: 200px;" src="https://www.goodbytes.im/img/GoodBytes-Logo.png" alt="" />
        </div>

        <div class="col-sm-12 col-lg-12 text-center mt-10">
            <div style="line-height: 35px; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;">
                You receive order for <span style="color: #749a4f;">'.$plan.'</span>
            </div>
        </div>
        <div class="offset-2 col-sm-8">
            <section class="price-area pb-10 pt-20" id="pricing">
                <div class="">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-price">
                                <div class="top-sec d-flex justify-content-between <?php if ($order==1) echo \'orange-bg\' ?>">
                                    <div class="top-left">
                                        <h4 class="<?php if ($order==1) echo \'text-white\' ?>">'.$plan.'</h4>
                                        <p>'.$description.'</p>
                                    </div>
                                    <div class="top-right">
                                        <h1 class="<?php if ($order==1) echo \'text-white\' ?>">'.$price.'</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <table class="table table-bordered">
                <tr>
                    <th class="text-center" style="width: 70%">Description</th>
                    <th class="text-center">Qty</th>
                    <th class="text-center">Price</th>
                </tr>
                <tr>
                    <td>'.$plan.' Plan</td>
                    <td>1</td>
                    <td>€'.$price.'</td>
                </tr>
            </table>
            <div style="line-height: 35px; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;">
                Client <span style="color: #749a4f;">Information :</span>
            </div>
            <table width="100%">
                <tr>
                    <td>Client Name : '.$name.'</td>
                </tr>
                <tr>
                    <td>Client Email : '.$email.'</td>
                </tr>
                <tr>
                    <td>Company Name : '.$comp_name.'</td>
                </tr>
                <tr>
                    <td>Billing Address 1 : '.$comp_bill1.'</td>
                </tr>
                <tr>
                    <td>Billing Address 2 : '.$comp_bill2.'</td>
                </tr>
                <tr>
                    <td>City : '.$comp_city.'</td>
                </tr>
                <tr>
                    <td>Country : '.$comp_country.'</td>
                </tr>
                <tr>
                    <td>Zip Code : '.$comp_zipCode.'</td>
                </tr>
            </table>
            Comments <br>'.$message.'
        </div>
    </div>
</body>
</html>';



    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'X-MSMail-Priority: Normal' . "\r\n";
    $headers .= 'X-Priority: 3' . "\r\n";

    if (@mail($to, $subject, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

