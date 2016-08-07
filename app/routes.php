<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

    if(Session::has('applicant')) {
        return Redirect::to('applicant/home');
    }
    if(Session::has('employer')) {
        return Redirect::to('employer/home');
    }

    return View::make('semantic.landing');
});

Route::get('user-login', function() {
    if(Session::has('employer')) {
        return Redirect::to('employer/home');
    }
    if(Session::has('applicant')) {
        return Redirect::to('applicant/home');
    }
    return View::make('account.login');
});
Route::post('user-login', 'AccountController@handleLogin');

/*
 *
 * REGISTRATION ROUTES
 *
 */

Route::get('user-register', function () {
   return View::make('account.register');
});

Route::post('user-register', 'AccountController@next');

Route::get('employer', 'AccountController@employer_account');
Route::get('applicant', 'AccountController@applicant_account');
/*
 *
 * EMPLOYER ACCOUNTS ROUTES
 *
 */

Route::get('employer/home', 'EmployerController@employer_home');
Route::get('employer/profile', 'EmployerController@employer_profile');
Route::get('employer/logout','EmployerController@employer_logout');
Route::get('employer/update', 'EmployerController@update_profile');
Route::post('employer/update', 'EmployerController@handle_update');
Route::get('employer/ads', 'EmployerController@job_ads');
Route::get('create/ad', 'EmployerController@create_ads');
Route::post('create/ad','EmployerController@new_ads');
Route::get('update/ad', 'EmployerController@update_ads');
Route::post('update/ad', 'EmployerController@handle_ad_update');
Route::get('helpers', 'EmployerController@helpers');
Route::get('employer/message/inbox', 'EmployerController@message_inbox');


/*
 *
 *
 *  APPLICANT ACCOUNTS ROUTES
 *
 *
 */
Route::get('applicant/home', 'ApplicantController@applicant_home');
Route::get('applicant/profile','ApplicantController@applicant_profile');
Route::get('applicant/logout', 'ApplicantController@applicant_logout');
Route::get('applicant/update', 'ApplicantController@update_profile');
Route::post('applicant/update', 'ApplicantController@handle_update');
Route::get('applicant/skills', 'ApplicantController@applicant_skill');
Route::get('applicant/messagebox','ApplicantController@message');
Route::get('applicant/application', 'ApplicantController@application');
Route::get('applicant/create/application', 'ApplicantController@create_application');
Route::post('applicant/create/application', 'ApplicantController@handle_application');
Route::get('employers/job/ads', 'ApplicantController@employer_ads');

/*
 *
 * ADMIN ROUTES
 */


Route::get('site-admin', function(){
   return View::make('admin.site-admin');
});

Route::post('site-admin', function() {
   $admin = Admin::where('email', '=', Input::get('email'))
           ->where('password', '=' ,Input::get('password'))
           ->first();
   if($admin and ($admin->email == Input::get('email') and $admin->password == Input::get('password'))) {
       Session::put('admin', true);
       Session::put('admindata', $admin);
       return Redirect::to('site-admin/profile');
   }
   return Redirect::to('site-admin');
});
Route::get('site-admin/profile','AdminController@dashboard');
Route::get('site-admin/logout', 'AdminController@logout');



/*
 *
 * TEST ROUTES
 *
 *
 */

Route::get('upload', function() {
    return View::make('upload');
});
Route::post('upload' , function() {
   $emp = Employers::find(Session::get('employer')->empid);
    return $emp->fname;
});


Route::get('api/employer', function() {
    return Employers::all();
});

Route::get('api/login', function() {
    $app =  Applicants::where('email', '=', Input::get('email'))
                ->where('password','=', Input::get('password'))
                ->get();

    if(count($app)) {
        return $app;
    }

    $emp =  Employers::where('email', '=', Input::get('email'))
                    ->where('password','=', Input::get('password'))
                    ->get();

    if(count($emp)) {
        return $emp;
    }

    return ["Invalid email and password"];

});

Route::get('api/job/create', function() {
    $job = new Jobs();
    $job->description = Input::get('description');
    $job->location = Input::get('location');
    $job->save();
    return ["New record created"];
});
Route::get('api/job/retrieve/{id}', function($id) {
    $job = Jobs::find($id);
    return $job;

});
Route::get('api/job/update/{id}', function($id) {
    $job = Jobs::find($id);
    $job->description = Input::get('description');
    $job->location = Input::get('location');
    $job->save();

    return $id . " is updated";
});
Route::get('api/job/delete/{id}', function($id) {
    $job = Jobs::find($id);
    $job->delete();
    return $id ." is deleted";
});

/*
 *
 * DASHBAORD ROUTES
 *
 */

Route::get('add/create', function() {
    $ad = new Ads();
    $ad->empid = 1;
    $ad->description = "Nanny";
    $ad->location = "Davao City";
    $ad->save();
    return "New ads record is created";
});

Route::get('jobtype/add', function() {
    $type = new JobTypes();
    $type->description = Input::get('description');
    $type->save();
    return "new records created";
});

Route::get('region/add', function() {
    $region = new Regions();
    $region->location = Input::get('location');
    $region->save();

    return "New region added";
});

Route::get('base/path', function() {
    $path = base_path().'/public/uploads/profile/facebook.jpg';

    return $path;
});
