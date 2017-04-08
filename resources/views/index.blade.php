<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Building a stronger Community / local economy, help makers access retail spaces at ideal locations, help retailers find exciting / unique merchandises">

        <title>Coshelf</title>

        <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        

        <!-- Styles -->
        <link href="css/agency.css" rel="stylesheet">

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>

        <script type="text/javascript" id="inspectletjs">
            window.__insp = window.__insp || [];
         __insp.push(['wid', 190887183]);
            (function() {
            function ldinsp(){if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
            setTimeout(ldinsp, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent('onload', ldinsp) : window.addEventListener('load', ldinsp, false)) : ldinsp();
            })();
        </script>
        
    </head>
    <body id="page-top" class="index">
        <nav id="mainNav" style="background-color: rgba(142, 142, 142, 0.79); height:6em;" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>                    
                </div>

                    
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse"> 
                <ul class="nav navbar-nav navbar-right top-nav">
                </ul>
                </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left top-nav">
                        <li class="hidden">
                            <a href="#page-top" ></a>
                        </li>               
                        <li>
                            <a class="page-scroll" href="#" data-toggle="modal" data-target="#referus">Refer Maker / Retailer</a>
                        </li> 

                        <li>
                            <a href="#page-top" id="logoimage" style="background-color: transparent;"><img src="img/coshelf-logo-white.png" id="coshelflogo" alt=Coshelf""></a>
                        </li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right top-nav">
                        <li>
                            <a class="page-scroll" href="#team">Team</a>
                        </li> 
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
               
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div class="modal fade" id="referus">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" name="referUs" id="referUs">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Please us about your Business</h4>
                        </div>
                        <div class="modal-body"> 
                            <div class="form-group">
                                <span>Business Name</span>
                                <input type="text" name="businessname" id="businessname" class="form-control">
                                <br>
                                <span>Contact Name</span>
                                <input type="text" name="contactname" id="contactname" class="form-control">
                                <br>
                                <span>Phone #</span>
                                <input type="text" name="referphone" id="referphone" class="form-control">
                                <br>
                                <span>Email</span>
                                <input type="text" name="referemail" id="referemail" class="form-control">
                                <br>
                                <span>Type </span>
                                <div class="radio">
                                  <label><input type="radio" name="refermaker" id="refermaker">Maker </label>
                                  <label><input type="radio" name="referretailer" id="referretailer">Retailer </label>
                                </div>
                                <span>Address</span>
                                <input type="text" name="referaddress" id="referaddress" class="form-control">
                                <br> 
                                <span>Website</span>
                                <input type="text" name="referwebsite" id="referwebsite" class="form-control">
                                <br>
                                <span>Your Name</span>
                                <input type="text" name="yourname" id="yourname" class="form-control">
                                <br>
                                <span> your email</span>
                                <input type="text" name="youremail" id="youremail" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer"> 
                            <button class="btn btn-default" id="closerefer" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                                <input type="button" class="button" value="Sign up for a shelf space" id="mc-embedded-subscribe" style="padding:25px !important; line-height:5px" />
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

        <footer>
            <div class="container">
                <div clas="row">
                    <div class="col-md-6">
                        <a href="http://spring.is/" target="_blank"><img src="img/spring.png" id="spring"    alt="Spring University"></a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://www.startupcan.ca/" target="_blank"><img src="img/startupcanada.png" id="startupcanada" alt="Spring University"></a> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/CoShelf
                            "><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/coshelf
                            "><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/coshelf/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.pinterest.com/coshelf/"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <ul class="list-inline quicklinks">
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <span class="copyright">Copyright &copy; coshelf 2016</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
    </body>
</html>
