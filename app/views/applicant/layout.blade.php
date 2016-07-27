<!doctype html>
<html>
<head>
  @include('shared.head')
  @section('title')
  @show
</head>
<body class="white">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
@include('applicant.header')
<div id="main">
  <div class="wrapper">
    @include('applicant.leftsidebar')
    <section id="content">
      @yield('content')
    </section>
    @include('applicant.rightsidebar')
  </div>
</div>
@include('shared.js')
@section('js')

@show
</body>
</html>
