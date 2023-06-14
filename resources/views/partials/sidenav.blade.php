<nav id="mainnav-container">
    <div id="mainnav" style="background-color: rgb(255, 255, 255)">
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    @if (Auth::check())
                        <ul id="mainnav-menu" class="list-group">
                            <!--Category name-->
                            <li class="list-header">Menu</li>

                            <!--Menu list item-->
                            <li>
                                <a href="">
                                    <i class="glyphicon glyphicon-home"></i>
                                    <span class="menu-title">
                                        <strong>Dashboard|Home</strong>
                                    </span>
                                </a>
                            </li>
                            {{-- @if (Auth::user()->role) --}}
                            <!--Menu list item-->
                            <li class="">
                                <a href="#">
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                    <span class="menu-title">
                                        <strong>Categories</strong>
                                    </span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse" style="font-size: 12px!important">
                                    <li><a href=""><i class="glyphicon glyphicon-folder-open"></i> Buying</a>
                                    </li>
                                    <li><a href=""><i class="glyphicon glyphicon-folder-open"></i> Rent</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="">
                                <a href="#">
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                    <span class="menu-title">
                                        <strong>Consultation</strong>
                                    </span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse" style="font-size: 12px!important">
                                    <li><a href=""><i class="glyphicon glyphicon-folder-open"></i> Farm
                                            Consultation</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="">
                                <a href="#">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span class="menu-title">
                                        <strong>User's & Access</strong>
                                    </span>
                                    <i class="arrow"></i>
                                </a>
                                <ul class="collapse" style="font-size: 12px!important">
                                    <li><a href=""><i class="glyphicon glyphicon-user"></i>User Profile</a>
                                    </li>
                                </ul>
                                <ul class="collapse" style="font-size: 12px!important">
                                    <li><a href=""><i class="glyphicon glyphicon-log-in"></i>Roles</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#">
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                    <span class="menu-title">
                                        <strong>Farm Portifolio</strong>
                                    </span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse" style="font-size: 12px!important">
                                    <li><a href="{{ route('sell.farm') }}"><i
                                                class="glyphicon glyphicon-folder-open"></i>Sell farm
                                        </a>
                                    </li>
                                    <li><a href="{{ route('lease.farm') }}"><i
                                                class="glyphicon glyphicon-folder-open"></i>Lease farm
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#">
                                    <i class="glyphicon glyphicon-cog"></i>
                                    <span class="menu-title">
                                        <strong>Settings</strong>
                                    </span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse" style="font-size: 12px!important">
                                    {{-- @can('create Role') --}}
                                    <li><a href=""><i class="glyphicon glyphicon-time"></i>Set idle Timer</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="">
                                <a href="#">
                                    <i class="glyphicon glyphicon-tasks"></i>
                                    <span class="menu-title">
                                        <strong>Audit Trail</strong>
                                    </span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse" style="font-size: 12px!important">
                                    <li><a href=""><i class="glyphicon glyphicon-eye-open"></i>Audit System
                                            User</a>
                                    </li>

                                </ul>
                            </li>
                            {{-- @endcan --}}
                            <li class="">
                                <a href="">
                                    <i class="glyphicon glyphicon-log-out"></i>
                                    <span class="menu-title">
                                        <strong>Sign Out</strong>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
