<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Users\LoginRequest;
use App\Http\Requests\Users\RegisterRequest;

class UserController extends Controller
{

  // register
  public function store(RegisterRequest $request) {
    User::create($request->all());
    
    return redirect()->route('welcome', ['message' => $request->name]);
  }

  // check login
  public function check(LoginRequest $request) {
    if (User::where('email', $request->email)->count() == 0) {
      return view('users.userLogin', ['emailWrong' => 'Email khong ton tai!']);
    }
    $users = User::where('email', $request->email)->get();
    foreach ($users as $user) {
      if ($user->password == $request->password) {
        return view('main', ['message' => $user->name]);
      }
      else {
        return view('users.userLogin', ['passwordWrong' => 'Password sai!']);
      }
    }
    // if ($user->password == $request->password) {
    //   return view('welcome');
    // }
    // return view('welcome');
  }
}
