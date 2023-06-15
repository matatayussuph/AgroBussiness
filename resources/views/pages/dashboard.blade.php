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
            padding: 25px;
            color: #000;
            margin: 10px;
            border-radius: 7px;

        }

        .panel {
            box-shadow: 0px 0px 0px 0px !important;
            margin-top: 10px;
        }

        .btn-primary {
            background-color: rgb(0, 123, 255) !important;
            color: #ffffff !important;
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

        i {
            color: #333 !important;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: rgb(0, 0, 0);
            background-color: #ffffff;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
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
            <div id="page-content">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($sl as $data)
                            <div class="col-sm-3 col-lg-3">
                                <!--Sparkline Area Chart-->
                                <div class="panel panel-colorful">
                                    <div style="text-align: center">
                                        <img src="{{ asset('anp.jpg') }}" class="img img-rounded img-responsive"
                                            alt="image" width=";" height=""
                                            style="display: block;margin-left: auto;margin-right: auto;padding:5px" />
                                        <h3>{{ $data->known_location }}</h3>
                                        <p class="price">{{ $data->sell_price }}/= Tsh</p>
                                        <p>Size in Acre:{{ $data->size }}, Posted By: {{ $data->first_name }}</p>
                                        <p>Contact:{{ $data->mobile_no }}</p>
                                        <a href="{{ route('farm.show', ['id' => $data->id]) }}" class="btn btn-primary">View
                                            <i class=""></i></a>
                                   

                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
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
