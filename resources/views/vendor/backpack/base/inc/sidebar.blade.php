@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            @if(Auth::user()->profile)
              <p><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/'.Auth::user()->profile_type.'/'.Auth::user()->profile_id.'/edit') }}">{{ Auth::user()->name }}</a></p>
            @else
              <p>{{ Auth::user()->name }}</p>
            @endif
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/category') }}"><i class="fa fa-category"></i> <span>Categories</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/product') }}"><i class="fa fa-product"></i> <span>Products</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/rental') }}"><i class="fa fa-rental"></i> <span>Rentals</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/space') }}"><i class="fa fa-space"></i> <span>Spaces</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/space-type') }}"><i class="fa fa-space"></i> <span>Space Types</span></a></li>


          @hasrole('admin')
          <!-- Users, Roles Permissions -->
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            </ul>
          </li>
          @endhasrole

          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
