<div class="row">
   <div class="row">
    <div class="col s12 m12 l12">
      <a  class="center" href="{{ asset('employer/profile') }}">
          <img class="circle" id="rightimage" src="{{ asset('public/uploads/profile/'.(($emp['profilepic']) != null ? $emp['profilepic'] :'facebook.jpg' )) }}" />
          <br />
          <span style="padding-left: 30px;" class="black-text">{{ $emp['fname']." ".$emp['lname'] }}</span>
      </a>
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
