@extends('site.layouts.menu')


@section('content')
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">Contact us / Support</div>
                    <div class="page-subtitle">There’s nothing we love more than working on new projects, so if you have a query regarding a venture of yours, or anything else for that matter, do get in touch and we will get back to you as soon as possible!</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="support-details container-fluid" style="background-color: #f7f7f7;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="support-box">
                    <div class="icon grey"><i class="hstb hstb-user"></i></div>
                    <div class="details-holder">
                        <div class="title">Client area</div>
                        <div class="details">
                            <a href="#">Login</a>
                            <a href="#">Submit a ticket</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="support-box">
                    <div class="icon green"><i class="hstb hstb-speech-bubble"></i></div>
                    <div class="details-holder">
                        <div class="title">Call or Chat</div>
                        <div class="details">
                            <a href="#">Tel: +(973) 17 880038</a>
                            <a href="#">Start chatting now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="support-box">
                    <div class="icon blue"><i class="hstb hstb-speech"></i></div>
                    <div class="details-holder">
                        <div class="title">Send e-mail</div>
                        <div class="details">
                            <a href="#">support@hustbee.co</a>
                            <a href="#">admin@hustbee.co</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="support-box">
                    <div class="icon purple"><i class="hstb hstb-placeholder"></i></div>
                    <div class="details-holder">
                        <div class="title">Visit us</div>
                        <div class="details">
                            <a href="#">support@hustbee.co</a>
                            <a href="#">admin@hustbee.co</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="questions container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Common questions about Hustbee & Hosting services.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cards-holder">
                    <div class="card question-card">
                        <div class="card-header question-holder">
                            <button type="button" data-toggle="collapse" data-target="#ques1">Can I use a prepaid debit card every month for a website of mine?</button>
                        </div>
                        <div id="ques1" class="collapse in">
                            <div class="card-body answer-holder">
                                Lorem ipsum dolor sit amet, consectetur adi piscing elit. Sed eget turpis pulvinar
                                tempor odio sed, adipiscing dolor. Donec nisi velit, malesuada id dolor non, elementum auctor arcu. Cras consectetur sapien et purus posuere, ac hendrerit nunc luctus.
                            </div>
                        </div>
                    </div>
                    <div class="card question-card">
                        <div class="card-header question-holder">
                            <button type="button" data-toggle="collapse" data-target="#ques2" class="collapsed">I cannot get my package cancelled</button>
                        </div>
                        <div id="ques2" class="collapse">
                            <div class="card-body answer-holder">
                                Lorem ipsum dolor sit amet, consectetur adi piscing elit. Sed eget turpis pulvinar
                                tempor odio sed, adipiscing dolor. Donec nisi velit, malesuada id dolor non, elementum auctor arcu. Cras consectetur sapien et purus posuere, ac hendrerit nunc luctus.
                            </div>
                        </div>
                    </div>
                    <div class="card question-card">
                        <div class="card-header question-holder">
                            <button type="button" data-toggle="collapse" data-target="#ques3" class="collapsed">How to add excisting domain to my account?</button>
                        </div>
                        <div id="ques3" class="collapse">
                            <div class="card-body answer-holder">
                                Lorem ipsum dolor sit amet, consectetur adi piscing elit. Sed eget turpis pulvinar
                                tempor odio sed, adipiscing dolor. Donec nisi velit, malesuada id dolor non, elementum auctor arcu. Cras consectetur sapien et purus posuere, ac hendrerit nunc luctus.
                            </div>
                        </div>
                    </div>
                    <div class="card question-card">
                        <div class="card-header question-holder">
                            <button type="button" data-toggle="collapse" data-target="#ques4" class="collapsed">Comparision: shared v. reseller v. dedicated</button>
                        </div>
                        <div id="ques4" class="collapse">
                            <div class="card-body answer-holder">
                                Lorem ipsum dolor sit amet, consectetur adi piscing elit. Sed eget turpis pulvinar
                                tempor odio sed, adipiscing dolor. Donec nisi velit, malesuada id dolor non, elementum auctor arcu. Cras consectetur sapien et purus posuere, ac hendrerit nunc luctus.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-us container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">or Full out the Contact form to contact us</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="form-holder">
                    <form>
                        <div class="form-row">
                            <div class="col-xs-12 col-sm-6">
                                <label for="inputName1">Name</label>
                                <input id="inputName1" type="text" class="form-control" required>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <label for="inputEmail1">Email</label>
                                <input id="inputEmail1" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xs-12">
                                <label for="inputSubject1">Subject</label>
                                <div class="select-holder">
                                    <select id="inputSubject1" class="form-control" required>
                                        <option value="" disabled selected>Select Subject</option>
                                        <option>Support</option>
                                        <option>Sales & Purchasing</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xs-12">
                                <label for="inputMessage1">Your message</label>
                                <textarea id="inputMessage1" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xs-12">
                                <div class="submit-holder">
                                    <button type="submit" class="hbtn hbtn-blue">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="address-details">
                    <div class="title">Office Locations</div>
                    <h4>Oslo</h4>
                    <p>Oslo, Norway<br>
                    Road 398, Center, Office 38, floor 3<br>
                    Contact number: 0901</p>

                    <h4>Support</h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos  ducimus 
                    qui blanditiis. praesentium voluptatum deleniti llitia animi.</p>

                    <h4>Customer Service</h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos  ducimus 
                    qui blanditiis. praesentium voluptatum deleniti llitia animi, 
                    inquiries@hustbee.io.co</p>
                </div>
            </div>
        </div>
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
</div>
@endsection