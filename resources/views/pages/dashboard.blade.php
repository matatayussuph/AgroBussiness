@extends('main')

@section('title', '')


@section('stylesheets')

    <!--DataTables [ OPTIONAL ]-->
    <link href="{{ asset('assets/plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}"
        rel="stylesheet">
    <style>
        th {
            color: #black !important;
        }

        .panel-heading {
            background-color: rgb(255, 255, 255);
            color: #000000 !important;
            text-align: center;
            font-size: 12px !important;

        }

        tbody {
            color: black;
            text-align: start;
        }

        .form-control {
            padding:25px;
            color: #000;
            margin: 10px;
            border-radius: 7px;

        }

        .panel {
            box-shadow: 0px 0px 0px 0px !important;
            margin-top: 10px;
        }

        .btn-primary {
            background-color: rgb(255, 255, 255) !important;
            color: #232323 !important;
            margin-left: 10px !important;
            font-weight: bold;
            border: 1px solid white !important;
            border-radius: 5px !important;
            margin: 5px;
        }

        .btn-primary:hover {
            color: #000 !important;
            border: 1px solid #fff !important;
        }

        .panel-title {
            background-color: #232323 !important;
            color: #fff !important;
        }
        i{
    color: #333!important;
}
    </style>
@endsection
@section('scripts')

    <!--DataTables [ OPTIONAL ]-->
    <script src="{{ asset('assets/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>

    <!--DataTables Sample [ SAMPLE ]-->
    <script src="{{ asset('assets/js/demo/tables-datatables.js') }}"></script>
@endsection
@section('content')
    <div id="content-container">
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">@yield('title')</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        @include('partials.breadcrumb')

        {{-- @include('partials._alert') --}}

        <!--Page content-->
        <!--===================================================-->

        <div id="page-content">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form class="form-horizontal" autocomplete="off" method="POST" action=""
                        enctype="multipart/form-data">
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
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <!--Sparkline Area Chart-->
                        <div class="panel panel-colorful">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <i class="glyphicon glyphicon-user icon-fw"
                                        style="color:rgb(255, 255, 255)!important"></i>
                                    Students</h3>
                            </div>
                            <div class="pad-all text-center">
                                <p>
                                    Total
                                </p>
                                <p class="mar mt-2 bigger-font text-bold">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3 col-lg-3">
                        <!--Sparkline Area Chart-->
                        <div class="panel panel-colorful">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <i class="glyphicon glyphicon-trash icon-fw"
                                        style="color: rgb(255, 255, 255)!important"></i>
                                    Teachers</h3>
                            </div>
                            <div class="pad-all text-center">
                                <p>
                                    Total
                                </p>
                                <p class="mar mt-2 bigger-font text-bold">
                                    {{-- {{ $rejected_saccos }} --}}
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <!--Sparkline Area Chart-->
                        <div class="panel panel-colorful">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <i class="glyphicon glyphicon-retweet icon-fw"
                                        style="color: rgb(255, 255, 255)!important"></i>
                                    parents</h3>
                            </div>
                            <div class="pad-all text-center">
                                <p>
                                    Total
                                </p>
                                <p class="mar mt-2 bigger-font text-bold">
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3">
                        <!--Sparkline Area Chart-->
                        <div class="panel panel-colorful">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <i class="glyphicon glyphicon-thumbs-up icon-fw"
                                        style="color:rgb(255, 255, 255)!important"></i>
                                    Board Member</h3>
                            </div>
                            <div class="pad-all text-center">
                                <p>
                                    Total
                                </p>
                                <p class="mar mt-2 bigger-font text-bold">
                                </p>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="col-sm-6 col-lg-6">
                        <!--Sparkline Area Chart-->
                        <div class="panel panel-colorful">
                          
                            <div class="pad-all text-center">
                                <div class="row">
                                    <div class="card mb-4">
                                        <div class="card-header" style="color:#000!important;margin:10px 0px!important;">
                                            <i class="fas fa-chart-area me-1"></i>
                                           Saccos Session
                                        </div>
                                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> 
                    <div class="col-sm-6 col-lg-6">
                        <!--Sparkline Area Chart-->
                        <div class="panel panel-colorful">                          
                            <div class="pad-all text-center">
                                <div class="row">
                                        <div class="card mb-4">
                                            <div class="card-header" style="color:#000!important;margin:10px 0px!important;">
                                                <i class="fas fa-chart-bar me-1"></i>
                                                Saccos Registration
                                            </div>
                                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>

        <!--===================================================-->
        <!--End page content-->
    </div>
@section('chart-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    {{-- <script type="text/javascript">
        var _ydata = JSON.parse('{!! json_encode($months) !!}');
        var _xdata = JSON.parse('{!! json_encode($monthCount) !!}');
    </script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script> --}}
@endsection
@endsection
