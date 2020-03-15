<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\LoginRequest;

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
    
    return redirect()->route('welcome', ['message' => $request->name]);
  }

  // check login
  public function check(LoginRequest $request) {
    if (User::where('email', $request->email)->count() == 0) {
      return view('userLogin', ['emailWrong' => 'Email khong ton tai!']);
    }
    $users = User::where('email', $request->email)->get();
    foreach ($users as $user) {
      if ($user->password == $request->password) {
        return view('welcome', ['message' => $user->name]);
      }
      else {
        return view('userLogin', ['passwordWrong' => 'PAssword sai!']);
      }
    }
    // if ($user->password == $request->password) {
    //   return view('welcome');
    // }
    // return view('welcome');
  }
}
