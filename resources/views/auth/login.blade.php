@extends('layouts.main.master')

@section('title')
Login
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
          <div class="col-1 new-users"><strong>New Customers</strong>
            <div class="content">
              <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
              <div class="buttons-set">
              <a href="">
                <button class="button create-account"><span>Create an Account</span></button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-2 registered-users"><strong>Registered Customers</strong>
            <div class="content">
               <form method="POST" action="{{ route('doLogin') }}">
               {{ csrf_field() }}
              <p>If you have an account with us, please log in.</p>
                @if (session('success'))
                    <div class="alert alert-success  alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Congratulations! </strong> {{ session('success') }}
                  </div>
              @endif
              @if (session('error'))
                    <div class="alert alert-danger  alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Oh snap! </strong> {{ session('error') }}
                  </div>
              @endif
              <ul class="form-list">
                <li>
                  <label for="email">Email Address <span class="required">*</span></label>
                  <br>
                  <input type="email" 
                            title="Email Address" 
                            class="input-text" 
                            id="email" 
                            value="{{ old('email') }}"
                            name="email">
                </li>
                <li>
                  <label for="pass">Password <span class="required">*</span></label>
                  <br>
                  <input type="password" 
                            title="Password" 
                            id="pass" 
                            class="input-text" 
                            name="password">
                </li>
                <li>
                  <input type="checkbox" 
                            title="Remember Me" 
                            id="remember_me"
                            name="remember_me">
                   <label for="remember_me">Remember Me</label>
                </li>
              </ul>
              <p class="required">* Required Fields</p>
              <div class="buttons-set">
                <button id="send2"
                             name="send" 
                             type="submit" 
                             class="button login">
                             <span>Login</span></button>
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


