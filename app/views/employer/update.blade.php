@extends('employer.layout')

@section('content')
    <div class="row">
        <div class="card-panel ">
            <form action="{{ asset('employer/update') }}" method="POST">
                <h4>Update profile</h4>
                <div class="row">
                    <table>
                        <tr>
                            <td><label for="fname">First name</label> </td>
                            <td>
                                <input type="text" name="fname" value="{{ isset($emp['fname']) ? $emp['fname'] : '' }}" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="lname">Last name</label> </td>
                            <td>
                               <input type="text" name="lname" value="{{ isset($emp['lname']) ? $emp['lname'] : '' }}" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="gender">Helper gender</label> </td>
                            <td>
                                <input type="radio" id="test1"  name="gender" {{ ($emp['gender'] == 'Female')? 'checked' : '' }} value="Female"/>
                                <label for="test1">Female</label>
                                <input type="radio" id="test2" name="gender" {{ ($emp['gender'] == 'Male' )? 'checked' : '' }} value="Male"/>
                                <label for="test2">Male</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="startdate"> Birth date <strong class="black-text">({{ $emp['bdate']}})</strong></label></td>
                            <td>
                                <select class="browser-default" name="year">
                                    <?php $date = explode('/', $emp['bdate']); ?>
                                    <?php $count = 1 ?>
                                    @for($i = date('Y');50 > $count++; $i--)
                                        <option {{ $date[2] == $i ? 'selected' : ''}} value="{{ $i }}"> {{ $i }}</option>
                                    @endfor
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
                                        <option value="{{ $emp['location'] }} {{ ( $emp['location'] == $loc ? 'selected' :'') }}">{{ $loc['location'] }}</option>
                                     @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="address">Address</label> </td>
                            <td><input type="text" name="address" value="{{ isset($emp['address']) ? $emp['address'] :'' }}"> </td>
                        </tr>
                        <tr>
                            <td><label for="nationality">Nationality</label> </td>
                            <td><input  class="browser-default" type="text" name="nationality" value="{{ isset($emp['nationality']) ? $emp['nationality'] : '' }}" /> </td>
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
    <script crossorigin="anonymous">
        $(document).ready(function() {
            $('select').material_select();
        });

    </script>
@stop
