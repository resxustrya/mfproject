

@extends('employer.layout')
@section('css')

@stop

@section('content')

    @if(count($ads) > 0)

    @else
        <div class="row">
            <div class="card-panel">
                <h6 class="center-align">Your ads info</h6>
                <div class="center-align"><a href="{{ asset('create/ad') }}" class="btn cyan lighten-3">Create ad now</a></div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="card-panel">
            <form action="{{ asset('helpers') }}" method="get">
                <div class="row">
                    <div class="col s12 m3 l6">
                        <?php $location = Regions::all(); ?>
                        <select name="location" class="browser-default">
                            @foreach($location as $loc)
                                <option value="{{ $loc['regionid'] }}">{{ $loc['location'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col s12 m3 l6">
                        <?php $jobtype = JobTypes::all(); ?>
                        <select name="jobtype" class="browser-default">
                            @foreach($jobtype as $type)
                                <option value="{{ $type['jobtypeid'] }}">{{ $type['description'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m3 l12 center-align">
                        <div class="center-align"><input type="submit" href="{{ asset('helpers') }}" class="btn cyan lighten-3 col s12 l12 m12" value="Find a match" /> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="divider"></div>
                    <div><br /></div>
                    @foreach($app as $applicant)
                        <div class="col s12 m6 l12">
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
                <div class="row">
                    <ul class="pagination center-align">
                        {{ $app->links() }}
                    </ul>
                </div>
            </form>
        </div>
    </div>
@stop

@section('js')

@stop