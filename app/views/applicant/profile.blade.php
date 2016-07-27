
@extends('applicant.layout')
@section('title')
    <title>Profile-MaidFinderPH</title>
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
                                    <img src="{{ asset('public/uploads/profile/'.(isset($app['profilepic']) ? $app['profilepic'] : 'facebook.jpg')) }}" alt="Profile image">
                                </div>
                                <div class="card-content">
                                    <p>
                                        <a style="text-decoration: underline;" href="applicant-profile">{{ $app['fname'] ." ". $app['lname'] }}</a>
                                    </p>
                                </div>
                                <div class="card-action">
                                    <a href="applicant-update">Update info</a>
                                </div>
                            </div>
                            <!-- Profile About  -->

                            <!-- Profile About Details  -->
                            <ul id="profile-page-about-details" class="collection z-depth-1">
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i>Subscription</div>
                                        <div class="col s7 grey-text text-darken-4 right-align"></div>
                                    </div>
                                </li>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> Skills</div>
                                        <div class="col s7 grey-text text-darken-4 right-align">HTML, CSS</div>
                                    </div>
                                </li>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Lives in</div>
                                        <div class="col s7 grey-text text-darken-4 right-align">NY, USA</div>
                                    </div>
                                </li>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i> Birth date</div>
                                        <div class="col s7 grey-text text-darken-4 right-align">18th June, 1991</div>
                                    </div>
                                </li>
                            </ul>
                            <!--/ Profile About Details  -->

                            <!-- Profile About  -->

                        </div>
                        <!-- profile-page-sidebar-->

                        <!-- profile-page-wall -->
                        <div id="profile-page-wall" class="col s12 m8">


                            <!-- profile-page-wall-posts -->
                            <div id="profile-page-wall-posts"class="row">
                                <div class="col s12">
                                    <!-- card-->
                                    <div id="profile-page-wall-post" class="card">
                                        <div class="card-profile-title">
                                            <div class="row">
                                                <div class="col s1">
                                                    <img src="{{ asset('public/uploads/profile/'.(isset($app['profilepic']) ? $app['profilepic'] : 'facebook.jpg')) }}" alt="" class="circle responsive-img valign profile-post-uer-image">
                                                </div>
                                                <div class="col s10">
                                                    <p class="grey-text text-darken-4 margin">{{ $app['fname'] ." ". $app['lname'] }}</p>
                                                    <span class="grey-text text-darken-1 ultra-small">Updated on  -  {{ $app['updated_at'] }}</span>
                                                </div>
                                                <div class="col s1 right-align">
                                                    <i class="mdi-navigation-expand-more"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>
                                                        {{ $app['pitch'] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <p><span>Pitch : </span><strong>{{ $app['pitch'] }}</strong></p>
                                            <p><span>Phone number : </span><strong>{{$app['contactno'] }}</strong></p>
                                            <p><span>Email address : </span><strong>{{ $app['email'] }}</strong></p>
                                            <p><span>Birthdate : </span><strong>{{ $app['birth'] }}</strong></p>
                                            <p><span>Adress : </span><strong>{{ $app['address'] }}</strong></p>
                                            <p><span>Civil status : </span><strong>{{ $app['civilstatus'] }}</strong></p>
                                            <p><span>Nationality : </span><strong>{{ $app['nationality'] }}</strong></p>
                                        </div>

                                    </div>
                                    <!--end of card -->
                                    <!--card -->
                                    <div id="profile-page-wall-post" class="card">
                                        <div class="card-profile-title">
                                            <div class="row">
                                                <h4>Skills</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <p><span>Pitch : </span><strong>{{ $app['pitch'] }}</strong></p>
                                            <p><span>Phone number : </span><strong>{{$app['contactno'] }}</strong></p>
                                            <p><span>Email address : </span><strong>{{ $app['email'] }}</strong></p>
                                            <p><span>Birthdate : </span><strong>{{ $app['birth'] }}</strong></p>
                                            <p><span>Adress : </span><strong>{{ $app['address'] }}</strong></p>
                                            <p><span>Civil status : </span><strong>{{ $app['civilstatus'] }}</strong></p>
                                            <p><span>Nationality : </span><strong>{{ $app['nationality'] }}</strong></p>
                                        </div>

                                    </div>
                                    <!--end of card -->
                                    <!--card -->
                                    <div id="profile-page-wall-post" class="card">
                                        <div class="card-profile-title">
                                            <div class="row">
                                                <h4>Experiences</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <p><span>Pitch : </span><strong>{{ $app['pitch'] }}</strong></p>
                                            <p><span>Phone number : </span><strong>{{$app['contactno'] }}</strong></p>
                                            <p><span>Email address : </span><strong>{{ $app['email'] }}</strong></p>
                                            <p><span>Birthdate : </span><strong>{{ $app['birth'] }}</strong></p>
                                            <p><span>Adress : </span><strong>{{ $app['address'] }}</strong></p>
                                            <p><span>Civil status : </span><strong>{{ $app['civilstatus'] }}</strong></p>
                                            <p><span>Nationality : </span><strong>{{ $app['nationality'] }}</strong></p>
                                        </div>

                                    </div>
                                    <!--end of card -->
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
