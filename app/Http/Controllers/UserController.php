<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
      $this -> validate($request,[
        'personal_email' => 'required|email|unique:users',
        'first_name' => 'required|max:120',
        'last_name' => 'required|max:120',
        'home_contact' => 'required|max:20',
        'blood_group' => 'required|max:20',
        'password' => 'required|min:4'
        ]);
      $personal_email = $request['personal_email'];
      $first_name = $request['first_name'];
      $last_name = $request['last_name'];
      $home_contact = $request['home_contact'];
      $work_contact = $request['work_contact'];
      $blood_group = $request['blood_group'];
      $password = bcrypt($request['password']);

      $user = new User();
      $user->personal_email= $personal_email;
      $user->first_name= $first_name;
      $user->last_name= $last_name;
      $user->home_contact= $home_contact;
      $user->work_contact= $work_contact;
      $user->blood_group= $blood_group;
      $user->password = $password;

      $user->save();
      Auth::login($user);


      return redirect()->route('dashboard');
    }
    
    public function postSignIn(Request $request)
    {

      $this -> validate($request,[
        'personal_email' => 'required|email',
        'password' => 'required'
        ]);

      if (Auth::attempt(['personal_email' => $request['personal_email'], 'password' => $request['password']]))
      {
        return redirect()->route('dashboard');
      }
      return redirect()->back();
    }
    public function getDashboard()
    {
      return view('dashboard');
    }
    public function getsignupform()
    {
      return view('signupform');
    }
    public function getsigninform()
    {
      return view('signinform');
    }
    public function getAddressBook()
    {
      return view('addressbook');
    }
    public function getSearchContact()
    {
      return view('searchcontact');
    }
    public function getLogout()
    {
      return redirect()->route('home');
    }
    public function getHomepage()
    {
      return redirect()->route('home'); 
    }

}
