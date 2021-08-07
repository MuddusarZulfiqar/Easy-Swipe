<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="src/js/bootstrap-select.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.11/jquery.mousewheel.min.js"></script>
    <script src="src/js/jquery.carousel-1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" integrity="sha512-Fppbdpv9QhevzDE+UHmdxL4HoW8HantO+rC8oQB2hCofV+dWV2hePnP5SgiWR1Y1vbJeYONZfzQc5iII6sID2Q==" crossorigin="anonymous" />
    <script src="src/js/slick.js"></script>
    <script src="src/js/jquery.mCustomScrollbar.js"></script>
    <script src="src/js/jquery.mousewheel.min.js"></script>
    <script src="src/js/jquery.lazyloadxt.js"></script>
    <script src="src/js/menu.js"></script>
    <script src="src/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="src/js/custom.js"></script> 

    <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Coverflow-Style-Image-Carousel-Plugin-For-jQuery-Carousel-Evolution/style/content.css">
    <link rel="stylesheet" href="src/css/galery_carousel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="src/css/slick.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="src/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link rel="stylesheet" href="src/css/bootstrap-select.css">
    <link rel="stylesheet" href="src/css/menu.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="src/css/main.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/273df80109.js" crossorigin="anonymous"></script> 	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
    <title>Stock Market</title>
    <style>
        
        .socialMedia {
            top:50%;
            transform:translateY(-50%);
            position: fixed;
            width: 60px;
            transition: all 0.3s linear;
            box-shadow: 2px 2px 8px 0px rgba(0, 0, 0, .4);
            z-index: 9999999;
        }
        @media screen and (max-width:576px) {
            .socialMedia{
                display:none !important;
            }
        }
        .socialMedia ul {
            margin-top: 0;
            margin-bottom: 0rem
        }

        .socialMedia li {
            height: 45px;
            position: relative
        }

        .socialMedia li a {
            color: #fff !important;
            display: block;
            height: 100%;
            width: 100%;
            line-height: 45px;
            padding-left: 25%;
            border-bottom: 1px solid rgba(0, 0, 0, .4);
            transition: all .3s linear;
            text-decoration: none !important
        }

        .socialMedia li:nth-child(1) a {
            background: #4267B2
        }

        .socialMedia li:nth-child(2) a {
            background: #1DA1F2
        }

        .socialMedia li:nth-child(3) a {
            background: #E1306C
        }

        .socialMedia li:nth-child(4) a {
            background: #2867B2
        }

        .socialMedia li:nth-child(5) a {
            background: #333
        }

        .socialMedia li:nth-child(6) a {
            background: #ff0000
        }

        .socialMedia li a i {
            position: absolute;
            top: 14px;
            left: 24px;
            font-size: 15px
        }

        .socialMedia ul li a span {
            display: none;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase
        }

        .socialMedia a:hover {
            z-index: 1;
            width: 200px;
            border-bottom: 1px solid rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3)
        }

        .socialMedia ul li:hover a span {
            padding-left: 30%;
            display: block;
            font-size: 15px
        }
    </style>
</head>
<!-- <body <?php if(isset($ishome)){ echo "class='front-page'";}?> >  -->
<body class="dashboard__nav--close">
    
    
    <?php include_once "includes/svg.php";?>
    <?php include_once "includes/modals.php";?>
    <!-- nav -->
    <!-- <div class="wrapper mp-pusher"> -->
    <div></div>
    <!-- cd-cart -->