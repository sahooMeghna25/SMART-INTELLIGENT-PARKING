<?php include_once('dbconnect.php'); ?>
<?php 
    if(isset($_SESSION['login_session'])){
         $login_session = $_SESSION['login_session'];
         $sql = "SELECT * FROM resigtration WHERE emailid = '$login_session'";
         $result = mysqli_query($con,$sql);
         if($row = mysqli_fetch_array($result)){
            $fname = $row['fname'];
            $lname = $row['lname'];
            $phnno = $row['phnno'];
            $customer_id = $row['registration_id'];
            $_SESSION['customer_id'] = $customer_id;
         }
     }else{
        header("Location:login.php");
     }
   
?>
<!DOCTYPE>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intelligent Parking System</title>
    <meta name="author" content="ThemeLooks">
    <meta name="description" content="Multipurpose Domain, Hosting and WHMCS Template">
    <meta name="keywords" content="cloudsky, dedicated server, hosting, hosting template, multipurpose, responsive whmcs template, technology, web hosting, whmcs, whmcs 7, whmcs hosting template, whmcs integration, whmcs theme">
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,900%7CLato:300,400i,900%7CRaleway:100,300,300i,400,500,500i,600,700">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/fontawesome-stars-o.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="css/colors/theme-color-1.css" id="changeColorScheme">
    <link rel="stylesheet" href="css/custom.css">
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div id="preloader">
        <div class="preloader--spinners"> <span class="preloader--spinner"></span> <span class="preloader--spinner"></span> </div>
    </div>
    <div class="wrapper">
        <header class="header--section">
            <div class="header--topbar">
                <div class="container">
                    <ul class="nav social float--left hidden-xs">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                    <ul class="nav button float--right">
                       <!-- <li><a href="#loginForm" class="btn btn-sm btn-primary" data-toggle="modal">Login</a></li>-->
                        <li><a href="logout.php" class="btn btn-sm btn-primary">Log Out</a></li>
                    </ul>
                    <ul class="nav links float--right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="text-c--main mr--8 fa fa-globe"></i><span class="caret"></span> </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">United State</a></li>
                                <li><a href="#">Bangladesh</a></li>
                                <li><a href="#">United Kingdom</a></li>
                                <li><a href="#">Japan</a></li>
                                <li><a href="#">Spain</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> 
                                    <i class="text-c--main mr--8 fa fa-user"></i>
                                    <span>
                                        Welcome <?php echo $fname;?> !
                                    </span> 
                        </a>
                        </li>
                        <li class="hidden-xs">
                            <a href="tel:0004561239870"> <i class="text-c--main mr--8 fa fa-volume-control-phone"></i>
                                <span><?php  echo $phnno; ?></span> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="header--navbar navbar" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                    
                      <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav"> -->
                        
                            <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a href="home.php" class="navbar-brand"> <img src="img/logo.png" alt="" style="width: 50px;height: auto;margin-left: -20"><p><strong style="margin-left:-20; color: #ff5252">Intelligent parking system</strong></p></a>
                    </div>
                   
                  <!--  <div class="header--cart-btn float--right"> <a href="cart.html" class="btn-link"><i class="fa fa-shopping-cart"></i><span>3</span></a> </div>-->
                
                    <div id="headerNav" class="navbar-collapse collapse float--right">
                        <ul class="header--nav-links nav">
                            <li class="active"><a href="index-2.html">Home</a></li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hosting</a>
                                <ul class="dropdown-menu">
                                    <li><a href="shared-hosting.html">Shared Hosting</a></li>
                                    <li><a href="reseller-hosting.html">Reseller Hosting</a></li>
                                    <li><a href="vps-hosting.html">VPS Hosting</a></li>
                                    <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                                </ul>
                            </li>
                            <li><a href="domain.html">Domain</a></li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">About CloudSky</a></li>
                                            <li><a href="datacenter.html">About Datacenter</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">SSL Certificates</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="ssl-certificates.html">SSL Certificates</a></li>
                                            <li><a href="ssl-certificate-details.html">SSL Certificate Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="team.html">Team</a></li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="clients.html">Our Clients</a></li>
                                    <li><a href="affiliate-marketing.html">Affiliate Marketing</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-details.html">Shop Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-sidebar-right.html">Blog Sidebar Right</a></li>
                                    <li><a href="blog-sidebar-left.html">Blog Sidebar Left</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>