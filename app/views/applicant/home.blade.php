
@extends('applicant.layout')
@section('title')
    <title>MaidFinderPH - Home</title>
@stop
@section('content')
    <section id="content">
        <div class="container-fluid">
            <div class="row ">
                <div id="profile-page" class="section">
                    <!-- profile-page-header -->

                    <!-- profile-page-content -->
                    <div id="profile-page-content" class="row">
                        <!-- profile-page-sidebar-->
                        <div id="profile-page-sidebar" class="col s12 m4">
                            <!-- Profile About  -->
                            <div class="card small">
                                <div class="card-image">
                                    <img src="{{ asset('public/uploads/profile/'.(isset($app['profilepic']) ? $app['profilepic'] : 'facebook.jpg')) }}" />
                                </div>
                                <div class="card-content">
                                    <p>
                                        <a style="text-decoration: underline;" href="applicant-profile">{{ $app['fname'] ." ". $app['lname'] }}</a>
                                    </p>

                                </div>
                                <div class="card-action">
                                    <p>
                                        <a href="applicant-update">Update info</a>
                                    </p>
                                </div>
                            </div>
                            <!-- Profile About  -->

                            <!-- Profile About Details  -->
                            <ul id="profile-page-about-details" class="collection z-depth-1">
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i> Project</div>
                                        <div class="col s7 grey-text text-darken-4 right-align">ABC Name</div>
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
                        </div>
                        <!-- profile-page-sidebar-->

                        <!-- profile-page-wall -->
                        <div id="profile-page-wall" class="col s12 m8">
                            <!-- profile-page-wall-share -->
                            <div id="profile-page-wall-share" class="row">
                                <div class="col s12">
                                    <ul class="tabs tab-profile z-depth-1 grey lighten-5">
                                        <li class="tab col s3"><a class="gray-text" href="recommendations">Recommendations</a>
                                        </li>
                                        <li class="tab col s3"><a class="gray-text " href="#AddPhotos">Interviews</a>
                                        </li>
                                        <li class="tab col s3"><a class="gray-text" href="#CreateAlbum">Suggestions</a>
                                        </li>
                                    </ul>

                            <!-- profile-page-wall-posts -->
                            <div id="profile-page-wall-posts"class="row">
                                <div class="col s12">



                                    <!-- profile contents -->
                                    <div id="profile-page-wall-post" class="card">
                                        <div class="card-profile-title">
                                            <div class="row">
                                                <div class="col s1">
                                                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-post-uer-image">
                                                </div>
                                                <div class="col s10">
                                                    <p class="grey-text text-darken-4 margin">John Doe</p>
                                                    <span class="grey-text text-darken-1 ultra-small">Shared publicly  -  26 Jun 2015</span>
                                                </div>
                                                <div class="col s1 right-align">
                                                    <i class="mdi-navigation-expand-more"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>.  I require little more information to use effectively.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-image profile-medium">
                                            <div class="video-container no-controls">
                                                <iframe width="640" height="360" src="https://www.youtube.com/embed/10r9ozshGVE" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <span class="card-title">Card Title</span>
                                        </div>
                                        <div class="card-content">
                                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                        </div>
                                        <div class="card-action row">
                                            <div class="col s4 card-action-share">
                                                <a href="#">Like</a>
                                                <a href="#">Share</a>
                                            </div>

                                            <div class="input-field col s8 margin">
                                                <input id="profile-comments" type="text" class="validate margin">
                                                <label for="profile-comments" class="">Comments</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end of profile contents-->
                                </div>
                            <!--/ profile-page-wall-posts -->
                        </div>
                        <!--/ profile-page-wall -->

                    </div>
                    <!--end of row -->
                </div>
                <!-- end of profile page-->
            </div>
             <!--end of row -->
        </div>
        <!--end of container-fluid -->
    </section>
    <!-- END CONTENT -->
@stop
@section('js')

@stop