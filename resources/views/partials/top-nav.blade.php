<!--Navbar Dropdown-->
<!--================================-->
<div class="navbar-content clearfix">
    <ul class="nav navbar-top-links pull-left">

        <!--Navigation toogle button-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <li class="tgl-menu-btn">
            <a class="mainnav-toggle" href="#">
                <i class="demo-pli-view-list"></i>
            </a>
        </li>
        <li>
            <h4 style="padding-top: 8px">UBX Saccos Management System</h4>
        </li>


        <!--End Navigation toogle button-->
    </ul>

    <ul class="nav navbar-top-links pull-right">

        <!--User dropdown-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <li id="dropdown-user" class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                    <span class="pull-right">
                        <i class="demo-pli-male ic-user"></i>
                    </span>
                <div class="username hidden-xs"></div>
            </a>

            <div class="dropdown-menu dropdown-menu-md dropdown-menu-center panel-default">
                <!-- User dropdown menu -->

                <!-- Dropdown footer -->
                <div class="pad-all text-center" style="background-color:rgb(38, 37, 37)!important">
                    <a href="{{route('signout')}}" class="btn btn-info">
                        <i class="demo-pli-unlock"></i> Logout
                    </a>
                </div>
            </div>
        </li>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End user dropdown-->

    </ul>
    
</div>

<!--================================-->
<!--End Navbar Dropdown-->
