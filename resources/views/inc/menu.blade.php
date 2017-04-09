<div class="container">
                <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="logo collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-center top-nav">
            <li class="hidden">
                <a href="#page-top" ></a>
            </li>               
            <li class="hidden">
                <a class="page-scroll" href="#" data-toggle="modal" data-target="#referus">Refer Maker / Retailer</a>
            </li> 

            
             <li>
                <a href="/" id="logoimage" style="background-color: transparent;"><img src="{{ asset('img/coshelf-logo-white.png')}}" id="coshelflogo" alt=Coshelf""></a>
            </li>
            
        </ul>
        <ul class="nav navbar-nav navbar-right top-nav">
            @if (Auth::guest())
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/login') }}">{{ trans('backpack::base.login') }}</a></li>
                @if (config('backpack.base.registration_open'))
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/register') }}">{{ trans('backpack::base.register') }}</a></li>
                @endif
            @else
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a></li>
            @endif
        </ul>
       
    </div>
   
                <!-- /.navbar-collapse -->
</div>