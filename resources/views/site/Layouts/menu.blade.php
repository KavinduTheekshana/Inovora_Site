<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <title>{{$title}} | Web Development,Web Design & Enterprise Application Company in Sri Lanka</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
    <link href="css/animtrap.css" rel="stylesheet">

</head>
<body>
<div id="header-holder" class="{{$cssclass}}">
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
                            <a class="navbar-brand" href="/"><img src="images/logonew.svg" alt="Hustbee"></a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse navbar-collapse-centered" id="bs">
                            <ul class="nav navbar-nav navbar-nav-centered">
                            <li class="nav-item {{$activeindex}}"><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item dropdown ">
                                    <a class="nav-link {{$activeindex}}" href="#" data-toggle="dropdown">Services</a>
                                    <div class="dropdown-menu custom-dropdown-menu">
                                        <div class="dropdown-items-holder">
                                            <div class="items-with-icon">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="maintainzz" class="link-with-icon">
                                                            <span class="icon"><img src="images/server1.svg" alt=""></span>
                                                            <span class="text">Web Design</span>
                                                        </a>
                                                        <a href="maintainzz" class="link-with-icon">
                                                            <span class="icon"><img src="images/server2.svg" alt=""></span>
                                                            <span class="text">Web Application</span>
                                                        </a>
                                                        <a href="maintainzz" class="link-with-icon">
                                                            <span class="icon"><img src="images/server3.svg" alt=""></span>
                                                            <span class="text">Mobile Application</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="maintainzz" class="link-with-icon">
                                                            <span class="icon"><img src="images/server4.svg" alt=""></span>
                                                            <span class="text">Standalone</span>
                                                        </a>
                                                        <a href="maintainzz" class="link-with-icon">
                                                            <span class="icon"><img src="images/server5.svg" alt=""></span>
                                                            <span class="text">Enterprise</span>
                                                        </a>
                                                        <a href="maintainzz" class="link-with-icon {{$activewebhosting}}">
                                                            <span class="icon"><img src="images/server3.svg" alt=""></span>
                                                            <span class="text">Web Hosting</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="items">    
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="#" class="link">Hustbee Features</a>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="#" class="link">Website builder</a>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="maintainzz">Products</a>
                                </li>
                            <li class="nav-item {{$activeContact}}">
                                    <a class="nav-link" href="Contact">Contact Us</a>
                                </li>
                                <li class="nav-item {{$activeAbout}}">
                                    <a class="nav-link" href="About">About</a>
                                </li>
                                <li class="nav-item {{$activeBlog}}">
                                    <a class="nav-link" href="Blog">Blog</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="terms">Terms of Service</a></li>
                                        <li><a class="dropdown-item" href="privacy">Privacy</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right other-navbar">
                                <li class="nav-item">
                                    <a class="nav-link btn-client-area" href="Login"><img src="images/lock.svg" alt="">Client Area</a>
                                    <div class="chat-info"><i class="hstb hstb-right-arrow"></i>Chat Available</div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-chat" href="#"><i class="hstb hstb-chat"></i></a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="footer container-fluid" data-animscroll="fade-up">
    <a class="btn-go-top" href="#"><i class="hstb hstb-down-arrow"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu" data-animscroll="fade-in" data-animscroll-delay="200">
                    <h4>Inovora</h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="maintainzz">Services</a></li>
                        <li><a href="maintainzz">Products</a></li>
                        <li><a href="Contact">Contact Us</a></li>
                        <li><a href="About">About Us</a></li>
                        <li><a href="Blog">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu" data-animscroll="fade-in" data-animscroll-delay="400">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="maintainzz">Web Design</a></li>
                        <li><a href="maintainzz">Web Application</a></li>
                        <li><a href="maintainzz">E-Commerce</a></li>
                        <li><a href="maintainzz">Mobile Application</a></li>
                        <li><a href="maintainzz">SEO</a></li>
                        <li><a href="maintainzz">Web Hosting</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu" data-animscroll="fade-in" data-animscroll-delay="600">
                    <h4>Blog</h4>
                    <ul>
                        <li><a href="domains.html">Latest Post</a></li>
                        <li><a href="domains.html">News</a></li>
                        <li><a href="domains.html">Forms</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu" data-animscroll="fade-in" data-animscroll-delay="800">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="login.html">Client area</a></li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="#">CRM</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>  
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu custom-footer-menu" data-animscroll="fade-in" data-animscroll-delay="1000">
                    <h4>Contact us</h4>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <ul>
                        <li>Tel: +(94) 71 542 14 23</li>
                        <li><a href="#">Chatting service</a></li>
                        <li><a href="#">Create Account</a></li>
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
                            <li><a href="terms">Terms of Service</a></li>
                            <li><a href="privacy">Privacy Policy</a></li>
                        </ul>        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="copyright">© Copyright 2019 Inovora, All Rights Reserved</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
<script src="js/magnific.min.js"></script>
<script src="js/jquery.counter.min.js"></script>
<script src="js/anim-trap.js"></script>
<script src="js/anim-scroll.js"></script>


<script>
    ANIMSCROLL.init({
        easing: 'ease-in-out-sine'
    });

    $(document).ready(function(){
        $('.rain').makeitsRain()
    });
</script>
</body>
</html>