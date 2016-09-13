@extends('layout.master')

@section('title')
  Home Page!
@endsection
@section('styling')
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
@endsection

@section('page_heading')

    <div class="navbar-header">
      <a class="navbar-brand" href="#">Address Book</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('signupform') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{ route('signinform') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
   
@endsection
@section('content')

@endsection


