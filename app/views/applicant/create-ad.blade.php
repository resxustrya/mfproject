
@extends('employer.layout')

@section('content')
    <div class="row">
        <div class="card-panel ">
            <h4>Create new ad</h4>
            <div class="row">
                <form class="">
                    <table>
                        <tr>
                            <td><label for="description">Position</label></td>
                            <td>
                                <select class="browser-default" name="description" id="position">
                                    @foreach($jobtype as $item)
                                        <option value="{{ $item['jobtypeid'] }}">{{ $item['description'] }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="location">Location</label> </td>
                            <td>

                                <select class="browser-default" name="location" id="location">
                                    @foreach($location as $loc)
                                        <option value="{{ $loc['regionid'] }}">{{ $loc['location'] }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="startdate"> Start date <strong class="black-text">(yyyy-m-d)</strong></label></td>
                            <td>
                                <select class="browser-default" name="year">
                                    <option value="" selected disabled>Year</option>
                                    <?php $count = 1 ?>
                                    @for($i = date('Y');20 > $count++; $i++)
                                        <option value="{{ $i }}"> {{ $i }}</option>
                                    @endfor
                                </select>
                                <select class="browser-default" name="month">
                                    <?php $month = array("January", "Febuary", "March", "April", "May", "June", "July", "August", "September","October", "November", "December"); ?>
                                        <option value="" selected disabled>Month</option>
                                    @foreach($month as $m)
                                        <option value="{{ $m }}">{{ $m }}</option>
                                    @endforeach
                                </select>
                                <select name="day"  class="browser-default">
                                    <option value="" selected disabled>Day</option>
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
                            <td><input type="text" name="salary" /> </td>
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
    @parent
    <script>
        $(document).ready(function() {

        });
    </script>
@stop