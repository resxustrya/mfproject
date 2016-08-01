
@extends('employer.layout')
@section('css')

@stop

@section('content')
    <div class="row">
        <h4 class="grey-text">Your job ads</h4>
    </div>
    @if(count($ads))
        <div class="row">
            @foreach($ads as $ad)
                <div class="collection">
                    <div class="collection-item">
                        <div class="right-align"><a href="create-ad" class="btn cyan lighten-3">Update</a></div>
                        <strong>{{ $ad['description'] }}</strong>
                        <br />
                        <span>{{ $ad['location'] }}</span>
                    </div>
                </div>
            @endforeach
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