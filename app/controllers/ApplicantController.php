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

        $this->beforeFilter(function () {
            if (!Session::has('applicant')) {
                return Redirect::to('user-login');
            }
        });

        if(Session::has('applicant')) {
            $this->app = Applicants::find(Session::get('applicant')->appid);
        }
    }

    public function applicant_home() {
        return View::make('applicant.home')
                        ->with('app', $this->app)
                        ->with('jobtype', JobTypes::all())
                        ->with('location', Regions::all());
    }
    public function applicant_profile() {
        return View::make('applicant.profile')->with('app', $this->app);
    }
    public function update_profile() {
      return View::make('applicant.update')
                        ->with('app', $this->app)
                        ->with('location', Regions::all());
    }
    public function handle_update() {

      $app = Applicants::find(Session::get('applicant')->appid);

        $app->fname = Input::get('fname');
        $app->lname = Input::get('lname');
        $app->address = Input::get('address');
        $app->birth = Input::get('month')."/".Input::get('day')."/".Input::get('year');
        $app->gender = Input::get('gender');
        $app->religion = Input::get('religion');
        $app->civilstatus = Input::get('status');
        $app->contactno = Input::get('contact');
        $app->nationality = Input::get('nationality');
        $app->pitch = Input::get('pitch');
        $app->regionid = Input::get('location');

        if(Input::hasFile('profilepic')) {
            $filename = \Illuminate\Support\Facades\Input::file('profilepic')->getClientOriginalName();
            $path = base_path() . '/public/uploads/profile/';
            Input::file('profilepic')->move($path, $filename);
            $app->profilepic = $filename;
        }
        $app->save();
        return Redirect::to('applicant/profile')
                        ->with('message','Profile updated.');
    }
    public function applicant_skill() {
        $skills = Skills::where('appid' ,'=', Session::get('applicant')->appid)->get();
        return View::make('applicant.skills')->with('skills', $skills);
    }
    public function add_skill() {
        return View::make('applicant-add-skill');
    }
    public function application() {
        $application = Applications::where('appid','=', $this->app->appid)->get();

        if(isset($application) and count($application) > 0) {
            return View::make('applicant.application')
                            ->with('app', $this->app)
                            ->with('application', $application)
                            ->with('message','Job application created.');
        }

        return Redirect::to('applicant/create/application');
    }
    public function create_application() {
        return View::make('applicant.create-application')
            ->with('app', $this->app)
            ->with('location', Regions::all())
            ->with('jobtype', JobTypes::all());
    }

    public function handle_application() {
        $application = new Applications();

        $application->appid = $this->app->appid;
        $application->position  = Input::get('position');
        $application->salary = Input::get('salary');
        $application->jobtype = Input::get('jobtype');
        $application->regionid = Input::get('location');
        $application->nationality = Input::get('nationality');
        $application->pitch = Input::get('pitch');
        $application->edlevel = Input::get('edlevel');

        $application->save();

        return Redirect::to('applicant/application')
                        ->with('message', 'Job application created. Your job application is now published into the employers helpers matching.');
    }
    public function employer_ads() {
        return View::make('ads.ads')
                    ->with('ads', Ads::paginate(20))
                    ->with('app', $this->app)
                    ->with('jobtype',JobTypes::all())
                    ->with('location', Regions::all());
    }
    public function message() {
        return View::make('applicant.message')
                    ->with('app', $this->app);
    }
    public function applicant_logout() {
       Session::forget('applicant');
       Session::flush();
       return Redirect::to('/');
    }
}
