


<?php

class EmployerController extends BaseController {

    private $emp;
    public function __construct() {

        $this->beforeFilter(function () {
            if (!Session::has('employer')) {
                return Redirect::to('user-login');
            }
        });
        if(Session::has('employer')) {
            $this->emp = Employers::find(Session::get('employer')->empid);
        }
    }

    public function employer_home() {
      $app = Applicants::paginate(2);
      $ads = Ads::paginate(2);
      return View::make('employer.home')->with('emp', $this->emp)
                    ->with('app', $app)
                    ->with('ads',$ads);
    }
    public function employer_profile() {

        $location = Regions::where('regionid', '=',$this->emp->regionid)->first();

        return View::make('employer.profile')
                        ->with('emp',$this->emp)
                        ->with('location', $location);
    }
    public function update_profile() {
        $region = Regions::all();
      return View::make('employer.update')
                    ->with('emp', $this->emp)
                    ->with('location', $region);
    }
    public function handle_update() {

        $emp = Employers::find($this->emp->empid);
        $emp->fname = Input::get('fname');
        $emp->lname = Input::get('lname');
        $emp->address = Input::get('address');
        $emp->bdate = Input::get('month')."/".Input::get('day')."/".Input::get('year');
        $emp->gender = Input::get('gender');
        $emp->religion = Input::get('religion');
        $emp->civilstatus = Input::get('status');
        $emp->contactno = Input::get('contactno');
        $emp->nationality = Input::get('nationality');
        $emp->regionid = Input::get('location');
        $emp->pitch = Input::get('pitch');

        if(Input::hasFile('profilepic')) {
            $filename = \Illuminate\Support\Facades\Input::file('profilepic')->getClientOriginalName();
            $path = base_path() . '/public/uploads/profile/';
            Input::file('profilepic')->move($path, $filename);
            $emp->profilepic = $filename;
        }

        $emp->save();

        return Redirect::to('employer/profile')
                        ->with('message', 'Profile updated.');
    }
    public function job_ads() {

        $ads = Ads::where('empid', '=', $this->emp->empid)->first();
        if(isset($ads) and count($ads) >0) {

            $dayof =  array('Monday', 'Tuesday', 'Wednesday','Thursday', 'Friday','Saturday','Sunday');
            $edlevel = array("Elementary", "High School", "College graduate");

            $duties = Duties::where('empid', '=', $this->emp->empid)->first();
            $jobtype = JobTypes::where('jobtypeid', '=', $ads->jobtypeid)->first();
            $location = Regions::where('regionid', '=', $ads->regionid)->first();
            return View::make('employer.ads')
                        ->with('emp', $this->emp)
                        ->with('ads', $ads)
                        ->with('duties', $duties)
                        ->with('jobtype', $jobtype)
                        ->with('location', $location)
                        ->with('dayof', $dayof[$ads->dayof])
                        ->with('edlevel',$edlevel[$ads->edlevel] );
        }
        return Redirect::to('create/ad');
    }
    public function create_ads() {
        $jobtype = JobTypes::all();
        $location = Regions::all();
        return View::make('employer.create-ad')
                    ->with('emp', $this->emp)
                    ->with('jobtype', $jobtype)
                    ->with('location', $location);
    }

    public function new_ads() {
        $ads = new Ads();
        $duties = new Duties();
        $ads->empid = $this->emp->empid;
        $ads->regionid = Input::get('location');
        $ads->startdate = Input::get('year') .'-' . Input::get('month') .'-' .Input::get('day');
        $ads->capacity = Input::get('capacity');
        $ads->salary =Input::get('salary');
        $ads->gender = Input::get('gender');
        $ads->dayof = Input::get('dayof');
        $ads->edlevel = Input::get('edlevel');
        $ads->jobtypeid = Input::get('jobtype');
        $ads->contractyears = Input::get('contractyears');
        $ads->pitch = Input::get('pitch');
        $ads->save();

        $duties->empid = $this->emp->empid;
        $duties->cooking = Input::get('cooking');
        $duties->laundry = Input::get('laundry');
        $duties->gardening = Input::get('gardening');
        $duties->grocery = Input::get('grocery');
        $duties->cleaning = Input::get('cleaning');
        $duties->tuturing = Input::get('tutoring');
        $duties->other = Input::get('other');

        $duties->save();

        return Redirect::to('employer/ads')
                        ->with('message','New job ad created');

    }
    public function update_ads() {
        $duties = Duties::where('empid', '=', $this->emp->empid)->first();
        if(isset($duties)) {
            Session::put('dutyid', $duties->dutyid);
        }
        $ads = Ads::where('empid','=', $this->emp->empid)->first();
        if(isset($ads)) {
            Session::put('adid', $ads->adid);
        }
        return View::make('employer.update-ad')
                    ->with('emp', $this->emp)
                    ->with('location', Regions::all())
                    ->with('duties',$duties)
                    ->with('ads', $ads)
                    ->with('jobtype', JobTypes::all());
    }
    public function handle_ad_update() {
        $ads = Ads::find(Session::get('adid'))->first();
        $duties = Duties::find(Session::get('dutyid'))->first();

        $ads->regionid = Input::get('location');
        $ads->startdate = Input::get('year') .'-' . Input::get('month') .'-' .Input::get('day');
        $ads->capacity = Input::get('capacity');
        $ads->salary =Input::get('salary');
        $ads->gender = Input::get('gender');
        $ads->dayof = Input::get('dayof');
        $ads->edlevel = Input::get('edlevel');
        $ads->jobtypeid = Input::get('jobtype');
        $ads->contractyears = Input::get('contractyears');
        $ads->pitch = Input::get('pitch');
        $ads->save();


        $duties->cooking = Input::get('cooking');
        $duties->laundry = Input::get('laundry');
        $duties->gardening = Input::get('gardening');
        $duties->grocery = Input::get('grocery');
        $duties->cleaning = Input::get('cleaning');
        $duties->tuturing = Input::get('tutoring');
        $duties->other = Input::get('other');

        $duties->save();

        return Redirect::to('employer/ads')
                        ->with('message', 'Job ad is updated.');

    }
    public function helpers() {
        $app = Applicants::paginate(20);
        return View::make('hiring.helpers')
                    ->with('app', $app)
                    ->with('emp', $this->emp);
    }
    public function message_inbox() {
        return View::make('employer.message-inbox')->with('emp', $this->emp);
    }
    public function job_request() {
        return View::make('employer.job-request')->with('emp', $this->emp);
    }
    public function employer_logout() {

      Session::forget('employer');
      Session::flush();
      return Redirect::to('/');
    }
    public function display_records() {
      $ads = new Ads();
    }
}
