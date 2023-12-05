@extends('layouts.app')
@section('title', 'Netflix')
<link rel="stylesheet" href="css/login.css">
@section('contenu')

    <br>
    <br>
    <br>


    <div class="login-box">
        
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="user-box">
            <input type="email" name="email">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password">
            <label>Mot de passe</label>
          </div>
          <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button id="btn">Submit</button>
          </a>
        </form>
      </div>



      <!--//FIXME:-->

      <br>
      <br>
      <br> 
      <br>
      <br>
      <br> 
      <br>
      <br>
      <br> 
      <br>
      <br>
      <br> 
      <br>
      <br>
      <br> 
      <br>
      <br>
      <br> 
      <br>
      <br>
      <br> 
      <br>
      <br>
      <br> 
      <br>
      <br>
      <br> 
      <br>
      <br>
      <br>


@endsection