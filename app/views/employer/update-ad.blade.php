
@extends('employer.layout')

@section('content')
    <div class="row">
        <div class="card-panel transparent">
            <form action="{{ asset('update/ad') }}" method="POST">
                <h4>Update ad</h4>
                @if(Session::has('message'))
                    <div class="card-panel light-green lighten-3">
                        <span class="center-align">
                            {{ Session::get('message') }}
                        </span>
                    </div>
                @endif
                <div class="row">
                    <table>
                        <tr>
                            <td><label for="jobtype">Position</label></td>
                            <td>
                                <select class="browser-default" name="jobtype" id="position">
                                  @foreach($jobtype as $item)
                                      <option value="{{ $item->jobtypeid }}" {{ $item->jobtypeid == $ads->jobtypeid ? 'selected' : '' }}>{{ $item->description }}</option>
                                  @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="location">Location</label> </td>
                            <td>
                                <select class="browser-default" name="location" id="location">
                                  @foreach($location as $loc)
                                      <option value="{{ $loc->regionid }}" {{ $loc->regionid == $ads->regionid ? 'selected' : ''}}>{{ $loc->location }}</option>
                                  @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="edlevel">Education level</label> </td>
                            <td>
                                <?php $edlevel = array("Elementary", "High School", "College graduate"); ?>
                                <select name="edlevel" class="browser-default">
                                  @foreach($edlevel as $key => $value)
                                      <option value="{{ $key }}" {{ $key == $ads->edlevel ? 'selected' : ''}}>{{ $value }}</option>
                                  @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="contractyears">Years of contract</label> </td>
                            <td>
                                <select name="contractyears" class="browser-default">
                                    @for($i = 1; $i <= 20; $i++)
                                        <option value="{{ $i }}" {{ $i == $ads->contractyears ? 'selected' : ''}}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="gender">Helper gender</label> </td>
                            <td>
                                <input type="radio" id="test1" {{ $ads->gender == "Female" ? 'checked' : ''}} name="gender" value="Female"/>
                                <label for="test1">Female</label>
                                <input type="radio" id="test2" name="gender" {{ $ads->gender == "Male" ? 'checked' : ''}} value="Male"/>
                                <label for="test2">Male</label>
                            </td>
                        </tr>
                        <tr>
                            <?php
                              $month = array("January", "Febuary", "March", "April", "May", "June", "July", "August", "September","October", "November", "December");
                              $date = explode('-', $ads->startdate);
                            ?>
                            <td><label for="startdate"> Start date <strong class="black-text"> ({{ $month[$date[1]]}}/{{ $date[2] }}/{{$date[0]}}) </strong></label></td>
                            <td>
                                <select class="browser-default" name="year">
                                    <?php $count = 1 ?>
                                    @for($i = date('Y');20 > $count++; $i++)
                                        <option value="{{ $i }}" {{ $date[0] == $i ? 'selected' : ''}}> {{ $i }}</option>
                                    @endfor
                                </select>
                                <select class="browser-default" name="month">
                                    @foreach($month as $key => $value)
                                        <option value="{{ $key }}" {{ $date[1] == $key ? 'selected' : ''}}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                <select name="day"  class="browser-default">

                                    @for($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}" {{ $date[2] == $i ? 'selected' :'' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="capacity">Capacity</label> </td>
                            <td>
                                <select class="browser-default" name="capacity">
                                    <option value="Full Time" {{ $ads->capacity == "Full Time" ? 'selected' : ''}}>Full Time</option>
                                    <option value="Part Time" {{ $ads->capacity == "Part Time" ? 'selected' : ''}}>Part Time</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="dayof">Dayoff</label> </td>
                            <td>
                                <?php $days = array('Monday', 'Tuesday', 'Wednesday','Thursday', 'Friday','Saturday','Sunday'); ?>
                                <select name="dayof" class="browser-default">
                                    @foreach($days as $key => $value)
                                        <option value="{{ $key }}" {{ $ads->dayof == $key ? 'selected' : ''}}>{{ $value }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="salary">Salary (pesos)</label> </td>
                            <td><input  class="browser-default" type="text" value="{{ $ads->salary}}" name="salary" /> </td>
                        </tr>
                        <tr>
                            <td><label for="pitch">Say something about you job ad</label> </td>
                            <td>
                                <textarea id="textarea1" rows="7" name="pitch" class="materialize-textarea">{{ $ads->pitch }}</textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <h4>Other house duties</h4>
                    <table border="0">
                        <tr>
                            <td>
                                <input type="checkbox" id="test5" {{ $duties->cooking != null ? 'checked' :'' }}  name="cooking" value="Cooking"/>
                                <label for="test5">Cooking</label>
                            </td>
                            <td>
                                <input type="checkbox" id="test6" {{ $duties->laundry != null ? 'checked' :'' }} name="laundry"  value="Laundry"/>
                                <label for="test6">Laundry</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="test7" name="gardening" {{ $duties->gardening != null ? 'checked' :'' }} value="Gardening"/>
                                <label for="test7">Gardening</label>
                            </td>
                            <td>
                                <input type="checkbox" id="test8" name="grocery" {{ $duties->grocery != null ? 'checked' :'' }}  value="Grocery"/>
                                <label for="test8">Grocery</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="test9" name="cleaning" {{ $duties->cleaning != null ? 'checked' :'' }}  value="House Cleaning"/>
                                <label for="test9">House cleaning</label>
                            </td>
                            <td>
                                <input type="checkbox" id="test10" name="tutoring" {{  $duties->tuturing != null ? 'checked' :'' }}  value="Tutoring"/>
                                <label for="test10">Tutoring</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="other">Other description</label> </td>
                            <td>
                                <textarea id="textarea1" name="other" class="materialize-textarea">{{ $duties->other }}</textarea>
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
    @parent
    <script>
        $(document).ready(function() {

        });
    </script>
@stop
