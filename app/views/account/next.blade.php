<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Client Login </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/semantic/assets/css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/semantic/assets/css/mycss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/semantic/assets/css/wodry.css') }}">

    <link rel="icon" href="/assets/img/icon.png">
    <script type="text/javascript" src="{{ asset('public/semantic/semantic/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/semantic/js/wodry.min.js') }}"></script>
    <script>

    </script>
</head>
<style type="text/css">
    body {
        background-color: #FAFAFA;
    }
    body > .grid {
        height: 100%;
    }
    .signUp.column {
        max-width: 450px;
    }
</style>
</head>
<body>
<!-------------------------------------------------- Following Menu --------------------------------------------->

<div class="ui  fixed menu inverted borderless" style="background-color:#58C9B9;height:8%;">
    <div class="left item">
        <img src="{{ asset('public/semantic/assets/img/icon.png') }}" alt="MaidFinderPH">
        <a  class="logo wodry " href="#" style="font-family:DancingScript, cursive;weight:100;font-size:2.5em; "> <span  >MaidFinderPH </span></a>
    </div>
    <div class="right item">
        <a class="item" href="/landing.html">Home</a>
        <a class="item" href="#"> Cities</a>
        <a class="item" href="#"> Find a Maid</a>
        <a class="item" href="#"> Get a Job</a>
        <div class="item">
            <div class="ui buttons">
                <a href="/login.html">
                    <button class="ui button purple">
                        <i class="sign out icon"></i>Logout
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-----------------------------Content-------------------------------------------->
<div class="ui two column centered grid">
    <div class="column">
        <div class="ui vertical stripe segment">
            <div class="ui info message smsg">
                Successfully authenticated with Facebook
            </div>
            <div class="ui container anim3">
                <h3 class="ui header centered ">First, Let us know what you need...<span>&nbsp;</span></h3>
            </div>
        </div>
    </div>
    <div class="four column centered row ui  middle aligned aligned center aligned grid very relaxed stackable grid">
        <div class="center column">
            <h2 class="ui teal image header">
                <div class="content">
                    I need a helper
                </div>
            </h2>
            <a href="employer">
                <button class="ui inverted purple button">Hire</button>
            </a>
        </div>
        <div class="ui vertical divider">
            Or
        </div>
        <div class="center column">
            <h2 class="ui teal image header">
                <div class="content">
                    I need a job
                </div>
            </h2>
            <a href="applicant">
                <button class="ui inverted purple button">Apply</button>
            </a>
        </div>
    </div>
    <div class="column"></div>
</div>
<!---------------------THIS IS FOOTER-------------------------------->
<div class="ui bottom fixed footer" style="bottom:0;position:fixed;width:100%">
    <div class="ui  padded footer  grid" >
        <div class="grey row">
            <div class="column"><i class="icon copyright"></i>2016 MaidFinderPH</div>
        </div>
    </div>
</div>
</body>
<script>
    $(".message.smsg").show().delay(3000).fadeOut();</script>
</html>
