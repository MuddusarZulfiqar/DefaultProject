<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="src/js/bootstrap-select.js"></script>
    
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


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,600;0,700;0,900;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="src/css/slick.css" rel="stylesheet">
    <link href="src/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link rel="stylesheet" href="src/css/bootstrap-select.css">
    <link rel="stylesheet" href="src/css/menu.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="src/css/main.css" rel="stylesheet"></link>
    <script src="https://kit.fontawesome.com/273df80109.js" crossorigin="anonymous"></script> 	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Aqarat</title>
</head>
<body <?php if(isset($ishome)){ echo "class='front-page'";}?> >
<?php include_once "includes/svg.php";?>
<?php include_once "includes/modals.php";?>
<nav class="cd-lateral-nav d-none show-on-lg">
    <a href="#" class="back cd-menu-trigger">
        <i class="material-icons">keyboard_arrow_left</i>
        BACK
    </a>
    <ul class="cd-navigation list-unstyled">
        <li><a href="#">Home</a></li>
        <li class="item-has-children">
            <a href="#">Ports</a>
            <span class="icon">
                <!-- <i class="fa fa-angle-right"></i> -->
                <i class="fa fa-anchor"></i>
            </span>
            <ul class="sub-menu">
                <li><a href="001_ports.php">Shuwaikh Port</a></li>
                <li><a href="03_ports.php">Shuaiba Port</a></li>
                <li><a href="02_ports.php">Dohan Port</a></li>
            </ul>
        </li>
        <li class="item-has-children">
            <a href="#">E-KPA</a>
            <span class="icon">
                <!-- <i class="fa fa-angle-right"></i> -->
                <i class="fa fa-anchor"></i>
            </span>
            <ul class="sub-menu">
                <li><a href="12_vessels_search_details.php">Vessels Search</a></li>
                <li><a href="12_containers_enquiry.php">Containers Enquiry</a></li>
                <li><a href="12_containers_enquiry.php">Container Tracking</a></li>
                <li><a href="07_traffic&Fees.php">Tariffs & Fees</a></li>
                <li><a href="05_ecpected-vessels.php">Expected Vessels</a></li>
                <li><a href="06_sailed-vessels.php">Sailed Vessels</a></li>
                <li><a href="08_shipping_Agent_Process.php">Shipping Agent Process</a></li>
            </ul>
        </li>
        <li class="item-has-children">
            <a href="#">Tenders</a>
            <span class="icon">
                <!-- <i class="fa fa-angle-right"></i> -->
                <i class="fa fa-anchor"></i>
            </span>
            <ul class="sub-menu">
                <li><a href="04_upcoming_tenders.php">Upcoming Tenders</a></li>
                <li><a href="03_past_tenders.php">Past Tenders</a></li>
            </ul>
        </li>
        <li><a href="007-news.php">News </a></li>
        <li><a href="008_articles.php">Media</a></li>
        <li class="d-none show-on-sm"><a href="contact-us.php">Contact Us</a></li>
        <li class="d-none show-on-sm"><a href="complaints.php">Complaints</a></li>
        <li class="d-none show-on-sm"><a href="#" class="btn btn-default" data-toggle="modal" data-target="#signin">Sign Up/Login</a></li>
    </ul>
</nav>
<div class="wrapper mp-pusher">
    <header>
        <nav class="navbar navbar-expand-lg container">
            <a class="navbar-brand" href="#">
                <img src="./src/images/logo.png" alt="" class="img-fluid">
            </a>
            <div class=" navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto hide-on-lg">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Buy <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">rent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">exchange</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">contact us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">العربية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link search-icon" href="#">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.54 511.26">
                                <use xlink:href="#search-icon"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="btn-group" role="group">
                    <a href="#" type="button" class="btn btn-primary">LOG IN</a>
                    <a href="#" type="button" class="btn btn-primary">register</a>
                </div>
                <div class="menu-icon cd-menu-trigger show-on-lg">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>
<!-- cd-cart -->