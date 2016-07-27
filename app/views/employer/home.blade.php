
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

                    <!-- profile-page-content -->
                    <div id="profile-page-content" class="row">
                        <!-- profile-page-sidebar-->
                        <div id="profile-page-sidebar" class="col s12 m4">
                            <!-- Profile About  -->
                            <div class="row z-depth-1 grey lighten-5">
                                <div class="col s12">
                                    &nbsp;
                                </div>
                                <div class="col s6">
                                    <img height="100px" width=130px" src="{{ asset('public/uploads/profile/'.(isset($emp['profilepic']) ? $emp['profilepic'] : 'facebook.jpg')) }}" class="materialboxed" alt="sample"/>
                                </div>
                                <div class="col s6">
                                    <p><a href="employer-profile">{{ $emp['fname'] ." ". $emp['lname'] }}</a>
                                        <br />
                                        <span style="font-size: small">{{ $emp['address'] }}</span>
                                    </p>
                                </div>
                            </div>
                            <!-- Profile About  -->

                            <!-- Profile About Details  -->
                            <ul id="profile-page-about-details" class="collection z-depth-1">
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i>Subscription</div>
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


                                    @foreach($app as $applicant)
                                        <div id="profile-card" class="card hoverable">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <img class="activator" src="{{ asset('public/uploads/profile/'.(isset($applicant['profilepic']) ? $applicant['profilepic'] : 'facebook.jpg')) }}" alt="user background">
                                            </div>
                                            <div class="card-content">
                                                <img src="{{ asset('public/uploads/profile/'.(isset($applicant['profilepic']) ? $applicant['profilepic'] : 'facebook.jpg')) }}" alt="" class="circle responsive-img activator card-profile-image">
                                                <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                                    <i class="mdi-action-account-circle"></i>
                                                </a>

                                                <span class="card-title activator grey-text text-darken-4">{{ $applicant['fname'] ." ".$applicant['lname'] }}</span>
                                                <p>Nanny</p>
                                                <p>{{ $applicant['contactno'] }}</p>
                                                <p>{{ $applicant['address'] }}</p>
                                                <button class="btn" type="submit" name="action">View profile

                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!--end of profile contents-->
                                </div>
                            <!--/ profile-page-wall-posts -->
                                <ul class="pagination">
                                    <?php echo $app->links(); ?>
                                </ul>
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
