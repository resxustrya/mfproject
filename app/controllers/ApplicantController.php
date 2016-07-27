<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApplicantController
 *
 * @author Hp
 */
class ApplicantController extends BaseController {

    private $app;
    public function __construct() {

        $this->app = Applicants::find(Session::get('applicant')->appid);

        $this->beforeFilter(function() {
            if(! Session::has('applicant')) {
                return Redirect::to('user-login');
            }
        });
    }

    public function applicant_home() {
        return View::make('applicant.home')->with('app', $this->app);
    }
    public function applicant_profile() {
        return View::make('applicant.profile')->with('app', $this->app);
    }
    public function update_profile() {
      return View::make('applicant.update-profile')->with('app', $this->app);
    }
    public function handle_update() {

      $app = Applicants::find(Session::get('applicant')->appid);

        $app->fname = Input::get('fname');
        $app->lname = Input::get('lname');
        $app->address = Input::get('address');
        $app->birth = Input::get('bdate');
        $app->gender = Input::get('gender');
        $app->religion = Input::get('religion');
        $app->civilstatus = Input::get('status');
        $app->contactno = Input::get('contact');
        $app->nationality = Input::get('nationality');
        $app->pitch = Input::get('pitch');  

        if(Input::hasFile('picture')) {
            $filename = \Illuminate\Support\Facades\Input::file('picture')->getClientOriginalName();
            $path = base_path() . '/public/uploads/profile/';
            Input::file('picture')->move($path, $filename);
            $app->profilepic = $filename;
        }
        $app->save();
        return Redirect::to('applicant-home');
    }
    public function applicant_skill() {
        $skills = Skills::where('appid' ,'=', Session::get('applicant')->appid)->get();
        return View::make('applicant.skills')->with('skills', $skills);
    }
    public function add_skill() {
        return View::make('applicant-add-skill');
    }
    public function applicant_logout() {
       Session::forget('applicant');
       Session::flush();
       return Redirect::to('/');
    }
}
