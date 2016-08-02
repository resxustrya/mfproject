


<?php

class EmployerController extends BaseController {

    private $emp;
    public function __construct() {
        $id = Session::get('employer');

        $this->emp = Employers::find($id['empid']);

         $this->beforeFilter(function() {
            if(! Session::has('employer')) {
                return Redirect::to('user-login');
            }
        });
    }

    public function employer_home() {
      $app = Applicants::paginate(2);
      $ads = Ads::paginate(2);
      return View::make('employer.home')->with('emp', $this->emp)
                    ->with('app', $app)
                    ->with('ads',$ads);
    }

    public function employer_profile() {
        return View::make('employer.profile')->with('emp',$this->emp);
    }
    public function update_profile() {
      return View::make('employer.update')->with('emp', $this->emp);
    }
    public function handle_update() {

        $emp = Employers::find($this->emp->empid);
        $emp->fname = Input::get('fname');
        $emp->lname = Input::get('lname');
        $emp->address = Input::get('address');
        $emp->birth = Input::get('bdate');
        $emp->gender = Input::get('gender');
        $emp->religion = Input::get('religion');
        $emp->civilstatus = Input::get('status');
        $emp->contactno = Input::get('contactno');
        $emp->nationality = Input::get('nationality');
        $emp->location = Input::get('location');
        $emp->pitch = Input::get('pitch');

        if(Input::hasFile('picture')) {
            $filename = \Illuminate\Support\Facades\Input::file('profilepic')->getClientOriginalName();
            $path = base_path() . '/public/uploads/profile/';
            Input::file('profilepic')->move($path, $filename);
            $emp->profilepic = $filename;
        }

        $emp->save();

        return Redirect::to('employer-home');
    }
    public function job_ads() {

        $ads = Ads::where('empid', '=', $this->emp->empid)->get();
        $duties = Duties::where('empid', '=', $this->emp->empid);
        return View::make('employer.ads')
                    ->with('emp', $this->emp)
                    ->with('ads',$ads)
                    ->with('duties', $duties);
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
        $ads->location = Input::get('location');
        $ads->startdate = Input::get('year') .'-' . Input::get('month') .'-' .Input::get('day');
        $ads->capacity = Input::get('capacity');
        $ads->salary =Input::get('salary');
        $ads->gender = Input::get('gender');
        $ads->edlevel = Input::get('edlevel');
        $ads->jobtype = Input::get('jobtype');
        $ads->contractyears = Input::get('contractyears');
        $ads->save();

        $duties->cooking = Input::get('cooking');
        $duties->laundry = Input::get('laundry');
        $duties->gardening = Input::get('gardening');
        $duties->grocery = Input::get('grocery');
        $duties->cleaning = Input::get('tuturing');
        $duties->other = Input::get('other');

        $duties->save();

        return Redirect::to('employer/ads');

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
}
