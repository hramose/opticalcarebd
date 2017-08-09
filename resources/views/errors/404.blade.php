@extends('layouts.main.master')

@section('content')
     <!-- Main Container -->
  <section class="content-wrapper bounceInUp animated">
    <div class="container">
      <div class="std">
        <div class="page-not-found">
          <h2>404</h2>
          <h3><img src="{{ asset('main/images/signal.png') }}" alt="error image">Oops! The Page you requested was not found! </h3>
          <h1>{{ $exception->getMessage() }}</h1>
          <div><a href="{{ route('home') }}" class="btn-home"><span>Back To Home</span></a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Container End -->
  <div class="top-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner1">
            <div class="top-b-text"><strong>Designer Shoes</strong> For Women</div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col free-shipping"><strong>Free Shipping</strong> on order over $199</div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner2">
            <div class="top-b-text"><strong>Luxury Handbags</strong>2015 New Arrive</div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col last offer"><strong>New Collection</strong> Lorem ipsum.</div>
        </div>
      </div>
    </div>
  </div>
  <!-- end banner section -->
@endsection
