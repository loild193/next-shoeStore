@extends('layouts.master')

@section('login-register')

<div id="form">
    <form action="{{ route('users.store') }}" method="post">
      @csrf
      <h2>Register</h2> 
      <label>Name</label>
      <input type="text" name="name" placeholder="Name..."/></br>
      @if($errors->has('name'))
        <h3 style="color: red"> {{ $errors->first('name') }}</h3>
      @endif   
      <label>Email</label>
      <input type="text" name="email" placeholder="eg: abc@xyz.com"/></br>
      @if($errors->has('email'))
        <h3 style="color: red"> {{ $errors->first('email') }}</h3>
      @endif
      <label>Password</label>
      <input type="password" name="password" placeholder="Password..."/></br>
      @if($errors->has('password'))
        <h3 style="color: red"> {{ $errors->first('password') }}</h3>
      @endif
      <label>Confirmed password</label>
      <input type="password" name="password_confirmation" placeholder="Password..."/></br>
      @include('mainpage.form-error')
      <button type="submit">Sign Up</button>
    </form> 
  </div> 

@endsection