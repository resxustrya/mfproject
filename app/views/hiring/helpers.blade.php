@extends('hiring.layout')
@section('title')
    <title>MaidFinder Helpers</title>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">

            <section class="col s10 offset-s1">
                <div class="card">

                    <div class="card-content">
                        <h4>MaidFinder Search</h4>
                        <p>To get the best search result, use our search filtering feature below that allows you to match a helper based on your job criteria. </p>
                    </div>

                </div>
                <div class="row">
                    @foreach($app as $applicant)
                        <div class="col s12 m6 l4">
                            <div class="row z-depth-1 grey lighten-5 profile">
                                <div class="col s12">
                                    &nbsp;
                                </div>
                                <div class="col s12 m7 l6">
                                    <img height="100px" width=130px" src="{{ asset('public/uploads/profile/'.(($applicant['profilepic']) != null ? $applicant['profilepic'] :'facebook.jpg' )) }}" class="materialboxed responsive-img rectangle" alt="sample"/>
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">{{ $applicant['fname'] ." ".$applicant['lname'] }}</span>
                                    <p>Helpers</p>
                                    <p><span>Location </span></p>
                                    <div class="divider"></div>
                                    <a href="hire.php"><button class="btn light-blue lighten-1 col sm s12" type="submit" name="action"> View Profile</button></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                    <div class="card-content">
                        <ul class="pagination">
                            {{ $app->links() }}
                        </ul>
                    </div>
            </section>
        </div>
    </div>
@stop

@section('js')
    @parent

@stop