@extends('applicant.layout')

@section('content')
    <div class="row">
        <div class="card-panel ">
            <form action="{{ asset('applicant/update') }}" method="POST" enctype="multipart/form-data">
                {{ Form::token() }}
                <h4>Update profile</h4>
                <div class="row">
                    <div class="col s12 m6 l6 right">
                        <img id='picture' height="300px" width="300px" class="materialboxed square responsive-img right-align" src="{{ asset('public/uploads/profile/'.(($app['profilepic']) != null ? $app['profilepic'] :'facebook.jpg' )) }}" />
                        <input type="file" name="profilepic">
                    </div>
                </div>
                <div class="row">
                    <table>
                        <tr>
                            <td><label for="fname">First name</label> </td>
                            <td>
                                <input type="text" name="fname" value="{{ isset($app['fname']) ? $app['fname'] : '' }}" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="lname">Last name</label> </td>
                            <td>
                                <input type="text" name="lname" value="{{ isset($app['lname']) ? $app['lname'] : '' }}" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="gender">Helper gender</label> </td>
                            <td>
                                <input type="radio" id="test1"  name="gender" {{ ($app['gender'] == 'Female')? 'checked' : '' }} value="Female"/>
                                <label for="test1">Female</label>
                                <input type="radio" id="test2" name="gender" {{ ($app['gender'] == 'Male' )? 'checked' : '' }} value="Male"/>
                                <label for="test2">Male</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="startdate"> Birth date <strong class="black-text">({{ $app['bdate']}})</strong></label></td>
                            <td>
                                <select class="browser-default" name="year">

                                    <?php
                                    $count = 1;
                                    $date = null;
                                    ?>
                                    @if($app['bdate'] != null)
                                        <?php $date = explode('/', $app['bdate']); ?>
                                        @for($i = date('Y');50 > $count++; $i--)
                                            <option {{ $date[2] == $i ? 'selected' : ''}} value="{{ $i }}"> {{ $i }}</option>
                                        @endfor
                                    @else
                                        @for($i = date('Y');50 > $count++; $i--)
                                            <option value="{{ $i }}"> {{ $i }}</option>
                                        @endfor
                                    @endif
                                </select>
                                <select class="browser-default" name="month">
                                    <?php $month = array("January", "Febuary", "March", "April", "May", "June", "July", "August", "September","October", "November", "December"); ?>
                                    @foreach($month as $m)
                                        <option {{ $date[0] == $m ? 'selected' : ''}} value="{{ $m }}">{{ $m }}</option>
                                    @endforeach
                                </select>
                                <select name="day"  class="browser-default">
                                    @for($i = 1; $i <= 31; $i++)
                                        <option {{ $date[1] == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="location">Location</label> </td>
                            <td>
                                <select name="location" class="browser-default">
                                    @foreach($location as $loc)
                                        <option value="{{ $app['location'] }} {{ ( $app['location'] == $loc ? 'selected' :'') }}">{{ $loc['location'] }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="address">Address</label> </td>
                            <td><input type="text" name="address" value="{{ isset($app['address']) ? $app['address'] :'' }}"> </td>
                        </tr>
                        <tr>
                            <td><label for="nationality">Nationality</label> </td>
                            <td><input  class="browser-default" type="text" name="nationality" value="{{ isset($app['nationality']) ? $app['nationality'] : '' }}" /> </td>
                        </tr>
                        <tr>
                            <td><label for="pitch">Say something about you job ad</label> </td>
                            <td>
                                <textarea id="textarea1" rows="7" name="pitch" class="materialize-textarea">

                                </textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <p>
                        For your account identity verifaction and employers security, barangay, police or NBI clearance image is required. Otherwise our admins will not approve your account.
                        You must upload at least one specified image for your account verification.
                    </p>
                    <div class="col s12 m6 l4">
                        <h6>Barangay clearance</h6>
                        <img id='picture' height="300px" width="300px" class="materialboxed square responsive-img right-align" src="{{ asset('public/uploads/profile/'.(($app['profilepic']) != null ? $app['profilepic'] :'facebook.jpg' )) }}" />
                        <input type="file" name="barangay">
                    </div>
                    <div class="col s12 m6 l4">
                        <h6>Police clearance</h6>
                        <img id='picture' height="300px" width="300px" class="materialboxed square responsive-img right-align" src="{{ asset('public/uploads/profile/'.(($app['profilepic']) != null ? $app['profilepic'] :'facebook.jpg' )) }}" />
                        <input type="file" name="police">
                    </div>
                    <div class="col s12 m6 l4">
                        <h6>NBI clearance</h6>
                        <img id='picture' height="300px" width="300px" class="materialboxed square responsive-img right-align" src="{{ asset('public/uploads/profile/'.(($app['profilepic']) != null ? $app['profilepic'] :'facebook.jpg' )) }}" />
                        <input type="file" name="NBI">
                    </div>
                </div>
                <div class="row">
                    <table>
                        <tr>
                            <td>&nbsp;</td>
                            <td dir="rtl"><input type="submit" class="cyan lighten-3 col s12 m5 l5 btn-large right-align" value="Save" name="submit" /></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
@stop

@section('js')
    @parent
    <script crossorigin="anonymous">
        $(document).ready(function() {

        });

    </script>
@stop
