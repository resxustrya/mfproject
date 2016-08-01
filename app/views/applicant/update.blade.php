@extends('employer.layout')

@section('content')
    <div class="row">
        <div class="card-panel ">
            <h4>Update profile</h4>
            <div class="row">
                <form class="" method="POST" action="{{ asset('employer/update') }}">
                    <table>
                        <tr>
                            <td><label for="fname">First name</label> </td>
                            <td><input type="text" name="fname" /> </td>
                        </tr>
                        <tr>
                            <td><label for="lname">Last name</label> </td>
                            <td><input type="text" name="lname" /> </td>
                        </tr>
                        <tr>
                            <td><label for="location">Location</label></td>
                            <td>
                                <?php $location = Regions::all(); ?>
                                <select name="location" class="browser-default">
                                    @foreach($location as $loc)
                                        <option value="{{ $loc['regionid'] }}">{{ $loc['location'] }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="Address">Address</label> </td>
                            <td><input type="text" name="address" /> </td>
                        </tr>
                        <tr>
                            <td><label for="gender">Gender</label> </td>
                            <td>
                                <select name="gender" class="browser-default">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="nationality">Nationality</label> </td>
                            <td><input type="text" name="nationality" /> </td>
                        </tr>
                        <tr>
                            <td><label for="religion">Religion</label></td>
                            <td>
                                <select name="religion" class="browser-default">
                                    <option value="Roman Catholic">Roman Catholic</option>
                                    <option value="Muslim">Muslim</option>
                                    <option value="Christian">Christian</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="civilstatus">Civil status</label> </td>
                            <td>
                                <select name="civilstatus" class="browser-default">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Separated">Separated</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="profilepic">Profile</label></td>
                            <td>
                                <img height="100px" width="140px" src="{{ asset('public/uploads/profile/'.(($emp['profilepic']) != null ? $emp['profilepic'] :'facebook.jpg' )) }}" />
                                <input type="file" name="profilepic" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="contactno">Contact no</label> </td>
                            <td><input type="text" name="contactno" /> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <textarea id="textarea1" name="pitch" class="materialize-textarea" length="120"></textarea>
                                <label for="textarea1">Say something about your self</label>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td dir="rtl"><input type="submit" class="cyan lighten-3 col s12 m5 l5 btn-large right-align" value="Save" name="submit" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script crossorigin="anonymous">
        $(document).ready(function() {
            $('select').material_select();
        });
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    </script>
@stop