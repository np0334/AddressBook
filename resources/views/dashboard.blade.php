@extends('layout.master')
@section('styling')
	/* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
@endsection
@section('scripting')
function load_home()
{
	document.getElementById("layout-content").innerHTML='<object width="100%" height="1500px" data="dashboard_sidenav/home.html" ></object>';
}
function load_friends()
{
	document.getElementById("layout-content").innerHTML='<object width="100%" height="1500px" data="dashboard_sidenav/friends.html" ></object>';
}
function load_family()
{
	document.getElementById("layout-content").innerHTML='<object width="100%" height="1500px" data="dashboard_sidenav/family.html" ></object>';
}
function load_work()
{
  document.getElementById("layout-content").innerHTML='<object width="100%" height="1500px" data="dashboard_sidenav/work.html" ></object>';
}
@endsection
@section('page_heading')
	<div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="addressbook">Address Book</a></li>
      <li><a href="searchcontact">Search Contact</a></li>
      <li><a href="#">Sync</a></li>
      <li><a href="#">Help </a></li>
      <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row content">
    <div class="col-md-3 sidenav">
      <h4>Neha's Timeline</h4>
      <ul class="nav nav-pills nav-stacked">
        <li id="home" class=""><a href="#" onclick="load_home()">Home</a></li>
        <li><a href="#" onclick="load_friends()">Friends</a></li>
        <li><a href="#" onclick="load_family()">Family</a></li>
        <li><a href="#" onclick="load_work()">Work</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Timeline..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-md-9" id="layout-content">
      <h4><small>RECENT POSTS</small></h4>
      <hr>
      <h2> Jane Dane wants to add you in her address book</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 10, 2016.</h5>
      <h5><span class="label label-danger">Decline</span> <span class="label label-primary">Accept</span></h5><br>
      <p>Hi Neha, Can you please allow me to add you in my Address Book</p>
      <br>
      <hr>
      <h2>John Doe Accepted your request</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 07, 2016.</h5>
      <h5><span class="label label-success">New Contact</span> <span class="label label-primary">Send Message</span></h5><br>
      <p>New Contact added to your address Book</p>
      <table class="table">
	    <thead>
	      <tr>
	        <th>First name</th>
	        <th>Last name</th>
	        <th>Work no</th>
	        <th>Home no</th>
	        <th>Email</th>
	        <th>Blood Group</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td>John</td>
	        <td>Doe</td>
	        <td>0456789230</td>
	        <td>0387654397</td>
	        <td>john@example.com</td>
	        <td>AB Positive</td>
	      </tr>
	    </tbody>
	   </table>
      <hr>
      
   </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>
@endsection