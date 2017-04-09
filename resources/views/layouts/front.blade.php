<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Building a stronger Community / local economy, help makers access retail spaces at ideal locations, help retailers find exciting / unique merchandises">

        <title>Coshelf</title>

        <!-- <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/skins/_all-skins.min.css">

        <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/pace/pace.min.css">
        <link rel="stylesheet" href="{{ asset('vendor/backpack/pnotify/pnotify.custom.min.css') }}">

        <!-- BackPack Base CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/backpack/backpack.base.css') }}">

        <link href="{{ asset('css/agency.css')}}" rel="stylesheet">

        <!-- Styles -->
        

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
            @section('nav')
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
                            <a href="#page-top" id="logoimage" style="background-color: transparent;"><img src="{{ asset('img/coshelf-logo-white.png')}}" id="coshelflogo" alt=Coshelf""></a>
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
            @show
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

        @yield('content')
        

        <footer>
            <div class="container">
                <div clas="row">
                    <div class="col-md-6">
                        <a href="http://spring.is/" target="_blank"><img src=" {{ asset('img/spring.png')}}" id="spring"    alt="Spring University"></a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://www.startupcan.ca/" target="_blank"><img src="{{ asset('img/startupcanada.png')}}" id="startupcanada" alt="Spring University"></a> 
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
        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('vendor/adminlte') }}/plugins/jQuery/jQuery-2.2.0.min.js"><\/script>')</script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('vendor/adminlte') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/pace/pace.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/fastclick/fastclick.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/dist/js/app.min.js"></script>

    <!-- page script -->
    <script type="text/javascript">
        // To make Pace works on Ajax calls
        $(document).ajaxStart(function() { Pace.restart(); });

        // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        // Set active state on menu element
        var current_url = "{{ Request::url() }}";
        $("ul.sidebar-menu li a").each(function() {
          if ($(this).attr('href').startsWith(current_url) || current_url.startsWith($(this).attr('href')))
          {
            $(this).parents('li').addClass('active');
          }
        });
    </script>

    @include('backpack::inc.alerts')

    @yield('after_scripts')

    <!-- JavaScripts -->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <!-- jQuery -->
    <script src="{{ elixir('js/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ elixir('css/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ elixir('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{ elixir('js/contact_me.js')}}"></script>
    <script src="{{ elixir('js/refer_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ elixir('js/agency.js')}}"></script>
    <script>
       $(document).ready(function(){
         $(".usp .rotate").textrotator({
                animation: "fade",
                speed: 2000
        });
       });
    </script>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85362816-1', 'auto');
  ga('send', 'pageview');

</script>
    </body>
</html>
