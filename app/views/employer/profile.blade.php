@extends('employer.layout')

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
        <div class="right-align"><a href="{{ asset('employer/update') }}" class="btn cyan lighten-3">Update profile</a></div>
    </div>
    <div class="row">
        <div class="collection with-header">
            <div class="collection-item"><img id="editpicture" class="materialboxed square responsive-img" src="{{ asset('public/uploads/profile/'.(($emp['profilepic']) != null ? $emp['profilepic'] :'facebook.jpg' )) }}"></div>
            <div class="collection-item">
                <table border="0" class="browser-default">
                    <tr>
                        <td>Name</td>
                        <td><strong>{{ $emp['fname'] ." ". $emp['lname'] }}</strong></td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td><strong>{{ $location['location'] }}</strong></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><strong>{{ $emp['address']  }}</strong></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><strong>{{ $emp['email'] }}</strong></td>
                    </tr>
                    <tr>
                        <td>Birthdate</td>
                        <td><strong>{{ $emp['bdate'] }}</strong></td>
                    </tr>
                    <tr>
                        <td>Nationality</td>
                        <td><strong>{{ $emp['nationality'] }}</strong></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
@stop

@section('js')

@stop
