@extends('applicant.layout')
@section('title')
  <title> MaidFinder - Applicant</title>
@stop
@section('content')
    <section id="content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col s12 m12 l12">
                    <div class="row">
                        <div class="col s12 m12 l12 ">
                            <div class="card-panel ">
                                <h4>Update Profile</h4>

                                <div class="row grey lighten-1">
                                    <form class="col s12" action="applicant-update" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text" name="fname" placeholder="Firstname" value="{{ (isset($app['fname']) ? $app['fname'] : '') }}">
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" name="lname" placeholder="Lastname" value="{{ (isset($app['lname']) ? $app['lname'] : '') }}">
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="address" type="text" name="address" placeholder="Address">
                                            </div>
                                            <div class="input-field col s7">
                                                <input id="contact" type="text"  name="contact" placeholder="Contact #" value="{{ (isset($app['contactno']) ? $app['contactno'] : '') }}"/>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input id="email5" type="text" name="religion" placeholder="Religion" value="{{ (isset($app['religion']) ? $app['religion'] : '') }}">
                                                </div>
                                                <div class="input-field col s6">
                                                    <input id="email5" type="text" name="nationality" placeholder="Nationality" value="{{ (isset($app['nationality']) ? $app['nationality'] : '') }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s5">
                                                    <select name="status">
                                                        <option value="" disabled selected>Status</option>
                                                        <option value="single">Single</option>
                                                        <option value="2">Married</option>
                                                        <option value="3">Widowed</option>
                                                        <option value="4">Separated</option>
                                                    </select>
                                                    <label>Civil Status</label>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <label for="dob">Date Of Birth</label>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div>
                                                <div class="row">
                                                    <div class="input-field col s5">
                                                        <select name="gender">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                        <label>Gender</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s6">
                                                <img height="150px" width="150px" class="square responsive-img" src="{{ asset('public/uploads/profile/'.(isset($app['profilepic']) ? $app['profilepic'] : 'facebook.jpg')) }} " />
                                            </div>
                                            <div class=" input-field col s2 m8 ">
                                                    <span>Profile picture</span>
                                                    <input type="file" name="picture" value="{{ asset('public/uploads/profile/'.(isset($app['profilepic']) ? $app['profilepic'] : 'facebook.jpg')) }} "/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="message5" name="pitch"  class="materialize-textarea" length="120">{{ (isset($app['pitch']) ? $app['pitch'] : '') }}</textarea>
                                                <label for="message">Say something about you!</label>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                                        <i class="mdi-content-send right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
    </section>
@stop
@section('js')
    @parent
    <script>
        (function() {

        })();
    </script>
@stop
