@extends('main')

@section('title', 'Enter Consultation Details Here')

@section('stylesheets')
    <!--Bootstrap Datepicker [ Required ]-->
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <style>
        .required:after {
            content: '*';
            color: red;
            padding-left: 5px;
        }

        i {
            color: #333 !important;
        }

        .form-control {
            border: 1px solid rgb(177, 177, 177);
        }

        .panel-heading {
            background-color: white;
            color: rgb(0, 0, 0) !important;
        }

        .btn-primary {
            background-color: #0295f7 !important;
            color: #fff !important;
            padding: 10px 20px !important;
            font-weight: bold;
            border: 1px solid white !important;
            border-radius: 5px !important;

        }

        .btn-primary:hover {
            color: #000 !important;
            border: 1px solid #fff !important;
        }

        .panel {
            box-shadow: 0px 0px 0px 0px !important;
            margin-top: 10px;
        }
    </style>
@endsection
@section('content')
    <div id="content-container">
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Consultation Form</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        @include('partials.breadcrumb')
        {{--        @include('oldviews.partials._alert') --}}
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel" style="margin-top:5px;">
                        @include('partials.flash_message')
                        <div class="panel-heading">
                            <h3 class="panel-title">Crop Consultation</h3>
                        </div>
                        <!--Horizontal Form-->
                        <!--===================================================-->
                        <form class="form-horizontal" autocomplete="off" method="POST"
                            action="{{ route('consult.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Owner Info</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('crop_name') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('crop_name', 'Crop Name', ['class' => 'control-label required']) }}
                                                {{ Form::text('crop_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Crop Name', 'required' => 'required']) }}
                                                @if ($errors->has('crop_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('crop_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('description', ' Consultation Details', ['class' => 'control-label required']) }}
                                                {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => '', 'required' => 'required']) }}
                                                @if ($errors->has('description'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="panel-footer text-center">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button class="btn btn-primary"style=" border: 1px solid white!important;">
                                            <span style="font-weight:bolder">Submit</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                    <!--===================================================-->
                    <!--End Horizontal Form-->
                </div>

            </div>
        </div>
    </div>

    <!--===================================================-->
    <!--End page content-->
@endsection

@section('scripts')
    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <script src="{{ asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>

    <!--Bootstrap Datepicker [  ]-->
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!--Form Component [ SAMPLE ]-->
    {{-- <script src="{{asset('assets/js/demo/form-component.js')}}"></script> --}}

@endsection
