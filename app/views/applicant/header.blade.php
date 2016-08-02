<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content gray-text browser-default">
    <li><a class="black-text" href="{{ asset('applicant/profile') }}">My profile</a></li>
    <li><a class="black-text" href="#!">Subscription</a></li>
    <li><a class="black-text" href="{{ asset('applicant/logout') }}">Logout</a></li>
</ul>
<!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content black-text browser-default">
    <li><a class="black-text" href="{{ asset('applicant/profile') }}">My profile</a></li>
    <li><a class="black-text" href="#!">Subscription</a></li>
    <li><a class="black-text" href="{{ asset('applicant/logout') }}">Logout</a></li>
</ul>
<nav class="light-blue lighten-2">
    <div class="nav-wrapper container-fluid">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <a href="#!" class="brand-logo offset-s10"><span style="padding-left: 20px"> MaidFinder PH</span></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ asset('applicant/home') }}">Home</a></li>
            <li><a href="{{ asset('employers/job/ads') }}">Employer ads</a></li>
            <li><a href="badges.html">Recomendations</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ $app['fname'] }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="{{ asset('applicant/home') }}">Home</a></li>
            <li><a href="{{ asset('employers/job/ads') }}">Employer ads</a></li>
            <li><a href="badges.html">Recomendations</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#_" data-activates="dropdown2">{{ $app['fname'] }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>
