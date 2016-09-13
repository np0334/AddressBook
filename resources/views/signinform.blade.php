@extends('layout.master')

@section('title')
  Welcome!
@endsection
@section('page_heading')
<div class="col-md-3">
</div>
<div class="col-md-6" align="center">
  Login
</div>
<div class="col-md-3">
</div>

@endsection

@section('content')
@if(count($errors) > 0)
  <div class="row">
    <div class="col-md-6">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
      
    </div>
    
  </div>
@endif
  <div class="row">
      <div class="col-md-12">  
      </div>
  </div>
      <div class="row">
         <div class="col-md-3">
         </div>
         <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
            {{-- <form action="#" method="post"> --}}
              <div class="form-group">
                <label for = "email">Email Address :</label>
                <input type="text" class="form-control" name="personal_email" id="personal_email" value="{{ Request::old('personal_email')}}" placeholder="Email Address">
              </div>
              <div class="form-group">
                <label for = "password">Password :</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              </div>
              <div>
                  <div class="col-md-12" align="center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
              </div>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    <div class="col-md-3">
   </div>
  </div>


@endsection
