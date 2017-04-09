@extends('layouts.front')

@section('content')
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <h1 class="usp"><span style="font-weight:10px !important;"class="rotate">Building a stronger Community / local economy, help makers access retail spaces at ideal locations, help retailers find exciting / unique merchandises</span></h1>
                <div class="intro-lead-in"> </div>


                <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">                    
                <div id="mc_embed_signup">
                    <div id="mc_embed_signup_scroll">                        
                        <div class="clear">
                            <a href="{{ route('register') }}" class="button" id="mc-embedded-subscribe" style="padding:25px !important; line-height:5px"> Sign up for a shelf space </a>
                            
                        </div>
                    </div>
                </div>

                <!--End mc_embed_signup-->
            </div>
        </div>
    </header>
        <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                   <!--  <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/dash.png" class="img-responsive img-circle" alt="">
                        <h4>Dash Liu</h4>
                        <p class="text-muted">Co-Founder</p>
                        <ul class="list-inline social-buttons">

                            <li><a href="https://twitter.com/DashSoulja"><i class="fa fa-twitter"></i></a>
                            </li>
                             <li><a href="https://www.facebook.com/coshelf"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/mustafa.png" class="img-responsive img-circle" alt="">
                        <h4>Mustafa Qureshi</h4>
                        <p class="text-muted">Co-Founder</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/mustafashakeel"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/msqureshi"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/mustafasqureshi"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/mustafashakeel"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/jon.png" class="img-responsive img-circle" alt="">
                        <h4>Jon Girard</h4>
                        <p class="text-muted">Co-Founder</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="twitter.com/jongirard"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/jon.girard"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/jon-girard-8239988b"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/minhtri.png" class="img-responsive img-circle" alt="">
                        <h4>Minh Tri Banh</h4>
                        <p class="text-muted">Co-Founder</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/iamMEIji"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/minh.t.banh"><i class="fa fa-facebook"></i></a>
                            </li>

                            <li><a href="https://www.linkedin.com/in/minh-tri-banh-3a948536"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">We would love to hear from you.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
       
