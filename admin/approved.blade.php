@extends('navbar.navbar')

@section('grievances')

<h2>Approved Grievances:</h2>
<br>


@if(count($grvs)>0)
    
        @foreach($grvs as $grv)
        
        <div class="container">
            <div class="panel panel-default">
                {{-- return ("hello"); --}}
              <div class="panel-heading" style="background-color:#0230C1; "><h3 style="color:white;"><a href="/grievances/{{$grv->id}}">{{$grv->subject}}</a></h3></div>
              <div class="panel-body"> <small>Received on : {{$grv->created_at}} 
            </small></div>
            </div>
          </div>
        @endforeach
        
    
@else
    
      <p>No Grievances Found</p> 
     
@endif



@endsection