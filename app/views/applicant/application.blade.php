@extends('applicant.layout')

@section('css')

@stop

@section('content')
    <div class="row">
        <h4>Your job application</h4>
        @if(Session::has('message'))
            <div class="card-panel light-green lighten-3">
                <span class="center-align">
                    {{ Session::get('message') }}
                </span>
            </div>
        @endif
    </div>
    <div class="row">
        @foreach($application as $a)
            <div class="card-panel">
               <div class="row">
                   <div class="col s12 m6 l6">
                       <p>Position : <strong>{{ $a->position }}</strong></p>
                       <p>Salary : <strong>{{ $a->salary }}</strong></p>
                       <p>Job type : <strong>{{ $a->jobtype }}</strong></p>
                       <p>Job location : <strong>{{ $a->location }}</strong></p>
                       <p>Education : <strong>{{ $a->edlevel }}</strong></p>
                       <p>Self pitch : <br /><strong>{{ $a->pitch }}</strong></p>
                   </div>
                   <div class="col s12 m6 l6">
                       <p class="right-align">
                           <a href="{{ asset('create/ad') }}" class="btn cyan lighten-3">Edit appication</a>
                       </p>
                   </div>
               </div>
            </div>
        @endforeach
    </div>
@stop

@section('js')

@stop