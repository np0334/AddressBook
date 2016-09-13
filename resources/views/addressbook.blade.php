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
  document.getElementById("layout-content").innerHTML='<object width="100%" height="1500px" data="addressbook_sidenav/home.html" ></object>';
}
function load_friends()
{
  document.getElementById("layout-content").innerHTML='<object width="100%" height="1500px" data="addressbook_sidenav/friends.html" ></object>';
}
function load_family()
{
  document.getElementById("layout-content").innerHTML='<object width="100%" height="1500px" data="addressbook_sidenav/family.html" ></object>';
}
function load_work()
{
  document.getElementById("layout-content").innerHTML='<object width="100%" height="1500px" data="addressbook_sidenav/work.html" ></object>';
}
@endsection
@section('page_heading')
	<div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="dashboard">Home</a></li>
      <li><a href="searchcontact">Search Contact</a></li>
      <li><a href="#">Sync</a></li>
      <li><a href="#">Help </a></li>
      <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
@endsection
@section('content')
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Name's Address Book</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="#" onclick="load_home()">All Contacts</a></li>
        <li><a href="#" onclick="load_friends()">Friends</a></li>
        <li><a href="#" onclick="load_family()">Family</a></li>
        <li><a href="#" onclick="load_work()">Work</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Contact..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9" id="layout-content">
      <div>
       <h3><a href="#"><span class="glyphicon glyphicon-sort-by-alphabet"></span></a>
       <a href="#"><span class="glyphicon glyphicon-sort-by-alphabet-alt"></span></a></h3>
      </div>
      <hr>
      <div class="table-responsive">
        <table class="table table-hover">
  	    <thead>
  	      <tr>
  	        <th>Contacts...</th>
  	      </tr>
  	    </thead>
  	    <tbody>
  	      <tr>
  	        <td><a href="#" data-toggle="collapse" data-target="#info1">John Doe</a>
              <div id="info1" class="collapse">
                Name:FirstName LastName<br>
                Email Address: EmailAddress<br> 
                Contact Info: W: 1234567890 H: 1111111111<br>
                Blood Group: AB Positive
              </div>
            </td>
            <td align="right"> <button type="button" class="btn btn-primary">Edit</button></td>
          </tr>
          <tr>
            <td><a href="#" data-toggle="collapse" data-target="#info1">John Doe</a>
              <div id="info1" class="collapse">
                Name:FirstName LastName<br>
                Email Address: EmailAddress<br> 
                Contact Info: W: 1234567890 H: 1111111111<br>
                Blood Group: AB Positive
              </div>
            </td>
            <td align="right"><button type="button" class="btn btn-primary">Edit</button></td>
          </tr>
          <tr>
            <td><a href="#" data-toggle="collapse" data-target="#info1">John Doe</a>
              <div id="info1" class="collapse">
                Name:FirstName LastName<br>
                Email Address: EmailAddress<br> 
                Contact Info: W: 1234567890 H: 1111111111<br>
                Blood Group: AB Positive
              </div>
            </td>
            <td align="right"><button type="button" class="btn btn-primary">Edit</button></td>
          </tr>
          <tr>
            <td><a href="#" data-toggle="collapse" data-target="#info1">John Doe</a>
              <div id="info1" class="collapse">
                Name:FirstName LastName<br>
                Email Address: EmailAddress<br> 
                Contact Info: W: 1234567890 H: 1111111111<br>
                Blood Group: AB Positive
              </div>
            </td>
            <td align="right"><button type="button" class="btn btn-primary">Edit</button></td>
          </tr>
  	    </tbody>
  	   </table>
      </div>
      <hr>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>
@endsection