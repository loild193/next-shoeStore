@extends('layouts.master')

@section('login-register')

  <div id="form">
    <form action="{{ route('check') }}" enctype="multipart/form-data" method="POST">
      @csrf
      <h2>Login</h2> 
      <label>Email</label>
      <input type="text" name="email" placeholder="Email..."/></br>
      <label>Password</label>
      <input type="password" name="password" placeholder="Password..."/></br>
      <h3 style="color: red">{{ $emailWrong ?? '' }}</h3>
      <h3 style="color: red">{{ $passwordWrong ?? '' }}</h3>
      <button type="submit">Sign In</button>           
    </form>
  </div>

@endsection