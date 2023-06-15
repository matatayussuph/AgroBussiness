<nav id="mainnav-container">
    <div id="mainnav" style="background-color: rgb(255, 255, 255)">
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    @if (Auth::check())
                        <ul id="mainnav-menu" class="list-group">
                            <!--Category name-->
                            <li class="list-header">Menu</li>
                            <li>
                                <a href="{{route('dashboard')}}">
                                    <i class="glyphicon glyphicon-home"></i>
                                    <span class="menu-title">
                                        <strong>Dashboard|Home</strong>
                                    </span>
                                </a>
                            </li>{{-- 
                            <li style="margin:10px">
                                <form class="form-horizontal" autocomplete="off" method="POST" action=""
                                    enctype="multipart/form-data" >
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="col-sm-12">
                                            {{ Form::text('Search', null, ['class' => 'form-control', 'placeholder' => 'Search Here']) }}
                                            @if ($errors->has('Search'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('Search') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </li> --}}
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
                                    <li><a href=""><i class="glyphicon glyphicon-folder-open"></i> Buying
                                            Farm</a>
                                    </li>
                                    <li><a href=""><i class="glyphicon glyphicon-folder-open"></i> Rent Farm</a>
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
                                    <li><a href="{{route('consultation')}}"><i class="glyphicon glyphicon-folder-open"></i> Farm
                                            Consultation</a>
                                    </li>
                                    <li><a href="{{route('consultation-list')}}"><i class="glyphicon glyphicon-folder-open"></i> Crop
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
