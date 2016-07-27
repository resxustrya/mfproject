

@extends('employer.layout')

@section('title')
    <title>MaidFinderPH - Create Ads</title>
@stop

@section('content')

    <!--
    <section id="content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col s12 m12 l12">
                    <div class="row">
                        <div class="col s12 m12 l12 ">
                            <div class="card-panel ">
                                <h4>Create job ads</h4>

                                <div class="row grey lighten-1">
                                    <form class="col s12" action="employer-update" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div id="input-checkboxes" class="input-field col s6">
                                                <input type="checkbox" name="location" checked="checked"
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
@stop

@section('js')
<script src="{{ asset('public/material/materialize.min.js') }}"></script>
@stop