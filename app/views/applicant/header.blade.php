<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content gray-text browser-default">
    <li><a class="black-text" href="{{ asset('applicant/profile') }}">My profile</a></li>
    <li><a class="black-text" href="#!">Subscription</a></li>
    <li><a class="black-text" href="{{ asset('applicant/logout') }}">Logout</a></li>
</ul>
<!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content black-text browser-default">
    <li><a class="black-text" href="{{ asset('applicant/profile') }}">My profile</a></li>
    <li><a class="black-text" href="{{ asset('applicant/logout') }}">Logout</a></li>
</ul>
<nav class="grey lighten-4">
    <div class="nav-wrapper container-fluid">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <a href="{{asset('/')}}" class="brand-logo offset-s10 grey-text"><img height="55" style="padding-left:70px; padding-top: 10px;" src="{{ asset('public/images/icon3.png') }}" /></a>
        <ul class="right hide-on-med-and-down">
            <li><a class="black-text" href="{{ asset('applicant/home') }}">Home</a></li>
            <li><a class="black-text" href="{{ asset('employers/job/ads') }}">Employer ads</a></li>
            <li><a class="black-text" href="badges.html">Recomendations</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button black-text" href="#!" data-activates="dropdown1">{{ $app['fname'] }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a class="black-text"  href="{{ asset('applicant/home') }}">Home</a></li>
            <li><a class="black-text" href="{{ asset('employers/job/ads') }}">Employer ads</a></li>
            <li><a class="black-text" href="badges.html">Recomendations</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#_" data-activates="dropdown2">{{ $app['fname'] }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>
