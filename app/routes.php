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
        return Redirect::to('applicant-profile');
    }
    if(Session::has('employer')) {
        return Redirect::to('employer-profile');
    }

    return View::make('semantic.landing');
});

Route::get('user-login', function() {
    if(Session::has('employer')) {
        return Redirect::to('employer-profile');
    }
    if(Session::has('applicant')) {
        return Redirect::to('applicant-profile');
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

Route::get('employer-home', 'EmployerController@employer_home');
Route::get('employer-profile', 'EmployerController@employer_profile');
Route::get('employer-logout','EmployerController@employer_logout');
Route::get('employer-update', 'EmployerController@update_profile');
Route::post('employer-update', 'EmployerController@handle_update');
Route::get('employer-ads', 'EmployerController@job_ads');
Route::get('create-ads', 'EmployerController@create_ads');
Route::get('helpers', 'EmployerController@helpers');


/*
 *
 *
 *  APPLICANT ACCOUNTS ROUTES
 *
 *
 */
Route::get('applicant-home', 'ApplicantController@applicant_home');
Route::get('applicant-profile','ApplicantController@applicant_profile');
Route::get('applicant-logout', 'ApplicantController@applicant_logout');
Route::get('applicant-update', 'ApplicantController@update_profile');
Route::post('applicant-update', 'ApplicantController@handle_update');
Route::get('applicant-skill', 'ApplicantController@applicant_skill');


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
    return Applicants::where('email', '=', Input::get('email'))
                        ->where('password','=', Input::get('password'))
                        ->get();
});

Route::get('api/job/create', function() {
    $ads = new Ads();
    $ads->description = Input::get('description');
    $ads->location = Input::get('location');
    $ads->save();
    return "New ads created";
});
Route::get('api/job/retrieve', function() {

});
Route::get('api/job/update', function() {

});
Route::get('api/job/delete', function() {

});


