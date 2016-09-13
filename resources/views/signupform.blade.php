@extends('layout.master')

@section('title')
  Welcome!
@endsection
@section('page_heading')
<div class="col-md-3">
</div>
<div class="col-md-6" align="center">
  Sign Up For Creating Your Address Book
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
            <h3>Sign Up</h3>
            {{-- <form action="#" method="post"> --}}
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group">
                  <label for = "first_name">First Name :</label>
                  <input type="text" class="form-control" name="first_name" id="first_name" value="{{ Request::old('first_name')}}" placeholder="First Name">
                </div>
                <div class="form-group">
                  <label for = "last_name">Last Name :</label>
                  <input type="text" class="form-control" name="last_name" id="last_name" value="{{ Request::old('last_name')}}" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for = "contact_info">Contact Information :</label><br>
                  <div class="col-sm-offset-2">
                    <label for = "home">Home :</label>
                    <input type="text" class="form-control" name="home_contact" id="home_contact" value="{{ Request::old('home_contact')}}" placeholder="Phone Number">
                    <label for = "work">Work :</label>
                    <input type="text" class="form-control" name="work_contact" id="work_contact" value="{{ Request::old('work_contact')}}" placeholder="Phone Number">
                    <label for = "email">Personal Email Address :</label>
                    <input type="text" class="form-control" name="personal_email" id="personal_email" value="{{ Request::old('personal_email')}}" placeholder="Email Address">
                  </div>
                </div>
                <div class="form-group">
                  <label for = "blood_group">Please Select your Blood Group :</label>
                  <select class="form-control" name="blood_group" id="blood_group">
                    <option value="O Positive">O Positive</option>
                    <option value="A Positive">A Positive</option>
                    <option value="B Positive">B Positive</option>
                    <option value="AB Positive">AB Positive</option>
                    <option value="O Negative">O Negative</option>
                    <option value="A Negative">A Negative</option>
                    <option value="B Negative">B Negative</option>
                    <option value="AB Negative">AB Negative</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for = "password">Password :</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div>
                  <div class="col-md-12" align="center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                  </div>
                  
                  
                </div>
                
         </form>
        </div>
    <div class="col-md-3">
   </div>
  </div>
@endsection
