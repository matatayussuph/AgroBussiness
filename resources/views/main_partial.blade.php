<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    @include('partials._stylesheet-section')
</head>

<body>
    {{-- <div id="container" class="effect aside-float aside-bright mainnav-lg"> --}}
    <!--NAVBAR-->
    <!--===================================================-->
    <!--===================================================-->
    <!--END NAVBAR-->

    <div>
        {{--        <!--CONTENT CONTAINER--> --}}
        {{--        <!--===================================================--> --}}
        @yield('content')
        {{--        <!--===================================================--> --}}
        {{--        <!--END CONTENT CONTAINER--> --}}

        {{--        <!--MAIN NAVIGATION--> --}}
        {{--        <!--===================================================--> --}}
        {{--        <!--Menu--> --}}
        {{--        <!--================================--> --}}
        {{-- @include('oldviews.partials.sidenav') --}}
        {{--        <!--================================--> --}}
        {{--        <!--End menu--> --}}
        {{--        <!--===================================================--> --}}
        {{--        <!--END MAIN NAVIGATION--> --}}
    </div>

    <!-- FOOTER -->
    <!--===================================================-->
    {{--    @include('oldviews.partials._footer-section') --}}
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->

</body>

</html>
