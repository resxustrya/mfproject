

@extends('employer.layout')
@section('css')

@stop

@section('content')
    <h4>Your messages <i class="material-icons">email</i></h4>
    <div class="row">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons">perm_identity</i>Rusel</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">perm_identity</i>Mark</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">perm_identity</i>Lourence</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
        </ul>
    </div>
@stop

@section('js')

@stop