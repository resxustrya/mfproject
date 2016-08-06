
@extends('applicant.layout')

@section('css')

@stop

@section('content')
    <div class="row">
        <h4>Create new job application</h4>
        <div class="card-panel ">
            <p style="border-radius: 10px;" class="card-panel amber lighten-5">
                Your job application will be display upon the employer is finding a match. Make your job application eye catching so you can be hired directly.
            </p>
            <form action="{{ asset('applicant/create/application') }}" method="POST" enctype="multipart/form-data">
                {{ Form::token() }}
                <div class="row">
                    <table>
                        <tr>
                            <td><label for="fname">Job position</label> </td>
                            <td>
                                <select name="position" class="browser-default">
                                    @foreach($jobtype as $position)
                                        <option value="{{ $position['description'] }}">{{ $position['description'] }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="salary">Expected salary</label> </td>
                            <td>
                                <input type="text" name="salary" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="jobtype">Job type</label></td>
                            <td>
                                <select name="jobtype" class="browser-default">
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="location">Preffered job location</label> </td>
                            <td>
                                <select name="location" class="browser-default">
                                    @foreach($location as $loc)
                                        <option value="{{ $app['location'] }} {{ ( $app['location'] == $loc ? 'selected' :'') }}">{{ $loc['location'] }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="edlevel">Education level</label> </td>
                            <td>
                                <select name="edlevel" class="browser-default">
                                    <option value="Elementary">Elementary</option>
                                    <option value="High School">High School</option>
                                    <option value="College">College</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="nationality">Nationality</label> </td>
                            <td><input  class="browser-default" type="text" name="nationality" value="{{ isset($app['nationality']) ? $app['nationality'] : '' }}" /> </td>
                        </tr>
                        <tr>
                            <td><label for="pitch">Say something about you job ad</label> </td>
                            <td>
                                <textarea id="textarea1" rows="7" name="pitch" class="materialize-textarea"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <h5>Support your appliction with your skills and experience</h5>
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

@stop