@extends('layouts.app')
@section('page-title','Blue Water Staffing')
@section('content')
  <section class="hero is-light is-fullheight-with-navbar">
    <div class="hero-body">
      <div class="container">
        <div class="columns">
          <div class="column is-3">
            <img src="{{asset('/images/main-logo.png')}}" alt="">
          </div>
          <div class="column is-1">

          </div>
          <div class="column">
            <div class="title">
              Our Vision
            </div>
            <div class="subtitle">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="hero is-primary is-medium has-image-overlay">
      <div class="banner-overlay" style="background-image:url('/images/landing/placeholder-1.jpg');opacity:.1;"></div>
      <div class="hero-body">
        <div class="container">
          <div class="title">
            Software
          </div>
          <div class="subtitle">
            Blue Water Staffing utilizes Avionte as our software partner. The Avionte system is scalable, and cloud
based. This enables all our data to be secure and accessible anywhere and at any time. Avionte also
provides electronic timekeeping and approval to ensure accurate billing.
          </div>
        </div>
      </div>
    </div>
  </section>
