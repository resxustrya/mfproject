<div class="row">
   <div class="row">
      <div class="card-panel ">
          <div class="row">
              <a  href="{{ asset('employer/profile') }}">
                  <img height="150px" width="150px" src="{{ asset('public/uploads/profile/'.(($emp['profilepic']) != null ? $emp['profilepic'] :'facebook.jpg' )) }}" />
                  <br /><br />
                  <span class="black-text">{{ $emp['fname']." ".$emp['lname'] }}</span>
                  <br />
                  <strong class="black-text">Employer</strong>
              </a>
          </div>
      </div>
   </div>
    <div class="collection black-text">
        <a class="collection-item black-text" href="{{ asset('employer/home') }}">Home</a>
        <a class="collection-item black-text" href="{{ asset('employer/shortlist') }}">Shortlist</a>
        <a class="collection-item black-text" href="{{ asset('job/request') }}">Job request</a>
        <a class="collection-item black-text" href="{{ asset('employer/message/inbox') }}">Message box</a>
        <a class="collection-item black-text" href="{{ asset('employer/ads') }}">Publish job ads</a>
    </div>
</div>