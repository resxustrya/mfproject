
@extends('employer.layout')
@section('title')
    <title>MaidFinderPH - Jobads</title>
@stop
@section('content')
    <section id="content">
        <div class="container-fluid">
            <div class="row ">
                <div id="profile-page" class="section">
                    <!-- profile-page-header -->

                    <!--/ profile-page-header -->

                    <!-- profile-page-content -->
                    <div id="profile-page-content" class="row">
                        <!-- profile-page-sidebar-->
                        <div id="profile-page-sidebar" class="col s12 m4">
                            <!-- Profile About  -->
                            <div class="card small">
                                <div class="card-image">
                                    <img src="{{ asset('public/uploads/profile/'.(isset($emp['profilepic']) ? $emp['profilepic'] : 'facebook.jpg')) }}" alt="Profile image">
                                    <a href="employer-profile"><span class="card-title">{{ $emp['fname'] ." ".$emp['lname'] }}</span></a>
                                </div>
                                <div class="card-content">
                                    <p>{{ $emp['pitch'] }}</p>
                                </div>
                                <div class="card-action">
                                    <a href="employer-update">Update info</a>
                                </div>
                            </div>
                        </div>
                        <!-- profile-page-sidebar-->

                        <!-- profile-page-wall -->
                        <div id="profile-page-wall" class="col s12 m8">


                            <!-- profile-page-wall-posts -->
                            <div id="profile-page-wall-posts"class="row">
                                <div class="col s12">

                                    <!-- medium -->
                                    <div id="profile-page-wall-post" class="card">
                                        <div class="card-profile-title">
                                            <div class="row">
                                                <h4>Jobs Ads</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            @if($emp)
                                                <p><span>No job ads yet</span></p>
                                                <p><a href="create-ads">Create job ads</a></p>
                                             @else
                                                <table border="0">

                                                </table>
                                            @endif
                                        </div>
                                        <div class="card-content">

                                        </div>
                                    </div>
                                    <!--card-->
                                </div>
                            </div>
                            <!--/ profile-page-wall-posts -->
                        </div>
                        <!--/ profile-page-wall -->
                    </div>
                </div>



            </div>

        </div>
        </div>

    </section>
    <!-- END CONTENT -->
@stop
@section('js')

@stop
