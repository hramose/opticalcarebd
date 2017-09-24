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

@endsection
