@extends('layouts.main.master')

@section('title')
Register
@endsection

@section('csslink')
    <link rel="stylesheet" href="{{ asset('main/css/flexslider.css') }}" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,400,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
@endsection

@section('content')
      <!-- Main Container -->
  <section class="main-container col1-layout wow bounceInUp animated">
    <div class="main container">
      <div class="account-login">
        <div class="page-title">
          <h2>Login or Create an Account</h2>
        </div>
        <fieldset class="col2-set">
          <legend>Login or Create an Account</legend>
          <div class="col-1 new-users"><strong>Registered Customers</strong>
            <div class="content">
             <p>If you already have an account with us, please log in.</p>
              <div class="buttons-set">
              <a href="{{ route('login') }}">
                <button class="button login"><span>Login</span></button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-2 registered-users"><strong>New Customers</strong>
            <div class="content">
               <form method="POST" action="{{ route('doRegister') }}">
                {{ csrf_field() }}
              <p>Please fill out the following form with your credentials.</p>             
              @if (session('success'))
                <div class="alert alert-success  alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Congratulations! </strong> {{ session('success') }}
              </div>
              @endif
              
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <ul class="form-list">
                <li>
                  <label for="name">Name <span class="required">*</span></label>
                  <br>
                  <input type="text" 
                            title="Name" 
                            class="input-text" 
                            id="name"
                             value="" 
                             name="name"
                             required>
                </li>
                <li>
                  <label for="mobile">Mobile <span class="required">*</span></label>
                  <br>
                  <input type="text" 
                            title="Mobile Number" 
                            class="input-text" 
                            id="mobile"
                             value="" 
                             name="mobile"
                             required>
                </li>
                <li>
                  <label for="email">Email Address <span class="required">*</span></label>
                  <br>
                  <input type="email" 
                            title="Email Address" 
                            class="input-text" 
                            id="email"
                             value="" 
                             name="email"
                             required>
                </li>
                <li>
                  <label for="pass">Password <span class="required">*</span></label>
                  <br>
                  <input type="password" 
                            title="Password" 
                            id="pass" 
                            class="input-text" 
                            name="password"
                            required>
                </li>
                 <li>
                  <label for="pass">Confirm Password <span class="required">*</span></label>
                  <br>
                  <input type="password" 
                            title="Confirm Password" 
                            id="con_pass" 
                            class="input-text" 
                            name="password_confirmation"
                            required>
                </li>
              </ul>
              <p class="required">* Required Fields</p>
              <div class="buttons-set">
                <button id="send2" name="send" type="submit" class="button create-account"><span>Register</span></button>
                <a class="forgot-word" href="#">Forgot Your Password?</a> </div>
                </form>
            </div>
          </div>
        </fieldset>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </section>
  <!-- Main Container End -->
@endsection

@section('jslink')
    
@endsection


