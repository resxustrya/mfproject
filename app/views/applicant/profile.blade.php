@extends('applicant.layout')

@section('content')
    <div class="row">
        <h4 class="grey-text">Your profile</h4>
        @if(Session::has('message'))
            <div class="card-panel light-green lighten-3">
                <span class="center-align">
                    {{ Session::get('message') }}
                </span>
            </div>
        @endif
        <div class="right-align"><a href="{{ asset('applicant/update') }}" class="btn cyan lighten-3">Update profile</a></div>
    </div>
    <div class="row">
        <div class="collection with-header">
            <div class="collection-item"><img height="200px" width="200px" class="materialboxed square responsive-img" src="{{ asset('public/uploads/profile/'.(($app['profilepic']) != null ? $app['profilepic'] :'facebook.jpg' )) }}"></div>
            <div class="collection-item">
                <table border="0" class="browser-default">
                    <tr>
                        <td>Name</td>
                        <td>{{ $app['fname'] ." ". $app['lname'] }}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{ $app['address']  }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $app['email'] }}</td>
                    </tr>
                    <tr>
                        <td>Birthdate</td>
                        <td>{{ $app['bdate'] }}</td>
                    </tr>
                    <tr>
                        <td>Nationality</td>
                        <td>{{ $app['nationality'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@stop

@section('js')

@stop