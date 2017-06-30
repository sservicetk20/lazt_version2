<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazt.us - @yield('title') </title>
    
    <!-- Material Design fonts -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Bootstrap Material Design -->
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-material-design.css">
  <link rel="stylesheet" type="text/css" href="dist/css/ripples.min.css">


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/carrito.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/multiple-emails.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/profile.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/plugins/c3/c3.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/animate.css') !!}" />
    <link rel="stylesheet" href="{{ url('/plugins/trumbowyg/dist/ui/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ url('/plugins/sweetalert-master/dist/sweetalert.css') }}">
    
    <link rel="stylesheet" href="{{ url('/plugins/summernote/summernote.css') }}">
    <link rel="stylesheet" href="{{ url('/plugins/summernote/summernote-bs3.css') }}">
    
    <link rel="stylesheet" href="{{ url('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/carrito.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('js/bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet">

</head>
<body>
<style type="text/css">
    body {
    font-family: "open sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    background-color: #00bcd4;
    font-size: 13px;
    color: #676a6c;
    overflow-x: hidden;
}
.nav > li > a {
    color: white;
    font-weight: 400;
    padding: 14px 20px 14px 25px;
}
.nav > li > a:hover {
    background-color:#009688!important;
    color: white!important;
    text-decoration:none!important;
}

.navbar-default .nav > li > a:hover, .navbar-default .nav > li > a:focus {
    background-color:#009688!important;
    color: white!important;
}

</style>
  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            
            <!-- Main view  -->
            @yield('content')
            <!-- Footer -->
            
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/multiple-emails.js') !!}" type="text/javascript"></script>
<script src="{{ url('/plugins/trumbowyg/dist/trumbowyg.min.js') }}"></script>
<script src="{{ url('/plugins/sweetalert-master/dist/sweetalert.min.js') }}"></script>
<script src="{{ url('/js/summernote/summernote.min.js') }} "></script>
<script src="{{ url('/js/bootstrap3-editable/js/bootstrap-editable.min.js') }} "></script>
<script src="{{ url('/js/bootstrap3-editable/js/app.js') }} "></script>

<!-- d3 and c3 charts -->
<script src="{!! asset('/js/plugins/d3/d3.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('/js/plugins/c3/c3.min.js') !!}" type="text/javascript"></script>
<div id="field" data-field-id="{{ Auth::user()->plan_id }}" ></div>
    <script>
        $(document).ready(function () {
            var fieldId = $('#field').data("field-id");
            console.log(fieldId);
            c3.generate({
                bindto: '#gauge',
                data:{
                    columns: [
                        ['data', fieldId ]
                    ],

                    type: 'gauge'
                },
                color:{
                    pattern: ['#1ab394', '#BABABA']

                }
            });

        });
        </script>
@include('sweet::alert')
@section('scripts')
@show
</body>
</html>
