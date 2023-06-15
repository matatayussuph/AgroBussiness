@extends('main')

@section('title', '')


@section('stylesheets')

    <!--DataTables [ OPTIONAL ]-->
    <link href="{{ asset('assets/plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}"
        rel="stylesheet">
    <style>
        <style>th {
            color: rgb(19, 21, 46);

        }

        .btn-dark {
            color: #fff !important;
            background-color: #01003c !important;
        }

        .required:after {
            content: '*';
            color: red;
            padding-left: 5px;
        }

        .form-control {
            border: 1px solid rgb(177, 177, 177);
        }

        .panel-heading {
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0) !important;
        }

        table,
        th,
        td {
            text-align: center;
        }

        .panel {
            box-shadow: 0px 0px 0px 0px !important;
            margin-top: 10px;
        }

        .btn-primary {
            background-color: rgb(0, 119, 255) !important;
            color: #fff !important;
            padding: 10px 20px !important;
            font-weight: bold;
            border: 1px solid white !important;
            border-radius: 5px !important;

        }

        th,
        td {
            text-align: start !important;
            font-weight: 600;

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
            <h1 class="page-header text-overflow">staff Preview Details</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        @include('partials.breadcrumb')

        {{-- @include('partials._alert') --}}

        <!--Page content-->
        <!--===================================================-->

        <div id="page-content">
            <div class="row">
                <div class="col-md-12">
                    {{-- <a href="" class="btn btn-primary">staff Edit <i class="glyphicon glyphicon-pencil"
                            style="color:rgb(255, 255, 255)!important"></i></a>
                    <a href="" class="btn btn-primary" style="background:red!important">staff Delete <i
                            class="glyphicon glyphicon-trash" style="color:rgb(255, 255, 255)!important"></i></a> --}}

                    <div class="panel">

                        @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if (Session::get('fail'))
                            <div class="alert alert-warning">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        <div class="panel-heading">
                            <h3 class="panel-title">User Details</h3>
                        </div>
                        <div class="panel-body" style="text-align: start!important">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">

                                    <tr>
                                        <th>@lang('Name')</th>
                                        <td>{{ $data->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('Email')</th>
                                        <td>{{ $data->useremail }}</td>
                                    </tr>

                                    <tr>
                                        <th>@lang('Mobile Number')</th>
                                        <td>{{ $data->mobile_no }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary" style="float: left">Back <i
                            class="glyphicon " style="color:rgb(255, 255, 255)!important"></i></a>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
@endsection
