<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('assets/admin/img/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->first_name.' '.Auth::user()->last_name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{route('admin.dashboard.index')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="header">PROPERTIES</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Properties</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{route('admin.property.index')}}">
                <i class="fa fa-eye"></i> <span>View Properties</span>
              </a>
            </li>
            <li>
              <a href="{{route('admin.property.add')}}">
                <i class="fa fa-plus-square"></i> <span>Add Property</span>
              </a>
            </li>
          </ul>
        </li>
        @if(Auth::user()->is_admin)
        <li class="header">SUPER-ADMIN</li>
        <li class="treeview">
          <a href="{{route('admin.user.index')}}">
            <i class="fa fa-users"></i> <span>Manage Users</span>
          </a>
        </li>
        <li class="header">WEBSITE</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.feature.index')}}"><i class="fa fa-circle-o"></i> Features</a></li>
            <li><a href="{{route('admin.property_type.index')}}"><i class="fa fa-circle-o"></i> Property Types</a></li>
            <li><a href="{{route('admin.property_state.index')}}"><i class="fa fa-circle-o"></i> Property States</a></li>
            <li><a href="{{route('admin.currency.index')}}"><i class="fa fa-circle-o"></i> Currency</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Site Contents</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.contents.about')}}"><i class="fa fa-circle-o"></i> About Content</a></li>
            <li><a href="{{route('admin.contents.terms_and_conditions')}}"><i class="fa fa-circle-o"></i> Terms and Conditions</a></li>
            <li><a href="{{route('admin.contents.contact')}}"><i class="fa fa-circle-o"></i> Contact</a></li>
            <li><a href="{{route('admin.contents.footer')}}"><i class="fa fa-circle-o"></i> Footer</a></li>
            <li><a href="{{route('admin.contents.privacy_policy')}}"><i class="fa fa-circle-o"></i> Privacy Policy</a></li>
            <li><a href="{{route('admin.contents.terms')}}"><i class="fa fa-circle-o"></i> Terms</a></li>
            <li><a href="{{route('admin.contents.social_media')}}"><i class="fa fa-circle-o"></i> Social Media</a></li>
          </ul>
        </li>
        @endif
        <li class="header">OPEN SOURCE</li>
        <li class="treeview">
          <a href="https://github.com/prodsters/property_web_builder" target="_blank">
            <i class="fa fa-github"></i> <span>Source Code</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>