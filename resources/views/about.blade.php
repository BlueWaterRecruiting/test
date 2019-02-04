@extends('layouts.app')
@section('page-title','About - Blue Water Staffing')

@section('content')
  <section class="hero is-primary is-fullheight-with-navbar">
    <div class="hero-body">
      <div class="container">
        <div class="title">
          About {{config('app.name')}}
        </div>
      </div>
    </div>
  </section>
@endsection
