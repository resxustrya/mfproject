@extends('employer.layout')

@section('content')
    <div class="row">
        <h4 class="grey-text">Your profile</h4>
        <div class="right-align"><a href="{{ asset('employer/update') }}" class="btn cyan lighten-3">Update profile</a></div>
    </div>
    <div class="row">
        <div class="collection with-header">
            <div class="collection-item"><img height="200px" width="200px" class="materialboxed square responsive-img" src="{{ asset('public/uploads/profile/facebook.jpg') }}"></div>
            <div class="collection-item">
                <table border="0" class="browser-default">
                    <tr>
                        <td>Name</td>
                        <td>{{ $emp['fname'] ." ". $emp['lname'] }}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{ $emp['address']  }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $emp['email'] }}</td>
                    </tr>
                    <tr>
                        <td>Birthdate</td>
                        <td>{{ $emp['bdate'] }}</td>
                    </tr>
                    <tr>
                        <td>Nationality</td>
                        <td>{{ $emp['nationality'] }}</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
@stop

@section('js')

@stop