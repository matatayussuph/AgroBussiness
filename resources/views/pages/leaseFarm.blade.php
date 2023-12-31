@extends('main')

@section('title', 'Farm Lease Portifolio')

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
            <h1 class="page-header text-overflow">Lease Farm</h1>
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
                            <h3 class="panel-title">Create Farm For Leasing</h3>
                        </div>
                        <!--Horizontal Form-->
                        <!--===================================================-->
                        <form class="form-horizontal" autocomplete="off" method="POST"
                            action="{{ route('create.lease_farm') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Owner Info</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('first_name', 'First Name', ['class' => 'control-label required']) }}
                                                {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name', 'required' => 'required']) }}
                                                @if ($errors->has('first_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('middle_name', 'Middle Name', ['class' => 'control-label required']) }}
                                                {{ Form::text('middle_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Middle Name', 'required' => 'required']) }}
                                                @if ($errors->has('middle_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('last_name', 'Last Name', ['class' => 'control-label required']) }}
                                                {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name', 'required' => 'required']) }}
                                                @if ($errors->has('last_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('useremail') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('useremail', 'User Email', ['class' => 'control-label required']) }}
                                                {{ Form::email('useremail', null, ['class' => 'form-control', 'placeholder' => 'Enter Email', 'required' => 'required']) }}
                                                @if ($errors->has('useremail'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('useremail') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('mobile_no', 'Phone Number', ['class' => 'control-label required']) }}
                                                {{ Form::number('mobile_no', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number', 'required' => 'required']) }}
                                                @if ($errors->has('mobile_no'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('gender', 'Gender', ['class' => 'control-label required']) }}
                                                <select name="gender" class="form-control" id="gender"
                                                    style="padding: 0.7%;" required>
                                                    <option value="">Select Gender</option>
                                                    @foreach ($gender as $sex)
                                                        <option value="{{ $sex->id }}">{{ $sex->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('gender'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('gender') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h5>Farm Info</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('known_location') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('known_location', 'Known Name Location', ['class' => 'control-label required']) }}
                                                {{ Form::text('known_location', null, ['class' => 'form-control', 'placeholder' => 'Farm Location', 'required' => 'required']) }}
                                                @if ($errors->has('known_location'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('known_location') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('size') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('size', 'Name Farm Size in Acres', ['class' => 'control-label required']) }}
                                                {{ Form::number('size', null, ['class' => 'form-control', 'placeholder' => 'Farm Size', 'required' => 'required']) }}
                                                @if ($errors->has('size'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('size') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('sell_price') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('sell_price', 'Leasing Price', ['class' => 'control-label required']) }}
                                                {{ Form::number('sell_price', null, ['class' => 'form-control', 'placeholder' => 'Price for sell', 'required' => 'required']) }}
                                                @if ($errors->has('sell_price'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('sell_price') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('location_id') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('location_id', 'Location Link', ['class' => 'control-label required']) }}
                                                {{ Form::text('location_id', null, ['class' => 'form-control', 'placeholder' => 'Google Location', 'required' => 'required']) }}
                                                @if ($errors->has('location_id'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('location_id') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('Price_Negotiable') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('Price_Negotiable', 'Price Negotiable?', ['class' => 'control-label required']) }}
                                                <select name="Price_Negotiable" class="form-control" id="Price_Negotiable"
                                                    style="padding: 0.7%;" required>
                                                    <option value="">Price Negotiation</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>

                                                </select>
                                                @if ($errors->has('Price_Negotiable'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('Price_Negotiable') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('region_id') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('region_id', 'Region', ['class' => 'control-label required']) }}
                                                <select name="region_id" class="form-control" id="gender"
                                                    style="padding: 0.7%;" required>
                                                    <option value="">Select Region</option>
                                                    @foreach ($region as $data)
                                                        <option value="{{ $data->id }}">{{ $data->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('region_id'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('region_id') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('district_id') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('district_id', 'District', ['class' => 'control-label required']) }}
                                                <select name="district_id" class="form-control" id="district_id"
                                                    style="padding: 0.7%;" required>
                                                    <option value="">Select district</option>
                                                    @foreach ($district as $data)
                                                        <option value="{{ $data->id }}">{{ $data->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('district_id'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('district_id') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('ward_id') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('ward_id', 'ward', ['class' => 'control-label required']) }}
                                                <select name="ward_id" class="form-control" id="ward_id"
                                                    style="padding: 0.7%;" required>
                                                    <option value="">Select Ward</option>
                                                    @foreach ($ward as $data)
                                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('ward_id'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('ward_id') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('farm_photo') ? ' has-error' : '' }}">
                                            <div class="col-sm-12">
                                                {{ Form::label('farm_photo', 'Farm Photo', ['class' => 'control-label required']) }}
                                                {{ Form::file('farm_photo', null, ['class' => 'form-control', 'placeholder' => '', 'required' => 'required']) }}
                                                @if ($errors->has('farm_photo'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('farm_photo') }}</strong>
                                                    </span>
                                                @endif
                                                <p style="color: grey">document must be less than 2MB in sze</p>

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
    <script src="{{ asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>


@endsection
