@extends('layouts.master')

@section('login-register')

  <div id="form">
    <form action="{{ route('check') }}" enctype="multipart/form-data" method="POST">
      @csrf
      <h2>Login</h2> 
      <label>Email</label>
      <input type="text" name="email" placeholder="Email..."/></br>
      @if($errors->has('email'))
        <h3 style="color: red"> {{ $errors->first('email') }}</h3>
      @endif
      <label>Password</label>
      <input type="password" name="password" placeholder="Password..."/></br>
      @if($errors->has('password'))
        <h3 style="color: red"> {{ $errors->first('password') }}</h3>
      @endif
      <h3 style="color: red">{{ $emailWrong ?? '' }}</h3>
      <h3 style="color: red">{{ $passwordWrong ?? '' }}</h3>
      <button type="submit">Sign In</button>
      @include('form-error')        
    </form>
  </div>

@endsection