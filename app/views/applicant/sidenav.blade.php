<div class="row">
   <div class="row">
      <div class="card-panel">
          <div class="row">
              <a href="{{ asset('applicant/profile') }}">
                  <img height="100px" width="140px" src="{{ asset('public/uploads/profile/'.(($app['profilepic']) != null ? $app['profilepic'] :'facebook.jpg' )) }}" />
                  <br /><br />
                  <span>{{ $app['fname']." ".$app['lname'] }}</span>
                  <br />
                  <strong>Applicant</strong>
              </a>
          </div>
      </div>
   </div>
    <div class="collection black-text">
        <a class="collection-item black-text" href="{{ asset('applicant/home') }}">Home</a>
        <a class="collection-item black-text" href="{{ asset('applicant/shortlist') }}">Shortlist</a>
        <a class="collection-item black-text" href="{{ asset('employer/job/request') }}">Employers request</a>
        <a class="collection-item black-text" href="{{ asset('applicant/messagebox') }}">Message box</a>
        <a class="collection-item black-text" href="{{ asset('applicant/application') }}">Job application</a>
        <a class="collection-item black-text" href="{{ asset('applicant/experience') }}">Experiences</a>
    </div>
</div>