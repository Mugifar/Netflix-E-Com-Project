<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
     <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
       <div class="brand-logo">
        <a href="index.html">
         <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
         <h5 class="logo-text">Dashtreme Admin</h5>
       </a>
     </div>
     <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
          <a href="/admindashboard">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="icons.html">
            <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
          </a>
        </li>

        <li>
          <a href="/AddMovies">
            <i class="zmdi zmdi-format-list-bulleted"></i> <span>Add Movies</span>
          </a>
        </li>

        <li>
          <a href="tables.html">
            <i class="zmdi zmdi-grid"></i> <span>Tables</span>
          </a>
        </li>

        <li>
          <a href="/orders">
            <i class="zmdi zmdi-calendar-check"></i> <span>Orders</span>
            <small class="badge float-right badge-light">New</small>
          </a>
        </li>

        <li>
          <a href="/profile">
            <i class="zmdi zmdi-face"></i> <span>Profile</span>
          </a>
        </li>

        <li>
          <a href="login.html" target="_blank">
            <i class="zmdi zmdi-lock"></i> <span>Login</span>
          </a>
        </li>

         <li>
          <a href="register.html" target="_blank">
            <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
          </a>
        </li>

        <li class="sidebar-header">LABELS</li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

      </ul>

     </div>
     <!--End sidebar-wrapper-->

  <!--Start topbar header-->
  <header class="topbar-nav">
   <nav class="navbar navbar-expand fixed-top">
    <ul class="navbar-nav mr-auto align-items-center">
      <li class="nav-item">
        <a class="nav-link toggle-menu" href="javascript:void();">
         <i class="icon-menu menu-icon"></i>
       </a>
      </li>
      <li class="nav-item">
        <form class="search-bar">
          <input type="text" class="form-control" placeholder="Enter keywords">
           <a href="javascript:void();"><i class="icon-magnifier"></i></a>
        </form>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
        @if (Session::has('user'))
            <li class="dropdown">
                <a href="#" class="dropdown-toggle"
                    data-toggle="dropdown">{{ Session::get('user')['name'] }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="/logout">Logout</a></li>

                </ul>
            </li>
        @else
            <li><a href="/log">Login</a></li>
        @endif
  </nav>

<div class="clearfix"></div>
  </header>
