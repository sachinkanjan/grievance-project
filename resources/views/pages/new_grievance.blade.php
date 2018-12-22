@extends ('layouts.app')

     @section('content')
     <h1>Grievence Form</h1>
        {!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
        <div class="form-group">

            {{Form::label('category','Category')}}
            <br>
            {{Form::select('category', ['1' => 'Category 1', '2' => ' Category 2','3' => ' Category 3'],['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('subject','Subject')}}
            {{Form::text('subject','',['class'=>'form-control','placeholder'=>'Subject'])}}
        </div>
        <div class="form-group">
                {{Form::label('description','Grievance Report')}}
                {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Grievance Report'])}}

        </div>

        {{ Form::submit('Submit',['class'=>'btn btn-primary'])}}

           
      
        
        {!! Form::close() !!}
     
     @endsection
 