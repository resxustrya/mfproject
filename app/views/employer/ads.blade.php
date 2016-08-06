
@extends('employer.layout')
@section('css')

@stop

@section('content')
    <div class="row">
        <h4>Your job ads</h4>
    </div>
    @if(count($ads) >0)
        <div class="row">
            <div class="collection">
                <div class="collection-item">
                    <div class="right-align"><a href="create-ad" style="text-decoration: underline;" class="">Update ad</a></div>
                    <h5>Job type : {{ $jobtype->description }}</h5>
                    <br />
                    <span>Location : <strong>{{ $location->location }}</strong></span>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <h5>No job ads yet.</h5>
            <div class="left-align"><a href="{{ asset('create/ad') }}" class="btn cyan lighten-3">Create job ad</a></div>
        </div>
    @endif
@stop

@section('js')

@stop