<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/material/css/mycss.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/material/css/materialize.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/material/css/page.css')}}" />
    @section('css')

    @show
    @section('title')
        <title>MaidFinder PH</title>
    @show
</head>
<body class="grey lighten-5">

@include('employer.header')
<div class="container-fluid">
    <div class="row warnings">
        @include('employer.warnings')
    </div>
    <div class="row">
        <div class="col s12 m12 l2 hide-on-med-and-down">
            @include('employer.sidenav')
        </div>
        <div class="col s12 m12 l7">
            @yield('content')
        </div>
        <div class="col s12 m12 l3">
            @include('employer.rightsection')
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
