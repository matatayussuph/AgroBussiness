@extends('main_partial')

<style>
    h1 {
        color: white !important;
        font-size: 42px;
        font-weight: bolder;
        text-align: center;
    }

    .form-control {
        border: 1px solid rgb(170, 170, 170) !important;
    }

    .control-label,
    .form-control {
        font-weight: bold
    }

    .required:after {
        content: '*';
        color: red;
        padding-left: 5px;
    }

    .panel-heading {
        background-color: rgb(255, 255, 255);
        color: black !important;
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

    #center {
        margin: auto;
        width: 50%;
        border: 3px solid green;
        padding: 10px;
    }
</style>
@section('content')
    <div id="page-content" style="  position:absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);padding: 10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <form class="form-horizontal" autocomplete="off" method="POST" action="{{ route('otp.getlogin') }}"
                        enctype="multipart/form-data">
                        {{-- {{Form::hidden('user_id', auth()->user()->id)}} --}}
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user_id }}" />
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('otp') ? ' has-error' : '' }}">
                                        <div class="col-sm-12">
                                            {{ Form::label('otp', 'OTP', ['class' => 'control-label required']) }}
                                            {{ Form::text('otp', null, ['class' => 'form-control', 'placeholder' => 'Put Your Otp', 'required' => 'required']) }}
                                            @if ($errors->has('otp'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('otp') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-center">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button class="btn btn-primary"style=" border: 1px solid white!important;">
                                            <span style="font-weight:bolder">Verify</span>
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
@endsection
