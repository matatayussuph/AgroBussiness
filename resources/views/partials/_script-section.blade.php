<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
<!--BootstrapJS [ RECOMMENDED ]-->

<!--NiftyJS [ RECOMMENDED ]-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

<script src="{{asset('assets/js/nifty.min.js')}}"></script>

<!--=================================================-->
<!--Bootstrap Timepicker [ OPTIONAL ]-->
<script src="{{asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script><!--Bootstrap Datepicker [  ]-->
<script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script>href="https://cdnjs.com/libraries/Chart.js"</script>

<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity = "sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
crossorigin = "anonymous" >

<!--Form Component [ SAMPLE ]-->
{{--<script src="{{asset('assets/js/demo/form-component.js')}}"></script>--}}
<script>
    var base_url = "{!! url("/") !!}";
</script>
<script>
    $('#demo-dp-txtinput input').datepicker({
        format: "yyyy-mm-dd",
        todayBtn: "linked",
        autoclose: true
    });
</script>
<script>
// In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>


@yield('scripts')
@yield('chart-scripts')
