@extends('layouts.menu')


@section('content')
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-slider">
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="images/slide-img1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Outstanding Web<br>Hosting for you.</div>
                                    <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg">Hosting Services</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="images/slide-img2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Create your first<br>website today.</div>
                                    <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg">Create now</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="images/slide-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Build your site<br>with page builder</div>
                                    <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="main-domain-search-holder">
                                        <div class="b-text">Simple, affordable<br>Web Hosting</div>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-items">
                                                        <input type="text" class="form-control domain-input" name="domain" placeholder="My domain name" autocapitalize="none" />
                                                        <span class="input-items-btn">
                                                            <input type="submit" class="btn search" value="Search" />
                                                            <input type="submit" name="transfer" class="btn transfer" value="Transfer" />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="features container-fluid">
    <div class="container">
        <div class="row rtl-row">
            <div class="col-sm-5">
                <div class="img-holder">
                    <img src="images/feature1.png" alt="">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="feature-info">
                    <div class="feature-title">Hosting For Every Website</div>
                    <div class="feature-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas posuere euismod dui eget ultrices. Cras condimentum dui eget erat commodo, in venenatis eros blandit.</div>
                    <div class="feature-link"><a href="#" class="hbtn hbtn-default">Get Started!</a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="img-holder">
                    <img src="images/feature2.png" alt="">
                </div>
            </div>
            <div class="col-sm-7 def-aligned">
                <div class="feature-info">
                    <div class="feature-title">In a hurry? let’s start!</div>
                    <div class="feature-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas posuere euismod dui eget ultrices. Cras condimentum dui eget erat commodo, in venenatis eros blandit.</div>
                    <div class="feature-link"><a href="#" class="hbtn hbtn-default">Get Started!</a></div>
                </div>
            </div>
        </div>
        <div class="row rtl-row">
            <div class="col-sm-5">
                <div class="img-holder">
                    <img src="images/feature3.png" alt="">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="feature-info">
                    <div class="feature-title">Grow with us</div>
                    <div class="feature-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas posuere euismod dui eget ultrices. Cras condimentum dui eget erat commodo, in venenatis eros blandit.</div>
                    <div class="feature-link"><a href="#" class="hbtn hbtn-default">Get Started!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pricing container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Our hosting services</div>
            </div>
        </div>
        <div class="row custom-padding">
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Web Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="images/server1.svg" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>User-friendly building tools</li>
                            <li>Host unlimited domains</li>
                            <li>Perfect for small sites/blogs</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">2.75</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="webhosting.html">Get Started!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Wordpress Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="images/server4.svg" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>Host up to 2 websites</li>
                            <li>Experience faster load times</li>
                            <li>Easy to use WP control panel</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">5.34</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="wordpresshosting.html">See Plans</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Cloud Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="images/server2.svg" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>Up to 2X Faster</li>
                            <li>4X More Scalable</li>
                            <li>Intuitive Dashboard</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">7.99</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="cloudhosting.html">Know more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">VPS Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="images/server3.svg" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>Dedicated Control</li>
                            <li>Full Root Access</li>
                            <li>Scalable Resources</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">20.40</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="vpshosting.html">Get Started!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Dedicated Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="images/server5.svg" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>Full root access</li>
                            <li>4 core CPU | 8GB RAM | 1TB disk</li>
                            <li>Unmetered bandwith</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">22.80</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="dedicatedhosting.html">See Plans</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Domain names</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="images/server6.svg" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>User-friendly building tools</li>
                            <li>Host unlimited domains</li>
                            <li>Perfect for small sites/blogs</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">50.22</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="domains.html">Know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="latest-news container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row-title">
                    Latest news from our blog
                </div>
            </div>
            <div class="col-sm-4">
                <div class="main-btn-holder">
                    <a href="blog.html" class="hbtn hbtn-default">View more</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="post-box blue-bg">
                    <div class="post-img"></div>
                    <span class="badge badge-danger">Hot</span>
                    <div class="post-title">Discover our new website builder</div>
                    <div class="post-link"><a href="#">Learn more</a></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="post-box grey-bg">
                    <div class="post-img"></div>
                    <span class="badge badge-info">Hot</span>
                    <div class="post-title">New Data center in Germany & USA</div>
                    <div class="post-link"><a href="#">Learn more</a></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="post-box yellow-bg">
                    <div class="post-img"></div>
                    <span class="badge badge-dark">Hot</span>
                    <div class="post-title">Discover our newwebsite builder</div>
                    <div class="post-link"><a href="#">Learn more</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="domain-search-holder container-fluid">
    <div class="container">
        <form>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lgmd-4"><div class="title">Search a domain</div></div>
                <div class="col-sm-8 col-md-5 col-lgmd-6">
                    <input class="domain-input" type="text" placeholder="Domain name"> 
                </div>
                <div class="col-sm-4 col-md-3 col-lgmd-2">
                    <button type="submit">Search now</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="support-links container-fluid">
    <div class="row">
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="images/info.svg" alt=""></div>
                <a href="#" class="link">Let’s talk</a>
                <div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ccusantium.</div>
            </div>
        </div>
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="images/chat.svg" alt=""></div>
                <a href="#" class="link">Go to support center</a>
                <div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ccusantium.</div>
            </div>
        </div>
    </div>
</div>
@endsection
