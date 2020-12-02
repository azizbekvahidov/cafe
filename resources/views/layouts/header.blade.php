<header class="header">
    <nav class="navbar navbar-expand-md navbar-static-top">
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw fa-bars"></i>
            </a>
        </div>

        <div class="navbar-collapse " id="navbarNav">
            <div class="navbar-right ml-auto">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown user user-menu">
                        <a href="#" class="nav-link dropdown-toggle padding-user pt-3">
                            <img src="{{asset('assets/dashboard/img/avatar2.jpg')}}" width="35"
                                 class="rounded-circle img-fluid pull-left"
                                 height="35">
                            <div class="riot">
                                <div>
                                    {{\Auth::user()->name}}
                                    <span>
                                        <i class="fa fa-caret-down"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('assets/dashboard/img/avatar2.jpg')}}" class="rounded-circle">
                                <p>  {{\Auth::user()->name}}</p>
                            </li>
                            <li  class="dropdown-divider"></li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{route('logout')}}"><span class="icon mdi mdi-power"></span> <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

