
@extends('employer.layout')

@section('content')
    <div class="row">
        <div class="card-panel ">
            <form action="{{ asset('create/ad') }}" method="POST">
                <h4>Create new ad</h4>
                <div class="row">
                    <table>
                        <tr>
                            <td><label for="jobtype">Position</label></td>
                            <td>
                                <select class="browser-default" name="jobtype" id="position">
                                    @foreach($jobtype as $item)
                                        <option value="{{ $item['description'] }}">{{ $item['description'] }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="location">Location</label> </td>
                            <td>
                                <select class="browser-default" name="location" id="location">
                                    @foreach($location as $loc)
                                        <option value="{{ $loc['location'] }}">{{ $loc['location'] }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="edlevel">Education level</label> </td>
                            <td>
                                <select name="edlevel" class="browser-default">
                                    <option value="1">Elementary</option>
                                    <option value="2">High School</option>
                                    <option value="3">College</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="contractyears">Years of contract</label> </td>
                            <td>
                                <select name="contractyears" class="browser-default">
                                    @for($i = 1; $i <= 20; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="gender">Helper gender</label> </td>
                            <td>
                                <input type="radio" id="test1" checked name="gender" value="Female"/>
                                <label for="test1">Female</label>
                                <input type="radio" id="test2" name="gender" value="Male"/>
                                <label for="test2">Male</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="startdate"> Start date <strong class="black-text">(yyyy-m-d)</strong></label></td>
                            <td>
                                <select class="browser-default" name="year">

                                    <?php $count = 1 ?>
                                    @for($i = date('Y');20 > $count++; $i++)
                                        <option value="{{ $i }}"> {{ $i }}</option>
                                    @endfor
                                </select>
                                <select class="browser-default" name="month">
                                    <?php $month = array("January", "Febuary", "March", "April", "May", "June", "July", "August", "September","October", "November", "December"); ?>

                                    @foreach($month as $m)
                                        <option value="{{ $m }}">{{ $m }}</option>
                                    @endforeach
                                </select>
                                <select name="day"  class="browser-default">

                                    @for($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="capacity">Capacity</label> </td>
                            <td>
                                <select class="browser-default" name="capacity">
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="dayof">Dayoff</label> </td>
                            <td>
                                <?php $days = array('Monday', 'Tuesday', 'Wednesday','Thursday', 'Friday','Saturday','Sunday'); ?>
                                <select name="dayof" class="browser-default">
                                    @foreach($days as $day)
                                        <option value="{{ $day }}">{{ $day }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="salary">Salary (pesos)</label> </td>
                            <td><input  class="browser-default" type="text" name="salary" /> </td>
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
                    <h4>Other house duties</h4>
                   <table border="0">
                       <tr>
                           <td>
                               <input type="checkbox" id="test5" name="cooking" value="Cooking"/>
                               <label for="test5">Cooking</label>
                           </td>
                           <td>
                               <input type="checkbox" id="test6" name="laundry" value="Laundry"/>
                               <label for="test6">Laundry</label>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <input type="checkbox" id="test7" name="gardening" value="gardening"/>
                               <label for="test7">Gardening</label>
                           </td>
                           <td>
                               <input type="checkbox" id="test8" name="grocery" value="Grocery"/>
                               <label for="test8">Grocery</label>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <input type="checkbox" id="test9" name="cleaning" value="House Cleaning"/>
                               <label for="test9">House cleaning</label>
                           </td>
                           <td>
                               <input type="checkbox" id="test10" name="tutoring" value="Tutoring"/>
                               <label for="test10">Tutoring</label>
                           </td>
                       </tr>
                       <tr>
                           <td><label for="other">Other description</label> </td>
                           <td>
                               <textarea id="textarea1" name="other" class="materialize-textarea"></textarea>
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
