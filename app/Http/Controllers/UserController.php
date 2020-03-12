<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

  // register
  public function store(Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ]);

    User::create($request->all());
    
    return view('welcome');
  }

  // check login
  public function check(Request $request) {
    if (User::where('email', $request->email)->count() == 0) {
      return 'Sai email';
    }
    $users = User::where('email', $request->email)->get();
    foreach ($users as $user) {
      if ($user->password == $request->password) {
        return view('welcome');
      }
      else {
        return 'Sai password';
      }
    }
    // if ($user->password == $request->password) {
    //   return view('welcome');
    // }
    // return view('welcome');
  }
}
