<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/material/css/mycss.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/material/css/materialize.min.css') }}" />
    @section('css')

    @show
    @section('title')
        <title>MaidFinder PH</title>
    @show
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto;
        }
        a:hover {
            text-decoration: underline;
            color: #0f0f10;
        }
    </style>
</head>
<body class="grey lighten-5">

@include('applicant.header')
<div class="container-fluid">
    <div class="row">
        @include('applicant.warnings')
    </div>
    <div class="row">
        <div class="col s12 m5 l2">
            @include('applicant.sidenav')
        </div>
        <div class="col s12 m5 l7">
            @yield('content')
        </div>
        <div class="col s12 m5 l3">
            @include('applicant.rightsection')
        </div>
    </div>
    @include('shared.footer')
</div>

<script src="{{ asset('public/material/js/jquery.js') }}"></script>
<script src="{{ asset('public/material/js/materialize.min.js') }}" ></script>
<script>
    $(document).ready(function() {
        $(".button-collapse").sideNav();
        $('select').material_select();
    });
</script>
@section('js')
@show
</body>
</html>