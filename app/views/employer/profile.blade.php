
@extends('employer.layout')
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
                            <!-- Profile About  -->

                            <!-- Profile About Details  -->
                            <ul id="profile-page-about-details" class="collection z-depth-1">
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1">Subscription</div>
                                        <div class="col s7 grey-text text-darken-4 right-align">Not yet subscribe</div>
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
                                    <!-- medium -->
                                    <div id="profile-page-wall-post" class="card">
                                        <div class="card-profile-title">
                                            <div class="row">
                                                <div class="col s1">
                                                    <img src="{{ asset('public/uploads/profile/'.(isset($emp['profilepic']) ? $emp['profilepic'] : 'facebook.jpg')) }}" alt="" class="circle responsive-img valign profile-post-uer-image">
                                                </div>
                                                <div class="col s10">
                                                    <p class="grey-text text-darken-4 margin">{{ $emp['fname'] ." ". $emp['lname'] }}</p>
                                                    <span class="grey-text text-darken-1 ultra-small">Updated on  -  {{ $emp['updated_at'] }}</span>
                                                </div>
                                                <div class="col s1 right-align">
                                                    <i class="mdi-navigation-expand-more"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>
                                                        {{ $emp['pitch'] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <p><span>Pitch : </span><strong>{{ $emp['pitch'] }}</strong></p>
                                            <p><span>Phone number : </span><strong>{{$emp['contactno'] }}</strong></p>
                                            <p><span>Email address : </span><strong>{{ $emp['email'] }}</strong></p>
                                            <p><span>Birthdate : </span><strong>{{ $emp['birth'] }}</strong></p>
                                            <p><span>Adress : </span><strong>{{ $emp['address'] }}</strong></p>
                                            <p><span>Civil status : </span><strong>{{ $emp['civilstatus'] }}</strong></p>
                                            <p><span>Nationality : </span><strong>{{ $emp['nationality'] }}</strong></p>
                                        </div>
                                    </div>
                                    <!--card-->
                                    <!-- medium -->
                                    <div id="profile-page-wall-post" class="card">
                                        <div class="card-profile-title">
                                            <div class="row">
                                                <h4>Jobs Ads</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <p><span>Pitch : </span><strong>{{ $emp['pitch'] }}</strong></p>
                                            <p><span>Phone number : </span><strong>{{$emp['contactno'] }}</strong></p>
                                            <p><span>Email address : </span><strong>{{ $emp['email'] }}</strong></p>
                                            <p><span>Birthdate : </span><strong>{{ $emp['birth'] }}</strong></p>
                                            <p><span>Adress : </span><strong>{{ $emp['address'] }}</strong></p>
                                            <p><span>Civil status : </span><strong>{{ $emp['civilstatus'] }}</strong></p>
                                            <p><span>Nationality : </span><strong>{{ $emp['nationality'] }}</strong></p>
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
