<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content gray-text browser-default">
    <li><a class="black-text" href="{{ asset('employer/profile') }}">My profile</a></li>
    <li><a class="black-text" href="#!">Subscription</a></li>
    <li><a class="black-text" href="{{ asset('employer/logout') }}">Logout</a></li>
</ul>
<!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content gray-text browser-default">
    <li><a class="black-text" href="{{ asset('employer/profile') }}">My profile</a></li>
    <li><a class="black-text" href="#!">Subscription</a></li>
    <li><a class="black-text" href="{{ asset('employer/logout') }}">Logout</a></li>
</ul>
<nav class="grey lighten-4">
    <div class="nav-wrapper container-fluid">
        <a href="#" data-activates="mobile-demo" class="grey-text button-collapse"><i class="material-icons">menu</i></a>
        <a href="{{asset('/')}}" class="brand-logo offset-s10 grey-text"><img height="55" style="padding-left:70px; padding-top: 10px;" src="{{ asset('public/images/icon3.png') }}" /></a>
        <ul class="right hide-on-med-and-down ">
            <li><a class="black-text" href="{{ asset('employer/home') }}">Home</a></li>
            <li><a class="black-text" href="{{ asset('helpers') }}">Find helpers</a></li>
            <li><a class="black-text" href="badges.html">Recomendations</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="black-text dropdown-button" href="#!" data-activates="dropdown1">{{ $emp['fname'] }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a class="black-text" href="{{ asset('employer/home') }}">Home</a></li>
            <li><a class="black-text" href="{{ asset('helpers') }}">Find helpers</a></li>
            <li><a class="black-text"href="badges.html">Recomendations</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="black-text dropdown-button" href="#_" data-activates="dropdown2">{{ $emp['fname'] }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>
