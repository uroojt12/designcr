<?php

$page = substr(basename($_SERVER['PHP_SELF']), 0, -4);



if ($_SERVER['HTTP_HOST'] != 'localhost') {



    $baseurl = "https://passpermisfacile.devproedge.com/design/";
} else {



    $baseurl = "http://localhost/designcr/";
}



?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $baseurl ?>css/bootstrap.css">
<link rel="stylesheet" href="<?= $baseurl ?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?= $baseurl ?>css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?= $baseurl ?>css/owl.carousel.min.css">
<link rel="stylesheet" href="<?= $baseurl ?>css/animate.css">
<link rel="stylesheet" href="<?= $baseurl ?>css/responsive.css">
<link rel="stylesheet" href="<?= $baseurl ?>css/datepicker.min.css">
<link rel="stylesheet" href="<?= $baseurl ?>css/style.css">
<link rel="stylesheet" href="<?= $baseurl ?>css/new_style.css">
<link rel="stylesheet" href="<?= $baseurl ?>css/dash.css">