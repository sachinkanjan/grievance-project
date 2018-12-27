@extends('navbar.navbar')

@section('grievances')

<h2>New Grievances:</h2>

@if(count($grvs)>0)
    
        @foreach($grvs as $grv)
        
        <div class="container">
            <div class="panel panel-default">
                {{-- return ("hello"); --}}
              <div class="panel-heading" style="background-color:#0230C1; "><h3 style="color:white;"><a href="/grievances/{{$grv->id}}">{{$grv->subject}}</a></h3></div>
              <div class="panel-body"> <small>Received on : {{$grv->created_at}} <a href="/grievances/app/{{$grv->id}}" type="button" class="btn btn-success" style="float:right;">Approve</a>
             <button type="button" class="btn btn-danger" style="float:right; margin-right:50px "> <a href="/grievances/app/rej/{{$grv->id}}" type="button"  style="float:right;">Reject</a></button></small></div>
            </div>
          </div>
        @endforeach
        
    
@else
    
      <p>No Grievances Found</p> 
     
@endif



@endsection
