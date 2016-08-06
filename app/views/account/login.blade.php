@extends('account.layout')
@section('css')
@parent
<style>
     body {
      background-color: #DADADA;
         background-image: url('public/img/6.jpg')   !important;
         background-repeat: no-repeat;
         height: auto;
         max-width: 100%;
         background-size: cover;
         top: 0;
         left: 0;
         margin-top:10em;
     }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
        max-width: 450px;

    }
</style>
@stop
@section('content')
<div class="ui middle aligned center aligned grid flip">
  <div class="column">
      <h2 class="ui blue image header">
          <div class="content">
              <img src="{{ asset('public/semantic/assets/img/icon5.png') }}" class="image ui tiny">

          </div>
      </h2>

  @if(Session::has('msg'))
        <div class="ui negative message">
            <div class="header">
              {{ Session::get('msg') }}
            </div>
        </div>
      @endif
      <form class="ui large pointing form" action="user-login" method="POST">
      <div class="ui stacked segment">

        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
          <input type="submit" class="ui fluid large y submit button" value='Login' style="background-color: #d0c38a;"/>
        <div class="ui horizontal divider">
                Or
            </div>
        <a href='facebook-login' class="ui fluid large facebook button">
            <i class="facebook icon"></i>
            Login with Facebook
         </a>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      New to us? <a href="user-register">Sign Up</a>
    </div>
  </div>
</div>
@stop
