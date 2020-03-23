@extends('layouts.master')

@section('login-register')

<div id="form">
    <form action="{{ route('users.store') }}" method="post">
      @csrf
      <h2>Register</h2> 
      <label>Name</label>
      <input type="text" name="name" placeholder="Name..."/></br>   
      <label>Email</label>
      <input type="text" name="email" placeholder="Email..."/></br>
      <label>Password</label>
      <input type="password" name="password" placeholder="Password..."/></br>
      <button type="submit">Sign Up</button>
    </form>
  </div> 

@endsection