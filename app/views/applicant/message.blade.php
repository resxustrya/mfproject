@extends('applicant.layout')
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
                <div class="collapsible-body">
                    <div class="row">

                    </div>
                    <div class="row">
                        <form action="">
                            <div class="col s12 m6 l6">
                                <input type="text" name="message" />
                            </div>
                            <div class="col s12 m6 l6">
                                <input type="submit" name="send" value="Send"/>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@stop

@section('js')

@stop