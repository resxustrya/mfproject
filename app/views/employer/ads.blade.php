
@extends('employer.layout')
@section('css')

@stop

@section('content')
    <div class="row">
        <h4>Your job ads</h4>
        @if(Session::has('message'))
            <div class="card-panel light-green lighten-3">
                <span class="center-align">
                    {{ Session::get('message') }}
                </span>
            </div>
        @endif
    </div>
    @if(count($ads) >0)
        <div class="row">
            <div class="card-panel transparent">
                <div class="right-align"><a href="{{asset('update/ad')}}" style="text-decoration: underline;" class="btn cyan lighten-3">Update ad</a></div>
                <h5>Job type : {{ $jobtype->description }}</h5>
                <br /><span>Location : <strong>{{ $location->location }}</strong></span>
                <br/><span>Start date : <strong>{{ $ads->startdate }}</strong></span>
                <br/><span>Capacity : <strong>{{ $ads->capacity }}</strong></span>
                <br/><span>Salary : <strong>{{ printf("%.2f",$ads->salary) }}</strong></span>
                <br/><span>Years contract : <strong>{{ $ads->contractyears }} years</strong></span>
                <br/><span>Gender : <strong>{{ $ads->gender }}</strong></span>
                <br/><span>Day off : <strong>{{ $dayof }}</strong></span>
                <br/><span>Education level : <strong>{{ $edlevel }}</strong></span>
                <br /><span>Pitch : <strong>{{ $ads->pitch }}</strong></span>
                <div class="row">
                    <h4>Other house duties</h4>
                    @if(isset($duties))
                        <table border="0">
                            <tr>
                                <td>
                                    <input type="checkbox" id="test5" {{ $duties->cooking != null ? 'checked' :'' }} disabled name="cooking" value="Cooking"/>
                                    <label for="test5">Cooking</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="test6" {{ $duties->laundry != null ? 'checked' :'' }} name="laundry" disabled value="Laundry"/>
                                    <label for="test6">Laundry</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="test7" name="gardening" {{ $duties->gardening != null ? 'checked' :'' }} disabled value="Gardening"/>
                                    <label for="test7">Gardening</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="test8" name="grocery" {{ $duties->grocery != null ? 'checked' :'' }} disabled value="Grocery"/>
                                    <label for="test8">Grocery</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="test9" name="cleaning" {{ $duties->cleaning != null ? 'checked' :'' }} disabled value="House Cleaning"/>
                                    <label for="test9">House cleaning</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="test10" name="tutoring" {{  $duties->tuturing != null ? 'checked' :'' }} disabled value="Tutoring"/>
                                    <label for="test10">Tutoring</label>
                                </td>
                            </tr>
                        </table>
                        <p>
                            <span>Other job description : </span> <strong>{{ $duties->other }}</strong>
                        </p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="left-align"><a href="{{ asset('employer/shortlist') }}" class="btn cyan lighten-3">Shortlist</a></div>
        </div>
    @endif
@stop

@section('js')

@stop
