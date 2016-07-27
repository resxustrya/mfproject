


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
      $app = Applicants::paginate(4);
      return View::make('employer.home')->with('emp', $this->emp)->with('app', $app);
    }

    public function employer_profile() {
        return View::make('employer.profile')->with('emp',$this->emp);
    }
    public function update_profile() {
      return View::make('employer.update-profile')->with('emp', $this->emp);
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
        $emp->contactno = Input::get('contact');
        $emp->nationality = Input::get('nationality');
        $emp->pitch = Input::get('pitch');

        if(Input::hasFile('picture')) {
            $filename = \Illuminate\Support\Facades\Input::file('picture')->getClientOriginalName();
            $path = base_path() . '/public/uploads/profile/';
            Input::file('picture')->move($path, $filename);
            $emp->profilepic = $filename;
        }

        $emp->save();

        return Redirect::to('employer-home');
    }
    public function job_ads() {

        $ads = JobAds::where('empid', '=', $this->emp->empid);
        return View::make('employer.jobads')
                    ->with('emp', $this->emp)
                    ->with('ads',$ads);
    }

    public function create_ads() {
        return View::make('employer.create-job');
    }
    public function helpers() {
        $app = Applicants::all();
        return View::make('hiring.helpers')->with('app', $app);
    }
    public function employer_logout() {

      Session::forget('employer');
      Session::flush();
      return Redirect::to('/');
    }
}
