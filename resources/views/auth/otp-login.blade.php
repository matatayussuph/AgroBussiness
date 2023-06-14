@extends('main_partial')
<style>
    .form-control {
        border: 1px solid rgb(170, 170, 170) !important;
    }

    .control-label,
    .form-control {
        font-weight: bold
    }

    .panel-heading {
        background-color: rgb(1, 42, 90);
        color: white !important;
    }

    .btn-primary {
        background-color: rgb(0, 119, 255) !important;
        color: #fff !important;
        padding: 10px 20px !important;
        font-weight: bold;
        border: 1px solid white !important;
        border-radius: 5px !important;

    }
</style>
@section('content')
    @include('partials.navbar')
    <div
        class="container-fluid"style="background-color: white;justify-content:center;;width:50%;;border-radius:10px;box-shadow:2px 2px 5px 5px #e1e1e1">
        @if (isset($success))
            <div class="alert alert-success">
                $success
            </div>
        @endif

        @if (isset($error))
            <div class="alert alert-warning">
                $error
            </div>
        @endif


        <div class="row " style="justify-content:center;display:flex;padding:5px;">
            <div class="row">
                <div class="col-md-12">
                    <div style="justify-content:center;display:flex;;margin-top:5px;">
                        <img src="{{ URL::asset('ubx.png') }}" alt="profile Pic" height="auto" width="auto">
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <form method="POST" action="{{ route('otp.generate') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mobile Number</label>
                        <input type="mobile" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter Registered Mobile Number" name="phone_no" value="{{ old('phone_no') }}"
                               required autofocus>
                        @error('phone_no')
                        <span class="invalid-feedback" role="alert">
                                <span style="color:red">{{ $message }}</span>
                            </span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary"
                            style="justify-content:center;display:flex;padding:20px;margin-top:20px;border:1px solid white!important">
                        {{ __('Generate OTP') }}
                    </button>

                </form>
            </div>
        </div>
    </div>
@endsection
