<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <title>Inovora | Web Development,Web Design & Enterprise Application Company in Sri Lanka</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<div id="header-holder">
    <nav id="nav" class="navbar navbar-full">
        <div class="container-fluid">
            <div class="container container-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="images/logonew.svg" alt="Hustbee"></a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse navbar-collapse-centered" id="bs">
                            <ul class="nav navbar-nav navbar-nav-centered">
                                <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Hosting Services</a>
                                    <div class="dropdown-menu custom-dropdown-menu">
                                        <div class="dropdown-items-holder">
                                            <div class="items-with-icon">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="webhosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server1.svg" alt=""></span>
                                                            <span class="text">Web Hosting</span>
                                                        </a>
                                                        <a href="cloudhosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server2.svg" alt=""></span>
                                                            <span class="text">Cloud Hosting</span>
                                                        </a>
                                                        <a href="vpshosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server3.svg" alt=""></span>
                                                            <span class="text">VPS Hosting</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="wordpresshosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server4.svg" alt=""></span>
                                                            <span class="text">Wordpress Hosting</span>
                                                        </a>
                                                        <a href="dedicatedhosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server5.svg" alt=""></span>
                                                            <span class="text">Dedicated Hosting</span>
                                                        </a>
                                                        <a href="domains.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server6.svg" alt=""></span>
                                                            <span class="text">Domain Names</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="#" class="link">Hustbee Features</a>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="#" class="link">Website builder</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="domains.html">Domains</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Support</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="about.html">About</a></li>
                                        <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                        <li><a class="dropdown-item" href="privacy.html">Privacy</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- <ul class="nav navbar-nav navbar-right other-navbar">
                                <li class="nav-item">
                                    <a class="nav-link btn-client-area" href="login.html"><img src="images/lock.svg" alt="">Client Area</a>
                                    <div class="chat-info"><i class="hstb hstb-right-arrow"></i>Chat Available</div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-chat" href="#"><i class="hstb hstb-chat"></i></a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="footer container-fluid">
    <a class="btn-go-top" href="#"><i class="hstb hstb-down-arrow"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="blog.html">Press & Media</a></li>
                        <li><a href="blog.html">News & Blog</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Hosting</h4>
                    <ul>
                        <li><a href="webhosting.html">Web Hosting</a></li>
                        <li><a href="wordpresshosting.html">Wordpress Hosting</a></li>
                        <li><a href="cloudhosting.html">Cloud Hosting</a></li>
                        <li><a href="vpshosting.html">VPS Hosting</a></li>
                        <li><a href="dedicatedhosting.html">Dedicated Hosting</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Domains</h4>
                    <ul>
                        <li><a href="domains.html">Register Domains</a></li>
                        <li><a href="domains.html">Transfer Domains</a></li>
                        <li><a href="domains.html">Manage Domains</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="login.html">Client area</a></li>
                        <li><a href="#">Tutorials</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>  
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu custom-footer-menu">
                    <h4>Contact us</h4>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <ul>
                        <li>Tel: +(973) 17 880038</li>
                        <li><a href="#">Chatting service</a></li>
                        <li><a href="#">Submit a ticket</a></li>
                        <li><a href="#">Our location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-footer-menu">
                        <ul>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                        </ul>        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="copyright">© Copyright 2018 Hustbee Hosting LLC, All Rights Reserved</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>