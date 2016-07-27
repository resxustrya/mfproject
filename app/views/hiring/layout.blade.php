<!doctype html>
<html>
<head>
    @include('shared.head')
    @section('title')
    @show
</head>
<body class="grey lighten-2">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
@include('hiring.header')
    <div id="main">
        <div class="wrapper">
            @yield('content')
         </div>
    </div>
    @include('shared.footer')
@include('shared.js')
@section('js')

@show
</body>
</html>
