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
@include('employer.header')
<div id="main">
  <div class="wrapper">
    @include('employer.leftsidebar')
    <section id="content">
      @yield('content')
    </section>
    @include('employer.rightsidebar')
    @include('shared.footer')
  </div>
</div>
@include('shared.js')
@section('js')

@show
</body>
</html>
