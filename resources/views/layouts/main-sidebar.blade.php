<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a >
                            <a href="{{route('dashboard')}}"  class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{__("Dashboard")}}</span>
                            </a>

                        </a>
                        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">

                        </ul>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>


                    <!-- menu item todo-->
                    <li>
                        <a href="{{route('user.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{__("Users")}}
                                </span> </a>
                    </li>
                    <li>
                        <a href="{{route('room.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{__("Rooms")}}
                                </span> </a>
                    </li>
                    <li>
                        <a href="{{route("order.index")}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{__("Orders")}}
                                </span> </a>
                    </li>
                    <li>
                        <a href="{{route("communication.index")}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{__("Message")}}
                                </span> </a>
                    </li>

                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
